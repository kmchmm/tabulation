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

    header('Location: wannabee.php?success=Information Updated!');

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

    header('Location: spoken.php?success=Information Updated!');

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
    $acTotal = $acVocal + $acExpression + $acShowmanship;

    $ac = "UPDATE acoustic SET housename='$achouseName',vocals='$acVocal', expression='$acExpression',showmanship='$acShowmanship', total ='$acTotal' WHERE id = '$acid'" ;
    $ac_run = mysqli_query($conn,$ac);

    header('Location: acoustic.php?success=Information Updated!');

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

    header('Location: duo.php?success=Information Updated!');

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

    header('Location: solo.php?success=Information Updated!');

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

    header('Location: videomontage.php?success=Information Updated!');

}

///////////////////////////////////////////////
/////////////////////MR & MS CCS///////////////
///////////////////////////////////////////////

/////////////////////////
///production Number/////
/////////////////////////
if(isset($_POST['pnSave'])){

    $pnid = $_POST['pnID'];
    $pnNum = $_POST['pnNum'];
    $pncontestantname = $_POST['pn1'];
    $pnHousename = $_POST['pnHouse'];
    $pnVoice = $_POST['pn2'];
    $pnDance = $_POST['pn3'];
    $pnPresence = $_POST['pn4'];
    $pnConfidence = $_POST['pn5'];
    $pnTotal = $_POST['pnTotal'];


    $pnTotal = $pnVoice + $pnDance + $pnPresence + $pnConfidence;

    $pn = "UPDATE production SET Contestantnum='$pnNum', contestantname='$pncontestantname',house='$pnHousename',voice='$pnVoice', dance='$pnDance',presence='$pnPresence', confidence='$pnConfidence', total ='$pnTotal' WHERE id = '$pnid'";
    $pn_run = mysqli_query($conn,$pn);

    header('Location: productionnumber.php?success=Information Updated!');
}
/////////////////////////
///SCHOOL UNIFORM/////
/////////////////////////
if(isset($_POST['suSave'])){

    $suID = $_POST['schoolID'];
    $schoolNum = $_POST['schoolNum'];
    $sucontestantname = $_POST['su1'];
    $suHousename = $_POST['suHouse'];
    $suPoise = $_POST['su2'];
    $suConfidence = $_POST['su3'];
    $suOverall = $_POST['su4'];
    $suTotal = $_POST['suTotal'];


    $suTotal = $suPoise + $suConfidence + $suOverall;

    $su = "UPDATE school SET Contestantnum='$schoolNum', contestantname='$sucontestantname',house='$suHousename',poise='$suPoise', confidence='$suConfidence',overalllook='$suOverall', total ='$suTotal' WHERE id = '$suID'";
    $su_run = mysqli_query($conn,$su);

    header('Location: schooluniform.php?success=Information Updated!');
}
/////////////////////////
///future attire/////
/////////////////////////
if(isset($_POST['futureSave'])){

    $futureID = $_POST['futureID'];
    $futureNum = $_POST['futureNum'];
    $futurecontestantname = $_POST['future1'];
    $futureHousename = $_POST['futureHouse'];
    $futurePoise = $_POST['future2'];
    $futureConfidence = $_POST['future3'];
    $futureOverall = $_POST['future3'];
    $futureTotal = $_POST['futureTotal'];


    $futureTotal = $futurePoise + $futureConfidence + $futureOverall;

    $future = "UPDATE future SET Contestantnum='$futureNum', contestantname='$futurecontestantname',house='$futureHousename',poise='$futurePoise', confidence='$futureConfidence',overalllook='$futureOverall', total ='$futureTotal' WHERE id = '$futureID'";
    $future_run = mysqli_query($conn,$future);

    header('Location: futureattire.php?success=Information Updated!');
}
/////////////////////////
///formal attire/////
/////////////////////////
if(isset($_POST['formalSave'])){

    $formalID = $_POST['formalID'];
    $formalNum = $_POST['formalNum'];
    $formalcontestantname = $_POST['formal1'];
    $formalHousename = $_POST['formalHouse'];
    $formalPoise = $_POST['formal2'];
    $formalConfidence = $_POST['formal3'];
    $formalOverall = $_POST['formal4'];
    $formalTotal = $_POST['formalTotal'];


    $formalTotal = $formalPoise + $formalConfidence + $formalOverall;

    $formal = "UPDATE formal SET Contestantnum='$formalNum', contestantname='$formalcontestantname',house='$formalHousename',poise='$formalPoise', confidence='$formalConfidence',overalllook='$formalOverall', total ='$formalTotal' WHERE id = '$formalID'";
    $formal_run = mysqli_query($conn,$formal);

    header('Location: formalattire.php?success=Information Updated!');
}


/////////////////////////
////////Q AND A//////////
/////////////////////////
if(isset($_POST['qaSave'])){

    $qaID = $_POST['qaID'];
    $qaNum = $_POST['qaNum'];
    $qacontestantname = $_POST['qa1'];
    $qaHousename = $_POST['qaHouse'];
    $qaVoice = $_POST['qa2'];
    $qaContent = $_POST['qa3'];
    $qaConfidence = $_POST['qa4'];
    $qaAudience = $_POST['qa5'];
    $qaTotal = $_POST['qaTotal'];


    $qaTotal = $qaVoice + $qaContent + $qaConfidence + $qaAudience;

    $qa = "UPDATE qa SET Contestantnum='$qaNum', contestantname='$qacontestantname',house='$qaHousename',voice='$qaVoice', content='$qaContent',confidence='$qaConfidence', audience='$qaAudience', total ='$qaTotal' WHERE id = '$qaID'";
    $qa_run = mysqli_query($conn,$qa);

    header('Location: QA.php?success=Information Updated!');
}
?>