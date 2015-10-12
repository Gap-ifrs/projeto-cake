<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Usuario Entity.
 *
 * @property int $id
 * @property string $nome
 * @property string $email
 * @property string $password
 * @property int $telefone
 * @property int $celular
 * @property int $cpf
 * @property \Cake\I18n\Time $data_nascimento
 * @property \Cake\I18n\Time $data_admissao
 * @property \Cake\I18n\Time $data_demissao
 * @property bool $status
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property \App\Model\Entity\Compra[] $compras
 * @property \App\Model\Entity\UsuarioPermissao[] $usuario_permissoes
 * @property \App\Model\Entity\Venda[] $vendas
 */
class Usuario extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];
}
