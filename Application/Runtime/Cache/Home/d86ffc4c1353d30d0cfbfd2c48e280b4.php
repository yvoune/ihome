<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <table>
            <tr>
                <td>id:</td>
                <td><?php echo ($data["rdid"]); ?></td>
            </tr>
            <tr>
                <td>标题：</td>
                <td><?php echo ($data["introduce"]); ?></td>
            </tr>
            <tr>
                <td>内容：</td>
                <td><?php echo ($data["address"]); ?></td>
            </tr>
            </table>
    </body>
</html>