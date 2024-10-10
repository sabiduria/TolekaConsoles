<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Transporteurs Model
 *
 * @method \App\Model\Entity\Transporteur newEmptyEntity()
 * @method \App\Model\Entity\Transporteur newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Transporteur> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Transporteur get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Transporteur findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Transporteur patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Transporteur> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Transporteur|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Transporteur saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Transporteur>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Transporteur>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Transporteur>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Transporteur> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Transporteur>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Transporteur>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Transporteur>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Transporteur> deleteManyOrFail(iterable $entities, array $options = [])
 */
class TransporteursTable extends Table
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

        $this->setTable('transporteurs');
        $this->setDisplayField('nomtrans');
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
            ->scalar('nomtrans')
            ->maxLength('nomtrans', 100)
            ->requirePresence('nomtrans', 'create')
            ->notEmptyString('nomtrans');

        $validator
            ->scalar('emailtrans')
            ->maxLength('emailtrans', 100)
            ->requirePresence('emailtrans', 'create')
            ->notEmptyString('emailtrans');

        $validator
            ->scalar('teltrans')
            ->maxLength('teltrans', 20)
            ->requirePresence('teltrans', 'create')
            ->notEmptyString('teltrans');

        $validator
            ->scalar('pays')
            ->maxLength('pays', 50)
            ->requirePresence('pays', 'create')
            ->notEmptyString('pays');

        $validator
            ->dateTime('date')
            ->requirePresence('date', 'create')
            ->notEmptyDateTime('date');

        $validator
            ->integer('iduser')
            ->requirePresence('iduser', 'create')
            ->notEmptyString('iduser');

        $validator
            ->scalar('statut')
            ->maxLength('statut', 20)
            ->notEmptyString('statut');

        return $validator;
    }
}
