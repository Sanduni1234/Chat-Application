<?php 
	session_start();
	if(isset($_SESSION['name']))
	{
		include "layouts/header2.php"; 
		include "config.php"; 
		
		$sql="SELECT * FROM `chat`";

		$query = mysqli_query($conn,$sql);
?>
<style>
  h2{
color:white;
  }
  label{
color:white;
  }
  span{
	  color:#673ab7;
	  font-weight:bold;
  }
  .container {
    margin-top: 3%;
    width: 60%;
    background-color: #26262b9e;
    padding-right:10%;
    padding-left:10%;
	margin-bottom: 10%;
  }
  .btn-primary {
    background-color: #673AB7;
	}
	
  </style>

<div class="container">
  <center><h2>Welcome <span style="color:darkgreen;"><?php echo $_SESSION['name']; ?> !</span></h2>
  <br><br>
	<label>Click below to Join the chat</label><br>
	<br><br>
	<a href="chatpage.php" class="btn btn-success">Open Chat</a><br>
<br>
</div>
<center><img src="images\logo.png" alt="" class="" style="width: 500px; "></center>

</body>
</html>
<?php
	}
	else
	{
		header('location:index.php');
	}
?>