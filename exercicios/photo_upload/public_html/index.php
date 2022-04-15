<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/styles.css">
        <title>Photo Upload</title>
    </head>

    <body>
        <div>
            <form action="../php/photo_handler.php" method="post">
                <div class="usr-input">
                    Photo Filename: <input type="text" name="photo_filename_1" placeholder="path/file.img">
                    Photo Caption: <input type="text" name="photo_caption" placeholder="Your caption here">
                </div>
                <div class="usr-input">
                    Photo Filename: <input type="text" name="photo_filename_2" placeholder="path/file.img">
                    Photo Caption: <input type="text" name="photo_caption_2" placeholder="Your caption here">
                </div>
                <div class="usr-input">
                    Photo Filename: <input type="text" name="photo_filename_3" placeholder="path/file.img">
                    Photo Caption: <input type="text" name="photo_caption_3" placeholder="Your caption here">
                </div>
                <div class="usr-input">
                    Photo Filename: <input type="text" name="photo_filename_4" placeholder="path/file.img">
                    Photo Caption: <input type="text" name="photo_caption_4" placeholder="Your caption here">
                </div>
                <div class="usr-input">
                    <p>Select your background color</p>
                    <input type="radio" id="white" name="bg_color" value="white">
                    <label for="white">White</label>
                    <input type="radio" id="yellow" name="bg_color" value="yellow">
                    <label for="yellow">Yellow</label>
                    <input type="radio" id="blue" name="bg_color" value="blue">
                    <label for="blue">Blue</label>
                    <input type="radio" id="red" name="bg_color" value="red">
                    <label for="red">Red</label>
                </div>
                <br/>
                <div class="usr-input">
                    <input type="reset" value="Reset">
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>
    </body>
</html>