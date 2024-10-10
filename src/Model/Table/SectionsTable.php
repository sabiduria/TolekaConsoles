<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sections Model
 *
 * @method \App\Model\Entity\Section newEmptyEntity()
 * @method \App\Model\Entity\Section newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Section> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Section get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Section findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Section patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Section> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Section|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Section saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Section>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Section>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Section>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Section> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Section>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Section>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Section>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Section> deleteManyOrFail(iterable $entities, array $options = [])
 */
class SectionsTable extends Table
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

        $this->setTable('sections');
        $this->setDisplayField('nomsection');
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
            ->scalar('nomsection')
            ->maxLength('nomsection', 100)
            ->requirePresence('nomsection', 'create')
            ->notEmptyString('nomsection');

        return $validator;
    }
}
