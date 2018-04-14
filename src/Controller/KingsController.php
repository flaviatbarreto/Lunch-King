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
            //calcula o $winner
            //applicant model entity
        }
        dd($winner);
    }

    /**
     * View method
     *
     * @param string|null $id King id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $king = $this->Kings->get($id, [
            'contain' => ['Applicants']
        ]);

        $this->set('king', $king);
    }
}
