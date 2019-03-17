<?php
	$data = "dmsklafnalknfsf";
	$fileLocation = getenv("DOCUMENT_ROOT") . "/file/case1.txt";
	$file = fopen($fileLocation,"w");
	fwrite($file,$data);
	fclose($file);
	echo "lklkfnalkflkdavf";
?>