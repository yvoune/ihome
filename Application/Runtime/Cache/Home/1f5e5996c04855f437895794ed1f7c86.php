<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <form method="post" action="insert">
            房屋简述:<input type="text" name="introduce"><br/>
            房源地址:<textarea name="address" rows="5" cols="45"></textarea><br/>
            <input type="submit" value="提交">
        </form>
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