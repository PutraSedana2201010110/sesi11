<?php
    $dta ["NAMA"] ="I Made Putra Sedana";
    $dta ["NIM"]= "2201010110";
    $dta ["JENISKELAMIN"] ="L";
    $dta ["ALAMAT"]= "Kerambitan, Tabanan, Bali, Indonesia";
    $dta ["HOBI"]= "BALAP LIAR";
    $dta ["TGLLAHIR"]= "2003-10-12";
    $dta ["UNIV"]="Universitas Gadjah Mada";
    $dta ["JURUSAN"]="Teknik Nuklir";
    header("Content-type: application/json; charset: utf-8");
    echo json_encode($dta);
?>
