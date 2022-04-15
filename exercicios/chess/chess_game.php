<!-- Write a PHP program using nested for loop that creates a chess board.

Conditions:

You can use html table having width=”400px” and take “30px” as cell height and width for check boxes. -->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Chessboard</title>
    </head>

    <style>
        .chessboard{
            width: 480px;
            height: 480px;
            border: 1px solid black;
            display: inline-block;
        }

        .black{
            width: 60px;
            height: 60px;
            background-color: black;
            float: left;
            display: block;
        }

        .white{
            width: 60px;
            height: 60px;
            background-color: none;
            float: left;
            display: block;
        }
    </style>

    <body>
            <?php
                function rowBlackStart() {
                    for($row = 0; $row <= 3; $row++){
                        echo '<span class="black"></span><span class="white"></span>';
                    }
                }

                function rowWhiteStart() {
                    for($row = 0; $row <= 3; $row++){
                        echo '<span class="white"></span><span class="black"></span>';
                    }
                }

                echo '<div class="chessboard">';

                for($rows = 0; $rows <= 3; $rows++){
                    rowBlackStart();
                    rowWhiteStart();
                }
            ?>
        </div>

    </body>
</html>