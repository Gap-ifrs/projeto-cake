<?php
namespace App\Model\Table;

use App\Model\Entity\Usuario;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Usuarios Model
 *
 * @property \Cake\ORM\Association\HasMany $Compras
 * @property \Cake\ORM\Association\HasMany $UsuarioPermissoes
 * @property \Cake\ORM\Association\HasMany $Vendas
 */
class UsuariosTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('usuarios');
        $this->displayField('nome');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Compras', [
            'foreignKey' => 'usuario_id'
        ]);
        $this->hasMany('UsuarioPermissoes', [
            'foreignKey' => 'usuario_id'
        ]);
        $this->hasMany('Vendas', [
            'foreignKey' => 'usuario_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('nome', 'create')
            ->notEmpty('nome');

        $validator
            ->add('email', 'valid', ['rule' => 'email'])
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->requirePresence('password', 'create')
            ->notEmpty('password');

        $validator
            ->add('telefone', 'valid', ['rule' => 'numeric'])
            ->requirePresence('telefone', 'create')
            ->notEmpty('telefone');

        $validator
            ->add('celular', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('celular');

        $validator
            ->add('cpf', 'valid', ['rule' => 'numeric'])
            ->requirePresence('cpf', 'create')
            ->notEmpty('cpf');

        $validator
            ->add('data_nascimento', 'valid', ['rule' => 'datetime'])
            ->requirePresence('data_nascimento', 'create')
            ->notEmpty('data_nascimento');

        $validator
            ->add('data_admissao', 'valid', ['rule' => 'datetime'])
            ->requirePresence('data_admissao', 'create')
            ->notEmpty('data_admissao');

        $validator
            ->add('data_demissao', 'valid', ['rule' => 'datetime'])
            ->allowEmpty('data_demissao');

        $validator
            ->add('status', 'valid', ['rule' => 'boolean'])
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));
        return $rules;
    }
}
