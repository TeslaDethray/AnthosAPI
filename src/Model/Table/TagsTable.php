<?php
namespace App\Model\Table;

use App\Model\Entity\Tag;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tags Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Bouquets
 * @property \Cake\ORM\Association\BelongsToMany $Definitions
 * @property \Cake\ORM\Association\BelongsToMany $Plants
 */
class TagsTable extends Table {

  /**
   * Initialize method
   *
   * @param array $config The configuration for the Table.
   * @return void
   */
  public function initialize(array $config) {
    parent::initialize($config);

    $this->table('tags');
    $this->displayField('id');
    $this->primaryKey('id');

    $this->belongsToMany(
      'Bouquets',
      [
        'foreignKey' => 'tag_id',
        'targetForeignKey' => 'bouquet_id',
        'joinTable' => 'bouquets_tags'
      ]
    );
    $this->belongsToMany(
      'Definitions',
      [
        'foreignKey' => 'tag_id',
        'targetForeignKey' => 'definition_id',
        'joinTable' => 'definitions_tags'
      ]
    );
    $this->belongsToMany(
      'Plants',
      [
        'foreignKey' => 'tag_id',
        'targetForeignKey' => 'plant_id',
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

    $validator->allowEmpty('tag');

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
