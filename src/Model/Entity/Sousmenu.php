<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sousmenu Entity
 *
 * @property int $idsousmenu
 * @property int $idmenu
 * @property string $url
 * @property string $page
 * @property string $nomsousmenu
 * @property string $statut
 * @property int $iduser
 * @property \Cake\I18n\DateTime $datemiseajour
 */
class Sousmenu extends Entity
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
        'idmenu' => true,
        'url' => true,
        'page' => true,
        'nomsousmenu' => true,
        'statut' => true,
        'iduser' => true,
        'datemiseajour' => true,
    ];
}
