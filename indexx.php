<?php  
  include('functions.php');
  if (!isLoggedIn()) 
  {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }

?>
<!DOCTYPE html>
<html>
<head>
  <title>Home</title>

    <link rel="stylesheet" href="style.css">

<style>
* { margin: 0px; padding: 0px; }
.header {
  width: 40%;
  margin: 50px auto 0px;
  color: white;
  background: #5F9EA0;
  text-align: center;
  border: 1px solid #B0C4DE;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
}
.content {
  width: 40%;
  margin: 0px auto;
  padding: 20px;
  border: 1px solid #B0C4DE;
  background: white;
  border-radius: 0px 0px 10px 10px;
}
.profile_info img {
  display: inline-block; 
  width: 50px; 
  height: 50px; 
  margin: 5px;
  float: left;
}
.profile_info div {
  display: inline-block; 
  margin: 5px;
}
.profile_info:after {
  content: "";
  display: block;
  clear: both;
}
.error {
  width: 92%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
}
.success {
  color: #3c763d; 
  background: #dff0d8; 
  border: 1px solid #3c763d;
  margin-bottom: 20px;.profile_info img {
  display: inline-block; 
  width: 50px; 
  height: 50px; 
  margin: 5px;
  float: left;
}
</style>
</head>

<body>

  <div class="header">
    <h2>Home Page</h2>
  </div>
  <div class="content">
    <!-- notification message -->
    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>
    <!-- logged in user information -->
    <div class="profile_info">
      <!--<img src="images/user_profile.png"  >-->

      <div>
        <?php  if (isset($_SESSION['user'])) : ?>
          <p><strong><b><i>Welcome  <?php echo $_SESSION['user']['username']; ?>!!!!!</i></b></strong></p>

          <small>
            <!--<i  style="color: #888;">(<?php echo $_SESSION['user']['user_type']; ?>)</i>-->
            
          <button class="btn btn-default"><a href="indexx.php?logout='1'" >logout</a></button> 
          </small>

        <?php endif ?>
      </div>
    </div>
      
  </div>
</body>
</html>