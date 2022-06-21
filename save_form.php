<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "root";
$dbname = "cis4379";

$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

//-----------------------------------------------------------------

//Store values into variables for Soap Table
$soapid = $_POST['soapid'];
$EmpID = $_POST['EmpID'];
$patientid = $_POST['patientid'];
$vitaldt = $_POST['vitaldt'];
$symptoms = $_POST['symptoms'];
$stresses = $_POST['stresses'];
$agitated = $_POST['agitated'];
$sleeplog = $_POST['sleeplog'];
$cooperative = $_POST['cooperative'];
$behavior = $_POST['behavior'];
$othertx = $_POST['othertx'];
$gait = $_POST['gait'];
$posture = $_POST['posture'];
$clothing = $_POST['clothing'];
$grooming = $_POST['grooming'];
$mannerisms = $_POST['mannerisms'];
$gestures = $_POST['gestures'];
$psycho = $_POST['psychomotoractivity'];
$expression = $_POST['expression'];
$eyetracking = $_POST['eyetracking'];
$commands = $_POST['commands'];
$compulsions = $_POST['compulsions'];
$hostile = $_POST['hostile'];
$open = $_POST['open'];
$secretive = $_POST['secretive'];
$evasive = $_POST['evasive'];
$cooperativeAtt = $_POST['cooperativeattitude'];
$defensive = $_POST['defensive'];
$apathetic = $_POST['apathetic'];
$distracted = $_POST['distracted'];
$focused = $_POST['focused'];
$alert = $_POST['alert'];
$drowsy = $_POST['drowsy'];
$stuporous = $_POST['stuporous'];
$comatose = $_POST['comatose'];
$confused = $_POST['confused'];
$vigilant = $_POST['vigilant'];
$lethargic = $_POST['lethargic'];
$fluctuating = $_POST['fluctuating'];
$diagnosis = $_POST['diagnosis'];
$dsm4a1c = $_POST['dsm4a1c'];
$dsm4a2c = $_POST['dsm4a2c'];
$dsm4a3c = $_POST['dsm4a3c'];
$txplan = $_POST['txplan'];

//Save Soap Table values
$sql = "INSERT INTO `soap` (`SoapID`, `EmpID`, `PatientID`, `SoapDate`, `Symptoms`, 
    `Stresses`, `Agitated`, `Sleeplog`, `CooperativeSub`, `Behavior`, `Othertx`, 
    `Gait`, `Posture`, `Clothing`, `Grooming`, `Mannerisms`, `Gestures`, `PsychomotorActivity`, 
    `Expression`, `EyeTracking`, `Commands`, `Compulsions`, `Hostile`, `Open`, `Secretive`, 
    `Evasive`, `CooperativeAtt`, `Defensive`, `Apathetic`, `Distracted`, `Focused`, 
    `Alert`, `Drowsy`, `Stuporous`, `Comatose`, `Confused`, `Vigilant`, `Lethargic`, 
    `Fluctuating`, `Diagnosis`, `Axis1`, `Axis2`, `Axis3`, `Plan`) VALUES
    ($soapid, $EmpID, $patientid, '$vitaldt', '$symptoms', '$stresses', $agitated, $sleeplog, $cooperative, 
    '$behavior', '$othertx', '$gait', '$posture', '$clothing', '$grooming', '$mannerisms', '$gestures', '$psycho', '$expression', 
     '$eyetracking', '$commands', '$compulsions', $hostile, $open, $secretive, $evasive, $cooperativeAtt, $defensive, $apathetic,
      $distracted, $focused, $alert, $drowsy, $stuporous, $comatose, $confused, $vigilant, $lethargic, $fluctuating, '$diagnosis', '$dsm4a1c', '$dsm4a2c', '$dsm4a3c', '$txplan')";

if($conn->query($sql) === TRUE) {
    echo "\nSoap values successfully saved.";
}
else {
    header("Location: /current_final/create_form.html");
}

//-----------------------------------------------------------------

//Store medications values
$meddate = $_POST['meddate'];
$medname = $_POST['medname'];
$meddose = $_POST['meddose'];
$medfreq = $_POST['medfreq'];
$isactive = $_POST['isactive'];

//Save Medications Table values
$sql = "INSERT INTO `medications` (`PatientID`, `MedDate`, `MedName`, `MedDose`, `MedFreq`, `IsActive`)
    VALUES ($patientid, '$meddate', '$medname', '$meddose', '$medfreq', $isactive)";

if($conn->query($sql) === TRUE) {
    echo "\nMedications values successfully saved.";
}
else {
    header("Location: /current_final/create_form.html");
}

//-----------------------------------------------------------------

//Store vitals values
$hr = $_POST['hr'];
$resp = $_POST['resp'];
$bp = $_POST['bp'];
$temp = $_POST['temp'];
$spo2 = $_POST['spo2'];

//Save Vitals Table values
$sql = "INSERT INTO `vitals` (`PatientID`, `SoapID`, `VitalDT`, `HR`, `Resp`, `BP`, `Temp`, `SPO2`) 
    VALUES (1, 1, 'a', 1, 1, 'a', 'a', 1)";

if($conn->query($sql) === TRUE) {
    echo "\nVitals values successfully saved.";
}
else {
    header("Location: /current_final/create_form.html");
}

?>