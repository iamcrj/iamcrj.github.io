<?php
$q=$_GET['q'];
$length1=mb_strlen($q);
if($length1<10)
echo 'Enter valid Number';
else {
  echo 'Valid';
}

 ?>
