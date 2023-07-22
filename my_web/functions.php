<?php
date_default_timezone_set("Asia/Jakarta");

function koneksi()
{
  $server = "localhost";
  $username = "root";
  $password = "";
  $database = "web_semantik_a1";
  return mysqli_connect($server, $username, $password, $database);
}

function q($data)
{
  $koneksi = koneksi();
  return mysqli_query($koneksi, $data);
}

function qs($data)
{
  return mysqli_fetch_assoc(q($data));
}

function prodi()
{
  return q("SELECT * FROM prodi");
}

function prodi_satu($id_prodi, $isi_tabel)
{
  $x = qs("SELECT * FROM prodi WHERE id = '$id_prodi'");
  return $x[$isi_tabel];
}


function mahasiswa()
{
  return q("SELECT * FROM mahasiswa");
}

function user_jumlah($username)
{
  return mysqli_num_rows(
    q("SELECT * FROM user WHERE username = '$username'")
  );
}

function user_username_satu($username, $isi_tabel)
{
  $x = qs("SELECT * FROM user WHERE username = '$username'");
  return $x[$isi_tabel];
}

?>

<script>
  function logout(url){
    if (confirm("Apakah anda ingin logout")){
      location = url
    }
  }
</script>