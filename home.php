<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  padding-top: 80px; /* Adjust this value based on the height of your navbar */
  display: flex;
  flex-direction: column;
  min-height: 100vh;
  transition: background 0.3s ease;
}
 /* Backgrounds for each country */
    .london-bg {
      background-image: url('london-bg.jpg');
      background-size: cover;
      background-position: center;
    }

    .paris-bg {
      background-image: url('paris-bg.jpg');
      background-size: cover;
      background-position: center;
    }

    .tokyo-bg {
      background-image: url('tokyo-bg.jpg');
      background-size: cover;
      background-position: center;
    }

    .berlin-bg {
      background-image: url('berlin-bg.jpg');
      background-size: cover;
      background-position: center;
    }

/* Style the header */
header {
  background-color: #666;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}

.navbar {
      background-color: rgba(255, 255, 255, 0.55); /* 30% transparent black */
    }

article {
  float: left;
  padding: 20px;
  width: 70%;
  background-color:rgba(241, 241, 241, 0.67);
  height: 300px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section::after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color: rgba(0, 0, 0, 0.5); /* Black with 50% transparency */
  padding: 10px;
  text-align: center;
  color: white;
  margin-top: auto; /* Push the footer to the bottom */
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;  
    height: auto;
  }
}
</style>
</head>
<body class="<?php echo isset($_GET['page']) ? $_GET['page'] . '-bg' : ''; ?>">

<nav class="navbar fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Cities</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">City Lists</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home.php?page=london" class="<?php echo ($_GET['page'] ?? '') === 'london'  ? 'active' : ''; ?>">London</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home.php?page=paris" class="<?php echo ($_GET['page'] ?? '') === 'paris'  ? 'active' : ''; ?>">Paris</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home.php?page=tokyo" class="<?php echo ($_GET['page'] ?? '') === 'tokyo'  ? 'active' : ''; ?>">Tokyo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home.php?page=berlin" class="<?php echo ($_GET['page'] ?? '') === 'berlin'  ? 'active' : ''; ?>">Berlin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home.php?page=personal_info" class="<?php echo ($_GET['page'] ?? '') === 'personal_info'  ? 'active' : ''; ?>">My Info</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<section>
  <article>
    <!-- wala nanih sulod -->
     <?php
        if (isset($_GET['page'])){
            $page = $_GET['page'];
            // Include the corresponding content based on the requested page
            switch ($page) {
                case 'london':
                    include 'london.php';
                    break;
                    case 'paris':
                        include 'paris.php';
                        break;
                        case 'tokyo':
                            include 'tokyo.php';
                            break;
                            case 'berlin':
                              include 'berlin.php';
                              break;
                              case 'personal_info':
                                include 'personal_info.php';
                                break;
                
              
            
        }
    }
     ?>
  </article>
</section>

<footer>
  <p>Footer</p>
</footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

