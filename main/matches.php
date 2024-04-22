<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="matches.css">
    <link rel="stylesheet" href="navbar.css">

    <title>Document</title>
</head>
<body>
<?php 
    include 'navbar.php';
?>
    <div  class="position-vg5">
        <!-- <div class="w-m8c"> -->
          
             <h1> Iraq Super League cup </h1>
                <div class="table-ps6">
                    <table>
                        <thead class="header-1xw">
                            <tr>
                                <th>Pos</th>
                                <th>Team</th>
                                <th>Name </th>
                                <th>W</th>
                                <th>D</th>
                                <th>L</th>
                                <th>matches</th>
                                <th>goalScored</th>
                                <th>points</th>
                            </tr>
                        </thead>
                        <tbody class="body-jt2">
                            <?php 
                            require_once('config.php');
                            $position = 0;
                            $query = mysqli_query($conn,'select * from club ORDER by point desc');
                            if (mysqli_num_rows($query)>0) {
                                while ($row = mysqli_fetch_assoc($query)) {
?>
                            <tr class="position">
                                <td>
                                <p class="positionPlace tdngo"><?php echo ++$position; 
    if ($position >= 5) {
        echo '<script>';
        echo 'var positionPlaces = document.querySelectorAll(".positionPlace");';
        echo 'for (let i = 5; i < positionPlaces.length; i++) {';
        echo ' positionPlaces[i].style.backgroundColor = "grey";'; 
        echo ' if(i>=positionPlaces.length-3){ 
            positionPlaces[i].style.backgroundColor = "red";
        }';
        echo 'if(positionPlaces==18){
            positionPlaces[i].style.backgroundColor = "green";
        }';
        
        echo '}';
        echo '</script>';
    }
?></p>
                                </td>
                                <td class="tea-wc3  ">
                                    <div class="d-hoc item-wxw logoC flex-q5y">
                                        <img src="<?php echo $row['Logo'] ?>">   </div>
                                </td>

                                <td><?php echo $row['name'] ?></td>
                                <td class="gra-gs3"><span class="fri-phf"> <?php echo $row['win'] ?> </span></td>
                                <td class="gra-gs3"><span> <?php echo $row['draw'] ?> </span></td>
                                <td class="gra-gs3"><span class="las-5a7"> <?php echo $row['losee'] ?>  </span></td>
                                <td> <?php echo $row['win'] + $row['losee']  + $row['draw']?>  </td>
                                <td><?php echo $row['goalScored'] ?> </td>
                                <td><?php echo $row['win'] *3 + $row['draw'] ?> </td>
                            </tr>
                            <?php                                
                                }
                            }
                            ?>
                            
                        </tbody>
                    </table>
            <!-- </div> -->
        </div>
    </div>
</body>
</html>