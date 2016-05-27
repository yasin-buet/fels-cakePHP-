<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Lessons Controller
 *
 * @property \App\Model\Table\LessonsTable $Lessons
 */
class LessonsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Categories']
        ];
        $lessons = $this->paginate($this->Lessons);

        $this->set(compact('lessons'));
        $this->set('_serialize', ['lessons']);
    }

    /**
     * View method
     *
     * @param string|null $id Lesson id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $lesson = $this->Lessons->get($id, [
            'contain' => ['Users', 'Categories', 'Results']
        ]);

        $this->set('lesson', $lesson);
        $this->set('_serialize', ['lesson']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $lesson = $this->Lessons->newEntity();
        if ($this->request->is('post')) {
            $lesson = $this->Lessons->patchEntity($lesson, $this->request->data);
            if ($this->Lessons->save($lesson)) {
                $this->Flash->success(__('The lesson has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The lesson could not be saved. Please, try again.'));
            }
        }
        $users = $this->Lessons->Users->find('list', ['limit' => 200]);
        $categories = $this->Lessons->Categories->find('list', ['limit' => 200]);
        $this->set(compact('lesson', 'users', 'categories'));
        $this->set('_serialize', ['lesson']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Lesson id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $lesson = $this->Lessons->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $lesson = $this->Lessons->patchEntity($lesson, $this->request->data);
            if ($this->Lessons->save($lesson)) {
                $this->Flash->success(__('The lesson has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The lesson could not be saved. Please, try again.'));
            }
        }
        $users = $this->Lessons->Users->find('list', ['limit' => 200]);
        $categories = $this->Lessons->Categories->find('list', ['limit' => 200]);
        $this->set(compact('lesson', 'users', 'categories'));
        $this->set('_serialize', ['lesson']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Lesson id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $lesson = $this->Lessons->get($id);
        if ($this->Lessons->delete($lesson)) {
            $this->Flash->success(__('The lesson has been deleted.'));
        } else {
            $this->Flash->error(__('The lesson could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
