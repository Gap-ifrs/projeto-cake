<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CompraProduto Entity.
 *
 * @property int $compra_id
 * @property \App\Model\Entity\Compra $compra
 * @property int $produto_id
 * @property \App\Model\Entity\Produto $produto
 * @property \Cake\I18n\Time $created
 * @property string $modified
 */
class CompraProduto extends Entity
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
        'compra_id' => false,
        'produto_id' => false,
    ];
}
