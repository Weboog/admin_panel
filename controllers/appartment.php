<?php


class Appartment extends Controller
{

    public function index(){
        $this->render('index');
    }

    public function all(){
        $model = $this->getModel();
        $options = array('order_by' => 'created_at', 'sense' => 'desc');
        $model->getAll($options);
    }

    public function get($id){
        $model = $this->getModel();
        $options = array('column' => array('name' => 'id', 'value' => $id), 'order_by' => 'id', 'sense' => 'ASC', 'limit' => array('start' => 0, 'count' => 100));
        $model->getBy($options);
    }

    public function add(){
            $this->render('add');
        var_dump($_POST);
    }
}