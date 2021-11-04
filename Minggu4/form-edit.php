<?php
 include "koneksi.php";
 $IdMhsw=$_GET['IdMhsw'];
 $query=mysqli_query($koneksi, "SELECT * FROM Mahasiswa WHERE IdMhsw='$IdMhsw'") or die(mysqli_error($koneksi));
 $result=mysqli_fetch_array($query);
?>
    <form method="POST" id="formEdit">
        <table>
            <tr>
                <td>Nim</td>
                <td>
                    <input type="hidden" name="Id" id="Id" required="" value="<?php echo $result['Id']; ?>" />
                    <input type="text" name="Nim" id="Nim" required="" value="<?php echo $result['Nim']; ?>" />
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>
                    <input type="hidden" name="Id" id="Id" required="" value="<?php echo $result['Id']; ?>" />
                    <input type="text" name="Nama" id="Nama" required="" value="<?php echo $result['Nama']; ?>" />
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <label>
                        <input type="radio" name="Jenis_kelamin" id="Jenis_kelamin" value="Laki-laki" required="" <?php if($result[ 'Jenis_kelamin']=="Laki-laki" ) echo "checked"; ?> />Laki-laki</label>
                    <label>
                        <input type="radio" name="Jenis_kelamin" id="Jenis_kelamin" value="Perempuan" required="" <?php if($result[ 'Jenis_kelamin']=="Perempuan" ) echo "checked"; ?> />Perempuan</label>
                </td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>
                    <select name="Prodi" id="Prodi" required="">
                        <option disabled="" selected="">-Pilih-</option>
                        <option value="Teknik Geofisika" <?php if($result[ 'Prodi']=="Teknik Geofisika" ) echo "selected"; ?>>Teknik Geofisika</option>
                        <option value="Teknik Sipil" <?php if($result[ 'Prodi']=="Teknik Sipil" ) echo "selected"; ?>>Teknik Sipil</option>
                        <option value="Teknik Informatika" <?php if($result[ 'Prodi']=="Teknik Informatika" ) echo "selected"; ?>>Teknik Informatika</option>
                        <option value="Teknik Pertambangan" <?php if($result[ 'Prodi']=="Teknik Pertambangan" ) echo "selected"; ?>>Teknik Pertambangan</option>
                        <option value="Teknik Mesin" <?php if($result[ 'Prodi']=="Teknik Mesin" ) echo "selected"; ?>>Teknik Mesin</option>
                        <option value="Teknik Geologi" <?php if($result[ 'Prodi']=="Teknik Geologi" ) echo "selected"; ?>>Teknik Geologi</option>
                        <option value="Prodi Lain (ITERA)" <?php if($result[ 'Prodi']=="Prodi Lain (ITERA)" ) echo "selected"; ?>>Prodi Lain (ITERA)</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Angkatan</td>
                <td>
                    <input type="text" name="Angkatan" id="Angkatan" required="" value="<?php echo $result['Angkatan']; ?>" />
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>
                    <textarea name="Alamat" id="Alamat" required="">
                        <?php echo $result['Alamat']; ?>
                    </textarea>
                </td>
            </tr>
                <td></td>
                <td>
                    <input type="submit" name="simpan" id="simpan" value="Simpan" />
                    <button type="button" id="cancelButton">Batal</button>
                </td>
            </tr>
        </table>
    </form>