<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Projecthairul Controller
 *
 * @property \App\Model\Table\ProjecthairulTable $Projecthairul
 *
 * @method \App\Model\Entity\Projecthairul[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjecthairulController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $projecthairul = $this->paginate($this->Projecthairul);

        $this->set(compact('projecthairul'));
    }

    /**
     * View method
     *
     * @param string|null $id Projecthairul id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projecthairul = $this->Projecthairul->get($id, [
            'contain' => []
        ]);

        $this->set('projecthairul', $projecthairul);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $projecthairul = $this->Projecthairul->newEntity();
        if ($this->request->is('post')) {
            $projecthairul = $this->Projecthairul->patchEntity($projecthairul, $this->request->getData());
            if ($this->Projecthairul->save($projecthairul)) {
                $this->Flash->success(__('The projecthairul has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projecthairul could not be saved. Please, try again.'));
        }
        $this->set(compact('projecthairul'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Projecthairul id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projecthairul = $this->Projecthairul->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projecthairul = $this->Projecthairul->patchEntity($projecthairul, $this->request->getData());
            if ($this->Projecthairul->save($projecthairul)) {
                $this->Flash->success(__('The projecthairul has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projecthairul could not be saved. Please, try again.'));
        }
        $this->set(compact('projecthairul'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Projecthairul id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projecthairul = $this->Projecthairul->get($id);
        if ($this->Projecthairul->delete($projecthairul)) {
            $this->Flash->success(__('The projecthairul has been deleted.'));
        } else {
            $this->Flash->error(__('The projecthairul could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
