<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Typecamion Model
 *
 * @method \App\Model\Entity\Typecamion newEmptyEntity()
 * @method \App\Model\Entity\Typecamion newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Typecamion> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Typecamion get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Typecamion findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Typecamion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Typecamion> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Typecamion|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Typecamion saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Typecamion>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Typecamion>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Typecamion>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Typecamion> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Typecamion>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Typecamion>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Typecamion>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Typecamion> deleteManyOrFail(iterable $entities, array $options = [])
 */
class TypecamionTable extends Table
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

        $this->setTable('typecamion');
        $this->setDisplayField('type');
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
            ->scalar('type')
            ->maxLength('type', 30)
            ->requirePresence('type', 'create')
            ->notEmptyString('type');

        return $validator;
    }
}
