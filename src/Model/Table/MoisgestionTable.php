<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Moisgestion Model
 *
 * @method \App\Model\Entity\Moisgestion newEmptyEntity()
 * @method \App\Model\Entity\Moisgestion newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Moisgestion> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Moisgestion get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Moisgestion findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Moisgestion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Moisgestion> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Moisgestion|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Moisgestion saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Moisgestion>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Moisgestion>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Moisgestion>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Moisgestion> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Moisgestion>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Moisgestion>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Moisgestion>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Moisgestion> deleteManyOrFail(iterable $entities, array $options = [])
 */
class MoisgestionTable extends Table
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

        $this->setTable('moisgestion');
        $this->setDisplayField('moisgestion');
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
            ->scalar('moisgestion')
            ->maxLength('moisgestion', 10)
            ->notEmptyString('moisgestion');

        return $validator;
    }
}
