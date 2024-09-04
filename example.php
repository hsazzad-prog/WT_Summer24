<?php
$a ="user"; $b ="0"; $c =false;
if( empty($c))
{echo "c is empty.<br>";}
else
{echo "c is not empty.<br>";}
if( is_numeric($b))
{echo "b is numeric.<br>";}
else
{echo "b is not numeric.<br>";}
if(isset($b) && !empty($b))
{  echo "b is declared.<br>";}
else{  echo "b is not declared.<br>";}
if(strlen($b) > 0)
{  echo "b has length.<br>";}
else
{  echo "b has no length.<br>";}
setcookie($a,$a, time() -3600);
if(count($_COOKIE) >0) 
{echo "Cookies are enabled.<br>"; }
else 
{ echo"Cookies are disabled.<br>";}
?>
<?php
____________________________ //start session
$filename=$_FILES["myfile"]["name"];
____________________________(______________________________, $filename); //moves an uploaded file to destination
echo $_FILES["myfile"]["____________________"]; //prints the size of file
echo $_FILES["myfile"]["____________________"]; //prints the type of file

?>