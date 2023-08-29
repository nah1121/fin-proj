
<?php

session_start();

if ($_SESSION["id"]){
    $ids = $_SESSION["id"];
} else{
    header("location: admin.php");
}

require_once("config/config.php");

$sql = "SELECT * FROM logs WHERE `ids` = $ids";
$result = $conn->query($sql);
$user = $result->fetch_assoc();

$uname = $user['uname'];




?>

<nav class="navbar navbar-expand-lg">
    <div class="container-fluid row d-flex">
        
        <a class="navbar-brand col-2 position-absolute top-0 start-50 translate-middle-x" href="index.php">
            <img id="logosn" src="assets/img/logo/svg0.svg" alt="Yebis Engineering" width="250px">
        </a>
        <p class="col"></p>
        <div class="popover__wrapper">
          <a href="#" width="50px">
            <img src="assets/img/team.svg" alt="" width="50px">
          </a>
          <div class="popover__content d-flex felx-column flex-wrap"> 
            <div class="popover__info mx-auto w-100 justify-content-center text-center">
                <h3 class="popover__info--name"><?php echo $uname?></h3>
            </div>
            <div class="themes d-flex felx-row">
            <div class="theme-t">
            <p class="">Theme</p>
            </div>
            <div class="theme-cont">
              <label class="switch">
                  <input class="switch__input" type="checkbox" name="switch__input" role="switch">
                  <svg class="switch__icon switch__icon--dark" viewBox="0 0 12 12" width="12px" height="12px" aria-hidden="true">
                      <g fill="none" stroke="#fff" stroke-width="1" stroke-linecap="round">
                          <circle cx="6" cy="6" r="2" />
                          <g stroke-dasharray="1.5 1.5">
                              <polyline points="6 10,6 11.5" transform="rotate(0,6,6)" />
                              <polyline points="6 10,6 11.5" transform="rotate(45,6,6)" />
                              <polyline points="6 10,6 11.5" transform="rotate(90,6,6)" />
                              <polyline points="6 10,6 11.5" transform="rotate(135,6,6)" />
                              <polyline points="6 10,6 11.5" transform="rotate(180,6,6)" />
                              <polyline points="6 10,6 11.5" transform="rotate(225,6,6)" />
                              <polyline points="6 10,6 11.5" transform="rotate(270,6,6)" />
                              <polyline points="6 10,6 11.5" transform="rotate(315,6,6)" />
                          </g>
                      </g>
                  </svg>
                  <svg class="switch__icon switch__icon--light" viewBox="0 0 12 12" width="12px" height="12px" aria-hidden="true">
                      <g fill="none" stroke="#fff" stroke-width="1" stroke-linejoin="round" transform="rotate(-45,6,6)">
                          <path
                              d="m9,10c-2.209,0-4-1.791-4-4s1.791-4,4-4c.304,0,.598.041.883.105-.995-.992-2.367-1.605-3.883-1.605C2.962.5.5,2.962.5,6s2.462,5.5,5.5,5.5c1.516,0,2.888-.613,3.883-1.605-.285.064-.578.105-.883.105Z" />
                      </g>
                  </svg>
                  <span class="switch__sr">Dark Mode</span>
              </label>
              </div>
              </div>
              <div class="popover__info hover-underline-animation">
                <a href="admin.php" class="logout d-flex">
                <h4 class="popover__info--name">Logout</h4>
                <img src="assets/img/logout.svg" alt="logout" width="30px">
                </a>
            </div>
          </div>
        </div>
        <button class="navbar-toggler col-2" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse col d-lg-flex" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        More
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="portfolio.php" target="_top">Portfolio</a></li>
                        <li><a class="dropdown-item" href="#">Reviews</a></li>
                        <li><a class="dropdown-item" href="#">Blog</a></li>
                        <li><a class="dropdown-item" href="#">Career Opportunities</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Contact Us</a></li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="faq.php">FAQs</a>
                </li>
            </ul>
            
            
            
        </div>
    </div>
</nav>