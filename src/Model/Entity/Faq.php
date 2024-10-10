<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Faq Entity
 *
 * @property int $id
 * @property string $question
 * @property string $reponse
 * @property string $questionfr
 * @property string $reponsefr
 * @property \Cake\I18n\DateTime $date
 * @property \Cake\I18n\DateTime $datemiseajour
 * @property int $iduser
 * @property int $idagent
 * @property string $statut
 */
class Faq extends Entity
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
        'question' => true,
        'reponse' => true,
        'questionfr' => true,
        'reponsefr' => true,
        'date' => true,
        'datemiseajour' => true,
        'iduser' => true,
        'idagent' => true,
        'statut' => true,
    ];
}
