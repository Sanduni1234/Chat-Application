<?php include "layouts/header.php"; ?>
<html>
<style>
  h2 {
    color: white;
  }

  h4 {
    color: darkred;
    font-weight: bold;
    text-decoration: underline;
  }

  .h5 {
    color:white ;
    font-weight: bold;
  }

  label {
    color: white;
  }

  .container {
    margin-top: 4%;
    width: 50%;
    background-color: #26262b9e;
    padding-top: 2%;
    padding-bottom: 2%;
  }

  .btn-primary {
    background-color: #673AB7;
  }
</style>

<body>

  <div class="container">

    <center>
      <h2>Registration form</h2>
    </center></br>
    <form class="form-horizontal" method="post" action="add_user.php">
      <div class="form-group">
        <label class="control-label col-sm-2 col-sm-offset-2" for="name">Name:</label>

        <div class="col-sm-5">
          <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2 col-sm-offset-2" for="email">Email:</label>

        <div class="col-sm-5">
          <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2 col-sm-offset-2" for="pwd">Password:</label>
        <div class="col-sm-5">
          <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2 col-sm-offset-2" for="number">Number:</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="number" placeholder="Enter number" name="number" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2 col-sm-offset-2" for="name">Address:</label>

        <div class="col-sm-5">
          <textarea class="form-control" id="address" placeholder="Enter Address" name="address" required></textarea>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-offset-4 col-sm-8">
          <button type="submit" class="btn btn-success">Sign Up</button>
        </div>
      </div>
    </form>
  </div>

  <div class="container">
    <h4> Follow the instructions</h4>
    <label>*** Name should be given - Far-Nimal / Gra-Dayarathna / Agr-Nimanthi</label
  </div>
</body>

</html>