<?php
include '../assets/php/db_conn.php';


if(isset($_POST['input'])){

    $input = $_POST['input'];
    $query = "SELECT * FROM circle_table WHERE circle_name LIKE '{$input}%'";

    $result = mysqli_query($con, $query);

    if(mysqli_num_rows($result) > 0){?>


        <table class="table table-dark table-striped-columns">
                    
            <thead>
                <tr>
                    <th>Circle Name</th>
                    <th>Owner</th>
                    <th>University Name</th>
                    <th>Category</th>
                    
                </tr>

            </tbody>

            <tbody>
                <?php
                    while($row = mysqli_fetch_assoc($result)){

                        $circle_name = $row['circle_name'];
                        $owner = $row['owner'];
                        $university_name = $row['university_name'];
                        $category = $row['category'];
                    
                ?>

                <tr>
                    <td> <?php echo $circle_name ; ?></td>
                    <td> <?php echo $owner; ?></td>
                    <td> <?php echo $university_name; ?></td>
                    <td> <?php echo $category; ?></td>
                    
                </tr>
                <?php

                }

             ?>   
            </tbody>
                
        </table> 
        <?php
    }
    else{
        echo "<h6 class='text-danger text-center mt-3'> No data found </h6>";
    }

}
?>