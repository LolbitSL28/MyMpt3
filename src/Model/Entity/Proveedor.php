<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Proveedor Entity
 *
 * @property int $Id_Prov
 * @property string $Nombre_Prov
 * @property int $Telefono_Prov
 * @property string $Direccion_Prov
 */
class Proveedor extends Entity
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
        'Nombre_Prov' => true,
        'Telefono_Prov' => true,
        'Direccion_Prov' => true,
    ];
}
