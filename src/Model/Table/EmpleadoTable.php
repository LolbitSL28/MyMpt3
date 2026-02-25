<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Empleado Model
 *
 * @method \App\Model\Entity\Empleado newEmptyEntity()
 * @method \App\Model\Entity\Empleado newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Empleado[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Empleado get($primaryKey, $options = [])
 * @method \App\Model\Entity\Empleado findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Empleado patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Empleado[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Empleado|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Empleado saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Empleado[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Empleado[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Empleado[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Empleado[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class EmpleadoTable extends Table
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

        $this->setTable('empleado');
        $this->setDisplayField('Id_Empleado');
        $this->setPrimaryKey('Id_Empleado');
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
            ->scalar('Nombre_Empl')
            ->maxLength('Nombre_Empl', 30)
            ->requirePresence('Nombre_Empl', 'create')
            ->notEmptyString('Nombre_Empl')
            ->add('Nombre_Empl', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('Rol_Empl')
            ->maxLength('Rol_Empl', 25)
            ->requirePresence('Rol_Empl', 'create')
            ->notEmptyString('Rol_Empl');

        $validator
            ->requirePresence('Telefono_Empl', 'create')
            ->notEmptyString('Telefono_Empl');

        $validator
            ->scalar('Direccion_Empl')
            ->maxLength('Direccion_Empl', 100)
            ->requirePresence('Direccion_Empl', 'create')
            ->notEmptyString('Direccion_Empl');

        $validator
            ->numeric('Sueldo_Empl')
            ->requirePresence('Sueldo_Empl', 'create')
            ->notEmptyString('Sueldo_Empl');

        $validator
            ->integer('Id_Usuario')
            ->requirePresence('Id_Usuario', 'create')
            ->notEmptyString('Id_Usuario');

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
        $rules->add($rules->isUnique(['Nombre_Empl']), ['errorField' => 'Nombre_Empl']);

        return $rules;
    }
}
