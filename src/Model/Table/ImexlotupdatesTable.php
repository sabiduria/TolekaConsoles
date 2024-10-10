<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Imexlotupdates Model
 *
 * @method \App\Model\Entity\Imexlotupdate newEmptyEntity()
 * @method \App\Model\Entity\Imexlotupdate newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Imexlotupdate> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Imexlotupdate get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Imexlotupdate findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Imexlotupdate patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Imexlotupdate> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Imexlotupdate|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Imexlotupdate saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Imexlotupdate>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Imexlotupdate>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Imexlotupdate>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Imexlotupdate> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Imexlotupdate>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Imexlotupdate>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Imexlotupdate>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Imexlotupdate> deleteManyOrFail(iterable $entities, array $options = [])
 */
class ImexlotupdatesTable extends Table
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

        $this->setTable('imexlotupdates');
        $this->setDisplayField('numlot');
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
            ->scalar('numlot')
            ->maxLength('numlot', 50)
            ->requirePresence('numlot', 'create')
            ->notEmptyString('numlot');

        $validator
            ->scalar('oldimexlot')
            ->maxLength('oldimexlot', 50)
            ->requirePresence('oldimexlot', 'create')
            ->notEmptyString('oldimexlot');

        $validator
            ->scalar('newimexlot')
            ->maxLength('newimexlot', 50)
            ->requirePresence('newimexlot', 'create')
            ->notEmptyString('newimexlot');

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
