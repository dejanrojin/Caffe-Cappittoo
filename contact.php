<!doctype>
<html>
<header>
<title>
	Test Contact Form
</title>
<style>

body#body {
    background-image: url(imgs/kafafooter.gif);
    background-blend-mode: multiply;
    background-color: #000000cf;
    background-size: 100% 100% !important;
}


#thanks {
    color: #fff;
    text-align: center;
    font-size: 110px;
    font-family: -webkit-pictograph;
}

p#messagesent {
    color: #fff;
    font-size: 45px;
    text-align: center;
}


@keyframes messagesent{
	
50%{
	
margin-left:800px;	
	
opacity:1;	
	
}	
100%{
	margin-left:800px;
	opacity:0;
}	
	
}


img#sentmail{
animation:messagesent 2500ms forwards;

transition:2500ms ease-in;
opacity:0;
margin-left:0;

}


div#goback a {
	position:absolute;
	transition:600ms ease-in;
    padding: 15px;
    font-size: 30px;
    color: #fff;
    border: 1px solid #fff;
    text-align: center;
    float: left;
    font-family: -webkit-pictograph;
    background: #ffffff00;
	text-decoration:none;
}


div#goback a:hover {
   cursor:pointer;
    background: #ffffff21;
}
</style>	
</header>
<body id="body">
<h1 id="thanks"> Hvala! </h1> <br>
<p id="messagesent">
Vaša poruka je poslata!
</p>
<img id="sentmail" width="200px" height="200px" src="imgs/sent1.png">

<div id="goback" ><a href="http://localhost/CAFFECAPPITTOO/caffe-kappitoo.php">Nazad na sajt</a></div>
	
</body>

</html>