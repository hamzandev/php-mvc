<!-- jumbotron -->
<div class="jumbotron mt-3 text-center">
    <img src="img/senja.jpg" width="150" class="mb-3 rounded-circle shadow">
    <h2 class="fw-bold"><?= $data['nama'] ?></h2>
    <p class="lead">Pelajar | Programmer</p>
    <a class="btn btn-primary btn-md mt-2" href="gallery" role="button">Show Gallery</a>
</div>
<br>
<hr class="mx-5">
<form class="my-5 col-8 m-auto">
    <h4 class="my-5 text-center">LOGIN | REGISTER</h4>
    <div class="form-group mb-3">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group mb-3">
        <label for="pwd">Password</label>
        <input type="password" class="form-control pwd-input" id="pwd">
    </div>
    <div class="form-group form-check mb-3">
        <input type="checkbox" class="form-check-input" id="showPwd">
        <label class="form-check-label" for="showPwd" id="showPwd">Show Password</label>
    </div>
    <button type="submit" class="btn btn-primary mb-3" style="width: 100%">Login</button>
    <div class="text-center mt-2">
        <small class="mx-auto">Don't have an Account? <a href="<?= BASEURL ?>register" class="text-decoration-none">Register Now!</a></small>
    </div>
</form>
<!-- <div class="row coba-vue">
    <p class="lead text-center fw-bold">{{ !isMarried ? nama + ' sudah Nikah' : 'Kamu Belum Nikah' }}</p>
    <h3>{{getName()}}</h3>
    <button class="btn btn-sm btn-primary" onclick="changeVal()">change value</button>
</div> -->