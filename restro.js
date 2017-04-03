function search() {
  
    var input, filter, ul, li, a, i;
    input = document.getElementById('myInput');
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName('li');

   
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("h4")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
function searchair1() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput1");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable1");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}
function searchair2() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput2");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable2");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}
function searchair3() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput3");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable3");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}

function searchrail() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput4");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable4");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}


function myFunctio(event)
 {
	 var targo=event.target;
	 if(targo.id=="fgh")
	 {var x = document.getElementById('myDIV');
	 }		  
		  else if(targo.id=="rpp")
		     {
			var x=document.getElementById('myDIV1');
		     }
			  else if(targo.id=="lp")
		     {
			var x=document.getElementById('myDIV2');
		     }
			   else if(targo.id=="rbu")
		     {
			var x=document.getElementById('myDIV3');
		     }
			   else if(targo.id=="llv")
		     {
			var x=document.getElementById('myDIV4');
		     }
			   else if(targo.id=="lpu")
		     {
			var x=document.getElementById('myDIV5');
		     }
			   else if(targo.id=="ou")
		     {
			var x=document.getElementById('myDIV6');
		     }
			   else if(targo.id=="th")
		     {
			var x=document.getElementById('myDIV7');
		     }
			   else if(targo.id=="ah")
		     {
			var x=document.getElementById('myDIV8');
		     }
			   else if(targo.id=="hhl")
		     {
			var x=document.getElementById('myDIV9');
		     }
			   else if(targo.id=="hs")
		     {
			var x=document.getElementById('myDIV10');
		     }
			   else if(targo.id=="hrp")
		     {
			var x=document.getElementById('myDIV11');
		     }
			   else if(targo.id=="fj")
		     {
			var x=document.getElementById('myDIV12');
		     }
			 
          if (x.style.display === 'none') 
		  {
            x.style.display = 'block';
          } 
		  else {
            x.style.display = 'none';
              }

	}

/* Set the width of the side navigation to 250px */
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
}
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}
  
function myFunction1() {
    document.getElementById("myDropdown1").classList.toggle("show1");
}
function myFunction2() {
    document.getElementById("myDropdown2").classList.toggle("show2");
}
window.onclick = function(e) {
  if (!e.target.matches('.btn1')) {
    var myDropdown = document.getElementById("myDropdown1");
      if (myDropdown.classList.contains('show1')) {
       
        myDropdown.classList.remove('show1');
      }
  }
  if (!e.target.matches('.btn')) {
    var myDropdown = document.getElementById("myDropdown");
      if (myDropdown.classList.contains('show')) {
        
        myDropdown.classList.remove('show');
      }
  }
  if (!e.target.matches('.btn2')) {
    var myDropdown = document.getElementById("myDropdown2");
      if (myDropdown.classList.contains('show2')) {
        
        myDropdown.classList.remove('show2');
      }
  }
}