<?php
session_start();

include('connection.php');


if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../assets/css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Tabulation Admin Dashboard</title>
</head>
<body>
    <div class="container">
        <header>
            <nav class="justify-center align-center">
                <div>
                    <a href="dashboard.php">
                        <img src="../assets/images/ccs-logo.jpg" alt="">
                    </a>
                </div>
                <ul class="justify-center admin-ul">
                    <li>
                        <a href="cultural.php">Cultural Night Tabulation</a>
                    </li>
                    <li>
                        <a href="">Mr. & Ms. CCS</a>
                    </li>
                </ul>
            </nav>
        </header>

        <section class="">
            <div class="main-body">
                <h1>Mr. & Ms. CCS Tabulation</h1>
                <table id="applicants" class="mr-ms">
                    <tr>
                        <th>Contestant <br>Gender & Number</th>
                        <th>Contestant Name</th>
                        <th>Production Number</th>
                        <th>School Uniform</th>
                        <th>Futuristic Attire</th>
                        <th>Formal Attire</th>
                        <th>Q and A</th>
                        <th>Total</th>
                    </tr>
                    <?php

                        $judges = ['judge1', 'judge2', 'judge3'];
                        $judgeData = array();

                        // Retrieve data for each judge
                        foreach ($judges as $judge) {
                            $sql = "SELECT * FROM contestantname WHERE judgename = '$judge'";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    $judgeData[$judge][] = $row;
                                }
                            }
                        }

                            // Find the maximum number of rows among the judges' data
                            $maxRows = max(array_map('count', $judgeData));

                            for ($i = 0; $i < $maxRows; $i++) {
                                echo "<tr>";
                                // Display the contestantnum in the first column
                                if (isset($judgeData['judge1'][$i])) {
                                    echo "<td>" . $judgeData['judge1'][$i]['contestantnum'] . "</td>";
                                    echo "<td>" . $judgeData['judge1'][$i]['contestantname'] . "</td>";
                                } else {
                                    echo "<td>No Data</td>";
                                } 
                                   // Initialize the total score for this row
                                $pntotalScore = 0;

                                // Display the data for each judge and calculate the row's total score
                                foreach ($judges as $judge) {
                                    if (isset($judgeData[$judge][$i])) {
                                        $pnscore = (int)$judgeData[$judge][$i]['pntotal'];
                                        $pntotalScore += $pnscore / 3; // Add the judge's score to the total score
                                    } else {
                                        echo "<td>No Data</td>";
                                    }
                                }

                                // Display the row's total score in the last column
                                echo "<td>{$totalScore}</td>";

                                echo "</tr>";
                            }
                        ?>

                </table>
            </div>
        </section>
        <div class="logout-button">
            <a href="adminlogout.php"><button>Log out</button></a>
        </div>
    </div>

    <script>
    </script>
</body>
</html>


<?php

} else {
    header("Location: login.php");
    exit();
}
?>