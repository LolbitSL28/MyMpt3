<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * VentaFixture
 */
class VentaFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'venta';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'Id_Venta' => 1,
                'Id_Producto' => 1,
                'Cantidad' => 1,
                'Fecha' => '2022-11-19 09:55:07',
                'Nombre_Empl' => 'Lorem ipsum dolor sit amet',
                'Oferta' => 'Lorem ipsum dolor sit amet',
                'Descuento' => 'Lorem ipsum dolor sit amet',
                'Precio_Total' => 1,
            ],
        ];
        parent::init();
    }
}
