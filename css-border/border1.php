<!DOCTYPE html>
<html>
<head>
	<title>Css- border</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<style>
	p.normal {
    border: 2px solid red;
}

p.round1 {
    border: 2px solid red;
    border-radius: 5px;
}

p.round2 {
    border: 2px solid red;
    border-radius: 8px;
}

p.round3 {
    border: 2px solid red;
    border-radius: 12px;
}
p.border-color{
	border-style:solid;
	border-right-color:yellow;
	border-top-color:red;
	border-left-color:white;

}
p.border-config{
	border:solid;
	border-top:thick double green;

}
</style>
</head>
<body>

<h2>The border-radius Property</h2>
<p>This property is used to add rounded borders to an element:</p>

<p class="normal">Normal border</p>
<p class="round1">Round border</p>
<p class="round2">Rounder border</p>
<p class="round3">Roundest border</p>

<p><b>Note:</b> The "border-radius" property is not supported in IE8 and earlier versions.</p>

<hr>
<p class="border-color">Lorem ipsum dolor sit</p>

<hr>
<i>All the top border properties in one declaration</i>
<p class="border-config">Lorem ipsum dolor sit</p>
</body>
</html>