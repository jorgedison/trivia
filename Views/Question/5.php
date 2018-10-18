<body scroll="no" style="overflow: hidden">

<link rel="stylesheet" type="text/css" href="jquery.ml-keyboard.css">
<!--<link rel="stylesheet" type="text/css" href="demo.css">-->
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="jquery.ml-keyboard.js"></script>
<script src="demo.js"></script>

<style type="text/css">

.noline{
    outline: none;
}

.cajatexto_1 {
position: absolute;
top: 755px; left: 120px;
font-size: 30px;
border-color: white;
border: 0px;
width: 840px;
    background: transparent;
    border: none;
    border-color: white;
    color: #222222;
    outline: none;   
}

.cajatexto_1v {
position: absolute;
top: 800px; left: 120px;
font-size: 30px;
border-color: white;
border: 0px;
width: 840px;
    background: transparent;
    border: none;
    border-color: white;
    color: #DF0101;
    outline: none;   
}

.cajatexto_2 {
position: absolute;
top: 980px; left: 120px;
font-size: 30px;
border-color: white;
border: 0px;
width: 840px;
    background: transparent;
    border-color: white;
    border: none;
    color: #222222;
    outline: none;
}

.cajatexto_2v {
position: absolute;
top: 1025px; left: 120px;
font-size: 30px;
border-color: white;
border: 0px;
width: 840px;
    background: transparent;
    border: none;
    border-color: white;
    color: #DF0101;
    outline: none;   
}

.cajatexto_2vv {
position: absolute;
top: 1050px; left: 120px;
font-size: 30px;
border-color: white;
border: 0px;
width: 840px;
    background: transparent;
    border: none;
    border-color: white;
    color: #DF0101;
    outline: none;   
}

.cajatexto_3 {
position: absolute;
top: 1200px; left: 120px;
font-size: 30px;

border-color: white;
border: 0px;
width: 840px;
    background: transparent;
    border: none;
    border-color: white;
    color: #222222;
    outline: none;
}
.cajatexto_3v {
position: absolute;
top: 1250px; left: 120px;
font-size: 30px;

border-color: white;
border: 0px;
width: 840px;
    background: transparent;
    border: none;
    border-color: white;
    color: #DF0101;
    outline: none;
}

.cajatexto_3vv {
position: absolute;
top: 1275px; left: 120px;
font-size: 30px;

border-color: white;
border: 0px;
width: 840px;
    background: transparent;
    border: none;
    border-color: white;
    color: #DF0101;
    outline: none;
}

.img {
    position: fixed;
    left: 0px;
    top: 0px;
    z-index: -100;
}

</style>

<script type="text/javascript">

function timeout_init() {
    setTimeout('timeout_trigger()', 2000);
}

function validateForm()
{
  //var fields = ["nombres", "correo", "celular"]
    var x = document.forms["form"]["nombres"].value;
    var y = document.forms["form"]["correo"].value;
    var z = document.forms["form"]["celular"].value;

    if (x == "") {
        document.forms["form"]["nombresv"].value = "Ingrese nombres y apellidos";
        //alert("Ingrese Nombres y Apellidos");
        return false;
    } else if (y == "") {
    	document.forms["form"]["correov"].value = "Ingrese correo";
        return false;
    } else if (!y.match(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)){
    	document.forms["form"]["correovv"].value = "Formato de correo inválido";
        return false;
    } else if (z == "") {
    	document.forms["form"]["celularv"].value = "Ingrese celular";
        return false;
    } else if (!z.match(/^\d+/)){
    	document.forms["form"]["celularvv"].value = "Formato de celular inválido";
        return false;
    }/* else if (z.length > 9) {
        alert("Numero de celular no puede ser mayor a 9");
        return false;
    } else if (z.length < 3) {
        alert("Numero de celular no puede ser menor a 3");
        return false;
    }*/ else{
    	var s = document.getElementsByTagName("form");
		s[0].submit();// Form submission

    }
}

</script>


<div>
<form name="form" action="?controller=question&&action=cHJlZ3VudGFzZWlz" method="POST" autocomplete="off" id="form">
	<input type="text" class="cajatexto_1" id="example-1" name="nombres" maxlength="20" onkeydown="return false" required/>
    <input type="text" class="cajatexto_1v"id="nombresv" name="nombresv">

    <input type="text" class="cajatexto_2" id="example-1" name="correo" maxlength="20" onkeydown="return false" required/>
    <input type="text" class="cajatexto_2v"id="correov" name="correov">
    <input type="text" class="cajatexto_2vv"id="correovv" name="correovv">

    <input type="text" class="cajatexto_3" id="example-1" name="celular" maxlength="9" onkeydown="return false" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required/>
    <input type="text" class="cajatexto_3v"id="celularv" name="celularv">
    <input type="text" class="cajatexto_3vv"id="celularvv" name="celularvv">

<img src="assets/images/6.png" usemap="#image-map">

<map name="image-map">
    <area target="" alt="" title="" onClick="validateForm()" coords="336,1459,736,1559" shape="rect" class="noline">
</map>
</form>
</div>