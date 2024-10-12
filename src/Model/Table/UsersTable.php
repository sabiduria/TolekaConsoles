<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \App\Model\Table\AffectationsTable&\Cake\ORM\Association\HasMany $Affectations
 *
 * @method \App\Model\Entity\User newEmptyEntity()
 * @method \App\Model\Entity\User newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\User> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\User findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\User> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\User|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\User saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\User>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\User>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\User>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\User> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\User>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\User>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\User>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\User> deleteManyOrFail(iterable $entities, array $options = [])
 */
class UsersTable extends Table
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

        $this->setTable('users');
        $this->setDisplayField(['prenom', 'nom']);
        $this->setPrimaryKey('id');

        $this->hasMany('Affectations', [
            'foreignKey' => 'user_id',
        ]);
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
            ->integer('idrole')
            ->requirePresence('idrole', 'create')
            ->notEmptyString('idrole');

        $validator
            ->scalar('username')
            ->maxLength('username', 255)
            ->allowEmptyString('username');

        $validator
            ->scalar('password')
            ->maxLength('password', 255)
            ->allowEmptyString('password');

        $validator
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->scalar('avatar')
            ->maxLength('avatar', 255)
            ->allowEmptyString('avatar');

        $validator
            ->scalar('prenom')
            ->maxLength('prenom', 30)
            ->allowEmptyString('prenom');

        $validator
            ->scalar('nom')
            ->maxLength('nom', 30)
            ->requirePresence('nom', 'create')
            ->notEmptyString('nom');

        $validator
            ->scalar('telephone')
            ->maxLength('telephone', 25)
            ->requirePresence('telephone', 'create')
            ->notEmptyString('telephone');

        $validator
            ->scalar('statut')
            ->maxLength('statut', 20)
            ->allowEmptyString('statut');

        $validator
            ->dateTime('dateinscription')
            ->requirePresence('dateinscription', 'create')
            ->notEmptyDateTime('dateinscription');

        $validator
            ->integer('iduser')
            ->requirePresence('iduser', 'create')
            ->notEmptyString('iduser');

        $validator
            ->dateTime('datemiseajour')
            ->requirePresence('datemiseajour', 'create')
            ->notEmptyDateTime('datemiseajour');

        $validator
            ->scalar('sexe')
            ->maxLength('sexe', 20)
            ->notEmptyString('sexe');

        $validator
            ->scalar('codeuser')
            ->maxLength('codeuser', 255)
            ->requirePresence('codeuser', 'create')
            ->notEmptyString('codeuser');

        $validator
            ->integer('rolead1')
            ->requirePresence('rolead1', 'create')
            ->notEmptyString('rolead1');

        $validator
            ->integer('rolead2')
            ->notEmptyString('rolead2');

        $validator
            ->integer('rolead3')
            ->notEmptyString('rolead3');

        $validator
            ->integer('section')
            ->notEmptyString('section');

        $validator
            ->scalar('langue')
            ->maxLength('langue', 20)
            ->notEmptyString('langue');

        $validator
            ->boolean('synced')
            ->notEmptyString('synced');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->isUnique(['username']), ['errorField' => 'username']);
        $rules->add($rules->isUnique(['email']), ['errorField' => 'email']);

        return $rules;
    }
}
