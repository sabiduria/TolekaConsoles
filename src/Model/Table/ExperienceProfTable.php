<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ExperienceProf Model
 *
 * @method \App\Model\Entity\ExperienceProf newEmptyEntity()
 * @method \App\Model\Entity\ExperienceProf newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\ExperienceProf> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ExperienceProf get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\ExperienceProf findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\ExperienceProf patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\ExperienceProf> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ExperienceProf|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\ExperienceProf saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\ExperienceProf>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ExperienceProf>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\ExperienceProf>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ExperienceProf> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\ExperienceProf>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ExperienceProf>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\ExperienceProf>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ExperienceProf> deleteManyOrFail(iterable $entities, array $options = [])
 */
class ExperienceProfTable extends Table
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

        $this->setTable('experience_prof');
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
            ->maxLength('periode', 20)
            ->requirePresence('periode', 'create')
            ->notEmptyString('periode');

        $validator
            ->scalar('entreprise')
            ->maxLength('entreprise', 255)
            ->requirePresence('entreprise', 'create')
            ->notEmptyString('entreprise');

        $validator
            ->scalar('fonction')
            ->maxLength('fonction', 255)
            ->requirePresence('fonction', 'create')
            ->notEmptyString('fonction');

        $validator
            ->scalar('ville')
            ->maxLength('ville', 50)
            ->requirePresence('ville', 'create')
            ->notEmptyString('ville');

        $validator
            ->scalar('raison')
            ->maxLength('raison', 255)
            ->notEmptyString('raison');

        $validator
            ->scalar('date')
            ->maxLength('date', 20)
            ->requirePresence('date', 'create')
            ->notEmptyString('date');

        return $validator;
    }
}
