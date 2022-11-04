<?php

class Gallery extends Controller
{
    public function index()
    {
        $data['judulHalaman'] = 'Gallery';
        $this->view("templates/header", $data);
        $this->view("gallery/index");
        $this->view("templates/footer");
    }
}
