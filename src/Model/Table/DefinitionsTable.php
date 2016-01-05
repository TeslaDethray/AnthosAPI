<?php
namespace App\Model\Table;

use App\Model\Entity\Definition;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Definitions Model
 *
 * @property \Cake\ORM\Association\HasMany $Attributions
 * @property \Cake\ORM\Association\BelongsToMany $Tags
 */
class DefinitionsTable extends Table {

  /**
    * Initialize method
    *
    * @param array $config The configuration for the Table.
    * @return void
    */
  public function initialize(array $config) {
    parent::initialize($config);

    $this->table('definitions');
    $this->displayField('definition');
    $this->primaryKey('id');

    $this->hasMany(
      'Attributions',
      ['foreignKey' => 'definition_id']
    );
    $this->belongsToMany(
      'Tags',
      [
        'foreignKey' => 'definition_id',
        'targetForeignKey' => 'tag_id',
        'joinTable' => 'definitions_tags'
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

    $validator->allowEmpty('definition');

    $validator->allowEmpty('subdefinition');

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
