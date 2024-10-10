<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Selections Model
 *
 * @method \App\Model\Entity\Selection newEmptyEntity()
 * @method \App\Model\Entity\Selection newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Selection> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Selection get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Selection findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Selection patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Selection> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Selection|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Selection saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Selection>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Selection>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Selection>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Selection> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Selection>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Selection>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Selection>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Selection> deleteManyOrFail(iterable $entities, array $options = [])
 */
class SelectionsTable extends Table
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

        $this->setTable('selections');
        $this->setDisplayField('id');
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
            ->integer('top')
            ->requirePresence('top', 'create')
            ->notEmptyString('top');

        $validator
            ->integer('low')
            ->requirePresence('low', 'create')
            ->notEmptyString('low');

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
