<?php
include_once("../func/emailhandler.php");

function sendForm($category, $nama, $nohp, $umur)
{
  ob_start();
  $judul = "GBI Citra Family - New Form Submission";
  $isi = '<div style="
    text-align: center !important;
    margin: 1rem !important;
    font-family: Arial, Helvetica, sans-serif;
    ">
        <img src="https://agenda.gbicitrafamily.com/images/logo.png" width="64px">
        <div style="
        margin: 1rem !important;
        display: flex !important;
        justify-content: center !important;
        ">
            <div style="
            border: 1px solid #dee2e6 !important;
            padding: 1rem !important;
            display: inline-block !important;
            justify-content: center;
            ">
                <img src="https://agenda.gbicitrafamily.com/images/email.png" width="192dp">
                <h2>Input Form Baru</h2>
                <div style="margin-top: 1rem !important;text-align: start;">
                    <h3>Shalom,<br>
                        Kami ingin memberitahukan bahwa telah ada formulir baru yang diterima.<br>
                        Berikut adalah detail yang telah diisi:</h3>
                    <p><b>Kategori: </b>' . $category . '</p>
                    <p><b>Nama: </b>' . $nama . '</p>
                    <p><b>No. Handphone: </b>' . $nohp . '</p>
                    <p><b>Range Umur: </b>' . $umur . '</p>
                    <p>Silakan cek data ini untuk keperluan lebih lanjut. Harap dicatat bahwa email ini tidak dapat dibalas.</p>
                    <p>Tuhan Memberkati,<br>
                    Tim Digital</p>
                </div>
            </div>
        </div>
        Copyright &copy; 2024
        <a href="https://gbicitrafamily.com">GBI Citra Family</a>
    </div>
    ';
  $eror = SendEmail($judul, $isi);
  if (is_array($eror) && array_key_exists("error", $eror)) {
    return $eror;
  }

  ob_end_clean();
}

if (basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])) {
  if (isset($_POST['category'])) {
    $category = $_POST['category'];
    $nama = $_POST['nama'];
    $nohp = $_POST['nohp'];
    $umur = $_POST['umur'];
    $res = sendForm($category, $nama, $nohp, $umur);
    //return if error
    if (is_array($res) && isset($res["error"])) {
      echo json_encode($res);
      die;
    }
    echo '{"error":-1}';
  } else {
    //email not set
    echo '{"error":99}';
  }
}
