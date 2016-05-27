<?php
namespace App\Model\Table;

use App\Model\Entity\Result;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Results Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Lessons
 * @property \Cake\ORM\Association\BelongsTo $Words
 * @property \Cake\ORM\Association\BelongsTo $Answers
 */
class ResultsTable extends Table
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

        $this->table('results');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Lessons', [
            'foreignKey' => 'lesson_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Words', [
            'foreignKey' => 'word_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Answers', [
            'foreignKey' => 'answer_id',
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
        $rules->add($rules->existsIn(['lesson_id'], 'Lessons'));
        $rules->add($rules->existsIn(['word_id'], 'Words'));
        $rules->add($rules->existsIn(['answer_id'], 'Answers'));
        return $rules;
    }
}
