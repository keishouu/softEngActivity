<?php 

require_once 'dbconfig.php'; 
require_once 'models.php';

if (isset($_POST['insertNewStudentBtn'])) {
	$firstName = trim($_POST['firstName']);
	$lastName = trim($_POST['lastName']);
	$email = trim($_POST['email']);
	$password = trim($_POST['password']);
	$expLevel = trim($_POST['expLevel']);
	$prefEngine = trim($_POST['preparedEngine']);
	$progLanguage = trim($_POST['proglanguage']);
    $focusPlatform = trim($_POST['focusPlatform']);
    $collabExp = trim($_POST['collabExp']);
    $motivation = trim($_POST['motivation']);
    $favGame = trim($_POST['favGame']);



	if (!empty($firstName) && !empty($lastName) && !empty($email) && !empty($password) && !empty($expLevel)  && !empty($prefEngine)  && !empty($progLanguage) && !empty($focusPlatform) && !empty($collabExp) && !empty($motivation) && !empty($favGame)) {
			$query = insertIntoApplicantRecord($pdo, $firstName, $lastName, 
			$email, $password, $expLevel, $prefEngine, $progLanguage, $focusPlatform, $collabExp, $motivation, $favGame);

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
	$devID = $_GET['developer_id'];
	$firstName = trim($_POST['firstName']);
	$lastName = trim($_POST['lastName']);
	$email = trim($_POST['email']);
	$password = trim($_POST['password']);
	$expLevel = trim($_POST['expLevel']);
	$prefEngine = trim($_POST['preparedEngine']);
	$progLanguage = trim($_POST['proglanguage']);
    $focusPlatform = trim($_POST['focusPlatform']);
    $collabExp = trim($_POST['collabExp']);
    $motivation = trim($_POST['motivation']);
    $favGame = trim($_POST['favGame']);

	if (!empty($firstName) && !empty($lastName) && !empty($email) && !empty($password) && !empty($expLevel)  && !empty($prefEngine)  && !empty($progLanguage) && !empty($focusPlatform) && !empty($collabExp) && !empty($motivation) && !empty($favGame)) {

		$query = updateDetails($pdo, $firstName, $lastName, 
        $email, $password, $expLevel, $prefEngine, $progLanguage, $focusPlatform, $collabExp, $motivation, $favGame);

		if ($query) {
			header("Location: ../index.php");
		}
		else {
			echo "Update failed";
		}

	}

	else {
		echo "Make sure that no fields are empty";
	}

}





if (isset($_POST['deleteAccountBtn'])) {

	$query = deleteAccount($pdo, $_GET['devID']);

	if ($query) {
		header("Location: ../index.php");
	}
	else {
		echo "Deletion failed";
	}
}

?>