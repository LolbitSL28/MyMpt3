<?php

declare(strict_types=1);

namespace App\Controller;
use Cake\I18n\FrozenTime;

/**
 * Venta Controller
 *
 * @property \App\Model\Table\VentaTable $Venta
 * @method \App\Model\Entity\Ventum[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class VentaController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $venta = $this->paginate($this->Venta);

        $this->set(compact('venta'));
    }

    /**
     * View method
     *
     * @param string|null $id Ventum id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ventum = $this->Venta->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('ventum'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ventum = $this->Venta->newEmptyEntity();

        $this->loadModel('Producto');

        $productos = $this->Producto->find('all')
            ->where(['Cant_Prod >' => 0])
            ->order(['Nombre_Prod' => 'ASC']);

        $productosList = [];
        foreach ($productos as $producto) {
            $productosList[$producto->Id_Producto] = $producto->Nombre_Prod . ' - $' . number_format($producto->Precio, 2) . ' (Stock: ' . $producto->Cant_Prod . ')';
        }

                $opcionesOferta = [
            '' => '-- Sin oferta --',
            '10%' => '10% de descuento',
            '20%' => '20% de descuento',
            '30%' => '30% de descuento',
            '2x1' => '2x1 (Lleva 2 paga 1)',
            '3x2' => '3x2 (Lleva 3 paga 2)'
        ];

        $calculos = [
            'subtotal' => 0,
            'descuento_oferta' => 0,
            'descuento_adicional' => 0,
            'total' => 0,
            'producto' => null,
            'cantidad' => 0,
            'precio_unitario' => 0,
            'mostrar_resultados' => false
        ];

            if ($this->request->is('post')) {
        

        if ($this->request->getData('calcular')) {
            $data = $this->request->getData();
            

            if (empty($data['Id_Producto'])) {
                $this->Flash->error('Debe seleccionar un producto');
            } else {

                $producto = $this->Producto->get($data['Id_Producto']);
                $cantidad = (int)$data['Cantidad'];
                

                if ($cantidad > $producto->Cant_Prod) {
                    $this->Flash->error('Solo hay ' . $producto->Cant_Prod . ' unidades disponibles');
                } else {

                    $precio = $producto->Precio;
                    $subtotal = $precio * $cantidad;
                    
                    $descuentoOferta = 0;
                    $oferta = $data['Oferta'] ?? '';
                    
                    switch($oferta) {
                        case '10%':
                            $descuentoOferta = $subtotal * 0.10;
                            break;
                        case '20%':
                            $descuentoOferta = $subtotal * 0.20;
                            break;
                        case '30%':
                            $descuentoOferta = $subtotal * 0.30;
                            break;
                        case '2x1':
                            if ($cantidad >= 2) {
                                $unidadesPagadas = ceil($cantidad / 2);
                                $totalConOferta = $precio * $unidadesPagadas;
                                $descuentoOferta = $subtotal - $totalConOferta;
                            }
                            break;
                        case '3x2':
                            if ($cantidad >= 3) {
                                $unidadesPagadas = ceil($cantidad * 2/3);
                                $totalConOferta = $precio * $unidadesPagadas;
                                $descuentoOferta = $subtotal - $totalConOferta;
                            }
                            break;
                    }
                    

                    $descuentoAdicional = (float)($data['Descuento'] ?? 0);
                    

                    $total = $subtotal - $descuentoOferta - $descuentoAdicional;
                    

                    $calculos = [
                        'subtotal' => $subtotal,
                        'descuento_oferta' => $descuentoOferta,
                        'descuento_adicional' => $descuentoAdicional,
                        'total' => $total,
                        'producto' => $producto,
                        'cantidad' => $cantidad,
                        'precio_unitario' => $precio,
                        'mostrar_resultados' => true
                    ];
                    

                    $this->request = $this->request->withData('Id_Producto', $data['Id_Producto']);
                    $this->request = $this->request->withData('Cantidad', $cantidad);
                    $this->request = $this->request->withData('Oferta', $oferta);
                    $this->request = $this->request->withData('Descuento', $descuentoAdicional);
                    $this->request = $this->request->withData('Nombre_Empl', $data['Nombre_Empl'] ?? '');
                }
            }
        }
        
                if ($this->request->getData('guardar')) {
            $data = $this->request->getData();
            

            if (empty($data['Id_Producto'])) {
                $this->Flash->error('Debe seleccionar un producto');
            } else {

                $producto = $this->Producto->get($data['Id_Producto']);
                

                if ($data['Cantidad'] > $producto->Cant_Prod) {
                    $this->Flash->error('Stock insuficiente');
                } else {

                    $ventum = $this->Venta->newEmptyEntity();
                    $ventum->Id_Producto = $data['Id_Producto'];
                    $ventum->Cantidad = $data['Cantidad'];
                    $ventum->Fecha = FrozenTime::now();
                    $ventum->Nombre_Empl = $data['Nombre_Empl'];
                    $ventum->Oferta = $data['Oferta'] ?? '';
                    $ventum->Descuento = $data['Descuento'] ?? 0;
                    $ventum->Precio_Total = $data['Precio_Total'];
                    
                    if ($this->Venta->save($ventum)) {

                        $producto->Cant_Prod = $producto->Cant_Prod - $data['Cantidad'];
                        $this->Productos->save($producto);
                        
                        $this->Flash->success('Venta registrada correctamente');
                        return $this->redirect(['action' => 'index']);
                    } else {
                        $this->Flash->error('Error al registrar la venta');
                    }
                }
            }
        }
    }
            $this->set(compact('ventum', 'productosList', 'opcionesOferta', 'calculos'));
        
        /*
        if ($this->request->is('post')) {
        $ventum = $this->Venta->patchEntity($ventum, $this->request->getData());
            if ($this->Venta->save($ventum)) {
                $this->Flash->success(__('The ventum has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ventum could not be saved. Please, try again.'));
        }
        $this->set(compact('ventum'));*/
    }

    /**
     * Edit method
     *
     * @param string|null $id Ventum id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ventum = $this->Venta->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ventum = $this->Venta->patchEntity($ventum, $this->request->getData());
            if ($this->Venta->save($ventum)) {
                $this->Flash->success(__('The ventum has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ventum could not be saved. Please, try again.'));
        }
        $this->set(compact('ventum'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ventum id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ventum = $this->Venta->get($id);
        if ($this->Venta->delete($ventum)) {
            $this->Flash->success(__('The ventum has been deleted.'));
        } else {
            $this->Flash->error(__('The ventum could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
