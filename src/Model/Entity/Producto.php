<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Producto Entity
 *
 * @property int $Id_Producto
 * @property string $Nombre_Cat
 * @property string $Nombre_Prod
 * @property string $Descripcion_Producto
 * @property string $Marca
 * @property int $Cant_Prod
 * @property int $Precio
 * @property string $Nombre_Prov
 */
class Producto extends Entity
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
        'Nombre_Cat' => true,
        'Nombre_Prod' => true,
        'Descripcion_Producto' => true,
        'Marca' => true,
        'Cant_Prod' => true,
        'Precio' => true,
        'Nombre_Prov' => true,
    ];
}
