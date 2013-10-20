<?php
class Uploader extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database('movies');
	}

	function upload(){

		if ($_FILES[csv][size] > 0) { 

		    //get the csv file 
		    $file = $_FILES[csv][tmp_name]; 
		    $handle = fopen($file,"r"); 
		     
		    fgetcsv($handle,1000,",","'"); //to skip first row
		    //loop through the csv file and insert into database 
		    do { 
			if ($data[1]) { 
			    if (!$data[0]){
				$groupId = explode('-', $data[1]);
				$data[0] = $groupId[0];
			    }
			    $sql = "INSERT IGNORE INTO movies (group_id, product_id, movie_title, store, category, sub_category, price, shipping_duration) VALUES 
				( 
				    '".addslashes($data[0])."', 
				    '".addslashes($data[1])."', 
				    '".addslashes($data[2])."',
				    '".addslashes($data[3])."',
				    '".addslashes($data[4])."', 
				    '".addslashes($data[5])."', 
				    '".addslashes($data[6])."',
				    '".addslashes($data[7])."'
				     
				) 
			    ";
			   $this->db->query($sql); 
			} 
		    } while ($data = fgetcsv($handle,1000,",","'")); 
		    fclose($handle);

		    //redirect to same page with success message
		    header('Location: success'); die; 

		} 

	}
}
?>
