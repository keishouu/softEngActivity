<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Delete Developer</title>
	<style>
        body {
            font-family: "Arial";
            background-color: #F5EFFF;
        }
        .deets {
            font-weight: bold;
        }

        button {
            color: white;
            background-color: #f44336;
            border: 0;
            border-radius: 25px;
            font-size: 2vh;
            padding: 1vh;
            width: 20vw;

        }

        a {
            color: #f44336;
        }
        .maincontainer{
            width: 70vw;
            height: 70vh;
            margin-left: auto;
            margin-right: auto;
            margin-top: 10vh;
            background-color: white;
            box-shadow: 5px 10px 18px #888888;
            padding: 5vh 5vw;
        }

        button {
            margin-left: 38%;
        }
	</style>
</head>
<body>
    <div class="maincontainer">
        <h1>Are you sure you want to <a>delete</a> this user?</h1>
        <?php $getDevByID = getDevByID($pdo, $_GET['Developer_id']); ?>
        <form action="core/handleForms.php?Developer_id=<?php echo $_GET['Developer_id']; ?>" method="POST">

            <div class="developerContainer">
                <p>First Name: <span class='deets'><?php echo $getDevByID['first_name']; ?></span></p>
                <p>Last Name: <span class='deets'><?php echo $getDevByID['last_name']; ?></span></p>
                <p>Email: <span class='deets'><?php echo $getDevByID['email']; ?></span></p>
                <p>Experience Level: <span class='deets'><?php echo $getDevByID['expLevel']; ?></span></p>
                <p>Preferred Engine: <span class='deets'><?php echo $getDevByID['preferredEngine']; ?></span></p>
                <p>Programming Language: <span class='deets'><?php echo $getDevByID['progLanguage']; ?></span></p>
                <p>Focus Platform: <span class='deets'><?php echo $getDevByID['focusPlatform']; ?></span></p>
                <p>Collaborative Experience: <span class='deets'><?php echo $getDevByID['collabExp']; ?></span></p>
                <p>Motivation: <span class='deets'><?php echo $getDevByID['motivation']; ?></span></p>
                <p>Favorite Game: <span class='deets'><?php echo $getDevByID['favGame']; ?></span></p>

                <button class="delBtn" name="deleteDevBtn">Delete</button>
            </div>
        </form>
    </div>
</body>
</html>
