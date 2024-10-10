<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Prefixes Model
 *
 * @method \App\Model\Entity\Prefix newEmptyEntity()
 * @method \App\Model\Entity\Prefix newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Prefix> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Prefix get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Prefix findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Prefix patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Prefix> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Prefix|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Prefix saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Prefix>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Prefix>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Prefix>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Prefix> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Prefix>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Prefix>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Prefix>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Prefix> deleteManyOrFail(iterable $entities, array $options = [])
 */
class PrefixesTable extends Table
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

        $this->setTable('prefixes');
        $this->setDisplayField('prefixe');
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
            ->scalar('prefixe')
            ->maxLength('prefixe', 10)
            ->requirePresence('prefixe', 'create')
            ->notEmptyString('prefixe');

        $validator
            ->scalar('type')
            ->maxLength('type', 30)
            ->requirePresence('type', 'create')
            ->notEmptyString('type');

        $validator
            ->scalar('status')
            ->maxLength('status', 10)
            ->notEmptyString('status');

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
