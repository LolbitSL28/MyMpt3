<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Comentarios Model
 *
 * @method \App\Model\Entity\Comentario newEmptyEntity()
 * @method \App\Model\Entity\Comentario newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Comentario[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Comentario get($primaryKey, $options = [])
 * @method \App\Model\Entity\Comentario findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Comentario patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Comentario[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Comentario|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Comentario saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Comentario[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Comentario[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Comentario[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Comentario[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ComentariosTable extends Table
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

        $this->setTable('comentarios');
        $this->setDisplayField('Id_Comentario');
        $this->setPrimaryKey('Id_Comentario');
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
            ->integer('Id_Usuario')
            ->requirePresence('Id_Usuario', 'create')
            ->notEmptyString('Id_Usuario');

        $validator
            ->scalar('Contenido')
            ->maxLength('Contenido', 200)
            ->requirePresence('Contenido', 'create')
            ->notEmptyString('Contenido');

        return $validator;
    }
}
