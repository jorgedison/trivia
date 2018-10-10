
	<link href="Keyboard/docs/css/jquery-ui.min.css" rel="stylesheet">
	<!-- still using jQuery v2.2.4 because Bootstrap doesn't support v3+ -->
	<script src="Keyboard/docs/js/jquery-latest.min.js"></script>
	<script src="Keyboard/docs/js/jquery-ui.min.js"></script>
	<!-- <script src="docs/js/jquery-migrate-3.0.0.min.js"></script> -->

	<!-- keyboard widget css & script (required) -->
	<link href="Keyboard/css/keyboard.css" rel="stylesheet">
	<script src="Keyboard/js/jquery.keyboard.js"></script>



	<!-- demo only -->
	<link rel="stylesheet" href="Keyboard/docs/css/bootstrap.min.css">
	<link rel="stylesheet" href="Keyboard/docs/css/font-awesome.min.css">
	<link href="Keyboard/docs/css/demo.css" rel="stylesheet">
	<link href="Keyboard/docs/css/tipsy.css" rel="stylesheet">
	<link href="Keyboard/docs/css/prettify.css" rel="stylesheet">
	<script src="Keyboard/docs/js/bootstrap.min.js"></script>
	<script src="Keyboard/docs/js/demo.js"></script>
	<script src="Keyboard/docs/js/jquery.tipsy.min.js"></script>
	<script src="Keyboard/docs/js/prettify.js"></script> <!-- syntax highlighting -->



<style type="text/css">
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

</style>

<script type="text/javascript">
function timeout_init() {
    setTimeout('timeout_trigger()', 2000);
}
</script>

<form name="form" action="?controller=question&&action=cHJlZ3VudGFzZWlz" method="POST">
<input type="text" class="cajatexto_1" id="nombres" name="nombres" maxlength="50"  required>
<input type="email" class="cajatexto_2" id="correo" name="correo" maxlength="30"  required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
<input type="text" pattern="\d*" class="cajatexto_3" id="celular" name="celular" maxlength="9" required >

<img src="assets/images/6.png" usemap="#image-map">

<map name="image-map">
    <area target="" alt="" title="" onClick="form.submit(); setTimeout('timeout_trigger()', 2000);" coords="336,1459,736,1559" shape="rect">
</map>
</form>