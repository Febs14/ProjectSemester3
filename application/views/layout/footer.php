<footer class="footer">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">

    </div>
</footer>
<!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="<?= base_url('assets/') ?>vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="<?= base_url('assets/') ?>vendors/typeahead.js/typeahead.bundle.min.js"></script>
<script src="<?= base_url('assets/') ?>vendors/select2/select2.min.js"></script>
<script src="<?= base_url('assets/') ?>vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="<?= base_url('assets/') ?>js/off-canvas.js"></script>
<script src="<?= base_url('assets/') ?>js/hoverable-collapse.js"></script>
<script src="<?= base_url('assets/') ?>js/template.js"></script>
<script src="<?= base_url('assets/') ?>js/settings.js"></script>
<script src="<?= base_url('assets/') ?>js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="<?= base_url('assets/') ?>js/file-upload.js"></script>
<script src="<?= base_url('assets/') ?>js/typeahead.js"></script>
<script src="<?= base_url('assets/') ?>js/select2.js"></script>
<script>
    $('.custom-file-input').on('change', function () {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    })
</script>
<!-- End custom js for this page-->
</body>

</html>