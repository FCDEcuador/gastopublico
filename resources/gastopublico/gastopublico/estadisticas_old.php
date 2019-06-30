<?php 
	include_once 'header.php';	
?>

<div class="container mt-3">

	
</div>

<!-- BEGIN SECCION NOTA DESTACADA -->
<div class="container-fluid p-3 bg-light imagen-estadisticas" style="background-image: url('https://via.placeholder.com/1000x340');">
	<div class="container">
		<!-- BEGIN SECCION TITULO -->
		<div class="row mt-3 mb-5">
			<div class="col-sm-6">
				<div class="fz32 border-bottom border-white text-white text-uppercase">Estadísticas</div>
			</div>
		</div>
		<!-- END SECCION TITULO -->
		<div class="row" >
			<div class="offset-sm-4 col-sm-4 align-self-center" style="background: rgba(0,0,0,0.5)">
				<div class="row pt-3 pb-3">
					<div class="col-12">
						<div class="row">
							<div class="col-4 pr-0">
								<h3 class="subtitulo text-white text-uppercase text-right text-info fz60">10</h3>
							</div>
							<div class="col-8">
								<h3 class="subtitulo text-white text-uppercase text-info font-italic fz28">Casos investigados</h3>
							</div>
						</div>
					</div>
					<div class="col-5">
						<div class="bg-light text-info fz60 text-center p-1" style="margin-bottom:-15px;padding: 10px!important;"><img src="images/ico-lupa.svg" class="img-fluid"></div>
					</div>
					<div class="col-7 text-center ">
						<p class="text-uppercase text-white fz12 d-block flex-grow-1" style="margin-bottom: 5px;">por el observatorio hasta:</p>
						<div class="d-flex">
							<div>
								<span class="fechas-circulos mr-2"><?php echo date('d'); ?></span>
								<span class="text-center text-white mr-2 fz12">DÍA</span>
							</div>
							<div>						
								<span class="fechas-circulos mr-2"><?php echo date('m'); ?></span>
								<span class="text-center text-white mr-2 fz12">MES</span>
							</div>
							<div>
								<span class="fechas-circulos"><?php echo date('y'); ?></span>
								<span class="text-center text-white fz12">AÑO</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END SECCION NOTA DESTACADA -->

		
<div class="container">
	<!-- BEGIN SECCION ANTECEDENTES -->
	<div class="row mt-3">
		<div class="col-sm-6">
			<h1 class="titulo border-bottom bormorado morado text-uppercase">etapa actual del caso</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-12 mt-5">
			<h6 class="border-top bormorado morado pt-2 pb-2 font-weight-bold">Examen de contraloría</h6>
			<div class="row no-gutters">
				<div class="col-12">
					<div id="chartdiv" style="width: 100%; height: 200px; background-color: #FFFFFF;" ></div>

					<div id="chartdiv2" style="width: 100%; height: 200px; background-color: #FFFFFF;" ></div>
				</div>

				<div class="col-6">
					<p class="pb-0 mb-0 fz30 text-secondary border-bottom border-secondary text-uppercase text-right"><span class="mr-3">Auditoría</span></p>
					<p class="pb-0 mb-0 fz30 text-secondary border-bottom border-secondary text-uppercase text-right"><span class="mr-3">Auditoría</span></p>
					<p class="pb-0 mb-0 fz30 text-secondary border-bottom border-secondary text-uppercase text-right"><span class="mr-3">Auditoría</span></p>
					<p class="pb-0 mb-0 fz30 text-secondary border-bottom border-secondary text-uppercase text-right"><span class="mr-3">Auditoría</span></p>
					<p class="pb-0 mb-0 fz30 text-secondary border-bottom border-secondary text-uppercase text-right"><span class="mr-3">Auditoría</span></p>
				</div>
				<div class="col-6">
					<canvas id="barChart" width="400" height="150"></canvas>
				</div>
			</div>
		</div>
		<div class="col-12 mt-5">
			<h6 class="border-top bormorado morado pt-2 pb-2 font-weight-bold">Proceso judicial</h6>
			<div class="row no-gutters">
				<div class="col-6">
					<p class="pb-0 mb-0 fz30 text-secondary border-bottom border-secondary text-uppercase text-right"><span class="mr-3">Auditoría</span></p>
					<p class="pb-0 mb-0 fz30 text-secondary border-bottom border-secondary text-uppercase text-right"><span class="mr-3">Auditoría</span></p>
					<p class="pb-0 mb-0 fz30 text-secondary border-bottom border-secondary text-uppercase text-right"><span class="mr-3">Auditoría</span></p>
					<p class="pb-0 mb-0 fz30 text-secondary border-bottom border-secondary text-uppercase text-right"><span class="mr-3">Auditoría</span></p>
					<p class="pb-0 mb-0 fz30 text-secondary border-bottom border-secondary text-uppercase text-right"><span class="mr-3">Auditoría</span></p>
					<p class="pb-0 mb-0 fz30 text-secondary border-bottom border-secondary text-uppercase text-right"><span class="mr-3">Auditoría</span></p>
					<p class="pb-0 mb-0 fz30 text-secondary border-bottom border-secondary text-uppercase text-right"><span class="mr-3">Auditoría</span></p>
				</div>
				<div class="col-6">
					<canvas id="barChart2" width="400" height="210"></canvas>
				</div>
			</div>
		</div>
		<div class="col-12 mt-5">
			<h6 class="border-top bormorado morado pt-2 pb-2 font-weight-bold">Investigación periodística</h6>
			<div class="row no-gutters">
				<div class="col-6">
					<p class="pb-0 mb-0 fz30 text-secondary border-bottom border-secondary text-uppercase text-right"><span class="mr-3">Auditoría</span></p>
					<p class="pb-0 mb-0 fz30 text-secondary border-bottom border-secondary text-uppercase text-right"><span class="mr-3">Auditoría</span></p>
					<p class="pb-0 mb-0 fz30 text-secondary border-bottom border-secondary text-uppercase text-right"><span class="mr-3">Auditoría</span></p>
					<p class="pb-0 mb-0 fz30 text-secondary border-bottom border-secondary text-uppercase text-right"><span class="mr-3">Auditoría</span></p>
					<p class="pb-0 mb-0 fz30 text-secondary border-bottom border-secondary text-uppercase text-right"><span class="mr-3">Auditoría</span></p>
				</div>
				<div class="col-6">
					<canvas id="barChart3" width="400" height="150"></canvas>
				</div>
			</div>
		</div>
	</div>

	<!-- amCharts javascript code -->
		<script type="text/javascript">
			
			var data = [
						{
							"category": "AUDITORÍA",
							"column-1": "2",
							"fill alpha": "1",
							"dash length": ""
						},
						{
							"category": "INFORME BORRADOR CON PERSONAS VINCULADAS",
							"column-1": "4",
							"fill alpha": "0.9",
							"dash length": ""
						},
						{
							"category": "DETERMINACIÓN DE RESPONSABILIDADES CIVILES",
							"column-1": "6",
							"fill alpha": "0.75",
							"dash length": ""
						},
						{
							"category": "DETERMINACIÓN DE RESPONSABILIDADES CIVILES",
							"column-1": "8",
							"fill alpha": "0.65"
						},
						{
							"category": "DETERMINACIÓN DE RESPONSABILIDADES PENALES",
							"column-1": "10",
							"fill alpha": "0.55"
						},
						
					];


					var data2 = [
						{
							"category": "INVESTIGACIÓN JUDICIAL",
							"column-1": "2",
							"fill alpha": "1",
							"dash length": ""
						},
						{
							"category": "ARCHIVO DEL CASO",
							"column-1": "4",
							"fill alpha": "0.9",
							"dash length": ""
						},
						{
							"category": "JUICIO",
							"column-1": "6",
							"fill alpha": "0.75",
							"dash length": ""
						},
						{
							"category": "SOBRESEIMIENTO",
							"column-1": "8",
							"fill alpha": "0.65"
						},
						{
							"category": "SENTENCIA RESPONSABILIDAD PENAL",
							"column-1": "10",
							"fill alpha": "0.55"
						},
						{
							"category": "SENTENCIA DE DECLARACIÓN DE INOCENCIA",
							"column-1": "12",
							"fill alpha": "0.45"
						},
						{
							"category": "SANCIÓN",
							"column-1": "14",
							"fill alpha": "0.35"
						},

					];

		setupChart('chartdiv', data);
		setupChart('chartdiv2', data1);
		setupChart('chartdiv3', data2);


		function setupChart(chartId, arreglocasos ) {
		  var canvas = document.getElementById(chartId);
		  var context = canvas.getContext('2d');	

	        //El total de casos por tipo va a ser el 100 y 
	        //cada subtipo sera calculado con regla de 3 
	        //para ir dibujando cada barra
	        AmCharts.makeChart(chartId,
				{
				"type": "serial",
				"categoryField": "category",
				"columnSpacing": 0,
				"rotate": true,
				"autoMarginOffset": 0,
				"marginBottom": 0,
				"marginLeft": 0,
				"marginRight": 0,
				"marginTop": 0,
				"colors": [],
				"startDuration": 1,
				"classNamePrefix": "estadisticas",
				"fontSize": 14,
				"handDrawScatter": 1,
				"categoryAxis": {
					"classNameField": "c_categorias",
					"gridPosition": "start",
					"axisColor": "#FFFFFF",
					"gridColor": "#FFFFFF"
				},
				"trendLines": [],
				"graphs": [
					{
						"alphaField": "fill alpha",
						"dashLengthField": "dash length",
						"fillAlphas": 1,
						"id": "AmGraph-1",
						"lineThickness": 0,
						"title": "graph 1",
						"type": "column",
						"valueField": "column-1"
					},
					{
						"clustered": false,
						"fillAlphas": 0.3,
						"id": "AmGraph-2",
						"labelText": "[[value]]",
						"lineColor": "#fff",
						"type": "column",
						"valueField": "column-1"
					}
				],
				"guides": [],
				"valueAxes": [
					{
						"id": "ValueAxis-1",
						"position": "bottom",
						"zeroGridAlpha": 0,
						"autoGridCount": false,
						"autoRotateCount": 0,
						"axisColor": "#FFFFFF",
						"fontSize": 0,
						"gridAlpha": 0,
						"gridColor": "#FFFFFF",
						"gridCount": 0,
						"gridThickness": 0,
						"title": ""
					}
				],
				"allLabels": [],
				"balloon": {
					"horizontalPadding": 10,
					"offsetX": 2,
					"pointerOrientation": "up",
					"showBullet": true
				},
				"titles": [
					{
						"id": "Title-1",
						"size": 15,
						"text": ""
					}
				],
				"dataProvider": arreglocasos,
			}
			);



	     }

			
		</script>

	<script type="text/javascript">

        setupChart('barChart', 11, ["3", "3", "2", "1", "1"], 148, 213,0);
		setupChart('barChart2', 91,["20", "18", "15", "12", "11", "8", "5"],148, 213,0);
		setupChart('barChart3', 110,["40", "30", "20", "10", "1"], 148, 213,0);


		function setupChart(chartId, totalcasos, arreglocasos, colR, colG, colB ) {
		  var canvas = document.getElementById(chartId);
		  var context = canvas.getContext('2d');	

	        //El total de casos por tipo va a ser el 100 y 
	        //cada subtipo sera calculado con regla de 3 
	        //para ir dibujando cada barra
	        
	        var datos = [];
	        var fondos = [];

	        fLen = arreglocasos.length;
	        for (i = 0; i < fLen; i++) {
			  datos.push(Math.round((arreglocasos[i]*100)/totalcasos));
			  c1 = colR - i * 10;
			  c2 = colG - i * 10;
			  c3 = colB;
			  fondos.push('rgba(' + c1 + ',' + c2 + ',' + c3 + ', 1)')
			}
	        	
			console.log(datos)

	          var horizontalBarChartData = {
	              labels: datos,
	              datasets: [{
	                  backgroundColor: fondos,
	                  data: datos
	              }]

	          };
	          //var ctx = document.getElementById("barChart").getContext("2d");
	          var myHorizontalBar = new Chart(context, {
	              type: 'horizontalBar',
	              data: horizontalBarChartData,
	              options: {
	                  scales: {
	                  	xAxes: [{
	                  		display: false,
				            gridLines: {
				                offsetGridLines: false,
				                display: false,
				                drawOnChartArea: false,
				                drawTicks: false,
				                show: false,
				                drawBorder: false,
				            },
				            scaleShowGridLines: {
				            	display: false,
				            }
				        }],
	                    yAxes:[{
	                    	display: false,
	                    	gridLines: {
				                ffsetGridLines: false,
				                display: false,
				                drawOnChartArea: false,
				                drawTicks: false,
				                show: false,
				                drawBorder: false,
				            },
				            scaleShowGridLines: {
				            	display: false,
				            },
	                        barThickness: 30,
	                        ticks: {
	                            beginAtZero:false,
	                            mirror: true,
	                        },
	                    }],
	                  },
	                  responsive: false,
	                  legend: {
	                      display: false,
	                  },
	                  title: {
	                      display: false,
	                      text: ''
	                  },
	                animation: {
	                  duration: 1,
					    onComplete () {
					      const chartInstance = this.chart;
					      const ctx = chartInstance.ctx;
					      const dataset = this.data.datasets[0];
					      const meta = chartInstance.controller.getDatasetMeta(0);

					      Chart.helpers.each(meta.data.forEach((bar, index) => {
					        const label = this.data.labels[index]+'%';
					        const labelPositionX = 5;
					        const labelWidth = ctx.measureText(label).width + labelPositionX;

					        ctx.textBaseline = 'middle';
					        ctx.textAlign = 'left';
					        ctx.fillStyle = '#fff';
					        ctx.fillText(label, labelPositionX, bar._model.y);
					      }));
					    }
					  }
	              }
	          });
	        }
	</script>
	<!-- END SECCION ANTECEDENTES -->

	<!-- BEGIN SECCION DIAGRAMA INFERIOR -->
	<div class="row mt-5">
		<div class="col-sm-6">
			<h1 class="titulo border-bottom bormorado morado text-uppercase">etapa actual del caso</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-7 mt-5">
			<div><canvas id="periodistica" class="m-100 h-100" height="400px"></canvas></div>
		</div>
		<div class="col-sm-5 mt-5 align-self-center">
			<p class="text-secondary text-uppercase"><span class="p-1 text-white mr-3 d-inline-block" style="background: #400a99;width: 100px;">66%</span>Función legislativa</p>
			<p class="text-secondary text-uppercase"><span class="p-1 text-white mr-3 d-inline-block" style="background: #5a16a3;width: 100px;">66%</span>Función ejecutiva</p>
			<p class="text-secondary text-uppercase"><span class="p-1 text-white mr-3 d-inline-block" style="background: #834db8;width: 100px;">66%</span>Función judicial</p>
			<p class="text-secondary text-uppercase"><span class="p-1 text-white mr-3 d-inline-block" style="background: #a87dcc;width: 100px;">66%</span>Función electoral</p>
			<p class="text-secondary text-uppercase"><span class="p-1 text-white mr-3 d-inline-block" style="background: #ccafe0;width: 100px;">66%</span>Función de transparencia y control social</p>
		</div>
	</div>
	
	<script type="text/javascript">

		setupChart('periodistica', 50, 40, 60, 20, 10);
		function setupChart(chartId, flegislativo, fejecutivo, fjudicial, felectoal, ftransparencia ) {
		  var canvas = document.getElementById(chartId);
		  var context = canvas.getContext('2d');

		  var remaining = 100 - flegislativo;
		  var remaining2 = 100 - fejecutivo;
		  var remaining3 = 100 - fjudicial;
		  var remaining4 = 100 - felectoal;
		  var remaining5 = 100 - ftransparencia;

		  var data = {
		    labels: [ 'Función Legislativa', 'Función Ejecutiva', 'Función Judicial', 'Función Electoral', 'Función de Transparencia y Control Social' ],
		    datasets: [{
		      data: [flegislativo, remaining],
		      backgroundColor: [
		        '#400a99',
		        '#fff'
		      ],borderWidth: 1,
		      borderColor: [
		        '#400a99',
		        '#ccc'
		      ],
		      hoverBackgroundColor: [
		        '#400a99',
		        '#FFFFFF'
		      ]
		    },{
		      data: [fejecutivo, remaining2],
		      backgroundColor: [
		        '#5a16a3',
		        '#fff'
		      ],borderWidth: 1,
		      borderColor: [
		        '#5a16a3',
		        '#ccc'
		      ],
		      hoverBackgroundColor: [
		        '#5a16a3',
		        '#FFFFFF'
		      ]
		    },{
		      data: [fjudicial, remaining3],
		      backgroundColor: [
		        '#834db8',
		        '#fff'
		      ],borderWidth: 1,
		      borderColor: [
		        '#834db8',
		        '#ccc'
		      ],
		      hoverBackgroundColor: [
		        '#834db8',
		        '#FFFFFF'
		      ]
		    },{
		      data: [felectoal, remaining4],
		      backgroundColor: [
		        '#a87dcc',
		        '#fff'
		      ],borderWidth: 1,
		      borderColor: [
		        '#a87dcc',
		        '#ccc'
		      ],
		      hoverBackgroundColor: [
		        '#a87dcc',
		        '#FFFFFF'
		      ]
		    },{
		      data: [ftransparencia, remaining5],
		      backgroundColor: [
		        '#ccafe0',
		        '#fff'
		      ],borderWidth: 1,
		      borderColor: [
		        '#ccafe0',
		        '#ccc'
		      ],
		      hoverBackgroundColor: [
		        '#ccafe0',
		        '#FFFFFF'
		      ]
		    }],
		  };


		  var options = {
		    responsive: true,
		    maintainAspectRatio: false,
		    scaleShowVerticalLines: false,
		    cutoutPercentage: 50,

		    legend: {
		      display: false
		    },
		    animation: {
		     
		    }
		  };

		  Chart.defaults.global.tooltips.enabled = false;
		  var chart = new Chart(context, {
		    type: 'doughnut',
		    data: data,
		    options: options
		  });
		}

	</script>
	<!-- END SECCION DIAGRAMA INFERIOR -->


</div>

<?php 
	include_once 'footer.php';
?>