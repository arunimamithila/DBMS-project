<?php
include '../assets/php/db_conn.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>search</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../assets/css/search.css">

</head>
<body>

      
        <form method="post" action="" id="searchForm">
            <div class="header_search">
                <i class='bx bx-arrow-back' onclick="goBack()"></i>
                <input type="search" placeholder="Search" class="header_input" id="search">
                <i class='bx bx-search' name="submit"></i>
            </div>
        </form>
       

         <div class="result-con" id="search-result">   
        </div>
     

        <script type="text/javascript">
            function goBack() {
                window.history.back();
            }

            $(document).ready(function() {
    $("#search").keyup(function() {
        var input = $(this).val();

        if(input != ""){
            $.ajax({
                url: "../assets/php/circle_search.php",
                method: "POST",
                data: { input: input },
                success: function(data) {
                    $("#search-result").css("display", ""); // Add this line
                    $("#search-result").html(data);
                    console.log(data);
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        } else {
            $("#search-result").css("display", "none");
        }
    });
});
        </script>


        

    
</body>
</html>