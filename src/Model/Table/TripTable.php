<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Trip Model
 *
 * @method \App\Model\Entity\Trip newEmptyEntity()
 * @method \App\Model\Entity\Trip newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Trip> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Trip get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Trip findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Trip patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Trip> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Trip|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Trip saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Trip>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Trip>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Trip>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Trip> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Trip>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Trip>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Trip>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Trip> deleteManyOrFail(iterable $entities, array $options = [])
 */
class TripTable extends Table
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

        $this->setTable('trip');
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
            ->integer('prealerte')
            ->requirePresence('prealerte', 'create')
            ->notEmptyString('prealerte');

        $validator
            ->scalar('produit')
            ->maxLength('produit', 50)
            ->requirePresence('produit', 'create')
            ->notEmptyString('produit');

        $validator
            ->date('exploaddate')
            ->requirePresence('exploaddate', 'create')
            ->notEmptyDate('exploaddate');

        $validator
            ->scalar('tonnagetoload')
            ->maxLength('tonnagetoload', 10)
            ->requirePresence('tonnagetoload', 'create')
            ->notEmptyString('tonnagetoload');

        $validator
            ->numeric('tonnageload')
            ->requirePresence('tonnageload', 'create')
            ->notEmptyString('tonnageload');

        $validator
            ->date('loaddate')
            ->requirePresence('loaddate', 'create')
            ->notEmptyDate('loaddate');

        $validator
            ->scalar('templot')
            ->maxLength('templot', 50)
            ->requirePresence('templot', 'create')
            ->notEmptyString('templot');

        $validator
            ->scalar('imexlot')
            ->maxLength('imexlot', 50)
            ->requirePresence('imexlot', 'create')
            ->notEmptyString('imexlot');

        $validator
            ->integer('items')
            ->requirePresence('items', 'create')
            ->notEmptyString('items');

        $validator
            ->scalar('loadassist')
            ->maxLength('loadassist', 50)
            ->requirePresence('loadassist', 'create')
            ->notEmptyString('loadassist');

        $validator
            ->scalar('ckopsop')
            ->maxLength('ckopsop', 50)
            ->requirePresence('ckopsop', 'create')
            ->notEmptyString('ckopsop');

        $validator
            ->scalar('forkliftop1')
            ->maxLength('forkliftop1', 50)
            ->requirePresence('forkliftop1', 'create')
            ->notEmptyString('forkliftop1');

        $validator
            ->dateTime('dateckops')
            ->requirePresence('dateckops', 'create')
            ->notEmptyDateTime('dateckops');

        $validator
            ->dateTime('datewbein')
            ->requirePresence('datewbein', 'create')
            ->notEmptyDateTime('datewbein');

        $validator
            ->dateTime('datewbout')
            ->requirePresence('datewbout', 'create')
            ->notEmptyDateTime('datewbout');

        $validator
            ->scalar('wbopin')
            ->maxLength('wbopin', 50)
            ->requirePresence('wbopin', 'create')
            ->notEmptyString('wbopin');

        $validator
            ->scalar('wbopout')
            ->maxLength('wbopout', 50)
            ->requirePresence('wbopout', 'create')
            ->notEmptyString('wbopout');

        $validator
            ->numeric('netweight')
            ->requirePresence('netweight', 'create')
            ->notEmptyString('netweight');

        $validator
            ->numeric('grossweight')
            ->requirePresence('grossweight', 'create')
            ->notEmptyString('grossweight');

        $validator
            ->scalar('wbticket')
            ->maxLength('wbticket', 20)
            ->requirePresence('wbticket', 'create')
            ->notEmptyString('wbticket');

        $validator
            ->integer('tare')
            ->requirePresence('tare', 'create')
            ->notEmptyString('tare');

        $validator
            ->integer('nbitemwb')
            ->requirePresence('nbitemwb', 'create')
            ->notEmptyString('nbitemwb');

        $validator
            ->scalar('commentwb')
            ->maxLength('commentwb', 255)
            ->requirePresence('commentwb', 'create')
            ->notEmptyString('commentwb');

        $validator
            ->date('ckadate')
            ->requirePresence('ckadate', 'create')
            ->notEmptyDate('ckadate');

        $validator
            ->scalar('ckaop')
            ->maxLength('ckaop', 50)
            ->requirePresence('ckaop', 'create')
            ->notEmptyString('ckaop');

        $validator
            ->integer('nbitemcka')
            ->requirePresence('nbitemcka', 'create')
            ->notEmptyString('nbitemcka');

        $validator
            ->scalar('commentcka')
            ->maxLength('commentcka', 255)
            ->requirePresence('commentcka', 'create')
            ->notEmptyString('commentcka');

        $validator
            ->date('expbpdate')
            ->requirePresence('expbpdate', 'create')
            ->notEmptyDate('expbpdate');

        $validator
            ->date('bpdate')
            ->requirePresence('bpdate', 'create')
            ->notEmptyDate('bpdate');

        $validator
            ->scalar('bpop')
            ->maxLength('bpop', 50)
            ->requirePresence('bpop', 'create')
            ->notEmptyString('bpop');

        $validator
            ->date('fxodate')
            ->requirePresence('fxodate', 'create')
            ->notEmptyDate('fxodate');

        $validator
            ->scalar('fxoop')
            ->maxLength('fxoop', 50)
            ->requirePresence('fxoop', 'create')
            ->notEmptyString('fxoop');

        $validator
            ->date('exitdrcdate')
            ->requirePresence('exitdrcdate', 'create')
            ->notEmptyDate('exitdrcdate');

        $validator
            ->scalar('exitdrcop')
            ->maxLength('exitdrcop', 50)
            ->requirePresence('exitdrcop', 'create')
            ->notEmptyString('exitdrcop');

        $validator
            ->date('exppkldate')
            ->requirePresence('exppkldate', 'create')
            ->notEmptyDate('exppkldate');

        $validator
            ->date('pkldate')
            ->requirePresence('pkldate', 'create')
            ->notEmptyDate('pkldate');

        $validator
            ->scalar('pklop')
            ->maxLength('pklop', 50)
            ->requirePresence('pklop', 'create')
            ->notEmptyString('pklop');

        $validator
            ->date('expdocdate')
            ->requirePresence('expdocdate', 'create')
            ->notEmptyDate('expdocdate');

        $validator
            ->date('docdate')
            ->requirePresence('docdate', 'create')
            ->notEmptyDate('docdate');

        $validator
            ->scalar('docop')
            ->maxLength('docop', 50)
            ->requirePresence('docop', 'create')
            ->notEmptyString('docop');

        $validator
            ->date('expdispdate')
            ->requirePresence('expdispdate', 'create')
            ->notEmptyDate('expdispdate');

        $validator
            ->date('dispdate')
            ->requirePresence('dispdate', 'create')
            ->notEmptyDate('dispdate');

        $validator
            ->scalar('dispop')
            ->maxLength('dispop', 50)
            ->requirePresence('dispop', 'create')
            ->notEmptyString('dispop');

        $validator
            ->scalar('statutload')
            ->maxLength('statutload', 100)
            ->requirePresence('statutload', 'create')
            ->notEmptyString('statutload');

        $validator
            ->scalar('statutckops')
            ->maxLength('statutckops', 100)
            ->requirePresence('statutckops', 'create')
            ->notEmptyString('statutckops');

        $validator
            ->scalar('statutcka')
            ->maxLength('statutcka', 100)
            ->requirePresence('statutcka', 'create')
            ->notEmptyString('statutcka');

        $validator
            ->scalar('statutbp')
            ->maxLength('statutbp', 100)
            ->requirePresence('statutbp', 'create')
            ->notEmptyString('statutbp');

        $validator
            ->scalar('statutfxo')
            ->maxLength('statutfxo', 100)
            ->requirePresence('statutfxo', 'create')
            ->notEmptyString('statutfxo');

        $validator
            ->scalar('statutpkl')
            ->maxLength('statutpkl', 100)
            ->requirePresence('statutpkl', 'create')
            ->notEmptyString('statutpkl');

        $validator
            ->scalar('statutexitdrc')
            ->maxLength('statutexitdrc', 100)
            ->requirePresence('statutexitdrc', 'create')
            ->notEmptyString('statutexitdrc');

        $validator
            ->scalar('statutdoc')
            ->maxLength('statutdoc', 100)
            ->requirePresence('statutdoc', 'create')
            ->notEmptyString('statutdoc');

        $validator
            ->scalar('statutdisp')
            ->maxLength('statutdisp', 100)
            ->requirePresence('statutdisp', 'create')
            ->notEmptyString('statutdisp');

        $validator
            ->scalar('statutwb')
            ->maxLength('statutwb', 100)
            ->requirePresence('statutwb', 'create')
            ->notEmptyString('statutwb');

        $validator
            ->dateTime('datetrip')
            ->requirePresence('datetrip', 'create')
            ->notEmptyDateTime('datetrip');

        $validator
            ->integer('iduser')
            ->requirePresence('iduser', 'create')
            ->notEmptyString('iduser');

        $validator
            ->scalar('statuttrip')
            ->maxLength('statuttrip', 100)
            ->requirePresence('statuttrip', 'create')
            ->notEmptyString('statuttrip');

        $validator
            ->scalar('moisgestion')
            ->maxLength('moisgestion', 10)
            ->requirePresence('moisgestion', 'create')
            ->notEmptyString('moisgestion');

        $validator
            ->date('invoicedate')
            ->requirePresence('invoicedate', 'create')
            ->notEmptyDate('invoicedate');

        $validator
            ->scalar('invoiceop')
            ->maxLength('invoiceop', 50)
            ->requirePresence('invoiceop', 'create')
            ->notEmptyString('invoiceop');

        $validator
            ->scalar('statutinvoice')
            ->maxLength('statutinvoice', 100)
            ->requirePresence('statutinvoice', 'create')
            ->notEmptyString('statutinvoice');

        $validator
            ->scalar('commentdisp')
            ->maxLength('commentdisp', 100)
            ->requirePresence('commentdisp', 'create')
            ->notEmptyString('commentdisp');

        $validator
            ->date('arrdate')
            ->requirePresence('arrdate', 'create')
            ->notEmptyDate('arrdate');

        $validator
            ->scalar('typetransp')
            ->maxLength('typetransp', 20)
            ->notEmptyString('typetransp');

        $validator
            ->date('samplingdate')
            ->requirePresence('samplingdate', 'create')
            ->notEmptyDate('samplingdate');

        $validator
            ->scalar('samplingop')
            ->maxLength('samplingop', 100)
            ->requirePresence('samplingop', 'create')
            ->notEmptyString('samplingop');

        $validator
            ->date('stickercheckdate')
            ->requirePresence('stickercheckdate', 'create')
            ->notEmptyDate('stickercheckdate');

        $validator
            ->scalar('stickercheckop')
            ->maxLength('stickercheckop', 100)
            ->requirePresence('stickercheckop', 'create')
            ->notEmptyString('stickercheckop');

        $validator
            ->date('loadcheckdate')
            ->requirePresence('loadcheckdate', 'create')
            ->notEmptyDate('loadcheckdate');

        $validator
            ->scalar('loadcheckop')
            ->maxLength('loadcheckop', 100)
            ->requirePresence('loadcheckop', 'create')
            ->notEmptyString('loadcheckop');

        $validator
            ->dateTime('riskdate')
            ->requirePresence('riskdate', 'create')
            ->notEmptyDateTime('riskdate');

        $validator
            ->scalar('statutrisk')
            ->maxLength('statutrisk', 255)
            ->requirePresence('statutrisk', 'create')
            ->notEmptyString('statutrisk');

        $validator
            ->integer('riskop')
            ->requirePresence('riskop', 'create')
            ->notEmptyString('riskop');

        $validator
            ->scalar('commentrisk')
            ->maxLength('commentrisk', 255)
            ->requirePresence('commentrisk', 'create')
            ->notEmptyString('commentrisk');

        return $validator;
    }
}
