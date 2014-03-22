 function postRequest(strURL) {
	var xmlHttp;
	if (window.XMLHttpRequest) { 
		// Mozilla, Safari, ...        
		var xmlHttp = new XMLHttpRequest();
    } else if (window.ActiveXObject) { 
		// IE        
		var xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xmlHttp.open('POST', strURL, true);

    xmlHttp.setRequestHeader('Content-Type', 
         'application/x-www-form-urlencoded');

    xmlHttp.onreadystatechange = function() {
        if (xmlHttp.readyState == 4) {
            updatepage(xmlHttp.responseText);
        }
    }

    xmlHttp.send(strURL);
}

function updatepage(str){	
	console.log('I am here');		
    document.getElementById("result").innerHTML = str;
}

function update(){
	var usr = document.getElementById("user").value;
	var url="get-tweets.php?id="+usr;
	postRequest(url);
}

function preload(){
	update();
}

function load(){
	preload();
	setInterval(update, 10000);
}
