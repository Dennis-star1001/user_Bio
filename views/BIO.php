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
        
    <form>
       <h1>Bio data</h1>
        <label>First name</label>
        <input type="text" />


        <br>

        <label>Last name</label>
        <input type="text" />

        <br>
        <label>Email</label>
        <input type="text" />

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
        <select name="Body_type" id="Body_type">
            <option value="Tall">Bold</option>
            <option value="Average">Average</option>
            <option value="Slim">Slim</option>
        </select>

        
        <br>
        
        <label>Phone number</label>
        <input type="number" />

 
        <br>

        <button type="submit" name="submit" class='submit_btn' >Save</button>
    
    </form>
    </div>
</body>

</html>