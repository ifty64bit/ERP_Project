function get(id) {
    return document.getElementById(id);
}

var tr;

function search(e)
{
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            let data = JSON.parse(this.responseText.trim());
            console.log(data);
            if (data.length === 0 || e.value==" " || e.value=="")
            {
                let tableHead = "<td>Photo</td><td>Title</td><td>Starting Price</td><td>Selling Price</td><td>Sold To</td><td>Sold By</td>"
                get("table").innerHTML = tableHead;
                
                get("emptymsg").innerHTML="<h3>No results found</h3>";
            }
            else {
                get("emptymsg").innerHTML = "";
                
                let tableHead = "<td>Photo</td><td>Title</td><td>Starting Price</td><td>Selling Price</td><td>Sold To</td><td>Sold By</td>"
                get("table").innerHTML=tableHead;
                
                data.forEach(element => {
                    tr = document.createElement("tr");
                    tr.innerHTML = `<td><img src=../assets/uploads/${element.photo} width='75px'</td>
                        <td>${element.title}</td>
                        <td>${element.init_price}</td>
                        <td>${element.cur_price}</td>
                        <td>${element.soldTo}</td>
                        <td>${element.soldBy}</td>`;
                    get("table").appendChild(tr);
                });
            }
        }
    };
    xhttp.open("GET", `http://localhost/ERP/controller/Search.php?name=${e.value}`, true);
    xhttp.send();
}