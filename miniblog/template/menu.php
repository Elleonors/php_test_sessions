<?php
include "./list.php";
if ($_GET['destroy']==="Y" | !isset($_SESSION['admin'])){
    session_destroy();
    header("Location: ./index.php");
}
if($module==="home"){
  $homemenu="active";
} else if($module==="admin"){
  $adminmenu="active";
} else if($module==="user"){
  $usermenu="active";
} else if($module==="listing"){
  $listingmenu="active";
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
        <a class="nav-link <?=$homemenu?>" href="./home.php">Home</a>
      </li>
      <?php
        if($_SESSION['admin']==="Y"){
          echo "
            <li class='nav-item'>
              <a class='nav-link ".$adminmenu."' href='".$admin."'>Admin</a>
            </li>
          ";
        } else if($_SESSION['admin']==="N"){
          echo "
            <li class='nav-item'>
              <a class='nav-link ".$usermenu."' href='".$user."'>User</a>
            </li>
          ";
        }
      ?>
      <li class="nav-item">
        <a class="nav-link <?=$listingmenu?>" href="<?=$listing?>">Listing</a>
      </li>
    </ul>
    <form action="<?=$listing?>" class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" name="search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>