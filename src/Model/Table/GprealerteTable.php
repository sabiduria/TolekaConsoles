<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Gprealerte Model
 *
 * @method \App\Model\Entity\Gprealerte newEmptyEntity()
 * @method \App\Model\Entity\Gprealerte newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Gprealerte> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Gprealerte get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Gprealerte findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Gprealerte patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Gprealerte> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Gprealerte|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Gprealerte saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Gprealerte>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Gprealerte>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Gprealerte>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Gprealerte> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Gprealerte>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Gprealerte>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Gprealerte>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Gprealerte> deleteManyOrFail(iterable $entities, array $options = [])
 */
class GprealerteTable extends Table
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

        $this->setTable('gprealerte');
        $this->setDisplayField('transporteur');
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
            ->scalar('transporteur')
            ->maxLength('transporteur', 100)
            ->requirePresence('transporteur', 'create')
            ->notEmptyString('transporteur');

        $validator
            ->scalar('horse')
            ->maxLength('horse', 50)
            ->requirePresence('horse', 'create')
            ->notEmptyString('horse');

        $validator
            ->scalar('trailer1')
            ->maxLength('trailer1', 50)
            ->requirePresence('trailer1', 'create')
            ->notEmptyString('trailer1');

        $validator
            ->scalar('trailer2')
            ->maxLength('trailer2', 50)
            ->requirePresence('trailer2', 'create')
            ->notEmptyString('trailer2');

        $validator
            ->scalar('prenom')
            ->maxLength('prenom', 100)
            ->requirePresence('prenom', 'create')
            ->notEmptyString('prenom');

        $validator
            ->scalar('nom')
            ->maxLength('nom', 100)
            ->requirePresence('nom', 'create')
            ->notEmptyString('nom');

        $validator
            ->scalar('passeport')
            ->maxLength('passeport', 50)
            ->requirePresence('passeport', 'create')
            ->notEmptyString('passeport');

        $validator
            ->numeric('tonnage')
            ->requirePresence('tonnage', 'create')
            ->notEmptyString('tonnage');

        $validator
            ->scalar('position')
            ->maxLength('position', 50)
            ->requirePresence('position', 'create')
            ->notEmptyString('position');

        $validator
            ->scalar('destination')
            ->maxLength('destination', 100)
            ->requirePresence('destination', 'create')
            ->notEmptyString('destination');

        $validator
            ->scalar('pays')
            ->maxLength('pays', 100)
            ->requirePresence('pays', 'create')
            ->notEmptyString('pays');

        $validator
            ->scalar('code')
            ->maxLength('code', 200)
            ->requirePresence('code', 'create')
            ->notEmptyString('code');

        $validator
            ->date('eta')
            ->requirePresence('eta', 'create')
            ->notEmptyDate('eta');

        $validator
            ->date('datearrivee')
            ->requirePresence('datearrivee', 'create')
            ->notEmptyDate('datearrivee');

        $validator
            ->scalar('corridor')
            ->maxLength('corridor', 100)
            ->requirePresence('corridor', 'create')
            ->notEmptyString('corridor');

        $validator
            ->scalar('produit')
            ->maxLength('produit', 20)
            ->requirePresence('produit', 'create')
            ->notEmptyString('produit');

        $validator
            ->scalar('typetrans')
            ->maxLength('typetrans', 50)
            ->requirePresence('typetrans', 'create')
            ->notEmptyString('typetrans');

        $validator
            ->date('dateexpvisa')
            ->requirePresence('dateexpvisa', 'create')
            ->notEmptyDate('dateexpvisa');

        $validator
            ->date('dateexppass')
            ->requirePresence('dateexppass', 'create')
            ->notEmptyDate('dateexppass');

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
            ->notEmptyString('statut');

        $validator
            ->date('loadingdate')
            ->requirePresence('loadingdate', 'create')
            ->notEmptyDate('loadingdate');

        $validator
            ->scalar('exitpoint')
            ->maxLength('exitpoint', 100)
            ->notEmptyString('exitpoint');

        return $validator;
    }
}
