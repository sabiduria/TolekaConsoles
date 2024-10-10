<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Checkcocontent Model
 *
 * @method \App\Model\Entity\Checkcocontent newEmptyEntity()
 * @method \App\Model\Entity\Checkcocontent newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Checkcocontent> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Checkcocontent get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Checkcocontent findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Checkcocontent patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Checkcocontent> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Checkcocontent|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Checkcocontent saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Checkcocontent>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Checkcocontent>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Checkcocontent>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Checkcocontent> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Checkcocontent>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Checkcocontent>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Checkcocontent>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Checkcocontent> deleteManyOrFail(iterable $entities, array $options = [])
 */
class CheckcocontentTable extends Table
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

        $this->setTable('checkcocontent');
        $this->setDisplayField('imexlot');
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
            ->scalar('imexlot')
            ->maxLength('imexlot', 50)
            ->requirePresence('imexlot', 'create')
            ->notEmptyString('imexlot');

        $validator
            ->scalar('bagid')
            ->maxLength('bagid', 50)
            ->requirePresence('bagid', 'create')
            ->notEmptyString('bagid');

        $validator
            ->numeric('poids')
            ->requirePresence('poids', 'create')
            ->notEmptyString('poids');

        $validator
            ->numeric('h2o')
            ->requirePresence('h2o', 'create')
            ->notEmptyString('h2o');

        $validator
            ->numeric('co')
            ->requirePresence('co', 'create')
            ->notEmptyString('co');

        $validator
            ->numeric('vpoids')
            ->requirePresence('vpoids', 'create')
            ->notEmptyString('vpoids');

        $validator
            ->numeric('vh2o')
            ->requirePresence('vh2o', 'create')
            ->notEmptyString('vh2o');

        $validator
            ->numeric('vco')
            ->requirePresence('vco', 'create')
            ->notEmptyString('vco');

        $validator
            ->numeric('produith2o')
            ->requirePresence('produith2o', 'create')
            ->notEmptyString('produith2o');

        $validator
            ->numeric('produitco')
            ->requirePresence('produitco', 'create')
            ->notEmptyString('produitco');

        $validator
            ->dateTime('date')
            ->requirePresence('date', 'create')
            ->notEmptyDateTime('date');

        $validator
            ->integer('iduser')
            ->requirePresence('iduser', 'create')
            ->notEmptyString('iduser');

        $validator
            ->scalar('loadperiod')
            ->maxLength('loadperiod', 10)
            ->notEmptyString('loadperiod');

        return $validator;
    }
}
