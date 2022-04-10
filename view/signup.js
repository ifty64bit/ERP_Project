function checkUsername(e)
{
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log(xhttp.responseText);
            if (this.responseText.trim() === "true")
                document.getElementById("umessage").style.display = "block";
                document.getElementById("signup").disabled = true;
            }
            else {
                document.getElementById("umessage").style.display = "none";
                document.getElementById("signup").disabled = false;
            }
        }
    xhttp.open("GET", `http://localhost/ERP/controller/checkUsername.php?uname=${e.value}`, true);
    xhttp.send();
}