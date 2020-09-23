<?php 
	include("connection.php");

	function db($type,$table,$id="",$col=[],$val=[])
	{		global $conn;
		$col=implode("`,`",$col);
		$val=implode("','",$val);
		if($conn)
		{
			$query=""; 
			if(strtolower($type)=='insert')
				{ $query="INSERT INTO `".$table."` set `".$col."` = '".$val."' Where `id` ='".$id."'";
					$result=mysqli_query($conn,$query);
					if($result)
					{    #print_r($result);#echo $query;
				 		 echo  "<script>alert('Data Inserted');</script>";

					}
					else
			  			{return $query." has query error ".mysqli_error($conn);}
				}
			if(strtolower($type)=='select')
				{ $query="SELECT * FROM `".$table."` WHERE `id`='".$id."'"; 
				$result=mysqli_query($conn,$query);
					if($result)
					{    #print_r($result);#echo $query;
				 		while($row=mysqli_fetch_assoc($result))
						 {	$data=$row; return $data;}
					}
					else
			  			{return $query." has query error ".mysqli_error($conn);}
			  	}
			if(strtolower($type)=='update')
			  {$query="UPDATE `".$table."` SET `".$col."`='".$val."' WHERE `id` ='".$id."'";
			  $result=mysqli_query($conn,$query);
			  if($result)
			    {    #print_r($result);#echo $query;
				   echo  "<script>alert('Data Updated');</script>";
			}
			else
			  {return $query." has query error ".mysqli_error($conn);}
			}
		}
		else
		  {return "Connection Error:".mysqli_error($conn); }
	}


function maxid($table){
	global $conn;
	if($conn)
		{
			$query="SELECT COUNT('id') FROM `".$table."`";
			$result=mysqli_query($conn,$query);
					if($result)
					{    #print_r($result);#echo $query;
				 		while($row=mysqli_fetch_row($result))
						 {	$data=$row;} return $data;
					}
					else
			  			{return $query." has query error ".mysqli_error($conn);}
		}
		else
		  {return "Connection Error:".mysqli_error($conn); }

}
function del($id,$table){
	global $conn;
	if($conn)
		{
			$query="DELETE FROM `".$table."` WHERE `id` = '".$id."'";
			$result=mysqli_query($conn,$query);
			 if($result)
					{   #echo $query;
				 		#
					}
					else
			  			{echo $query." has query error ".mysqli_error($conn);}
		}
		else
		  {echo "Connection Error:".mysqli_error($conn); }
}
function delete($id,$table)
{	
	del($id,$table);
	global $conn;
	if($conn)
		{    
			$q="ALTER TABLE `".$table."` DROP COLUMN `id`";
			
			$result=mysqli_query($conn,$q);
			if($result)
			{ 	
				$q1="ALTER TABLE `".$table."` ADD `id` INT(11) NOT NULL AUTO_INCREMENT FIRST, ADD PRIMARY KEY (`id`);";
				$result1=mysqli_query($conn,$q1);
				if($result1)
					{ echo  "<script>alert('Deleted');</script>";}
				else{
					echo  "<script>alert('ERROR');</script>";
				}
			}

		else
		  { echo  "<script>alert('Connection Error:".mysqli_error($conn)."');</script>"; }
}
}
 function inscat($val){
 	global $conn;
 	if($conn)
 	{
 		$q="INSERT INTO `cat` set `cate` = '".$val."'"; 
 		$result1=mysqli_query($conn,$q);
				if($result1)
					{ echo  "<script>alert('CATEGORY INSERTED');</script>";}
				else{
					echo  "<script>alert('ERROR');</script>";
				}
 	}


 }

 function maxid_c($id){
	global $conn;
	if($conn)
		{
			$query="SELECT COUNT(`id`) FROM `gallery` WHERE `cate_id` =".$id;
			$result=mysqli_query($conn,$query);
					if($result)
					{    #print_r($result);#echo $query;
				 		while($row=mysqli_fetch_row($result))
						 {	$data=$row;} return $data;
					}
					else
			  			{return $query." has query error ".mysqli_error($conn);}
		}
		else
		  {return "Connection Error:".mysqli_error($conn); }

}
function query($query)
{	
	global $conn;
	if($conn){
	$result=mysqli_query($conn,$query);
					if($result)
					{    $data[]="";
				 		while($row=mysqli_fetch_row($result))
						 {	$data[]=$row;} return $data;
					}
					else
			  			{return $query." has query error ".mysqli_error($conn);}
		}
		else
		  {return "Connection Error:".mysqli_error($conn); }
}

function image_formate($h,$w,$image,$uploadedfile)
{  //echo var_dump($_FILES);
	if($image!="")
            {
                
                if ($image) 
                {
                    $filename = stripslashes($image);
                    $extension = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
                    //$extension = getExtension($filename);
                    //$extension = strtolower($extension);
                    if($extension=="gif")
                    {
                        $filename = "images/".$image;
                        move_uploaded_file($uploadedfile,$filename);
                    }
                    else if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png")) 
                    {
                        echo ' Unknown Image extension ';
                        $errors=1;
                    }
                    else
                    {
                        $size=filesize($uploadedfile);
                        if($extension=="jpg" || $extension=="jpeg" )
                        {
                            $uploadedfile = $uploadedfile;
                            $src = imagecreatefromjpeg($uploadedfile);
                        }
                        else if($extension=="png")
                        {
                            $uploadedfile = $uploadedfile;
                            $src = imagecreatefrompng($uploadedfile);
                        }
                        list($width,$height)=getimagesize($uploadedfile);
                        
                        $newwidth=$w;
                        $newheight=$h;
                        $tmp=imagecreatetruecolor($newwidth,$newheight);
                        imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);
                        $filename = "images/". $image;

                        
                        imagejpeg($tmp,$filename,100);
                        imagedestroy($src);
                        imagedestroy($tmp);
                        //insert into database
                        return $filename;
                    }
                }
            }
}
?>