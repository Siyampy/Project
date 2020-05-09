<?php 
	session_start();

	$conn = mysqli_connect("localhost","root","");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
    mysqli_select_db($conn,"ita");
    $pid=$_SESSION['pid'];
    
	if(isset($_POST['submit']))
	{
		$sql1="select * from products where pid= $pid";
        $result1 = $conn->query($sql1);
        $row1 = mysqli_fetch_assoc($result1);
        if($row1)
        {
           $pname=$row1['pname'];
        }
        $username=$_SESSION['uname'];
        $email=$_SESSION['email'];
        $review=$_POST['review'];
        $ip="localhost"	;
	
                //$sql="insert into reviews values(NULL,$pid, $pname,$username,$email,$review,$ip);";
                $sql="INSERT INTO `reviews` (`rid`, `pid`, `pname`, `username`, `email`, `review`, `ip`) VALUES (NULL, '$pid', '$pname', '$username', '$email', '$review', '$ip');";
                $result = $conn->query($sql);
                if($result)
                {
                    echo "<script>window.alert('Review submitted successfully!!')
                    window.location.href='review_products.php'</script>";  
                }
          
		       else
		        {
			    echo "<script>window.alert('Could not submit review')
			      window.location.href='review_products.php'</script>";
        }
        
	}
?>