
<?php
session_start();

include '../assets/php/db_conn.php';
$username = $_SESSION['username'];

$stmt = $conn->prepare('SELECT * FROM user_table WHERE username = ?');
$stmt->bind_param('s', $username);
$stmt->execute();

$result = $stmt->get_result();
$data = $result->fetch_assoc();


$stmt->close();
$conn->close();


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GoCircle homepage</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="../assets/css/profile.css">

</head>

<body>
      <!-- ========header============ -->

      <header class = "header">

        <div class="header_container">

          <div class="header_container_left">

              <a href="#" class="header_logo"><span class="header_title">GoCircle</span></a>
            
              <!-- <div class="header_toggle">
                <i class='bx bxs-grid-alt'></i>
              </div> -->

              <form class="search-form" action="">
                <div class="header_search">
                  <i class='bx bx-search' style='color:#ffffff'></i>
                  <input type="search" placeholder="Search" class="header_input">            
                </div>
              </form>

          </div>

          <div class="header_container_right">
            
              <div class="bookmark_box"><i class='bx bx-sticker' style='color:#ffffff'></i></div>
              <div class="notification_icon"><i class='bx bx-bell' style='color:#ffffff'></i><span class="dot"><img src="../assets/image/red_dot.png" alt=""></span></div>
          
              <div class="profile_img">
                <a href="#"><img src="../assets/image/perfil.jpg" alt="" id="my-profile-pic"></a>
              </div>
              
          </div>

          <section>
            <div class="bookmarks">
              <ul class="book_dropdown">
                <li class="bm-search">
                  <form class="search-form2" action="">
                    <div class="bookmark_search">
                      <i class='bx bx-search header__icon' style='color:#ffffff'></i>
                      <input type="search" placeholder="search for bookmark" class="header_input">
                    </div>
                  </form>
                </li>
  
                <li class="add-bm"><i class="bx bx-underline" style='color:#ffffff' data-feather="inbox"></i></i><p>University</p><span class="pull-right"><i class="bx bx-star" style='color:#ffffff' data-feather="star"></i></span></li>
                <li class="add-bm"><i class="bx bx-shape-square" style='color:#ffffff' data-feather="project"></i><p>Project</p><span class="pull-right"><i class="bx bx-star" style='color:#ffffff' data-feather="star"></i></span></li>
                <li class="add-bm"><i class="bx bxs-adjust-alt" style='color:#ffffff' data-feather="circle"></i><p>Circle</p><span class="pull-right"><i class="bx bx-star" style='color:#ffffff' data-feather="star"></i></span></li>
              </ul>
  
            </div>
  
             <div class="notification">
                <ul class="noti_time">
  
                  <li class="add_noti"><i class='bx bx-bar-chart' style='color:#ffffff' data-feather="project-noti"></i><p>Project Activity <br><span class="noti_time">10 minutes ago</span> </p></li>
                  <li class="add_noti"><i class='bx bxl-microsoft-teams' style='color:#ffffff' data-feather="team-noti"></i><p>Team Aproval <br><span class="noti_time">20 minutes ago</span></p> </li>
                  <li class="add_noti"><i class='bx bx-log-in-circle bx-rotate-180' style='color:#ffffff' data-feather="circle-noti"></i><p>Circle in <br><span class="noti_time">45 minutes ago</span></p> </li>
  
                </ul>
  
              </div>
  
              <div class="profile_dropdown">
                <div class="pro-des">
                  <img src="../assets/image/perfil.jpg" alt="">
                <div>
                  <p class="pro-usrname">user_name 
                  <span class="pro-mail">user1234@gmail.com</span></p>
                </div>
                </div>
  
                <div class="line"> </div>
  
                <div class="follow">
                  <div class="follow-c">
                    <span class="fol-count">09</span>
                    <span class="fc">Circle_in</span>
                  </div>
  
                  <div class="line-two"> </div>
                  
                  <div class="fol-team">
                    <span class="team-count">10 </span>
                    <span class="tc">Joined_team</span>
                 
                  </div>
                </div>
                
              </div>
  
          </section>
          

        </header>




                <!--========== NAV ==========-->
                <div class="nav" id="navbar">
                  <nav class="nav__container">

                      <div>
                          <a href="#" class="nav__link nav__logo">
                             <!-- <img src="./img/Go.svg" alt=""> -->
                             <img src="../assets/image/gocircle_logo.png">
  
                              <span class="nav__logo-name"> <h4>GoCircle</h4></span>
                          </a>
                  
          
                          <div class="nav__list">
                                  
                                  <a href="./homePage.php" class="nav__link active">
                                      <i class='bx bx-home nav__icon' ></i>
                                      <span class="nav__name">Home</span>
                                  </a>
      
                                  <a href="./profile.php" class="nav__link">
                                       <i class='bx bx-user nav__icon' ></i>
                                       <span class="nav__name">Profile</span>
                                  </a>
      
                                  <a href="./circle.html" class="nav__link">
                                      <i class='bx bxs-adjust-alt nav__icon' ></i>
                                      <span class="nav__name">Circles</span>
                                  </a>

                                  <a href="#" class="nav__link">
                                    <i class='bx bx-conversation nav__icon' ></i>
                                    <span class="nav__name">Discussions</span>
                                </a>
      
                                  <a href="#" class="nav__link">
                                      <i class='bx bx-trophy nav__icon'></i>
                                      <span class="nav__name">Compititions</span>
                                  </a>
      
                                  <a href="#" class="nav__link">
                                      <i class='bx bxs-graduation nav__icon'></i>
                                      <span class="nav__name">Learn</span>
                                  </a>
      
                                  <a href="#" class="nav__link">
                                      <i class='bx bxs-network-chart nav__icon'></i>
                                      <span class="nav__name">Team</span>
                                  </a>
      
                                  <div class="nav__dropdown">
                                    <a href="../admin/project.php" class="nav__link"> 
                                      <i class="bx bx-shape-square nav__icon"></i>
                                        <span class="nav__name">Project</span>
                                        <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                    </a>
    
                                        <div class="nav__dropdown-collapse">
                                          <div class="nav__dropdown-content">
                                            <a href="../admin/project.php" class="nav__dropdown-item">My projects</a>
                                            <a href="../admin/projectcreate.html" class="nav__dropdown-item">Create</a>
                                            <a href="../admin/projecthome.php" class="nav__dropdown-item">Workspace</a>
                                            <a href="#" class="nav__dropdown-item">Projects wall</a>
                                        </div>
                                    </div>
                                  </div>
                                  <a href="#" class="nav__link">
                                    <i class='bx bx-medal nav__icon'></i>
                                    <span class="nav__name">Rank</span>
                                  </a>
                              
          
                              <div class="nav__items">
                                  <h3 class="nav__subtitle">Menu</h3>
          
                                  <div class="nav__dropdown">
                                      <a href="#" class="nav__link">
                                          <i class='bx bxs-bar-chart-alt-2 nav__icon'></i>
                                          <span class="nav__name">Activity</span>
                                          <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                      </a>
      
                                      <div class="nav__dropdown-collapse">
                                          <div class="nav__dropdown-content">
                                              <a href="#" class="nav__dropdown-item">Recent Event</a>
                                              <a href="#" class="nav__dropdown-item">Host a Competition</a>
                                              <a href="#" class="nav__dropdown-item">Your work</a>
                                              <a href="#" class="nav__dropdown-item">Blog</a>
                                              <a href="#" class="nav__dropdown-item">CV</a>
                                          </div>
                                      </div>
      
                                  </div>
      
                                  <a href="#" class="nav__link">
                                      <i class='bx bx-compass nav__icon' ></i>
                                      <span class="nav__name">Explore</span>
                                  </a>
                                  <a href="#" class="nav__link">
                                      <i class='bx bx-book-reader nav__icon'></i>
                                      <span class="nav__name">Study plan</span>
                                  </a>
                              </div>
                          </div>
                      </div>
      
                      <a href="../assets/php/logout_process.php" class="nav__link nav__logout">
                        <i class='bx bx-log-out nav__icon' ></i>
                        <span class="nav__name">Log Out</span>
                    </a>
                    </nav>     
              </div>


              <!-- ================main================ -->

              <main>

                    <div class="profile-container">

                        <div class="profile_info">
                            <div class="profile-banner">
                                <img src="../assets/image/profile/bg-profile.jpg" alt="">
                            </div>
        
                            <div class="user-details">
<<<<<<< HEAD:admin/profile.php
                                <div class="title">
                                    <div class="avatar"><img class="profile_img rounded-circle" src="../assets/image/perfil.jpg" alt=""></div>
                                    <h4><?php echo '$username' ?></h4>
                                    <h5>root circle</h5>
                                    <a class="root_circle" href="">
                                        <h6><?php echo $data['University']?></h6>
                                    </a>
                                </div>
=======
                                <ul class="title">
                                    <li><div class="avatar"><img class="avatar_img rounded-circle" src="../assets/image/perfil.jpg" alt=""></div></li>
                                    <li><span class="username">username</span></li>
                                    <li><span class="rc">root circle</span></li>
                                    <li>
                                      <a class="root_circle" href="">
                                       <h6>United International University</h6>
                                      </a>
                                   </li>
                                </ul>
>>>>>>> b1c89bee6417d08c29352504ce495f5280b8021d:admin/profile.html

                                <div class="line2"> </div>

                                <div class="user-info">
                                    <ul class="info-card">
                                        <li>
                                            <div class="fol">
                                                <span class="count" id="fol-count">09</span>
                                                <span class="f-lable">Circle_in</span>
                                              </div>
                                        </li>

                                        <li><div class="line-s"></div></li>

                                        <li>
                                            <div class="fol">
                                                <span class="count" id="team-count">10 </span>
                                                <span class="f-lable">Joined_team</span>
                                             
                                              </div>
                                        </li>

                                        <li><div class="line-s"></div></li>

                                        <li>
                                            <div class="fol">
                                                <span class="count" id="comp-count">0 </span>
                                                <span class="f-lable">Competetion</span>
                                             
                                              </div>
                                        </li>
                                      </ul>
                                </div>

                            </div>
                        </div>



                        <div class="row2">

                          <div class="aside">
                            <div class="line3"></div>
                            <div class="aboutme">
                                <h5>About me</h5>
                            

                              
                                <ul>
<<<<<<< HEAD:admin/profile.php
                                    <li>
                                        <div class="icon"><i class='bx bxs-adjust-alt nav__icon' ></i></div>
                                        <h5>root circle</h5>
                                        <span class="rootcircle_name" name="rootcircle_name"><?php echo $data['University']?></span>
                                    </li>

                                    <li>
                                        <div class="icon"><i class='bx bxs-book-alt'></i></div>
                                        <h5>study</h5>
                                        <span class="study" name="study"><?php echo $data['study']?></span>
                                    </li>

                                    <li>
                                        <div class="icon"><i class='bx bxs-map'></i></div>
                                        <h5>lives</h5>
                                        <span class="lives" name="lives"><?php echo $data['lives']?></span>
                                    </li>

                                    <li>
                                        <div class="icon"><i class='bx bx-coin-stack' ></i></div>
                                        <h5><?php echo $data['coin_earned']?></h5>
                                        <span class="coin_earned" name="coin_earned"><?php echo $data['coin_earned']?></span>
                                    </li>

                                    <li>
                                        <div class="icon"><i class='bx bx-line-chart'></i></div>
                                        <h5><?php echo $data['total_rank']?></h5>
                                        <span class="total_rank" name="total_rank"><?php echo $data['total_rank']?></span>
=======

                                    <li class="col">

                                            <div class="icon">
                                              <i class='bx bxs-adjust-alt'></i>
                                            </div>UIU
                                          
                                    </li>

                                    <li class="col">
                                      <div class="icon">
                                        <i class='bx bxs-book-alt'></i>
                                      </div>
                                       computer science
                                    </li>

                                    <li class="col">
                                      
                                        <div class="icon">
                                          <i class='bx bxs-map'></i>
                                        </div>
                                        Dhaka
                                    </li>

                                    <li class="col">
                                      
                                        <div class="icon">
                                          <i class='bx bx-coin-stack'></i>
                                        </div>
                                        0
                                      
                                      </li>

                                    <li class="col">
                                      
                                          <div class="icon"><i class='bx bx-line-chart'></i></div>
                                         0
>>>>>>> b1c89bee6417d08c29352504ce495f5280b8021d:admin/profile.html
                                    </li>
                                </ul>

                                <div class="edit btn btn-primary">                    
                                    <i class='bx bxs-edit' ></i>
                                    <a class="edit_link" href="#">Edit</a>
                                </div>
                                
                            </div>

                            <div class="line4"></div>
                            <div class="mycircles">
                              <h5>My Circles</h5>
                              
                                <ul class="circle-show">
                                   <li>
                                        <div class="circle-img">
                                            <img class="circle_img rounded-circle" src="../assets/image/buet.svg" alt="">
                                        </div>
                                        <div class="circle-name">buet champion league</div>
                                   </li>

                                   <li>
                                        <div class="circle-img">
                                            <img class="circle_img rounded-circle" src="../assets/image/ai_uiu.png" alt="">
                                        </div>
                                        <div class="circle-name">uiu freshers of AI</div>
                                   </li>

                                </ul>

                            </div>
                        </div>


                        <div class="middle-container">

                          <div class="create-post btn btn-primary">                    
                            <i class='bx bx-plus-circle'></i>
                            <a class="add_link" href="#">create post</a>
                          </div>
                          
                        
                                <div class="post-card">
                                    <div class="post-header">
                                      <div class="media"><img class="postu-img rounded-circle" src="../assets/image/perfil.jpg" alt="">                            
                                            <div class="media-body">
                                                <h5 class="user-name">Emay Walter</h5>
                                                <h6 class="post-time">22 Hours ago</h6>
                                            </div>
                                      </div>

                                    </div>


                                    <div class="post-body">
                                        <div class="post-banner">
                                            <img src="../assets/image/profile/post1.jpg" alt="">
                                        </div>

                                      <div class="post-react">
                                        <ul>
                                          <li><img class="rounded-circle" src="../assets/image/user/3.jpg" alt=""></li>
                                          <li><img class="rounded-circle" src="../assets/image/user/5.jpg" alt=""></li>
                                          <li><img class="rounded-circle" src="../assets/image/user/1.jpg" alt=""></li>
                                        </ul>
                                        <h6>+5 people react this post</h6>
                                      </div>
                                      
                                      <div class="post-text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.                                     </p>
                                      </div>


                                      <ul class="post-reaction">
                                        <li>
                                          <label><a href="#"><i class='bx bx-album'></i>circling<span class="counter">50</span></a></label>
                                        </li>
                                        <li>
                                          <label><a href="#"><i class='bx bx-message-square'></i>Comment<span class="counter">70</span></a></label>
                                        </li>
                                        <li>
                                          <label><a href="#"><i class='bx bx-share-alt'></i>share<span class="counter">20</span></a></label>
                                        </li>
                                      </ul>
                                    </div>
                                </div>


                        </div>

                        </div>


                        </div>
                            
                          

                    
                    


              </main>
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
              <script>
        $(document).ready(function(){
            $(".edit").click(function(){
                if ($(".edit_link").text() == "Edit") {
                    // Change text to input fields
                    $(".aboutme span").each(function(){
                        var content = $(this).text();
                        $(this).replaceWith('<input type="text" class="editable" value="' + content + '" />');
                    });

                    // Change "Edit" button to "Save"
                    $(".edit_link").text("Save");
                } else {
                    // Prepare data for AJAX request
                    var data = {};
                    $(".aboutme .editable").each(function(){
                        var key = $(this).attr('class').split(' ')[0]; // Get the first class of the span element
                        var value = $(this).val();
                        data[key] = value;
                    });

                    // Send AJAX request
                    $.ajax({
                        url: '../assets/php/profileEdit.php',
                        type: 'post',
                        data: data,
                        success: function(response) {
                            // Handle response here
                            console.log(response);
                        }
                    });

                    // Change input fields back to text
                    $(".aboutme input").each(function(){
                        var content = $(this).val();
                        $(this).replaceWith('<span>' + content + '</span>');
                    });

                    // Change "Save" button back to "Edit"
                    $(".edit_link").text("Edit");
                }
            });
        });
    </script>
              <script src="../assets/js/profile.js"></script>

      </body>
      </html>              