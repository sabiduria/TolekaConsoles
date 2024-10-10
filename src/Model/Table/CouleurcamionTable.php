<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Couleurcamion Model
 *
 * @method \App\Model\Entity\Couleurcamion newEmptyEntity()
 * @method \App\Model\Entity\Couleurcamion newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Couleurcamion> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Couleurcamion get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Couleurcamion findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Couleurcamion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Couleurcamion> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Couleurcamion|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Couleurcamion saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Couleurcamion>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Couleurcamion>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Couleurcamion>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Couleurcamion> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Couleurcamion>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Couleurcamion>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Couleurcamion>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Couleurcamion> deleteManyOrFail(iterable $entities, array $options = [])
 */
class CouleurcamionTable extends Table
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

        $this->setTable('couleurcamion');
        $this->setDisplayField('couleur');
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
            ->scalar('couleur')
            ->maxLength('couleur', 30)
            ->requirePresence('couleur', 'create')
            ->notEmptyString('couleur');

        return $validator;
    }
}
