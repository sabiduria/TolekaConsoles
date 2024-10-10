<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Typeitem Model
 *
 * @method \App\Model\Entity\Typeitem newEmptyEntity()
 * @method \App\Model\Entity\Typeitem newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Typeitem> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Typeitem get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Typeitem findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Typeitem patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Typeitem> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Typeitem|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Typeitem saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Typeitem>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Typeitem>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Typeitem>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Typeitem> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Typeitem>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Typeitem>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Typeitem>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Typeitem> deleteManyOrFail(iterable $entities, array $options = [])
 */
class TypeitemTable extends Table
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

        $this->setTable('typeitem');
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
            ->maxLength('type', 255)
            ->requirePresence('type', 'create')
            ->notEmptyString('type');

        return $validator;
    }
}
