<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Crime Information</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Case No</th>
              <th>Image</th>
              <th>Criminal</th>
              <th>Type</th>
              <th>prison</th>
              <th>Crime location</th>
              <th>Court</th>
              <th>Duty Police</th>
              <th>Punishment</th>
              <th>Date</th>
              <th></th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Case No</th>
              <th>Image</th>
              <th>Criminal</th>
              <th>Type</th>
              <th>Prison</th>
              <th>Crime location</th>
              <th>Court</th>
              <th>Duty Police</th>
              <th>Punishment</th>
              <th>Date</th>
              <th></th>
            </tr>
          </tfoot>
          <tbody>
            <?php
                        $result = mysqli_query($db, "SELECT * FROM `crime` ORDER BY `crime`.`id` DESC");
                        while ($row = mysqli_fetch_array($result)) {
                            $data = $row['criminal_ID'];
                            $criminal = mysqli_fetch_array(mysqli_query($db, "SELECT * FROM `criminal` where id = $data"));
                            $data = $row['police_Id'];
                            $police = mysqli_fetch_array(mysqli_query($db, "SELECT * FROM `police` where id = $data"));
                            echo "<tr>
                        <td>" . $row['caseno'] . "</td>
                        <td><img src='" . $row['image'] . "'class='" . "rounded-circle" . "'width='" . "50" . "'height='" . "50" . "'> </td>
                        <td>" . $criminal['fName'] . " " . $criminal['lName'] . "</td>
                        <td>" . $row['crimeType'] . "</td>
                        <td>" . $row['prison'] . "</td>
                        <td>" . $row['place'] . "</td>
                        <td>" . $row['court'] . "</td>
                        <td>" . $police['fName'] . " " . $police['lName'] . "</td>
                        <td>" . $row['punishment'] . "</td> 
                        <td>" . $row['date'] . "</td>
                        <td>
                        <a href='read-crime.php? id=" . $row['id'] . "' title='View Record' data-toggle='tooltip'><span class='fa fa-eye'></span></a>
                        <a href='update-crime.php? id=" . $row['id'] . "' title='View Record' data-toggle='tooltip'><span class='fa fa-pen'></span></a>
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