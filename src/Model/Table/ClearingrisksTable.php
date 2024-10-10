<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Clearingrisks Model
 *
 * @method \App\Model\Entity\Clearingrisk newEmptyEntity()
 * @method \App\Model\Entity\Clearingrisk newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Clearingrisk> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Clearingrisk get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Clearingrisk findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Clearingrisk patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Clearingrisk> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Clearingrisk|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Clearingrisk saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Clearingrisk>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Clearingrisk>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Clearingrisk>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Clearingrisk> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Clearingrisk>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Clearingrisk>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Clearingrisk>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Clearingrisk> deleteManyOrFail(iterable $entities, array $options = [])
 */
class ClearingrisksTable extends Table
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

        $this->setTable('clearingrisks');
        $this->setDisplayField('lotnumber');
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
            ->scalar('lotnumber')
            ->maxLength('lotnumber', 30)
            ->requirePresence('lotnumber', 'create')
            ->notEmptyString('lotnumber');

        $validator
            ->scalar('imexlot')
            ->maxLength('imexlot', 30)
            ->requirePresence('imexlot', 'create')
            ->notEmptyString('imexlot');

        $validator
            ->dateTime('riskdate')
            ->requirePresence('riskdate', 'create')
            ->notEmptyDateTime('riskdate');

        $validator
            ->scalar('riskop')
            ->maxLength('riskop', 100)
            ->requirePresence('riskop', 'create')
            ->notEmptyString('riskop');

        $validator
            ->scalar('commentrisk')
            ->maxLength('commentrisk', 255)
            ->requirePresence('commentrisk', 'create')
            ->notEmptyString('commentrisk');

        $validator
            ->scalar('statutrisk')
            ->maxLength('statutrisk', 255)
            ->requirePresence('statutrisk', 'create')
            ->notEmptyString('statutrisk');

        return $validator;
    }
}
