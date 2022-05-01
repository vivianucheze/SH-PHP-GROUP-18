<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Chess Board</title>
      <style>
            body {
                  display: flex;
                  justify-content: center;
                  align-items: center;
                  flex-direction: column;
                  background-color: #ccc;
                  line-height: 1.6;
            }
            table {
                  width: 400px;
                  border: 2px solid black;
            }
            h3 {
                  margin-top: 50px;
            }

            #td1 {
                  background-color: white;
                  width: 30px;
                  height: 30px
            }

            #td2 {
                  background-color: black;
                  width: 30px;
                  height: 30px
            }
      </style>
</head>

<body>
      <table>
            <?php
            echo "<h3>Chess Board Using Nested For Loop</h3>";
            for ($row = 0; $row <= 8; $row++) {
                  echo "<tr>";
                  for ($col = 0; $col <= 8; $col++) {
                        $cells = $row + $col;
                        if ($cells % 2 == 0) {
                              echo "<td id='td1'></td>";
                        } else {
                              echo "<td id='td2'></td>";
                        }
                  }
                  echo "</tr>";
            }
            ?>
      </table>
</body>

</html>