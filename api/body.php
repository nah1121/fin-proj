    <?php
    
    include_once('config/config.php');
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        
        $sql = "INSERT INTO contact (name, email, message) VALUES ('$name', '$email', '$message')";
        $result = $conn->query($sql);
        
        if($result){
            echo "<script language='javascript'>";
            echo "alert('Message Sent!')";
            echo "</script>";
        }
        else{
            echo "<script language='javascript'>";
            echo "alert('Message Failed!')";
            echo "</script>";
        }
    }






?>
    
    
    
    
    
    
    
    
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
            <a href="portfolio.php" class="my-3 col-12 btnh">
                <h4>Portfolio</h4>
            </a>
        </div>

        <div class="ho1i card col-sm col-12 d-flex flex-column mx-sm-2 my-2">
            <h1><strong class="b-grad">120+</strong></h1>
            <h3>Satisfied Clients</h3>
            <a href="reviews.php" class="my-3 col-12 btnh">
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



        <div class="teams-section mx-auto" style="max-width: 1500px;">
        <h2>Our Team</h2>
        
        <div class="main-cont">
        
        
    
    
            <?php


                $i = ['Construction Manager',
                'Project Manager',
                'Project Coordinator'];

                $j = 0;
                foreach($i as $obj) {
                $tea = "SELECT * FROM teams WHERE `teams`.`roles` = ?";
                $stmt = $conn->prepare($tea);

                if ($stmt) {
                $stmt->bind_param("s", $obj);
                $stmt->execute();

                $result = $stmt->get_result();

                $ho = '';
                $ho1 = '';
                while ($row = $result->fetch_assoc()) {
                    
                    $id = $row['id'];
                    $img = $row['image'];
                    $name = $row['name'];
                    $bio = $row['bio'];
                    
                    $j = 1 + $j;

                    if($j % 2 == 0){
                        $ho = 'flex-row-reverse';
                        $ho1 = 'text-align: right; margin-right: 25px;';
                    }
                    else{
                        $ho = 'flex-row';
                        $ho1 = 'text-align: left; margin-left: 25px;';
                    }

                    

                    echo "
                    
                    <div class='teams d-flex ".$ho."'>
                        <img src='https://via.placeholder.com/500x500.png?text=person' alt='".$id."' width='200px'>
                        <div class='d-flex flex-column' style='".$ho1." max-width: 700px;'><h3>".$name."</h3>
                        <h5>".$obj."</h5>
                        <p>".$bio."</p></div>
                    </div>";
                }

                $stmt->close();
                } else {
                // Handle the case where the statement preparation fails
                }

                }










                ?>

    <div class="mx-auto btna"><a href='#' id="" class='btnh' style='width: 250px; justify-content: center;'>More</a></div>

        </div>


            </div>

        


        <!-- projects preview containers -->
      <div class="contp d-flex flex-column mx-auto" style="max-width: 1500px;">
            <div class="proj-cont">
           <?php
        
            $sql = "SELECT * FROM projects";
            $result = $conn->query($sql);
            $rowsProd = $result->fetch_assoc();

            
           
            
            $i = 0;

            
            
            if ($result-> num_rows > 0) {
                do {
                    $id = $rowsProd['projid'];
                    $title = $rowsProd['projtitle'];
                    $budget = $rowsProd['projbudget'];
                    $image = $rowsProd['projimg'];
                    $startdate = $rowsProd['dstart'];
                    $plannedfinishdate = $rowsProd['pdfinish'];
                    $actualfinishdate = $rowsProd['dfinished'];
                    $sdescription = $rowsProd['projsdesk'];
                    $i++;

                    if ($i == 3 or $i == 4)
                       {
                           $cl = "d-none d-md-flex fles-column";
                       }
                       else
                       {
                           $cl = '';
                       }
                   echo " 
                   <div class='card proj ".$cl."' style='width: 18rem; margin-top: 50px;'>
                   <img src='".$image."' class='card-img-top' alt='project image' width='300px'>
                   <div class='card-body'>
                     <h5 class='card-title' style='text-decoration: underline;'>".$title."</h5>
                     <p class='card-text'>".$sdescription."</p>
                     <h5><strong>Budget: ".$budget."</strong></h5>
                     <a href='view.php?id=".$id."' class='btnh' style='width: 100px; text-align: center; justify-content: center;'>View</a>
                   </div>
                 </div>";
                


                 if ($i < 4){
                    continue;
                 }
                else{
                    break;
                }
                } while ($rowsProd = $result->fetch_assoc());
            }
            
            else {
                echo "Query failed!";
            } 

            ?>


                </div>
            <div class="mx-auto btna"><a href='portfolio.php' id="" class='btnh' style='width: 250px; justify-content: center;'>More Projects</a></div>
      </div>
        
        
        <!-- end of projects preview containers -->


        <!--write whole of contact us -->


 
                <form class="row container g-3">
                    <h1>Wanna get in touch?</h1>
        <div class="col-md-4">
            <label for="validationServer01" class="form-label">First name</label>
            <input type="text" class="form-control is-valid" id="validationServer01" value="" required>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationServer02" class="form-label">Last name</label>
            <input type="text" class="form-control is-valid" id="validationServer02" value="" required>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationServerUsername" class="form-label">Username</label>
            <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend3">@</span>
            <input type="text" class="form-control is-invalid" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                Please choose a username.
            </div>
            </div>
        </div>
        <div class="col-md-6">
            <label for="validationServer03" class="form-label">City</label>
            <input type="text" class="form-control is-invalid" id="validationServer03" aria-describedby="validationServer03Feedback" required>
            <div id="validationServer03Feedback" class="invalid-feedback">
            Please provide a valid city.
            </div>
        </div>
        <div class="col-md-3">
            <label for="validationServer04" class="form-label">State</label>
            <select class="form-select is-invalid" id="validationServer04" aria-describedby="validationServer04Feedback" required>
            <option selected disabled value="">Choose...</option>
            <option>...</option>
            </select>
            <div id="validationServer04Feedback" class="invalid-feedback">
            Please select a valid state.
            </div>
        </div>
        <div class="col-md-3">
            <label for="validationServer05" class="form-label">Zip</label>
            <input type="text" class="form-control is-invalid" id="validationServer05" aria-describedby="validationServer05Feedback" required>
            <div id="validationServer05Feedback" class="invalid-feedback">
            Please provide a valid zip.
            </div>
        </div>
        <div class="col-12">
            <div class="form-check">
            <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
            <label class="form-check-label" for="invalidCheck3">
                Agree to terms and conditions
            </label>
            <div id="invalidCheck3Feedback" class="invalid-feedback">
                You must agree before submitting.
            </div>
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit" name="submit">Submit form</button>
        </div>
        </form>


