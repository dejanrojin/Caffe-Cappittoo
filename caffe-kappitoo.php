<!DOCTYPE html>
<html>



<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="css/responsive.css" rel="stylesheet" >

<link href="css/responsive.css" rel="stylesheet" >
<link href="main.css" rel="stylesheet" >

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script>

$(document).ready(function(){


$("#menu").click(function(){



$("div#naslovna").fadeOut("slow", function () {
    $(this).css({display:"none"});
$("div#kapucino").fadeIn("fast", function () {

$(this).css({display:"block"});
});


});
});



$("#menu3").click(function(){



$("div#naslovna").fadeOut("slow", function () {
    $(this).css({display:"none"});
$("div#caffelatte").fadeIn("fast", function () {

$(this).css({display:"block"});
});


});
});






$("#menu4").click(function(){



$("div#naslovna").fadeOut("slow", function () {
    $(this).css({display:"none"});
$("div#smallcaffe").fadeIn("fast", function () {

$(this).css({display:"block"});
});


});
});






$("#menu5").click(function(){



$("div#naslovna").fadeOut("slow", function () {
    $(this).css({display:"none"});
$("div#milkshake").fadeIn("fast", function () {

$(this).css({display:"block"});
});


});
});




$("#menu6").click(function(){



$("div#naslovna").fadeOut("slow", function () {
    $(this).css({display:"none"});
$("div#caffechocolade").fadeIn("fast", function () {

$(this).css({display:"block"});
});


});
});




$("#menu7").click(function(){



$("div#naslovna").fadeOut("slow", function () {
    $(this).css({display:"none"});
$("div#bigcaffe").fadeIn("fast", function () {

$(this).css({display:"block"});
});


});
});


















$("p#nazad").click(function(){


$("div#kapucino").hide();
$("div#naslovna").fadeIn("slow", function () {
    $(this).css({display:"block"});



});
});




$("p#nazad1").click(function(){


$("div#caffelatte").hide();
$("div#naslovna").fadeIn("slow", function () {
    $(this).css({display:"block"});



});
});



$("p#nazad2").click(function(){


$("div#smallcaffe").hide();
$("div#naslovna").fadeIn("slow", function () {
    $(this).css({display:"block"});



});
});






$("p#nazad3").click(function(){


$("div#milkshake").hide();
$("div#naslovna").fadeIn("slow", function () {
    $(this).css({display:"block"});



});
});




$("p#nazad4").click(function(){


$("div#caffechocolade").hide();
$("div#naslovna").fadeIn("slow", function () {
    $(this).css({display:"block"});



});
});






$("p#nazad5").click(function(){


$("div#bigcaffe").hide();
$("div#naslovna").fadeIn("slow", function () {
    $(this).css({display:"block"});



});
});












$("#menu").hover(function(){

$("img#menucapucino").css({"margin-left":"140px","opacity":"1"})


});


$("#menu").mouseleave(function(){

$("img#menucapucino").css({"margin-left":"0px","opacity":"0"})


});




$("#menu3").hover(function(){

$("img#menucapucino3").css({"margin-left":"130px","opacity":"1"})


});


$("#menu3").mouseleave(function(){

$("img#menucapucino3").css({"margin-left":"0px","opacity":"0"})


});




$("#menu4").hover(function(){

$("img#menucapucino4").css({"margin-left":"120px","opacity":"1"})


});


$("#menu4").mouseleave(function(){

$("img#menucapucino4").css({"margin-left":"0px","opacity":"0"})


});





$("#menu5").hover(function(){

$("img#milkshake").css({"margin-left":"120px","opacity":"1"})


});


$("#menu5").mouseleave(function(){

$("img#milkshake").css({"margin-left":"0px","opacity":"0"})


});




$("#menu6").hover(function(){

$("img#menucapucino5").css({"margin-left":"120px","opacity":"1"})


});


$("#menu6").mouseleave(function(){

$("img#menucapucino5").css({"margin-left":"0px","opacity":"0"})


});


$("#menu7").hover(function(){

$("img#menucapucino6").css({"margin-left":"120px","opacity":"1"})


});


$("#menu7").mouseleave(function(){

$("img#menucapucino6").css({"margin-left":"0px","opacity":"0"})


});











$("img#follow").hover(function(){

$("p#followus").css({"margin-top":"50px","opacity":"1"})


});


$("img#follow").mouseleave(function(){

$("p#followus").css({"margin-top":"0px","opacity":"0"})


});








$("img#follow2").hover(function(){

$("p#followusinst").css({"margin-top":"50px","opacity":"1"})


});


$("img#follow2").mouseleave(function(){

$("p#followusinst").css({"margin-top":"0px","opacity":"0"})


});




$("button#btn").click(function(){

$("img#sentmail").css({"margin-left":"50px","opacity":"1"})


});





$("#utisak").click(function() {
    $('html, body').animate({
        scrollTop: $("#social").offset().top
    }, 1500);
});







});

</script>

<script>
function vreme(){ 
var sad=new Date();

var sati=sad.getHours();
var minuti=sad.getMinutes();
var sekundi=sad.getSeconds();
var dex=0;

document.getElementById('demo').innerHTML=sati+":"+minuti+":"+sekundi;

if(minuti<10){
document.getElementById('demo').innerHTML=sati+":"+dex+""+minuti+":"+sekundi;
}

if(sekundi<10){

document.getElementById('demo').innerHTML=sati+":"+minuti+":"+dex+""+sekundi;
}


setTimeout('vreme()',300);

}


</script>



<body  onload="vreme()">
<?php

@include("menu.php"); ?>



<div id="kapucino">
<img id="adress" src="imgs/adress.png"  width="40px" height="40px"/><span>Kappitoo, Ulica Danila 28 Valjevo</span>
<img id="adress1" src="imgs/email.png"  width="40px" height="40px"/><span id="email">kappitoo@hotmail.com</span>
<div id="kapucinoopen">

<div class="row">

<div class="col-sm-6">

<div id="slikakafe1"></div>

</div>


<div class="col-sm-6">

<h1 id="title">Capuccino</h1>

<p id="text">Kapucino sa mlekom </p>

<p id="cena">0.50 €</p>

<p id="nazad">Nazad na meni -></p>
</div>



<!-- end of row1 --> </div>
</div>
</div>





<!-- start Caffe latte -->




<div id="caffelatte">
<img id="adress" src="imgs/adress.png"  width="40px" height="40px"/><span>Kappitoo, Ulica Danila 28 Valjevo</span>
<img id="adress1" src="imgs/email.png"  width="40px" height="40px"/><span id="email">kappitoo@hotmail.com</span>
<div id="caffelatteopen">

<div class="row">

<div class="col-sm-6">

<div id="slikakafe2"></div>

</div>


<div class="col-sm-6">

<h1 id="title">Caffe Latte</h1>

<p id="text">Caffe Latte </p>

<p id="cena">0.70 €</p>

<p id="nazad1">Nazad na meni -></p>
</div>



<!-- end of row1 --> </div>
</div>
</div>


<!-- end of Caffe latte -->

<!-- start small caffe -->




<div id="smallcaffe">
<img id="adress" src="imgs/adress.png"  width="40px" height="40px"/><span>Kappitoo, Ulica Danila 28 Valjevo</span>
<img id="adress1" src="imgs/email.png"  width="40px" height="40px"/><span id="email">kappitoo@hotmail.com</span>
<div id="caffelatteopen">

<div class="row">

<div class="col-sm-6">

<div id="slikakafe6"></div>

</div>


<div class="col-sm-6">

<h1 id="title">Small Caffe</h1>

<p id="text">Small caffe sa mlekom </p>

<p id="cena">0.35 €</p>

<p id="nazad2">Nazad na meni -></p>
</div>



<!-- end of row1 --> </div>
</div>
</div>


<!-- end of small caffe -->



<!-- start Milkshake -->




<div id="milkshake">
<img id="adress" src="imgs/adress.png"  width="40px" height="40px"/><span>Kappitoo, Ulica Danila 28 Valjevo</span>
<img id="adress1" src="imgs/email.png"  width="40px" height="40px"/><span id="email">kappitoo@hotmail.com</span>
<div id="caffelatteopen">

<div class="row">

<div class="col-sm-6">

<div id="slikakafe3"></div>

</div>


<div class="col-sm-6">

<h1 id="title">Milkshake</h1>

<p id="text">Milkshake </p>

<p id="cena">0.60 €</p>

<p id="nazad3">Nazad na meni -></p>
</div>



<!-- end of row1 --> </div>
</div>
</div>


<!-- end of Milkshake -->





<!-- start caffechocolade -->




<div id="caffechocolade">
<img id="adress" src="imgs/adress.png"  width="40px" height="40px"/><span>Kappitoo, Ulica Danila 28 Valjevo</span>
<img id="adress1" src="imgs/email.png"  width="40px" height="40px"/><span id="email">kappitoo@hotmail.com</span>
<div id="caffelatteopen">

<div class="row">

<div class="col-sm-6">

<div id="slikakafe4"></div>

</div>


<div class="col-sm-6">

<h1 id="title">Nescafe</h1>

<p id="text">Nescafe 3 u 1 </p>

<p id="cena">0.70 €</p>

<p id="nazad4">Nazad na meni -></p>
</div>



<!-- end of row1 --> </div>
</div>
</div>


<!-- end of caffechocolade -->







<!-- start big caffe -->




<div id="bigcaffe">
<img id="adress" src="imgs/adress.png"  width="40px" height="40px"/><span>Kappitoo, Ulica Danila 28 Valjevo</span>
<img id="adress1" src="imgs/email.png"  width="40px" height="40px"/><span id="email">kappitoo@hotmail.com</span>
<div id="caffelatteopen">

<div class="row">

<div class="col-sm-6">

<div id="slikakafe5"></div>

</div>


<div class="col-sm-6">

<h1 id="title">Big Caffe</h1>

<p id="text">Big Caffe produzena </p>

<p id="cena">0.50 €</p>

<p id="nazad5">Nazad na meni -></p>
</div>



<!-- end of row1 --> </div>
</div>
</div>


<!-- end of big caffe -->


 </div>



<div class="container" id="rezervacijacon">



 <?php
 @include("rezervacija.php")?>
 
</div>


<div class="container" id="sociallink">
 
 <?php
 @include("social.php")?>
 


</div>

<?php 
@include("footer.php")?>