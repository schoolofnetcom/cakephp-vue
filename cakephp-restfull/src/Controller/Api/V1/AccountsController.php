<?php


namespace App\Controller\Api\V1;

use Cake\Event\Event;

class AccountsController extends AppController
{
    use \Crud\Controller\ControllerTrait;


    public function initialize()
    {
        parent::initialize();
        $this->Crud->on('beforeFind', function (Event $event) {
            $event->getSubject()->query->contain([
                'Banks'
            ]);
        });
    }
}