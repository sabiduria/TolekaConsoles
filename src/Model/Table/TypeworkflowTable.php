<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Typeworkflow Model
 *
 * @method \App\Model\Entity\Typeworkflow newEmptyEntity()
 * @method \App\Model\Entity\Typeworkflow newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Typeworkflow> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Typeworkflow get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Typeworkflow findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Typeworkflow patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Typeworkflow> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Typeworkflow|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Typeworkflow saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Typeworkflow>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Typeworkflow>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Typeworkflow>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Typeworkflow> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Typeworkflow>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Typeworkflow>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Typeworkflow>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Typeworkflow> deleteManyOrFail(iterable $entities, array $options = [])
 */
class TypeworkflowTable extends Table
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

        $this->setTable('typeworkflow');
        $this->setDisplayField('type');
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
            ->scalar('type')
            ->maxLength('type', 50)
            ->requirePresence('type', 'create')
            ->notEmptyString('type');

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
