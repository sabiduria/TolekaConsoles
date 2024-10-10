<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Detailslot Model
 *
 * @method \App\Model\Entity\Detailslot newEmptyEntity()
 * @method \App\Model\Entity\Detailslot newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Detailslot> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Detailslot get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Detailslot findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Detailslot patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Detailslot> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Detailslot|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Detailslot saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Detailslot>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Detailslot>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Detailslot>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Detailslot> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Detailslot>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Detailslot>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Detailslot>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Detailslot> deleteManyOrFail(iterable $entities, array $options = [])
 */
class DetailslotTable extends Table
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

        $this->setTable('detailslot');
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
            ->maxLength('numlot', 50)
            ->requirePresence('numlot', 'create')
            ->notEmptyString('numlot');

        $validator
            ->requirePresence('idbag', 'create')
            ->notEmptyString('idbag');

        $validator
            ->scalar('bagid')
            ->maxLength('bagid', 50)
            ->requirePresence('bagid', 'create')
            ->notEmptyString('bagid');

        $validator
            ->scalar('h20')
            ->maxLength('h20', 10)
            ->requirePresence('h20', 'create')
            ->notEmptyString('h20');

        $validator
            ->scalar('co')
            ->maxLength('co', 20)
            ->requirePresence('co', 'create')
            ->notEmptyString('co');

        $validator
            ->scalar('u')
            ->maxLength('u', 20)
            ->requirePresence('u', 'create')
            ->notEmptyString('u');

        $validator
            ->scalar('mg')
            ->maxLength('mg', 20)
            ->requirePresence('mg', 'create')
            ->notEmptyString('mg');

        $validator
            ->scalar('mn')
            ->maxLength('mn', 20)
            ->requirePresence('mn', 'create')
            ->notEmptyString('mn');

        $validator
            ->scalar('ni')
            ->maxLength('ni', 20)
            ->requirePresence('ni', 'create')
            ->notEmptyString('ni');

        $validator
            ->scalar('fe')
            ->maxLength('fe', 20)
            ->requirePresence('fe', 'create')
            ->notEmptyString('fe');

        $validator
            ->scalar('ca')
            ->maxLength('ca', 20)
            ->requirePresence('ca', 'create')
            ->notEmptyString('ca');

        $validator
            ->scalar('si')
            ->maxLength('si', 20)
            ->requirePresence('si', 'create')
            ->notEmptyString('si');

        $validator
            ->scalar('al')
            ->maxLength('al', 20)
            ->requirePresence('al', 'create')
            ->notEmptyString('al');

        $validator
            ->scalar('cu')
            ->maxLength('cu', 20)
            ->requirePresence('cu', 'create')
            ->notEmptyString('cu');

        $validator
            ->scalar('cocont')
            ->maxLength('cocont', 20)
            ->requirePresence('cocont', 'create')
            ->notEmptyString('cocont');

        $validator
            ->scalar('spec')
            ->maxLength('spec', 30)
            ->requirePresence('spec', 'create')
            ->notEmptyString('spec');

        $validator
            ->integer('user')
            ->requirePresence('user', 'create')
            ->notEmptyString('user');

        $validator
            ->dateTime('datecrea')
            ->requirePresence('datecrea', 'create')
            ->notEmptyDateTime('datecrea');

        $validator
            ->scalar('dateprod')
            ->maxLength('dateprod', 20)
            ->requirePresence('dateprod', 'create')
            ->notEmptyString('dateprod');

        $validator
            ->scalar('poids')
            ->maxLength('poids', 20)
            ->requirePresence('poids', 'create')
            ->notEmptyString('poids');

        $validator
            ->scalar('composite')
            ->maxLength('composite', 50)
            ->requirePresence('composite', 'create')
            ->notEmptyString('composite');

        $validator
            ->scalar('zn')
            ->maxLength('zn', 20)
            ->requirePresence('zn', 'create')
            ->notEmptyString('zn');

        return $validator;
    }
}
