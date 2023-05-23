<?php
// nama : Muhamad Ardalepa
// nim : 3202016004
class Controller{
    public function view($view,$data = []){
        require_once '../app/views/'.$view.'.php';
    }
    public function model($model){
        require_once '../app/models/'.$model.'.php';
        return new $model;
    }
}