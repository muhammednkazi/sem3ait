<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">MNK 
    </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About Us</a>
      </li>	
      <li class="nav-item">
        <a class="nav-link" href="services.php">Services</a>
      </li> 
	  <?php if(!isset($_SESSION['seshan'])){ ?>
       <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li> 
	  <?php }else{
		  ?>
		  <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li> 
		  <?php
	  } ?>
       <li class="nav-item">
        <a class="nav-link" href="gallery.php">Gallery</a>
      </li>

      <?php if(!isset($_SESSION['seshan'])){?>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact Us</a>
      </li>
    <?php }else
      {?>
        <li class="nav-item">
        <a class="nav-link" href="displayusers.php">Admin Settings</a>
      </li>
      <?php } ?>
    </ul>
  </div>
</nav>