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
        if($row1 = mysqli_fetch_assoc($result1))
        {
           $pname=$row1['pname'];
        }
        $username=$_SESSION['user'];
        $review=$_POST['review'];	 
		$sql = "UPDATE reviews
                SET review = '$review' where username = '$username' and pname = '$pname'";
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