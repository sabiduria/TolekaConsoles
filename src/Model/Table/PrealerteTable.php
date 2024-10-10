<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Prealerte Model
 *
 * @method \App\Model\Entity\Prealerte newEmptyEntity()
 * @method \App\Model\Entity\Prealerte newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Prealerte> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Prealerte get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Prealerte findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Prealerte patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Prealerte> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Prealerte|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Prealerte saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Prealerte>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Prealerte>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Prealerte>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Prealerte> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Prealerte>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Prealerte>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Prealerte>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Prealerte> deleteManyOrFail(iterable $entities, array $options = [])
 */
class PrealerteTable extends Table
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

        $this->setTable('prealerte');
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
            ->requirePresence('camion', 'create')
            ->notEmptyString('camion');

        $validator
            ->integer('destination')
            ->requirePresence('destination', 'create')
            ->notEmptyString('destination');

        $validator
            ->scalar('produit')
            ->maxLength('produit', 30)
            ->requirePresence('produit', 'create')
            ->notEmptyString('produit');

        $validator
            ->date('eta')
            ->requirePresence('eta', 'create')
            ->notEmptyDate('eta');

        $validator
            ->scalar('position')
            ->maxLength('position', 50)
            ->requirePresence('position', 'create')
            ->notEmptyString('position');

        $validator
            ->date('datearrivee')
            ->requirePresence('datearrivee', 'create')
            ->notEmptyDate('datearrivee');

        $validator
            ->dateTime('date')
            ->requirePresence('date', 'create')
            ->notEmptyDateTime('date');

        $validator
            ->integer('iduser')
            ->requirePresence('iduser', 'create')
            ->notEmptyString('iduser');

        $validator
            ->scalar('statut')
            ->maxLength('statut', 50)
            ->requirePresence('statut', 'create')
            ->notEmptyString('statut');

        $validator
            ->scalar('commentaire')
            ->maxLength('commentaire', 255)
            ->requirePresence('commentaire', 'create')
            ->notEmptyString('commentaire');

        $validator
            ->scalar('moisgestion')
            ->maxLength('moisgestion', 10)
            ->notEmptyString('moisgestion');

        $validator
            ->scalar('loadingplan')
            ->maxLength('loadingplan', 30)
            ->requirePresence('loadingplan', 'create')
            ->notEmptyString('loadingplan');

        $validator
            ->scalar('destinationg')
            ->maxLength('destinationg', 100)
            ->requirePresence('destinationg', 'create')
            ->notEmptyString('destinationg');

        $validator
            ->scalar('exitpoint')
            ->maxLength('exitpoint', 100)
            ->notEmptyString('exitpoint');

        return $validator;
    }
}
