<?php
$userId=$this->input->post('LogEmail');
$passw=$this->input->post('LogPassw');

//Loading the database
$this->load->database();

//Getting Rows from table UserLog
$query = $this->db->get('UserLog');
$result=$query->result_array();



function getUserName($args,$un){
	foreach ($args as $User ) {
		if($User['Email'] == $un){
			return $User['Name'];
		}
	}
}

$gotRes=getUserName($result,$userId);

if($gotRes!=""){
	echo "~".$gotRes."~";
}
else{
	echo "~Email not Registered~";
}

?>
<script type="text/javascript">
	scrllNav('regAPI');
</script>