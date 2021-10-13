<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/jquery/jquery-ui.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>
<!-- Page level plugins -->
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Page level custom scripts -->
<script src="js/demo/datatables-demo.js"></script>
<script src="js/dashboard.js"></script>
<script src="js/widget.js"></script>
<script>
$(function() {
  $("#datepicker").datepicker({
    dateFormat: 'yy-mm-dd'
  });
});
</script>
<script>
$(function() {
  $("#example1").DataTable();
});
</script>
</body>

</html>