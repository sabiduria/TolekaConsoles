<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Kcclabresults Model
 *
 * @method \App\Model\Entity\Kcclabresult newEmptyEntity()
 * @method \App\Model\Entity\Kcclabresult newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Kcclabresult> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Kcclabresult get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Kcclabresult findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Kcclabresult patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Kcclabresult> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Kcclabresult|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Kcclabresult saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Kcclabresult>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Kcclabresult>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Kcclabresult>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Kcclabresult> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Kcclabresult>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Kcclabresult>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Kcclabresult>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Kcclabresult> deleteManyOrFail(iterable $entities, array $options = [])
 */
class KcclabresultsTable extends Table
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

        $this->setTable('kcclabresults');
        $this->setDisplayField('composite');
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
            ->scalar('composite')
            ->maxLength('composite', 100)
            ->requirePresence('composite', 'create')
            ->notEmptyString('composite');

        $validator
            ->numeric('co')
            ->requirePresence('co', 'create')
            ->notEmptyString('co');

        $validator
            ->numeric('al')
            ->requirePresence('al', 'create')
            ->notEmptyString('al');

        $validator
            ->numeric('ca')
            ->requirePresence('ca', 'create')
            ->notEmptyString('ca');

        $validator
            ->numeric('cu')
            ->requirePresence('cu', 'create')
            ->notEmptyString('cu');

        $validator
            ->numeric('fe')
            ->requirePresence('fe', 'create')
            ->notEmptyString('fe');

        $validator
            ->numeric('mg')
            ->requirePresence('mg', 'create')
            ->notEmptyString('mg');

        $validator
            ->numeric('mn')
            ->requirePresence('mn', 'create')
            ->notEmptyString('mn');

        $validator
            ->numeric('ni')
            ->requirePresence('ni', 'create')
            ->notEmptyString('ni');

        $validator
            ->numeric('zn')
            ->requirePresence('zn', 'create')
            ->notEmptyString('zn');

        $validator
            ->numeric('u')
            ->requirePresence('u', 'create')
            ->notEmptyString('u');

        $validator
            ->numeric('h2o')
            ->requirePresence('h2o', 'create')
            ->notEmptyString('h2o');

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
