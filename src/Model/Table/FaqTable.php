<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Faq Model
 *
 * @method \App\Model\Entity\Faq newEmptyEntity()
 * @method \App\Model\Entity\Faq newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Faq> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Faq get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Faq findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Faq patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Faq> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Faq|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Faq saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Faq>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Faq>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Faq>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Faq> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Faq>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Faq>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Faq>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Faq> deleteManyOrFail(iterable $entities, array $options = [])
 */
class FaqTable extends Table
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

        $this->setTable('faq');
        $this->setDisplayField('question');
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
            ->scalar('question')
            ->maxLength('question', 255)
            ->requirePresence('question', 'create')
            ->notEmptyString('question');

        $validator
            ->scalar('reponse')
            ->requirePresence('reponse', 'create')
            ->notEmptyString('reponse');

        $validator
            ->scalar('questionfr')
            ->maxLength('questionfr', 255)
            ->requirePresence('questionfr', 'create')
            ->notEmptyString('questionfr');

        $validator
            ->scalar('reponsefr')
            ->requirePresence('reponsefr', 'create')
            ->notEmptyString('reponsefr');

        $validator
            ->dateTime('date')
            ->requirePresence('date', 'create')
            ->notEmptyDateTime('date');

        $validator
            ->dateTime('datemiseajour')
            ->requirePresence('datemiseajour', 'create')
            ->notEmptyDateTime('datemiseajour');

        $validator
            ->requirePresence('iduser', 'create')
            ->notEmptyString('iduser');

        $validator
            ->integer('idagent')
            ->requirePresence('idagent', 'create')
            ->notEmptyString('idagent');

        $validator
            ->scalar('statut')
            ->maxLength('statut', 20)
            ->notEmptyString('statut');

        return $validator;
    }
}
