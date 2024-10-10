<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Logcon Model
 *
 * @method \App\Model\Entity\Logcon newEmptyEntity()
 * @method \App\Model\Entity\Logcon newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Logcon> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Logcon get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Logcon findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Logcon patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Logcon> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Logcon|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Logcon saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Logcon>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Logcon>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Logcon>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Logcon> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Logcon>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Logcon>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Logcon>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Logcon> deleteManyOrFail(iterable $entities, array $options = [])
 */
class LogconTable extends Table
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

        $this->setTable('logcon');
        $this->setDisplayField('user');
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
            ->scalar('user')
            ->maxLength('user', 100)
            ->requirePresence('user', 'create')
            ->notEmptyString('user');

        $validator
            ->scalar('etat')
            ->maxLength('etat', 50)
            ->requirePresence('etat', 'create')
            ->notEmptyString('etat');

        $validator
            ->dateTime('date')
            ->requirePresence('date', 'create')
            ->notEmptyDateTime('date');

        $validator
            ->scalar('checked')
            ->maxLength('checked', 5)
            ->notEmptyString('checked');

        $validator
            ->scalar('jour')
            ->maxLength('jour', 20)
            ->requirePresence('jour', 'create')
            ->notEmptyString('jour');

        return $validator;
    }
}
