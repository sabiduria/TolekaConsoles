<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Formations Model
 *
 * @method \App\Model\Entity\Formation newEmptyEntity()
 * @method \App\Model\Entity\Formation newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Formation> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Formation get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Formation findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Formation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Formation> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Formation|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Formation saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Formation>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Formation>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Formation>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Formation> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Formation>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Formation>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Formation>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Formation> deleteManyOrFail(iterable $entities, array $options = [])
 */
class FormationsTable extends Table
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

        $this->setTable('formations');
        $this->setDisplayField('nomformation');
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
            ->requirePresence('iduser', 'create')
            ->notEmptyString('iduser');

        $validator
            ->scalar('nomformation')
            ->maxLength('nomformation', 255)
            ->requirePresence('nomformation', 'create')
            ->notEmptyString('nomformation');

        $validator
            ->scalar('periode')
            ->maxLength('periode', 50)
            ->requirePresence('periode', 'create')
            ->notEmptyString('periode');

        $validator
            ->scalar('etablissement')
            ->maxLength('etablissement', 100)
            ->requirePresence('etablissement', 'create')
            ->notEmptyString('etablissement');

        $validator
            ->scalar('lieu')
            ->maxLength('lieu', 100)
            ->requirePresence('lieu', 'create')
            ->notEmptyString('lieu');

        $validator
            ->scalar('pieceobtenue')
            ->maxLength('pieceobtenue', 100)
            ->requirePresence('pieceobtenue', 'create')
            ->notEmptyString('pieceobtenue');

        $validator
            ->scalar('nompiece')
            ->maxLength('nompiece', 255)
            ->requirePresence('nompiece', 'create')
            ->notEmptyString('nompiece');

        $validator
            ->scalar('date')
            ->maxLength('date', 20)
            ->requirePresence('date', 'create')
            ->notEmptyString('date');

        return $validator;
    }
}
