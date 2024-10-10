<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Chauffeurs Model
 *
 * @method \App\Model\Entity\Chauffeur newEmptyEntity()
 * @method \App\Model\Entity\Chauffeur newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Chauffeur> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Chauffeur get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Chauffeur findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Chauffeur patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Chauffeur> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Chauffeur|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Chauffeur saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Chauffeur>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Chauffeur>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Chauffeur>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Chauffeur> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Chauffeur>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Chauffeur>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Chauffeur>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Chauffeur> deleteManyOrFail(iterable $entities, array $options = [])
 */
class ChauffeursTable extends Table
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

        $this->setTable('chauffeurs');
        $this->setDisplayField('prenomch');
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
            ->scalar('prenomch')
            ->maxLength('prenomch', 50)
            ->requirePresence('prenomch', 'create')
            ->notEmptyString('prenomch');

        $validator
            ->scalar('nomch')
            ->maxLength('nomch', 50)
            ->requirePresence('nomch', 'create')
            ->notEmptyString('nomch');

        $validator
            ->scalar('telch')
            ->maxLength('telch', 20)
            ->requirePresence('telch', 'create')
            ->notEmptyString('telch');

        $validator
            ->scalar('pays')
            ->maxLength('pays', 50)
            ->requirePresence('pays', 'create')
            ->notEmptyString('pays');

        $validator
            ->scalar('passeportch')
            ->maxLength('passeportch', 100)
            ->requirePresence('passeportch', 'create')
            ->notEmptyString('passeportch');

        $validator
            ->dateTime('date')
            ->requirePresence('date', 'create')
            ->notEmptyDateTime('date');

        $validator
            ->date('datevisa')
            ->requirePresence('datevisa', 'create')
            ->notEmptyDate('datevisa');

        $validator
            ->date('datepass')
            ->requirePresence('datepass', 'create')
            ->notEmptyDate('datepass');

        $validator
            ->integer('iduser')
            ->requirePresence('iduser', 'create')
            ->notEmptyString('iduser');

        $validator
            ->scalar('statut')
            ->maxLength('statut', 20)
            ->notEmptyString('statut');

        $validator
            ->scalar('camion')
            ->maxLength('camion', 20)
            ->requirePresence('camion', 'create')
            ->notEmptyString('camion');

        return $validator;
    }
}
