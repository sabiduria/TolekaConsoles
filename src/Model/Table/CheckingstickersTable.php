<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Checkingstickers Model
 *
 * @method \App\Model\Entity\Checkingsticker newEmptyEntity()
 * @method \App\Model\Entity\Checkingsticker newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Checkingsticker> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Checkingsticker get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Checkingsticker findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Checkingsticker patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Checkingsticker> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Checkingsticker|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Checkingsticker saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Checkingsticker>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Checkingsticker>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Checkingsticker>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Checkingsticker> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Checkingsticker>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Checkingsticker>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Checkingsticker>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Checkingsticker> deleteManyOrFail(iterable $entities, array $options = [])
 */
class CheckingstickersTable extends Table
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

        $this->setTable('checkingstickers');
        $this->setDisplayField('lotnumber');
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
            ->numeric('tonnageload')
            ->requirePresence('tonnageload', 'create')
            ->notEmptyString('tonnageload');

        $validator
            ->integer('items')
            ->requirePresence('items', 'create')
            ->notEmptyString('items');

        $validator
            ->scalar('horse')
            ->maxLength('horse', 20)
            ->requirePresence('horse', 'create')
            ->notEmptyString('horse');

        $validator
            ->scalar('trailers')
            ->maxLength('trailers', 50)
            ->requirePresence('trailers', 'create')
            ->notEmptyString('trailers');

        $validator
            ->scalar('comment')
            ->maxLength('comment', 255)
            ->requirePresence('comment', 'create')
            ->notEmptyString('comment');

        $validator
            ->scalar('report')
            ->maxLength('report', 255)
            ->requirePresence('report', 'create')
            ->notEmptyString('report');

        $validator
            ->requirePresence('idtrip', 'create')
            ->notEmptyString('idtrip');

        $validator
            ->dateTime('date')
            ->requirePresence('date', 'create')
            ->notEmptyDateTime('date');

        $validator
            ->integer('iduser')
            ->requirePresence('iduser', 'create')
            ->notEmptyString('iduser');

        $validator
            ->scalar('inspecteur')
            ->maxLength('inspecteur', 50)
            ->requirePresence('inspecteur', 'create')
            ->notEmptyString('inspecteur');

        $validator
            ->scalar('moisgestion')
            ->maxLength('moisgestion', 20)
            ->requirePresence('moisgestion', 'create')
            ->notEmptyString('moisgestion');

        return $validator;
    }
}
