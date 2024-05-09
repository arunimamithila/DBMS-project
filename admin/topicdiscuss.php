<?php
require_once '../assets/php/functions.php';
include "../assets/php/db_conn.php";
session_start();
$username = $_SESSION['username'];
$user_Email = $_SESSION['user_Email'];

$stmt = $conn->prepare('SELECT profile_pic_link FROM user_table WHERE username = ?');
$stmt->bind_param('s', $username);
$stmt->execute();
$profile_pic = $stmt->get_result()->fetch_assoc()['profile_pic_link'];
$title = $_GET['title'];
$description = $_GET['description'];
$topic_id = $_GET['topic_id'];



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UniCircle Create Circle</title>

  <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="../assets/css/topicdiscuss.css">
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
          <a href="#"><img src="<?php echo $profile_pic ?>" alt="" id="my-profile-pic"></a>
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
            <img src="<?php echo $profile_pic ?>" alt="">
            <div>
              <p class="pro-usrname"><?php echo $username ?>
                <span class="pro-mail"><?php echo $user_Email ?></span>
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

          <a href="../admin/circle.html" class="nav__link">
            <i class='bx bxs-adjust-alt nav__icon'></i>
            <span class="nav__name">Circles</span>
          </a>

          <a href="#" class="nav__link">
            <i class='bx bx-conversation nav__icon'></i>
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

      <div class="topic_container">

        <div class="topic-heading">
          <div class="topic">
            <h5><?php echo $title ?></h5>

          </div>

          <div class="upbeat">


            <div class="upbeat-btn btn bt-primary">
              <i class='bx bx-caret-up'></i>
            </div>
            <a class="" href="">0</a>

          </div>

        </div>

        <div class="topic-des">
          <p>
            <?php echo $description ?>
          </p>
        </div>

        <!-- <div class="reaction">
          <a href="">
            <i class='bx bx-bulb'></i>
            0
          </a>
        </div> -->

      </div>

      <div class="tag">
        <i class='bx bx-message'></i>
        <h5>Comments</h5>
      </div>

      <div class="space-line">

      </div>

      <div class="comments">
        <form action="../assets/php/postComment.php" method="post">
          <!-- <div class="create-comments">
            <div class="profile-img">
              <img class="pro-img rounded-circle" src="../assets/image/perfil.jpg" alt="">
            </div> -->

            <div class="com-section">
              <textarea class="description" placeholder="Comment Here" id="commentDesc" style="height: 70px" name="content"></textarea>

              <input type="hidden" name="topic_id" value="<?php echo $topic_id; ?>">
              <input type="hidden" name="title" value="<?php echo $title; ?>">
              <input type="hidden" name="description" value="<?php echo $description; ?>">


              <div class="button">
                <input class="btn btn-primary button" type="submit" value="Post Comment">
              </div>
            </div>
          </div>
        </form>

    
      </div>
    </div>

      <?php
      // Prepare an SQL statement to get the comments for the current topic
      $stmt = $conn->prepare("SELECT comments.*, user_table.profile_pic_link FROM comments INNER JOIN user_table ON comments.username = user_table.username WHERE comments.topic_id = ? ORDER BY comments.post_date DESC");
      $stmt->bind_param('i', $topic_id);

      // Execute the SQL statement
      $stmt->execute();

      // Get the result of the SQL statement
      $result = $stmt->get_result();

        
    

      // Loop through each row in the result
      while ($row = $result->fetch_assoc()) {
        // Generate the HTML for the comment
        echo '<div class="posted-comments">';
        echo '<div class="comment-card">';
        echo '<div class="user-info">';
        echo '<div class="profile-img">';
        echo '<img class="pro-img rounded-circle" src="' . $row['profile_pic_link'] . '" alt="">';
        echo '</div>';
        echo '<div class="user-des">';
        echo '<div class="user">' . $row['username'] . '</div>';
        echo '<div class="post-date">Posted on ' . $row['post_date'] . '</div>';
        echo '</div>';
        echo '<div class="upbeat">';
        echo '<div class="upbeat-btn btn bt-primary">';
        echo '<i class="bx bx-caret-up"></i>';
        echo '</div>';
        echo '<a class="" href="">' . $row['reactions'] . '</a>';
        echo '</div>';
        echo '</div>';
        echo '<div class="comment-des">';
        echo '<p>' . $row['comment'] . '</p>';
        echo '</div>';
        echo '<div class="actions">';
        echo '<div class="reply">';
        echo '<a href="#" class="reply-link"  onclick="toggleReplyForm(' . $row['id'] . ')><i class="bx bxs-share"></i> Reply</a>';
        echo '</div>';
        echo '<a href="#" class="reaction" data-id="' . $row['id'] . '"><i class="bx bx-bulb"></i> Reaction</a>';
        echo '</div>';
        echo '</div>';

                // Output reply form for main comment
            echo '<div id="reply-form-' . $row['id'] . '" class="reply-form" style="display: none;">';
            echo '<form action="../assets/php/postComment.php" method="post">';
            echo '<div class="create-comments">';
            echo '<div class="profile-img">';
            echo '<img class="pro-img rounded-circle" src="' . $row['profile_pic_link'] . '" alt="">';
            echo '</div>';
            echo '<div class="com-section">';
            echo '<textarea class="description" placeholder="Comment Here" id="commentDesc" style="height: 70px" name="content"></textarea>';
            echo '<input type="hidden" name="topic_id" value="' . $topic_id . '">';
            echo '<input type="hidden" name="title" value="' . $title . '">';
            echo '<input type="hidden" name="description" value="' . $description . '">';
            echo '<input type="hidden" name="parent_comment_id" value="' . $row['id'] . '">';
            echo '<div class="button">';
            echo '<input class="btn btn-primary button" type="submit" value="Post Comment">';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</form>';
            echo '</div>'; 
        echo '</div>';
        
          // Output nested replies if available
        if (!empty($nestedReplies)) {
          echo '<div class="nested-replies">';
          foreach ($nestedReplies as $nestedReply) {
              // Output nested reply HTML here...
              echo '<div class="nested-reply">';
              echo 'Nested Reply: ' . $nestedReply['reply']; // Example output, replace with your HTML structure
              echo '</div>';
          }
          echo '</div>';
      }

      echo '</div>'; // Close posted-comments div
    
       
      
      }
      ?>
    </div>
    </div>

  </main>
  <script>
    window.onload = function() {
      document.getElementById('commentDesc').value = '';
    };
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
   $(document).ready(function() {
    $('.reaction').click(function(e) {
        e.preventDefault();
        var commentId = $(this).data('id');
        $.ajax({
            url: '../assets/php/increase_reaction.php',
            type: 'post',
            data: {
                id: commentId
            },
            success: function(response) {
                location.reload();
            }
        });
    });

    function toggleReplyForm(commentId) {
        var replyForm = document.getElementById('reply-form-' + commentId);
        if (replyForm.style.display === 'none') {
            replyForm.style.display = 'block';
        } else {
            replyForm.style.display = 'none';
        }
    }
});

</script>


  <script src="../assets/js/projectcreate.js"></script>
</body>

</html>

