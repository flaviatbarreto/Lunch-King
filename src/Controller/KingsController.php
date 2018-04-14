<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Kings Controller
 *
 * @property \App\Model\Table\KingsTable $Kings
 *
 * @method \App\Model\Entity\King[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class KingsController extends AppController
{
    public function dayWinner()
    {
        $date = $this->request->query('date');
        $winner = $this->Kings->find('dayWinner', ['date'=>$date]);

        if(!$winner)
        {
            $this->loadModel('Votes');
            $vote_e = $this->Votes->newEntity();
            $vote_e->dayWinner($date);

            $winner = $this->Kings->find('dayWinner', ['date'=>$date]);
        }

        $this->set('king', $winner);
        $this->set('date', $date);
    }
}
