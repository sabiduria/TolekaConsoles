<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Suggestions Model
 *
 * @method \App\Model\Entity\Suggestion newEmptyEntity()
 * @method \App\Model\Entity\Suggestion newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Suggestion> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Suggestion get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Suggestion findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Suggestion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Suggestion> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Suggestion|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Suggestion saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Suggestion>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Suggestion>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Suggestion>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Suggestion> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Suggestion>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Suggestion>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Suggestion>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Suggestion> deleteManyOrFail(iterable $entities, array $options = [])
 */
class SuggestionsTable extends Table
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

        $this->setTable('suggestions');
        $this->setDisplayField('reponse');
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
            ->scalar('suggestion')
            ->requirePresence('suggestion', 'create')
            ->notEmptyString('suggestion');

        $validator
            ->integer('iduser')
            ->requirePresence('iduser', 'create')
            ->notEmptyString('iduser');

        $validator
            ->dateTime('date')
            ->requirePresence('date', 'create')
            ->notEmptyDateTime('date');

        $validator
            ->scalar('reponse')
            ->maxLength('reponse', 255)
            ->requirePresence('reponse', 'create')
            ->notEmptyString('reponse');

        $validator
            ->integer('iduser2')
            ->requirePresence('iduser2', 'create')
            ->notEmptyString('iduser2');

        $validator
            ->dateTime('date2')
            ->requirePresence('date2', 'create')
            ->notEmptyDateTime('date2');

        $validator
            ->scalar('statut')
            ->maxLength('statut', 20)
            ->notEmptyString('statut');

        return $validator;
    }
}
