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

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Tabulation Acoustic Band</title>
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
                <h1>Acoustic Band</h1>
                <div id="success-message">
                    <?php if (isset($_GET['success'])) { ?>
                        <p  class="success"><?php echo htmlspecialchars($_GET['success']); ?></p>
                    <?php } elseif (isset($_GET['error'])) { ?>
                        <p  class="error"><?php echo htmlspecialchars($_GET['error']); ?></p>
                    <?php
                    } ?>
                </div>
                <table id="applicants">

                    <tr>
                        <th>House Name</th>
                        <th>Vocals <br> 50%</th>
                        <th>Expressicon <br> 30%</th>
                        <th>Showmanship <br> 20%</th>
                        <th>Actions</th>
                    </tr>
                    <?php

                        $loggedInUsername = $_SESSION['username'];
                        $query = "SELECT * FROM acoustic WHERE judgename = '$loggedInUsername'";
                        $query_run = mysqli_query($conn, $query);
                        if (mysqli_num_rows($query_run) > 0) {
                            while ($row = mysqli_fetch_assoc($query_run)) {
                    ?>
                    <tr>
                        <td class="applicant_name" style="display: none;"></td>
                        <td><?php echo $row['housename'] ?></td>
                        <td><?php echo $row['vocals'] ?></td>
                        <td><?php echo $row['expression'] ?></td>
                        <td><?php echo $row['showmanship'] ?></td>
                        <td>
                            <div class="table-buttons">
                                <button onclick="showModal(<?php echo $row['id'] ?>)">EDIT SCORE</button>

                                <div id="myModal<?php echo $row['id'] ?>" class="modal">
                                    <div class="modal-content">
                                        <div>
                                            <span class="close" onclick="closeModal(<?php echo $row['id'] ?>)">&times;</span>                                                
                                            <h1>Acoustic</h1>
                                        </div>
                                        <div>
                                            <form class=" add-form" method="POST" action="actions.php" enctype="multipart/form-data">
                                                <div class="form-handler">
                                                        <div>
                                                            <input type="hidden" name="acID" id="acID" value="<?php echo $row['id'] ?>">
                                                        </div>
                                                        <div>
                                                            <input type="hidden" name="acJudgeName" id="acJudgeName" value="<?php echo $row['judgename'] ?>">
                                                        </div>
                                                        <div>
                                                            <label for="">House Name</label><br>
                                                            <input type="text" name="ab1" id="ab1" value="<?php echo $row['housename'] ?>" readonly>
                                                        </div>
                                                        <div>
                                                            <label for="">Vocals (50 points)</label><br>
                                                            <input type="number" name="ab2" id="ab2" placeholder="Max of 50 points">
                                                        </div>
                                                        <div>
                                                            <label for="">Expression (30 points)</label><br>
                                                            <input type="number" name="ab3" id="ab3"placeholder="Max of 30 points">
                                                        </div>
                                                        <div>
                                                            <label for="">Showmanship (20 points)</label><br>
                                                            <input type="number" name="ab4" id="ab4" placeholder="Max of 20 points">
                                                        </div>
                                                        <div>
                                                            <input type="hidden" name="acTotal" id="acTotal" value="<?php echo $row['total'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="justify-end">
                                                        <button name="abSave">Save</button>
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
                    ?>
                </table>
            </div>
        </section>
        <div class="logout-button">
            <a href="logout.php"><button>Log out</button></a>
        </div>
    </div>

    <script src="assets/js/script.js"></script>
    
    <script>
    const selectElement = document.getElementById("eventSelect");
    const urls = [
        "dashboard.php",
        "wannabee.php",
        "spoken.php",
        "acoustic.php",
        "duo.php",
        "solo.php",
        "videomontage.php"
    ];

    selectElement.addEventListener("change", function () {
        const selectedValue = selectElement.value;
        if (selectedValue === "") {
            return; // Do nothing if an empty option is selected
        }

        // Find the index of the selected option
        const selectedIndex = Array.from(selectElement.options).findIndex(option => option.value === selectedValue);

        if (selectedIndex !== -1) {
            // Redirect to the corresponding URL
            window.location.href = urls[selectedIndex];
        }
    });
    selectElement.selectedIndex = 0;



    const selectElement1 = document.getElementById("eventSelect1");
    const urls1 = [
        "ms.php",
        "productionnumber.php",
        "schooluniform.php",
        "futureattire.php",
        "formalattire.php",
        "QA.php"
    ];

    selectElement1.addEventListener("change", function () {
        const selectedValue1 = selectElement1.value;
        if (selectedValue1 === "") {
            return; // Do nothing if an empty option is selected
        }

        // Find the index of the selected option
        const selectedIndex1 = Array.from(selectElement1.options).findIndex(option => option.value === selectedValue1);

        if (selectedIndex1 !== -1) {
            // Redirect to the corresponding URL
            window.location.href = urls1[selectedIndex1];
        }
    });
    selectElement1.selectedIndex = 0;
</script>
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