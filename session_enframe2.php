<?php 

session_start();

$_SESSION['HOLA']="hola sergio estoy si funcuona.... fuck yeah!!!";




 ?>

 <iframe src="sessiones_in_iframe.php" frameborder="0"></iframe>
 <iframe src="http://hypweb.net/elFinder-nightly/demo/2.x_n/elfinder.html" frameborder="0" width='100%' height='500px'></iframe>


 <?php 


if (isset($_SESSION['elFinderDropboxTokens'])) {
	echo "<br> hola";
}


  ?>