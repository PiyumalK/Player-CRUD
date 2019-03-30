<!DOCTYPE html>
<html>
    <head>
        <title>Player Profiles</title>
        <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="css/styles.css">

        <?php
            include 'connect.php';

            if($_GET){
                $action = $_GET['action'];
                echo '<script language="javascript">';
                if($action == "update") echo "alert('Profile successfully updated');";
                elseif($action == "delete") echo "alert('Profile successfully deleted');";
                echo '</script>';
            }
        ?>
    </head>
    
    <body>
        <div class="container">
            <table>
                <thead>
                    <tr>
                        <th>Player ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Kit Name</th>
                        <th>Age</th>
                        <th>Height</th>
                        <th>Weight</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Position</th>
                        <th>Role</th>
                        <th>Prefered Foot</th>
                    </tr>
                </thead>

                <?php
                    $sql = "SELECT * FROM player_details";
                    $result = $conn->query($sql);
                    while($row = $result->fetch_assoc()) {
                        $id = $row["player_id"];
                        $fname = $row["first_name"];
                        $lname = $row["last_name"];
                        $kname = $row["kit_name"];
                        $age = $row["age"];
                        $height = $row["height"];
                        $weight = $row["weight"];
                        $email = $row["email"];
                        $address = $row["address"];
                        $position = $row["position"];
                        $role = $row["role"];
                        $foot = $row["prefered_foot"];

                        echo "<tbody>";
                            echo "<tr>";
                                echo "<td>" . $id . "</td>";
                                echo "<td>" . $fname . "</td>";
                                echo "<td>" . $lname . "</td>";
                                echo "<td>" . $kname . "</td>";
                                echo "<td>" . $age . "</td>";
                                echo "<td>" . $height . "</td>";
                                echo "<td>" . $weight . "</td>";
                                echo "<td>" . $email . "</td>";
                                echo "<td>" . $address . "</td>";
                                echo "<td>" . $position . "</td>";
                                echo "<td>" . $role . "</td>";
                                echo "<td>" . $foot . "</td>";
                                echo "<td> <a class=\"button button-primary\" href=\"updateprofile.php?id=$id\">Update</a> </td>";
                                echo "<td> <a class=\"button button-primary\" href=\"process.php?id=$id\">Delete</a> </td>";
                            echo "</tr>";
                        echo "</tbody>";
                    }
                ?>
            </table>
        </div>

       <a class="button" href="index.php">Back to profiles menu...</a>
    </body>
</html>