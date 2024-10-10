<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Agencedouane Model
 *
 * @method \App\Model\Entity\Agencedouane newEmptyEntity()
 * @method \App\Model\Entity\Agencedouane newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Agencedouane> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Agencedouane get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Agencedouane findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Agencedouane patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Agencedouane> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Agencedouane|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Agencedouane saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Agencedouane>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Agencedouane>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Agencedouane>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Agencedouane> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Agencedouane>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Agencedouane>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Agencedouane>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Agencedouane> deleteManyOrFail(iterable $entities, array $options = [])
 */
class AgencedouaneTable extends Table
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

        $this->setTable('agencedouane');
        $this->setDisplayField('nomagence');
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
            ->scalar('nomagence')
            ->maxLength('nomagence', 100)
            ->requirePresence('nomagence', 'create')
            ->notEmptyString('nomagence');

        $validator
            ->scalar('responsable')
            ->maxLength('responsable', 50)
            ->requirePresence('responsable', 'create')
            ->notEmptyString('responsable');

        $validator
            ->scalar('telresp')
            ->maxLength('telresp', 15)
            ->requirePresence('telresp', 'create')
            ->notEmptyString('telresp');

        $validator
            ->scalar('emailresp')
            ->maxLength('emailresp', 50)
            ->requirePresence('emailresp', 'create')
            ->notEmptyString('emailresp');

        $validator
            ->scalar('agentsite')
            ->maxLength('agentsite', 50)
            ->requirePresence('agentsite', 'create')
            ->notEmptyString('agentsite');

        $validator
            ->scalar('telagent')
            ->maxLength('telagent', 15)
            ->requirePresence('telagent', 'create')
            ->notEmptyString('telagent');

        $validator
            ->scalar('emailagent')
            ->maxLength('emailagent', 50)
            ->requirePresence('emailagent', 'create')
            ->notEmptyString('emailagent');

        $validator
            ->scalar('adresse')
            ->requirePresence('adresse', 'create')
            ->notEmptyString('adresse');

        $validator
            ->scalar('pays')
            ->maxLength('pays', 50)
            ->requirePresence('pays', 'create')
            ->notEmptyString('pays');

        $validator
            ->scalar('statut')
            ->maxLength('statut', 20)
            ->requirePresence('statut', 'create')
            ->notEmptyString('statut');

        $validator
            ->dateTime('date')
            ->requirePresence('date', 'create')
            ->notEmptyDateTime('date');

        $validator
            ->integer('iduser')
            ->requirePresence('iduser', 'create')
            ->notEmptyString('iduser');

        return $validator;
    }
}
