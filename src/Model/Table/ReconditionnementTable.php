<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Reconditionnement Model
 *
 * @method \App\Model\Entity\Reconditionnement newEmptyEntity()
 * @method \App\Model\Entity\Reconditionnement newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Reconditionnement> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Reconditionnement get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Reconditionnement findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Reconditionnement patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Reconditionnement> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Reconditionnement|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Reconditionnement saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Reconditionnement>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Reconditionnement>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Reconditionnement>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Reconditionnement> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Reconditionnement>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Reconditionnement>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Reconditionnement>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Reconditionnement> deleteManyOrFail(iterable $entities, array $options = [])
 */
class ReconditionnementTable extends Table
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

        $this->setTable('reconditionnement');
        $this->setDisplayField('bagid');
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
            ->scalar('bagid')
            ->maxLength('bagid', 100)
            ->requirePresence('bagid', 'create')
            ->notEmptyString('bagid');

        $validator
            ->scalar('zone')
            ->maxLength('zone', 100)
            ->requirePresence('zone', 'create')
            ->notEmptyString('zone');

        $validator
            ->scalar('description')
            ->maxLength('description', 255)
            ->requirePresence('description', 'create')
            ->notEmptyString('description');

        $validator
            ->scalar('statut')
            ->maxLength('statut', 50)
            ->notEmptyString('statut');

        $validator
            ->dateTime('dateid')
            ->requirePresence('dateid', 'create')
            ->notEmptyDateTime('dateid');

        $validator
            ->integer('iduser')
            ->requirePresence('iduser', 'create')
            ->notEmptyString('iduser');

        $validator
            ->dateTime('dateok')
            ->requirePresence('dateok', 'create')
            ->notEmptyDateTime('dateok');

        $validator
            ->integer('iduser2')
            ->requirePresence('iduser2', 'create')
            ->notEmptyString('iduser2');

        $validator
            ->scalar('produit')
            ->maxLength('produit', 100)
            ->requirePresence('produit', 'create')
            ->notEmptyString('produit');

        return $validator;
    }
}
