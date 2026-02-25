<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Categoria Model
 *
 * @method \App\Model\Entity\Categorium newEmptyEntity()
 * @method \App\Model\Entity\Categorium newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Categorium[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Categorium get($primaryKey, $options = [])
 * @method \App\Model\Entity\Categorium findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Categorium patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Categorium[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Categorium|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Categorium saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Categorium[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Categorium[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Categorium[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Categorium[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CategoriaTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('categoria');
        $this->setDisplayField('Nombre_Cat');
        $this->setPrimaryKey('Id_Categoria');
/*
        $this->hasMany('Productos',[
        'foreignKey' => 'Nombre_Cat',]);*/

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
            ->scalar('Nombre_Cat')
            ->maxLength('Nombre_Cat', 30)
            ->requirePresence('Nombre_Cat', 'create')
            ->notEmptyString('Nombre_Cat')
            ->add('Nombre_Cat', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('Descripcion_Cat')
            ->maxLength('Descripcion_Cat', 200)
            ->requirePresence('Descripcion_Cat', 'create')
            ->notEmptyString('Descripcion_Cat');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->isUnique(['Nombre_Cat']), ['errorField' => 'Nombre_Cat']);

        return $rules;
    }
}
