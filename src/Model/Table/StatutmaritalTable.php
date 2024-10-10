<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Statutmarital Model
 *
 * @method \App\Model\Entity\Statutmarital newEmptyEntity()
 * @method \App\Model\Entity\Statutmarital newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Statutmarital> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Statutmarital get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Statutmarital findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Statutmarital patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Statutmarital> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Statutmarital|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Statutmarital saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Statutmarital>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Statutmarital>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Statutmarital>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Statutmarital> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Statutmarital>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Statutmarital>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Statutmarital>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Statutmarital> deleteManyOrFail(iterable $entities, array $options = [])
 */
class StatutmaritalTable extends Table
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

        $this->setTable('statutmarital');
        $this->setDisplayField('statutmarital');
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
            ->scalar('statutmarital')
            ->maxLength('statutmarital', 100)
            ->requirePresence('statutmarital', 'create')
            ->notEmptyString('statutmarital');

        return $validator;
    }
}
