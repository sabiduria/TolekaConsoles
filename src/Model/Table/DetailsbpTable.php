<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Detailsbp Model
 *
 * @method \App\Model\Entity\Detailsbp newEmptyEntity()
 * @method \App\Model\Entity\Detailsbp newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Detailsbp> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Detailsbp get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Detailsbp findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Detailsbp patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Detailsbp> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Detailsbp|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Detailsbp saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Detailsbp>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Detailsbp>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Detailsbp>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Detailsbp> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Detailsbp>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Detailsbp>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Detailsbp>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Detailsbp> deleteManyOrFail(iterable $entities, array $options = [])
 */
class DetailsbpTable extends Table
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

        $this->setTable('detailsbp');
        $this->setDisplayField('numbp');
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
            ->requirePresence('idbp', 'create')
            ->notEmptyString('idbp');

        $validator
            ->scalar('numbp')
            ->maxLength('numbp', 100)
            ->requirePresence('numbp', 'create')
            ->notEmptyString('numbp');

        $validator
            ->scalar('numlot')
            ->maxLength('numlot', 50)
            ->requirePresence('numlot', 'create')
            ->notEmptyString('numlot');

        $validator
            ->scalar('horse')
            ->maxLength('horse', 20)
            ->requirePresence('horse', 'create')
            ->notEmptyString('horse');

        $validator
            ->scalar('trailer1')
            ->maxLength('trailer1', 20)
            ->requirePresence('trailer1', 'create')
            ->notEmptyString('trailer1');

        $validator
            ->scalar('trailer2')
            ->maxLength('trailer2', 20)
            ->requirePresence('trailer2', 'create')
            ->notEmptyString('trailer2');

        $validator
            ->scalar('transporteur')
            ->maxLength('transporteur', 50)
            ->requirePresence('transporteur', 'create')
            ->notEmptyString('transporteur');

        $validator
            ->scalar('chauffeur')
            ->maxLength('chauffeur', 50)
            ->requirePresence('chauffeur', 'create')
            ->notEmptyString('chauffeur');

        $validator
            ->scalar('passeport')
            ->maxLength('passeport', 20)
            ->requirePresence('passeport', 'create')
            ->notEmptyString('passeport');

        $validator
            ->scalar('nationalite')
            ->maxLength('nationalite', 50)
            ->requirePresence('nationalite', 'create')
            ->notEmptyString('nationalite');

        $validator
            ->integer('nbpaquets')
            ->requirePresence('nbpaquets', 'create')
            ->notEmptyString('nbpaquets');

        $validator
            ->numeric('poidsnet')
            ->requirePresence('poidsnet', 'create')
            ->notEmptyString('poidsnet');

        $validator
            ->numeric('poidsbrut')
            ->requirePresence('poidsbrut', 'create')
            ->notEmptyString('poidsbrut');

        $validator
            ->scalar('sealdgda')
            ->maxLength('sealdgda', 50)
            ->requirePresence('sealdgda', 'create')
            ->notEmptyString('sealdgda');

        $validator
            ->integer('iduser')
            ->requirePresence('iduser', 'create')
            ->notEmptyString('iduser');

        $validator
            ->dateTime('date')
            ->requirePresence('date', 'create')
            ->notEmptyDateTime('date');

        return $validator;
    }
}
