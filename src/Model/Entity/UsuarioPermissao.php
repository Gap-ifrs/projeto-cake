<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UsuarioPermissao Entity.
 *
 * @property int $usuario_id
 * @property \App\Model\Entity\Usuario $usuario
 * @property int $permissao_id
 * @property \App\Model\Entity\Permissao $permissao
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 */
class UsuarioPermissao extends Entity
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
        'usuario_id' => false,
        'permissao_id' => false,
    ];
}
