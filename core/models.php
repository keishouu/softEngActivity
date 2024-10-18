<?php

require_once 'dbconfig.php';

function insertIntoApplicantRecords($pdo, $firstName, $lastName, 
$email, $expLevel, $prefEngine, $progLanguage, $focusPlatform, $collabExp, $motivation, $favGame) {
    $sql = "INSERT INTO gamedevregistration (first_name, last_name, email, expLevel, preferredEngine, progLanguage, focusPlatform, collabExp, motivation, favGame) VALUES (?,?,?,?,?,?,?,?,?,?)";

    $stmt = $pdo->prepare($sql);

    $executeQuery = $stmt->execute([$firstName, $lastName, 
    $email, $expLevel, $prefEngine, $progLanguage, $focusPlatform, $collabExp, $motivation, $favGame]);

    if ($executeQuery) {
        return true;
    }

}

function seeAllGameDevRecords($pdo) {
	$sql = "SELECT * FROM gamedevregistration";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute();
	if ($executeQuery) {
		return $stmt->fetchAll();
	}
}

function getDevByID($pdo, $Developer_id) {
	$sql = "SELECT * FROM gamedevregistration WHERE Developer_id = ?";
	$stmt = $pdo->prepare($sql);
	if ($stmt->execute([$Developer_id])) {
		return $stmt->fetch();
	}
}

function updateADeveloper($pdo, $Developer_id, $firstName, $lastName, $email, $expLevel, $prefEngine, $progLanguage, $focusPlatform, $collabExp, $motivation, $favGame) {

	$sql = "UPDATE gamedevregistration 
				SET first_name = ?, 
					last_name = ?, 
					email = ?, 
					expLevel = ?, 
					preferredEngine = ?, 
					progLanguage = ?,
                    focusPlatform = ?,
                    collabExp = ?,
                    motivation = ?,
                    favGame = ?
			WHERE Developer_id = ?";
	$stmt = $pdo->prepare($sql);
	
	$executeQuery = $stmt->execute([$firstName, $lastName, $email, $expLevel, $prefEngine, $progLanguage, $focusPlatform, $collabExp, $motivation, $favGame, $Developer_id]);

	if ($executeQuery) {
		return true;
	}
}



function deleteAccount($pdo, $Developer_id) {

	$sql = "DELETE FROM gamedevregistration WHERE Developer_id = ?";
	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute([$Developer_id]);

	if ($executeQuery) {
		return true;
	}

}

?>