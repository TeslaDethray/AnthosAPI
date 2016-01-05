<?php
namespace App\Model\Table;

use App\Model\Entity\Attribution;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Attributions Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Plants
 * @property \Cake\ORM\Association\BelongsTo $Definitions
 * @property \Cake\ORM\Association\BelongsTo $Sources
 */
class AttributionsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('attributions');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Plants', [
            'foreignKey' => 'plant_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Definitions', [
            'foreignKey' => 'definition_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Sources', [
            'foreignKey' => 'source_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');

        $validator
            ->add('created_at', 'valid', ['rule' => 'datetime'])
            ->allowEmpty('created_at');

        $validator
            ->add('updated_at', 'valid', ['rule' => 'datetime'])
            ->allowEmpty('updated_at');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['plant_id'], 'Plants'));
        $rules->add($rules->existsIn(['definition_id'], 'Definitions'));
        $rules->add($rules->existsIn(['source_id'], 'Sources'));
        return $rules;
    }
}
