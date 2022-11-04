<?php

class Contact extends Controller
{

    public function index()
    {
        $data['judulHalaman'] = 'Contact Me';
        $data['nama'] = $this->model('userModels')->getUser();
        $this->view("templates/header", $data);
        $this->view("contact/index", $data);
        $this->view("templates/footer");
    }

    public function email()
    {
        $data['judulHalaman'] = 'Contact Me | Email';
        $data['nama'] = $this->model('userModels')->getUser();
        $this->view("templates/header", $data);
        $this->view("contact/email", $data);
        $this->view("templates/footer");
    }
}
