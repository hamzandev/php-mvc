<?php

class Mahasiswa extends Controller
{
    public function index()
    {
        $data['dataMhs'] = $this->model("mhsModels")->getAllMhs();
        $data['judulHalaman'] = "Daftar Mahasiswa";
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }

    public function details($id)
    {
        $data['dataMhs'] = $this->model("mhsModels")->getMhsById($id);
        $data['judulHalaman'] = "Detail Mahasiswa";
        $this->view('templates/header', $data);
        $this->view('mahasiswa/details', $data);
        $this->view('templates/footer');
    }
    public function edit($id)
    {
        $data['dataMhs'] = $this->model("mhsModels")->getMhsById($id);
        $data['judulHalaman'] = "Edit Mahasiswa";
        $this->view('templates/header', $data);
        $this->view('mahasiswa/edit', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('mhsModels')->tambahDataMhs($_POST) > 0) {
            header('Location: ' . BASEURL . 'mahasiswa');
            exit;
        }
        // print_r($_POST);
    }
}
