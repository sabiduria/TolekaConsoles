<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sousmenu Model
 *
 * @method \App\Model\Entity\Sousmenu newEmptyEntity()
 * @method \App\Model\Entity\Sousmenu newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Sousmenu> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sousmenu get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Sousmenu findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Sousmenu patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Sousmenu> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sousmenu|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Sousmenu saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Sousmenu>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Sousmenu>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Sousmenu>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Sousmenu> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Sousmenu>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Sousmenu>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Sousmenu>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Sousmenu> deleteManyOrFail(iterable $entities, array $options = [])
 */
class SousmenuTable extends Table
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

        $this->setTable('sousmenu');
        $this->setDisplayField('url');
        $this->setPrimaryKey('idsousmenu');
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
            ->scalar('nomsousmenu')
            ->maxLength('nomsousmenu', 255)
            ->requirePresence('nomsousmenu', 'create')
            ->notEmptyString('nomsousmenu');

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

        return $validator;
    }
}
