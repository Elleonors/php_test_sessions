<?php
if ($_GET['destroy']==="Y" | !isset($_SESSION['admin'])){
    session_destroy();
    header("Location: ./index.php");
}
if($module==="home"){
  $home="active";
} else if($module==="admin"){
  $admin="active";
} else if($module==="user"){
  $user="active";
} else if($module==="list"){
  $list="active";
}
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="./index.php">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link <?=$home?>" href="./home.php">Home</a>
      </li>
      <?php
        if($_SESSION['admin']==="Y"){
          echo "
            <li class='nav-item'>
              <a class='nav-link ".$admin."' href='./admin.php'>Admin</a>
            </li>
          ";
        } else if($_SESSION['admin']==="N"){
          echo "
            <li class='nav-item'>
              <a class='nav-link ".$user."' href='./user.php'>User</a>
            </li>
          ";
        }
      ?>
      <li class="nav-item">
        <a class="nav-link <?=$list?>" href="./list.php">List</a>
      </li>
    </ul>
    <form action="./list.php" class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" name="search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>