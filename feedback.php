<!DOCTYPE html>
<html>

<head>
    <title>Feedback Viewer</title>
    <link rel="stylesheet" href="css/feedback.css">
</head>

<body>
    <h1>Feedback Viewer</h1>

    <?php
    require_once('config.php');

    // Fetch feedback data from the database
    $sql = "SELECT * FROM feedback";
    $result = mysqli_query($db, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Display feedbacks in a table
        echo "<table>";
        echo "<tr>";
        echo "<th>Name</th>";
        echo "<th>Gender</th>";
        echo "<th>Email</th>";
        echo "<th>Message</th>";
        echo "<th>Time</th>";
        echo "</tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['gender'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['message'] . "</td>";
            echo "<td>" . $row['created_at'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No feedbacks found.";
    }

    // Close the database connection
    mysqli_close($db);
    ?>
</body>

</html>
