        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Sistem Informasi Pondok Pesantren by. <a href="http://abdulrosyid.com">Abdul Rosyid</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?= base_url('assets/backend/'); ?>vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?= base_url('assets/backend/'); ?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?= base_url('assets/backend/'); ?>vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?= base_url('assets/backend/'); ?>vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?= base_url('assets/backend/'); ?>vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="<?= base_url('assets/backend/'); ?>vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?= base_url('assets/backend/'); ?>vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?= base_url('assets/backend/'); ?>vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="<?= base_url('assets/backend/'); ?>vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="<?= base_url('assets/backend/'); ?>vendors/Flot/jquery.flot.js"></script>
    <script src="<?= base_url('assets/backend/'); ?>vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?= base_url('assets/backend/'); ?>vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?= base_url('assets/backend/'); ?>vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?= base_url('assets/backend/'); ?>vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?= base_url('assets/backend/'); ?>vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?= base_url('assets/backend/'); ?>vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?= base_url('assets/backend/'); ?>vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?= base_url('assets/backend/'); ?>vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="<?= base_url('assets/backend/'); ?>vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="<?= base_url('assets/backend/'); ?>vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?= base_url('assets/backend/'); ?>vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?= base_url('assets/backend/'); ?>vendors/moment/min/moment.min.js"></script>
    <script src="<?= base_url('assets/backend/'); ?>vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?= base_url('assets/backend/'); ?>build/js/custom.min.js"></script>

    <script src="<?= base_url('assets/backend/build/js/script.js'); ?>"></script>
    
    <script src="<?= base_url('assets/backend/build/js/sweetalert/sweetalert2.all.min.js'); ?>"></script>
    <script src="<?= base_url('assets/backend/build/js/sweetalert/script.js'); ?>"></script>
    <script src="<?= base_url('assets/backend/build/js/ckeditor/ckeditor.js'); ?>"></script>

    <script>
      $('.form-check-access').on('click', function () {
        const menuId = $(this).data('menu');
        const roleId = $(this).data('role');

        $.ajax({
          url: '<?= base_url('dashboard/changeaccess'); ?>',
          type: 'post',
          data: {
            menuId: menuId,
            roleId: roleId
          },
          success: function() {
            document.location.href = "<?= base_url('dashboard/roleaccess/'); ?>" + roleId;
          }
        });
      });


      


      const flashDataRole = $('.flash-data-role').data('flashdatarole');

      if (flashDataRole) {
          Swal({
              title: 'Data Role',
              text: 'Berhasil ' + flashDataRole,
              type: 'success'
          });
      }
 
    </script>

  </body>
</html>
