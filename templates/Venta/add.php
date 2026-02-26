<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ventum $ventum
 */


// Opciones de oferta
$opcionesOferta = [
    '' => '-- Sin oferta --',
    '10%' => '10% de descuento',
    '20%' => '20% de descuento',
    '30%' => '30% de descuento',
    '2x1' => '2x1 (Lleva 2 paga 1)',
    '3x2' => '3x2 (Lleva 3 paga 2)'
];
?>

<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Acciones') ?></h4>
            <?= $this->Html->link(__('Lista de Ventas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    
    <div class="column-responsive column-80">
        <div class="venta form content">
            <h3><?= __('Registrar Nueva Venta') ?></h3>
            
            <?= $this->Form->create($ventum) ?>
            
            <fieldset>
                <legend><?= __('Datos de la Venta') ?></legend>
                
                <div class="form-group">
                    <?= $this->Form->control('Nombre_Empl', [
                        'label' => 'Nombre del Empleado',
                        'required' => true,
                        'class' => 'form-control',
                        'value' => $this->request->getData('Nombre_Empl')
                    ]) ?>
                </div>
                
                <div class="product-selection" style="background: #f5f5f5; padding: 20px; margin: 20px 0; border-radius: 8px; border: 1px solid #ddd;">
                    <h4 style="margin-top: 0; color: #333;"><?= __('1. Seleccionar Producto') ?></h4>
                    
                    <div style="display: flex; gap: 20px; flex-wrap: wrap;">
                        <div style="flex: 2; min-width: 300px;">
                            <?= $this->Form->control('Id_Producto', [
                                'options' => $productosList,
                                'empty' => '-- Seleccione un producto --',
                                'label' => 'Producto',
                                'required' => true,
                                'class' => 'form-control',
                                'id' => 'producto-select',
                                'value' => $this->request->getData('Id_Producto')
                            ]) ?>
                        </div>
                        
                        <div style="flex: 1; min-width: 150px;">
                            <?= $this->Form->control('Cantidad', [
                                'type' => 'number',
                                'min' => 1,
                                'label' => 'Cantidad',
                                'required' => true,
                                'class' => 'form-control',
                                'id' => 'cantidad',
                                'value' => $this->request->getData('Cantidad') ?: 1
                            ]) ?>
                        </div>
                    </div>
                    
                    <div style="margin-top: 15px;">
                        <?= $this->Form->button(__('Calcular Total'), [
                            'name' => 'calcular',
                            'value' => '1',
                            'class' => 'button primary',
                            'style' => 'background: #fc3eb5; color: white; border: none; border-radius: 4px; cursor: pointer;'
                        ]) ?>
                    </div>
                </div>
                
                <?php if (isset($calculos['mostrar_resultados']) && $calculos['mostrar_resultados']): ?>
                <div class="info-producto" style="background: #e8f4f8; padding: 15px; margin: 20px 0; border-left: 4px solid #3498db; border-radius: 4px;">
                    <h4 style="margin-top: 0; color: #2c3e50;"><?= __('Información del Producto') ?></h4>
                    
                    <table style="width: 100%;">
                        <tr>
                            <td><strong>Producto:</strong></td>
                            <td><?= h($calculos['producto']->Nombre_Prod) ?></td>
                        </tr>
                        <tr>
                            <td><strong>Marca:</strong></td>
                            <td><?= h($calculos['producto']->Marca) ?></td>
                        </tr>
                        <tr>
                            <td><strong>Precio Unitario:</strong></td>
                            <td>$<?= number_format($calculos['precio_unitario'], 2) ?></td>
                        </tr>
                        <tr>
                            <td><strong>Stock Disponible:</strong></td>
                            <td><?= $calculos['producto']->Cant_Prod ?></td>
                        </tr>
                    </table>
                </div>
                <?php endif; ?>
                
                <div class="oferta-section" style="background: #f5f5f5; padding: 20px; margin: 20px 0; border-radius: 8px; border: 1px solid #ddd;">
                    <h4 style="margin-top: 0; color: #333;"><?= __('2. Ofertas y Descuentos') ?></h4>
                    
                    <div style="display: flex; gap: 20px; flex-wrap: wrap;">
                        <div style="flex: 1; min-width: 250px;">
                            <?= $this->Form->control('Oferta', [
                                'options' => $opcionesOferta,
                                'label' => 'Seleccionar Oferta',
                                'empty' => false,
                                'class' => 'form-control',
                                'value' => $this->request->getData('Oferta')
                            ]) ?>
                        </div>
                        
                        <div style="flex: 1; min-width: 200px;">
                            <?= $this->Form->control('Descuento', [
                                'type' => 'number',
                                'step' => '0.01',
                                'min' => 0,
                                'label' => 'Descuento adicional ($)',
                                'class' => 'form-control',
                                'value' => $this->request->getData('Descuento') ?: 0
                            ]) ?>
                        </div>
                    </div>
                </div>
                
                <?php if (isset($calculos['mostrar_resultados']) && $calculos['mostrar_resultados']): ?>
                <div class="totales-calculados" style="background: #e8f8f0; padding: 20px; margin: 20px 0; border-radius: 8px; border: 2px solid #27ae60;">
                    <h4 style="margin-top: 0; color: #27ae60;"><?= __('3. Resumen de la Venta') ?></h4>
                    
                    <table style="width: 100%; max-width: 400px; font-size: 1.1em;">
                        <tr>
                            <td><strong>Subtotal:</strong></td>
                            <td style="text-align: right;">$<?= number_format($calculos['subtotal'], 2) ?></td>
                        </tr>
                        <?php if ($calculos['descuento_oferta'] > 0): ?>
                        <tr>
                            <td><strong>Descuento por oferta:</strong></td>
                            <td style="text-align: right; color: #e74c3c;">-$<?= number_format($calculos['descuento_oferta'], 2) ?></td>
                        </tr>
                        <?php endif; ?>
                        <?php if ($calculos['descuento_adicional'] > 0): ?>
                        <tr>
                            <td><strong>Descuento adicional:</strong></td>
                            <td style="text-align: right; color: #e74c3c;">-$<?= number_format($calculos['descuento_adicional'], 2) ?></td>
                        </tr>
                        <?php endif; ?>
                        <tr style="border-top: 2px solid #27ae60; font-size: 1.3em; font-weight: bold;">
                            <td>TOTAL A PAGAR:</td>
                            <td style="text-align: right; color: #27ae60;">$<?= number_format($calculos['total'], 2) ?></td>
                        </tr>
                    </table>
                    
                    <?= $this->Form->hidden('Precio_Total', ['value' => $calculos['total']]) ?>
                </div>
                <?php else: ?>
                <?= $this->Form->hidden('Precio_Total', ['value' => 0]) ?>
                <?php endif; ?>
                
                <?= $this->Form->hidden('Fecha', ['value' => date('Y-m-d H:i:s')]) ?>
                
            </fieldset>
            
            <div class="form-actions" style="margin-top: 10px; display: flex; gap: 10px;">
                <?= $this->Form->button(__('Registrar Venta'), [
                    'name' => 'guardar',
                    'value' => '1',
                    'class' => 'button primary',
                    'style' => 'background: #27ae60; color: white; border: none; border-radius: 4px; cursor: pointer;'
                ]) ?>
                
                <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], [
                    'class' => 'button',
                    'style' => 'background: #7f8c8d; color: white; border: none; border-radius: 4px;'
                ]) ?>
            </div>
            
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
