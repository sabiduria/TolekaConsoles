<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cohlots Model
 *
 * @method \App\Model\Entity\Cohlot newEmptyEntity()
 * @method \App\Model\Entity\Cohlot newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Cohlot> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Cohlot get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Cohlot findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Cohlot patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Cohlot> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Cohlot|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Cohlot saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Cohlot>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Cohlot>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Cohlot>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Cohlot> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Cohlot>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Cohlot>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Cohlot>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Cohlot> deleteManyOrFail(iterable $entities, array $options = [])
 */
class CohlotsTable extends Table
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

        $this->setTable('cohlots');
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
            ->requirePresence('idtrip', 'create')
            ->notEmptyString('idtrip');

        $validator
            ->scalar('numlot')
            ->maxLength('numlot', 50)
            ->requirePresence('numlot', 'create')
            ->notEmptyString('numlot');

        $validator
            ->scalar('numimex')
            ->maxLength('numimex', 50)
            ->requirePresence('numimex', 'create')
            ->notEmptyString('numimex');

        $validator
            ->scalar('spec')
            ->maxLength('spec', 30)
            ->notEmptyString('spec');

        $validator
            ->dateTime('date')
            ->requirePresence('date', 'create')
            ->notEmptyDateTime('date');

        $validator
            ->scalar('destination')
            ->maxLength('destination', 100)
            ->requirePresence('destination', 'create')
            ->notEmptyString('destination');

        $validator
            ->scalar('paysdest')
            ->maxLength('paysdest', 50)
            ->requirePresence('paysdest', 'create')
            ->notEmptyString('paysdest');

        $validator
            ->scalar('corridor')
            ->maxLength('corridor', 100)
            ->requirePresence('corridor', 'create')
            ->notEmptyString('corridor');

        $validator
            ->scalar('horse')
            ->maxLength('horse', 20)
            ->requirePresence('horse', 'create')
            ->notEmptyString('horse');

        $validator
            ->scalar('trailer1')
            ->maxLength('trailer1', 20)
            ->requirePresence('trailer1', 'create')
            ->notEmptyString('trailer1');

        $validator
            ->scalar('trailer2')
            ->maxLength('trailer2', 20)
            ->requirePresence('trailer2', 'create')
            ->notEmptyString('trailer2');

        $validator
            ->scalar('transporteur')
            ->maxLength('transporteur', 100)
            ->requirePresence('transporteur', 'create')
            ->notEmptyString('transporteur');

        $validator
            ->scalar('moisgestion')
            ->maxLength('moisgestion', 10)
            ->requirePresence('moisgestion', 'create')
            ->notEmptyString('moisgestion');

        $validator
            ->scalar('statut')
            ->maxLength('statut', 100)
            ->notEmptyString('statut');

        $validator
            ->integer('iduser')
            ->requirePresence('iduser', 'create')
            ->notEmptyString('iduser');

        $validator
            ->numeric('tonnage')
            ->requirePresence('tonnage', 'create')
            ->notEmptyString('tonnage');

        $validator
            ->numeric('tonnageload')
            ->requirePresence('tonnageload', 'create')
            ->notEmptyString('tonnageload');

        $validator
            ->scalar('sealdgda')
            ->maxLength('sealdgda', 50)
            ->requirePresence('sealdgda', 'create')
            ->notEmptyString('sealdgda');

        $validator
            ->scalar('numbp')
            ->maxLength('numbp', 255)
            ->requirePresence('numbp', 'create')
            ->notEmptyString('numbp');

        $validator
            ->scalar('produit')
            ->maxLength('produit', 10)
            ->requirePresence('produit', 'create')
            ->notEmptyString('produit');

        $validator
            ->scalar('physicalgrade')
            ->maxLength('physicalgrade', 50)
            ->requirePresence('physicalgrade', 'create')
            ->notEmptyString('physicalgrade');

        $validator
            ->scalar('chemicalgrade')
            ->maxLength('chemicalgrade', 50)
            ->requirePresence('chemicalgrade', 'create')
            ->notEmptyString('chemicalgrade');

        $validator
            ->scalar('unite')
            ->maxLength('unite', 20)
            ->requirePresence('unite', 'create')
            ->notEmptyString('unite');

        $validator
            ->scalar('numdc')
            ->maxLength('numdc', 255)
            ->requirePresence('numdc', 'create')
            ->notEmptyString('numdc');

        $validator
            ->integer('year')
            ->notEmptyString('year');

        $validator
            ->scalar('sealsecurite')
            ->maxLength('sealsecurite', 100)
            ->notEmptyString('sealsecurite');

        $validator
            ->boolean('synced')
            ->notEmptyString('synced');

        return $validator;
    }
}
