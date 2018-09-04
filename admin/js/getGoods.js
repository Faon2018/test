var ajaxObj;

function getGoods(className)
{
    ajaxObj=getAjaxObj();
    if (ajaxObj==null)
    {
        alert ("Browser does not support HTTP Request");
        return;
    }
    var url="getGoods.php";
    url=url+"?className="+className;
    url=url+"&sid="+Math.random();
    ajaxObj.onreadystatechange=stateChanged;
    ajaxObj.open("GET",url,true);
    ajaxObj.send(null);
}

function stateChanged()
{
    if (ajaxObj.readyState==4 || ajaxObj.readyState=="complete")
    {
        document.getElementById("clasSum").innerHTML=ajaxObj.responseText;
    }
}

function getAjaxObj()
{
    var ajaxObj=null;
    try
    {
        // Firefox, Opera 8.0+, Safari
        ajaxObj=new XMLHttpRequest();
    }
    catch (e)
    {
        // Internet Explorer
        try
        {
            ajaxObj=new ActiveXObject("Msxml2.XMLHTTP");
        }
        catch (e)
        {
            ajaxObj=new ActiveXObject("Microsoft.XMLHTTP");
        }
    }
    return ajaxObj;
}