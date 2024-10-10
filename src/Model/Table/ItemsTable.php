<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Items Model
 *
 * @method \App\Model\Entity\Item newEmptyEntity()
 * @method \App\Model\Entity\Item newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Item> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Item get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Item findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Item patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Item> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Item|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Item saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Item>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Item>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Item>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Item> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Item>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Item>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Item>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Item> deleteManyOrFail(iterable $entities, array $options = [])
 */
class ItemsTable extends Table
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

        $this->setTable('items');
        $this->setDisplayField('itemname');
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
            ->scalar('itemname')
            ->maxLength('itemname', 255)
            ->requirePresence('itemname', 'create')
            ->notEmptyString('itemname');

        $validator
            ->integer('quantity')
            ->requirePresence('quantity', 'create')
            ->notEmptyString('quantity');

        $validator
            ->integer('nbreitems')
            ->requirePresence('nbreitems', 'create')
            ->notEmptyString('nbreitems');

        $validator
            ->numeric('length')
            ->requirePresence('length', 'create')
            ->notEmptyString('length');

        $validator
            ->numeric('width')
            ->requirePresence('width', 'create')
            ->notEmptyString('width');

        $validator
            ->numeric('height')
            ->requirePresence('height', 'create')
            ->notEmptyString('height');

        $validator
            ->numeric('cbm')
            ->requirePresence('cbm', 'create')
            ->notEmptyString('cbm');

        $validator
            ->numeric('averageweightperpackage')
            ->requirePresence('averageweightperpackage', 'create')
            ->notEmptyString('averageweightperpackage');

        $validator
            ->numeric('packagetotalweight')
            ->requirePresence('packagetotalweight', 'create')
            ->notEmptyString('packagetotalweight');

        $validator
            ->numeric('netweightperpackage')
            ->requirePresence('netweightperpackage', 'create')
            ->notEmptyString('netweightperpackage');

        $validator
            ->numeric('itemnetweight')
            ->requirePresence('itemnetweight', 'create')
            ->notEmptyString('itemnetweight');

        $validator
            ->scalar('nature')
            ->maxLength('nature', 100)
            ->requirePresence('nature', 'create')
            ->notEmptyString('nature');

        $validator
            ->scalar('idshop')
            ->maxLength('idshop', 100)
            ->requirePresence('idshop', 'create')
            ->notEmptyString('idshop');

        $validator
            ->integer('idstore')
            ->requirePresence('idstore', 'create')
            ->notEmptyString('idstore');

        $validator
            ->integer('idcl')
            ->requirePresence('idcl', 'create')
            ->notEmptyString('idcl');

        $validator
            ->date('datereceipt')
            ->requirePresence('datereceipt', 'create')
            ->notEmptyDate('datereceipt');

        $validator
            ->dateTime('daterecord')
            ->requirePresence('daterecord', 'create')
            ->notEmptyDateTime('daterecord');

        $validator
            ->scalar('shelf')
            ->maxLength('shelf', 5)
            ->notEmptyString('shelf');

        $validator
            ->integer('ray')
            ->requirePresence('ray', 'create')
            ->notEmptyString('ray');

        $validator
            ->scalar('statut')
            ->maxLength('statut', 20)
            ->notEmptyString('statut');

        $validator
            ->integer('iduser')
            ->requirePresence('iduser', 'create')
            ->notEmptyString('iduser');

        $validator
            ->dateTime('date')
            ->requirePresence('date', 'create')
            ->notEmptyDateTime('date');

        $validator
            ->integer('iduser2')
            ->requirePresence('iduser2', 'create')
            ->notEmptyString('iduser2');

        $validator
            ->dateTime('miseajour')
            ->requirePresence('miseajour', 'create')
            ->notEmptyDateTime('miseajour');

        return $validator;
    }
}
