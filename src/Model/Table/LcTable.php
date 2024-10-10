<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Lc Model
 *
 * @method \App\Model\Entity\Lc newEmptyEntity()
 * @method \App\Model\Entity\Lc newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Lc> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Lc get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Lc findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Lc patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Lc> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Lc|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Lc saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Lc>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Lc>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Lc>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Lc> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Lc>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Lc>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Lc>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Lc> deleteManyOrFail(iterable $entities, array $options = [])
 */
class LcTable extends Table
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

        $this->setTable('lc');
        $this->setDisplayField('month');
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
            ->integer('year')
            ->requirePresence('year', 'create')
            ->notEmptyString('year');

        $validator
            ->scalar('month')
            ->maxLength('month', 2)
            ->requirePresence('month', 'create')
            ->notEmptyString('month');

        $validator
            ->scalar('pk')
            ->maxLength('pk', 255)
            ->requirePresence('pk', 'create')
            ->notEmptyString('pk');

        $validator
            ->dateTime('date')
            ->requirePresence('date', 'create')
            ->notEmptyDateTime('date');

        $validator
            ->integer('iduser')
            ->requirePresence('iduser', 'create')
            ->notEmptyString('iduser');

        return $validator;
    }
}
