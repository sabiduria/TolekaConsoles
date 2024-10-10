<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Licences Model
 *
 * @method \App\Model\Entity\Licence newEmptyEntity()
 * @method \App\Model\Entity\Licence newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Licence> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Licence get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Licence findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Licence patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Licence> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Licence|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Licence saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Licence>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Licence>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Licence>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Licence> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Licence>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Licence>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Licence>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Licence> deleteManyOrFail(iterable $entities, array $options = [])
 */
class LicencesTable extends Table
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

        $this->setTable('licences');
        $this->setDisplayField('codelic');
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
            ->scalar('codelic')
            ->maxLength('codelic', 255)
            ->requirePresence('codelic', 'create')
            ->notEmptyString('codelic');

        $validator
            ->integer('tonnage')
            ->requirePresence('tonnage', 'create')
            ->notEmptyString('tonnage');

        $validator
            ->scalar('agence')
            ->maxLength('agence', 50)
            ->requirePresence('agence', 'create')
            ->notEmptyString('agence');

        $validator
            ->scalar('destination')
            ->maxLength('destination', 50)
            ->requirePresence('destination', 'create')
            ->notEmptyString('destination');

        $validator
            ->scalar('produit')
            ->maxLength('produit', 50)
            ->notEmptyString('produit');

        $validator
            ->scalar('typeproduit')
            ->maxLength('typeproduit', 50)
            ->notEmptyString('typeproduit');

        $validator
            ->scalar('trancheteneur')
            ->maxLength('trancheteneur', 50)
            ->requirePresence('trancheteneur', 'create')
            ->notEmptyString('trancheteneur');

        $validator
            ->date('periode')
            ->requirePresence('periode', 'create')
            ->notEmptyDate('periode');

        $validator
            ->integer('validite')
            ->requirePresence('validite', 'create')
            ->notEmptyString('validite');

        $validator
            ->date('expiration')
            ->requirePresence('expiration', 'create')
            ->notEmptyDate('expiration');

        $validator
            ->scalar('tonnagerestant')
            ->maxLength('tonnagerestant', 50)
            ->requirePresence('tonnagerestant', 'create')
            ->notEmptyString('tonnagerestant');

        $validator
            ->scalar('seuil')
            ->maxLength('seuil', 50)
            ->requirePresence('seuil', 'create')
            ->notEmptyString('seuil');

        $validator
            ->scalar('frontiere')
            ->maxLength('frontiere', 100)
            ->notEmptyString('frontiere');

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

        $validator
            ->scalar('moyentrans')
            ->maxLength('moyentrans', 50)
            ->notEmptyString('moyentrans');

        return $validator;
    }
}
