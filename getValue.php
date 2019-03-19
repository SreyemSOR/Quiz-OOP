<?php

	include_once("src/GetValue-Class.php");
    $name=$_POST['name'];

    $province=$_POST['pro'];
    $email=$_POST['email'];
 ?>
<?php include_once("header.php");?>
<form class="bg-shadow">
<div class="card col-sm-6">
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-6 form-style">
        <h3 class="text-center" >Student</h3><hr>
        <p>Name:  <?php echo $name;?></p>
        <p>Gender: <?php 
                if(isset($_POST['submit'])){
                 $gender= $_POST['gender']; 
                echo $gender;}
                ?>
    </p>
        <p>Province: <?php echo $province?></p>
        <p>Email: <?php echo $email?></p><hr>
      
    </div>
    <div class="col-md-4"></div>
</div>
</div>
</form>
<?php include_once("footer.php");?>

