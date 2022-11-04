<div class="card m-auto" style="width: 50%;">
    <img class="rounded shadow mt-5 m-auto" style="width: 80%; " src="<?= IMAGEURL;
                                                                        echo $data['dataMhs']['gambar'] ?>">
    <h3 class="p-3 m-auto fw-bold"><?= $data['dataMhs']['nama'] ?></h3>
    <div class="card-body">
        <ul>
            <li>NRP : <?= $data['dataMhs']['nrp'] ?></li>
            <li>Jurusan : <?= $data['dataMhs']['jurusan'] ?></li>
            <li>Email : <?= $data['dataMhs']['email'] ?></li>
        </ul>
        <a href="<?= BASEURL ?>mahasiswa" class="btn btn-primary" style="width: 100%;">Oke</a>
    </div>
</div>