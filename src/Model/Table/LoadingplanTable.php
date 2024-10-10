<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Loadingplan Model
 *
 * @method \App\Model\Entity\Loadingplan newEmptyEntity()
 * @method \App\Model\Entity\Loadingplan newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Loadingplan> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Loadingplan get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Loadingplan findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Loadingplan patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Loadingplan> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Loadingplan|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Loadingplan saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Loadingplan>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Loadingplan>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Loadingplan>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Loadingplan> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Loadingplan>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Loadingplan>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Loadingplan>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Loadingplan> deleteManyOrFail(iterable $entities, array $options = [])
 */
class LoadingplanTable extends Table
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

        $this->setTable('loadingplan');
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
            ->requirePresence('idprea', 'create')
            ->notEmptyString('idprea');

        $validator
            ->numeric('tonnagetoload')
            ->requirePresence('tonnagetoload', 'create')
            ->notEmptyString('tonnagetoload');

        $validator
            ->scalar('produit')
            ->maxLength('produit', 30)
            ->requirePresence('produit', 'create')
            ->notEmptyString('produit');

        $validator
            ->date('exploaddate')
            ->requirePresence('exploaddate', 'create')
            ->notEmptyDate('exploaddate');

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
