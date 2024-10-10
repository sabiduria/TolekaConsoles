<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Documentadm Model
 *
 * @method \App\Model\Entity\Documentadm newEmptyEntity()
 * @method \App\Model\Entity\Documentadm newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Documentadm> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Documentadm get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Documentadm findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Documentadm patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Documentadm> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Documentadm|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Documentadm saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Documentadm>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Documentadm>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Documentadm>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Documentadm> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Documentadm>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Documentadm>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Documentadm>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Documentadm> deleteManyOrFail(iterable $entities, array $options = [])
 */
class DocumentadmTable extends Table
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

        $this->setTable('documentadm');
        $this->setDisplayField('type');
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
            ->scalar('type')
            ->maxLength('type', 100)
            ->requirePresence('type', 'create')
            ->notEmptyString('type');

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
