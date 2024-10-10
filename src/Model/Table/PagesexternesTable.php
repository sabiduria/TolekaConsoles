<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pagesexternes Model
 *
 * @method \App\Model\Entity\Pagesexterne newEmptyEntity()
 * @method \App\Model\Entity\Pagesexterne newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Pagesexterne> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pagesexterne get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Pagesexterne findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Pagesexterne patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Pagesexterne> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pagesexterne|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Pagesexterne saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Pagesexterne>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Pagesexterne>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Pagesexterne>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Pagesexterne> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Pagesexterne>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Pagesexterne>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Pagesexterne>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Pagesexterne> deleteManyOrFail(iterable $entities, array $options = [])
 */
class PagesexternesTable extends Table
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

        $this->setTable('pagesexternes');
        $this->setDisplayField('id');
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
            ->scalar('details')
            ->requirePresence('details', 'create')
            ->notEmptyString('details');

        $validator
            ->scalar('detailsfr')
            ->requirePresence('detailsfr', 'create')
            ->notEmptyString('detailsfr');

        $validator
            ->integer('idcategorie')
            ->requirePresence('idcategorie', 'create')
            ->notEmptyString('idcategorie');

        $validator
            ->integer('iduser')
            ->requirePresence('iduser', 'create')
            ->notEmptyString('iduser');

        $validator
            ->dateTime('date')
            ->requirePresence('date', 'create')
            ->notEmptyDateTime('date');

        return $validator;
    }
}
