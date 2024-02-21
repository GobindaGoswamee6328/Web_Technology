<?php
 
 include '../controller/process.php'

?>

<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
     <h1> Information </h1>
     <form action="" method="POST">

        <label> Full Name: </label>
        <input type="text" name="name">
        <?php echo $nameError; ?>
        <br><br>

        <label> E-mail: </label>
        <input type="text" name="email">
        <?php echo $emailError; ?>
        <br><br>

        <label> Address: </label>
        <textarea rows="5" cols="30" name="address"></textarea>
        <?php echo $addressError; ?>
        <br><br>

        <label> Gender: </label>
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="female">Female
        <?php echo $genderError; ?>
        <br><br>

        <label> Sports: </label>
        <select id="Sports" name="sport">
            <option value="Cricket">Cricket</option>
            <option value="Football">Football</option>
            <option value="Hockey">Hockey</option>
            <option value="Badminton">Badminton</option>
        </select>Sport
        <br><br>

        <label> Interest: </label>
        <input type="checkbox" name="interest" value="sports">Sports
        <input type="checkbox" name="interest" value="reading">Reading
        <?php echo $interestError; ?>
        <br><br>

        
        <input type="submit" name="submit" value="Submit">

     </form>

    </body>

</html>

