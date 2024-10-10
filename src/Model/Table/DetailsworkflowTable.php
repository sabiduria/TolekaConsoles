<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Detailsworkflow Model
 *
 * @method \App\Model\Entity\Detailsworkflow newEmptyEntity()
 * @method \App\Model\Entity\Detailsworkflow newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Detailsworkflow> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Detailsworkflow get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Detailsworkflow findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Detailsworkflow patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Detailsworkflow> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Detailsworkflow|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Detailsworkflow saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Detailsworkflow>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Detailsworkflow>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Detailsworkflow>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Detailsworkflow> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Detailsworkflow>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Detailsworkflow>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Detailsworkflow>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Detailsworkflow> deleteManyOrFail(iterable $entities, array $options = [])
 */
class DetailsworkflowTable extends Table
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

        $this->setTable('detailsworkflow');
        $this->setDisplayField('action');
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
            ->integer('idworkflow')
            ->requirePresence('idworkflow', 'create')
            ->notEmptyString('idworkflow');

        $validator
            ->integer('rolecmd')
            ->requirePresence('rolecmd', 'create')
            ->notEmptyString('rolecmd');

        $validator
            ->scalar('action')
            ->maxLength('action', 30)
            ->requirePresence('action', 'create')
            ->notEmptyString('action');

        $validator
            ->integer('numsequence')
            ->notEmptyString('numsequence');

        $validator
            ->integer('iduser')
            ->requirePresence('iduser', 'create')
            ->notEmptyString('iduser');

        $validator
            ->dateTime('date')
            ->requirePresence('date', 'create')
            ->notEmptyDateTime('date');

        return $validator;
    }
}
