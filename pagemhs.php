<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pagination</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--
  //ofline file bootstrap dan javascript
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
-->

  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

  <?php
  include 'koneksi.php';
  ?>

<center>


  <div class="container" style="padding-top: 20px; padding-bottom: 20px; width:60%;" >
    <h3>TABEL PENGAJUAN CUTI</h3>
    <hr>

    <table class="table table-stripped table-hover datatab">
        <thead>
          <tr>
                <th>NIP</th>
                <th>NAMA</th>
                <th>TANGGAL</th>
                <th>KODE CUTI</th>
                <th>JABATAN</th>
                <th>LAMA CUTI</th>
                <th>DARI TANGGAL</th>
                <th>SAMPAI TANGGAL</th>
                <th>ACTION</th>
                <th>SURAT</th>                   
          </tr>
        </thead>  
        <tbody>
          <?php 
          $ambildata = mysqli_query($koneksi, "select * from cuti");
          while ($tampil = mysqli_fetch_array($ambildata)){
          
          ?>
            <tr>
              <td><?php echo $tampil['nip']; ?></td>
              <td><?php echo $tampil['nama']; ?></td>
              <td><?php echo $tampil['tanggal']; ?></td>
              <td><?php echo $tampil['kodecuti']; ?></td>
              <td><?php echo $tampil['jabatan']; ?></td>
              <td><?php echo $tampil['lamacuti']; ?></td>
              <td><?php echo $tampil['daritgl']; ?></td>
              <td><?php echo $tampil['sampaitgl']; ?></td>
              
              <td>
                <!-- Button untuk modal -->
                <a href="#" type="button" class="btn btn-success btn-md" data-toggle="modal" data-target="#myModal<?php echo $tampil['id']; ?>">Edit</a>
              </td>
              <td>
              <a href="surat2.php?id=<?php echo $tampil['id']; ?>" type="button" class="btn btn-success btn-md" data-toggle="" target="blank">SURAT</a>
              </td>
            </tr>
            <!-- Modal Edit Mahasiswa-->
            <div class="modal fade" id="myModal<?php echo $tampil['id']; ?>" role="dialog">
              <div class="modal-dialog">
              
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Update Data Mahasiswa</h4>
                  </div>
                  <div class="modal-body">
                    <form role="form" action="editmhs.php" method="post">

                        <?php
                        $id = $tampil['id']; 
                        $query_edit = mysqli_query($koneksi, "select * from cuti where id = '$id'");
                        //$result = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($query_edit)) {  
                        ?>

                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                        <div class="form-group">
                          <label>Lama Cuti</label>
                          <input type="text" name="lamacuti" class="form-control" value="<?php echo $row['lamacuti']; ?>">      
                        </div>

                        <div class="form-group">
                          <label>Mulai Cuti</label>
                          <input type="date" name="daritgl" class="form-control" value="<?php echo $row['daritgl']; ?>">      
                        </div>

                        <div class="form-group">
                          <label>Tanggal Terakhir Cuti</label>
                          <input type="date" name="sampaitgl" class="form-control" value="<?php echo $row['sampaitgl']; ?>">      
                        </div>
                        
                        <div class="modal-footer">  
                          <button type="submit" class="btn btn-success">Update</button>
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>

                        <?php 
                        }
                        //mysql_close($host);
                        ?>        
                      </form>
                  </div>
                </div>
                
              </div>
            </div>
          <?php               
          } 
          ?>
        </tbody>
      </table>          
  </div>
  
</center>

</body>
  <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
  <script>
  $(document).ready(function() {
    $('.datatab').DataTable();
  } );
  </script>
</html>