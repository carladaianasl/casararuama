<!DOCTYPE html>
<html land="en">
<head>
	<meta charset="UTF-8">
	<title>Casa Lagoa de Araruama</title>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	
	
</head>
<body>

<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script type="text/javascript">
	

function sizeOfThings(){
  var windowWidth = window.innerWidth;
  var windowHeight = window.innerHeight;
  
  var screenWidth = screen.width;
  var screenHeight = screen.height;
  
 // document.querySelector('.window-size').innerHTML = windowWidth + 'x' + windowHeight;
 // document.querySelector('.screen-size').innerHTML = screenWidth + 'x' + screenHeight;

  if  (screenWidth <= 790){
  		
  		window.location = "mobile/index.php";
  }	else {

  		window.location = "desktop/index.php";
  }

};
sizeOfThings();
window.addEventListener('resize', function(){
	sizeOfThings();


});

</script>

</body>
</html>