<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Camions Model
 *
 * @method \App\Model\Entity\Camion newEmptyEntity()
 * @method \App\Model\Entity\Camion newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Camion> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Camion get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Camion findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Camion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Camion> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Camion|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Camion saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Camion>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Camion>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Camion>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Camion> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Camion>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Camion>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Camion>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Camion> deleteManyOrFail(iterable $entities, array $options = [])
 */
class CamionsTable extends Table
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

        $this->setTable('camions');
        $this->setDisplayField('marque');
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
            ->requirePresence('trans', 'create')
            ->notEmptyString('trans');

        $validator
            ->requirePresence('ch', 'create')
            ->notEmptyString('ch');

        $validator
            ->scalar('marque')
            ->maxLength('marque', 50)
            ->requirePresence('marque', 'create')
            ->notEmptyString('marque');

        $validator
            ->scalar('type')
            ->maxLength('type', 30)
            ->requirePresence('type', 'create')
            ->notEmptyString('type');

        $validator
            ->scalar('horse')
            ->maxLength('horse', 10)
            ->requirePresence('horse', 'create')
            ->notEmptyString('horse');

        $validator
            ->scalar('trailer1')
            ->maxLength('trailer1', 10)
            ->requirePresence('trailer1', 'create')
            ->notEmptyString('trailer1');

        $validator
            ->scalar('trailer2')
            ->maxLength('trailer2', 10)
            ->requirePresence('trailer2', 'create')
            ->notEmptyString('trailer2');

        $validator
            ->numeric('tonnage')
            ->requirePresence('tonnage', 'create')
            ->notEmptyString('tonnage');

        $validator
            ->scalar('couleur')
            ->maxLength('couleur', 20)
            ->requirePresence('couleur', 'create')
            ->notEmptyString('couleur');

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

        return $validator;
    }
}
