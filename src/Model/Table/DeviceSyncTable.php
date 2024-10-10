<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DeviceSync Model
 *
 * @property \App\Model\Table\CohbagsTable&\Cake\ORM\Association\BelongsTo $Cohbags
 * @property \App\Model\Table\CohlotsTable&\Cake\ORM\Association\BelongsTo $Cohlots
 *
 * @method \App\Model\Entity\DeviceSync newEmptyEntity()
 * @method \App\Model\Entity\DeviceSync newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\DeviceSync> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DeviceSync get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\DeviceSync findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\DeviceSync patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\DeviceSync> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\DeviceSync|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\DeviceSync saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\DeviceSync>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\DeviceSync>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\DeviceSync>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\DeviceSync> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\DeviceSync>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\DeviceSync>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\DeviceSync>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\DeviceSync> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DeviceSyncTable extends Table
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

        $this->setTable('device_sync');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Cohbags', [
            'foreignKey' => 'cohbags_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Cohlots', [
            'foreignKey' => 'cohlots_id',
            'joinType' => 'INNER',
        ]);
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
            ->scalar('imei')
            ->maxLength('imei', 100)
            ->requirePresence('imei', 'create')
            ->notEmptyString('imei')
            ->add('imei', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->integer('cohbags_id')
            ->notEmptyString('cohbags_id');

        $validator
            ->integer('cohlots_id')
            ->notEmptyString('cohlots_id');

        $validator
            ->integer('cubundle_id')
            ->requirePresence('cubundle_id', 'create')
            ->notEmptyString('cubundle_id');

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

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->isUnique(['imei']), ['errorField' => 'imei']);
        $rules->add($rules->existsIn(['cohbags_id'], 'Cohbags'), ['errorField' => 'cohbags_id']);
        $rules->add($rules->existsIn(['cohlots_id'], 'Cohlots'), ['errorField' => 'cohlots_id']);

        return $rules;
    }
}
