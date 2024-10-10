<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Menu Model
 *
 * @method \App\Model\Entity\Menu newEmptyEntity()
 * @method \App\Model\Entity\Menu newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Menu> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Menu get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Menu findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Menu patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Menu> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Menu|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Menu saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Menu>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Menu>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Menu>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Menu> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Menu>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Menu>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Menu>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Menu> deleteManyOrFail(iterable $entities, array $options = [])
 */
class MenuTable extends Table
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

        $this->setTable('menu');
        $this->setDisplayField('url');
        $this->setPrimaryKey('idmenu');
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
            ->integer('idpage')
            ->requirePresence('idpage', 'create')
            ->notEmptyString('idpage');

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
            ->scalar('nommenu')
            ->maxLength('nommenu', 255)
            ->requirePresence('nommenu', 'create')
            ->notEmptyString('nommenu');

        $validator
            ->scalar('icone')
            ->maxLength('icone', 255)
            ->notEmptyString('icone');

        $validator
            ->integer('iduser')
            ->requirePresence('iduser', 'create')
            ->notEmptyString('iduser');

        $validator
            ->dateTime('datemiseajour')
            ->requirePresence('datemiseajour', 'create')
            ->notEmptyDateTime('datemiseajour');

        $validator
            ->scalar('statut')
            ->maxLength('statut', 20)
            ->notEmptyString('statut');

        $validator
            ->scalar('typex')
            ->maxLength('typex', 100)
            ->requirePresence('typex', 'create')
            ->notEmptyString('typex');

        $validator
            ->scalar('langue')
            ->maxLength('langue', 15)
            ->notEmptyString('langue');

        return $validator;
    }
}
