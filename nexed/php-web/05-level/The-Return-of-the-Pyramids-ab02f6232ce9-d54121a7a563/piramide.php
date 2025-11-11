<!DOCTYPE html>
<html>

<body>
<table width="500px" border="1px" cellspacing="0px">
    <?php
    $value = 0;

    for ($col = 0; $col < 10; $col++) {
        echo "<tr>";

        for ($row = 0; $row < $col; $row++) {
            echo
            "<td height=50px width=50px bgcolor=black></td>";
        }
        echo "</tr>";
    }
    ?>
</table>
</body>

</html>