<?php
$koneksi = mysqli_connect("localhost", "root", "", "project_pbw");

function register($data)
{
    global $koneksi;

    $nama = $data['nama'];
    $nomorhp = $data['nomorhp'];
    $email = $data['email'];
    $tgl = $data['tgl'];
    $bln = $data['bln'];
    $ttl = $data['TTL'];
    $thn = $data['thn'];
    $alamat = $data['alamat'];
    $kelurahan = $data['Kelurahan'];
    $kecamatan = $data['Kecamatan'];
    $p = $tgl . "/" . $bln . "/" . $thn;
    $kota = $data['kota'];
    $provinsi = $data['provinsi'];
    $agama = $data['agama'];
    $jk = $data['jenis_kelamin'];
    $sekolah = $data['sekolah'];
    $nilai = $data['nilai'];
    $jurusan = $data['jurusan'];
    $tahun_ajaran = $data['tahun_ajaran'];
    $prodi1 = $data['prodi1'];
    $prodi2 = $data['prodi2'];





    mysqli_query($koneksi, "INSERT INTO users VALUES('', '$nama', '','$nomorhp', '$email', '$ttl', '$p', '$alamat', '$kelurahan', '$kecamatan', '$kota', '$provinsi', '$agama', '$jk', '$sekolah', '$nilai', '$jurusan', '$tahun_ajaran', '$prodi1', '$prodi2')");
    return mysqli_affected_rows($koneksi);
}


function login($data)
{
    global $koneksi;
    $username = $data['username'];
    $password = $data['password'];

    $result = mysqli_query($koneksi, "SELECT * FROM users WHERE nama = '$username'");

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if ($password == $row['nomor_hp']) {
            header("Location: index.html");
        } else {
            return $error = true;
        }
    }
    return $error = true;
}
