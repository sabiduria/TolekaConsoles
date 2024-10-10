<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Transactionswb Model
 *
 * @method \App\Model\Entity\Transactionswb newEmptyEntity()
 * @method \App\Model\Entity\Transactionswb newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Transactionswb> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Transactionswb get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Transactionswb findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Transactionswb patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Transactionswb> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Transactionswb|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Transactionswb saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Transactionswb>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Transactionswb>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Transactionswb>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Transactionswb> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Transactionswb>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Transactionswb>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Transactionswb>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Transactionswb> deleteManyOrFail(iterable $entities, array $options = [])
 */
class TransactionswbTable extends Table
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

        $this->setTable('transactionswb');
        $this->setDisplayField('wbop');
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
            ->requirePresence('idtrip', 'create')
            ->notEmptyString('idtrip');

        $validator
            ->scalar('wbop')
            ->maxLength('wbop', 50)
            ->requirePresence('wbop', 'create')
            ->notEmptyString('wbop');

        $validator
            ->dateTime('date')
            ->requirePresence('date', 'create')
            ->notEmptyDateTime('date');

        $validator
            ->scalar('typetrans')
            ->maxLength('typetrans', 50)
            ->requirePresence('typetrans', 'create')
            ->notEmptyString('typetrans');

        $validator
            ->numeric('tare')
            ->requirePresence('tare', 'create')
            ->notEmptyString('tare');

        $validator
            ->integer('poidsbrut')
            ->requirePresence('poidsbrut', 'create')
            ->notEmptyString('poidsbrut');

        $validator
            ->integer('poidsnet')
            ->requirePresence('poidsnet', 'create')
            ->notEmptyString('poidsnet');

        $validator
            ->integer('nbitems')
            ->requirePresence('nbitems', 'create')
            ->notEmptyString('nbitems');

        $validator
            ->scalar('decision')
            ->maxLength('decision', 255)
            ->requirePresence('decision', 'create')
            ->notEmptyString('decision');

        $validator
            ->scalar('wbticket')
            ->maxLength('wbticket', 255)
            ->requirePresence('wbticket', 'create')
            ->notEmptyString('wbticket');

        $validator
            ->integer('nbpass')
            ->requirePresence('nbpass', 'create')
            ->notEmptyString('nbpass');

        $validator
            ->integer('variance')
            ->requirePresence('variance', 'create')
            ->notEmptyString('variance');

        $validator
            ->numeric('purvar')
            ->requirePresence('purvar', 'create')
            ->notEmptyString('purvar');

        $validator
            ->scalar('lienwbticket')
            ->maxLength('lienwbticket', 255)
            ->requirePresence('lienwbticket', 'create')
            ->notEmptyString('lienwbticket');

        return $validator;
    }
}
