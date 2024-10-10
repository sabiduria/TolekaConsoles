<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Qmslots Model
 *
 * @method \App\Model\Entity\Qmslot newEmptyEntity()
 * @method \App\Model\Entity\Qmslot newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Qmslot> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Qmslot get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Qmslot findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Qmslot patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Qmslot> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Qmslot|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Qmslot saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Qmslot>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Qmslot>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Qmslot>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Qmslot> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Qmslot>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Qmslot>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Qmslot>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Qmslot> deleteManyOrFail(iterable $entities, array $options = [])
 */
class QmslotsTable extends Table
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

        $this->setTable('qmslots');
        $this->setDisplayField('lotnumber');
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
            ->scalar('lotnumber')
            ->maxLength('lotnumber', 50)
            ->requirePresence('lotnumber', 'create')
            ->notEmptyString('lotnumber');

        $validator
            ->scalar('imexlot')
            ->maxLength('imexlot', 50)
            ->requirePresence('imexlot', 'create')
            ->notEmptyString('imexlot');

        $validator
            ->scalar('dleid')
            ->maxLength('dleid', 50)
            ->requirePresence('dleid', 'create')
            ->notEmptyString('dleid');

        return $validator;
    }
}
