<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Criminal Information</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th></th>
              <th>Information</th>
              <th>Identity</th>
              <th>Date Of Birth</th>
              <th></th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th></th>
              <th>Information</th>
              <th>Identity</th>
              <th>Date Of Birth</th>
              <th></th>
            </tr>
          </tfoot>
          <tbody>
            <script>
            $(document).ready(function() {
              $('[data-toggle="tooltip"]').tooltip();
            });
            </script>
            <?php
            $result = mysqli_query($db, "SELECT * FROM `criminal` ORDER BY `criminal`.`id` DESC");
            while ($row = mysqli_fetch_array($result)) {
              echo "<tr>
                        <td><img src='" . $row['image'] . "'class='" . "rounded-circle" . "'width='" . "50" . "'height='" . "50" . "'> </td>
                        <td>" . $row['fName'] . " " . $row['lName'] . "<br> Father's Name: " . $row['fathersName'] . "<br> Mothers's Name: " . $row['mothersName'] . "<br> Mark Symbol: " . $row['symbol'] . "<br>
                        </td>
                        <td> NID: " . $row['phoneNumber'] . "<br> Contact No: " . $row['contactno'] . "
                        </td>
                        <td>" . $row['dateOFbirth'] . "
                        
                        </td>
                        

                        <td>
                        <a href='read-criminal.php? id=" . $row['id'] . "' title='View Record' data-toggle='tooltip'><span class='fa fa-eye'></span></a>"

            ?>
            <?php
              if ($_SESSION['userRoll'] != "court") {
              ?>
            <?php
              };
              ?>
            <?php echo "
                </td>
                </tr> ";
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- /.container-fluid -->