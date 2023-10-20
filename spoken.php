<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Tabulation Spoken Poetry</title>
</head>
<body>
    <div class="container">
        <header>
            <nav class="justify-center align-center">
                <div><img src="assets//images/ccs-logo.jpg" alt=""></div>
                <ul class="justify-center">
                    <li>
                        <select id="eventSelect">
                            <option value="dashboard.php" selected>Cultural Night</option>
                            <option value="wannabee.php">Wanna Bee</option>
                            <option value="spoken.php">Spoken Poetry</option>
                            <option value="acoustic.php">Acoustic Band</option>
                            <option value="duo.php">Duo</option>
                            <option value="solo.php">Solo</option>
                            <option value="videomontage.php">Video Montage</option>
                        </select>
                    </li>
                    <li>
                    <select id="eventSelect1">
                            <option value="ms.php" selected>Mr. & Ms. CCS</option>
                            <option value="productionnumber.php">Production Number</option>
                            <option value="schooluniform.php">School Uniform</option>
                            <option value="futureattire.php">Futuristic Attire</option>
                            <option value="formalattire.php">Formal Attire</option>
                            <option value="QA.php">Q and A</option>
                        </select>
                    </li>
                </ul>
            </nav>
        </header>

        <section class="">
            <div class="main-body">
                <h1>Spoken Poetry Tabulation</h1>
                <table id="applicants">
                    <tr>
                        <th>House Name</th>
                        <th>Content</th>
                        <th>Voice Projection</th>
                        <th>Clarity of Words</th>
                        <th>Facial Expression and Gestures</th>
                        <th>Memorization</th>
                        <th>Audience Impact</th>
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
                    </tr>

                </table>
            </div>
        </section>
        <div class="logout-button">
            <a href="">Log out</a>
        </div>
    </div>


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
</body>
</html>