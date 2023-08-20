<?php


require_once("config/config.php");

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Yebis Engineering</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid row">
            <a class="navbar-brand col-2 position-absolute top-0 start-50 translate-middle-x" href="#">
                <img src="assets/img/logo/svg0.svg" alt="Yebis Engineering" width="250px">
            </a>
            <p class="col"></p>
            <button class="navbar-toggler col-2 " type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse col" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
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
                            <li><a class="dropdown-item" href="#" target="_top">Portfolio</a></li>
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
                        <a class="nav-link" href="#">FAQs</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>


    <div id="carouselExampleCaptions" class="carousel slide my-5">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/ac1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/ac2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/ac3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>





    <div class="hol justify-content-center align-content-center d-flex row m-2">
        <h1 class="col-12 holt my-3">Yebis Engineering</h1>

        <div class="ho1i card col-sm col-12 d-flex flex-column mx-sm-2 my-2">
            <h1><strong class="b-grad">Since 1950</strong></h1>
            <h3>Lorem ipsum dolor sit. Lorem, ipsum dolor.</h3>
        </div>

        <div class="ho1i card col-sm col-12 d-flex flex-column mx-sm-2 my-2">
            <h1><strong class="b-grad">50+</strong></h1>
            <h3>Completed projects</h3>
            <a href="#" class="my-3 col-12 btnh">
                <h4>Portfolio</h4>
            </a>
        </div>

        <div class="ho1i card col-sm col-12 d-flex flex-column mx-sm-2 my-2">
            <h1><strong class="b-grad">120+</strong></h1>
            <h3>Satisfied Clients</h3>
            <a href="#" class="my-3 col-12 btnh">
                <h4>Reviews</h4>
            </a>
        </div>

    </div>




    

        <div class="container py-5 text-center">
            <h1 class="header-text">Welcome to Yebis Engineering</h1>
            <p class="lead mt-3">Guiding Businesses Towards Technological Excellence</p>
          </div>
          
          <div class="container row mx-auto">
            <div class="row col cph0 d-flex justify-content-center mx-auto align-items-center align-items-xl-start">
              <div class=" cph custom-bg-blue d-flex flex-column align-items-center" style="text-align: center; max-width: 300px;">
                <img src="assets/img/mission.svg" alt="" width="50px">
                <h2 class="header-text">Mission</h2>
                <p class="lead">Be the steadfast foundation that guides businesses towards technological excellence.</p>
              </div>
              <div class="cph custom-bg-blue d-flex flex-column align-items-center" style="text-align: center; max-width: 300px;">
                <img src="assets/img/values.svg" alt="" width="50px">
                <h2 class="header-text">Core Values</h2>
                <ul class="list">
                  <li>Reliability</li>
                  <li>Innovation</li>
                  <li>Sustainability</li>
                </ul>
              </div>
              <div class="cph custom-bg-blue d-flex flex-column align-items-center" style="text-align: center; max-width: 300px;">
                <img src="assets/img/vision.svg" alt="" width="50px">
                <h2 class="header-text">Vision</h2>
                <p class="lead">Be a guiding beacon in the engineering landscape, leading the way to a brighter, innovative, and sustainable solutions.</p>
              </div>
            </div>

            <div class="cont col-xl flex-column">
                <div class="slideshow-container d-xl-flex d-none">

                    <div class="mySlides fade">
                    <img src="assets/img/ac1.jpg" alt="" style="width:100%">
                    </div>
                    
                    <div class="mySlides fade">
                    <img src="assets/img/ac1.jpg" style="width:100%">
                    </div>
                    
                    <div class="mySlides fade">
                    <img src="assets/img/ac1.jpg" style="width:100%">
                    </div>

                </div>
                
                <div class="slogan"><h1>We Fulfill Our Promises with <strong>Precision</strong> and <strong>Excellence</strong></h1></div>
            </div>            
            
        </div>
        
          

        <!-- projects preview containers -->
      
        <section id="{{$project->id}}" data-aos="fade-up"  >
           <?php
        
            $sql = "SELECT * FROM projects";
            $result = $conn->query($sql);
            $rowsProd = $resultProd->fetch_assoc();

            $id = $rowsProd['projId'];
            $title = $rowsProd['projTitle'];
            $price = $rowsProd['projPrice'];
            $image = $rowsProd['projImg'];
            $start_date = $rowsProd['sdate'];
            $finish_date = $rowsProd['dfin'];
            $description = $rowsProd['projDes'];

            $filepath = "..assets/img/products/";
            
            if ($result) {
                foreach ($result as $row) {
                   echo " 
                    <div class='container'>
                        <div class='row'>
                            <div class='col-lg-6'>
                                <h2 class='header-text'>$title</h2>
                                <p class='lead'>$description</p>
                                <a href='#' class='my-3 col-12 btnh'>
                                    <h4>View Project</h4>
                                </a>
                            </div>
                            <div class='col-lg-6'>
                                <img src='.$filepath.+.$image.' alt='' class='img-fluid'>
                            </div>
                        </div>
                    </div>";
                }
            } else {
                echo "Query failed!";
            }

            ?>


        </section>
        
        <!-- end of projects preview containers -->
        
          

          
          
          
          
          



          
          

          


          











          



          
          

          


          
    <script type="module" src="assets/js/dscript.js"></script>
    <script type="module" src="assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>


