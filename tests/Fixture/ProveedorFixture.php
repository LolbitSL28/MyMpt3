<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProveedorFixture
 */
class ProveedorFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'proveedor';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'Id_Prov' => 1,
                'Nombre_Prov' => 'Lorem ipsum dolor sit amet',
                'Telefono_Prov' => 1,
                'Direccion_Prov' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
