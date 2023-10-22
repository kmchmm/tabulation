<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Tabulation Dashboard</title>
</head>
<body>
    <div class="container">
        <header>
            <nav class="justify-center align-center">
                <div><img src="assets//images/ccs-logo.jpg" alt=""></div>
                <ul class="justify-center">
                    <li>
                        <div class="select">
                            <select id="eventSelect">
                                <option value="dashboard.php" style="display:none;">Cultural Night</option>  
                                <option value="wannabee.php">Wanna Bee</option>
                                <option value="spoken.php">Spoken Poetry</option>
                                <option value="acoustic.php">Acoustic Band</option>
                                <option value="duo.php">Duo</option>
                                <option value="solo.php">Solo</option>
                                <option value="videomontage.php">Video Montage</option>
                            </select>
                        </div>
                    </li>
                    <li>
                        <div class="select">
                            <select id="eventSelect1">
                                <option value="ms.php" style="display: none;">Mr. & Ms. CCS</option>
                                <option value="productionnumber.php">Production Number</option>
                                <option value="schooluniform.php">School Uniform</option>
                                <option value="futureattire.php">Futuristic Attire</option>
                                <option value="formalattire.php">Formal Attire</option>
                                <option value="QA.php">Q and A</option>
                            </select>                        
                        </div>
                    </li>
                </ul>
            </nav>
        </header>

        <section class="">
            <div class="main-body">
                <h1>Cultural Night Tabulation</h1>
                <table id="applicants">
                    <tr>
                        <th>House Name</th>
                        <th>Wanna Bee</th>
                        <th>Spoken Poetry</th>
                        <th>Acoustic Band</th>
                        <th>Duo</th>
                        <th>Solo</th>
                        <th>Video Montage</th>
                    </tr>

                    <tr>
                        <td class="applicant_name" style="display: none;"></td>
                        <td>Sample</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
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