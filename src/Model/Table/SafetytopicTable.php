<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Safetytopic Model
 *
 * @method \App\Model\Entity\Safetytopic newEmptyEntity()
 * @method \App\Model\Entity\Safetytopic newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Safetytopic> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Safetytopic get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Safetytopic findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Safetytopic patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Safetytopic> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Safetytopic|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Safetytopic saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Safetytopic>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Safetytopic>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Safetytopic>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Safetytopic> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Safetytopic>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Safetytopic>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Safetytopic>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Safetytopic> deleteManyOrFail(iterable $entities, array $options = [])
 */
class SafetytopicTable extends Table
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

        $this->setTable('safetytopic');
        $this->setDisplayField('sujet');
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
            ->scalar('sujet')
            ->maxLength('sujet', 255)
            ->requirePresence('sujet', 'create')
            ->notEmptyString('sujet');

        $validator
            ->scalar('commentaires')
            ->requirePresence('commentaires', 'create')
            ->notEmptyString('commentaires');

        $validator
            ->scalar('lieu')
            ->maxLength('lieu', 100)
            ->requirePresence('lieu', 'create')
            ->notEmptyString('lieu');

        $validator
            ->date('datetopic')
            ->requirePresence('datetopic', 'create')
            ->notEmptyDate('datetopic');

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
