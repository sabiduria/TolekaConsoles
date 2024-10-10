<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pointages Model
 *
 * @method \App\Model\Entity\Pointage newEmptyEntity()
 * @method \App\Model\Entity\Pointage newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Pointage> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pointage get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Pointage findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Pointage patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Pointage> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pointage|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Pointage saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Pointage>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Pointage>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Pointage>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Pointage> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Pointage>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Pointage>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Pointage>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Pointage> deleteManyOrFail(iterable $entities, array $options = [])
 */
class PointagesTable extends Table
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

        $this->setTable('pointages');
        $this->setDisplayField('codepointage');
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
            ->scalar('codepointage')
            ->maxLength('codepointage', 5)
            ->requirePresence('codepointage', 'create')
            ->notEmptyString('codepointage');

        $validator
            ->scalar('description')
            ->maxLength('description', 100)
            ->requirePresence('description', 'create')
            ->notEmptyString('description');

        $validator
            ->scalar('type')
            ->maxLength('type', 50)
            ->notEmptyString('type');

        $validator
            ->numeric('coefficient')
            ->notEmptyString('coefficient');

        $validator
            ->integer('iduser')
            ->requirePresence('iduser', 'create')
            ->notEmptyString('iduser');

        $validator
            ->dateTime('datemiseajour')
            ->requirePresence('datemiseajour', 'create')
            ->notEmptyDateTime('datemiseajour');

        $validator
            ->scalar('descriptionen')
            ->maxLength('descriptionen', 100)
            ->requirePresence('descriptionen', 'create')
            ->notEmptyString('descriptionen');

        return $validator;
    }
}
