<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Agent Model
 *
 * @method \App\Model\Entity\Agent newEmptyEntity()
 * @method \App\Model\Entity\Agent newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Agent> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Agent get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Agent findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Agent patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Agent> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Agent|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Agent saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Agent>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Agent>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Agent>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Agent> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Agent>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Agent>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Agent>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Agent> deleteManyOrFail(iterable $entities, array $options = [])
 */
class AgentTable extends Table
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

        $this->setTable('agent');
        $this->setDisplayField('matricule');
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
            ->scalar('matricule')
            ->maxLength('matricule', 10)
            ->requirePresence('matricule', 'create')
            ->notEmptyString('matricule');

        $validator
            ->scalar('prenom')
            ->maxLength('prenom', 20)
            ->requirePresence('prenom', 'create')
            ->notEmptyString('prenom');

        $validator
            ->scalar('nom')
            ->maxLength('nom', 50)
            ->requirePresence('nom', 'create')
            ->notEmptyString('nom');

        $validator
            ->date('datenaissance')
            ->requirePresence('datenaissance', 'create')
            ->notEmptyDate('datenaissance');

        $validator
            ->date('dateengagement')
            ->requirePresence('dateengagement', 'create')
            ->notEmptyDate('dateengagement');

        $validator
            ->scalar('genre')
            ->maxLength('genre', 3)
            ->notEmptyString('genre');

        $validator
            ->scalar('fonction')
            ->maxLength('fonction', 100)
            ->requirePresence('fonction', 'create')
            ->notEmptyString('fonction');

        $validator
            ->scalar('equipe')
            ->maxLength('equipe', 20)
            ->requirePresence('equipe', 'create')
            ->notEmptyString('equipe');

        $validator
            ->scalar('reportto')
            ->maxLength('reportto', 50)
            ->requirePresence('reportto', 'create')
            ->notEmptyString('reportto');

        $validator
            ->scalar('telephone')
            ->maxLength('telephone', 15)
            ->requirePresence('telephone', 'create')
            ->notEmptyString('telephone');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        $validator
            ->scalar('statut')
            ->maxLength('statut', 10)
            ->notEmptyString('statut');

        return $validator;
    }
}
