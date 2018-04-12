<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Kings Model
 *
 * @property \App\Model\Table\ApplicantsTable|\Cake\ORM\Association\BelongsTo $Applicants
 *
 * @method \App\Model\Entity\King get($primaryKey, $options = [])
 * @method \App\Model\Entity\King newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\King[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\King|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\King patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\King[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\King findOrCreate($search, callable $callback = null, $options = [])
 */
class KingsTable extends Table
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

        $this->setTable('kings');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Applicants', [
            'foreignKey' => 'applicant_id',
            'joinType' => 'INNER'
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->date('day')
            ->requirePresence('day', 'create')
            ->notEmpty('day');

        $validator
            ->integer('n_votes')
            ->requirePresence('n_votes', 'create')
            ->notEmpty('n_votes');

        $validator
            ->requirePresence('winner', 'create')
            ->notEmpty('winner');

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
        $rules->add($rules->existsIn(['applicant_id'], 'Applicants'));

        return $rules;
    }
}
