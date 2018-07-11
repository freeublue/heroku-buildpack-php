<?
$foo = $_SERVER[SERVER_NAME];
echo "$foo";
if($foo === 'laundrybymagic.herokuapp.com') { 
function NewReg()

    { 
     include "config.php";

        if (empty($_POST['us'])) {
            echo  "Please supply a mobile number as your username";
        } elseif (empty($_POST['ps']) || empty($_POST['psr'])) {
            echo "you must select a password";
        } elseif ($_POST['ps'] !== $_POST['psr']) {
            echo "Password and password repeat are not the same";
        } elseif (strlen($_POST['ps']) < 6) {
            echo  "Password must be at least six characters in length, but less than sixty characters";
        } elseif (strlen($_POST['us']) > 10 || strlen($_POST['us']) < 10) {
            echo "Username cannot be shorter than 10 numbers";
        }  
 elseif (preg_replace("/[^a-zA-Z0-9]/", "", $_POST['ps']) != $_POST['ps']) {
            echo "Password may only contain letters and numbers";
        } 
 elseif (preg_replace("/[^0-9]/", "", $_POST['us']) != $_POST['us']) {
            echo "Username may be numbers only";
        } 
elseif (!empty($_POST['us'])
            && strlen($_POST['us']) <= 10
            && strlen($_POST['us']) >= 10
            && strlen($_POST['ps']) >=6
 && strlen($_POST['ps']) <=60
            
            
            && !empty($_POST['ps'])
            && !empty($_POST['psr'])
            && ($_POST['ps'] === $_POST['psr'])
        ) { 
include "lib.php";
 
$us = base64_encode(numm($_POST['us']));


                // check 
                $sql = "SELECT * FROM cust WHERE cu_phone_mobile = '$us'";
                 $result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {

$uname = $row[cu_phone_mobile];

echo "That number already exists in our database, please select another or use our lost password facility if you cannot remeber a previous registration"; 
                    } } 
                 else { 
  $password_hash = crypt($_POST['ps']);

$sql3 = "SELECT * FROM cust";
  $res = mysqli_query($conn, $sql3);
while($row1 =  mysqli_fetch_assoc($res)) { 
$num[] = $row[cu_id];
 } 
$nf = count($num);


$array = array('aa', 'b', 'zz', 'q', 'bm', 'kl');
shuffle($array);
$px = $array[0];

$pxc = $px . $nf;


                    $sq = ("INSERT INTO cust(cu_phone_mobile, cu_ps) values('$us', '$pxc')");
  $res = mysqli_query($conn, $sq);
$qu = "INSERT INTO str(ca, pf) VALUES('$pxc', '$password_hash')";
  $res1 = mysqli_query($conn, $qu);
                    echo "Registration sucessfull you may now login<a style='width:300px;height:200px;position:absolute;top:200px;left:300px;background:black;color:white;border:1px solid gray;border-radius:15%;padding:30px;font-size:40px'; href='index.php'>Home</a>";

    } } } 
NewReg(); } else { 
echo " "; } 

?> 