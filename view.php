<?php
require_once("connection.php");
$query="select * from records";
$result= mysqli_query($conn,$query);
?>
<html>
    <body>
        <table border:1px solid black;">
            <tr>
            <td>lab_name</td>
            <td>sys_no</td>
            <td>fault</td>
            </tr>
        <?php
        while($row=mysqli_fetch_assoc($result))
        {
        $lab_name=$row['lab_name'];
        $sys_no=$row['sys_no'];
        $fault=$row['fault'];
        ?>
        <tr>
            <td><?php echo $lab_name?></td>
            <td><?php echo $sys_no?></td>
            <td><?php echo $fault?></td>
        </tr>
        <?php
        }
        ?>
        </table>
    </body>
</html>
