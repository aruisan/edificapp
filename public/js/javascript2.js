$(document).ready(function(){

	$('.boton').on('click',function(){
		$('.barra-lateral').toggleClass('cerrar');
	});

	$('#editar').on('click',function(){
		$(".info-cuenta").prop('disabled', false);
	});

	$('#guardar').on('click',function(){
		$(".info-cuenta").prop('disabled', true);
	});

	$('.actividades').change(function(){
        $('.experiencia').show();   
    });

	$('select').select2({
		closeOnSelect:true,
		theme:'classic',
	});
	
	$('.especialistas').popover({
		title:"<button type='button' class='btn btn-info btn-block'><i class='fa fa-user-plus' aria-hidden='true'></i>Seleccionar</button>",
		content:"<p><i class='fa fa-map-marker' aria-hidden='true'></i>Cali, Valle del Cauca</p><p>Usuario Premium</p> <ul class='list-unstyled list-inline'> <li><i class='fa fa-star' aria-hidden='true'></i>1</li><li><i class='fa fa-star' aria-hidden='true'></i>2</li><li><i class='fa fa-star' aria-hidden='true'></i>3</li><li><i class='fa fa-star' aria-hidden='true'></i>4</li><li><i class='fa fa-star' aria-hidden='true'></i>5</li></ul><button class='btn btn-success' type='button'>Pintor</button><button class='btn btn-success' type='button'>arquitecto</button><div id='total'><i class='fa fa-handshake-o fa-2x' aria-hidden='true'></i>Total clientes:250</div>",
		placement:'right',
		html:true,
		trigger:'focus'
	});

	$('.especialistas2').popover({
		title:"<button type='button' class='btn btn-info btn-block'><i class='fa fa-user-plus' aria-hidden='true'></i>Seleccionar</button>",
		content:"<p><i class='fa fa-map-marker' aria-hidden='true'></i>Yumbo, Valle del Cauca</p><p>Usuario Freemium</p> <ul class='list-unstyled list-inline'> <li><i class='fa fa-star' aria-hidden='true'></i>1</li><li><i class='fa fa-star' aria-hidden='true'></i>2</li><li><i class='fa fa-star' aria-hidden='true'></i>3</li><li><i class='fa fa-star-o' aria-hidden='true'></i>4</li><li><i class='fa fa-star-o' aria-hidden='true'></i>5</li></ul><button class='btn btn-success' type='button'>Plomero</button><button class='btn btn-success' type='button'>Albañil</button><div id='total'><i class='fa fa-handshake-o fa-2x' aria-hidden='true'></i>Total clientes:50</div>",
		placement:'right',
		html:true,
		trigger:'focus'
	});

	$('.especialistas3').popover({
		title:"<button type='button' class='btn btn-info btn-block'><i class='fa fa-user-plus' aria-hidden='true'></i>Seleccionar</button>",
		content:"<p><i class='fa fa-map-marker' aria-hidden='true'></i>Palmira, Valle del Cauca</p><p>Usuario Premium Light</p> <ul class='list-unstyled list-inline'> <li><i class='fa fa-star' aria-hidden='true'></i>1</li><li><i class='fa fa-star' aria-hidden='true'></i>2</li><li><i class='fa fa-star' aria-hidden='true'></i>3</li><li><i class='fa fa-star-o' aria-hidden='true'></i>4</li><li><i class='fa fa-star-o' aria-hidden='true'></i>5</li></ul><button class='btn btn-success' type='button'>Dibujante Arquitectonico</button><button class='btn btn-success' type='button'>Diseño de Interiores</button><button class='btn btn-success' type='button'>Remodelación</button><div id='total'><i class='fa fa-handshake-o fa-2x' aria-hidden='true'></i>Total clientes:150</div>",
		placement:'right',
		html:true,
		trigger:'focus'
	});

	$('.especialistas4').popover({
		title:"<button type='button' class='btn btn-info btn-block'><i class='fa fa-user-plus' aria-hidden='true'></i>Seleccionar</button>",
		content:"<p><i class='fa fa-map-marker' aria-hidden='true'></i>Cerrito, Valle del Cauca</p><p>Usuario Premium</p> <ul class='list-unstyled list-inline'> <li><i class='fa fa-star' aria-hidden='true'></i>1</li><li><i class='fa fa-star' aria-hidden='true'></i>2</li><li><i class='fa fa-star' aria-hidden='true'></i>3</li><li><i class='fa fa-star' aria-hidden='true'></i>4</li><li><i class='fa fa-star' aria-hidden='true'></i>5</li></ul><button class='btn btn-success' type='button'>Pintor</button><button class='btn btn-success' type='button'>arquitecto</button><div id='total'><i class='fa fa-handshake-o fa-2x' aria-hidden='true'></i>Total clientes:250</div>",
		placement:'right',
		html:true,
		trigger:'focus'
	});

	$('.especialistas5').popover({
		title:"<button type='button' class='btn btn-info btn-block'><i class='fa fa-user-plus' aria-hidden='true'></i>Seleccionar</button>",
		content:"<p><i class='fa fa-map-marker' aria-hidden='true'></i>Dagua, Valle del Cauca</p><p>Usuario Freemium</p> <ul class='list-unstyled list-inline'> <li><i class='fa fa-star' aria-hidden='true'></i>1</li><li><i class='fa fa-star' aria-hidden='true'></i>2</li><li><i class='fa fa-star' aria-hidden='true'></i>3</li><li><i class='fa fa-star-o' aria-hidden='true'></i>4</li><li><i class='fa fa-star-o' aria-hidden='true'></i>5</li></ul><button class='btn btn-success' type='button'>Albañil</button><button class='btn btn-success' type='button'>Plomero</button><div id='total'><i class='fa fa-handshake-o fa-2x' aria-hidden='true'></i>Total clientes:50</div>",
		placement:'right',
		html:true,
		trigger:'focus'
	});

	$('.especialistas6').popover({
		title:"<button type='button' class='btn btn-info btn-block'><i class='fa fa-user-plus' aria-hidden='true'></i>Seleccionar</button>",
		content:"<p><i class='fa fa-map-marker' aria-hidden='true'></i>Cali, Valle del Cauca</p><p>Usuario Premium Light</p> <ul class='list-unstyled list-inline'> <li><i class='fa fa-star' aria-hidden='true'></i>1</li><li><i class='fa fa-star' aria-hidden='true'></i>2</li><li><i class='fa fa-star-o' aria-hidden='true'></i>3</li><li><i class='fa fa-star-o' aria-hidden='true'></i>4</li><li><i class='fa fa-star-o' aria-hidden='true'></i>5</li></ul><button class='btn btn-success' type='button'>Dibujante Arquitectonico</button><button class='btn btn-success' type='button'>Diseño de Interiores</button><button class='btn btn-success' type='button'>Remodelación</button><div id='total'><i class='fa fa-handshake-o fa-2x' aria-hidden='true'></i>Total clientes:250</div>",
		placement:'right',
		html:true,
		trigger:'focus'
	});	

	$("#example-basic").steps({
    headerTag: "h3",
    bodyTag: "fieldset",
    transitionEffect: "slideLeft",
    autoFocus: true
		});
file:///C:/Users/Ivan%20Dario/Desktop/Fergon/SICAP/index.html#features
	$(".aliados").owlCarousel({
		 loop:true,
		 margin: 15,
		 autoplay:true,
		 autoplayTimeout:3500,
		 autoplayHoverPause:true,
		 responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        }
    }
	});

	$(".membresias").owlCarousel({
		 margin: 40,
		 autoplay:true,
		 autoplayTimeout:4000,
		 autoplayHoverPause:true,
		 responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        }
    }
	});

	$('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
								});
	
	var especialidad = {};
	especialidad['ARQ'] = ['Diseño Arquitectónico'];
	especialidad['DBARQ'] = ['Dibujo Arquitectónico', 'Dibujos 3D y Render'];
	especialidad['CONS'] = ['Gerencia de Proyectos de Construcción', 'Construcción Tradicional', 'Casas Prefabricadas', 'Cabañas de Madera', 'Demolición', 'Excavaciones y Movimientos de Tierra', 'Pisos en Concreto','Pavimentos', 'Estructuras Metálicas', 'Techos y Cubiertas', 'Recolección de Escombros', 'Pozos profundos'];
	especialidad['PINT'] = ['Pintura de Interiores', 'Pintura de Fachadas', 'Estucos Especiales'];
	especialidad['MAES'] = ['Maestro de Obra Certificado', 'Maestro de Obra Experimentado'];
	especialidad['ALB'] = ['Albañiles Expertos (Mampostería, Concreto, Pañete ó Repello)'];
	especialidad['REMO'] = ['Remodelación Integral (Completa)', 'Cocinas', 'Baños', 'Teatros en Casa (Home Theater)', 'Fachadas', 'Otros Ambientes']; 
	especialidad['CLIV'] = ['Instaladores de Drywall y Board (Muros Internos, Externos, Cielo rasos…)'];
	especialidad['CARP'] = ['Puertas', 'Centros de Entretenimiento', 'Camas', 'Closets', 'Cajoneras'];
	especialidad['ELECT']= ['Instalaciones Eléctricas nuevas', 'Mantenimiento y reparación de Instalaciones Eléctricas'];
	especialidad['PLOM'] = ['Plomeros expertos'];
	especialidad['PMAD'] = ['Madera Laminada', 'Pisos Deck'];
	especialidad['PVIN'] = ['Pisos Laminados en Vinilo y PVC', 'Pisos de Vinilo en rollo'];
	especialidad['PDEC'] = ['Concreto Decorativo','Concreto Estampado','Concreto Pulido', 'Pisos Epóxicos y Polimericos'];
	especialidad['PAPEL'] = ['Instaladores Papel de Colgadura','Instalación y Mantenimiento Alfombras'];
	especialidad['CORT'] = ['Suministro e Instalación Cortinas y Persianas ','Mantenimiento Cortinas'];
	especialidad['ILUM'] = ['Diseño e Instalación Iluminación Led'];
	especialidad['DISIN'] = ['Diseñadores de Interiores'];
	especialidad['COC'] = ['Diseño de Cocinas', 'Construcción Cocinas','Suministro e Instalación Equipos para Cocina', 'Mantenimiento Cocinas'];
	especialidad['CARPM'] = ['Carpintería Arquitectónica Metálica - Puertas, Ventanas', 'Carpintería de Acero', 'Carpintería de Aluminio'];
	especialidad['CARPVC'] = ['Carpintería Arquitectónica en PVC (Puertas y Ventanas)'];
	especialidad['IMP'] = ['Tanques (Agua Potable y otros)', 'Losas y Cubiertas', 'Jardineras', 'Parqueaderos'];
	especialidad['AIRE'] = ['Diseño Sistemas de Climatización', 'Instalación Aire Acondicionado', 'Mantenimiento Aire Acondicionado'];
	especialidad['JARD'] = ['Diseño de Jardines', 'Construcción Jardines','Mantenimiento Jardines'];
	especialidad['FACH'] = ['Instalación Fachadas con Paneles de Alumino compuesto - Tipo Alucobond', 'Otros revestimientos Arquitectónicos de Fachadas'];
	especialidad['PARA'] = ['Parasoles', 'Membranas Arquitectónicas', 'Toldos', 'Pergolas'];
	especialidad['PISCI'] = ['Construcción de Piscinas y Jacuzzis', 'Mantenimiento Piscinas y Jacuzzis', 'Saunas y Turcos'];
	especialidad['DOMO'] = ['Diseño Automatización','Montaje Domótica (Iluminación, Climatización, Audio, Video, CCTV, Persianas Motorizadas, Control Jacuzzis)', 'Cableado Estructurado', 'Sistemas de Vigilancia'];
	especialidad['TOPO'] = ['Levantamientos Topográficos'];
	especialidad['ESTSU'] = ['Estudios de Suelo'];
	especialidad['DISET'] = ['Cálculo y Diseño Estructural de Edificaciones'];
	especialidad['DISHI'] = ['Cálculo y Diseño Redes Acueducto Internas y Externas', 'Cálculo y Diseño Redes Alcantarillado Internas y Externas', 'Cálculo y Diseño de Pozos Sépticos', 'Cálculo y Diseño de Sistemas contra Incendio'];
	especialidad['DISEL'] = ['Cálculo y Diseño Redes Eléctricas'];
	especialidad['GAS'] = ['Instalación y Mantenimiento Gas Natural Domiciliario', 'Gas Propano','Biogas'];
	especialidad['AVAL'] = ['Avalúo Comercial','Avalúo Residencial'];
	especialidad['ASESO'] = ['Licencias de Construcción', 'Licencias de Urbanización', 'Licencias de Parcelación', 'Legalización de predios', 'Reglamentos de propiedad horizontal', 'Reloteo', 'Desenglobes', 'Estudio de titulos', 'Gestión de Subsidios de Mejoramiento de Vivienda', 'Gestión de Subisidios para Compra de Vivienda', 'Asesoría para compra de vivienda nueva o usada', 'Reclamos Postventa'];

 
	function ChangeList() {
	    var carList = document.getElementById("especialidades");
	    var modelList = document.getElementById("actividades");
	    var selCar = carList.options[carList.selectedIndex].value;
	    while (modelList.options.length) {
	        modelList.remove(0);
	    }
	    var cars = especialidad[selCar];
	    if (cars) {
	        var i;
	        for (i = 0; i < cars.length; i++) {
	            var car = new Option(cars[i], i);
	            modelList.options.add(car);
	        }
	    }
	}

	});

	function initMap() {
	        var uluru = {lat: 3.468547, lng:-76.523833 };
	        var map = new google.maps.Map(document.getElementById('map'), {
	          zoom: 8,
	          center: uluru
	        });
	        var marker = new google.maps.Marker({
	          position: uluru,
	          map: map,
	          draggable:true,
	          title:"usuario",
	          icon:'../../img/marker.png'
	        });
	      }

