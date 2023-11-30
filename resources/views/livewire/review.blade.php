<div class="d-flex justify-content-center align-items-center vh-100">
    	
    <form class="shadow w-450 p-3" 
          action="php/signup.php" 
          method="post"
          enctype="multipart/form-data">

        <h4 class="display-4  fs-1">Create Account</h4><br>
        <?php if(isset($_GET['error'])){ ?>
        <div class="alert alert-danger" role="alert">
          <?php echo $_GET['error']; ?>
        </div>
        <?php } ?>

        <?php if(isset($_GET['success'])){ ?>
        <div class="alert alert-success" role="alert">
          <?php echo $_GET['success']; ?>
        </div>
        <?php } ?>
      <div class="mb-3">
        <label class="form-label">Full Name</label>
        <input type="text" 
               class="form-control"
               name="fname"
               value="<?php echo (isset($_GET['fname']))?$_GET['fname']:"" ?>">
      </div>

      <div class="mb-3">
        <label class="form-label">User name</label>
        <input type="text" 
               class="form-control"
               name="uname"
               value="<?php echo (isset($_GET['uname']))?$_GET['uname']:"" ?>">
      </div>

      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" 
               class="form-control"
               name="pass">
      </div>

      <div class="mb-3">
        <label class="form-label">Profile Picture</label>
        <input type="file" 
               class="form-control"
               name="pp">
      </div>
      
      <button type="submit" class="btn btn-primary">Sign Up</button>
      <a href="login.php" class="link-secondary">Login</a>
    </form>
</div>