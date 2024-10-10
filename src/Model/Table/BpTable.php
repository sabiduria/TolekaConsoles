<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Bp Model
 *
 * @method \App\Model\Entity\Bp newEmptyEntity()
 * @method \App\Model\Entity\Bp newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Bp> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Bp get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Bp findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Bp patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Bp> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Bp|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Bp saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Bp>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Bp>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Bp>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Bp> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Bp>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Bp>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Bp>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Bp> deleteManyOrFail(iterable $entities, array $options = [])
 */
class BpTable extends Table
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

        $this->setTable('bp');
        $this->setDisplayField('numbp');
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
            ->requirePresence('num', 'create')
            ->notEmptyString('num');

        $validator
            ->scalar('numbp')
            ->maxLength('numbp', 100)
            ->requirePresence('numbp', 'create')
            ->notEmptyString('numbp');

        $validator
            ->scalar('licence')
            ->maxLength('licence', 255)
            ->requirePresence('licence', 'create')
            ->notEmptyString('licence');

        $validator
            ->scalar('typeproduit')
            ->maxLength('typeproduit', 50)
            ->requirePresence('typeproduit', 'create')
            ->notEmptyString('typeproduit');

        $validator
            ->scalar('produit')
            ->maxLength('produit', 100)
            ->requirePresence('produit', 'create')
            ->notEmptyString('produit');

        $validator
            ->scalar('tranche')
            ->maxLength('tranche', 30)
            ->requirePresence('tranche', 'create')
            ->notEmptyString('tranche');

        $validator
            ->scalar('destination')
            ->maxLength('destination', 100)
            ->requirePresence('destination', 'create')
            ->notEmptyString('destination');

        $validator
            ->scalar('agence')
            ->maxLength('agence', 100)
            ->requirePresence('agence', 'create')
            ->notEmptyString('agence');

        $validator
            ->scalar('moyentransport')
            ->maxLength('moyentransport', 50)
            ->requirePresence('moyentransport', 'create')
            ->notEmptyString('moyentransport');

        $validator
            ->scalar('numautorisation')
            ->maxLength('numautorisation', 100)
            ->requirePresence('numautorisation', 'create')
            ->notEmptyString('numautorisation');

        $validator
            ->scalar('etablipar')
            ->maxLength('etablipar', 100)
            ->requirePresence('etablipar', 'create')
            ->notEmptyString('etablipar');

        $validator
            ->dateTime('date')
            ->requirePresence('date', 'create')
            ->notEmptyDateTime('date');

        $validator
            ->scalar('modifiepar')
            ->maxLength('modifiepar', 50)
            ->requirePresence('modifiepar', 'create')
            ->notEmptyString('modifiepar');

        $validator
            ->dateTime('datemodification')
            ->requirePresence('datemodification', 'create')
            ->notEmptyDateTime('datemodification');

        $validator
            ->scalar('approuvepar')
            ->maxLength('approuvepar', 100)
            ->requirePresence('approuvepar', 'create')
            ->notEmptyString('approuvepar');

        $validator
            ->dateTime('dateapprobation')
            ->requirePresence('dateapprobation', 'create')
            ->notEmptyDateTime('dateapprobation');

        $validator
            ->scalar('numdc')
            ->maxLength('numdc', 255)
            ->requirePresence('numdc', 'create')
            ->notEmptyString('numdc');

        $validator
            ->scalar('statut')
            ->maxLength('statut', 100)
            ->requirePresence('statut', 'create')
            ->notEmptyString('statut');

        return $validator;
    }
}
