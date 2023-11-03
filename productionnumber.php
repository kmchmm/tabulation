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
    <title>Production Number Dashboard</title>
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
                <h1>Production Number</h1>
                <div id="success-message" class="success">
                    <?php if (isset($_GET['success'])) { ?>
                        <p><?php echo htmlspecialchars($_GET['success']); ?></p>
                    <?php } ?>
                </div>
                <table id="applicants">
                    <h2>Female</h2>
                    <tr>
                        <th>Contestant<br>Number</th>
                        <th>Contestant Name</th>
                        <th>House Name</th>
                        <th>Voice and Diction <br> 3%</th>
                        <th>Dance <br> 4%</th>
                        <th>Presence <br> 4%</th>
                        <th>Confidence and Walk <br> 4%</th>
                        <th>Total <br> 15%</th>
                        <th>Actions</th>
                    </tr>
                    <?php

                        $loggedInUsername = $_SESSION['username'];
                        $query = "SELECT * FROM contestantname WHERE judgename = '$loggedInUsername' AND gender = 'Female'";
                        $query_run = mysqli_query($conn, $query);
                        if (mysqli_num_rows($query_run) > 0) {
                            while ($row = mysqli_fetch_assoc($query_run)) {
                    ?>
                    <tr>
                        <td class="applicant_name" style="display: none;"></td>
                        <td><?php echo $row['contestantnum'] ?></td>
                        <td><?php echo $row['contestantname'] ?></td>
                        <td><?php echo $row['house'] ?></td>
                        <td><?php echo $row['pnvoice'] ?></td>
                        <td><?php echo $row['pndance'] ?></td>
                        <td><?php echo $row['pnpresence'] ?></td>
                        <td><?php echo $row['pnconfidence'] ?></td>
                        <td><?php echo $row['pntotal'] ?></td>
                        <td>
                            <div class="table-buttons">
                                <button onclick="showModal(<?php echo $row['id'] ?>)">EDIT</button>

                                    <div id="myModal<?php echo $row['id'] ?>" class="modal">
                                        <div class="modal-content">
                                            <div>
                                                <span class="close" onclick="closeModal(<?php echo $row['id'] ?>)">&times;</span>                                                
                                                <h1>Production Number Tabulation</h1>
                                            </div>
                                            <div>
                                                <form class=" add-form" method="POST" action="actions.php" enctype="multipart/form-data">
                                                    <div class="form-handler">
                                                        <div>
                                                            <label for="">Contestant Gender & Number</label> <br>
                                                            <input type="text" name="pnNum" id="pnNum" value="<?php echo $row['contestantnum'] ?>" readonly>
                                                        </div>
                                                        <div>
                                                            <input type="hidden" name="pnID" id="pnID" value="<?php echo $row['id'] ?>">
                                                        </div>
                                                        <div>
                                                            <input type="hidden" name="judgename" id="judgename" value="<?php echo $row['judgename'] ?>">
                                                        </div>
                                                        <div>
                                                            <label for="">Contestant Name</label><br>
                                                            <input type="text" name="pn1" id="pn1" value="<?php echo $row['contestantname'] ?>" readonly>
                                                        </div>
                                                        <div>
                                                            <label for="">House Name</label><br>
                                                            <input type="text" name="pnHouse" id="pnHouse" value="<?php echo $row['house'] ?>" readonly>
                                                        </div>
                                                        <div class="select-handler justify-between">
                                                            <div>
                                                                <label for="">Voice and Diction</label><br>
                                                                <select name="pn2" id="pn2" class="select">
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                </select>
                                                            </div>
                                                            <div>
                                                                <label for="">Dance</label><br>
                                                                <select name="pn3" id="pn3" class="select">
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="select-handler justify-between">
                                                            <div>
                                                                <label for="">Presence</label><br>
                                                                <select name="pn4" id="pn4" class="select">
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                </select>
                                                            </div>                                                        <div>
                                                                <label for="">Confidence and Walk</label><br>
                                                                <select name="pn5" id="pn5" class="select">
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                </select>
                                                            </div>
                                                        </div>
                        
                                                        <div>
                                                            <input type="hidden" name="pnTotal" id="pnTotal" value="<?php echo $row['pntotal'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="justify-end">
                                                        <button name="pnSave">Save</button>
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
                <table id="applicants">
                    <h2>Male</h2>
                    <tr>
                        <th>Contestant<br>Number</th>
                        <th>Contestant Name</th>
                        <th>House Name</th>
                        <th>Voice and Diction <br> 3%</th>
                        <th>Dance <br> 4%</th>
                        <th>Presence <br> 4%</th>
                        <th>Confidence and Walk <br> 4%</th>
                        <th>Total <br> 15%</th>
                        <th>Actions</th>
                    </tr>
                    <?php

                        $loggedInUsername = $_SESSION['username'];
                        $query = "SELECT * FROM contestantname WHERE judgename = '$loggedInUsername' AND gender = 'Male'";
                        $query_run = mysqli_query($conn, $query);
                        if (mysqli_num_rows($query_run) > 0) {
                            while ($row = mysqli_fetch_assoc($query_run)) {
                    ?>
                    <tr>
                        <td class="applicant_name" style="display: none;"></td>
                        <td><?php echo $row['contestantnum'] ?></td>
                        <td><?php echo $row['contestantname'] ?></td>
                        <td><?php echo $row['house'] ?></td>
                        <td><?php echo $row['pnvoice'] ?></td>
                        <td><?php echo $row['pndance'] ?></td>
                        <td><?php echo $row['pnpresence'] ?></td>
                        <td><?php echo $row['pnconfidence'] ?></td>
                        <td><?php echo $row['pntotal'] ?></td>
                        <td>
                            <div class="table-buttons">
                                <button onclick="showModal(<?php echo $row['id'] ?>)">EDIT</button>

                                    <div id="myModal<?php echo $row['id'] ?>" class="modal">
                                        <div class="modal-content">
                                            <div>
                                                <span class="close" onclick="closeModal(<?php echo $row['id'] ?>)">&times;</span>                                                
                                                <h1>Production Number Tabulation</h1>
                                            </div>
                                            <div>
                                                <form class=" add-form" method="POST" action="actions.php" enctype="multipart/form-data">
                                                    <div class="form-handler">
                                                        <div>
                                                            <label for="">Contestant Gender & Number</label> <br>
                                                            <input type="text" name="pnNum" id="pnNum" value="<?php echo $row['contestantnum'] ?>" readonly>
                                                        </div>
                                                        <div>
                                                            <input type="hidden" name="pnID" id="pnID" value="<?php echo $row['id'] ?>">
                                                        </div>
                                                        <div>
                                                            <input type="hidden" name="judgename" id="judgename" value="<?php echo $row['judgename'] ?>">
                                                        </div>
                                                        <div>
                                                            <label for="">Contestant Name</label><br>
                                                            <input type="text" name="pn1" id="pn1" value="<?php echo $row['contestantname'] ?>" readonly>
                                                        </div>
                                                        <div>
                                                            <label for="">House Name</label><br>
                                                            <input type="text" name="pnHouse" id="pnHouse" value="<?php echo $row['house'] ?>" readonly>
                                                        </div>
                                                        <div class="select-handler justify-between">
                                                            <div>
                                                                <label for="">Voice and Diction</label><br>
                                                                <select name="pn2" id="pn2" class="select">
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                </select>
                                                            </div>
                                                            <div>
                                                                <label for="">Dance</label><br>
                                                                <select name="pn3" id="pn3" class="select">
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="select-handler justify-between">
                                                            <div>
                                                                <label for="">Presence</label><br>
                                                                <select name="pn4" id="pn4" class="select">
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                </select>
                                                            </div>                                                        <div>
                                                                <label for="">Confidence and Walk</label><br>
                                                                <select name="pn5" id="pn5" class="select">
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                </select>
                                                            </div>
                                                        </div>
                        
                                                        <div>
                                                            <input type="hidden" name="pnTotal" id="pnTotal" value="<?php echo $row['pntotal'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="justify-end">
                                                        <button name="pnSave">Save</button>
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