  <?php 	
  	$data="";
  	function data($id,$table)
  	{
  		global $conn,$data;
  		 
	  	$sel="SELECT * FROM $table where id=$id";
		$result=mysqli_query($conn,$sel);
		while ($row=mysqli_fetch_row($result))
		{
         global $data ;
         $data = $row ;
		}
		return $data;
	}
	?>