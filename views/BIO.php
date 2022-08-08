<?php
require("../model/database.php");
require("../classes/Users/user.php");


if(isset($_GET['msg'])) {
    echo $_GET['msg'];
}
$msg="";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <title>Document</title>
</head>

<body>
    <div class="container">

        <form action="../model//Backend/backend.php" method="POST">
            <h1>Bio data</h1>
            <label>First name</label>
            <input type="text" name='first_name' />


            <br>

            <label>Middle name</label>
            <input type="text" name="middle_name" />
            <br>

            <label>Last name</label>
            <input type="text" name="last_name" />


            <br>

            <label>Date of Birth</label>
            <input type="date" name="date_of_birth" />

            <br>

            <label>Email</label>
            <input type="text" name="email" />

            <br>

            <label for="skin_color">Skin color</label>
            <select name="skin_color" id="skin_color">
                <option value="Dark">Dark</option>
                <option value="Brown">Brown</option>
                <option value="light">light</option>
            </select>

            <br>



            <label for="height">Height</label>
            <select name="height" id="height">
                <option value="Tall">Tall</option>
                <option value="Average">Average</option>
                <option value="Short">Short</option>
            </select>


            <br>

            <label for="Body_type">Body type</label>
            <select name="body_type" id="Body_type">
                <option value="Tall">Bold</option>
                <option value="Average">Average</option>
                <option value="Slim">Slim</option>
            </select>


            <br>

            <label>Phone number</label>
            <input type="tel" name="phone_number" />


            <br>
            <input type="submit" name="submit" class='submit_btn'>
         

        </form>


    </div>
    <?php
    // $userBio = new User();
    // $rlts = $userBio->userInfo();
    // print_r($userBio->getResult());

    // if (!empty($rlts)) {
    //     foreach ($rlts as $rlt) {
    //         echo "<tr>

    //         <td>{$rlt['first_name']}</td>
    //         <td>{$rlt['middle_name']}</td>
    //         <td>{$rlt['last_name']}</td>
    //         <td>{$rlt['date_of_birth']}</td>
    //         <td>{$rlt['email']}</td>
    //         <td>{$rlt['skin_color']}</td>
    //         <td>{$rlt['height']}</td>
    //         <td>{$rlt['body_type']}</td>
    //         <td>{$rlt['phone_number']}</td>

    //         </tr>";
    //     }
    // }



    ?>
</body>

</html>