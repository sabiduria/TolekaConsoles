<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ImagesSafetytopic Model
 *
 * @method \App\Model\Entity\ImagesSafetytopic newEmptyEntity()
 * @method \App\Model\Entity\ImagesSafetytopic newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\ImagesSafetytopic> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ImagesSafetytopic get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\ImagesSafetytopic findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\ImagesSafetytopic patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\ImagesSafetytopic> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ImagesSafetytopic|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\ImagesSafetytopic saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\ImagesSafetytopic>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ImagesSafetytopic>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\ImagesSafetytopic>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ImagesSafetytopic> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\ImagesSafetytopic>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ImagesSafetytopic>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\ImagesSafetytopic>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ImagesSafetytopic> deleteManyOrFail(iterable $entities, array $options = [])
 */
class ImagesSafetytopicTable extends Table
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

        $this->setTable('images_safetytopic');
        $this->setDisplayField('image');
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
            ->requirePresence('idtopic', 'create')
            ->notEmptyString('idtopic');

        $validator
            ->scalar('image')
            ->maxLength('image', 255)
            ->requirePresence('image', 'create')
            ->notEmptyFile('image');

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
