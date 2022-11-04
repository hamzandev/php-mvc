<!-- View Untuk Page Contact email -->
<h2 class="text-center mb-3"><?= $data['judulHalaman'] ?></h2>
<form action="" class="col-4 m-auto shadow p-5 rounded">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="email" class="form-control" autocomplete="on" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <button class="btn btn-primary mt-3" style="width: 100%" type="submit">Send</button>
</form>