function process()
{
var username = document.getElementById("username").value;
var xhr;
 if (window.XMLHttpRequest) 
 {
    xhr = new XMLHttpRequest();
} else if (window.ActiveXObject) { 
    xhr = new ActiveXObject("Microsoft.XMLHTTP");
}
var data = "username=" + username;
     xhr.open("POST", "getuser.php", true); 
     xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                  
     xhr.send(data);
	 xhr.onreadystatechange = display_data;
	function display_data() {
	 if (xhr.readyState == 4) {
      if (xhr.status == 200) {
       //alert(xhr.responseText);	   
	  document.getElementById("usershow").innerHTML = xhr.responseText;
      } else {
        alert('There was a problem with the request.');
      }
     }
	}
}