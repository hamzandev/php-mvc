<form class="my-5 m-auto">
    <div class="row">
        <h4 class="my-5 text-center fw-bold">REGISTER</h4>
    </div>
    <div class="form-group mb-3">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group mb-3">
        <label for="pwd">Password</label>
        <input type="password" class="form-control pwd-input" id="pwd">
    </div>
    <div class="form-group mb-3">
        <label for="confirm-pwd">Confirm Password</label>
        <input type="password" class="form-control pwd-input" id="confirm-pwd">
    </div>
    <div class="form-group form-check mb-3">
        <input type="checkbox" class="form-check-input" id="showPwd">
        <label class="form-check-label" for="showPwd" id="showPwd">Show Password</label>
    </div>
    <button type="submit" class="btn btn-primary mb-3" style="width: 100%">Register Now</button>
    <div class="text-center mt-2">
        <small class="mx-auto">Already have Account? <a href="<?= BASEURL ?>home" class="text-decoration-none">Login!</a></small>
    </div>
</form>