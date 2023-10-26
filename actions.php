<?php

include('connection.php');


/////////////////////////
/////////WANNABEE////////
/////////////////////////
if(isset($_POST['wbSave'])){

    $wbid = $_POST['wbID'];
    $wbhouseName = $_POST['wb1'];
    $wbchoreography = $_POST['wb2'];
    $wbexecution = $_POST['wb3'];
    $wbcostume = $_POST['wb4'];
    $wbTotal = $_POST['wbTotal'];


    $wbchoreography = $wbchoreography * .4;
    $wbexecution = $wbexecution * .5;
    $wbcostume = $wbcostume * .1;
    $wbTotal = $wbchoreography + $wbexecution + $wbcostume;

    $wb = "UPDATE wannabee SET housename='$wbhouseName',choreography='$wbchoreography', execution='$wbexecution',costume='$wbcostume', Total ='$wbTotal' WHERE id = '$wbid'" ;
    $wb_run = mysqli_query($conn,$wb);

    $_SESSION['success'] = "Information Updated!";
    header('Location: wannabee.php');


}

/////////////////////////
///////Spoken Poetry/////
/////////////////////////

if(isset($_POST['spokenSave'])){

    $spokenid = $_POST['spokenID'];
    $spokenhouseName = $_POST['spoken1'];
    $spokenContent = $_POST['spoken2'];
    $spokenVoice = $_POST['spoken3'];
    $spokenClarity = $_POST['spoken4'];
    $spokenFacial = $_POST['spoken5'];
    $spokenMemorization = $_POST['spoken6'];
    $spokenImpact = $_POST['spoken7'];
    $spokenTotal = $_POST['spokenTotal'];
    

    $spokenContent = $spokenContent * .2;
    $spokenVoice = $spokenVoice * .2;
    $spokenClarity = $spokenClarity * .2;
    $spokenFacial = $spokenFacial * .15;
    $spokenMemorization = $spokenMemorization * .15;
    $spokenImpact = $spokenImpact * .1;
    $spokenTotal = $spokenContent + $spokenVoice + $spokenClarity + $spokenFacial + $spokenMemorization + $spokenImpact;

    $spoken = "UPDATE spoken SET housename='$spokenhouseName',content='$spokenContent', voice='$spokenVoice',clarity='$spokenClarity', facial ='$spokenFacial', memorization ='$spokenMemorization',impact ='$spokenImpact', total='$spokenTotal' WHERE id = '$spokenid'" ;
    $spoken_run = mysqli_query($conn,$spoken);

    $_SESSION['success'] = "Information Updated!";
    header('Location: spoken.php');


    }
?>