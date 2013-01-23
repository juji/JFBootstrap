<?php
	
	$WEBSITE = array(
		'protocol'=>'http',
		'host'=>'jfbootstrap.jujiyangasli.com',
		//'uploaddir'=>'/' 			//use trailing slash
		'uploaddir'=>'uploads/' 	
	);
	
	if(isset($_GET['delete']) && isset($_GET['id'])){
		
		$name = explode('.',basename($_GET['delete']));
		$ext = array_pop($name);
		$name = $_GET['id'] . '.' . $ext;
		
		$n = $WEBSITE['uploaddir'] . $name;
		if(file_exists( $n ))
		unlink($n);
		
		print $n ."\n";
		print file_exists( $n );
		die();
	} 
	
	$imagedir = $WEBSITE['protocol'] .'://'. $WEBSITE['host'] . '/'. preg_replace('/\.\.\//','',$WEBSITE['uploaddir']);
		
	if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && 
		strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' && 
		isset($_FILES['dnduploaded']) && !$_FILES['dnduploaded']['error']){
		
		$name = explode('.',basename($_FILES['dnduploaded']['name']));
		$ext = array_pop($name);
		$name = $_POST['dndfilename'] . '.' . $ext;
		
		move_uploaded_file($_FILES['dnduploaded']['tmp_name'], $WEBSITE['uploaddir'] . $name);
		
		send(array(
		'status'=>true,
		'message'=> $imagedir . $name
		));
		
	}else if(isset($_FILES['dnduploaded']) && $_FILES['dnduploaded']['error']){
		
		switch ($_FILES['dnduploaded']['error']){
			case 1: $message = 'The upload is too large. maxfilesize: '.ini_get('upload_max_filesize');
			case 2: $message = 'The upload is too large. maxfilesize: '.$_POST['MAX_FILE_SIZE'];
			case 3: $message = 'Failed while uploading. Partialy uploaded. Try again!';
			case 4: $message = 'No file was uploaded.';
			case 6: $message = 'The server is broken, temporary folder missing.';
			case 7: $message = 'The server maybe full, failed writing to disk.';
			case 8: $message = 'Failed uploading file, some extension is stopping upload.';
		}
		
		send(array('status'=>false,'message'=>$message));
			
	}else{
		
		send(array('status'=>false,'message'=>'unknown request'));
		
	}
	
	
	
	function send($str){
		header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
		header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
		header("Content-Type: application/json"); // json
		die(json_encode($str));
	}
	
	function pp($str){
		print '<pre>';
		print_r($str);
		print '</pre>';
	}
	
	function clean($str){
		return get_magic_quotes_gpc() ? stripslashes($str) : $str;
	}
?>