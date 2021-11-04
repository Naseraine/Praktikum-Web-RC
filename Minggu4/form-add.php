<form method="POST" id="formAdd">
    <table>
        <tr>
            <td>Nim</td>
            <td>
                <input type="text" name="Nim" id="Nim" required="" />
            </td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>
                <input type="text" name="Nama" id="Nama" required="" />
            </td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>
                <label>
                    <input type="radio" name="Jenis_kelamin" id="Jenis_kelamin" value="Laki-laki" required="" />Laki-laki</label>
                <label>
                    <input type="radio" name="Jenis_kelamin" id="Jenis_kelamin" value="Perempuan" required="" />Perempuan</label>
            </td>
        </tr>
        <tr>
            <td>Prodi</td>
            <td>
                <select name="Prodi" id="Prodi" required="">
                    <option disabled="" selected="">-Pilih-</option>
                    <option value="Teknik Geofisika">Teknik Geofisika</option>
                    <option value="Teknik Sipil">Teknik Sipil</option>
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Teknik Pertambangan">Teknik Pertambangan</option>
                    <option value="Teknik Mesin">Teknik Mesin</option>
                    <option value="Teknik Geologi">Teknik Geologi</option>
                    <option value="Prodi Lain (ITERA)">Prodi Lain (ITERA)</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Angkatan</td>
            <td>
                <input type="text" name="Angkatan" id="Angkatan" required="" />
            </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>
                <textarea name="Alamat" id="Alamat" required=""></textarea>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="simpan" id="simpan" value="Simpan" />
                <button id="cancelButton" type="button">Batal</button>
            </td>
        </tr>
    </table>
</form>