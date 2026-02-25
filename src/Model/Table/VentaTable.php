<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Venta Model
 *
 * @method \App\Model\Entity\Ventum newEmptyEntity()
 * @method \App\Model\Entity\Ventum newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Ventum[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ventum get($primaryKey, $options = [])
 * @method \App\Model\Entity\Ventum findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Ventum patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Ventum[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ventum|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ventum saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ventum[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Ventum[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Ventum[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Ventum[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class VentaTable extends Table
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

        $this->setTable('venta');
        $this->setDisplayField('Id_Venta');
        $this->setPrimaryKey('Id_Venta');
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
            ->integer('Id_Producto')
            ->requirePresence('Id_Producto', 'create')
            ->notEmptyString('Id_Producto');

        $validator
            ->integer('Cantidad')
            ->requirePresence('Cantidad', 'create')
            ->notEmptyString('Cantidad');

        $validator
            ->dateTime('Fecha')
            ->requirePresence('Fecha', 'create')
            ->notEmptyDateTime('Fecha');

        $validator
            ->scalar('Nombre_Empl')
            ->maxLength('Nombre_Empl', 30)
            ->requirePresence('Nombre_Empl', 'create')
            ->notEmptyString('Nombre_Empl');

        $validator
            ->scalar('Oferta')
            ->maxLength('Oferta', 30)
            ->requirePresence('Oferta', 'create')
            ->notEmptyString('Oferta');

        $validator
            ->scalar('Descuento')
            ->maxLength('Descuento', 30)
            ->requirePresence('Descuento', 'create')
            ->notEmptyString('Descuento');

        $validator
            ->numeric('Precio_Total')
            ->requirePresence('Precio_Total', 'create')
            ->notEmptyString('Precio_Total');

        return $validator;
    }
}
