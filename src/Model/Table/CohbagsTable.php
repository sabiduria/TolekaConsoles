<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cohbags Model
 *
 * @method \App\Model\Entity\Cohbag newEmptyEntity()
 * @method \App\Model\Entity\Cohbag newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Cohbag> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Cohbag get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Cohbag findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Cohbag patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Cohbag> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Cohbag|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Cohbag saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Cohbag>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Cohbag>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Cohbag>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Cohbag> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Cohbag>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Cohbag>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Cohbag>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Cohbag> deleteManyOrFail(iterable $entities, array $options = [])
 */
class CohbagsTable extends Table
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

        $this->setTable('cohbags');
        $this->setDisplayField('bagid');
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
            ->scalar('bagid')
            ->maxLength('bagid', 100)
            ->requirePresence('bagid', 'create')
            ->notEmptyString('bagid');

        $validator
            ->scalar('composite')
            ->maxLength('composite', 100)
            ->requirePresence('composite', 'create')
            ->notEmptyString('composite');

        $validator
            ->date('dateprod')
            ->requirePresence('dateprod', 'create')
            ->notEmptyDate('dateprod');

        $validator
            ->numeric('poids')
            ->requirePresence('poids', 'create')
            ->notEmptyString('poids');

        $validator
            ->scalar('localisation')
            ->maxLength('localisation', 100)
            ->requirePresence('localisation', 'create')
            ->notEmptyString('localisation');

        $validator
            ->scalar('h2o')
            ->maxLength('h2o', 10)
            ->requirePresence('h2o', 'create')
            ->notEmptyString('h2o');

        $validator
            ->numeric('co')
            ->requirePresence('co', 'create')
            ->notEmptyString('co');

        $validator
            ->numeric('co_cont')
            ->requirePresence('co_cont', 'create')
            ->notEmptyString('co_cont');

        $validator
            ->numeric('uranium')
            ->requirePresence('uranium', 'create')
            ->notEmptyString('uranium');

        $validator
            ->numeric('mg')
            ->requirePresence('mg', 'create')
            ->notEmptyString('mg');

        $validator
            ->numeric('fe')
            ->requirePresence('fe', 'create')
            ->notEmptyString('fe');

        $validator
            ->numeric('zn')
            ->requirePresence('zn', 'create')
            ->notEmptyString('zn');

        $validator
            ->numeric('ca')
            ->requirePresence('ca', 'create')
            ->notEmptyString('ca');

        $validator
            ->numeric('mn')
            ->requirePresence('mn', 'create')
            ->notEmptyString('mn');

        $validator
            ->numeric('ni')
            ->requirePresence('ni', 'create')
            ->notEmptyString('ni');

        $validator
            ->numeric('al')
            ->requirePresence('al', 'create')
            ->notEmptyString('al');

        $validator
            ->numeric('cu')
            ->requirePresence('cu', 'create')
            ->notEmptyString('cu');

        $validator
            ->scalar('charge')
            ->maxLength('charge', 10)
            ->notEmptyString('charge');

        $validator
            ->scalar('spec')
            ->maxLength('spec', 50)
            ->requirePresence('spec', 'create')
            ->notEmptyString('spec');

        $validator
            ->scalar('lotnumber')
            ->maxLength('lotnumber', 100)
            ->requirePresence('lotnumber', 'create')
            ->notEmptyString('lotnumber');

        $validator
            ->scalar('imexlot')
            ->maxLength('imexlot', 100)
            ->requirePresence('imexlot', 'create')
            ->notEmptyString('imexlot');

        $validator
            ->date('dateload')
            ->requirePresence('dateload', 'create')
            ->notEmptyDate('dateload');

        $validator
            ->dateTime('dateact')
            ->requirePresence('dateact', 'create')
            ->notEmptyDateTime('dateact');

        $validator
            ->integer('iduser')
            ->requirePresence('iduser', 'create')
            ->notEmptyString('iduser');

        $validator
            ->numeric('vpoids')
            ->requirePresence('vpoids', 'create')
            ->notEmptyString('vpoids');

        $validator
            ->numeric('vh2o')
            ->requirePresence('vh2o', 'create')
            ->notEmptyString('vh2o');

        $validator
            ->numeric('vco')
            ->requirePresence('vco', 'create')
            ->notEmptyString('vco');

        $validator
            ->numeric('produith2o')
            ->requirePresence('produith2o', 'create')
            ->notEmptyString('produith2o');

        $validator
            ->numeric('produitco')
            ->requirePresence('produitco', 'create')
            ->notEmptyString('produitco');

        $validator
            ->scalar('seal')
            ->maxLength('seal', 100)
            ->requirePresence('seal', 'create')
            ->notEmptyString('seal');

        $validator
            ->date('dateadded')
            ->requirePresence('dateadded', 'create')
            ->notEmptyDate('dateadded');

        $validator
            ->date('datechecked')
            ->requirePresence('datechecked', 'create')
            ->notEmptyDate('datechecked');

        $validator
            ->boolean('synced')
            ->notEmptyString('synced');

        return $validator;
    }
}
