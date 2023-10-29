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
                <h1>Cultural Night Tabulation</h1>
                <table id="applicants">
                    <h2>Wanna Bee Overall</h2>
                    <tr>
                        <th>House Name</th>
                        <th>Judge 1</th>
                        <th>Judge 2</th>
                        <th>Judge 3</th>
                        <th>Total</th>
                    <?php

                        $wbQuery = "SELECT * FROM wannabee";
                        $wbQuery_run = mysqli_query($conn, $wbQuery);
                        if (mysqli_num_rows($wbQuery_run) > 0) {
                            while ($wbRow = mysqli_fetch_assoc($wbQuery_run)) {
                    ?>
                    <tr>
                        <td class="applicant_name" style="display: none;"></td>
                        <td><?php echo $wbRow['housename'] ?></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><?php echo $wbRow['Total'] ?></td>
                    </tr>

                    <?php
                            }
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

                        $spokenQuery = "SELECT * FROM spoken";
                        $spokenQuery_run = mysqli_query($conn, $spokenQuery);
                        if (mysqli_num_rows($spokenQuery_run) > 0) {
                            while ($spokenRow = mysqli_fetch_assoc($spokenQuery_run)) {
                    ?>
                    <tr>
                        <td class="applicant_name" style="display: none;"></td>
                        <td><?php echo $spokenRow['housename'] ?></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><?php echo $spokenRow['total'] ?></td>
                    </tr>

                    <?php
                            }
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

                        $acousticQuery = "SELECT * FROM acoustic";
                        $acousticQuery_run = mysqli_query($conn, $acousticQuery);
                        if (mysqli_num_rows($acousticQuery_run) > 0) {
                            while ($acousticRow = mysqli_fetch_assoc($acousticQuery_run)) {
                    ?>
                    <tr>
                        <td class="applicant_name" style="display: none;"></td>
                        <td><?php echo $acousticRow['housename'] ?></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><?php echo $acousticRow['total'] ?></td>
                    </tr>

                    <?php
                            }
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

                        $acousticQuery = "SELECT * FROM acoustic";
                        $acousticQuery_run = mysqli_query($conn, $acousticQuery);
                        if (mysqli_num_rows($acousticQuery_run) > 0) {
                            while ($acousticRow = mysqli_fetch_assoc($acousticQuery_run)) {
                    ?>
                    <tr>
                        <td class="applicant_name" style="display: none;"></td>
                        <td><?php echo $acousticRow['housename'] ?></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><?php echo $acousticRow['total'] ?></td>
                    </tr>

                    <?php
                            }
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

                        $duoQuery = "SELECT * FROM duo";
                        $duoQuery_run = mysqli_query($conn, $duoQuery);
                        if (mysqli_num_rows($duoQuery_run) > 0) {
                            while ($duoRow = mysqli_fetch_assoc($duoQuery_run)) {
                    ?>
                    <tr>
                        <td class="applicant_name" style="display: none;"></td>
                        <td><?php echo $duoRow['housename'] ?></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><?php echo $duoRow['total'] ?></td>
                    </tr>

                    <?php
                            }
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

                        $soloQuery = "SELECT * FROM solo";
                        $soloQuery_run = mysqli_query($conn, $soloQuery);
                        if (mysqli_num_rows($soloQuery_run) > 0) {
                            while ($soloRow = mysqli_fetch_assoc($soloQuery_run)) {
                    ?>
                    <tr>
                        <td class="applicant_name" style="display: none;"></td>
                        <td><?php echo $soloRow['housename'] ?></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><?php echo $soloRow['total'] ?></td>
                    </tr>

                    <?php
                            }
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

                        $videomontageQuery = "SELECT * FROM videomontage";
                        $videomontageQuery_run = mysqli_query($conn, $videomontageQuery);
                        if (mysqli_num_rows($videomontageQuery_run) > 0) {
                            while ($videomontageRow = mysqli_fetch_assoc($videomontageQuery_run)) {
                    ?>
                    <tr>
                        <td class="applicant_name" style="display: none;"></td>
                        <td><?php echo $videomontageRow['housename'] ?></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><?php echo $videomontageRow['total'] ?></td>
                    </tr>

                    <?php
                            }
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