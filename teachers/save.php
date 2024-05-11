<?php
if (isset($_POST['simpan'])) {
    include_once('config.php');

    $nip  = $_POST['nip'];
    $name  = $_POST['name'];
    $pob  = $_POST['pob'];
    $dob  = $_POST['dob'];
    $phone  = $_POST['phone'];  
    $subject_id  = $_POST['subject_id'];  

    $acak = rand();
    $namafile = $_FILES['photo']['name'];
    $ukuran = $_FILES['photo']['size'];
    $akhiran = pathinfo($namafile, PATHINFO_EXTENSION);
    $ekstensi = array('png', 'jpg', 'jpeg', 'gif', 'svg');

    if(!file_exists($_FILES['photo']['tmp_name']) || !is_uploaded_file($_FILES['photo']['tmp_name'])) {
        $sql = "INSERT INTO teachers SET nip='$nip', name='$name', pob='$pob', dob='$dob', phone='$phone', subject_id='$subject_id'";
    } else{
        if(!in_array($akhiran, $ekstensi)) {
            header("location:index.php?m=teachers");
            echo '<script language="JavaScript">';
                echo 'alert("Akhiran file tidak diizinkan.")';
            echo '</script>';
        } else {
            if ($ukuran < 100000000000) {
                $nmfile = $acak . '_' . $namafile;
                move_uploaded_file($_FILES['photo']['tmp_name'], 'teachers/photo/'.$nmfile);
                $sql = "INSERT INTO teachers SET nip='$nip', name='$name', pob='$pob', dob='$dob', phone='$phone', subject_id='$subject_id', photo='$nmfile'";
            } else {
                // header("location:index.php?m=teachers");
                // echo '<script language="JavaScript">';
                //     echo 'alert("Ukuran file anda, terlalu besar.")';
                // echo '</script>';
                echo 'disini 2';
            }
        }
      
    }

    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location: index.php?m=teachers&s=view');
    }else{
        include "index.php?m=teachers&s=view";
        echo '<script language="JavaScript">';
            echo 'alert("Data Gagal Ditambahkan.")';
        echo '</script>';
    }
}