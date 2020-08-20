</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Agência Pegasus</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>


<!-- Bootstrap core JavaScript-->
<script src="<?php echo BASE_URL; ?>assets/js/jquery/jquery.min.js"></script>
<script src="<?php echo BASE_URL; ?>assets/js/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo BASE_URL; ?>assets/js/jquery-easing/jquery.easing.min.js"></script>

<!--Jquery Mask -->
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-mask/jquery.mask.js"></script>

<!-- sweet alert js -->
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/sweetalert/js/sweetalert.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo BASE_URL; ?>assets/js/sb-admin-2.min.js"></script>
<script src="<?php echo BASE_URL; ?>assets/js/app/app.js"></script>
<script src="<?php echo BASE_URL; ?>assets/js/app/app.masks.js"></script>

<?php
if (isset($_SESSION['alerta_sucesso']) && !empty($_SESSION['alerta_sucesso'])){ ?>
<script>
    swal({
        title: "Sucesso",
        text: "<?= $_SESSION['alerta_sucesso']; ?>",
        type: "success"
    });
</script>
<?php $_SESSION['alerta_sucesso'] = ""; } ?>

<?php
if (isset($_SESSION['alerta_error']) && !empty($_SESSION['alerta_error'])){ ?>
    <script>
        swal({
            title: "Opss",
            text: "<?= $_SESSION['alerta_error']; ?>",
            type: "error"
        });
    </script>
    <?php $_SESSION['alerta_error'] = ""; } ?>


</body>
</html>