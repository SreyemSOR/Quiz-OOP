<?php include_once("header.php");?>
<form method="POST" action="getValue.php">
    <h1>Quiz__OOP</h1>
<div class="card col-sm-4">
     
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="your name" required>
  </div>
  <select class="custom-select" name='gender'>
  <option selected>Gender</option>
  <option value="Male" checked>Male</option>
  <option value="Female">Female</option>
  <option value="Other">Other</option>
</select>
  <div class="form-group">
    <label for="Province">Province</label>
    <input type="text" class="form-control" id="Province" placeholder="Province input" name="pro" required>
  </div>
  <div class="form-group">
    <label for="Email">Email</label>
    <input type="text" class="form-control" id="Email" placeholder="Email input" name="email" required>
  </div>
  <button type='submit' class='btn btn-primary ' name='submit'>Send</button>
  </div>
  
</form>
   
    <?php include_once("footer.php");?>