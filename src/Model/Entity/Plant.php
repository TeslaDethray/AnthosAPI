<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Plant Entity.
 *
 * @property int $id
 * @property string $common_name
 * @property string $color
 * @property string $type
 * @property string $variety
 * @property int $seasonality
 * @property float $vase_life
 * @property float $difficulty
 * @property string $notes
 * @property \Cake\I18n\Time $created_at
 * @property \Cake\I18n\Time $updated_at
 * @property int $scientific_name_id
 * @property \App\Model\Entity\ScientificName $scientific_name
 * @property \App\Model\Entity\Attribution[] $attributions
 * @property \App\Model\Entity\Bouquet[] $bouquets
 * @property \App\Model\Entity\Tag[] $tags
 */
class Plant extends Entity {

  /**
    * Fields that can be mass assigned using newEntity() or patchEntity().
    *
    * Note that when '*' is set to true, this allows all unspecified fields to
    * be mass assigned. For security purposes, it is advised to set '*' to false
    * (or remove it), and explicitly make individual fields accessible as
    * needed.
    *
    * @var array
    */
  protected $_accessible = [
    '*' => true,
    'id' => false,
  ];
}
