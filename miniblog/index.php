<?php
$module = "php_test_sessions";
include './list.php';
include "$header";
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-items">
        <a class="nav-link disabled" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">About</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" action="<?=$connection?>">
        <div class="mr-sm-2">
            <div class="row"><input class="form-control" type="text" placeholder="username" name="username"></div>
            <div class="row"><input class="form-control" type="password" placeholder="password" name="password"></div>
        </div>
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<?php
include "$footer";
?>