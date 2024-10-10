<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Scansecurityseals Model
 *
 * @method \App\Model\Entity\Scansecurityseal newEmptyEntity()
 * @method \App\Model\Entity\Scansecurityseal newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Scansecurityseal> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Scansecurityseal get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Scansecurityseal findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Scansecurityseal patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Scansecurityseal> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Scansecurityseal|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Scansecurityseal saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Scansecurityseal>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Scansecurityseal>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Scansecurityseal>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Scansecurityseal> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Scansecurityseal>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Scansecurityseal>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Scansecurityseal>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Scansecurityseal> deleteManyOrFail(iterable $entities, array $options = [])
 */
class ScansecuritysealsTable extends Table
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

        $this->setTable('scansecurityseals');
        $this->setDisplayField('numlot');
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
            ->scalar('numlot')
            ->maxLength('numlot', 100)
            ->requirePresence('numlot', 'create')
            ->notEmptyString('numlot');

        $validator
            ->scalar('imexlot')
            ->maxLength('imexlot', 100)
            ->requirePresence('imexlot', 'create')
            ->notEmptyString('imexlot');

        $validator
            ->scalar('sealsscanned')
            ->maxLength('sealsscanned', 30)
            ->notEmptyString('sealsscanned');

        $validator
            ->scalar('operator')
            ->maxLength('operator', 100)
            ->requirePresence('operator', 'create')
            ->notEmptyString('operator');

        $validator
            ->dateTime('date')
            ->requirePresence('date', 'create')
            ->notEmptyDateTime('date');

        return $validator;
    }
}
