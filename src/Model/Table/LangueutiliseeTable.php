<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Langueutilisee Model
 *
 * @method \App\Model\Entity\Langueutilisee newEmptyEntity()
 * @method \App\Model\Entity\Langueutilisee newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Langueutilisee> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Langueutilisee get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Langueutilisee findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Langueutilisee patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Langueutilisee> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Langueutilisee|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Langueutilisee saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Langueutilisee>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Langueutilisee>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Langueutilisee>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Langueutilisee> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Langueutilisee>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Langueutilisee>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Langueutilisee>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Langueutilisee> deleteManyOrFail(iterable $entities, array $options = [])
 */
class LangueutiliseeTable extends Table
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

        $this->setTable('langueutilisee');
        $this->setDisplayField('langue');
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
            ->scalar('langue')
            ->maxLength('langue', 2)
            ->requirePresence('langue', 'create')
            ->notEmptyString('langue');

        $validator
            ->integer('iduser')
            ->requirePresence('iduser', 'create')
            ->notEmptyString('iduser');

        $validator
            ->dateTime('datemiseajour')
            ->requirePresence('datemiseajour', 'create')
            ->notEmptyDateTime('datemiseajour');

        return $validator;
    }
}
