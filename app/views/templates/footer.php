</div>
<!-- footer -->
<p class="font-monospace text-center mt-3">Copyright@hamzanwahyu.id 2022</p>
<!-- Vue Js -->
<script src="<?= BASEURL ?>js/vue.min.js"></script>
<!-- Bootstrap Js -->
<script src="<?= BASEURL ?>js/bootstrap.js"></script>
<!-- Custom Js -->
<script>
    const showPwd = document.querySelectorAll('#showPwd');
    const inputPwd = document.querySelectorAll('.pwd-input');
    let isClick = true;

    showPwd.forEach((e) => {
        e.addEventListener('input', () => {
            if (isClick) {
                isClick = false;
                inputPwd.forEach(element => {
                    element.type = 'text';
                });
            } else {
                isClick = true;
                inputPwd.forEach(element => {
                    element.type = 'password';
                });
            }
        })
    });
</script>
</body>

</html>