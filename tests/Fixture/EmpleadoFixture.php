<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EmpleadoFixture
 */
class EmpleadoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'empleado';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'Id_Empleado' => 1,
                'Nombre_Empl' => 'Lorem ipsum dolor sit amet',
                'Rol_Empl' => 'Lorem ipsum dolor sit a',
                'Telefono_Empl' => 1,
                'Direccion_Empl' => 'Lorem ipsum dolor sit amet',
                'Sueldo_Empl' => 1,
                'Id_Usuario' => 1,
            ],
        ];
        parent::init();
    }
}
