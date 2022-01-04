<?php 
 
//membangun koneksi 
$username="ABDUL_100";
$password="100";
$database="LOCALHOST/XE";

$koneksi=oci_connect($username,$password,$database);

$hari_ini = date("dmY");

if (!$koneksi) { 
$erroci_error ();

echo "Gagal tersambung ke ORACLE";

} else{
//echo "koneksi berhasil";

}

?>