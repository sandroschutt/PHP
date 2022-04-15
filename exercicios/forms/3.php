<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>php exercício 03</title>
    </head>

    <body>
        <?php
            if(!isset($_POST['submit'])){
        ?>
        <h1>Favorite City</h1>
        <form action="3.php" method="post">
            <select id="cars" name="weekday">
                <option value="monday">Monday</option>
                <option value="tuesday">Tuesday</option>
                <option value="wednesday">Wednesday</option>
                <option value="thursday">Thursday</option>
                <option value="friday">Friday</option>
                <option value="saturday">Saturday</option>
            </select>
            <button name="submit" type="submit">Send</button>
        </form>
        <?php
            }
            else{
                $weekday = $_POST['weekday'];
                if($weekday == 'monday'){
                    echo '<br/>Laugh on Monday, laugh for danger.';
                }
                else if($weekday == 'tuesday'){
                    echo '<br/>Laugh on Tuesday, kiss a stranger.';
                }
                else if($weekday == 'wednesday'){
                    echo '<br/>Laugh on Wednesday, laugh for a letter.';
                }
                else if($weekday == 'thursday'){
                    echo '<br/>Laugh on Thursday, something better.';
                }
                else if($weekday == 'friday'){
                    echo '<br/>Laugh on Friday, laugh for sorrow.';
                }
                else if($weekday == 'saturday'){
                    echo '<br/>Laugh on Saturday, joy tomorrow.';
                }
            }
        ?>
    </body>
</html>