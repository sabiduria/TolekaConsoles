<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Destinations Model
 *
 * @method \App\Model\Entity\Destination newEmptyEntity()
 * @method \App\Model\Entity\Destination newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Destination> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Destination get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Destination findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Destination patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Destination> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Destination|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Destination saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Destination>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Destination>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Destination>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Destination> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Destination>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Destination>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Destination>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Destination> deleteManyOrFail(iterable $entities, array $options = [])
 */
class DestinationsTable extends Table
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

        $this->setTable('destinations');
        $this->setDisplayField('pays');
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
            ->scalar('pays')
            ->maxLength('pays', 50)
            ->requirePresence('pays', 'create')
            ->notEmptyString('pays');

        $validator
            ->scalar('destination')
            ->maxLength('destination', 30)
            ->requirePresence('destination', 'create')
            ->notEmptyString('destination');

        $validator
            ->scalar('corridor')
            ->maxLength('corridor', 50)
            ->requirePresence('corridor', 'create')
            ->notEmptyString('corridor');

        $validator
            ->scalar('codeprea')
            ->maxLength('codeprea', 20)
            ->requirePresence('codeprea', 'create')
            ->notEmptyString('codeprea');

        $validator
            ->scalar('produit')
            ->maxLength('produit', 10)
            ->notEmptyString('produit');

        $validator
            ->numeric('tonnagerequis')
            ->requirePresence('tonnagerequis', 'create')
            ->notEmptyString('tonnagerequis');

        $validator
            ->numeric('tonnageenvoye')
            ->requirePresence('tonnageenvoye', 'create')
            ->notEmptyString('tonnageenvoye');

        $validator
            ->numeric('tonnagerestant')
            ->requirePresence('tonnagerestant', 'create')
            ->notEmptyString('tonnagerestant');

        $validator
            ->dateTime('date')
            ->requirePresence('date', 'create')
            ->notEmptyDateTime('date');

        $validator
            ->integer('iduser')
            ->requirePresence('iduser', 'create')
            ->notEmptyString('iduser');

        $validator
            ->scalar('statut')
            ->maxLength('statut', 10)
            ->requirePresence('statut', 'create')
            ->notEmptyString('statut');

        $validator
            ->scalar('consignee')
            ->requirePresence('consignee', 'create')
            ->notEmptyString('consignee');

        return $validator;
    }
}
