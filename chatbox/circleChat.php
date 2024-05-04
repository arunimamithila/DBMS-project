<?php
session_start();
$username = $_SESSION['username'];
$circle_name = $_GET['circle_name'];
include '../assets/php/db_conn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoCircle Create Circle</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../assets/css/discussionhome.css">
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
                <div class="notification_icon"><i class='bx bx-bell' style='color:#ffffff'></i><span class="dot"><img
                            src="../assets/image/red_dot.png" alt=""></span></div>

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

                        <li class="add-bm"><i class="bx bx-underline" style='color:#ffffff'
                                data-feather="inbox"></i></i>
                            <p>University</p><span class="pull-right"><i class="bx bx-star" style='color:#ffffff'
                                    data-feather="star"></i></span>
                        </li>
                        <li class="add-bm"><i class="bx bx-shape-square" style='color:#ffffff'
                                data-feather="project"></i>
                            <p>Project</p><span class="pull-right"><i class="bx bx-star" style='color:#ffffff'
                                    data-feather="star"></i></span>
                        </li>
                        <li class="add-bm"><i class="bx bxs-adjust-alt" style='color:#ffffff' data-feather="circle"></i>
                            <p>Circle</p><span class="pull-right"><i class="bx bx-star" style='color:#ffffff'
                                    data-feather="star"></i></span>
                        </li>
                    </ul>

                </div>

                <div class="notification">
                    <ul class="noti_time">

                        <li class="add_noti"><i class='bx bx-bar-chart' style='color:#ffffff'
                                data-feather="project-noti"></i>
                            <p>Project Activity <br><span class="noti_time">10 minutes ago</span> </p>
                        </li>
                        <li class="add_noti"><i class='bx bxl-microsoft-teams' style='color:#ffffff'
                                data-feather="team-noti"></i>
                            <p>Team Aproval <br><span class="noti_time">20 minutes ago</span></p>
                        </li>
                        <li class="add_noti"><i class='bx bx-log-in-circle bx-rotate-180' style='color:#ffffff'
                                data-feather="circle-noti"></i>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <div class="wrapper">
        <div class="chatbox">
           
            <div class="chatbox__messages" id="chatboxMessages">
                <div class="message">
                    <img src="#" alt="Profile Picture" class="message__profile-pic">
                    <p class="message__text">Hello, this is a message!</p>
                </div>

                <!-- Messages will be appended here -->
            </div>
        </div>
        <form id="chatboxForm" class="chatbox__form">
            <input type="text" id="chatboxInput" class="chatbox__input" placeholder="Type a message...">
            <input type="text" class="destination" name="destination" value="<?php echo $circle_name; ?>" hidden>
            <button type="submit" class="chatbox__submit">Send</button>
        </form>
    </div>
</main>
<script>
   $(document).ready(function () {
    var current_username = '<?php echo $username;?>'; // Replace with the current user's username

    // Load messages every 1 second
    setInterval(function () {
        $.ajax({
            url: 'get_messages.php',
            data: { circle_name: $('.destination').val() },
            success: function (data) {
                var parsedData = JSON.parse(data); // Assuming the data is in JSON format
                var messagesHtml = '';
                for (var i = 0; i < parsedData.length; i++) {
                    var messageClass = parsedData[i].incoming_username === current_username ? 'message--outgoing' : 'message--incoming';
                    messagesHtml += '<div class="message ' + messageClass + '">';
                    messagesHtml += '<img class="profile-pic" src="' + parsedData[i].profile_image_link + '" alt="Profile Image">'; // Add profile image
                    messagesHtml += '<p>' + parsedData[i].message + '</p></div>'; // Create HTML for the message
                }
                $('#chatboxMessages').html(messagesHtml); // Update the chatbox with the messages
            }
        });
    }, 2000);
});

        // Send a new message
        $('#chatboxForm').on('submit', function (e) {
            e.preventDefault();

            $.ajax({
    type: 'POST',
    url: 'send_message.php',
    data: {
        message: $('#chatboxInput').val(),
        username: '<?php echo $username;?>', // Output the username as a string
        circle_name: '<?php echo $circle_name; ?>' // Replace with the actual group name
    },
    success: function() {
        console.log('AJAX request successful'); // Add this line
        $('#chatboxInput').val('');
    }
});
        });

</script>

    <!-- Add some styles for the chatbox -->
    <style>
        html, body, main {
  height: 90%;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center; /* Centers content horizontally */
  align-items: center; /* Centers content vertically */
}
.profile-pic {
    border-radius: 50%; /* This will make the image round */
    width: 50px; /* Adjust as needed */
    height: 50px; /* Adjust as needed */
    object-fit: cover; /* This will ensure the image covers the whole area */
    margin-right: 10px; /* This will add some space between the image and the message */
}

.wrapper {
  width: 100%;
  max-width: 800px; /* Set to the desired width */
  height: 100%;
}

.chatbox {
  width: 100%;
  height: 100%;
  border: 1px solid #ccc;
  display: flex;
  flex-direction: column;
}

.chatbox__messages {
  flex-grow: 1;
  overflow-y: auto;
  padding: 10px;
}

        .chatbox__form {
            display: flex;
            padding: 10px;
            border-top: 1px solid #ccc;
        }

        .chatbox__input {
            flex-grow: 1;
            margin-right: 10px;
        }
        .message--outgoing {
    text-align: right;
    background-color: #d1f7d1; /* Light green */
}

.message--incoming {
    text-align: left;
    background-color: #d1d1f7; /* Light blue */
}
    </style>

    <script src="../assets/js/projectcreate.js"></script>
   
</body>

</html>