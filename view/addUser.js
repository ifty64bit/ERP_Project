var unameErr = false
var passErr = false
var firstNameErr = false
var lastNameErr = false
var phoneErr = false
var emailErr = false
var salaryErr = false

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

function checkFname(e)
{
    if (e.value == "")
    {
        firstNameErr = true;
        toggle();
    }
    else
    {
        firstNameErr = false;
        toggle();
    }
}

function checkLname(e)
{
    if (e.value == "")
    {
        lastNameErr = true;
        toggle();
    }
    else
    {
        lastNameErr = false;
        toggle();
    }
}

function checkPhone(e)
{
    if (e.value == "")
    {
        phoneErr = true;
        toggle();
    }
    else
    {
        phoneErr = false;
        toggle();
    }
}

function checkEmail(e)
{
    if (e.value == "")
    {
        emailErr = true;
        toggle();
    }
    else
    {
        emailErr = false;
        toggle();
    }
}

function checkSalary(e)
{
    if (e.value == "")
    {
        salaryErr = true;
        toggle();
    }
    else
    {
        salaryErr = false;
        toggle();
    }
}

function toggle()
{
    if(unameErr || passErr || firstNameErr || lastNameErr || phoneErr || emailErr || salaryErr)
    {
        get("add").disabled = true;
        get("add").style.backgroundColor = "grey";
    }
    else {
        get("add").disabled = false;
        get("add").style.backgroundColor = "#3d27ff";
    }
}