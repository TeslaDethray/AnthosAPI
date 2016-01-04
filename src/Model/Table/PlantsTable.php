<?php
namespace App\Model\Table;

use App\Model\Entity\Plant;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Plants Model
 *
 * @property \Cake\ORM\Association\BelongsTo $ScientificNames
 * @property \Cake\ORM\Association\HasMany $Attributions
 * @property \Cake\ORM\Association\BelongsToMany $Bouquets
 * @property \Cake\ORM\Association\BelongsToMany $Tags
 */
class PlantsTable extends Table {

  /**
    * Initialize method
    *
    * @param array $config The configuration for the Table.
    * @return void
    */
  public function initialize(array $config) {
    parent::initialize($config);

    $this->table('plants');
    $this->displayField('common_name');
    $this->primaryKey('id');

    $this->belongsTo(
      'ScientificNames',
      ['foreignKey' => 'scientific_name_id']
    );
    $this->hasMany(
      'Attributions',
      ['foreignKey' => 'plant_id']
    );
    $this->belongsToMany(
      'Bouquets',
      [
        'foreignKey' => 'plant_id',
        'targetForeignKey' => 'bouquet_id',
        'joinTable' => 'bouquets_plants'
      ]
    );
    $this->belongsToMany(
      'Tags',
      [
        'foreignKey' => 'plant_id',
        'targetForeignKey' => 'tag_id',
        'joinTable' => 'plants_tags'
      ]
    );
  }

  /**
    * Default validation rules.
    *
    * @param \Cake\Validation\Validator $validator Validator instance.
    * @return \Cake\Validation\Validator
    */
  public function validationDefault(Validator $validator) {
    $validator->add(
      'id',
      'valid',
      ['rule' => 'numeric']
    )->allowEmpty('id', 'create');

    $validator->allowEmpty('common_name');

    $validator->allowEmpty('color');

    $validator->allowEmpty('type');

    $validator->allowEmpty('variety');

    $validator->add(
      'seasonality',
      'valid',
      ['rule' => 'numeric']
    )->allowEmpty('seasonality');

    $validator->add(
      'vase_life',
      'valid',
      ['rule' => 'numeric']
    )->allowEmpty('vase_life');

    $validator->add(
      'difficulty',
      'valid',
      ['rule' => 'numeric']
    )->allowEmpty('difficulty');

    $validator->allowEmpty('notes');

    $validator->add(
      'created_at',
      'valid',
      ['rule' => 'datetime']
    )->allowEmpty('created_at');

    $validator->add(
      'updated_at',
      'valid',
      ['rule' => 'datetime']
    )->allowEmpty('updated_at');

    return $validator;
  }

  /**
    * Returns a rules checker object that will be used for validating
    * application integrity.
    *
    * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
    * @return \Cake\ORM\RulesChecker
    */
  public function buildRules(RulesChecker $rules) {
    $rules->add(
      $rules->existsIn(
        ['scientific_name_id'],
        'ScientificNames'
      )
    );
    return $rules;
  }

}
