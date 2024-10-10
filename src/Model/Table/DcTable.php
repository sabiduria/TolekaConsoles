<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Dc Model
 *
 * @method \App\Model\Entity\Dc newEmptyEntity()
 * @method \App\Model\Entity\Dc newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Dc> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Dc get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Dc findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Dc patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Dc> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Dc|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Dc saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Dc>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Dc>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Dc>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Dc> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Dc>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Dc>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Dc>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Dc> deleteManyOrFail(iterable $entities, array $options = [])
 */
class DcTable extends Table
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

        $this->setTable('dc');
        $this->setDisplayField('numdc');
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
            ->integer('num')
            ->requirePresence('num', 'create')
            ->notEmptyString('num');

        $validator
            ->scalar('numdc')
            ->maxLength('numdc', 255)
            ->requirePresence('numdc', 'create')
            ->notEmptyString('numdc');

        $validator
            ->scalar('numbp')
            ->maxLength('numbp', 255)
            ->requirePresence('numbp', 'create')
            ->notEmptyString('numbp');

        $validator
            ->scalar('licence')
            ->maxLength('licence', 255)
            ->requirePresence('licence', 'create')
            ->notEmptyString('licence');

        $validator
            ->scalar('produit')
            ->maxLength('produit', 50)
            ->requirePresence('produit', 'create')
            ->notEmptyString('produit');

        $validator
            ->scalar('tranche')
            ->maxLength('tranche', 100)
            ->requirePresence('tranche', 'create')
            ->notEmptyString('tranche');

        $validator
            ->dateTime('date')
            ->requirePresence('date', 'create')
            ->notEmptyDateTime('date');

        $validator
            ->scalar('iduser')
            ->maxLength('iduser', 50)
            ->requirePresence('iduser', 'create')
            ->notEmptyString('iduser');

        $validator
            ->scalar('statut')
            ->maxLength('statut', 50)
            ->notEmptyString('statut');

        $validator
            ->integer('tonnage')
            ->requirePresence('tonnage', 'create')
            ->notEmptyString('tonnage');

        $validator
            ->integer('nbitems')
            ->requirePresence('nbitems', 'create')
            ->notEmptyString('nbitems');

        $validator
            ->scalar('liendc')
            ->maxLength('liendc', 255)
            ->requirePresence('liendc', 'create')
            ->notEmptyString('liendc');

        $validator
            ->numeric('tonnagerestant')
            ->requirePresence('tonnagerestant', 'create')
            ->notEmptyString('tonnagerestant');

        $validator
            ->numeric('tonnageutilise')
            ->requirePresence('tonnageutilise', 'create')
            ->notEmptyString('tonnageutilise');

        $validator
            ->integer('nbpaquets')
            ->requirePresence('nbpaquets', 'create')
            ->notEmptyString('nbpaquets');

        $validator
            ->integer('seuil')
            ->requirePresence('seuil', 'create')
            ->notEmptyString('seuil');

        $validator
            ->scalar('numdckcc')
            ->maxLength('numdckcc', 255)
            ->requirePresence('numdckcc', 'create')
            ->notEmptyString('numdckcc');

        $validator
            ->scalar('numtransport')
            ->maxLength('numtransport', 255)
            ->requirePresence('numtransport', 'create')
            ->notEmptyString('numtransport');

        return $validator;
    }
}
