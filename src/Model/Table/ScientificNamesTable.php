<?php
namespace App\Model\Table;

use App\Model\Entity\ScientificName;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ScientificNames Model
 *
 * @property \Cake\ORM\Association\HasMany $Plants
 */
class ScientificNamesTable extends Table {

  /**
    * Initialize method
    *
    * @param array $config The configuration for the Table.
    * @return void
    */
  public function initialize(array $config) {
      parent::initialize($config);

      $this->table('scientific_names');
      $this->displayField('id');
      $this->primaryKey('id');

      $this->hasMany(
        'Plants',
        ['foreignKey' => 'scientific_name_id']
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

      $validator->allowEmpty('kingdom');

      $validator->allowEmpty('phylum');

      $validator->allowEmpty('class');

      $validator->allowEmpty('order');

      $validator->allowEmpty('family');

      $validator->allowEmpty('genus');

      $validator->allowEmpty('species');

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

}
