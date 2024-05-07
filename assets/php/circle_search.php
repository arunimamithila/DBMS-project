<?php
include 'db_conn.php';


if (isset($_POST['input'])) {


    $input = $_POST['input'];
    $stmt = $conn->prepare("SELECT * FROM circle_table WHERE circle_name LIKE ? OR university_name LIKE ?");
    $input = '%' . $input . '%';
    $stmt->bind_param("ss", $input, $input);
    $stmt->execute();
    $result = $stmt->get_result();

    if (mysqli_num_rows($result) > 0) { ?>


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
                while ($row = mysqli_fetch_assoc($result)) {

                    $circle_name = $row['circle_name'];
                    $owner = $row['owner'];
                    $university_name = $row['university_name'];
                    $category = $row['category'];

                ?>

                    <tr>
                        <td>
                            <a href="../chatbox/circleChat.php?owner=<?php echo urlencode($owner); ?>&circle_name=<?php echo urlencode($circle_name); ?>">
                                <?php echo $circle_name; ?>
                            </a>
                        </td>
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
    } else {
        echo "<h6 class='text-danger text-center mt-3'> No data found </h6>";
    }
}
?>