<?php
session_start();
include '../assets/php/db_conn.php';

$username = $_SESSION['username'];

// Prepare a SQL statement to fetch the project info for this user
$stmt = $conn->prepare("SELECT * FROM projects WHERE projectAdmin = ?");

// Bind the username to the SQL statement
$stmt->bind_param('s', $username);

// Execute the SQL statement
$stmt->execute();

// Get the result
$result = $stmt->get_result();

// Fetch the data
$data = $result->fetch_assoc();

// Close the statement
$stmt->close();

// Close the database connection
$conn->close();


?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoCircle Project Home</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Delius&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="../assets/css/projecthome.css">
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
                                      
                                      <a href="../admin/homePage.php" class="nav__link active">
                                          <i class='bx bx-home nav__icon' ></i>
                                          <span class="nav__name">Home</span>
                                      </a>
          
                                      <a href="#" class="nav__link">
                                           <i class='bx bx-user nav__icon' ></i>
                                           <span class="nav__name">Profile</span>
                                      </a>
          
                                      <a href="#" class="nav__link">
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
          
                          <a href="#" class="nav__link nav__logout">
                          <i class='bx bx-log-out nav__icon' ></i>
                          <span class="nav__name">Log Out</span>
                          </a>
                        </nav>     
                    </div>



            <main class="main" id="mainContent">

               <div class="project_container">

                <div class="project_info">
                    <div class="project-banner">
                    <img src="<?php echo $data['fileUploadPath']; ?>" alt="">
                    </div>

                    <div class="project-details">
                        <label for="">Glass fiber reinforced concrete layout design</label>
                        <div class="project-member-info">
                            <ul class="pm-info">
           <li>Project admin : <span class="pm-details po"><?php echo $data['projectAdmin']; ?></span></li>
            <li>Category : <span class="pm-details ct"><?php echo $data['projectSelect']; ?></span></li>
            <li>Project Member : <span class="pm-details mem">none</span></li>
            <li>Created On : <span class="pm-details date"><?php echo $data['startDate']; ?></span></li>
            <li>Duration : <span class="pm-details duration">null</span></li>
        </ul>
                        </div>
                    </div>
                </div>

                <div class="project-settings">
                                          

                    <div class="add-mem btn btn-primary">                    
                      <i class='bx bx-plus-circle'></i>
                      <a class="add_link" href="#">add memeber</a>
                    </div>
  
  
                    <div class="publish btn btn-primary">                    
                      <i class='bx bx-link-external'></i>
                      <a class="add_link" href="#">publish in wall</a>
                    </div>

                    
                  <div class="roles">
                      <div class="line"></div>
                      <a href="" class="roles-link role"><i class='bx bx-user-pin'></i><span class="pj-role">admin</span></a>
                      <!-- <a href="" class="role"><i class='bx bx-face'></i></a> -->
                      <a href="" class="roles-link coin"><i class='bx bx-coin-stack' ></i><span class="pj-coin">30</span></a>
                      <a href="" class="roles-link rank"><i class='bx bx-line-chart'></i><span class="pj-rank">100</span></a>

                  </div>

               </div>


               <div class="project-workspace">

                <div class="workspace-container">

                </div>
              
                <footer>
                  <div class="nav-list">

                    <a class="nav-link" id="nav-overview" href=""><i class='bx bx-spreadsheet'></i>overview</a>
                    <a class="nav-link" id="nav-feedback" href=""><i class='bx bxs-checkbox-checked'></i>feed back</a>
                    <a class="nav-link" id="nav-calander" href=""><i class='bx bx-calendar' ></i>calander</a>
                    <a class="nav-link" id="nav-board" href=""><i class='bx bx-bar-chart-square'></i>board</a>
                    <a class="nav-link" id="nav-timeline" href=""><i class='bx bx-objects-vertical-center'></i>timeline</a>
                    <a class="nav-link" id="nav-addtask" href=""><i class='bx bx-message-square-add'></i>add task</a>

                  </div>
                </footer>



               </div>

               </div>
            </main>      
    


        <script src="../assets/js/projecthome.js"></script>
</body>
</html>
