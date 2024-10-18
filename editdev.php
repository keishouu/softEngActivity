<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Developer Details</title>
	<style>
		body {
            font-family: "Arial";
            background-color: #F5EFFF;
        }
        button {
            color: white;
            background-color: #4CAF50;
            border: 0;
            border-radius: 25px;
            font-size: 2vh;
            padding: 1vh;
            width: 20vw;
			margin-left: 38%;

        }
        
        label, input {
            width: 100%;
            font-size: 14px;
        }

        input{
            height: 3.5vh;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

		.maincontainer{
            width: 80vw;
            height: 80vh;
            margin-left: auto;
            margin-right: auto;
            margin-top: 10vh;
            background-color: white;
            box-shadow: 5px 10px 18px #888888;
        }
		.formcontainer{
			display: flex;
			justify-content: space-around;
			padding-top: 40px;
		}
        .sectionone, .sectiontwo {
            height: 80%;
            width: 40%;
        }

		label {
			font-weight: bold;
		}
	</style>
</head>
<body>
    <?php $getDevByID = getDevByID($pdo, $_GET['Developer_id']); ?>
	<div class="maincontainer">
	<form action="core/handleForms.php" method="POST">
		<div class="formcontainer">
			<div class="sectionone">
				<p>
				<label for="Developer_id">Developer ID: </label> 
				<input type="text" name="Developer_id" readonly="readonly"
				value="<?php echo $getDevByID['Developer_id'];?>">
			</p>
				<p>
					<label for="firstName">First Name: </label> 
					<input type="text" name="firstName" value="<?php echo $getDevByID['first_name']; ?>">
				</p>
				<p>
					<label for="lastName">Last Name: </label> 
					<input type="text" name="lastName" value="<?php echo $getDevByID['last_name']; ?>">
				</p>
				<p>
					<label for="email">Email: </label>
					<input type="text" name="email" value="<?php echo $getDevByID['email']; ?>">
				</p>
				<p>
					<label for="expLevel">Experince Level: </label>
					<input type="number" name="expLevel" value="<?php echo $getDevByID['expLevel']; ?>">
				</p>
			
				<p>
					<label for="prefEngine">Preferred Engine: </label>
					<input type="text" name="prefEngine" value="<?php echo $getDevByID['preferredEngine']; ?>">
				</p>
			</div>
			<div class="sectiontwo">
				<p>
					<label for="progLanguage">Programming Language: </label>
					<input type="text" name="progLanguage" value="<?php echo $getDevByID['progLanguage']; ?>"></p>
				<p>
					<label for="focusPlatform">Focus Platform: </label>
					<input type="text" name="focusPlatform" value="<?php echo $getDevByID['focusPlatform']; ?>">
				</p>
				<p>
					<label for="collabExp">Collaborative Experince: </label>
					<input type="text" name="collabExp" value="<?php echo $getDevByID['collabExp']; ?>">
				</p>
				<p>
					<label for="motivation">Motivation: </label>
					<input type="text" name="motivation" value="<?php echo $getDevByID['motivation']; ?>">
				</p>
				<p>
					<label for="favGame">Favorite Game: </label>
					<input type="text" name="favGame" value="<?php echo $getDevByID['favGame']; ?>">
				</p>
				</div>
				
			</div>
		<p>
			<button name="editDetailsBtn">Submit</button>
		</p>
		
	</form>
	</div>

	
</body>
</html>