<head>
<meta charset="utf-8">
<title>Kapcsolat</title>
<link rel="stylesheet" type="text/css" href="styles/kapcsolat.css">
<script type="text/javascript" src="javascript/kapcsolat.js"></script> 
</head>
<body>
<h1>Kapcsolat</h1>
<form name="kapcsolat" action="?oldal=email" onsubmit="return ellenoriz();" method="post">

<div>
<label><input type="text" id="email" name="email" size="30" maxlength="40"> E-mail (kötelező): </label>
<br/>
<label> <textarea id="szoveg" name="szoveg" cols="40" rows="10"></textarea> Üzenet (kötelező): </label>
<br/>
<input id="kuld" type="submit" value="Küld">
<button onclick="ellenoriz();" type="button">Ellenőriz</button>
</div>

</form>




