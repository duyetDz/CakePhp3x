<?php

namespace App\Controller;

use Cake\ORM\TableRegistry;

class HomeController extends AppController
{

    public $Users;

    public function initialize()
    {
        parent::initialize();
        $this->Users = TableRegistry::getTableLocator()->get('Users');
    }

    function index()
    {
    }

    function login()
    {
        $this->viewBuilder()->setLayout('blank');
    }

    function signup()
    {
        $sign_up = $this->Users->newEntity($this->request->getData(),['validate' => true]);
        // if ($this->request->is('post')) {
        //     $sign_up = $this->Users->newEntity($this->request->getData());
        //     $sign_up->username  = $this->request->getData('username');
        //     $sign_up->password  = $this->request->getData('password');
        //     $sign_up->email     = $this->request->getData('email');
        //     if($this->Users->save($sign_up)){
        //         $this->Flash->error("User add thành công");
        //         return $this->redirect(['action' => 'Signup']);
        //     }
        //     $this->Flash->error(__('Không thêm thành công'));
            
        // }

        $this->set(compact('sign_up'));


        $this->viewBuilder()->setLayout('blank');
        $this->render('signup');
    }
}
