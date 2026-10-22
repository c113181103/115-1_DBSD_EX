<?php
include "about_me.php";
echo "EX04<br/>";
$ip = $_SERVER['REMOTE_ADDR'];
echo "IP Address:" . $ip . "<br/>";
$path = $_SERVER["SCRIPT_NAME"];
echo "PATH" . $path . "";
?>
<Table border="1">
    <TR>
        <TD>Key</TD>
        <TD>Value</TD>
    </TR>
    <?php
    foreach ($_SERVER as $key => $value) {
        echo "<TR><TD>" . $key . "</TD>";
        echo "<TD>" . $value . "</TD></TR>";
    }
    ?>
</Table>