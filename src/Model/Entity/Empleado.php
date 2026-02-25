<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Empleado Entity
 *
 * @property int $Id_Empleado
 * @property string $Nombre_Empl
 * @property string $Rol_Empl
 * @property int $Telefono_Empl
 * @property string $Direccion_Empl
 * @property float $Sueldo_Empl
 * @property int $Id_Usuario
 */
class Empleado extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'Nombre_Empl' => true,
        'Rol_Empl' => true,
        'Telefono_Empl' => true,
        'Direccion_Empl' => true,
        'Sueldo_Empl' => true,
        'Id_Usuario' => true,
    ];
}
