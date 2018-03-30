/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
 
function loadAuthors() {
    var dataList = document.getElementById('json-datalist');
    // Clean datalist options
    dataList.innerHTML = "";
    
    var sugg = document.getElementById("autocomplete").value;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        console.log(this.responseText);
        var jsonOptions = JSON.parse(this.responseText);
        jsonOptions.forEach(function(item) {
          // Create a new <option> element.
          var option = document.createElement('option');
          // Set the value using the item in the JSON array.
          option.value = item;
          // Add the <option> element to the <datalist>.
          dataList.appendChild(option);
        });
        // $( "#autocomplete" ).autocomplete({
        //   source: [ "c++", "java", "php", "coldfusion", "javascript", "asp", "ruby" ]
        // });
      }
    };
    // console.log("getAuthors.php?sugg=" + sugg);
    xhttp.open("GET", "getAuthors.php?sugg=" + sugg, true);
    xhttp.send();
  }