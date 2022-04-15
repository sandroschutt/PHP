<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>php exercício 02</title>
    </head>

    <body>
        <?php
            if(!isset($_POST['submit'])){
        ?>
        <h1>Favorite City</h1>
        <form action="2.php" method="post">
            <input name="city" type="text" placeholder="City">
            <button name="submit" type="submit">Send</button>
        </form>
        <?php
            }
            else{
                $city = $_POST['city'];
                echo "Your favorite city is $city.";
            }
        ?>
    </body>
</html>