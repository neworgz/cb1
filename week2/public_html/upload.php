<?php
session_start();
 
    include"koneksi.php";
 
   
    $perintah     = $_POST['perintah'];
    $pertanyaan   = $_POST['pertanyaan'];
    $jawab_a      = $_POST['jawab_a'];
    $jawab_b      = $_POST['jawab_b'];
    $jawab_c      = $_POST['jawab_c'];
    $jawab_d      = $_POST['jawab_d'];
    $kunci        = $_POST['kunci'];
  

  
    $filename = basename($_FILES['userfile']['name']);
    $uploadfile = "uploadgambar/" . $filename;
 
        if ($_SESSION['jenis'] == "ipa") {
            if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
                $query = "INSERT INTO sipa VALUES('', '$perintah', '$filename', '$pertanyaan', '$jawab_a', '$jawab_b', '$jawab_c', '$jawab_d', '$kunci')";
                $query = mysql_query($query);
                if (isset($_SESSION["guru"])) {
                    echo("<SCRIPT LANGUAGE='JavaScript'>
                            window.alert('Anda berhasil menambahkan soal')
                            window.location.href='guru_mapelipa.php';
                            </SCRIPT>");
                    if(!$query){
                        die( mysql_error() );
                    }
                }else{
                    echo("<SCRIPT LANGUAGE='JavaScript'>
                       window.alert('Anda berhasil menambahkan soal')
                        window.location.href='admin_mapelipa.php';
                        </SCRIPT>");
                    if(!$query){
                        die( mysql_error() );
                    }
                }
                
                
                exit();
            } else {
                $query = "INSERT INTO sipa VALUES('', '$perintah', '$filename', '$pertanyaan', '$jawab_a', '$jawab_b', '$jawab_c', '$jawab_d', '$kunci')";
                $query = mysql_query($query);
                if (isset($_SESSION["guru"])) {
                    echo("<SCRIPT LANGUAGE='JavaScript'>
                            window.alert('Anda berhasil menambahkan soal')
                            window.location.href='guru_mapelipa.php';
                            </SCRIPT>");
                    if(!$query){
                        die( mysql_error() );
                    }
                }elseif(isset($_SESSION["admin"])){
                    echo("<SCRIPT LANGUAGE='JavaScript'>
                       window.alert('Anda berhasil menambahkan soal')
                        window.location.href='admin_mapelipa.php';
                        </SCRIPT>");
                    if(!$query){
                        die( mysql_error() );
                    }
                }
                else{
                   echo "Gagal upload!\n";  
                }
               
            }
        }elseif ($_SESSION['jenis'] == "bindo") { //mapel bindo
            if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
                $query = "INSERT INTO sbindo (perintah,bacaan,pertanyaan,jawab_a,jawab_b,jawab_c,jawab_d,kunci) VALUES('$perintah', '$filename', '$pertanyaan', '$jawab_a', '$jawab_b', '$jawab_c', '$jawab_d', '$kunci')";
                $query = mysql_query($query);
               if (isset($_SESSION["guru"])) {
                    echo("<SCRIPT LANGUAGE='JavaScript'>
                            window.alert('Anda berhasil menambahkan soal')
                            window.location.href='guru_mapelbindo.php';
                            </SCRIPT>");
                    if(!$query){
                        die( mysql_error() );
                    }
                }else{
                    echo("<SCRIPT LANGUAGE='JavaScript'>
                        window.alert('Anda berhasil menambahkan soal')
                        window.location.href='admin_mapelbindo.php';
                        </SCRIPT>");
                    if(!$query){
                        die( mysql_error() );
                    }
                }
                
                exit();
            } else {
                $query = "INSERT INTO sbindo VALUES('', '$perintah', '$filename', '$pertanyaan', '$jawab_a', '$jawab_b', '$jawab_c', '$jawab_d', '$kunci')";
                $query = mysql_query($query);
               if (isset($_SESSION["guru"])) {
                    echo("<SCRIPT LANGUAGE='JavaScript'>
                            window.alert('Anda berhasil menambahkan soal')
                            window.location.href='guru_mapelbindo.php';
                            </SCRIPT>");
                    if(!$query){
                        die( mysql_error() );
                    }
                }elseif(isset($_SESSION["admin"])){
                    echo("<SCRIPT LANGUAGE='JavaScript'>
                        window.alert('Anda berhasil menambahkan soal')
                        window.location.href='admin_mapelbindo.php';
                        </SCRIPT>");
                    if(!$query){
                        die( mysql_error() );
                    }
                }
                else{
                   echo "Gagal upload!\n"; 
                }
                
            }

        }else{ // mapel mtk
            if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
                $query = "INSERT INTO smtk VALUES('', '$perintah', '$filename', '$pertanyaan', '$jawab_a', '$jawab_b', '$jawab_c', '$jawab_d', '$kunci')";
                $query = mysql_query($query);
                if (isset($_SESSION["guru"])) {
                    echo("<SCRIPT LANGUAGE='JavaScript'>
                            window.alert('Anda berhasil menambahkan soal')
                            window.location.href='guru_mapelmtk.php';
                            </SCRIPT>");
                    if(!$query){
                        die( mysql_error() );
                    }
                }else{
                    echo("<SCRIPT LANGUAGE='JavaScript'>
                        window.alert('Anda berhasil menambahkan soal')
                        window.location.href='admin_mapelmtk.php';
                        </SCRIPT>");
                    if(!$query){
                        die( mysql_error() );
                    }
                }
                
                exit();
            } else {

                $query = "INSERT INTO smtk VALUES('', '$perintah', '$filename', '$pertanyaan', '$jawab_a', '$jawab_b', '$jawab_c', '$jawab_d', '$kunci')";
                $query = mysql_query($query);
                if (isset($_SESSION["guru"])) {
                    echo("<SCRIPT LANGUAGE='JavaScript'>
                            window.alert('Anda berhasil menambahkan soal')
                            window.location.href='guru_mapelipa.php';
                            </SCRIPT>");
                    if(!$query){
                        die( mysql_error() );
                    }
                }elseif(isset($_SESSION["admin"])){
                    echo("<SCRIPT LANGUAGE='JavaScript'>
                       window.alert('Anda berhasil menambahkan soal')
                        window.location.href='admin_mapelmtk.php';
                        </SCRIPT>");
                    if(!$query){
                        die( mysql_error() );
                    }
                }

                else{
                  echo "Gagal upload!\n";  
                }
                
            }

        }
            

?>