<link rel="stylesheet" href="style.css">

<div class="post-content">
    <h2 style="text-align: center;">Data User</h2>
    <table class="data_user">

     <tr>
      <th>NO</th>
      <th>ID</th>
      <th>KODE CUTI</th>
      <th>NIP</th>
      <th>NAMA</th>
      <th>JABATAN</th>
      <th>LAMA CUTI</th>
      <th>DARI TANGGAL</th>
      <th>SURAT</th>
      <th>EDIT</th>
     </tr>

     <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>
        <button id="form-user" onclick="show()">Edit</button>
      </td>
     </tr>

     <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td> </td>
      <td></td>
      <td></td>
      <td>
        <button id="form-user" onclick="show()">Edit</button>
      </td>
     </tr>

     <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>
        <button id="form-user" onclick="show()">Edit</button>
      </td>
     </tr>

     <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>
        <button id="form-user" onclick="show()">Edit</button>
      </td>
     </tr>

     <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>
        <button id="form-user" onclick="show()">Edit</button>
      </td>
     </tr>
    </table>
   </div>



   <div id="edit-form-user" class="userform">
    <div class="user-content">
      <div class="edit-content">
       <div class="user-header">
     <span class="close">&times;</span>
     <h2>Form Input Data</h2>
       </div>
    
    <form action=" ">
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
    var userform = document.getElementById('edit-form-user');
   
    var btn = document.getElementById("form-user");
   
    var span = document.getElementsByClassName("close")[0];
   
    function show()
    {
        userform.style.display = "block";
    }
    btn.addEventListener("click", function(){
        userform.style.display = "block";
    });
   
    span.onclick = function() {
        userform.style.display = "none";
    }
   
   </script>