<?php
namespace App\Controller;
 
use App\Controller\AppController;
 
class PersonsController extends AppController
{
 
    public function add()
    {
        if ($this->request->is('post')) {
            $person = $this->Persons->newEntity();
            $person = $this->Persons->patchEntity($person, $this->request->data);
            if ($this->Persons->save($person)) {
                return $this->redirect(['action' => 'index']);
            }
        }
    }
 
}

public function index()
    {
        $id = $this->request->query('id');
        $name = $this->request->query('name');
        $this->set('message', 'your id:' . $id . ', name:' . $name);
    }
}

