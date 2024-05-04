<?php
session_start();
$username = $_SESSION['username'];
include '../assets/php/db_conn.php';
$sql = "SELECT * FROM circle_table";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GoCircle Create Circle</title>

  <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="../assets/css/discussions.css">
</head>

<body>

  <!-- ========header============ -->

  <header class="header">


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

            <li class="add-bm"><i class="bx bx-underline" style='color:#ffffff' data-feather="inbox"></i></i>
              <p>University</p><span class="pull-right"><i class="bx bx-star" style='color:#ffffff' data-feather="star"></i></span>
            </li>
            <li class="add-bm"><i class="bx bx-shape-square" style='color:#ffffff' data-feather="project"></i>
              <p>Project</p><span class="pull-right"><i class="bx bx-star" style='color:#ffffff' data-feather="star"></i></span>
            </li>
            <li class="add-bm"><i class="bx bxs-adjust-alt" style='color:#ffffff' data-feather="circle"></i>
              <p>Circle</p><span class="pull-right"><i class="bx bx-star" style='color:#ffffff' data-feather="star"></i></span>
            </li>
          </ul>

        </div>

        <div class="notification">
          <ul class="noti_time">

            <li class="add_noti"><i class='bx bx-bar-chart' style='color:#ffffff' data-feather="project-noti"></i>
              <p>Project Activity <br><span class="noti_time">10 minutes ago</span> </p>
            </li>
            <li class="add_noti"><i class='bx bxl-microsoft-teams' style='color:#ffffff' data-feather="team-noti"></i>
              <p>Team Aproval <br><span class="noti_time">20 minutes ago</span></p>
            </li>
            <li class="add_noti"><i class='bx bx-log-in-circle bx-rotate-180' style='color:#ffffff' data-feather="circle-noti"></i>
              <p>Circle in <br><span class="noti_time">45 minutes ago</span></p>
            </li>

          </ul>

        </div>

        <div class="profile_dropdown">
          <div class="pro-des">
            <img src="../assets/image/perfil.jpg" alt="">
            <div>
              <p class="pro-usrname">user_name
                <span class="pro-mail">user1234@gmail.com</span>
              </p>
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

          <span class="nav__logo-name">
            <h4>GoCircle</h4>
          </span>
        </a>


        <div class="nav__list">

          <a href="../admin/homePage.php" class="nav__link active">
            <i class='bx bx-home nav__icon'></i>
            <span class="nav__name">Home</span>
          </a>

          <a href="../admin/profile.php" class="nav__link">
            <i class='bx bx-user nav__icon'></i>
            <span class="nav__name">Profile</span>
          </a>

          <a href="../admin/circle.php" class="nav__link">
            <i class='bx bxs-adjust-alt nav__icon'></i>
            <span class="nav__name">Circles</span>
          </a>

          <a href="./discussions.html" class="nav__link">
            <i class='bx bx-conversation nav__icon'></i>
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
              <i class='bx bx-compass nav__icon'></i>
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
        <i class='bx bx-log-out nav__icon'></i>
        <span class="nav__name">Log Out</span>
      </a>
    </nav>
  </div>



  <main class="main" id="mainContent">

    <div class="container">

      <div class="heading">

        <div class="discription">
          <h3>Discussion</h3>
          <p>Discuss in the GoCircle platform within and outside your
            <br>university circles. Also ask question, share your feedback,
            and more
          </p>
        </div>

        <div class="pic">
          <img src="../assets/image/dis.png" alt="">
        </div>
      </div>


      <div class="uni-discussion">

        <div class="title">
          <i class='bx bxs-chat'></i>
          <h5>Circles Discussion</h5>
        </div>

        <div class="card-container">
          <div class="dis-card">
            <div class="card-img ">

              <img src="../assets/image/bubble.png" alt="">
            </div>

            <div class="dis-name">
              <h6>General</h6>
              <a href="./discussionhome.html"><p>General chat for any university circle</p></a>
            </div>

          </div>

          <div class="dis-card">
            <div class="card-img adjust">

              <img src="../assets/image/ask.png" alt="">
            </div>

            <div class="dis-name">
              <h6>Questions & Answers</h6>
              <p>Get advice from your piers</p>
            </div>

          </div>

          <div class="dis-card">
            <div class="card-img">

              <img src="../assets/image/annouce.png" alt="">
            </div>

            <div class="dis-name">
              <h6>Annoucement</h6>
              <p>Look for your project teammate <br>
                also share your projects</p>
            </div>

          </div>

          <div class="dis-card">
            <div class="card-img">

              <img src="../assets/image/dice.png" alt="">
            </div>

            <div class="dis-name">
              <h6>Study Material</h6>
              <p>Share the study guid earn coins</p>
            </div>

          </div>
        </div>

      </div>

      <div class="top-discussion">

        <!-- <div class="title">
          <i class='bx bx-shape-polygon'></i>
          <h5>University Circles</h5>
        </div>


        <?php
if ($result->num_rows > 0) {
    echo '<div class="card-container">';
    while($row = $result->fetch_assoc()) {
        echo '<a href="../chatbox/discussionhome.php?circle_name=' . urlencode($row["circle_name"]) . '" class="card-link">
                <div class="dis-card">
                    <div class="card-img">
                        <img class="circle-uni-img rounded-circle" src="' . $row["circle_image_url"] . '" alt="">
                    </div>
                    <div class="dis-name">
                        <h6>' . $row["circle_name"] . '</h6>
                    </div>
                </div>
              </a>';
    }
    echo '</div>';
} else {
    echo "0 results";
}
?> -->
      

  </main>




  <script src="../assets/js/projectcreate.js"></script>
</body>

</html>
