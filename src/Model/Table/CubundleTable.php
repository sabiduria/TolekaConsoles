<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cubundle Model
 *
 * @property \App\Model\Table\AdminSyncTable&\Cake\ORM\Association\HasMany $AdminSync
 * @property \App\Model\Table\DeviceSyncTable&\Cake\ORM\Association\HasMany $DeviceSync
 *
 * @method \App\Model\Entity\Cubundle newEmptyEntity()
 * @method \App\Model\Entity\Cubundle newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Cubundle> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Cubundle get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Cubundle findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Cubundle patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Cubundle> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Cubundle|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Cubundle saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Cubundle>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Cubundle>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Cubundle>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Cubundle> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Cubundle>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Cubundle>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Cubundle>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Cubundle> deleteManyOrFail(iterable $entities, array $options = [])
 */
class CubundleTable extends Table
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

        $this->setTable('cubundle');
        $this->setDisplayField('dateprod');
        $this->setPrimaryKey('id');

        $this->hasMany('AdminSync', [
            'foreignKey' => 'cubundle_id',
        ]);
        $this->hasMany('DeviceSync', [
            'foreignKey' => 'cubundle_id',
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
            ->scalar('dateprod')
            ->maxLength('dateprod', 50)
            ->requirePresence('dateprod', 'create')
            ->notEmptyString('dateprod');

        $validator
            ->scalar('unit')
            ->maxLength('unit', 10)
            ->notEmptyString('unit');

        $validator
            ->scalar('lotnumber')
            ->maxLength('lotnumber', 200)
            ->requirePresence('lotnumber', 'create')
            ->notEmptyString('lotnumber');

        $validator
            ->scalar('imexlot')
            ->maxLength('imexlot', 50)
            ->requirePresence('imexlot', 'create')
            ->notEmptyString('imexlot');

        $validator
            ->scalar('bundlecode')
            ->maxLength('bundlecode', 50)
            ->requirePresence('bundlecode', 'create')
            ->notEmptyString('bundlecode');

        $validator
            ->scalar('composite')
            ->maxLength('composite', 200)
            ->requirePresence('composite', 'create')
            ->notEmptyString('composite');

        $validator
            ->numeric('grossweight')
            ->requirePresence('grossweight', 'create')
            ->notEmptyString('grossweight');

        $validator
            ->numeric('netweight')
            ->requirePresence('netweight', 'create')
            ->notEmptyString('netweight');

        $validator
            ->scalar('visualgrade')
            ->maxLength('visualgrade', 10)
            ->requirePresence('visualgrade', 'create')
            ->notEmptyString('visualgrade');

        $validator
            ->scalar('chemicalgrade')
            ->maxLength('chemicalgrade', 10)
            ->requirePresence('chemicalgrade', 'create')
            ->notEmptyString('chemicalgrade');

        $validator
            ->scalar('finalgrade')
            ->maxLength('finalgrade', 10)
            ->requirePresence('finalgrade', 'create')
            ->notEmptyString('finalgrade');

        $validator
            ->scalar('location')
            ->maxLength('location', 20)
            ->requirePresence('location', 'create')
            ->notEmptyString('location');

        $validator
            ->scalar('charge')
            ->maxLength('charge', 10)
            ->notEmptyString('charge');

        $validator
            ->date('dateloaded')
            ->requirePresence('dateloaded', 'create')
            ->notEmptyDate('dateloaded');

        $validator
            ->dateTime('date')
            ->requirePresence('date', 'create')
            ->notEmptyDateTime('date');

        $validator
            ->integer('iduser')
            ->requirePresence('iduser', 'create')
            ->notEmptyString('iduser');

        $validator
            ->scalar('seal1')
            ->maxLength('seal1', 100)
            ->requirePresence('seal1', 'create')
            ->notEmptyString('seal1');

        $validator
            ->scalar('seal2')
            ->maxLength('seal2', 100)
            ->requirePresence('seal2', 'create')
            ->notEmptyString('seal2');

        $validator
            ->date('dateadded')
            ->requirePresence('dateadded', 'create')
            ->notEmptyDate('dateadded');

        $validator
            ->date('datechecked')
            ->requirePresence('datechecked', 'create')
            ->notEmptyDate('datechecked');

        $validator
            ->boolean('synced')
            ->notEmptyString('synced');

        return $validator;
    }
}
