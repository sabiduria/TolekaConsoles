<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Lastimexlot Model
 *
 * @method \App\Model\Entity\Lastimexlot newEmptyEntity()
 * @method \App\Model\Entity\Lastimexlot newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Lastimexlot> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Lastimexlot get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Lastimexlot findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Lastimexlot patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Lastimexlot> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Lastimexlot|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Lastimexlot saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Lastimexlot>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Lastimexlot>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Lastimexlot>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Lastimexlot> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Lastimexlot>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Lastimexlot>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Lastimexlot>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Lastimexlot> deleteManyOrFail(iterable $entities, array $options = [])
 */
class LastimexlotTable extends Table
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

        $this->setTable('lastimexlot');
        $this->setDisplayField('produit');
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
            ->scalar('produit')
            ->maxLength('produit', 100)
            ->requirePresence('produit', 'create')
            ->notEmptyString('produit');

        $validator
            ->scalar('unit')
            ->maxLength('unit', 10)
            ->requirePresence('unit', 'create')
            ->notEmptyString('unit');

        $validator
            ->scalar('lastimexlot')
            ->maxLength('lastimexlot', 50)
            ->requirePresence('lastimexlot', 'create')
            ->notEmptyString('lastimexlot');

        $validator
            ->integer('newlastnum')
            ->requirePresence('newlastnum', 'create')
            ->notEmptyString('newlastnum');

        $validator
            ->notEmptyString('used');

        return $validator;
    }
}
