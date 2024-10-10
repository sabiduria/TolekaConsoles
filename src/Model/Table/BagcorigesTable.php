<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Bagcoriges Model
 *
 * @method \App\Model\Entity\Bagcorige newEmptyEntity()
 * @method \App\Model\Entity\Bagcorige newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Bagcorige> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Bagcorige get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Bagcorige findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Bagcorige patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Bagcorige> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Bagcorige|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Bagcorige saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Bagcorige>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Bagcorige>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Bagcorige>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Bagcorige> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Bagcorige>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Bagcorige>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Bagcorige>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Bagcorige> deleteManyOrFail(iterable $entities, array $options = [])
 */
class BagcorigesTable extends Table
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

        $this->setTable('bagcoriges');
        $this->setDisplayField('bagid');
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
            ->scalar('bagid')
            ->maxLength('bagid', 100)
            ->requirePresence('bagid', 'create')
            ->notEmptyString('bagid');

        $validator
            ->date('dateprod')
            ->requirePresence('dateprod', 'create')
            ->notEmptyDate('dateprod');

        return $validator;
    }
}
