<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Discipline Model
 *
 * @method \App\Model\Entity\Discipline newEmptyEntity()
 * @method \App\Model\Entity\Discipline newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Discipline> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Discipline get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Discipline findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Discipline patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Discipline> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Discipline|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Discipline saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Discipline>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Discipline>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Discipline>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Discipline> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Discipline>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Discipline>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Discipline>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Discipline> deleteManyOrFail(iterable $entities, array $options = [])
 */
class DisciplineTable extends Table
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

        $this->setTable('discipline');
        $this->setDisplayField('typesanction');
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
            ->scalar('typesanction')
            ->maxLength('typesanction', 255)
            ->requirePresence('typesanction', 'create')
            ->notEmptyString('typesanction');

        $validator
            ->scalar('matricule')
            ->maxLength('matricule', 20)
            ->requirePresence('matricule', 'create')
            ->notEmptyString('matricule');

        $validator
            ->scalar('nomagent')
            ->maxLength('nomagent', 255)
            ->requirePresence('nomagent', 'create')
            ->notEmptyString('nomagent');

        $validator
            ->scalar('motif')
            ->requirePresence('motif', 'create')
            ->notEmptyString('motif');

        $validator
            ->date('datedebut')
            ->requirePresence('datedebut', 'create')
            ->notEmptyDate('datedebut');

        $validator
            ->date('datefin')
            ->requirePresence('datefin', 'create')
            ->notEmptyDate('datefin');

        $validator
            ->scalar('document')
            ->maxLength('document', 255)
            ->requirePresence('document', 'create')
            ->notEmptyString('document');

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
