<!-- Tabel untuk menampilakn daftar Mahasiswa -->

<div class="row">
    <div class="col">
        <div class="row">
            <div class="col-6 judul">
                <h3 class="fw-bold text-primary">Daftar Mahasiswa</h3>
            </div>
            <div class="col-6">
                <input type="text" class="form-control mb-3 border-2" id="search" placeholder="Search">
            </div>
        </div>
        <div class="row justify-content-end">
            <button type="button" style="width: 10%;" class="btn mx-2 btn-danger" data-bs-toggle="modal" data-bs-target="#modalAdd">
                Add Data
            </button>
        </div>
        <div class="row mt-3 py-4 overflow-auto" style="height: 73vh">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Email</th>
                        <th scope="col" colspan="3" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $counter = 1 ?>
                    <?php foreach ($data['dataMhs'] as $key => $value) : ?>
                        <tr>
                            <th scope="row"><?= $counter ?></th>
                            <td>
                                <img class="rounded shadow" src="<?= BASEURL ?>img/<?= $value['gambar'] ?>" alt="gambar" width="60">
                            </td>
                            <td><?= $value['nama'] ?></td>
                            <td><?= $value['jurusan'] ?></td>
                            <td><?= $value['email'] ?></td>
                            <!--  -->
                            <td><a href="#" class="btn btn-warning btn-sm text-light">Delete</a></td>
                            <td>
                                <a href="<?= BASEURL ?>mahasiswa/edit/<?= $value['id'] ?>" class="btn btn-primary">
                                    Edit
                                </a>
                            </td>
                            <td>
                                <a href="<?= BASEURL ?>mahasiswa/details/<?= $value['id'] ?>" class="btn btn-sm btn-secondary">Detail</a>
                            </td>
                            <?php $counter++ ?>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>

</div>


<!-- Modal for Add Data -->
<div class="modal fade" id="modalAdd" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulModal">Tambah Data Mahasiswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL ?>mahasiswa/tambah" method="post">
                    <div class="form-group mb-3">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group mb-3">
                        <label for="nrp">NRP</label>
                        <input name="nrp" type="number" class="form-control" id="nrp">
                    </div>
                    <div class="form-group mb-3">
                        <label for="jurusan">Jurusan</label>
                        <select class="form-select" aria-label="jurusan" name="jurusan" id="jurusan">
                            <option value="Teknik Informattika">Teknik Informatika</option>
                            <option value="Teknik Mesin">Teknik Mesin</option>
                            <option value="Teknik Industri">Teknik Industri</option>
                            <option value="Teknik Geologi Pertambangan">Teknik Geologi Pertambangan</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3 form-group">
                        <label for="gambar" class="form-label">Foto Mahasiswa</label>
                        <input class="form-control" type="text" id="gambar" name="gambar">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
    const allInput = document.querySelectorAll('.x');

    allInput.forEach(element => {
        element.disabled = true;
    });

    document.getElementById('addBtn').addEventListener('click', () => {
        allInput.forEach(element => {
            element.disabled = false;
        });
    });
</script>