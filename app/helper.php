<?php
function only_day($tgl)
{
    $hari = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jum`at", "Sabtu");
    $thn = substr($tgl, 0, 4);
    $bln = substr($tgl, 5, 2);
    $tg = substr($tgl, 8, 2);

    $hr = date("w", mktime(0, 0, 0, $bln, $tg, $thn));
    $sekarang = $hari[$hr];
    return $sekarang;
}
function only_date($tgl)
{
    $tg = substr($tgl, 8, 2);
    $sekarang = $tg;
    return $sekarang;
}
function only_month($tgl)
{
    $bln = substr($tgl, 5, 2);
    $bulan = array(
        "Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul",
        "Agu", "Sep", "Okt", "Nov", "Des"
    );
    $sekarang = $bulan[(int)($bln) - 1];
    return $sekarang;
}
?>
