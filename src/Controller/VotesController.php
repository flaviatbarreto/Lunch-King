<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Votes Controller
 *
 * @property \App\Model\Table\VotesTable $Votes
 *
 * @method \App\Model\Entity\Vote[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class VotesController extends AppController
{
    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $now = time();
        $initial_vote_time = mktime(10,0,0);
        $end_vote_time = mktime(12,0,0);

        if($initial_vote_time > $now)
        {
            return $this->redirect([
                'controller' => 'kings',
                'action' => 'dayWinner',
                'date' => date('Y-m-d', strtotime('-1 day'))
            ]);
        }

        if($now > $end_vote_time)
        {
            return $this->redirect([
                'controller' => 'kings',
                'action' => 'dayWinner',
                'date' => date('Y-m-d')
            ]);
        }

        if ($this->request->is('post'))
        {
            $vote = $this->Votes->newEntity();
            $vote = $this->Votes->patchEntity($vote, $this->request->getData());
            $vote->day = date('Y-m-d');

            if ($this->Votes->save($vote))
            {
                $this->Flash->success(__('The vote has been saved.'));
                //return $this->redirect(['action' => 'index']);
            }else{
                $this->Flash->error(__('The vote could not be saved. Please, try again.'));
            }
        }
        $vote = $this->Votes->newEntity();
        $applicants = $this->Votes->Applicants->find('list', ['limit' => 200]);
        $this->set(compact('vote', 'applicants'));
    }
}
