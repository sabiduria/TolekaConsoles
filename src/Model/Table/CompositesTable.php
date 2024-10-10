<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Composites Model
 *
 * @method \App\Model\Entity\Composite newEmptyEntity()
 * @method \App\Model\Entity\Composite newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Composite> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Composite get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Composite findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Composite patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Composite> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Composite|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Composite saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Composite>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Composite>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Composite>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Composite> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Composite>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Composite>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Composite>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Composite> deleteManyOrFail(iterable $entities, array $options = [])
 */
class CompositesTable extends Table
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

        $this->setTable('composites');
        $this->setDisplayField('name');
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
            ->scalar('name')
            ->maxLength('name', 45)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('code')
            ->maxLength('code', 15)
            ->requirePresence('code', 'create')
            ->notEmptyString('code');

        $validator
            ->numeric('threshold')
            ->notEmptyString('threshold');

        return $validator;
    }
}
