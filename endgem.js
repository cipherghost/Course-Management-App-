
 function Countfun(course,element){


 	    var myObj,x,txt="";
 
     	var i=element.parentNode.parentNode.rowIndex;
      
         var obj = {"course":course,"rn":i,"d":1};
        	 var dbParam2 = JSON.stringify(obj);
       
	var xmlhttp2 = new XMLHttpRequest();
       xmlhttp2.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {

	  document.getElementById("myTableId"+(course+1)+"").rows[i].cells[2].innerHTML = this.responseText;
	     
	      leaderboard() ;
        }
      }
      xmlhttp2.open("GET", "getcount.php?q=" + dbParam2, true);
      xmlhttp2.send() ; 
}



function openRightMenu() {
  if (window.matchMedia("(max-width:450px)").matches) {
  document.getElementById("rightMenu").style.width = "100%";
}
else if (window.matchMedia("(max-width:550px)").matches) {
        document.getElementById("rightMenu").style.width = "50%";
        
    } else if (window.matchMedia("(max-width:750px)").matches) {
        document.getElementById("rightMenu").style.width = "40%";
       
    } else if (window.matchMedia("(max-width:1000px)").matches) {
        document.getElementById("rightMenu").style.width = "30%";
    } else {
        document.getElementById("rightMenu").style.width = "20%";
    }
  //document.getElementById("hamburger").style.display ="none";
  // document.getElementById("closing").style.display ="block";
   leaderboard();
}

function closeRightMenu() {
  document.getElementById("rightMenu").style.width = "0%";
 // document.getElementById("hamburger").style.display ="block";
 //  document.getElementById("closing").style.display ="none";
}




 function custom_compare (a,b) {
   // I'm assuming all values are numbers
   return a.nod - b.nod;
 }

function leaderboard() {
        var j=0;
       var xmlhttp = new XMLHttpRequest();
       xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
             var  myObj = JSON.parse(this.responseText);
		   
		    myObj.sort(custom_compare).reverse();
		    
		    var ltable = document.getElementById("topgems");
                    var rowCount = ltable.rows.length;


                   while(rowCount!=1){
                    ltable.deleteRow(1);
                   rowCount--;
                   }


                 for (var i=0;i<myObj.length;i++) {
                 var row = ltable.insertRow(i+1);
                 var cell1 = row.insertCell(0);
                 var cell2 = row.insertCell(1);
                 var cell3 = row.insertCell(2);

                cell1.innerHTML = "<b>"+(i+1)+"</b>";
                cell2.innerHTML = myObj[i]["name"];
                cell3.innerHTML = ""+myObj[i]["nod"]+"";
                 console.log(myObj[i]["name"]+ " " + myObj[i]["nod"]);
             }

            



	    
       }

     }

	 xmlhttp.open("GET", "leaderboard.php", true);
      xmlhttp.send() ;

} 
