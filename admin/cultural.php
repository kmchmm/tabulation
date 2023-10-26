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
                    <h2>Wanna Bee</h2>
                    <tr>
                        <th>House Name</th>
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
                        <td><?php echo $wbRow['Total'] ?></td>
                    </tr>

                    <?php
                            }
                        }
                    ?>

                </table>
                <table id="applicants">
                    <h2>Spoken Poetry</h2>
                    <tr>
                        <th>House Name</th>
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
                        <td><?php echo $spokenRow['total'] ?></td>
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