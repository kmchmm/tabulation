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
                <table id="applicants">
                    <tr>
                        <th>House Name</th>
                        <th>Production Number</th>
                        <th>School Uniform</th>
                        <th>Futuristic Attire</th>
                        <th>Formal Attire</th>
                        <th>Q and A</th>
                        <th>Popularity</th>
                        <th>Personality</th>
                        <th>Photogenic</th>
                        <th>Total</th>
                    </tr>

                    <tr>
                        <td class="applicant_name" style="display: none;"></td>
                        <td>Sample</td>
                        <td>Sample</td>
                        <td>Sample</td>
                        <td>Sample</td>
                        <td>Sample</td>
                        <td>Sample</td>
                        <td>Sample</td>
                        <td>Sample</td>
                        <td>Sample</td>
                        <td>Sample</td>

                    </tr>

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