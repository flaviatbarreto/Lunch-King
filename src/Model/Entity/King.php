<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * King Entity
 *
 * @property int $id
 * @property int $applicant_id
 * @property \Cake\I18n\FrozenDate $day
 * @property int $n_votes
 * @property int $winner
 *
 * @property \App\Model\Entity\Applicant $applicant
 */
class King extends Entity
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
        'applicant_id' => true,
        'day' => true,
        'n_votes' => true,
        'winner' => true,
        'applicant' => true
    ];
}
