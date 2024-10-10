<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Previsions Model
 *
 * @method \App\Model\Entity\Prevision newEmptyEntity()
 * @method \App\Model\Entity\Prevision newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Prevision> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Prevision get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Prevision findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Prevision patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Prevision> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Prevision|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Prevision saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Prevision>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Prevision>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Prevision>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Prevision> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Prevision>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Prevision>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Prevision>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Prevision> deleteManyOrFail(iterable $entities, array $options = [])
 */
class PrevisionsTable extends Table
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

        $this->setTable('previsions');
        $this->setDisplayField('mois');
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
            ->scalar('mois')
            ->maxLength('mois', 10)
            ->requirePresence('mois', 'create')
            ->notEmptyString('mois');

        $validator
            ->scalar('produit')
            ->maxLength('produit', 10)
            ->requirePresence('produit', 'create')
            ->notEmptyString('produit');

        $validator
            ->integer('tonnagemens')
            ->requirePresence('tonnagemens', 'create')
            ->notEmptyString('tonnagemens');

        $validator
            ->integer('tonnagejour')
            ->requirePresence('tonnagejour', 'create')
            ->notEmptyString('tonnagejour');

        $validator
            ->integer('camionsmens')
            ->requirePresence('camionsmens', 'create')
            ->notEmptyString('camionsmens');

        $validator
            ->integer('camionsjour')
            ->requirePresence('camionsjour', 'create')
            ->notEmptyString('camionsjour');

        return $validator;
    }
}
