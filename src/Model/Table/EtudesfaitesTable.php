<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Etudesfaites Model
 *
 * @method \App\Model\Entity\Etudesfaite newEmptyEntity()
 * @method \App\Model\Entity\Etudesfaite newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Etudesfaite> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Etudesfaite get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Etudesfaite findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Etudesfaite patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Etudesfaite> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Etudesfaite|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Etudesfaite saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Etudesfaite>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Etudesfaite>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Etudesfaite>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Etudesfaite> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Etudesfaite>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Etudesfaite>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Etudesfaite>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Etudesfaite> deleteManyOrFail(iterable $entities, array $options = [])
 */
class EtudesfaitesTable extends Table
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

        $this->setTable('etudesfaites');
        $this->setDisplayField('periode');
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
            ->requirePresence('iduser', 'create')
            ->notEmptyString('iduser');

        $validator
            ->scalar('periode')
            ->maxLength('periode', 100)
            ->requirePresence('periode', 'create')
            ->notEmptyString('periode');

        $validator
            ->scalar('ecole')
            ->maxLength('ecole', 100)
            ->requirePresence('ecole', 'create')
            ->notEmptyString('ecole');

        $validator
            ->scalar('classes')
            ->maxLength('classes', 100)
            ->requirePresence('classes', 'create')
            ->notEmptyString('classes');

        $validator
            ->scalar('ville')
            ->maxLength('ville', 100)
            ->requirePresence('ville', 'create')
            ->notEmptyString('ville');

        $validator
            ->scalar('pieceobtenue')
            ->maxLength('pieceobtenue', 255)
            ->requirePresence('pieceobtenue', 'create')
            ->notEmptyString('pieceobtenue');

        $validator
            ->scalar('dateenregistrement')
            ->maxLength('dateenregistrement', 20)
            ->requirePresence('dateenregistrement', 'create')
            ->notEmptyString('dateenregistrement');

        return $validator;
    }
}
