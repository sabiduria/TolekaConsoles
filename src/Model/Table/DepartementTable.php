<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Departement Model
 *
 * @method \App\Model\Entity\Departement newEmptyEntity()
 * @method \App\Model\Entity\Departement newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Departement> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Departement get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Departement findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Departement patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Departement> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Departement|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Departement saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Departement>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Departement>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Departement>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Departement> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Departement>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Departement>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Departement>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Departement> deleteManyOrFail(iterable $entities, array $options = [])
 */
class DepartementTable extends Table
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

        $this->setTable('departement');
        $this->setDisplayField('nomdpt');
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
            ->scalar('nomdpt')
            ->maxLength('nomdpt', 100)
            ->requirePresence('nomdpt', 'create')
            ->notEmptyString('nomdpt');

        $validator
            ->integer('iduser')
            ->requirePresence('iduser', 'create')
            ->notEmptyString('iduser');

        $validator
            ->dateTime('date')
            ->requirePresence('date', 'create')
            ->notEmptyDateTime('date');

        $validator
            ->scalar('statut')
            ->maxLength('statut', 10)
            ->notEmptyString('statut');

        return $validator;
    }
}
