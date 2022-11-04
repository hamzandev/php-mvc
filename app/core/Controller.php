<?php

class Controller
{
    public function view($viewOf, $data = [])
    {
        require_once '../app/views/' . $viewOf . '.php';
    }

    public function model($modelOf)
    {
        require_once '../app/models/' . $modelOf . '.php';
        return new $modelOf;
    }
}
