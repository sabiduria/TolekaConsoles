<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Typeconcentrate Model
 *
 * @method \App\Model\Entity\Typeconcentrate newEmptyEntity()
 * @method \App\Model\Entity\Typeconcentrate newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Typeconcentrate> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Typeconcentrate get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Typeconcentrate findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Typeconcentrate patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Typeconcentrate> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Typeconcentrate|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Typeconcentrate saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Typeconcentrate>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Typeconcentrate>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Typeconcentrate>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Typeconcentrate> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Typeconcentrate>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Typeconcentrate>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Typeconcentrate>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Typeconcentrate> deleteManyOrFail(iterable $entities, array $options = [])
 */
class TypeconcentrateTable extends Table
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

        $this->setTable('typeconcentrate');
        $this->setDisplayField('nom');
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
            ->scalar('nom')
            ->maxLength('nom', 100)
            ->requirePresence('nom', 'create')
            ->notEmptyString('nom');

        return $validator;
    }
}
