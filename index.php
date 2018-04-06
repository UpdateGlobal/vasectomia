<script>
    function sendContact(){
        var valid;
        valid = validateContact();
        if(valid) {
            jQuery.ajax({
                url: "contact_form.php",
                data:'nombres='+$("#nombres").val()+'&email='+$("#email").val()+'&telefono='+$("#telefono").val()+'&mensaje='+$("#mensaje").val(),
                type: "POST",
                success:function(data){
                    $("#mail-status").html(data);
                },
                error:function (){}
            });
        }
    }
    function validateContact() {
        var valid = true;
        if(!$("#nombres").val()) {
            $("#nombres").css('background-color','#f28282');
            valid = false;
        }
        if(!$("#email").val()) {
            $("#email").css('background-color','#f28282');
            valid = false;
        }
        if(!$("#email").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
            $("#email").css('background-color','#f28282');
            valid = false;
        }
        if(!$("#telefono").val()) {
            $("#telefono").css('background-color','#f28282');
            valid = false;
        }
        if(!$("#mensaje").val()) {
            $("#mensaje").css('background-color','#f28282');
            valid = false;
        }    
        return valid;
    }
</script>
<!DOCTYPE html>
<html lang="es">
<head>
<?php include('particles/head.php'); ?>
</head>
<body>
	<div class="grid-block" style="background-image: url('img/image.jpg'); background-repeat: no-repeat; background-size: cover; height: 100vh;">
		<div class="navbar-fixed">
			<nav>
			    <ul class="right hide-on-med-and-down">
					<li><a class="waves-effect btn purple" href="https://api.whatsapp.com/send?phone=51999210792"><i class="fab fa-whatsapp fa-1x">    </i> +51999210792</a></li>
			    </ul>
			</nav>
		</div>
		<div class="container animated fadeInLeft" style="padding-top: 10vh; animation-delay: 1s;">
			<div class="row" align="left">
				<img src="img/logo.png">
				<h1 class="white-text" style="margin-bottom: 0px;">SIENTE TU LIBERTAD</h1>
         		<h5 class="white-text" style="margin-top: 0;">Vive tranquilo y sin preocupaciónes</h5>
			</div>
		</div>
	</div>
	<div class="container" style="padding-bottom: 70px;">
		<div class="row">
			<div class="col s12 animated fadeInUp" align="center">
				<h2 style="font-weight: 900; margin: 60px 0px 60px;">VASECTOMÍA PERÚ</h2>
			</div>
			<div class="col s12 m6 animated fadeInLeft" style="animation-delay: 2s;">
				<img src="img/captura-de-pantalla-2018-03-09-a-la-s-09-57-11.jpg" class="responsive-img">
			</div>
			<div class="col s12 m6 animated fadeInRight" style="margin-top: -15px; animation-delay: 2s;">
				<h5 style="font-weight: 900;">¿Porque hacerse la Vasectomía?</h5>
				<p class="purple-text" style="font-size: 14px;">La vasectomía es cada vez más solicitada por hombres para el control de la natalidad.</p>
				<p style="font-size: 12px">La vasectomía es una operación que te permitirá tener libertad de tener una relación de pareja plena y responsable</p>
				<ul>
					<li>&#10003; <a class="black-text" style="font-size: 10px;">La Vasectomía puede mejorar tu vida sexual</a></li>
					<li>&#10003; <a class="black-text" style="font-size: 10px;">Librate a ti y a tu pareja de embarazos no deseados</a></li>
					<li>&#10003; <a class="black-text" style="font-size: 10px;">Disfruta la vida 24 horas del día, los 7 días de la semana </a></li>
					<li>&#10003; <a class="black-text" style="font-size: 10px;">La vasectomía cuesta 6 veces menos que la esterilización femenina.</a></li>
					<li>&#10003; <a class="black-text" style="font-size: 10px;">El procedimiento completo de Vasectomía dura alrededor de 20 minutos</a></li>
					<li>&#10003; <a class="black-text" style="font-size: 10px;">Puedes volver a tener sexo entre unos días y una semana después de la vasectomía</a></li>
				</ul>
				<div class="col s12">
				  	<a href="doc/Consentimiento.docx" class="btn purple">Descarga consentimiento</a>
				</div>
			</div>
		</div>
	</div>
	<div style="background-color: #d8d8d8;">
		<div class="container">	
			<div class="row">
				<div class="col s12 m6 animated fadeInLeft" style="animation-delay: 2s;">
					<h1 style="width: auto; padding-top: 130px; font-weight: 900; font-style: normal; font-stretch: normal; line-height: normal; letter-spacing: -1.071429px; text-align: left; color: #343434;">Reserva una Cita</h1>	
					<p style="margin-top: -20px; margin-left: 3px;">Envianos tus datos de manera confidencial <br> y nos comunicaremos contigo.</p>
				</div>
				<div class="col s12 m6 animated fadeInRight" style="background-color: #ffffff; padding: 20px; margin-top: 37px; margin-bottom: 37px; animation-delay: 2s;">
					<!-- <form class="col s12" method="post"> -->
					<div class="col s12">
						<div id="mail-status"></div>
					    <div class="input-field col s12">
					        <input type="text" class="validate" name="nombres" id="nombres">
					        <label for="last_name">Nombre</label>
					    </div>
					   	<div class="input-field col s12">
					        <input type="email" class="validate" name="email" id="email">
					        <label for="last_name">Email</label>
					    </div>
					    <div class="input-field col s12">
					        <input type="text" class="validate" name="telefono" id="telefono">
					        <label for="last_name">Celular</label>
					    </div>
					    <div class="input-field col s12">
					        <textarea class="materialize-textarea" name="mensaje" id="mensaje"></textarea>
					        <label for="textarea1">Comentarios</label>
					    </div>
					    <div class="col s12">
					    	<button name="submit" class="btn purple" onClick="sendContact();">Enviar</button>
					    </div>
					</div>
					<!-- </form> -->
				</div>
			</div>
		</div>
	</div>
	<!--  <p class="hidep" style="display: none;">If you click on the "Hide" button, I will disappear.</p> -->
	<div class="container-fluid" align="center">
		<div class="container">
			<div class="row">
 				<a id="show" class="btn purple">Preguntas frecuentes</a>
				<div class="col s12">
					<div class="hidep" style="display: none;">
						<ul class="collapsible" data-collapsible="accordion">
						    <li>
						    	<div class="collapsible-header">
						    		<strong>¿Qué es la Vasectomia?</strong>
						    	</div>
						    	<div class="collapsible-body" align="justify">
						    		<span>La vasectomía es una cirugía simple hecha por un médico en consultorio la mayoría de las veces. Los pequeños tubos en la bolsa escrotal que llevan los espermatozoides son cortados y bloqueados, por lo que los espermatozoides no salen de su cuerpo y no provocan embarazo. El procedimiento es muy rápido, y usted puede ir a casa el mismo día. Y es extremadamente eficaz para prevenir el embarazo, casi el 100%.<br>
						      		Las vasectomías están destinadas a ser permanentes, por lo que usualmente no pueden ser revertidas. Usted sólo debe hacerse una vasectomía si está 100% convencido de que no quiere tener más hijos por el resto de su vida.<br>
						      		El término &quot;vasectomía&quot; proviene del nombre de los tubos en el escroto que se bloquean durante el procedimiento: conductosdeferentes.</span>
						      	</div>
						    </li>
						    <li>
						    	<div class="collapsible-header">
						    		<strong>¿Cómo funciona la vasectomía?</strong>
						    	</div>
						      	<div class="collapsible-body" align="justify">
						      		<span>Los espermatozoides — las células microscópicas que se unen con un óvulo para causar embarazo — son producidas en los testículos. <br>
						      		Los espermatozoides dejan los testículos a través de dos tubos llamados conductos deferentes, y se mezcla con otros líquidos para recién llamarse semen. Los espermatozoides en su semen pueden causar embarazo si entra en una vagina. <br>
						      		La vasectomía corta cada conducto deferente, manteniendo los espermatozoides fuera del semen. Las células espermáticas permanecen en sus testículos y son absorbidas por su cuerpo. Comenzando cerca de 2 meses después de una vasectomía, su semen no contendrá ningún espermatozoide, así que no puede causar embarazo. Pero todavía tendrás la misma calidad y cantidad de semen que tenía antes. No habrá espermatozoides.<br>
						      		La vasectomía no cambia la forma en que se siente el tener una relación sexual, un orgasmo o una eyaculación. Su semen todavía se verá, sentirá, y sabrá de la misma manera después de la vasectomía, la diferencia es que simplemente no será capaz de conseguir embarazar a nadie.</span>
						      	</div>
						    </li>
						    <li>
						    	<div class="collapsible-header">
						    		<strong>¿Cuán efectiva es la Vasectomía?</strong>
						    	</div>
						      	<div class="collapsible-body" align="justify">
						      		<span>Las vasectomías son casi 100% efectivas para prevenir el embarazo, pero no de inmediato. El semen tarda alrededor de 2 meses en estar libre de espermatozoides. <br>
						    		En un par de meses después de su vasectomía, pudiendo variar según la cantidad de eyaculaciones que se tenga, su médico hará una prueba simple llamada espermatograma para verificar si hay espermatozoides en su semen. <br>
						    		La vasectomía es realmente el mejor método de planificación familiarque existe, porque está diseñado para ser permanente, y no se puede olvidar de usarlo o estropearlo. Previene el embarazo todo el tiempo durante el resto de su vida. Es el método más económico, se realiza una sola vez. La vasectomía es el método de control de la natalidad de Hazlo y Olvídate.<br>
						    		Aunque está reportado en la literatura médica de casos de recanalizaciones espontaneas de los conductos deferentes estas son sumamente raras y más son anecdóticas.</span>
						    	</div>
						    </li>
						    <li>
						    	<div class="collapsible-header">
						    		<strong>¿La Vasectomía protege contra las enfermedades de transmisión sexual (ETS)?</strong>
						    	</div>
						      	<div class="collapsible-body" align="justify">
						      		<span>No, una vasectomía no te protege ni a ti ni a tu pareja de una enfermedad de transmisión sexual. El semen puede seguir transmitiendo ETS aún si este no contenga espermatozoides. Y para algunas ETS, solo se necesita el contacto piel a piel para contagiarse. El uso del condón disminuye las posibilidades de contagiarse o transmitir una ETS.</span>
						      	</div>
						    </li>
						    <li>
						    	<div class="collapsible-header">
						    		<strong>¿Cuán segura es la vasectomía?</strong>
						    	</div>
						    	<div class="collapsible-body" align="justify">
						    		<span>Las vasectomías son súper seguras y muy pocas personas tienen complicaciones. Pero como todos los procedimientos médicos hay algunos posibles riesgos. Los riesgos más comunes de la vasectomía son menores y tratables. <br>
						    		Todos los hombres pueden hacerse la vasectomía si lo desean. <br> 
						    		Debes hacerte la vasectomía si estas totalmente seguro de que no deseas tener más hijos por el resto de tu vida. Si es tú propia decisión y no estás siendo presionado por tus padres, por la pareja o por la familia. No esperes que la vasectomía resuelva problemas que puedan ser temporales, tales como problemas financieros, de parejas o de salud.</span>
						    	</div>
						    </li>
						    <li>
						     	<div class="collapsible-header">
						     		<strong>¿Puede una Vasectomía ser revertida?</strong>
						     	</div>
						      	<div class="collapsible-body" align="justify">
						      		<span>La vasectomía está diseñada para ser permanente e irreversible.<br>
						    		Es posible intentar recanalizar los conductos deferentes cortados pero es un procedimiento complejo, costoso y con probabilidades muy bajas de poder conseguirse restablecer la fertilidad. <br>
						    		Si te preocupa la reversión del procedimiento es mucho mejor no realizarte una vasectomía. <br>
						    		Antes de hacerte una vasectomía piensa en cambios de vida que podrían afectarte en el futuro, como un divorcio, una nueva pareja o la muerte de tu hijo. No necesitas el permiso de tu pareja para hacerte una vasectomía, pero es de mucha ayuda hablarlo con tu pareja. <br>
						    		Hay otras maneras de prevenir embarazos y no son permanentes. Y la pareja tiene muchas opciones de prevención de embarazos. T de cobre, implantes, píldoras anticonceptivas que son tan efectivas como la vasectomía si son bien utilizados, recordando siempre que no son permanentes. <br>Realizarse una vasectomía es usualmente segura. Pero que como todo procedimiento no está libre de riesgos. Molestias como dolor temporal, hematomas e infecciones son los más comunes. Puede indicarse analgesia y antibióticos.</span>
						    	</div>
						    </li>
						    <li>
						    	<div class="collapsible-header">
						    		<strong>¿Qué puedo esperar si me hago la vasectomía?</strong>
						    	</div>
						    	<div class="collapsible-body" align="justify">
						    		<span>La vasectomía es procedimiento quirúrgico fácil de realizarse. Es muy rápido y puedes irte a tu casa inmediatamente. Necesitas un reposo de 48 horas.</span>
						    	</div>
						    </li>
						    <li>
						    	<div class="collapsible-header">
						    		<strong>¿La vasectomía es dolorosa?</strong>
						    	</div>
						    	<div class="collapsible-body" align="justify">
						    		<span>Probablemente no. Tu doctor te ayudará en realizarla de la manera más confortable posible. Se te colocará anestesia local lo cual hará el procedimiento tolerable. Sentirás una molestia cuando se coloca la anestesia local o cuando los conductos deferentes sean manipulados. Pero en líneas generales muy bien tolerado el procedimiento.</span>
						    	</div>
						    </li>
						    <li>
						    	<div class="collapsible-header">
						    		<strong>¿Cómo me sentiré después de la vasectomía?</strong>
						    	</div>
						      	<div class="collapsible-body" align="justify">
						      		<span>Usted se puede ir a casa inmediatamente terminada la vasectomía. Sentirás algún malestar o leve dolor después del procedimiento, pero no es un gran dolor. Podrías desarrollar un hematoma o una hinchazón por unos pocos días. Se te indicará usar ropa interior lo más apretada posible para que los testículos no se muevan demasiado, analgésicos y hielo local para que ayude a desinflamar. No hacer ningún trabajo físico ni ejercicios por una semana. <br>
						      		Comunícate con tu doctor si tiene: 
									<ul>
										<li>Fiebre mayor de 38°C.</li>
										<li>Sangre o pus de los puntos realizados en el escroto.</li>
										<li>Si hay mucho dolor o gran hinchazón escrotal.</li>
									</ul>
							  		Estos síntomas podrían indicar que es una infección y necesitar terapia antibiótica.</span>
							  	</div>
						    </li>
						    <li>
						    	<div class="collapsible-header">
						    		<strong>¿Cuánto tiempo necesitaré para mi recuperación?</strong>
						    	</div>
						      	<div class="collapsible-body" align="justify">
						      		<span>La mayoría de las personas necesitan un reposo de un par de días. Si su trabajo necesita mucha actividad física o es de levantar peso, deberías dejar de trabajar por una semana. No hacer ejercicios físicos por el mismo periodo de tiempo.</span>
						      	</div>
						    </li>
						    <li>
						    	<div class="collapsible-header">
						    		<strong>¿En cuanto tiempo puedo tener sexo luego de mi vasectomía?</strong>
						    	</div>
						      	<div class="collapsible-body" align="justify">
						      		<span>Usualmente puedes empezar a tener actividad sexual a los pocos días del procedimiento. Lo ideal es esperar una semana, aunque lo más recomendable es empezar a tener relaciones sexuales cuando ya no se sientan molestias en el área escrotal. Solo recuerden que la vasectomía NO previene los embarazos inmediatamente. Toma casi 2 meses después de tu vasectomía que el semen quede libre de espermatozoides. Se te pedirá un espermatograma para poder confirmar que ya no eres capaz de engendrar hijos.</span>
						      	</div>
						    </li>
						    <li>
						    	<div class="collapsible-header">
						    		<strong>¿Cómo me hago una vasectomía?</strong>
						    	</div>
						    	<div class="collapsible-body" align="justify">
						    		<span>Muchos centros de planificación familiar, hospitales, clínicas, médicos privados ofrecen realizar una vesectomía.</span>
						    	</div>
						    </li>
						    <li>
						    	<div class="collapsible-header">
						    		<strong>¿Cuánto cuesta una vasectomía?</strong>
						    	</div>
						      	<div class="collapsible-body" align="justify">
						      		<span>Realizarse una vasectomía no es un procedimiento costoso y puede variar desde 0 hasta los 1500 soles, dependiendo de donde se realice. <br>
						      		El costo de una vasectomía varía y depende de donde se la realice, si lo cubre su plan de seguros, solo pagará el coaseguro. En ESSALUD es gratuita y el MINSA a través del SIS tiene planes que son muy económicos y en algunos casos gratuitos. <br>
						      		Incluso si su vasectomía cuesta más que otros métodos por adelantado, por lo general termina ahorrando dinero en el largo plazo, porque dura para siempre y el pago se realiza una sola vez. La vasectomía es aproximadamente 6 veces más barata que la esterilización femenina.</span>
						      	</div>
						    </li>
						    <li>
						    	<div class="collapsible-header">
						    		<strong>¿Cuáles son los beneficios de la vasectomía?</strong>
						    	</div>
						      	<div class="collapsible-body" align="justify">
						      		<span>La vasectomía es efectiva, conveniente, y un permanente control de la natalidad. Disminuye el estrés de tu pareja de quedar embarazada y puede hacer tu vida sexual mucho mejor y placentera.</span>
						      	</div>
						    </li>
						    <li>
						    	<div class="collapsible-header">
						    		<strong>Las Vasectomías son MUY efectivas</strong>
						    	</div>
						    	<div class="collapsible-body" align="justify">
						    		<span>Vasectomías son permanentes y es uno de los más efectivos de los métodos de planificación familiar que existen, con más de 99% efectividad en prevenir embarazos. La vasectomía es efectiva porque es permanente, y porque no hay manera que el que la realiza se confunda o equivoque en el procedimiento.</span>
						    	</div>
						    </li>
						    <li>
						    	<div class="collapsible-header">
						    		<strong>Vasectomías son súper convenientes</strong>
						    	</div>
						      	<div class="collapsible-body" align="justify">
						      		<span>Una vez realizada la vasectomía y que tu doctor te indique que ya no tienes espermatozoides en tu semen, tú y tu pareja no tienen que hacer otra cosa para prevenir el embarazo. No más viajes a las farmacias, nada que comprar o usar, nada que ponerse antes del sexo. <br>
						      		Hace tu vida sexual más segura. Es un método de planificación familiar que no te hace pensar antes de tener una relación sexual en si tú pareja va a salir embarazada, así que no interfiere con la acción. Puedes llegar al clímax sexual sin preocuparte de nada. <br>
						      		La vasectomía ni interfiere con las hormonas o el desempeño sexual. No cambiará la manera de sentir un orgasmo. Tu semen lucirá, se sentirá y sabrá del mismo modo que previo a la vasectomía sin preocuparte de que embaraces a tu pareja.</span>
						      	</div>
						    </li>
						</ul>
					</div> 
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid" style="background-color: #3b3232; padding-bottom: 80px; padding-top: 80px; " align="center">
		<div class="row">
			<h5 class="lato white-text">vasectomíaperu.com - 2018 <br> Lima, Perú</h5>
			<p class="lato white-text"><i class="fas fa-map-marker-alt" style="color: #fff;"></i> Av. Salaverry 2665 San Isidro, LIMA 27 Lima Peru - Lima</p>
		</div>
	</div>
	<?php include('particles/script.php'); ?>
</body>
</html>