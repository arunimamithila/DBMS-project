<?php
session_start();
include '../assets/php/db_conn.php';
$username = $_SESSION['username'];
$user_Email = $_SESSION['user_Email'];


$sql = "SELECT profile_pic_link, (SELECT COUNT(*) FROM circle_table WHERE username = '$username') as numCircle FROM user_table WHERE username = '$username'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$profilePic = $row['profile_pic_link'];
$numCircle = $row['numCircle'];



// First query
$stmt = $conn->prepare("SELECT * FROM circle_table WHERE owner = ? ORDER BY id DESC");
$stmt->bind_param('s', $username);
$stmt->execute();
$result1 = $stmt->get_result();

// Second query
$stmt2 = $conn->prepare("SELECT * FROM circle_table ORDER BY id DESC");
$stmt2->execute();
$result2 = $stmt2->get_result();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UniCircle Create a Circle</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../assets/css/circle.css">
</head>

<body>

    <!-- ========header============ -->

    <header class="header">


        <div class="header_container">

            <div class="header_container_left">

                <a href="#" class="header_logo"><span class="header_title">UniCircle</span></a>

                <div class="header_toggle">
                <i class='bx bxs-grid-alt'></i>
              </div>

              <!-- <form class="search-form" action="">
                    <div class="header_search">
                        <i class='bx bx-search' style='color:#ffffff'></i>
                        <input type="search" placeholder="Search" class="header_input">
                    </div>
                    <div id="search-results" style="display: none;"></div>
                </form> -->


                <form class="search-form" action="search.php">
    <div class="header_search">
        <i class='bx bx-search' style='color:#ffffff' id="search-icon"></i>
        <input type="search" placeholder="Search" class="header_input">
    </div>
</form>


            </div>

            <div class="header_container_right">

                <!-- <div class="bookmark_box"><i class='bx bx-sticker' style='color:#ffffff'></i></div>
                <div class="notification_icon"><i class='bx bx-bell' style='color:#ffffff'></i><span class="dot"><img src="../assets/image/red_dot.png" alt=""></span></div> -->

                <div class="profile_img">
                    <a href="#"><img src="<?php echo $profile_pic ?>" alt="" id="my-profile-pic"></a>
                </div>

            </div>

            <section>
                <!-- <div class="bookmarks">
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

                </div> -->

                <!-- <div class="notification">
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

                </div> -->

                <div class="profile_dropdown">
                    <div class="pro-des">
                        <img src="<?php echo $profilePic ?>" alt="">
                        <div>
                            <p class="pro-usrname"><?php echo $username; ?></p>
                            <span class="pro-mail"><?php echo $user_Email; ?></span>
                            </p>
                        </div>
                    </div>

                    <div class="line"> </div>

                    <div class="follow">
                        <div class="follow-c">
                            <span class="fol-count"><?php echo $numCircle?></span>
                            <span class="fc">Circle_in</span>
                        </div>

                        <!-- <div class="line-two"> </div>

                        <div class="fol-team">
                            <span class="team-count">10 </span>
                            <span class="tc">Joined_team</span>

                        </div> -->
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
                        <h4>UniCircle</h4>
                    </span>
                </a>


                <div class="nav__list">

                    <a href="./homePage.php" class="nav__link active">
                        <i class='bx bx-home nav__icon'></i>
                        <span class="nav__name">Home</span>
                    </a>

                    <a href="./profile.php" class="nav__link">
                        <i class='bx bx-user nav__icon'></i>
                        <span class="nav__name">Profile</span>
                    </a>

                    <a href="./circle.php" class="nav__link">
                        <i class='bx bxs-adjust-alt nav__icon'></i>
                        <span class="nav__name">Circles</span>
                    </a>

                    <a href="./discussions.php" class="nav__link">
                        <i class='bx bx-conversation nav__icon'></i>
                        <span class="nav__name">Discussions</span>
                    </a>

                    <a href="./competitions.php" class="nav__link">
                        <i class='bx bx-trophy nav__icon'></i>
                        <span class="nav__name">Compititions</span>
                    </a>

                    <!-- <a href="#" class="nav__link">
                        <i class='bx bxs-graduation nav__icon'></i>
                        <span class="nav__name">Learn</span>
                    </a>

                    <a href="#" class="nav__link">
                        <i class='bx bxs-network-chart nav__icon'></i>
                        <span class="nav__name">Team</span>
                    </a> -->


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
                                <!-- <a href="#" class="nav__dropdown-item">Projects wall</a> -->
                            </div>
                        </div>
                    </div>


                    <!-- <a href="#" class="nav__link">
                        <i class='bx bx-medal nav__icon'></i>
                        <span class="nav__name">Rank</span>
                    </a> -->


                    <!-- <div class="nav__items">
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
                </div> -->
            </div>

            <a href="../assets/php/logout_process.php" class="nav__link nav__logout">
                <i class='bx bx-log-out nav__icon'></i>
                <span class="nav__name">Log Out</span>
            </a>
        </nav>
    </div>



    <main class="main" id="mainContent">

        <div class="main-body">

            <div class="canvas-body">

                <div class="glassy_overlay">
                    <canvas id="canvas"></canvas>
                </div>

            </div>

            <div class="circle-body">

                <div class="create-circle btn btn-primary">
                    <i class='bx bx-plus-circle'></i>
                    <a class="add_link" href="circlecreate.php">create </a>
                </div>



                <div class="group">
                    <h5>My Circles</h5>

                    <div class="create-wrapper">


                        <?php

                        if ($result1->num_rows > 0) {
                            // output data of each row
                            while ($data = $result1->fetch_assoc()) {
                                echo '<a href="../chatbox/circleChat.php?circle_name=' . urlencode($data["circle_name"]) . '">';
                                echo '<div class="mycircle">';
                                echo '<img class="circle-img" src="' . $data["circle_image_url"] . '" alt="">';
                                echo '<div class="header__img" id="my-circle-picture">';
                                echo '<img class="circle-uni-img rounded-circle" src="' . $data["uni_img"] . '" alt="">';
                                echo '</div>';
                                echo '<div class="para">';
                                echo '<p>' . $data["circle_name"] . '</p>';
                                echo '</div>';
                                echo '</div>';
                                echo '</a>';
                            }
                        } else {
                            echo "No circles found";
                        }
                        ?>



                    </div>

                </div>


                <div class="group">
                    <h5>All Circles</h5>

                    <div class="all-circle">

                        <?php

                        if ($result2->num_rows > 0) {
                            // output data of each row
                            while ($data2 = $result2->fetch_assoc()) {
                                echo '<a href="../chatbox/circleChat.php?circle_name=' . urlencode($data2["circle_name"]) . '">';


                                echo '<div class="mycircle">';
                                echo '<img class="circle-img" src="' . $data2["circle_image_url"] . '" alt="">';
                                echo '<div class="header__img" id="my-circle-picture">';
                                echo '<img class="circle-uni-img rounded-circle" src="' . $data2["uni_img"] . '" alt="">';
                                echo '</div>';
                                echo '<div class="para">';
                                echo '<p>' . $data2["circle_name"] . '</p>';
                                echo '</div>';
                                echo '</div>';
                                echo '</a>';
                            }
                        } else {
                            echo "No circles found";
                        }

                        ?>
                    </div>
                </div>


            </div>



        </div>



    </main>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.header_input').on('input', function() {
                var query = $(this).val();
                if (query.length > 0) {
                    $.ajax({
                        url: '../assets/php/searchCircle.php',
                        method: 'POST',
                        data: {
                            query: $('.header_input').val()
                        }, // Ensure 'query' key is included in the data
                        success: function(data) {
                            // Parse the JSON data
                            var jsonData = JSON.parse(data);

                            // Check for errors
                            if (jsonData.error) {
                                console.error(jsonData.error);
                                return;
                            }
                            // Clear the search results
                            $('#search-results').empty();

                            // Loop through each item in the data
                            $.each(jsonData, function(index, item) {
                                // Create a new div for each item
                                var div = $('<div>');

                                // Create HTML for the circle
                                var html = '<img src="' + item.circle_image_url + '" class="search-profile-image">';
                                html += '<h2>' + item.circle_name + '</h2>';

                                // Set the HTML of the div
                                div.html(html);

                                // Append the div to the search results
                                $('#search-results').append(div);
                            });

                            // Show the search results
                            $('#search-results').show();
                        }
                    });
                } else {
                    $('#search-results').hide();
                }
            });
        });
    </script> -->

    
    <script>    
         document.getElementById('search-icon').addEventListener('click', function() {
        document.querySelector('.search-form').submit();
    });
    </script>

    <!-- <style>
        .search-profile-image {
            border-radius: 50%;
            max-width: 100px;
            /* Adjust as needed */
            max-height: 100px;
            /* Adjust as needed */
        }
    </style> -->


    <script src="../assets/js/circle.js"></script>
</body>

</html>