<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Workflows Model
 *
 * @property \App\Model\Table\StatusesTable&\Cake\ORM\Association\BelongsTo $Statuses
 * @property \App\Model\Table\RolesTable&\Cake\ORM\Association\BelongsTo $Roles
 *
 * @method \App\Model\Entity\Workflow newEmptyEntity()
 * @method \App\Model\Entity\Workflow newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Workflow> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Workflow get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Workflow findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Workflow patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Workflow> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Workflow|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Workflow saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Workflow>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Workflow>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Workflow>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Workflow> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Workflow>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Workflow>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Workflow>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Workflow> deleteManyOrFail(iterable $entities, array $options = [])
 */
class WorkflowsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('workflows');
        $this->setDisplayField('product');
        $this->setPrimaryKey('id');

        $this->belongsTo('Statuses', [
            'foreignKey' => 'status_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Roles', [
            'foreignKey' => 'roles_id',
            'joinType' => 'INNER',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('status_id')
            ->notEmptyString('status_id');

        $validator
            ->integer('roles_id')
            ->notEmptyString('roles_id');

        $validator
            ->integer('steps')
            ->requirePresence('steps', 'create')
            ->notEmptyString('steps');

        $validator
            ->scalar('product')
            ->maxLength('product', 15)
            ->requirePresence('product', 'create')
            ->notEmptyString('product');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['status_id'], 'Statuses'), ['errorField' => 'status_id']);
        $rules->add($rules->existsIn(['roles_id'], 'Roles'), ['errorField' => 'roles_id']);

        return $rules;
    }
}
