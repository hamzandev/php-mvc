<?php


class MhsModels
{

    private $tableName = 'mahasiswa';
    private $db;


    public function __construct()
    {
        $this->db = new Databases;
    }


    public function getAllMhs()
    {
        $this->db->query("SELECT * FROM $this->tableName");
        return $this->db->resultAll();
    }

    public function getMhsById($id)
    {
        $this->db->query("SELECT * FROM $this->tableName WHERE id=:id");
        $this->db->myBind('id', $id);
        return $this->db->resultSingle();
    }

    public function tambahDataMhs($data)
    {

        // $myQuery = "INSERT INTO mahasiswa VALUES('', ':nama', ':nrp', ':jurusan', ':email', ':gambar')";
        $myQuery = "INSERT INTO `mahasiswa`(`id`, `nama`, `nrp`, `jurusan`, `email`, `gambar`) VALUES ('',':nama',':nrp',':jurusan',':email',':gambar')";
        // $nama = $data['nama'];
        // $nrp = $data['nrp'];
        // $jurusan = $data['jurusan'];
        // $email = $data['email'];
        // $foto = $data['gambar'];
        $this->db->query($myQuery);

        $this->db->myBind('nama', $data['nama']);
        $this->db->myBind('nrp', $data['nrp']);
        $this->db->myBind('jurusan', $data['jurusan']);
        $this->db->myBind('email', $data['email']);
        $this->db->myBind('gambar', $data['gambar']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
