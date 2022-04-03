var unameErr = false;
var passErr = false;

function get(id)
{
    return document.getElementById(id);
}

function checkUsername(e)
{
    if (e.value == "")
    {
        unameErr = true;
        toggle();
    }
    else
    {
        unameErr = false;
        toggle();
    }
}

function checkP(e)
{
    if (e.value == "")
    {
        passErr = true;
        toggle();
    }
    else
    {
        passErr = false;
        toggle();
    }
}

function toggle()
{
    if(unameErr || passErr)
    {
        get("login").disabled = true;
        get("login").style.backgroundColor = "grey";
    }
    else {
        get("login").disabled = false;
        get("login").style.backgroundColor = "#3d27ff";
    }
}