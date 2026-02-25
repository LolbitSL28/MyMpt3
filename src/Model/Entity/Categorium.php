<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Categorium Entity
 *
 * @property int $Id_Categoria
 * @property string $Nombre_Cat
 * @property string $Descripcion_Cat
 */
class Categorium extends Entity
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
        'Descripcion_Cat' => true,
    ];
}
