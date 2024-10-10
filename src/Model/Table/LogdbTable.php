<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Logdb Model
 *
 * @method \App\Model\Entity\Logdb newEmptyEntity()
 * @method \App\Model\Entity\Logdb newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Logdb> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Logdb get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Logdb findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Logdb patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Logdb> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Logdb|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Logdb saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Logdb>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Logdb>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Logdb>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Logdb> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Logdb>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Logdb>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Logdb>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Logdb> deleteManyOrFail(iterable $entities, array $options = [])
 */
class LogdbTable extends Table
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

        $this->setTable('logdb');
        $this->setDisplayField('table');
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
            ->scalar('table')
            ->maxLength('table', 30)
            ->requirePresence('table', 'create')
            ->notEmptyString('table');

        $validator
            ->scalar('type')
            ->maxLength('type', 50)
            ->requirePresence('type', 'create')
            ->notEmptyString('type');

        $validator
            ->dateTime('date')
            ->requirePresence('date', 'create')
            ->notEmptyDateTime('date');

        $validator
            ->integer('iduser')
            ->requirePresence('iduser', 'create')
            ->notEmptyString('iduser');

        return $validator;
    }
}
