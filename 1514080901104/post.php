<?php  

	//$fileName="data.txt";

	//file_put_contents($fileName, var_export($_POST,true)."\r\n",FILE_APPEND);
	
	echo "Author：" .$_POST["Author"]. "<br>";  
	echo "BookTypeID为：" .$_POST["BookTypeID"]. "<br>";   
	echo "Bookname为：" .$_POST["Bookname"]. "<br>";   
	echo "DownloadPassword为：" .$_POST["DownloadPassword"]. "<br>";   
	echo "DownloadUrl为：" .$_POST["DownloadUrl"]. "<br>";   
	echo "ISBN为：" .$_POST["ISBN"]. "<br>";   
	echo "Interpreter为：" .$_POST["Interpreter"]. "<br>";   
	echo "Introduction为：" .$_POST["Introduction"]. "<br>";   
	echo "Publishing_Date为：" .$_POST["Publishing_Date"]. "<br>";   
	echo "Publishing_House为：" .$_POST["Publishing_House"]. "<br>"; 

	
	//echo json_encode($_POST);
	
	$fileName2="uploadinfo.txt";
	$handle=fopen($fileName2,'a') or die('打开<b>'.$fileName.'</b>文件失败');
	fwrite($handle,"Author\t". $_POST["Author"]. "\r\n");
	fwrite($handle,"BookTypeID\t". $_POST["BookTypeID"]. "\r\n");
	fwrite($handle,"Bookname\t". $_POST["Bookname"]. "\r\n");
	fwrite($handle,"DownloadPassword\t". $_POST["DownloadPassword"]. "\r\n");
	fwrite($handle,"DownloadUrl\t". $_POST["DownloadUrl"]. "\r\n");
	fwrite($handle,"ISBN\t". $_POST["ISBN"]. "\r\n");
	fwrite($handle,"Interpreter\t". $_POST["Interpreter"]. "\r\n");
	fwrite($handle,"Introduction\t". $_POST["Introduction"]. "\r\n");
	fwrite($handle,"Publishing_Date\t". $_POST["Publishing_Date"]. "\r\n");
	fwrite($handle,"Publishing_House\t". $_POST["Publishing_House"]. "\r\n\r\n\r\n");
	fclose($handle);   


 ?>   