<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Parametresapp Model
 *
 * @method \App\Model\Entity\Parametresapp newEmptyEntity()
 * @method \App\Model\Entity\Parametresapp newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Parametresapp> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Parametresapp get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Parametresapp findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Parametresapp patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Parametresapp> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Parametresapp|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Parametresapp saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Parametresapp>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Parametresapp>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Parametresapp>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Parametresapp> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Parametresapp>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Parametresapp>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Parametresapp>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Parametresapp> deleteManyOrFail(iterable $entities, array $options = [])
 */
class ParametresappTable extends Table
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

        $this->setTable('parametresapp');
        $this->setDisplayField('nomapp');
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
            ->scalar('nomapp')
            ->maxLength('nomapp', 100)
            ->requirePresence('nomapp', 'create')
            ->notEmptyString('nomapp');

        $validator
            ->scalar('slogan')
            ->maxLength('slogan', 255)
            ->requirePresence('slogan', 'create')
            ->notEmptyString('slogan');

        $validator
            ->scalar('description')
            ->requirePresence('description', 'create')
            ->notEmptyString('description');

        $validator
            ->scalar('logo')
            ->maxLength('logo', 255)
            ->requirePresence('logo', 'create')
            ->notEmptyString('logo');

        $validator
            ->scalar('emailapp')
            ->maxLength('emailapp', 255)
            ->requirePresence('emailapp', 'create')
            ->notEmptyString('emailapp');

        $validator
            ->scalar('telapp')
            ->maxLength('telapp', 15)
            ->requirePresence('telapp', 'create')
            ->notEmptyString('telapp');

        $validator
            ->scalar('nomresp')
            ->maxLength('nomresp', 100)
            ->requirePresence('nomresp', 'create')
            ->notEmptyString('nomresp');

        $validator
            ->scalar('telresp')
            ->maxLength('telresp', 15)
            ->requirePresence('telresp', 'create')
            ->notEmptyString('telresp');

        $validator
            ->scalar('emailresp')
            ->maxLength('emailresp', 255)
            ->requirePresence('emailresp', 'create')
            ->notEmptyString('emailresp');

        $validator
            ->scalar('domaine')
            ->maxLength('domaine', 100)
            ->requirePresence('domaine', 'create')
            ->notEmptyString('domaine');

        $validator
            ->scalar('code')
            ->maxLength('code', 3)
            ->requirePresence('code', 'create')
            ->notEmptyString('code');

        $validator
            ->integer('iduser')
            ->requirePresence('iduser', 'create')
            ->notEmptyString('iduser');

        $validator
            ->dateTime('datemiseajour')
            ->requirePresence('datemiseajour', 'create')
            ->notEmptyDateTime('datemiseajour');

        $validator
            ->scalar('rccm')
            ->maxLength('rccm', 50)
            ->notEmptyString('rccm');

        $validator
            ->scalar('idnat')
            ->maxLength('idnat', 50)
            ->notEmptyString('idnat');

        $validator
            ->scalar('numimpot')
            ->maxLength('numimpot', 50)
            ->notEmptyString('numimpot');

        $validator
            ->scalar('numtva')
            ->maxLength('numtva', 50)
            ->notEmptyString('numtva');

        $validator
            ->scalar('nomcompagnie')
            ->maxLength('nomcompagnie', 255)
            ->notEmptyString('nomcompagnie');

        $validator
            ->numeric('declaration')
            ->requirePresence('declaration', 'create')
            ->notEmptyString('declaration');

        $validator
            ->numeric('prixdocuments')
            ->requirePresence('prixdocuments', 'create')
            ->notEmptyString('prixdocuments');

        $validator
            ->scalar('banque')
            ->maxLength('banque', 50)
            ->requirePresence('banque', 'create')
            ->notEmptyString('banque');

        $validator
            ->scalar('numcomptebanqueusd')
            ->maxLength('numcomptebanqueusd', 50)
            ->requirePresence('numcomptebanqueusd', 'create')
            ->notEmptyString('numcomptebanqueusd');

        $validator
            ->scalar('numcomptebanquecdf')
            ->maxLength('numcomptebanquecdf', 50)
            ->requirePresence('numcomptebanquecdf', 'create')
            ->notEmptyString('numcomptebanquecdf');

        $validator
            ->scalar('numcompte_airtelmonney')
            ->maxLength('numcompte_airtelmonney', 20)
            ->requirePresence('numcompte_airtelmonney', 'create')
            ->notEmptyString('numcompte_airtelmonney');

        $validator
            ->scalar('numcompte_mpesa')
            ->maxLength('numcompte_mpesa', 20)
            ->requirePresence('numcompte_mpesa', 'create')
            ->notEmptyString('numcompte_mpesa');

        $validator
            ->scalar('numcompte_orangemonney')
            ->maxLength('numcompte_orangemonney', 20)
            ->requirePresence('numcompte_orangemonney', 'create')
            ->notEmptyString('numcompte_orangemonney');

        $validator
            ->scalar('version')
            ->maxLength('version', 100)
            ->notEmptyString('version');

        return $validator;
    }
}
