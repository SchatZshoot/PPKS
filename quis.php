<?php
require 'koneksi.php';



  $nama = $_POST['nama'];
  $kelas = $_POST['kelas'];
  $q1 = $_POST['question1'];
  $q2 = $_POST['question2'];
  $q3 = $_POST['question3'];
  $q4 = $_POST['question4'];
  $q5 = $_POST['question5'];
  $q6 = $_POST['question6'];
  $q7 = $_POST['question7'];
  $q8 = $_POST['question8'];
  $q9 = $_POST['question9'];


// Kunci jawaban
$answers = array(
  'question1' => 'C',
  'question2' => 'B',
  'question3' => 'C',
  'question4' => 'B',
  'question5' => 'D',
  'question6' => 'B',
  'question7' => 'B',
  'question8' => 'B',
  'question9' => 'C',
);

// Hitung skor
$score = 0;
  foreach ($answers as $key => $value) {
    if ($_POST[$key] == $value) {
      $score++;
    }
    
  }

  // Simpan ke database
  $sql = "INSERT INTO ujian (nama, kelas, question1, question2, question3, question4, question5, question6, question7, question8, question9, score) VALUES ('$nama','$kelas', '$q1', '$q2', '$q3', '$q4', '$q5', '$q6', '$q7', '$q8', '$q9', '$score')";

  if ($koneksi->query($sql) === TRUE) {
    echo "<script>alert('Berhasil mengisi Quiz');
        window.location='home.html';</script>";
  } else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
  }



$koneksi->close();
?>