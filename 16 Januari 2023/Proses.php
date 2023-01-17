<?php

$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

// if ($nama == '' && $email == '' && $pesan == ''){
//     echo
//         "nama : nama belum terisi <br>
//         email : email belum terisi <br>
//         pesan : pesan belum terisi";
    
// }

// echo
// "nama :  {$nama}  <br 
// email :  {$email}  <br> 
// pesan : . {$pesan} . <br>";


// if ($nama == '') {
//     echo "nama : isi namanya broo <br>";
// }
// if ($email == '') {
//     echo "email : isi email broo <br>";
// }
// if ($pesan == '') {
//     echo "isi pesan broo <br>";
// }

if ($nama){
    echo
        "nama : {$nama} <br>";
} if ($nama == '') {
    echo "nama belum diisi <br>";}

if ($email){
    echo
        "email :  {$email}  <br>";
} if ($email == '') {
    echo "email belum diisi <br>";}

if ($pesan){
    echo 
    "pesan :  {$pesan}"; 
} if ($pesan == '') {
    echo "pesan belum diisi";}

// if ($nama == '' && $email == '' || $pesan == ''){
//     echo
//     "nama : nama belum diisi <br>
//     email : email belum diisi <br>";
// }

// if ($email == ""){
//          echo "email : email belum diisi <br>";
// }

// if ($pesan == ""){
//          echo "pesan : pesan belum diisi <br>";
// }

// if ($nama && $email && $pesan){
//     echo
//     "nama : {$nama} <br>
//     email : {$email} <br>
//     pesan : {$pesan}" ;
    
// }

// else {
//     echo
//     "nama : " . $_POST['nama'] . "<br>" .
//     "email : " . $_POST['email'] . "<br>" .
//     "pesan : " . $_POST['pesan'];
    
// }

?>