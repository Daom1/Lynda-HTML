<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Formatting page content</title>
	</head>
	<body>
		<h1>HTML Essential Training</h1>
		<h2>Formatting page content</h2>
		<p>In this series of exercises, we'll explore how to use HTML elements to format basic page content.</p>
		<h3>Inserting images</h3>
		<p><img src="_images/lowcountry.jpg" width="300" height="300" alt="Lowcountry South Carolina">Images are placed on the page through the use of the <b>img</b> tag. Images are considered <b>replaced content</b>, that is the element is replaced with the asset it references. The image element has several important attributes. The <b>src</b> attribute is used to tell the browser where to find the image. The <b>alt</b> attribute allows you to pass along descriptive text representing the image. This can be used by screen readers, or displayed in the event the image fails to load.The <b>width</b> and <b>height</b> are optional and can be used to pass the dimensions of the image to the browser. If omitted, the browser will still display the image at its native width and height. These values can be changed to force the browser to size the image differently from it's native size.</p>
		<p>Most browser support a wide range of image types. For the most part, you're safe using jpg, png, gif, bmp, and svg image formats.</p>
		<p>Insert a new image beside this text.</p>
	</body>
</html>