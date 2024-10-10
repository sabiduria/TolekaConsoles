<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ci Model
 *
 * @method \App\Model\Entity\Ci newEmptyEntity()
 * @method \App\Model\Entity\Ci newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Ci> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ci get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Ci findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Ci patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Ci> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ci|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Ci saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Ci>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Ci>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Ci>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Ci> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Ci>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Ci>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Ci>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Ci> deleteManyOrFail(iterable $entities, array $options = [])
 */
class CiTable extends Table
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

        $this->setTable('ci');
        $this->setDisplayField('lotnumber');
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
            ->scalar('lotnumber')
            ->maxLength('lotnumber', 50)
            ->requirePresence('lotnumber', 'create')
            ->notEmptyString('lotnumber');

        $validator
            ->scalar('numimex')
            ->maxLength('numimex', 50)
            ->requirePresence('numimex', 'create')
            ->notEmptyString('numimex');

        $validator
            ->numeric('cost')
            ->requirePresence('cost', 'create')
            ->notEmptyString('cost');

        $validator
            ->scalar('horse')
            ->maxLength('horse', 30)
            ->requirePresence('horse', 'create')
            ->notEmptyString('horse');

        $validator
            ->scalar('transporter')
            ->maxLength('transporter', 50)
            ->requirePresence('transporter', 'create')
            ->notEmptyString('transporter');

        $validator
            ->scalar('destination')
            ->maxLength('destination', 100)
            ->requirePresence('destination', 'create')
            ->notEmptyString('destination');

        $validator
            ->dateTime('date')
            ->requirePresence('date', 'create')
            ->notEmptyDateTime('date');

        return $validator;
    }
}
