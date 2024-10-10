<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Domaineetude Model
 *
 * @method \App\Model\Entity\Domaineetude newEmptyEntity()
 * @method \App\Model\Entity\Domaineetude newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Domaineetude> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Domaineetude get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Domaineetude findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Domaineetude patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Domaineetude> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Domaineetude|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Domaineetude saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Domaineetude>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Domaineetude>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Domaineetude>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Domaineetude> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Domaineetude>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Domaineetude>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Domaineetude>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Domaineetude> deleteManyOrFail(iterable $entities, array $options = [])
 */
class DomaineetudeTable extends Table
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

        $this->setTable('domaineetude');
        $this->setDisplayField('domaine');
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
            ->scalar('domaine')
            ->maxLength('domaine', 100)
            ->requirePresence('domaine', 'create')
            ->notEmptyString('domaine');

        return $validator;
    }
}
