<div class="row">
    <div class="col-6 m-auto">
        <h2 class="text-primary mb-3">Edit Data Mahasiswa</h2>
        <form class="d-grid">
            <div class="mb-2">
                <input type="text" class="form-control x mb-3" id="nama" placeholder="Nama Lengkap" value="<?= $data['dataMhs']['nama'] ?>">
            </div>
            <div class="mb-2">
                <input type="number" class="form-control x mb-3" id="nrp" placeholder="NRP Mahasiswa" value="<?= $data['dataMhs']['nrp'] ?>">
            </div>
            <div class="mb-2">
                <input type="text" class="form-control x mb-3" id="jurusan" placeholder="Jurusan" value="<?= $data['dataMhs']['jurusan'] ?>">
            </div>
            <div class="mb-2">
                <input basename type="email" class="form-control x mb-3" id="email" placeholder="Email Address" value="<?= $data['dataMhs']['email'] ?>">
            </div>
            <div class="mb-2">
                <label for="foto" class="form-label d-block">Ubah Foto</label>
                <img class="rounded shadow" style="width: 40%;" src="<?= IMAGEURL;
                                                                        echo $data['dataMhs']['gambar'] ?>" alt="foto">
            </div>

            <div class="row">
                <div class="col-6 d-grid">
                    <a href="<?= BASEURL ?>mahasiswa" type="submit" class="btn shadow mt-3 btn-primary">Cancel</a>
                </div>
                <div class="col-6 d-grid">
                    <button type="submit" class="btn x shadow mt-3 btn-danger">Save Change</button>
                </div>
            </div>
        </form>
    </div>
</div>