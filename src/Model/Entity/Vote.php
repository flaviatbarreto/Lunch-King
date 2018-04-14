<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\ORM\TableRegistry;

/**
 * Vote Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenDate $day
 * @property int $applicant_id
 *
 * @property \App\Model\Entity\Applicant $applicant
 */
class Vote extends Entity
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
        'day' => true,
        'applicant_id' => true,
        'applicant' => true
    ];

    public function dayWinner($date)
    {
        $votes = TableRegistry::get('Votes')->find('sumVotes', ['date' => $date]);
        foreach($votes as $key => $vote)
        {
            $king = TableRegistry::get('Kings')->newEntity();
            if($key == 0)
            {
                $king->winner = 1;
            }
            $king->applicant_id = $vote['applicant_id'];
            $king->n_votes = $vote['count'];
            $king->day = $date;
            TableRegistry::get('Kings')->save($king);
        }
    }
}
