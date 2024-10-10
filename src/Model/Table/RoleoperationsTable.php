<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Roleoperations Model
 *
 * @method \App\Model\Entity\Roleoperation newEmptyEntity()
 * @method \App\Model\Entity\Roleoperation newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Roleoperation> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Roleoperation get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Roleoperation findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Roleoperation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Roleoperation> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Roleoperation|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Roleoperation saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Roleoperation>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Roleoperation>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Roleoperation>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Roleoperation> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Roleoperation>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Roleoperation>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Roleoperation>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Roleoperation> deleteManyOrFail(iterable $entities, array $options = [])
 */
class RoleoperationsTable extends Table
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

        $this->setTable('roleoperations');
        $this->setDisplayField('roleop');
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
            ->scalar('roleop')
            ->maxLength('roleop', 100)
            ->requirePresence('roleop', 'create')
            ->notEmptyString('roleop');

        return $validator;
    }
}
