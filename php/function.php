<?php
function substrwords($text, $maxchar, $end='...') {
    if (strlen($text) > $maxchar || $text == '') {
        $words = preg_split('/\s/', $text);      
        $output = '';
        $i      = 0;
        while (1) {
            $length = strlen($output)+strlen($words[$i]);
            if ($length > $maxchar) {
                break;
            } 
            else {
                $output .= " " . $words[$i];
                ++$i;
            }
        }
        $output .= $end;
    } 
    else {
        $output = $text;
    }
    return $output;
}

// fungsi koneksi
function koneksi() {
    $namaServer = "localhost";
    $username = "root";
    $password = "";
    $namadb = "portfolio";

    // create connection
    $conn = mysqli_connect($namaServer,$username,$password,$namadb);

    // cek kondisi
    // if(!$conn) {
    //     // die ("Gagal melakukan ke database. ");
    //     die ("Gagal melakukan ke database. ". mysqli_connect_error()); // apabila production maka jgn menggunakan connect_errro
    // }

    return $conn;
}