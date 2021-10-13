<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Police Information</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th></th>
              <th>Name</th>
              <th>Height</th>
              <th>Weight</th>
              <th>Eye Color</th>
              <th>NID</th>
              <th>Date Of Birth</th>
              <th></th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th></th>
              <th>Name</th>
              <th>Height</th>
              <th>Weight</th>
              <th>Eye Color</th>
              <th>NID</th>
              <th>Date Of Birth</th>
              <th></th>
            </tr>
          </tfoot>
          <tbody>
            <?php
            $result = mysqli_query($db, "SELECT * FROM `police` ORDER BY `police`.`id` DESC");
            while ($row = mysqli_fetch_array($result)) {
              echo "
                                  <tr>
                                  <td><img src='" . $row['image'] . "'class='" . "rounded-circle" . "'width='" . "50" . "'height='" . "50" . "'> </td> 
                                      <td>" . $row['fName'] . " " . $row['lName'] . "</td>
                                      <td>" . $row['height'] . "</td>
                                      <td>" . $row['weight'] . "</td>
                                      <td>" . $row['eyeColor'] . "</td>
                                      <td>" . $row['phoneNumber'] . "</td>
                                      <td>" . $row['dateOFbirth'] . "</td>
                                      <td>
                                      <a href='read-police.php? id=" . $row['id'] . "' title='View Record' data-toggle='tooltip'><span class='fa fa-eye'></span></a>
                                      <a href='update-police.php? id=" . $row['id'] . "' title='Update Record' data-toggle='tooltip'><span class='fa fa-pen'></span></a>
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