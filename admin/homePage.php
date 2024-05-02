<?php
session_start();

include '../assets/php/db_conn.php';
$username = $_SESSION['username'];

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

  <link rel="stylesheet" href="../assets/css/homepage.css">

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
                  <p class="pro-usrname"><?php echo $username; ?></p> 
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
                                  
                                  <a href="#" class="nav__link active">
                                      <i class='bx bx-home nav__icon' ></i>
                                      <span class="nav__name">Home</span>
                                  </a>
      
                                  <a href="./profile.php" class="nav__link">
                                       <i class='bx bx-user nav__icon' ></i>
                                       <span class="nav__name">Profile</span>
                                  </a>
      
                                  <a href="./circle.php" class="nav__link">
                                      <i class='bx bxs-adjust-alt nav__icon' ></i>
                                      <span class="nav__name">Circles</span>
                                  </a>

                                  <a href="./discussions.php" class="nav__link">
                                    <i class='bx bx-conversation nav__icon' ></i>
                                    <span class="nav__name">Discussions</span>
                                </a>
      
                                  <a href="./competitions.html" class="nav__link">
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



              <!-- ============body main================ -->
              <main class="main" id="mainContent">
                <div class="container">
                  <div class="left">
                    <div class="calendar">
                      <div class="month">
                        <i class="fas fa-angle-left prev"></i>
                        <div class="date">April 2024</div>
                        <i class="fas fa-angle-right next"></i>
                      </div>
                      <div class="weekdays">
                        <div>Sun</div>
                        <div>Mon</div>
                        <div>Tue</div>
                        <div>Wed</div>
                        <div>Thu</div>
                        <div>Fri</div>
                        <div>Sat</div>
                      </div>
                      <div class="days">
                            <div class="day prev-date">30</div>
                            <div class="day prev-date">31</div>
                            <div class="day">1</div>
                            <div class="day">2</div>
                            <div class="day">3</div>
                            <div class="day">4</div>
                            <div class="day">5</div>
                            <div class="day">6</div>
                            <div class="day">7</div>
                            <div class="day event">8</div>
                            <div class="day">9</div>
                            <div class="day">10</div>
                            <div class="day">11</div>
                            <div class="day">12</div>
                            <div class="day">13</div>
                            <div class="day">14</div>
                            <div class="day today active">15</div>
                            <div class="day">16</div>
                            <div class="day">17</div>
                            <div class="day">18</div> 
                            <div class="day">19</div>
                            <div class="day">20</div>
                            <div class="day event">21</div>
                            <div class="day">22</div>
                            <div class="day">23</div>
                            <div class="day">24</div>
                            <div class="day">25</div>
                            <div class="day">26</div>
                            <div class="day">27</div>
                            <div class="day">28</div>
                            <div class="day">29</div>
                            <div class="day">30</div>
                            <div class="day next-date">1</div>
                            <div class="day next-date">2</div>
                            <div class="day next-date">3</div>
                          
                      </div>
                      <div class="goto-today">
                        <div class="goto">
                          <input type="text" placeholder="mm/yyyy" class="date-input" />
                          <button class="goto-btn">Go</button>
                        </div>
                        <button class="today-btn">Today</button>
                      </div>
                    </div>
                  </div>
                  <div class="right">
                    <div class="today-date">
                      <div class="event-day">Sun</div>
                      <div class="event-date">12th May 2024</div>
                    </div>
                    <div class="events"></div>
                    <div class="add-event-wrapper">
                      <div class="add-event-header">
                        <div class="title">Add Event</div>
                        <i class="fas fa-times close"></i>
                      </div>
                      <div class="add-event-body">
                        <div class="add-event-input">
                          <input type="text" placeholder="Event Name" class="event-name" />
                        </div>
                        <div class="add-event-input">
                          <input
                            type="text"
                            placeholder="Event Time From"
                            class="event-time-from"
                          />
                        </div>
                        <div class="add-event-input">
                          <input
                            type="text"
                            placeholder="Event Time To"
                            class="event-time-to"
                          />
                        </div>
                      </div>
                      <div class="add-event-footer">
                        <button class="add-event-btn">Add Event</button>
                      </div>
                    </div>
                  </div>
                  <button class="add-event">
                    <i class="fas fa-plus"></i>
                  </button>
                </div>

                <div class="activity_container">
                  <div class="welcome">
                    <div class="progress_container">
                      <div class="circular-progress" data-progress="<?php echo $progressPercentage; ?>">
                        <span class="progress-value">0%</span>
                      </div>
                      <span class="text">Activity Log</span>
                    </div>
  
                    <div class="title">
                      <p>Welcome,<span class="welcome_id"><?php echo $username; ?></span>!</p>
                      <span class="wel-t">Jump back in, or start something new.</span>
                    </div>

                  </div>
  
                    <div class="card_container">
                      <div class="card-body">
                          <div class="team"><i class='bx bx-network-chart'></i>
                            <h6>Team</h6>
                            <div class="count-progress">
                              <h5>0</h5><span>total joined</span>
                            </div>
                        </div>
                      </div>
    
                      <div class="card-body">
                        <div class="project"><i class="bx bx-shape-square"></i>
                          <h6>Project</h6>
                          <div class="count-progress">
                            <h5>0</h5><span>total finished</span>
                          </div>
                        </div>
                      </div>
    
    
                      <div class="card-body">
                        <div class="skill"><i class='bx bx-expand-horizontal'></i>
                          <h6>Skill</h6>
                          <div class="count-progress">
                            <h5>0</h5><span>total learned</span>
                          </div>
                        </div>
                      </div>
    
    
                      <div class="card-body">
                        <div class="Competition"><i class='bx bx-trophy'></i>
                          <h6>Competition</h6>
                          <div class="count-progress">
                            <h5>0</h5><span>total created</span>
                          </div>
                        </div>
                      </div>
                    </div>
  
                  
                </div>

 
                

              </main>
         

    
        <script src="../assets/js/homepage.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>
</html>
 