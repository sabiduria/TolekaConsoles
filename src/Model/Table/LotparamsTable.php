<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Lotparams Model
 *
 * @method \App\Model\Entity\Lotparam newEmptyEntity()
 * @method \App\Model\Entity\Lotparam newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Lotparam> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Lotparam get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Lotparam findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Lotparam patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Lotparam> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Lotparam|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Lotparam saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Lotparam>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Lotparam>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Lotparam>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Lotparam> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Lotparam>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Lotparam>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Lotparam>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Lotparam> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class LotparamsTable extends Table
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

        $this->setTable('lotparams');
        $this->setDisplayField('lotnumber');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->scalar('lotnumber')
            ->maxLength('lotnumber', 20)
            ->requirePresence('lotnumber', 'create')
            ->notEmptyString('lotnumber');

        $validator
            ->scalar('product')
            ->maxLength('product', 20)
            ->requirePresence('product', 'create')
            ->notEmptyString('product');

        $validator
            ->scalar('physicalgrade')
            ->maxLength('physicalgrade', 20)
            ->requirePresence('physicalgrade', 'create')
            ->notEmptyString('physicalgrade');

        $validator
            ->scalar('unit')
            ->maxLength('unit', 20)
            ->requirePresence('unit', 'create')
            ->notEmptyString('unit');

        $validator
            ->scalar('createdby')
            ->maxLength('createdby', 45)
            ->requirePresence('createdby', 'create')
            ->notEmptyString('createdby');

        $validator
            ->scalar('modifiedby')
            ->maxLength('modifiedby', 45)
            ->requirePresence('modifiedby', 'create')
            ->notEmptyString('modifiedby');

        $validator
            ->boolean('deleted')
            ->notEmptyString('deleted');

        return $validator;
    }
}
