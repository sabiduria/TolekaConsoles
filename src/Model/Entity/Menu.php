<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Menu Entity
 *
 * @property int $idmenu
 * @property int $idpage
 * @property string $url
 * @property string $page
 * @property string $nommenu
 * @property string $icone
 * @property int $iduser
 * @property \Cake\I18n\DateTime $datemiseajour
 * @property string $statut
 * @property string $typex
 * @property string $langue
 */
class Menu extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'idpage' => true,
        'url' => true,
        'page' => true,
        'nommenu' => true,
        'icone' => true,
        'iduser' => true,
        'datemiseajour' => true,
        'statut' => true,
        'typex' => true,
        'langue' => true,
    ];
}
