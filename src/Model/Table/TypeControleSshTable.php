<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TypeControleSsh Model
 *
 * @method \App\Model\Entity\TypeControleSsh newEmptyEntity()
 * @method \App\Model\Entity\TypeControleSsh newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\TypeControleSsh> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TypeControleSsh get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\TypeControleSsh findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\TypeControleSsh patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\TypeControleSsh> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\TypeControleSsh|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\TypeControleSsh saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\TypeControleSsh>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\TypeControleSsh>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\TypeControleSsh>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\TypeControleSsh> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\TypeControleSsh>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\TypeControleSsh>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\TypeControleSsh>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\TypeControleSsh> deleteManyOrFail(iterable $entities, array $options = [])
 */
class TypeControleSshTable extends Table
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

        $this->setTable('type_controle_ssh');
        $this->setDisplayField('controle');
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
            ->scalar('controle')
            ->maxLength('controle', 255)
            ->requirePresence('controle', 'create')
            ->notEmptyString('controle');

        return $validator;
    }
}
