<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Classification Model
 *
 * @method \App\Model\Entity\Classification newEmptyEntity()
 * @method \App\Model\Entity\Classification newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Classification> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Classification get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Classification findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Classification patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Classification> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Classification|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Classification saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Classification>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Classification>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Classification>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Classification> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Classification>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Classification>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Classification>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Classification> deleteManyOrFail(iterable $entities, array $options = [])
 */
class ClassificationTable extends Table
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

        $this->setTable('classification');
        $this->setDisplayField('classe');
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
            ->scalar('classe')
            ->maxLength('classe', 1)
            ->notEmptyString('classe');

        $validator
            ->scalar('description')
            ->maxLength('description', 100)
            ->requirePresence('description', 'create')
            ->notEmptyString('description');

        $validator
            ->integer('iduser')
            ->requirePresence('iduser', 'create')
            ->notEmptyString('iduser');

        $validator
            ->dateTime('datemiseajour')
            ->requirePresence('datemiseajour', 'create')
            ->notEmptyDateTime('datemiseajour');

        return $validator;
    }
}
