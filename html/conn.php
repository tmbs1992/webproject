<?php
$connect=mysqli_connect('localhost','root','','tmbs');
 
if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}
 
?>