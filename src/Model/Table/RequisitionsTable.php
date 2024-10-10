<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Requisitions Model
 *
 * @method \App\Model\Entity\Requisition newEmptyEntity()
 * @method \App\Model\Entity\Requisition newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Requisition> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Requisition get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Requisition findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Requisition patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Requisition> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Requisition|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Requisition saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Requisition>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Requisition>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Requisition>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Requisition> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Requisition>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Requisition>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Requisition>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Requisition> deleteManyOrFail(iterable $entities, array $options = [])
 */
class RequisitionsTable extends Table
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

        $this->setTable('requisitions');
        $this->setDisplayField('item');
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
            ->integer('iduser')
            ->requirePresence('iduser', 'create')
            ->notEmptyString('iduser');

        $validator
            ->scalar('item')
            ->maxLength('item', 100)
            ->requirePresence('item', 'create')
            ->notEmptyString('item');

        $validator
            ->scalar('motif')
            ->maxLength('motif', 255)
            ->requirePresence('motif', 'create')
            ->notEmptyString('motif');

        $validator
            ->dateTime('date')
            ->requirePresence('date', 'create')
            ->notEmptyDateTime('date');

        $validator
            ->integer('qtedem')
            ->requirePresence('qtedem', 'create')
            ->notEmptyString('qtedem');

        $validator
            ->integer('qteac')
            ->requirePresence('qteac', 'create')
            ->notEmptyString('qteac');

        $validator
            ->integer('idac')
            ->requirePresence('idac', 'create')
            ->notEmptyString('idac');

        $validator
            ->dateTime('dateac')
            ->requirePresence('dateac', 'create')
            ->notEmptyDateTime('dateac');

        $validator
            ->scalar('statutac')
            ->maxLength('statutac', 30)
            ->requirePresence('statutac', 'create')
            ->notEmptyString('statutac');

        $validator
            ->integer('qteliv')
            ->requirePresence('qteliv', 'create')
            ->notEmptyString('qteliv');

        $validator
            ->integer('idliv')
            ->requirePresence('idliv', 'create')
            ->notEmptyString('idliv');

        $validator
            ->dateTime('dateliv')
            ->requirePresence('dateliv', 'create')
            ->notEmptyDateTime('dateliv');

        $validator
            ->scalar('commentliv')
            ->maxLength('commentliv', 255)
            ->requirePresence('commentliv', 'create')
            ->notEmptyString('commentliv');

        $validator
            ->scalar('commentac')
            ->maxLength('commentac', 255)
            ->requirePresence('commentac', 'create')
            ->notEmptyString('commentac');

        $validator
            ->scalar('statut')
            ->maxLength('statut', 30)
            ->notEmptyString('statut');

        return $validator;
    }
}
