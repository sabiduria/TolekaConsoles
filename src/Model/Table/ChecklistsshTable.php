<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Checklistssh Model
 *
 * @method \App\Model\Entity\Checklistssh newEmptyEntity()
 * @method \App\Model\Entity\Checklistssh newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Checklistssh> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Checklistssh get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Checklistssh findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Checklistssh patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Checklistssh> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Checklistssh|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Checklistssh saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Checklistssh>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Checklistssh>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Checklistssh>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Checklistssh> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Checklistssh>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Checklistssh>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Checklistssh>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Checklistssh> deleteManyOrFail(iterable $entities, array $options = [])
 */
class ChecklistsshTable extends Table
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

        $this->setTable('checklistssh');
        $this->setDisplayField('bus');
        $this->setPrimaryKey('id');
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
            ->scalar('bus')
            ->maxLength('bus', 50)
            ->requirePresence('bus', 'create')
            ->notEmptyString('bus');

        $validator
            ->date('datechecking')
            ->requirePresence('datechecking', 'create')
            ->notEmptyDate('datechecking');

        $validator
            ->scalar('typecontrole')
            ->maxLength('typecontrole', 100)
            ->requirePresence('typecontrole', 'create')
            ->notEmptyString('typecontrole');

        $validator
            ->integer('iduser')
            ->requirePresence('iduser', 'create')
            ->notEmptyString('iduser');

        $validator
            ->dateTime('date')
            ->requirePresence('date', 'create')
            ->notEmptyDateTime('date');

        return $validator;
    }
}
