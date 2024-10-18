<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Developer Registration</title>
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

        }
        .btn {
            margin-left: 27%;
        }
        h3 {
            margin-left: 6%;
            font-size: 3.5vh;
        }
        .maincontainer{
            width: 80vw;
            height: 80vh;
            display: flex;
            margin-left: auto;
            margin-right: auto;
            margin-top: 10vh;
            background-color: white;
            box-shadow: 5px 10px 18px #888888;
        }
        .sectionone{
            width: 40%;
            height:inherit;
        }
        img {
            width: 100%;
            height:inherit;
            object-fit: cover;
        }
        .sectiontwo{
            width: 60%;
            height:inherit;
            align-content: center;
        }
        
        .formsections{
            display: flex;
            justify-content: space-around;
        }
        .formone, .formtwo {
            height: 80%;
            width: 18vw;
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

        .table {
            width:90%;
            height: auto;
            margin-top: 10vh;
            margin-left: auto;
            margin-right: auto;
        }

        th {
            width: 10vw;
            font-size: 14px;
            background-color: lightgray;
        }

        table, th, td {
            border: 1px solid gray;
            border-collapse: collapse;
        }

        td {
            font-size: 12px;
            text-align: center;
        }

        .link {
            display: inline-block;
            padding: 5px 10px;
            margin: 5px;
            font-size: 10px;
            text-decoration: none;
            color: white;
            border-radius: 5px;
        }
        .editBtn {
            background-color: #4CAF50;
        }

        .delBtn{
            background-color: #f44336;
        }

        hr {
            height: 0.5vh;
            width: 2vw;
            margin-left: 6%;
            margin-top: -2vh;
            background-color: blue;
            border: 0;
        }
    </style>
</head>
<body>
    <div class="maincontainer">
        <div class="sectionone">
            <img src="assets\causevox_illustration-01.jpg">
        </div>
        <div class="sectiontwo">
            <h3>Welcome Future Game Developer</h3>
            <hr>
            <form action="core/handleForms.php" method="POST">
                <p>
                    <label for="Developer_id"></label> 
                    <input type="hidden" name="Developer_id" value="<?php echo isset($_POST['Developer_id']) ? $_POST["Developer_id"] : ''; ?>">
                </p>
                <div class="formsections">
                <div class="formone">
                <p>
                    <label for="firstName">First Name: </label>
                    <input type="text" name="firstName">
                </p>
                <p>
                    <label for="lastName">Last Name: </label>
                    <input type="text" name="lastName">
                </p>
                <p>
                    <label for="email">Email: </label>
                    <input type="text" name="email">
                </p>
                <p>
                    <label for="expLevel">Experince Level: </label>
                    <input type="number" name="expLevel">
                </p>
                <p>
                    <label for="prefEngine">Preferred Engine: </label>
                    <input type="text" name="prefEngine">
                </p>
                </div>
                <div class="formtwo">
                <p>
                    <label for="progLanguage">Programming Language: </label>
                    <input type="text" name="progLanguage">
                </p>
                <p>
                    <label for="focusPlatform">Focus Platform: </label>
                    <input type="text" name="focusPlatform">
                </p>
                <p>
                    <label for="collabExp">Collaborative Experince: </label>
                    <input type="text" name="collabExp">
                </p>
                <p>
                    <label for="motivation">Motivation: </label>
                    <input type="text" name="motivation">
                </p>
                <p>
                    <label for="favGame">Favorite Game: </label>
                    <input type="text" name="favGame">
                </p>
                </div>
                </div>
                <p class="btn">
                    <button name="insertNewDevBtn">Submit</button>
                </p>
            </form>
        </div>
    </div>

    <div class="table">
        <table>
            <tr>
                <th>Developer ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Exp Level</th>
                <th>Engine</th>
                <th>Programming Language</th>
                <th>Platform</th>
                <th>Collab</th>
                <th>Motivation</th>
                <th>Favorite Game</th>
                <th></th>
            </tr>
            <?php $seeAllGameDevRecords = seeAllGameDevRecords($pdo); ?>
            <?php foreach ($seeAllGameDevRecords as $row) { ?>
                <tr>
                    <td><?php echo $row['Developer_id']; ?></td>
                    <td><?php echo $row['first_name']; ?></td>
                    <td><?php echo $row['last_name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['expLevel']; ?></td>
                    <td><?php echo $row['preferredEngine']; ?></td>
                    <td><?php echo $row['progLanguage']; ?></td>
                    <td><?php echo $row['focusPlatform']; ?></td>
                    <td><?php echo $row['collabExp']; ?></td>
                    <td><?php echo $row['motivation']; ?></td>
                    <td><?php echo $row['favGame']; ?></td>
                    <td>
                        <a class="link editBtn" href="editdev.php?Developer_id=<?php echo $row['Developer_id'];?>">Edit</a>
                        <a class="link delBtn" href="deletedev.php?Developer_id=<?php echo $row['Developer_id'];?>">Delete</a>
                    </td>
                </tr>

                <?php } ?>
        </table>
    </div>
</body>
</html>