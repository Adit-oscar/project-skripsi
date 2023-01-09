<!-- Main Footer -->
<footer class="main-footer text-center">
  <strong>Copyright &copy; 2022 SMAN 1 HALONG KABUPATEN BALANGAN</strong>
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?= base_url('assets/template') ?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/template') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?= base_url('assets/template') ?>/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/template') ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/template') ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('assets/template') ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/template') ?>/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url('assets/template') ?>/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/template') ?>/plugins/jszip/jszip.min.js"></script>
<script src="<?= base_url('assets/template') ?>/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url('assets/template') ?>/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url('assets/template') ?>/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url('assets/template') ?>/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url('assets/template') ?>/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/template') ?>/dist/js/adminlte.min.js"></script>
<!-- date-range-picker -->
<script src="<?= base_url('assets/template') ?>/plugins/daterangepicker/daterangepicker.js"></script>
<!-- InputMask -->
<script src="<?= base_url('assets/template') ?>/plugins/moment/moment.min.js"></script>
<script src="<?= base_url('assets/template') ?>/plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- Page specific script -->
<!-- bs-custom-file-input -->
<script src="<?= base_url('assets/template') ?>/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script>
  $(function() {
    $('#example1').DataTable({
      "paging": false,
      "lengthChange": false,
      "searching": false,
      "ordering": false,
      "info": false,
      "autoWidth": false,
      "responsive": true,
      "language": {
        "lengthMenu": "Tampilkan _MENU_ Data",
        "zeroRecords": "Maaf data yang dicari tidak ada!!",
        "info": "Halaman _PAGE_ Dari _PAGES_ Halaman",
        "infoEmpty": "No records available",
        "infoFiltered": "(filtered from _MAX_ total records)"
      }
    });

    $('#example2').DataTable({

      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": false,
      "responsive": true,

      // Custom Jumlah Data Ditampilkan
      "lengthMenu": [
        [5, 10, 20, -1],
        ['5', '10', '20', 'Semua']
      ],

      // Custom Bahasa Datatable
      "language": {
        "url": "assets/custom_bahasa/Indonesian.json",
        "sEmptyTable": "Tidak ada data di database"
      }

    });

    $('#example3').DataTable({

      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": false,
      "responsive": false,

      // Custom Jumlah Data Ditampilkan
      "lengthMenu": [
        [5, 10, 20, -1],
        ['5', '10', '20', 'Semua']
      ],

      // Custom Bahasa Datatable
      "language": {
        "url": "assets/custom_bahasa/Indonesian.json",
        "sEmptyTable": "Tidak ada data di database"
      }

    });

    $('#tabel').DataTable({

      "paging": true,
      "lengthChange": true,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,

      // Custom Jumlah Data Ditampilkan
      "lengthMenu": [
        [5, 10, 20, -1],
        ['5', '10', '20', 'Semua']
      ],

      // Custom Bahasa Datatable
      "language": {
        "url": "assets/custom_bahasa/Indonesian.json",
        "sEmptyTable": "Tidak ada data di database"
      }

    });

    $(function() {
      bsCustomFileInput.init();
    });

  });
</script>
</body>

</html>