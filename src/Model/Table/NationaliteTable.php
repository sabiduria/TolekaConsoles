<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Nationalite Model
 *
 * @method \App\Model\Entity\Nationalite newEmptyEntity()
 * @method \App\Model\Entity\Nationalite newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Nationalite> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Nationalite get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Nationalite findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Nationalite patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Nationalite> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Nationalite|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Nationalite saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Nationalite>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Nationalite>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Nationalite>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Nationalite> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Nationalite>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Nationalite>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Nationalite>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Nationalite> deleteManyOrFail(iterable $entities, array $options = [])
 */
class NationaliteTable extends Table
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

        $this->setTable('nationalite');
        $this->setDisplayField('nationalite');
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
            ->scalar('nationalite')
            ->maxLength('nationalite', 100)
            ->notEmptyString('nationalite');

        $validator
            ->scalar('langue')
            ->maxLength('langue', 15)
            ->notEmptyString('langue');

        $validator
            ->scalar('statut')
            ->maxLength('statut', 20)
            ->notEmptyString('statut');

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
