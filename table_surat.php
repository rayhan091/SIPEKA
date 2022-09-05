<h1>
    <center>Tabel Pengajuan Cuti</center>
</h1>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Tabel Data</title>

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="css/style6.css">


    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <script src="js/Haha.js"></script>
</head>

<body>

    <style>
        div.dataTables_wrapper {
            width: 800px;
            margin: 0 auto;
        }
    </style>

    <table id="example" class="display nowrap" style="width:100%">
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
            </tr>
        </thead>
        <tbody>
            <?php
                include 'koneksi.php';
                $ambildata = mysqli_query($koneksi, "select * from cuti");
                while ($tampil = mysqli_fetch_array($ambildata)){
                    echo "  
                     <tr>
                    <td>$tampil[nip]</td>
                    <td>$tampil[nama]</td>
                    <td>$tampil[tanggal]</td>
                    <td>$tampil[kodecuti]</td>
                    <td>$tampil[jabatan]</td>
                    <td>$tampil[lamacuti]</td>
                    <td>$tampil[daritgl]</td>
                    <td>$tampil[sampaitgl]</td>
                    <td> Edit</td> 
                ";
              }
            ?>
         <!-- <td> <button id="form-user" onclick="show()">Edit</button></td>  -->
         
                    </tr>
        </tbody>
    </table>

    <div id="edit-form-user" class="userform">
        <div class="user-content">
            <div class="edit-content">
                <div class="user-header">
                    <span class="close">&times;</span>
                    <h2>Form Input Data</h2>
                </div>

                <form action="table_surat.php" method="post">
                    <label>Username :</label><br>
                    <input type="text" name="username">
                    <br><br>
                    <label>Nama Lengkap:</label><br>
                    <input type="text" name="namalengkap">
                    <br><br>
                    <label>Password:</label><br>
                    <input type="text" name="password">
                    <br><br>
                    <label>Alamat:</label><br>
                    <textarea type="text" name="alamat" rows="4" cols="50"></textarea>
                    <br><br>
                    <label>Agama:</label>
                    <select name="agama">
              <option value="islam">Islam</option>
              <option value="kristen">Kristen</option>
              <option value="hindu">Hindu</option>
              <option value="budha">Budha</option>
              <option value="katholik">Katholik</option>
            </select>
                    <br><br>
                    <label>Jenis Kelamin:</label>
                    <input type="checkbox" name="jk1" value="lakilaki"> Laki-Laki
                    <input type="checkbox" name="jk2" value="perempuan"> Perempuan
                    <br><br>
                    <input type="submit" value="Kirim">
                </form>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                scrollX: true,
            });
        });

        $(document).ready(function() {
            $('#tabel-data').DataTable({
                scrollX: true,
            });
        });

        var userform = document.getElementById('edit-form-user');

        var btn = document.getElementById("form-user");

        var span = document.getElementsByClassName("close")[0];

        function show() {
            userform.style.display = "block";
        }
        btn.addEventListener("click", function() {
            userform.style.display = "block";
        });

        span.onclick = function() {
            userform.style.display = "none";
        }
    </script>


</body>

</html>