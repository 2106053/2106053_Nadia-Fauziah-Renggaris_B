<?php

$koneksi = mysqli_connect('localhost', 'root', '', '2106053_nadia');

if ($koneksi) {
    echo "<script>alert('database konek')</script>";
}
