<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Chargements Model
 *
 * @method \App\Model\Entity\Chargement newEmptyEntity()
 * @method \App\Model\Entity\Chargement newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Chargement> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Chargement get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Chargement findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Chargement patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Chargement> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Chargement|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Chargement saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Chargement>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Chargement>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Chargement>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Chargement> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Chargement>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Chargement>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Chargement>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Chargement> deleteManyOrFail(iterable $entities, array $options = [])
 */
class ChargementsTable extends Table
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

        $this->setTable('chargements');
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
            ->scalar('loadassistant')
            ->maxLength('loadassistant', 50)
            ->requirePresence('loadassistant', 'create')
            ->notEmptyString('loadassistant');

        $validator
            ->scalar('loadhelper1')
            ->maxLength('loadhelper1', 50)
            ->requirePresence('loadhelper1', 'create')
            ->notEmptyString('loadhelper1');

        $validator
            ->scalar('loadhelper2')
            ->maxLength('loadhelper2', 50)
            ->requirePresence('loadhelper2', 'create')
            ->notEmptyString('loadhelper2');

        $validator
            ->scalar('operateur1')
            ->maxLength('operateur1', 50)
            ->requirePresence('operateur1', 'create')
            ->notEmptyString('operateur1');

        $validator
            ->scalar('operateur2')
            ->maxLength('operateur2', 50)
            ->requirePresence('operateur2', 'create')
            ->notEmptyString('operateur2');

        $validator
            ->dateTime('date')
            ->requirePresence('date', 'create')
            ->notEmptyDateTime('date');

        $validator
            ->scalar('user')
            ->maxLength('user', 50)
            ->requirePresence('user', 'create')
            ->notEmptyString('user');

        return $validator;
    }
}
