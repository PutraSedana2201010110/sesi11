<?php
    $dta[0] ["NAMA"] ="I Made Putra Sedana";
    $dta[0] ["NIM"]= "2201010110";
    $dta[0] ["JENISKELAMIN"] ="L";
    $dta[0] ["ALAMAT"]= "Kerambitan, Tabanan, Bali, Indonesia";
    $dta[0] ["HOBI"]= "BALAP LIAR";
    $dta[0] ["TGLLAHIR"]= "2003-10-12";
    $dta[0] ["UNIV"]="Universitas Gadjah Mada";
    $dta[0] ["JURUSAN"]="Teknik Nuklir";

    $dta[1] ["NAMA"] ="I Made Dwipayana Hendrawan";
    $dta[1] ["NIM"]= "2201010152";
    $dta[1] ["JENISKELAMIN"] ="L";
    $dta[1] ["ALAMAT"]= "Gumi kelod";
    $dta[1] ["HOBI"]= "Makan Geprek Mahira";
    $dta[1] ["TGLLAHIR"]= "2003-12-21";
    $dta[1] ["UNIV"]="Universitas Gadjah Mada";
    $dta[1] ["JURUSAN"]="Teknik Nuklir";

    $dta[2] ["NAMA"] ="I Made Ananta Wijaya";
    $dta[2] ["NIM"]= "2201010432";
    $dta[2] ["JENISKELAMIN"] ="L";
    $dta[2] ["ALAMAT"]= "Gumi kangin";
    $dta[2] ["HOBI"]= "Cuma Deim";
    $dta[2] ["TGLLAHIR"]= "2004-02-05";
    $dta[2] ["UNIV"]="Universitas Gadjah Mada";
    $dta[2] ["JURUSAN"]="Teknik Nuklir";
    
    $dta[3] ["NAMA"] ="I Made Agus Arya Dwi Prayoga";
    $dta[3] ["NIM"]= "2201010467";
    $dta[3] ["JENISKELAMIN"] ="L";
    $dta[3] ["ALAMAT"]= "Gumi kangin";
    $dta[3] ["HOBI"]= "Wbs";
    $dta[3] ["TGLLAHIR"]= "2003-09-04";
    $dta[3] ["UNIV"]="Universitas Gadjah Mada";
    $dta[3] ["JURUSAN"]="Teknik Nuklir";

    $dta[4] ["NAMA"] ="I Made Kevin Pratama";
    $dta[4] ["NIM"]= "2201010341";
    $dta[4] ["JENISKELAMIN"] ="L";
    $dta[4] ["ALAMAT"]= "Gumi kelod kauh";
    $dta[4] ["HOBI"]= "Makan Geprek Mahira";
    $dta[4] ["TGLLAHIR"]= "2003-11-11";
    $dta[4] ["UNIV"]="Universitas Gadjah Mada";
    $dta[4] ["JURUSAN"]="Teknik Nuklir";


    header("Content-type: application/json; charset: utf-8");
    echo json_encode($dta);
?>
