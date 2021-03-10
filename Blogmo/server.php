<?php
# Fill our vars and run on cli
# $ php -f db-connect-test.php

$dbname = 'user_registration';
$dbuser = 'root';
$dbpass = '';
$erros= array();


$connect = mysqli_connect($dbhost, $dbuser, $dbpass) or die("Unable to Connect to '$dbhost'");
mysql_select_db($dbname) or die("Could not open the db '$dbname'");

$test_query = "SHOW TABLES FROM $dbname";
$result = mysql_query($test_query);

$tblCnt = 0;
while($tbl = mysql_fetch_array($result)) {
  $tblCnt++;
  #echo $tbl[0]."<br />\n";
}

if (!$tblCnt) {
  echo "There are no tables<br />\n";
} else {
  echo "There are $tblCnt tables<br />\n";
}

if (isset($_POST['register'])) {
  $username = mysql_real_escape_string($_POST['username']);
  $firstn = mysql_real_escape_string($_POST['firstn']);
  $lastn = mysql_real_escape_string($_POST['lastn']);
  $dob = mysql_real_escape_string($_POST['dob']);
  $pw = mysql_real_escape_string($_POST['pw']);
  $pwc = mysql_real_escape_string($_POST['pwc']);
     if (empty($username)){
       array_push($error, "Username is required");
     }
     if (empty($dob)){
       array_push($error, "Date of Birth is required");
     }
     if (empty($pw)){
       array_push($error, "Password is required");
     }
     if ($pw != $pwc) {
       array_push($errors, "Password/Confirmation password inserted incorrectly.");
     }
       if (count($error == 0)) {
         $password = md5($pw);
         $sql = "INSERT INTO users (username, firstname, lastname, dob, password)
            values ('$username', '$firstn', '$lastn', '$dob', '$pw')" ;

       }

}

 ?>
