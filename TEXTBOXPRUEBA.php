<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
 
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

 
</head>
<body> 


     <input type="text" name="term" id="term" placeholder="Nombre Usuario">  


<script type="text/javascript">
  $(function() {
     $( "#term" ).autocomplete({
       source: 'ajax-db-search.php',
     });
  });
</script>
</body>
</html>