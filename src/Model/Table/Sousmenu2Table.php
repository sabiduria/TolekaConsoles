<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sousmenu2 Model
 *
 * @method \App\Model\Entity\Sousmenu2 newEmptyEntity()
 * @method \App\Model\Entity\Sousmenu2 newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Sousmenu2> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sousmenu2 get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Sousmenu2 findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Sousmenu2 patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Sousmenu2> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sousmenu2|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Sousmenu2 saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Sousmenu2>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Sousmenu2>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Sousmenu2>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Sousmenu2> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Sousmenu2>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Sousmenu2>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Sousmenu2>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Sousmenu2> deleteManyOrFail(iterable $entities, array $options = [])
 */
class Sousmenu2Table extends Table
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

        $this->setTable('sousmenu2');
        $this->setDisplayField('url');
        $this->setPrimaryKey('idsousmenu2');
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
            ->integer('idsousmenu')
            ->requirePresence('idsousmenu', 'create')
            ->notEmptyString('idsousmenu');

        $validator
            ->scalar('url')
            ->maxLength('url', 255)
            ->requirePresence('url', 'create')
            ->notEmptyString('url');

        $validator
            ->scalar('page')
            ->maxLength('page', 255)
            ->requirePresence('page', 'create')
            ->notEmptyString('page');

        $validator
            ->scalar('nomsousmenu2')
            ->maxLength('nomsousmenu2', 255)
            ->requirePresence('nomsousmenu2', 'create')
            ->notEmptyString('nomsousmenu2');

        $validator
            ->scalar('statut')
            ->maxLength('statut', 10)
            ->notEmptyString('statut');

        $validator
            ->integer('iduser')
            ->requirePresence('iduser', 'create')
            ->notEmptyString('iduser');

        $validator
            ->dateTime('datemiseajour')
            ->requirePresence('datemiseajour', 'create')
            ->notEmptyDateTime('datemiseajour');

        $validator
            ->integer('idpage')
            ->requirePresence('idpage', 'create')
            ->notEmptyString('idpage');

        $validator
            ->scalar('nomsousmenu2en')
            ->maxLength('nomsousmenu2en', 200)
            ->requirePresence('nomsousmenu2en', 'create')
            ->notEmptyString('nomsousmenu2en');

        return $validator;
    }
}
