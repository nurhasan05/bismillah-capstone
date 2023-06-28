<?php
require "inc/koneksi.php";
if (isset($_POST['daftar'])) {
    if (register($_POST) > 0) {
        echo ("<script>
        alert(\"Data Tersimpan Username = nama Password = no_hp\");
    </script>");
    header("Location: login.php");
    } else {
        echo ("<script>
        alert(\"gagal\");
    </script>");
    }
}
?>


<!DOCTYPE html>
<html>

<head>
    <title>PMB FT UMJ</title>
    <link rel="stylesheet" type="text/css" href="link2_style.css">
</head>

<body>
    <center>
        <h2>Pendaftaran Mahasiswa Baru Fakultas Teknik Universitas Muhammadiyah Jakarta</h2>
    </center>
    <div class="login">
        <center>
            <h1>Informasi Data Diri</h2>
        </center>
        <form action="#" method="POST" onSubmit="validasi()">
            <div>
                <label>Nama Lengkap:</label>
                <input type="text" name="nama" id="nama" />
            </div>
            <div>
                <label>Nomor Pendaftaran:</label>
                <input type="text" name="nomordaftar" id="nomordaftar" />
            </div>
            <div>
                <label>Nomor HP:</label>
                <input type="text" name="nomorhp" id="nomorhp" />
            </div>
            <div>
                <label>Email:</label>
                <input type="email" name="email" id="email" />
            </div>
            <div>
                <label>Tempat Lahir:</label>

                <tr>
                    <td><b></b></td>
                    <td><input type="text" name="TTL" id="TTL" size="30" maxlength="50" />
                        <select name="tgl">
                            <option>Tgl</option>
                            <?php
                            for ($i = 1; $i <= 31; $i++) :
                            ?>
                                <option value="<?= $i ?>"><?= $i ?></option>
                            <?php endfor; ?>

                        </select>
                        <select name="bln">
                            <option value="Januari">Januari</option>
                            <option value="Februari">Februari</option>
                            <option value="Maret">Maret</option>
                            <option value="April">April</option>
                            <option value="Mei">Mei</option>
                            <option value="Juni">Juni</option>
                            <option value="Juli">Juli</option>
                            <option value="Agustus">Agustus</option>
                            <option value="September">September</option>
                            <option value="Oktober">Oktober</option>
                            <option value="November">November</option>
                            <option value="Desember">Desember</option>
                        </select>
                        <Select name="thn">
                            <?php for ($i = 2005; $i <= 2022; $i++) : ?>
                                <option value="<?= $i ?>"><?= $i ?></option>
                            <?php endfor; ?>
                        </select>
                    </td>
                    </td>
                </tr>
            </div>
            <div>
                <label>Alamat:</label>
                <textarea cols="40" rows="5" name="alamat" id="alamat"></textarea>
            </div>
            <div>
                <label>Kelurahan:</label>
                <input type="text" name="Kelurahan" id="Kelurahan" />
            </div>
            <div>
                <label>Kecamatan:</label>
                <input type="text" name="Kecamatan" id="Kecamatan" />
            </div>
            <div>
                <label>Kota/Kabupaten:</label>
                <input type="text" name="kota" id="kota" />
            </div>
            <div>
                <label>Provinsi:</label>
                <tr>
                    <td><b><b></td>
                    <td>
                        <select name="provinsi" id="provinsi">
                            <option>Pilih Provinsi Anda</option>
                            <option value="Bali">Bali</option>
                            <option value="Bangka Belitung">Bangka Belitung</option>
                            <option value="Banten">Banten</option>
                            <option value="DKI Jakarta">DKI Jakarta</option>
                            <option value="Bengkulu">Bengkulu</option>
                            <option value="Gorontalo">Gorontalo</option>
                            <option value="Irian Jaya Barat">Irian Jaya Barat</option>
                            <option value="Jambi">Jambi</option>
                            <option value="Jawa Barat">Jawa Barat</option>
                            <option value="Jawa Tengah">Jawa Tengah</option>
                            <option value="Jawa Timur">Jawa Timur</option>
                            <option value="Kalimantan Barat">Kalimantan Barat</option>
                            <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                            <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                            <option value="Kalimantan Timur">Kalimantan Timur</option>
                            <option value="Kepulauan Riau">Kepulauan Riau</option>
                            <option value="Lampung">Lampung</option>
                            <option value="Lokasi Lain-lain">Lokasi Lain-lain</option>
                            <option value="Maluku">Maluku</option>
                            <option value="Maluku Utara">Maluku Utara</option>
                            <option value="Nangroe Aceh Darussalam">Nangroe Aceh Darussalam</option>
                            <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                            <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                            <option value="Papua">Papua</option>
                            <option value="Riau">Riau</option>
                            <option value="Sulawesi Barat">Sulawesi Barat</option>
                            <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                            <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                            <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                            <option value="Sulawesi Utara">Sulawesi Utara</option>
                            <option value="Sumatera Barat">Sumatera Barat</option>
                            <option value="Sumatera Selatan">Sumatera Selatan</option>
                            <option value="Sumatera Utara">Sumatera Utara</option>
                            <option value="Yogyakarta">Yogyakarta</option>
                        </select>
                    </td>
                </tr>
            </div>
            <div>
                <label>Agama:</label>
                <tr>

                    <select name="agama" id="agama">
                        <option value="islam">Islam</option>
                        <option value="kristen">Kristen</option>
                        <option value="hindu">Hindu</option>
                        <option value="budha">Budha</option>
                    </select>
                    </td>
                </tr>
            </div>
            <div>
                <label>Jenis Kelamin:</label>
                <tr>
                    <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="pria" /><label for="jenis_kelamin">Pria</label>
                    <input type="radio" name="jenis_kelamin" value="wanita" /><label for="jenis_kelamin">Wanita</label></td>
                </tr>
            </div>

            <center>
                <h1>Informasi Sekolah</h2>
            </center>
            <div>
                <label>Asal Sekolah:</label>
                <input type="text" name="sekolah" id="sekolah" />
            </div>
            <div>
                <label>Nilai Ujian Nasional:</label>
                <input type="text" name="nilai" id="nilai" />
            </div>
            <div>
                <label>Jurusan Peminatan Sekolah</label>
                <td><select name="jurusan" id="jurusan">
                        <option>Pilih Jurusan</option>
                        <option value="IPA">IPA</option>
                        <option value="IPS">IPS</option>
                    </select></td>
            </div>
            <div>
                <label>Tahun Ajaran:</label>
                <td><select name="tahun_ajaran" id="tahun_ajaran">
                        <option>Pilih Tahun Ajaran</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                    </select></td>
            </div>
            <center>
                <h1>Pilihan Program Studi</h2>
            </center>
            <div>
                <label>Program Studi 1:</label>

                <td><select name="prodi1" id="prodi1">
                        <option>Pilih Program Studi</option>
                        <option value="SI">Teknik Sipil</option>
                        <option value="TI">Teknik Informatika</option>
                        <option value="mj">Teknik Elektro</option>
                        <option value="ilkom">Teknik Kimia</option>
                        <option value="dokter">Teknik Mesin</option>
                        <option value="kesmas">Teknik Industri</option>
                        <option value="hukum">Arsitektur</option>
                        <option value="Farmasi">D3 Otomotif Alat Berat</option>
                    </select></td>
            </div>
            <div>
                <label>Program Studi 2:</label>

                <td><select name="prodi2" id="prodi2">
                        <option>Pilih Program Studi</option>
                        <option value="SI">Teknik Sipil</option>
                        <option value="TI">Teknik Informatika</option>
                        <option value="mj">Teknik Elektro</option>
                        <option value="ilkom">Teknik Kimia</option>
                        <option value="dokter">Teknik Mesin</option>
                        <option value="kesmas">Teknik Industri</option>
                        <option value="hukum">Arsitektur</option>
                        <option value="Farmasi">D3 Otomotif Alat Berat</option>
                    </select></td>
            </div>
            <div>
                <button type="submit" class="tombol" name="daftar">Submit</button>
            </div>
        </form>


    </div>
</body>
<script type="text/javascript">
    function validasi() {
        var nama = document.getElementById("nama").value;
        var email = document.getElementById("email").value;
        var alamat = document.getElementById("alamat").value;
        var nomordaftar = document.getElementById("nomordaftar").value;
        var TTL = document.getElementById("TTL").value;
        if (nama != "" && email != "" && alamat != "" && nomordaftar != "" && TTL != "") {
            return true;
        } else {
            alert('Anda harus mengisi data dengan lengkap !');
        }
    }
</script>

</html>