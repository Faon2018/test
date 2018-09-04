<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>重置密码</title>
    <link href="../css/css.css" type="text/css" rel="stylesheet" />
    <link href="../css/main.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/index.css" />
</head>
<body>
<table width="99%" border="0" cellspacing="0" cellpadding="0" id="searchmain">
    <tr>
        <td align="left" valign="top">
            <form method="post" action="verity.php">
                <table width="100%" border="0" cellspacing="0" cellpadding="0" id="main-tab">
                    <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
                        <td align="right" valign="middle" class="borderright borderbottom bggray">管理员名称：</td>
                        <td align="left" valign="middle" class="borderright borderbottom main-for">
                                <input type="text" name="username" value="<?php echo $_GET['username'] ?>" class="text-word" onfocus=this.blur()>
                        </td>
                    </tr>

                    <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
                        <td align="right" valign="middle" class="borderright borderbottom bggray">设置密码：</td>
                        <td align="left" valign="middle" class="borderright borderbottom main-for">
                            <input type="password" name="password" value="" class="text-word">
                        </td>
                    </tr>
                    <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
                        <td align="right" valign="middle" class="borderright borderbottom bggray">重新输入密码：</td>
                        <td align="left" valign="middle" class="borderright borderbottom main-for">
                            <input type="password" name="repassword" value="" class="text-word">
                        </td>
                    </tr>

                    <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
                        <td align="right" valign="middle" class="borderright borderbottom bggray">&nbsp;</td>
                        <td align="left" valign="middle" class="borderright borderbottom main-for">
                            <input name="" type="submit" value="提交" class="text-but">
                           <a href=""> <input name="" type="button" value="重置" class="text-but"></a></td>
                    </tr>
                </table>
            </form>
        </td>
    </tr>
</table>
</body>
</html>