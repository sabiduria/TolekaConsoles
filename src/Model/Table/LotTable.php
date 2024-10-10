<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Lot Model
 *
 * @method \App\Model\Entity\Lot newEmptyEntity()
 * @method \App\Model\Entity\Lot newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Lot> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Lot get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Lot findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Lot patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Lot> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Lot|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Lot saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Lot>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Lot>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Lot>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Lot> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Lot>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Lot>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Lot>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Lot> deleteManyOrFail(iterable $entities, array $options = [])
 */
class LotTable extends Table
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

        $this->setTable('lot');
        $this->setDisplayField('numlot');
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
            ->scalar('numlot')
            ->maxLength('numlot', 100)
            ->requirePresence('numlot', 'create')
            ->notEmptyString('numlot');

        $validator
            ->integer('nbbags')
            ->requirePresence('nbbags', 'create')
            ->notEmptyString('nbbags');

        $validator
            ->numeric('tonnage')
            ->requirePresence('tonnage', 'create')
            ->notEmptyString('tonnage');

        $validator
            ->scalar('destination')
            ->maxLength('destination', 50)
            ->requirePresence('destination', 'create')
            ->notEmptyString('destination');

        $validator
            ->scalar('statut')
            ->maxLength('statut', 20)
            ->requirePresence('statut', 'create')
            ->notEmptyString('statut');

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
