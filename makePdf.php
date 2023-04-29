<?php 
require_once__DIR__ . '/vendor/autoload.php';
//grab variables passed
$fname = $_POST['fname'];
$lname=$_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

//create new PDF instance
$mpdf = new \Mpdf\Mpdf();

//creating pdf
$data='';
$data .='<h1>Your details</h1>';
//add data
$data .= '<strong>First name </strong>' .$fname .'<br />';
$data .= '<strong>Last name </strong>' .$lname .'<br />';
$data .= '<strong>email name </strong>' .$email .'<br />';
$data .= '<strong>Phone number</strong>' .$phone.'<br />';
if($message){
$data .= '<br /><strong>Your Message</strong>'.$message ;
}
$mpdf ->WriteHTML($data);

//out to browser

$mpdf =Output('myfile.pdf','D');


?>