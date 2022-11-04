<?php

class Register extends Controller
{
    public function index()
    {
        $data['judulHalaman'] = 'Register';
        $this->view('templates/header', $data);
        $this->view('register/index', $data);
        $this->view('templates/footer');
    }
}
