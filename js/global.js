function removeChildren(myNode) {
	while (myNode.firstChild) {
		myNode.removeChild(myNode.firstChild)
	};
}

function openDrawer() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
           // document.getElementById("demo").innerHTML = xhttp.responseText;
        }
    };
    xhttp.open("GET", "service.php", true);
    xhttp.send();
}