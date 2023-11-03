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
                <h1>ADDITIONAL SCORES FOR MR & MISS CCS</h1>
                <div id="success-message" class="success">
                    <?php if (isset($_GET['success'])) { ?>
                        <p><?php echo htmlspecialchars($_GET['success']); ?></p>
                    <?php } ?>
                </div>
                <table id="applicants">
                    <h2>Female Contestants</h2>
                    <tr>
                        <th>Contestant <br>Number</th>
                        <th>Contestant Name</th>
                        <th>Popularity<br>5%</th>
                        <th>Personality<br>10%</th>
                        <th>Photogenic<br>10%</th>
                        <th>Total <br>25%</th>
                        <th>Actions</th>
                    </tr>
                    <?php
                    $query = "SELECT * FROM contestantname WHERE gender = 'Female'";
                    $query_run = mysqli_query($conn, $query);
                    $displayedContestants = array();

                    if (mysqli_num_rows($query_run) > 0) {
                        while ($row = mysqli_fetch_assoc($query_run)) {
                            $contestantNum = $row['contestantnum'];
                            $contestantName = $row['contestantname'];
                            $contestantPopularity= $row['addpopularity'];
                            $contestantPersonality = $row['addpersonality'];
                            $contestantPhotogenic = $row['addphotogenic'];

                            // Check if the contestant name has already been displayed
                            if (!in_array($contestantName, $displayedContestants)) {
                                // Display the contestant name and add it to the displayed array
                                $displayedContestants[] = $contestantName;
                    ?>
                    <tr>
                        <td class="applicant_name" style="display: none;"></td>
                        <td><?php echo $contestantNum ?></td>
                        <td><?php echo $contestantName ?></td>
                        <td><?php echo $contestantPopularity ?></td>
                        <td><?php echo $contestantPersonality ?></td>
                        <td><?php echo $contestantPhotogenic ?></td>
                        <td><?php echo $row['addtotal'] ?></td>
                        <td>
                        <div class="table-buttons">
                                <button onclick="showModal(<?php echo $row['id'] ?>)">EDIT SCORE</button>

                                    <div id="myModal<?php echo $row['id'] ?>" class="modal">
                                        <div class="modal-content">
                                            <div>
                                                <span class="close" onclick="closeModal(<?php echo $row['id'] ?>)">&times;</span>                                                
                                                <h1>Additional Scores Tabulation</h1>
                                            </div>
                                            <div>
                                                <form class=" add-form" method="POST" action="../actions.php" enctype="multipart/form-data">
                                                    <div class="form-handler">
                                                        <div>
                                                            <label for="">Contestant Gender & Number</label> <br>
                                                            <input type="text" name="addNum" id="addNum" value="<?php echo $row['contestantnum'] ?>" readonly>
                                                        </div>
                                                        <div>
                                                            <input type="hidden" name="additionalID" id="additionalID" value="<?php echo $row['id'] ?>">
                                                        </div>
                                                        <div>
                                                            <label for="">Contestant Name</label><br>
                                                            <input type="text" name="add1" id="add1" value="<?php echo $row['contestantname'] ?>" readonly>
                                                        </div>
                                                        <div>
                                                            <label for="">House Name</label><br>
                                                            <input type="text" name="addHouse" id="addHouse" value="<?php echo $row['house'] ?>" readonly>
                                                        </div>
                                                        <div class="select-handler justify-between">
                                                            <div>
                                                                <label for="">Popularity</label><br>
                                                                <select name="add2" id="add2" class="select">
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                </select>
                                                            </div>
                                                            <div>
                                                                <label for="">Personality</label><br>
                                                                <select name="add3" id="add3" class="select">
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9">9</option>
                                                                    <option value="10">10</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="select-handler justify-between">
                                                            <div>
                                                                <label for="">Photogenic</label><br>
                                                                <select name="add4" id="add4" class="select">
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9">9</option>
                                                                    <option value="10">10</option>
                                                                </select>
                                                            </div>                                                        
                                                        </div>
                        
                                                        <div>
                                                            <input type="hidden" name="addTotal" id="addTotal" value="<?php echo $row['addtotal'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="justify-end">
                                                        <button name="addSave">Save</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                            </div>
                        </td>
                    </tr>
                    <?php
                            }
                            
                        }
                    }
                    ?>
                </table>
                <br>
                <table id="applicants">
                    <h2>Male Contestants</h2>
                    <tr>
                        <th>Contestant <br>Number</th>
                        <th>Contestant Name</th>
                        <th>Popularity<br>5%</th>
                        <th>Personality<br>10%</th>
                        <th>Photogenic<br>10%</th>
                        <th>Total <br>25%</th>
                        <th>Actions</th>
                    </tr>
                    <?php
                    $query = "SELECT * FROM contestantname WHERE gender = 'Male'";
                    $query_run = mysqli_query($conn, $query);
                    $displayedContestants = array();

                    if (mysqli_num_rows($query_run) > 0) {
                        while ($row = mysqli_fetch_assoc($query_run)) {
                            $contestantNum = $row['contestantnum'];
                            $contestantName = $row['contestantname'];
                            $contestantPopularity= $row['addpopularity'];
                            $contestantPersonality = $row['addpersonality'];
                            $contestantPhotogenic = $row['addphotogenic'];

                            // Check if the contestant name has already been displayed
                            if (!in_array($contestantName, $displayedContestants)) {
                                // Display the contestant name and add it to the displayed array
                                $displayedContestants[] = $contestantName;
                    ?>
                    <tr>
                        <td class="applicant_name" style="display: none;"></td>
                        <td><?php echo $contestantNum ?></td>
                        <td><?php echo $contestantName ?></td>
                        <td><?php echo $contestantPopularity ?></td>
                        <td><?php echo $contestantPersonality ?></td>
                        <td><?php echo $contestantPhotogenic ?></td>
                        <td><?php echo $row['addtotal'] ?></td>
                        <td>
                        <div class="table-buttons">
                                <button onclick="showModal(<?php echo $row['id'] ?>)">EDIT SCORE</button>

                                    <div id="myModal<?php echo $row['id'] ?>" class="modal">
                                        <div class="modal-content">
                                            <div>
                                                <span class="close" onclick="closeModal(<?php echo $row['id'] ?>)">&times;</span>                                                
                                                <h1>Additional Scores Tabulation</h1>
                                            </div>
                                            <div>
                                                <form class=" add-form" method="POST" action="../actions.php" enctype="multipart/form-data">
                                                    <div class="form-handler">
                                                        <div>
                                                            <label for="">Contestant Gender & Number</label> <br>
                                                            <input type="text" name="addNum" id="addNum" value="<?php echo $row['contestantnum'] ?>" readonly>
                                                        </div>
                                                        <div>
                                                            <input type="hidden" name="additionalID" id="additionalID" value="<?php echo $row['id'] ?>">
                                                        </div>
                                                        <div>
                                                            <label for="">Contestant Name</label><br>
                                                            <input type="text" name="add1" id="add1" value="<?php echo $row['contestantname'] ?>" readonly>
                                                        </div>
                                                        <div>
                                                            <label for="">House Name</label><br>
                                                            <input type="text" name="addHouse" id="addHouse" value="<?php echo $row['house'] ?>" readonly>
                                                        </div>
                                                        <div class="select-handler justify-between">
                                                            <div>
                                                                <label for="">Popularity</label><br>
                                                                <select name="add2" id="add2" class="select">
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                </select>
                                                            </div>
                                                            <div>
                                                                <label for="">Personality</label><br>
                                                                <select name="add3" id="add3" class="select">
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9">9</option>
                                                                    <option value="10">10</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="select-handler justify-between">
                                                            <div>
                                                                <label for="">Photogenic</label><br>
                                                                <select name="add4" id="add4" class="select">
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9">9</option>
                                                                    <option value="10">10</option>
                                                                </select>
                                                            </div>                                                        
                                                        </div>
                        
                                                        <div>
                                                            <input type="hidden" name="addTotal" id="addTotal" value="<?php echo $row['addtotal'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="justify-end">
                                                        <button name="addSave">Save</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                            </div>
                        </td>
                    </tr>
                    <?php
                            }
                            
                        }
                    }
                    ?>
                </table>
                <br>
                <br>
                <h1>MR & MISS CCS OVERALL</h1>
                <table id="applicants" class="mr-ms">
                    <h2>Female Contestants</h2>
                    <tr>
                        <th>Contestant <br>Gender & Number</th>
                        <th>Contestant Name</th>
                        <th>Production Number</th>
                        <th>School Uniform</th>
                        <th>Futuristic Attire</th>
                        <th>Formal Attire</th>
                        <th>Q and A</th>
                        <th>Additional Scores</th>
                        <th>Total</th>
                    </tr>
                    <?php

                        $judges = ['judge1', 'judge2', 'judge3'];
                        $judgeData = array();

                        // Retrieve data for each judge
                        foreach ($judges as $judge) {
                            $sql = "SELECT * FROM contestantname WHERE judgename = '$judge' AND gender ='Female'";
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

                                $sutotalScore = 0;

                                // Display the data for each judge and calculate the row's total score
                                foreach ($judges as $judge) {
                                    if (isset($judgeData[$judge][$i])) {
                                        $suscore = (int)$judgeData[$judge][$i]['sutotal'];
                                        $sutotalScore += $suscore / 3; // Add the judge's score to the total score
                                    } else {
                                        echo "<td>No Data</td>";
                                    }
                                }

                                $futotalScore = 0;

                                // Display the data for each judge and calculate the row's total score
                                foreach ($judges as $judge) {
                                    if (isset($judgeData[$judge][$i])) {
                                        $fuscore = (int)$judgeData[$judge][$i]['futotal'];
                                        $futotalScore += $fuscore / 3; // Add the judge's score to the total score
                                    } else {
                                        echo "<td>No Data</td>";
                                    }
                                }

                                $fototalScore = 0;

                                // Display the data for each judge and calculate the row's total score
                                foreach ($judges as $judge) {
                                    if (isset($judgeData[$judge][$i])) {
                                        $foscore = (int)$judgeData[$judge][$i]['fototal'];
                                        $fototalScore += $foscore / 3; // Add the judge's score to the total score
                                    } else {
                                        echo "<td>No Data</td>";
                                    }
                                }
                                
                                $qatotalScore = 0;

                                // Display the data for each judge and calculate the row's total score
                                foreach ($judges as $judge) {
                                    if (isset($judgeData[$judge][$i])) {
                                        $qascore = (int)$judgeData[$judge][$i]['qatotal'];
                                        $qatotalScore += $qascore / 3; // Add the judge's score to the total score
                                    } else {
                                        echo "<td>No Data</td>";
                                    }
                                }

                                $addtotalScore = 0;

                                // Display the data for each judge and calculate the row's total score
                                foreach ($judges as $judge) {
                                    if (isset($judgeData[$judge][$i])) {
                                        $addscore = (int)$judgeData[$judge][$i]['addtotal'];
                                        $addtotalScore += $addscore; // Add the judge's score to the total score
                                    } else {
                                        echo "<td>No Data</td>";
                                    }
                                }
                                $totalscores = $pntotalScore + $sutotalScore + $futotalScore + $fototalScore +$qatotalScore +$addtotalScore;
                                // Display the row's total score in the last column
                                echo "<td>{$pntotalScore}</td>";
                                echo "<td>{$sutotalScore}</td>";
                                echo "<td>{$futotalScore}</td>";
                                echo "<td>{$fototalScore}</td>";
                                echo "<td>{$qatotalScore}</td>";
                                echo "<td>{$addtotalScore}</td>";
                                echo "<td>{$totalscores}</td>";
                                echo "</tr>";
                            }
                        ?>

                </table>
                <table id="applicants" class="mr-ms">
                    <h2>Female Contestants</h2>
                    <tr>
                        <th>Contestant <br>Gender & Number</th>
                        <th>Contestant Name</th>
                        <th>Production Number</th>
                        <th>School Uniform</th>
                        <th>Futuristic Attire</th>
                        <th>Formal Attire</th>
                        <th>Q and A</th>
                        <th>Additional Scores</th>
                        <th>Total</th>
                    </tr>
                    <?php

                        $judges = ['judge1', 'judge2', 'judge3'];
                        $judgeData = array();

                        // Retrieve data for each judge
                        foreach ($judges as $judge) {
                            $sql = "SELECT * FROM contestantname WHERE judgename = '$judge' AND gender ='Male'";
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

                                $sutotalScore = 0;

                                // Display the data for each judge and calculate the row's total score
                                foreach ($judges as $judge) {
                                    if (isset($judgeData[$judge][$i])) {
                                        $suscore = (int)$judgeData[$judge][$i]['sutotal'];
                                        $sutotalScore += $suscore / 3; // Add the judge's score to the total score
                                    } else {
                                        echo "<td>No Data</td>";
                                    }
                                }

                                $futotalScore = 0;

                                // Display the data for each judge and calculate the row's total score
                                foreach ($judges as $judge) {
                                    if (isset($judgeData[$judge][$i])) {
                                        $fuscore = (int)$judgeData[$judge][$i]['futotal'];
                                        $futotalScore += $fuscore / 3; // Add the judge's score to the total score
                                    } else {
                                        echo "<td>No Data</td>";
                                    }
                                }

                                $fototalScore = 0;

                                // Display the data for each judge and calculate the row's total score
                                foreach ($judges as $judge) {
                                    if (isset($judgeData[$judge][$i])) {
                                        $foscore = (int)$judgeData[$judge][$i]['fototal'];
                                        $fototalScore += $foscore / 3; // Add the judge's score to the total score
                                    } else {
                                        echo "<td>No Data</td>";
                                    }
                                }
                                
                                $qatotalScore = 0;

                                // Display the data for each judge and calculate the row's total score
                                foreach ($judges as $judge) {
                                    if (isset($judgeData[$judge][$i])) {
                                        $qascore = (int)$judgeData[$judge][$i]['qatotal'];
                                        $qatotalScore += $qascore / 3; // Add the judge's score to the total score
                                    } else {
                                        echo "<td>No Data</td>";
                                    }
                                }

                                $addtotalScore = 0;

                                // Display the data for each judge and calculate the row's total score
                                foreach ($judges as $judge) {
                                    if (isset($judgeData[$judge][$i])) {
                                        $addscore = (int)$judgeData[$judge][$i]['addtotal'];
                                        $addtotalScore += $addscore; // Add the judge's score to the total score
                                    } else {
                                        echo "<td>No Data</td>";
                                    }
                                }
                                $totalscores = $pntotalScore + $sutotalScore + $futotalScore + $fototalScore +$qatotalScore + $addtotalScore;
                                // Display the row's total score in the last column
                                echo "<td>{$pntotalScore}</td>";
                                echo "<td>{$sutotalScore}</td>";
                                echo "<td>{$futotalScore}</td>";
                                echo "<td>{$fototalScore}</td>";
                                echo "<td>{$qatotalScore}</td>";
                                echo "<td>{$addtotalScore}</td>";
                                echo "<td>{$totalscores}</td>";
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
    
    function showModal(modalId) {
        var modal = document.getElementById("myModal" + modalId);
        modal.style.display = "block";
    }

    function closeModal(modalId) {
        var modal = document.getElementById("myModal" + modalId);
        modal.style.display = "none";
    }
    </script>
    <script type="text/javascript">
        // Function to hide the success message after a certain duration
        function hideSuccessMessage() {
            var successMessage = document.getElementById("success-message");
            if (successMessage) {
                successMessage.style.display = 'none';
            }
        }

        // Call the hideSuccessMessage function after a delay of 5 seconds (5000 milliseconds)
        setTimeout(hideSuccessMessage, 5000);
</script>
</body>
</html>


<?php

} else {
    header("Location: login.php");
    exit();
}
?>