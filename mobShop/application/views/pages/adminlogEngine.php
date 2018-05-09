<style type="text/css">
	footer,header{display: none;}
</style>
<?php
// session_start();
//getting data from AJAX function 
$usr=$this->input->post('usrname');
$pw=$this->input->post('password');

if($pw=="next"){
	foreach ($admin as $logged) {
		if($logged['Username']!=$usr){
			echo "~Invalid Username~";
		}
		else{
			echo "~".$logged['First_Name']."~";
		}
	}
}
else{
		foreach ($admin as $logged) {
		if($logged['Password']!=$pw){
			echo "~Invalid Password~";
		}
		else{
			
			// $_SESSION["user"] = $logged['First_Name'];
			echo "~".$logged['Password']."~";

		}
	}
}


?>
