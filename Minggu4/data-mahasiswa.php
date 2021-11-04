<button id="addButton" class="btn btn-primary">Tambah Data</button>
<br>
<br>
<table border="1.5">
    <thead>
        <tr>
            <th>Id.</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Jenis_kelamin</th>
            <th>Prodi</th>
            <th>Agkatan</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
   include "koneksi.php";
   $no=1;
   $query=mysqli_query($koneksi, "SELECT * FROM Mahasiswa ORDER BY IdMhsw DESC") or die(mysqli_error($koneksi));
   while ($result=mysqli_fetch_array($query)) {
    ?>
            <tr>
                <td>
                    <?php echo $no++; ?>
                </td>
                <td>
                    <?php echo $result['Nim']; ?>
                </td>
                <td>
                    <?php echo $result['Nama']; ?>
                </td>
                <td>
                    <?php echo $result['Jenis_kelamin']; ?>
                </td>
                <td>
                    <?php echo $result['Prodi']; ?>
                </td>
                <td>
                    <?php echo $result['Angkatan']; ?>
                </td>
                <td>
                    <?php echo $result['Alamat']; ?>
                </td>
                <td>
                    <button id="EditButton" value="<?php echo $result['Id']; ?>">Edit</button>
                    <button id="DeleteButton" value="<?php echo $result['Id']; ?>">Delete</button>
                </td>
            </tr>
            <?php
   }
  ?>
    </tbody>
</table>