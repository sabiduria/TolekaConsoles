<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Lotdetails Model
 *
 * @method \App\Model\Entity\Lotdetail newEmptyEntity()
 * @method \App\Model\Entity\Lotdetail newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Lotdetail> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Lotdetail get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Lotdetail findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Lotdetail patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Lotdetail> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Lotdetail|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Lotdetail saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Lotdetail>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Lotdetail>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Lotdetail>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Lotdetail> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Lotdetail>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Lotdetail>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Lotdetail>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Lotdetail> deleteManyOrFail(iterable $entities, array $options = [])
 */
class LotdetailsTable extends Table
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

        $this->setTable('lotdetails');
        $this->setDisplayField('bagnumber');
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
            ->requirePresence('lotid', 'create')
            ->notEmptyString('lotid');

        $validator
            ->requirePresence('bagid', 'create')
            ->notEmptyString('bagid');

        $validator
            ->scalar('bagnumber')
            ->maxLength('bagnumber', 50)
            ->requirePresence('bagnumber', 'create')
            ->notEmptyString('bagnumber');

        $validator
            ->numeric('poids')
            ->requirePresence('poids', 'create')
            ->notEmptyString('poids');

        $validator
            ->numeric('h2o')
            ->requirePresence('h2o', 'create')
            ->notEmptyString('h2o');

        $validator
            ->numeric('co')
            ->requirePresence('co', 'create')
            ->notEmptyString('co');

        $validator
            ->numeric('fe')
            ->requirePresence('fe', 'create')
            ->notEmptyString('fe');

        $validator
            ->numeric('ca')
            ->requirePresence('ca', 'create')
            ->notEmptyString('ca');

        $validator
            ->numeric('mg')
            ->requirePresence('mg', 'create')
            ->notEmptyString('mg');

        $validator
            ->numeric('ni')
            ->requirePresence('ni', 'create')
            ->notEmptyString('ni');

        $validator
            ->numeric('mn')
            ->requirePresence('mn', 'create')
            ->notEmptyString('mn');

        $validator
            ->numeric('si')
            ->requirePresence('si', 'create')
            ->notEmptyString('si');

        $validator
            ->numeric('al')
            ->requirePresence('al', 'create')
            ->notEmptyString('al');

        $validator
            ->numeric('cu')
            ->requirePresence('cu', 'create')
            ->notEmptyString('cu');

        $validator
            ->scalar('statut')
            ->maxLength('statut', 20)
            ->notEmptyString('statut');

        $validator
            ->dateTime('date')
            ->notEmptyDateTime('date');

        $validator
            ->integer('iduser')
            ->requirePresence('iduser', 'create')
            ->notEmptyString('iduser');

        return $validator;
    }
}
