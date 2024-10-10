<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Photosbags Model
 *
 * @method \App\Model\Entity\Photosbag newEmptyEntity()
 * @method \App\Model\Entity\Photosbag newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Photosbag> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Photosbag get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Photosbag findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Photosbag patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Photosbag> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Photosbag|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Photosbag saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Photosbag>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Photosbag>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Photosbag>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Photosbag> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Photosbag>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Photosbag>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Photosbag>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Photosbag> deleteManyOrFail(iterable $entities, array $options = [])
 */
class PhotosbagsTable extends Table
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

        $this->setTable('photosbags');
        $this->setDisplayField('bagid');
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
            ->scalar('bagid')
            ->maxLength('bagid', 100)
            ->requirePresence('bagid', 'create')
            ->notEmptyString('bagid');

        $validator
            ->scalar('photo')
            ->maxLength('photo', 255)
            ->requirePresence('photo', 'create')
            ->notEmptyString('photo');

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
