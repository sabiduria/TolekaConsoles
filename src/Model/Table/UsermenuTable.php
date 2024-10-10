<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Usermenu Model
 *
 * @method \App\Model\Entity\Usermenu newEmptyEntity()
 * @method \App\Model\Entity\Usermenu newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Usermenu> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Usermenu get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Usermenu findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Usermenu patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Usermenu> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Usermenu|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Usermenu saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Usermenu>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Usermenu>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Usermenu>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Usermenu> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Usermenu>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Usermenu>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Usermenu>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Usermenu> deleteManyOrFail(iterable $entities, array $options = [])
 */
class UsermenuTable extends Table
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

        $this->setTable('usermenu');
        $this->setDisplayField('id');
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
            ->integer('idmenu')
            ->requirePresence('idmenu', 'create')
            ->notEmptyString('idmenu');

        $validator
            ->integer('idrole')
            ->requirePresence('idrole', 'create')
            ->notEmptyString('idrole');

        $validator
            ->integer('iduser')
            ->requirePresence('iduser', 'create')
            ->notEmptyString('iduser');

        $validator
            ->dateTime('date')
            ->requirePresence('date', 'create')
            ->notEmptyDateTime('date');

        return $validator;
    }
}
