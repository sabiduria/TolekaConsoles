<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Emballage Model
 *
 * @method \App\Model\Entity\Emballage newEmptyEntity()
 * @method \App\Model\Entity\Emballage newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Emballage> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Emballage get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Emballage findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Emballage patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Emballage> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Emballage|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Emballage saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Emballage>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Emballage>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Emballage>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Emballage> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Emballage>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Emballage>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Emballage>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Emballage> deleteManyOrFail(iterable $entities, array $options = [])
 */
class EmballageTable extends Table
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

        $this->setTable('emballage');
        $this->setDisplayField('emballage');
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
            ->scalar('emballage')
            ->maxLength('emballage', 50)
            ->requirePresence('emballage', 'create')
            ->notEmptyString('emballage');

        $validator
            ->requirePresence('iduser', 'create')
            ->notEmptyString('iduser');

        $validator
            ->dateTime('date')
            ->requirePresence('date', 'create')
            ->notEmptyDateTime('date');

        return $validator;
    }
}
