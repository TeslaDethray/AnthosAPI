<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ScientificName Entity.
 *
 * @property int $id
 * @property string $kingdom
 * @property string $phylum
 * @property string $class
 * @property string $order
 * @property string $family
 * @property string $genus
 * @property string $species
 * @property \Cake\I18n\Time $created_at
 * @property \Cake\I18n\Time $updated_at
 * @property \App\Model\Entity\Plant[] $plants
 */
class ScientificName extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];
}
