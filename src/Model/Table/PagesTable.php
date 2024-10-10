<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pages Model
 *
 * @method \App\Model\Entity\Page newEmptyEntity()
 * @method \App\Model\Entity\Page newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Page> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Page get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Page findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Page patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Page> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Page|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Page saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Page>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Page>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Page>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Page> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Page>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Page>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Page>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Page> deleteManyOrFail(iterable $entities, array $options = [])
 */
class PagesTable extends Table
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

        $this->setTable('pages');
        $this->setDisplayField('nompage');
        $this->setPrimaryKey('idpage');
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
            ->scalar('nompage')
            ->maxLength('nompage', 255)
            ->requirePresence('nompage', 'create')
            ->notEmptyString('nompage');

        $validator
            ->scalar('urlpage')
            ->maxLength('urlpage', 255)
            ->requirePresence('urlpage', 'create')
            ->notEmptyString('urlpage');

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
