<?php 

require_once 'dbconfig.php'; 
require_once 'models.php';

if (isset($_POST['insertNewDevBtn'])) {
	$firstName = trim($_POST['firstName']);
	$lastName = trim($_POST['lastName']);
	$email = trim($_POST['email']);
	$expLevel = trim($_POST['expLevel']);
	$prefEngine = trim($_POST['prefEngine']);
	$progLanguage = trim($_POST['progLanguage']);
    $focusPlatform = trim($_POST['focusPlatform']);
    $collabExp = trim($_POST['collabExp']);
    $motivation = trim($_POST['motivation']);
    $favGame = trim($_POST['favGame']);



	if (!empty($firstName) && !empty($lastName) && !empty($email) && !empty($expLevel)  && !empty($prefEngine)  && !empty($progLanguage) && !empty($focusPlatform) && !empty($collabExp) && !empty($motivation) && !empty($favGame)) {
			$query = insertIntoApplicantRecords($pdo, $firstName, $lastName, 
			$email, $expLevel, $prefEngine, $progLanguage, $focusPlatform, $collabExp, $motivation, $favGame);

		if ($query) {
			header("Location: ../index.php");
		}

		else {
			echo "Insertion failed";
		}
	}

	else {
		echo "Make sure that no fields are empty";
	}
	
}


if (isset($_POST['editDetailsBtn'])) {

	$Developer_id = isset($_POST['Developer_id']) ? $_POST["Developer_id"] : '';
	$firstName = trim($_POST['firstName']);
	$lastName = trim($_POST['lastName']);
	$email = trim($_POST['email']);
	$expLevel = trim($_POST['expLevel']);
	$prefEngine = trim($_POST['prefEngine']);
	$progLanguage = trim($_POST['progLanguage']);
    $focusPlatform = trim($_POST['focusPlatform']);
    $collabExp = trim($_POST['collabExp']);
    $motivation = trim($_POST['motivation']);
    $favGame = trim($_POST['favGame']);

	if (!empty($Developer_id) && !empty($firstName) && !empty($lastName) && !empty($email) && !empty($expLevel)  && !empty($prefEngine)  && !empty($progLanguage) && !empty($focusPlatform) && !empty($collabExp) && !empty($motivation) && !empty($favGame)) {

		$query = updateADeveloper($pdo, $Developer_id, $firstName, $lastName, $email, $expLevel, $prefEngine, $progLanguage, $focusPlatform, $collabExp, $motivation, $favGame);

		if ($query) {
			header("Location: ../index.php");
			exit;
		}
		else {
			echo "Update failed";
		}

	}

	else {
		echo "Make sure that no fields are empty";
	}

}





if (isset($_POST['deleteDevBtn'])) {

	$query = deleteAccount($pdo, $_GET['Developer_id']);

	if ($query) {
		header("Location: ../index.php");
	}
	else {
		echo "Deletion failed";
	}
}

?>