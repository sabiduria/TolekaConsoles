<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Documentsadministratif Model
 *
 * @method \App\Model\Entity\Documentsadministratif newEmptyEntity()
 * @method \App\Model\Entity\Documentsadministratif newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Documentsadministratif> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Documentsadministratif get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Documentsadministratif findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Documentsadministratif patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Documentsadministratif> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Documentsadministratif|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Documentsadministratif saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Documentsadministratif>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Documentsadministratif>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Documentsadministratif>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Documentsadministratif> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Documentsadministratif>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Documentsadministratif>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Documentsadministratif>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Documentsadministratif> deleteManyOrFail(iterable $entities, array $options = [])
 */
class DocumentsadministratifTable extends Table
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

        $this->setTable('documentsadministratif');
        $this->setDisplayField('matricule');
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
            ->requirePresence('idemp', 'create')
            ->notEmptyString('idemp');

        $validator
            ->scalar('matricule')
            ->maxLength('matricule', 20)
            ->requirePresence('matricule', 'create')
            ->notEmptyString('matricule');

        $validator
            ->scalar('document')
            ->maxLength('document', 255)
            ->requirePresence('document', 'create')
            ->notEmptyString('document');

        $validator
            ->scalar('type')
            ->maxLength('type', 100)
            ->requirePresence('type', 'create')
            ->notEmptyString('type');

        $validator
            ->scalar('categorie')
            ->maxLength('categorie', 100)
            ->notEmptyString('categorie');

        $validator
            ->scalar('commentaire')
            ->maxLength('commentaire', 255)
            ->requirePresence('commentaire', 'create')
            ->notEmptyString('commentaire');

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
