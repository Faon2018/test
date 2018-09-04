<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>添加品牌</title>
    <link href="../css/css.css" type="text/css" rel="stylesheet" />
    <link href="../css/main.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/index.css"/>
</head>
<body>
<!--main_top-->
<table width="99%" border="0" cellspacing="0" cellpadding="0" id="searchmain">
    <tr>
        <td width="99%" align="left" valign="top">您的位置:品牌管理——>>添加品牌</td>
    </tr>

    <tr>
        <td align="left" valign="top">
            <form method="post" action="add.php">
                <table width="100%" border="0" cellspacing="0" cellpadding="0" id="main-tab">
                    <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
                        <td align="right" valign="middle" class="borderright borderbottom bggray">品牌名称：</td>
                        <td align="left" valign="middle" class="borderright borderbottom main-for">
                            <input type="text" name="bname" value="" class="text-word">
                        </td>
                    </tr>
                    <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
                        <td align="right" valign="middle" class="borderright borderbottom bggray">添加日期：</td>
                        <td align="left" valign="middle" class="borderright borderbottom main-for">
                            <input type="date" name="bregdate" value="" class="data-word">
                        </td>
                    </tr>

                    <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
                        <td align="right" valign="middle" class="borderright borderbottom bggray">&nbsp;</td>
                        <td align="left" valign="middle" class="borderright borderbottom main-for">
                            <input name="" type="submit" value="提交" class="text-but">
                            <a href=""><input name="" type="button" value="重置" class="text-but"></a></td>
                    </tr>
                </table>
            </form>
        </td>
    </tr>
</table>
</body>
</html>