<?php 
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "cis4379";

$conn = new mysqli($servername, $username, $password);

if($conn->connection_error) {
    die("Connection failed: " . $conn->connection_error);
}
else {
    echo "Connection established.";
}

$sql = "CREATE DATABASE `cis4379`;";
if($conn->query($sql) === TRUE) {
    echo "\nDatabase created successfully.";
}
else {
    echo "\nError creating database!" . $conn->error;
}

$conn->close();

$conn = new mysqli($servername, $username, $password, $dbname);


//-----------------------------------------------------------------

//CREATE EMPLOYEE TABLE
$sql = "CREATE TABLE `employee` (
    `EmpID` int(11) NOT NULL,
    `FName` varchar(25) NOT NULL,
    `LName` varchar(25) NOT NULL,
    `Login` varchar(20) NOT NULL,
    `Password` varchar(20) NOT NULL
  );";
if($conn->query($sql) === TRUE) {
    echo "\nTable employee created successfully.";
}
else {
    echo "\nError creating employee table!" . $conn->error;
}

//POPULATE EMPLOYEE TABLE
$sql = "INSERT INTO `employee` (`EmpID`, `FName`, `LName`, `Login`, `Password`) VALUES
(10001, 'Adam', 'Alvarez', 'adam.alvarez', 'password'),
(10002, 'Betty', 'Bloomer', 'betty.bloomer', 'password'),
(10003, 'Charlie', 'Carson', 'charlie.carson', 'password'),
(10004, 'Dennis', 'Davis', 'dennis.davis', 'password'),
(10005, 'Emma', 'Easton', 'emma.easton', 'password'),
(10006, 'Fred', 'Farber', 'fred.farber', 'password'),
(10007, 'George', 'Gantry', 'george.gantry', 'password'),
(10008, 'Henry', 'Holbrook', 'henry.holbrook', 'password');";
if($conn->query($sql) === TRUE) {
    echo "\nTable employee populated successfully.";
}
else {
    echo "\nError populating employee table!" . $conn->error;
}

//-----------------------------------------------------------------

//CREATE MEDICATIONS TABLE
$sql = "CREATE TABLE `medications` (
    `PatientID` int(11) NOT NULL,
    `MedDate` varchar(256) NOT NULL,
    `MedName` varchar(30) NOT NULL,
    `MedDose` varchar(30) NOT NULL,
    `MedFreq` varchar(10) NOT NULL,
    `IsActive` tinyint(1) NOT NULL
  );";
if($conn->query($sql) === TRUE) {
    echo "\nTable medications created successfully.";
}
else {
    echo "\nError creating medications table!" . $conn->error;
}

//-----------------------------------------------------------------

//CREATE PATIENT TABLE
$sql = "CREATE TABLE `patient` (
    `PatientID` int(11) NOT NULL,
    `FName` varchar(25) NOT NULL,
    `LName` varchar(25) NOT NULL
  );";
if($conn->query($sql) === TRUE) {
    echo "\nTable patient created successfully.";
}
else {
    echo "\nError creating patient table!" . $conn->error;
}

//-----------------------------------------------------------------

//CREATE SOAP TABLE
$sql = "CREATE TABLE `soap` (
    `SoapID` int(11) NOT NULL,
    `EmpID` int(11) NOT NULL,
    `PatientID` int(11) NOT NULL,
    `SoapDate` varchar(256) NOT NULL,
    `Symptoms` varchar(256) DEFAULT NULL,
    `Stresses` varchar(256) DEFAULT NULL,
    `Agitated` tinyint(1) DEFAULT NULL,
    `Sleeplog` tinyint(1) DEFAULT NULL,
    `CooperativeSub` tinyint(1) DEFAULT NULL,
    `Behavior` varchar(256) DEFAULT NULL,
    `Othertx` varchar(256) DEFAULT NULL,
    `Gait` varchar(256) DEFAULT NULL,
    `Posture` varchar(256) DEFAULT NULL,
    `Clothing` varchar(256) DEFAULT NULL,
    `Grooming` varchar(256) DEFAULT NULL,
    `Mannerisms` varchar(256) DEFAULT NULL,
    `Gestures` varchar(256) DEFAULT NULL,
    `PsychomotorActivity` varchar(256) DEFAULT NULL,
    `Expression` varchar(256) DEFAULT NULL,
    `EyeTracking` varchar(256) DEFAULT NULL,
    `Commands` varchar(256) DEFAULT NULL,
    `Compulsions` varchar(256) DEFAULT NULL,
    `Hostile` tinyint(1) DEFAULT NULL,
    `Open` tinyint(1) DEFAULT NULL,
    `Secretive` tinyint(1) DEFAULT NULL,
    `Evasive` tinyint(1) DEFAULT NULL,
    `CooperativeAtt` tinyint(1) DEFAULT NULL,
    `Defensive` tinyint(1) DEFAULT NULL,
    `Apathetic` tinyint(1) DEFAULT NULL,
    `Distracted` tinyint(1) DEFAULT NULL,
    `Focused` tinyint(1) DEFAULT NULL,
    `Alert` tinyint(1) DEFAULT NULL,
    `Drowsy` tinyint(1) DEFAULT NULL,
    `Stuporous` tinyint(1) DEFAULT NULL,
    `Comatose` tinyint(1) DEFAULT NULL,
    `Confused` tinyint(1) DEFAULT NULL,
    `Vigilant` tinyint(1) DEFAULT NULL,
    `Lethargic` tinyint(1) DEFAULT NULL,
    `Fluctuating` tinyint(1) DEFAULT NULL,
    `Diagnosis` varchar(256) DEFAULT NULL,
    `Axis1` varchar(256) DEFAULT NULL,
    `Axis2` varchar(256) DEFAULT NULL,
    `Axis3` varchar(256) DEFAULT NULL,
    `Plan` varchar(256) DEFAULT NULL
  );";
if($conn->query($sql) === TRUE) {
    echo "\nTable soap created successfully.";
}
else {
    echo "\nError creating soap table!" . $conn->error;
}

//-----------------------------------------------------------------

//CREATE VITALS TABLE
$sql = "CREATE TABLE `vitals` (
    `PatientID` int(11) NOT NULL,
    `SoapID` int(11) NOT NULL,
    `VitalDT` varchar(256) NOT NULL,
    `HR` int(11) DEFAULT NULL,
    `Resp` int(11) DEFAULT NULL,
    `BP` varchar(10) DEFAULT NULL,
    `Temp` varchar(10) DEFAULT NULL,
    `SPO2` int(11) DEFAULT NULL
  );";
if($conn->query($sql) === TRUE) {
    echo "\nTable vitals created successfully.";
}
else {
    echo "\nError creating vitals table!" . $conn->error;
}

//-----------------------------------------------------------------

//SET PRIMARY KEYS
$sql = "ALTER TABLE `employee`
ADD PRIMARY KEY (`EmpID`);";
if($conn->query($sql) === TRUE) {
    echo "\nEmployee PK set succesfully.";
}
else {
    echo "\nError setting employee PK!" . $conn->error;
}

$sql = "ALTER TABLE `patient`
ADD PRIMARY KEY (`PatientID`);";
if($conn->query($sql) === TRUE) {
    echo "\nPatient PK set succesfully.";
}
else {
    echo "\nError setting patient PK!" . $conn->error;
}

$sql = "ALTER TABLE `soap`
ADD PRIMARY KEY (`SoapID`);";
if($conn->query($sql) === TRUE) {
    echo "\nSoap PK set succesfully.";
}
else {
    echo "\nError setting soap PK!" . $conn->error;
}

//-----------------------------------------------------------------

$conn->close();

?>