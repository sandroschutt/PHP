<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/styles.css">
        <title>Displaying Photos</title>
    </head>

    <!-- <?php 
    $bgcolor = $_POST["bg_color"];
    ?> -->

    <body>
        <div class="container">
            <div style="background-color: <?= $_POST['bg_color'] ?>; width: 55%;">
                <h1 align="center">Displaying Photos</h1>
                <!-- precisa passar o caminho da imagem no input como no exemplo:s
                ../images/Square,_Inc_-_Square_Logo.jpg
                -->
                <table align="center">
                        <tr>
                            <td>
                                <figure>
                                    <img src="<?= $_POST['photo_filename_1'] ?>">
                                    <figcaption align="center"><?= $_POST['photo_caption'] ?></figcaption>
                                </figure>
                            </td>
                            <td>
                                <figure>
                                <img src="<?= $_POST            ['photo_filename_2'] ?>">
                                <figcaption align="center"><?= $_POST['photo_caption_2'] ?></figcaption>
                                </figure>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <figure>
                                    <img src="<?= $_POST['photo_filename_3'] ?>">
                                    <figcaption align="center"><?= $_POST['photo_caption_3'] ?></figcaption>
                                </figure>
                            </td>
                            <td>
                                <figure>
                                    <img src="<?= $_POST['photo_filename_4'] ?>">
                                    <figcaption align="center"><?= $_POST['photo_caption_4'] ?></figcaption>
                                </figure>
                            </td>
                        </tr>
                    </table>
                </div>
        </div>
    </body>
</html>