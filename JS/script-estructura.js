function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
    document.getElementById("main").style.marginLeft = "0%";
  }
// function closeSide(){
//   document.getElementById("Aside").style.width = "0%"
//   document.getElementById("main").style.width = "70%";
// }
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0%";
  }  
function prueba(){
    alert("AGAAAAARRRATEEE");
  }
  
    $(function() {
                                    $( "#term" ).autocomplete({
                                        source: 'ajax-db-search.php',
                                    });
                                });