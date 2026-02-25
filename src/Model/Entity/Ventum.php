<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Ventum Entity
 *
 * @property int $Id_Venta
 * @property int $Id_Producto
 * @property int $Cantidad
 * @property \Cake\I18n\FrozenTime $Fecha
 * @property string $Nombre_Empl
 * @property string $Oferta
 * @property string $Descuento
 * @property float $Precio_Total
 */
class Ventum extends Entity
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
        'Id_Producto' => true,
        'Cantidad' => true,
        'Fecha' => true,
        'Nombre_Empl' => true,
        'Oferta' => true,
        'Descuento' => true,
        'Precio_Total' => true,
    ];
}
