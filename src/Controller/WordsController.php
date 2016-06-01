<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Words Controller
 *
 * @property \App\Model\Table\WordsTable $Words
 */
class WordsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {debug($this->Auth->user('role'));
        $this->paginate = [
            'contain' => ['Categories']
        ];
        $words = $this->paginate($this->Words);

        $this->set(compact('words'));
        $this->set('_serialize', ['words']);
    }

    /**
     * View method
     *
     * @param string|null $id Word id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $word = $this->Words->get($id, [
            'contain' => ['Categories', 'Answers', 'Results']
        ]);

        $this->set('word', $word);
        $this->set('_serialize', ['word']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        if ($this->Auth->user('role') == 'user') {
            $this->Flash->error(__('You are not authorized'));
            return $this->redirect(['action' => 'index']);
        }
        $word = $this->Words->newEntity();
        if ($this->request->is('post')) {
            $word = $this->Words->patchEntity($word, $this->request->data);
            if ($this->Words->save($word)) {
                $this->Flash->success(__('The word has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The word could not be saved. Please, try again.'));
            }
        }
        $categories = $this->Words->Categories->find('list', ['limit' => 200]);
        $this->set(compact('word', 'categories'));
        $this->set('_serialize', ['word']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Word id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $word = $this->Words->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $word = $this->Words->patchEntity($word, $this->request->data);
            if ($this->Words->save($word)) {
                $this->Flash->success(__('The word has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The word could not be saved. Please, try again.'));
            }
        }
        $categories = $this->Words->Categories->find('list', ['limit' => 200]);
        $this->set(compact('word', 'categories'));
        $this->set('_serialize', ['word']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Word id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $word = $this->Words->get($id);
        if ($this->Words->delete($word)) {
            $this->Flash->success(__('The word has been deleted.'));
        } else {
            $this->Flash->error(__('The word could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

//     public function isAuthorized($user)
// {
//     // All registered users can add articles
//     if ($this->request->action === 'index') {
//         return true;
//     }

//     // The owner of an article can edit and delete it
//     // if (in_array($this->request->action, ['add', 'edit', 'delete'])) {
//     //     // $articleId = (int)$this->request->params['pass'][0];
//     //     // if ($this->Articles->isOwnedBy($articleId, $user['id'])) {
//     //         return true;
//     //     // }
//     // }

//     return parent::isAuthorized($user);
// }
}
