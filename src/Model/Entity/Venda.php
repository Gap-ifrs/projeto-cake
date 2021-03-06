<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Venda Entity.
 *
 * @property int $id
 * @property float $valor_total
 * @property \Cake\I18n\Time $data
 * @property int $usuario_id
 * @property \App\Model\Entity\Usuario $usuario
 * @property int $cliente_id
 * @property \App\Model\Entity\Cliente $cliente
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property \App\Model\Entity\VendaProduto[] $venda_produtos
 */
class Venda extends Entity
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
