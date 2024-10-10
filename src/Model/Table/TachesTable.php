<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Taches Model
 *
 * @method \App\Model\Entity\Tach newEmptyEntity()
 * @method \App\Model\Entity\Tach newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Tach> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tach get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Tach findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Tach patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Tach> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tach|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Tach saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Tach>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Tach>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Tach>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Tach> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Tach>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Tach>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Tach>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Tach> deleteManyOrFail(iterable $entities, array $options = [])
 */
class TachesTable extends Table
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

        $this->setTable('taches');
        $this->setDisplayField('statut');
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
            ->scalar('description')
            ->requirePresence('description', 'create')
            ->notEmptyString('description');

        $validator
            ->scalar('statut')
            ->maxLength('statut', 20)
            ->notEmptyString('statut');

        $validator
            ->requirePresence('idpj', 'create')
            ->notEmptyString('idpj');

        $validator
            ->date('datelimite')
            ->requirePresence('datelimite', 'create')
            ->notEmptyDate('datelimite');

        $validator
            ->integer('assignea')
            ->requirePresence('assignea', 'create')
            ->notEmptyString('assignea');

        $validator
            ->integer('iduser')
            ->requirePresence('iduser', 'create')
            ->notEmptyString('iduser');

        $validator
            ->integer('iduser2')
            ->requirePresence('iduser2', 'create')
            ->notEmptyString('iduser2');

        $validator
            ->dateTime('date')
            ->requirePresence('date', 'create')
            ->notEmptyDateTime('date');

        $validator
            ->dateTime('datemiseajour')
            ->requirePresence('datemiseajour', 'create')
            ->notEmptyDateTime('datemiseajour');

        $validator
            ->scalar('commentaireexec')
            ->maxLength('commentaireexec', 255)
            ->requirePresence('commentaireexec', 'create')
            ->notEmptyString('commentaireexec');

        $validator
            ->dateTime('datecomexec')
            ->requirePresence('datecomexec', 'create')
            ->notEmptyDateTime('datecomexec');

        $validator
            ->scalar('conclusion')
            ->maxLength('conclusion', 255)
            ->requirePresence('conclusion', 'create')
            ->notEmptyString('conclusion');

        $validator
            ->dateTime('dateconcl')
            ->requirePresence('dateconcl', 'create')
            ->notEmptyDateTime('dateconcl');

        $validator
            ->numeric('depenseusd')
            ->requirePresence('depenseusd', 'create')
            ->notEmptyString('depenseusd');

        $validator
            ->numeric('revenus')
            ->requirePresence('revenus', 'create')
            ->notEmptyString('revenus');

        $validator
            ->numeric('gainusd')
            ->requirePresence('gainusd', 'create')
            ->notEmptyString('gainusd');

        $validator
            ->integer('position')
            ->requirePresence('position', 'create')
            ->notEmptyString('position');

        return $validator;
    }
}
