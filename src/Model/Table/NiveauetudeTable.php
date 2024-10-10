<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Niveauetude Model
 *
 * @method \App\Model\Entity\Niveauetude newEmptyEntity()
 * @method \App\Model\Entity\Niveauetude newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Niveauetude> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Niveauetude get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Niveauetude findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Niveauetude patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Niveauetude> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Niveauetude|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Niveauetude saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Niveauetude>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Niveauetude>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Niveauetude>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Niveauetude> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Niveauetude>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Niveauetude>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Niveauetude>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Niveauetude> deleteManyOrFail(iterable $entities, array $options = [])
 */
class NiveauetudeTable extends Table
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

        $this->setTable('niveauetude');
        $this->setDisplayField('niveau');
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
            ->scalar('niveau')
            ->maxLength('niveau', 255)
            ->requirePresence('niveau', 'create')
            ->notEmptyString('niveau');

        $validator
            ->scalar('description')
            ->maxLength('description', 100)
            ->requirePresence('description', 'create')
            ->notEmptyString('description');

        $validator
            ->integer('iduser')
            ->requirePresence('iduser', 'create')
            ->notEmptyString('iduser');

        $validator
            ->dateTime('datemiseajour')
            ->requirePresence('datemiseajour', 'create')
            ->notEmptyDateTime('datemiseajour');

        return $validator;
    }
}
