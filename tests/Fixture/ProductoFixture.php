<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProductoFixture
 */
class ProductoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'producto';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'Id_Producto' => 1,
                'Id_Categoria' => 1,
                'Nombre_Prod' => 'Lorem ipsum dolor sit amet',
                'Descripcion_Producto' => 'Lorem ipsum dolor sit amet',
                'Marca' => 'Lorem ipsum dolor sit amet',
                'Cant_Prod' => 1,
                'Precio' => 1,
                'Id_Prov' => 1,
            ],
        ];
        parent::init();
    }
}
