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
                    <a href="../admin/dashboard.php">
                        <img src="../assets/images/ccs-logo.jpg" alt="">
                    </a>
                </div>
                <ul class="justify-center admin-ul">
                    <li>
                        <a href="">Cultural Night Tabulation</a>
                    </li>
                    <li>
                        <a href="ms.php">Mr. & Ms. CCS</a>
                    </li>
                </ul>
            </nav>
        </header>


        <section class="">
            <div class="main-body cultural-night">
                <h1>CULTURAL NIGHT</h1>
                <table id="applicants">
                    <h2>Wanna Bee Overall</h2>
                    <tr>
                        <th>House Name</th>
                        <th>Judge 1</th>
                        <th>Judge 2</th>
                        <th>Judge 3</th>
                        <th>Total</th>
                        <?php

                            $judges = ['judge1', 'judge2', 'judge3'];
                            $judgeData = array();

                            // Retrieve data for each judge
                            foreach ($judges as $judge) {
                                $sql = "SELECT judgename, housename, Total FROM wannabee WHERE judgename = '$judge'";
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

                                    // Display the housename in the first column
                                    if (isset($judgeData['judge1'][$i])) {
                                        echo "<td>{$judgeData['judge1'][$i]['housename']}</td>";
                                    } else {
                                        echo "<td>No Data</td>";
                                    }

                                    // Initialize the total score for this row
                                    $totalScore = 0;

                                    // Display the data for each judge and calculate the row's total score
                                    foreach ($judges as $judge) {
                                        if (isset($judgeData[$judge][$i])) {
                                            $score = (int)$judgeData[$judge][$i]['Total'];
                                            $totalScore += $score / 3; // Add the judge's score to the total score
                                            echo "<td>{$score}</td>";
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
                <table id="applicants">
                    <h2>Spoken Poetry Overall</h2>
                    <tr>
                        <th>House Name</th>
                        <th>Judge 1</th>
                        <th>Judge 2</th>
                        <th>Judge 3</th>
                        <th>Total</th>
                        <?php

                            $judges = ['judge1', 'judge2', 'judge3'];
                            $judgeData = array();

                            // Retrieve data for each judge
                            foreach ($judges as $judge) {
                                $sql = "SELECT judgename, housename, total FROM spoken WHERE judgename = '$judge'";
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

                                    // Display the housename in the first column
                                    if (isset($judgeData['judge1'][$i])) {
                                        echo "<td>{$judgeData['judge1'][$i]['housename']}</td>";
                                    } else {
                                        echo "<td>No Data</td>";
                                    }

                                    // Initialize the total score for this row
                                    $totalScore = 0;

                                    // Display the data for each judge and calculate the row's total score
                                    foreach ($judges as $judge) {
                                        if (isset($judgeData[$judge][$i])) {
                                            $score = (int)$judgeData[$judge][$i]['total'];
                                            $totalScore += $score / 3; // Add the judge's score to the total score
                                            echo "<td>{$score}</td>";
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
                <table id="applicants">
                    <h2>Acoustic Band Overall</h2>
                    <tr>
                        <th>House Name</th>
                        <th>Judge 1</th>
                        <th>Judge 2</th>
                        <th>Judge 3</th>
                        <th>Total</th>
                        <?php

                            $judges = ['judge1', 'judge2', 'judge3'];
                            $judgeData = array();

                            // Retrieve data for each judge
                            foreach ($judges as $judge) {
                                $sql = "SELECT judgename, housename, total FROM acoustic WHERE judgename = '$judge'";
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

                                    // Display the housename in the first column
                                    if (isset($judgeData['judge1'][$i])) {
                                        echo "<td>{$judgeData['judge1'][$i]['housename']}</td>";
                                    } else {
                                        echo "<td>No Data</td>";
                                    }

                                    // Initialize the total score for this row
                                    $totalScore = 0;

                                    // Display the data for each judge and calculate the row's total score
                                    foreach ($judges as $judge) {
                                        if (isset($judgeData[$judge][$i])) {
                                            $score = (int)$judgeData[$judge][$i]['total'];
                                            $totalScore += $score / 3; // Add the judge's score to the total score
                                            echo "<td>{$score}</td>";
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
                <table id="applicants">
                    <h2>Duo Overall</h2>
                    <tr>
                        <th>House Name</th>
                        <th>Judge 1</th>
                        <th>Judge 2</th>
                        <th>Judge 3</th>
                        <th>Total</th>
                        <?php

                            $judges = ['judge1', 'judge2', 'judge3'];
                            $judgeData = array();

                            // Retrieve data for each judge
                            foreach ($judges as $judge) {
                                $sql = "SELECT judgename, housename, total FROM duo WHERE judgename = '$judge'";
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

                                    // Display the housename in the first column
                                    if (isset($judgeData['judge1'][$i])) {
                                        echo "<td>{$judgeData['judge1'][$i]['housename']}</td>";
                                    } else {
                                        echo "<td>No Data</td>";
                                    }

                                    // Initialize the total score for this row
                                    $totalScore = 0;

                                    // Display the data for each judge and calculate the row's total score
                                    foreach ($judges as $judge) {
                                        if (isset($judgeData[$judge][$i])) {
                                            $score = (int)$judgeData[$judge][$i]['total'];
                                            $totalScore += $score / 3; // Add the judge's score to the total score
                                            echo "<td>{$score}</td>";
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
                <table id="applicants">
                    <h2>Solo Overall</h2>
                    <tr>
                        <th>House Name</th>
                        <th>Judge 1</th>
                        <th>Judge 2</th>
                        <th>Judge 3</th>
                        <th>Total</th>
                        <?php

                            $judges = ['judge1', 'judge2', 'judge3'];
                            $judgeData = array();

                            // Retrieve data for each judge
                            foreach ($judges as $judge) {
                                $sql = "SELECT judgename, housename, total FROM solo WHERE judgename = '$judge'";
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

                                    // Display the housename in the first column
                                    if (isset($judgeData['judge1'][$i])) {
                                        echo "<td>{$judgeData['judge1'][$i]['housename']}</td>";
                                    } else {
                                        echo "<td>No Data</td>";
                                    }

                                    // Initialize the total score for this row
                                    $totalScore = 0;

                                    // Display the data for each judge and calculate the row's total score
                                    foreach ($judges as $judge) {
                                        if (isset($judgeData[$judge][$i])) {
                                            $score = (int)$judgeData[$judge][$i]['total'];
                                            $totalScore += $score / 3; // Add the judge's score to the total score
                                            echo "<td>{$score}</td>";
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
                <table id="applicants">
                    <h2>Video Montage Overall</h2>
                    <tr>
                        <th>House Name</th>
                        <th>Judge 1</th>
                        <th>Judge 2</th>
                        <th>Judge 3</th>
                        <th>Total</th>
                        <?php

                            $judges = ['judge1', 'judge2', 'judge3'];
                            $judgeData = array();

                            // Retrieve data for each judge
                            foreach ($judges as $judge) {
                                $sql = "SELECT judgename, housename, total FROM videomontage WHERE judgename = '$judge'";
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

                                    // Display the housename in the first column
                                    if (isset($judgeData['judge1'][$i])) {
                                        echo "<td>{$judgeData['judge1'][$i]['housename']}</td>";
                                    } else {
                                        echo "<td>No Data</td>";
                                    }

                                    // Initialize the total score for this row
                                    $totalScore = 0;

                                    // Display the data for each judge and calculate the row's total score
                                    foreach ($judges as $judge) {
                                        if (isset($judgeData[$judge][$i])) {
                                            $score = (int)$judgeData[$judge][$i]['total'];
                                            $totalScore += $score / 3; // Add the judge's score to the total score
                                            echo "<td>{$score}</td>";
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