<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sousmenu2 Entity
 *
 * @property int $idsousmenu2
 * @property int $idsousmenu
 * @property string $url
 * @property string $page
 * @property string $nomsousmenu2
 * @property string $statut
 * @property int $iduser
 * @property \Cake\I18n\DateTime $datemiseajour
 * @property int $idpage
 * @property string $nomsousmenu2en
 */
class Sousmenu2 extends Entity
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
        'idsousmenu' => true,
        'url' => true,
        'page' => true,
        'nomsousmenu2' => true,
        'statut' => true,
        'iduser' => true,
        'datemiseajour' => true,
        'idpage' => true,
        'nomsousmenu2en' => true,
    ];
}
