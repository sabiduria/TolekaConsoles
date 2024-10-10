<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Prod Model
 *
 * @method \App\Model\Entity\Prod newEmptyEntity()
 * @method \App\Model\Entity\Prod newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Prod> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Prod get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Prod findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Prod patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Prod> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Prod|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Prod saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Prod>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Prod>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Prod>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Prod> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Prod>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Prod>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Prod>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Prod> deleteManyOrFail(iterable $entities, array $options = [])
 */
class ProdTable extends Table
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

        $this->setTable('prod');
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
            ->maxLength('produit', 50)
            ->requirePresence('produit', 'create')
            ->notEmptyString('produit');

        $validator
            ->scalar('designation')
            ->maxLength('designation', 100)
            ->requirePresence('designation', 'create')
            ->notEmptyString('designation');

        $validator
            ->scalar('type')
            ->maxLength('type', 50)
            ->requirePresence('type', 'create')
            ->notEmptyString('type');

        $validator
            ->scalar('statut')
            ->maxLength('statut', 20)
            ->notEmptyString('statut');

        return $validator;
    }
}
