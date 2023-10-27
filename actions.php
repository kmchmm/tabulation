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
/////////////////////////
/////ACOUSTIC BAND///////
/////////////////////////
if(isset($_POST['abSave'])){

    $acid = $_POST['acID'];
    $achouseName = $_POST['ab1'];
    $acVocal= $_POST['ab2'];
    $acExpression = $_POST['ab3'];
    $acShowmanship = $_POST['ab4'];
    $acTotal = $_POST['acTotal'];


    $acVocal = $acVocal * .5;
    $acExpression = $acExpression * .3;
    $acShowmanship = $acShowmanship * .2;
    $duoTotal = $acVocal + $acExpression + $acShowmanship;

    $ac = "UPDATE acoustic SET housename='$achouseName',vocals='$acVocal', expression='$acExpression',showmanship='$acShowmanship', total ='$acTotal' WHERE id = '$acid'" ;
    $ac_run = mysqli_query($conn,$ac);

    $_SESSION['success'] = "Information Updated!";
    header('Location: acoustic.php');


}

/////////////////////////
////////////DUO//////////
/////////////////////////
if(isset($_POST['dSave'])){

    $duoid = $_POST['duoID'];
    $duohouseName = $_POST['d1'];
    $duoVocal= $_POST['d2'];
    $duoExpression = $_POST['d3'];
    $duoShowmanship = $_POST['d4'];
    $duoTotal = $_POST['duoTotal'];


    $duoVocal = $duoVocal * .5;
    $duoExpression = $duoExpression * .3;
    $duoShowmanship = $duoShowmanship * .2;
    $duoTotal = $duoVocal + $duoExpression + $duoShowmanship;

    $d = "UPDATE duo SET housename='$duohouseName',vocals='$duoVocal', expression='$duoExpression',showmanship='$duoShowmanship', total ='$duoTotal' WHERE id = '$duoid'" ;
    $d_run = mysqli_query($conn,$d);

    $_SESSION['success'] = "Information Updated!";
    header('Location: duo.php');


}
/////////////////////////
////////////SOLO/////////
/////////////////////////
if(isset($_POST['soloSave'])){

    $soloid = $_POST['soloID'];
    $solohouseName = $_POST['solo1'];
    $soloVocal= $_POST['solo2'];
    $soloExpression = $_POST['solo3'];
    $soloShowmanship = $_POST['solo4'];
    $soloTotal = $_POST['soloTotal'];


    $soloVocal = $soloVocal * .5;
    $soloExpression = $soloExpression * .3;
    $soloShowmanship = $soloShowmanship * .2;
    $soloTotal = $soloVocal + $soloExpression + $soloShowmanship;

    $solo = "UPDATE solo SET housename='$solohouseName',vocals='$soloVocal', expression='$soloExpression',showmanship='$soloShowmanship', total ='$soloTotal' WHERE id = '$soloid'" ;
    $solo_run = mysqli_query($conn,$solo);

    $_SESSION['success'] = "Information Updated!";
    header('Location: solo.php');


}
/////////////////////////
/////VIDEO MONTAGE///////
/////////////////////////
if(isset($_POST['vmSave'])){

    $vmid = $_POST['vmID'];
    $vmhouseName = $_POST['vm1'];
    $vmContent= $_POST['vm2'];
    $vmCreativity = $_POST['vm3'];
    $vmQuality = $_POST['vm4'];
    $vmTotal = $_POST['vmTotal'];


    $vmContent = $vmContent * .4;
    $vmCreativity = $vmCreativity * .3;
    $vmQuality = $vmQuality * .3;
    $vmTotal = $vmContent + $vmCreativity + $vmQuality;

    $vm = "UPDATE videomontage SET housename='$vmhouseName',content='$vmContent', creativity='$vmCreativity',editingquality='$vmQuality', total ='$vmTotal' WHERE id = '$vmid'" ;
    $vm_run = mysqli_query($conn,$vm);

    $_SESSION['success'] = "Information Updated!";
    header('Location: videomontage.php');



///////////////////////////////////////////////
/////////////////////MR & MS CCS///////////////
///////////////////////////////////////////////

/////////////////////////
///production Number/////
/////////////////////////
}
?>