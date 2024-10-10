<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Forecast Model
 *
 * @method \App\Model\Entity\Forecast newEmptyEntity()
 * @method \App\Model\Entity\Forecast newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Forecast> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Forecast get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Forecast findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Forecast patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Forecast> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Forecast|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Forecast saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Forecast>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Forecast>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Forecast>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Forecast> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Forecast>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Forecast>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Forecast>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Forecast> deleteManyOrFail(iterable $entities, array $options = [])
 */
class ForecastTable extends Table
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

        $this->setTable('forecast');
        $this->setDisplayField('moisgestion');
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
            ->scalar('moisgestion')
            ->maxLength('moisgestion', 20)
            ->requirePresence('moisgestion', 'create')
            ->notEmptyString('moisgestion');

        $validator
            ->integer('scancu')
            ->requirePresence('scancu', 'create')
            ->notEmptyString('scancu');

        $validator
            ->integer('scancoh')
            ->requirePresence('scancoh', 'create')
            ->notEmptyString('scancoh');

        $validator
            ->integer('charcu')
            ->requirePresence('charcu', 'create')
            ->notEmptyString('charcu');

        $validator
            ->integer('charcoh')
            ->requirePresence('charcoh', 'create')
            ->notEmptyString('charcoh');

        $validator
            ->integer('doccu')
            ->requirePresence('doccu', 'create')
            ->notEmptyString('doccu');

        $validator
            ->integer('doccoh')
            ->requirePresence('doccoh', 'create')
            ->notEmptyString('doccoh');

        $validator
            ->integer('dispcu')
            ->requirePresence('dispcu', 'create')
            ->notEmptyString('dispcu');

        $validator
            ->integer('dispcoh')
            ->requirePresence('dispcoh', 'create')
            ->notEmptyString('dispcoh');

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
