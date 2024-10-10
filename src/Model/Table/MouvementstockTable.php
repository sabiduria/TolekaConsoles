<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Mouvementstock Model
 *
 * @method \App\Model\Entity\Mouvementstock newEmptyEntity()
 * @method \App\Model\Entity\Mouvementstock newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Mouvementstock> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Mouvementstock get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Mouvementstock findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Mouvementstock patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Mouvementstock> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Mouvementstock|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Mouvementstock saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Mouvementstock>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Mouvementstock>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Mouvementstock>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Mouvementstock> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Mouvementstock>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Mouvementstock>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Mouvementstock>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Mouvementstock> deleteManyOrFail(iterable $entities, array $options = [])
 */
class MouvementstockTable extends Table
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

        $this->setTable('mouvementstock');
        $this->setDisplayField('transaction');
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
            ->dateTime('date')
            ->requirePresence('date', 'create')
            ->notEmptyDateTime('date');

        $validator
            ->scalar('transaction')
            ->maxLength('transaction', 30)
            ->requirePresence('transaction', 'create')
            ->notEmptyString('transaction');

        $validator
            ->integer('iditem')
            ->requirePresence('iditem', 'create')
            ->notEmptyString('iditem');

        $validator
            ->scalar('item')
            ->maxLength('item', 100)
            ->requirePresence('item', 'create')
            ->notEmptyString('item');

        $validator
            ->integer('qteinit')
            ->requirePresence('qteinit', 'create')
            ->notEmptyString('qteinit');

        $validator
            ->integer('qtetrans')
            ->requirePresence('qtetrans', 'create')
            ->notEmptyString('qtetrans');

        $validator
            ->integer('qtefin')
            ->requirePresence('qtefin', 'create')
            ->notEmptyString('qtefin');

        return $validator;
    }
}
