<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Statuses Model
 *
 * @property \App\Model\Table\WorkflowsTable&\Cake\ORM\Association\HasMany $Workflows
 * @property \App\Model\Table\AffectationsTable&\Cake\ORM\Association\HasMany $Affectations
 *
 * @method \App\Model\Entity\Status newEmptyEntity()
 * @method \App\Model\Entity\Status newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Status> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Status get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Status findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Status patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Status> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Status|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Status saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Status>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Status>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Status>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Status> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Status>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Status>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Status>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Status> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class StatusesTable extends Table
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

        $this->setTable('statuses');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Workflows', [
            'foreignKey' => 'status_id',
        ]);

        $this->hasMany('Affectations', [
            'foreignKey' => 'state',
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
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('createdby')
            ->maxLength('createdby', 45)
            ->requirePresence('createdby', 'create')
            ->notEmptyString('createdby');

        $validator
            ->scalar('modifiedby')
            ->maxLength('modifiedby', 45)
            ->requirePresence('modifiedby', 'create')
            ->notEmptyString('modifiedby');

        $validator
            ->boolean('deleted')
            ->notEmptyString('deleted');

        return $validator;
    }
}
