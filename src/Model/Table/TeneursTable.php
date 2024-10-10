<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Teneurs Model
 *
 * @method \App\Model\Entity\Teneur newEmptyEntity()
 * @method \App\Model\Entity\Teneur newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Teneur> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Teneur get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Teneur findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Teneur patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Teneur> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Teneur|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Teneur saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Teneur>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Teneur>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Teneur>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Teneur> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Teneur>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Teneur>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Teneur>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Teneur> deleteManyOrFail(iterable $entities, array $options = [])
 */
class TeneursTable extends Table
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

        $this->setTable('teneurs');
        $this->setDisplayField('produit');
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
            ->scalar('produit')
            ->maxLength('produit', 20)
            ->requirePresence('produit', 'create')
            ->notEmptyString('produit');

        $validator
            ->scalar('teneur')
            ->maxLength('teneur', 20)
            ->requirePresence('teneur', 'create')
            ->notEmptyString('teneur');

        $validator
            ->scalar('statut')
            ->maxLength('statut', 10)
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
