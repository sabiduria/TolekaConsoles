<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Rolead3 Model
 *
 * @method \App\Model\Entity\Rolead3 newEmptyEntity()
 * @method \App\Model\Entity\Rolead3 newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Rolead3> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Rolead3 get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Rolead3 findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Rolead3 patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Rolead3> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Rolead3|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Rolead3 saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Rolead3>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Rolead3>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Rolead3>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Rolead3> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Rolead3>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Rolead3>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Rolead3>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Rolead3> deleteManyOrFail(iterable $entities, array $options = [])
 */
class Rolead3Table extends Table
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

        $this->setTable('rolead3');
        $this->setDisplayField('role');
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
            ->scalar('role')
            ->maxLength('role', 20)
            ->requirePresence('role', 'create')
            ->notEmptyString('role');

        return $validator;
    }
}
