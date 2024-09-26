<?php
namespace Controller;

use Form\TodoHandleRequest;


class TodoController extends BaseController
{
    private TodoHandleRequest $TodoHandleRequest;

    public function_construct(){
        $this->TodoHandleRequest = new TodoHandleRequest;
    }

    public function index(): void{

        $this->todoHandleRequest->insertTodo();
        $this-render(fichier: 'todo.html.php');
    }
}