<html>
<head>
<style>

</style>
</head>
<body>

<div class="specific">
		<h1>Click to Take a Screenshot & Download it! </h1> 


		<button type="button" >Take a Screenshot!</button>

</div>

<script>
document.querySelector('button').addEventListener('click', function() 
	{
        html2canvas(document.querySelector('.specific')
		{
            onrendered: function(canvas) 
			{
                //document.body.appendChild(canvas);
              return Canvas2Image.saveAsPNG(canvas);
            }
        });
    });
</script>

</body>
</html>