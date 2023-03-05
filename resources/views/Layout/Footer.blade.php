<!-- Jquery JS -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
		<script src="{{asset('assets/js/jquery-migrate.js')}}"></script>
		<script src="{{asset('assets/js/popper.min.js')}}"></script>
		<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('assets/js/slickslider.min.js')}}"></script>
		<script src="{{asset('assets/js/charts.js')}}"></script>
		<script src="{{asset('assets/js/countdown.min.js')}}"></script>
		<script src="{{asset('assets/js/final-countdown.min.js')}}"></script>
		<script src="{{asset('assets/js/circle-progress.min.js')}}"></script>
		<script src="{{asset('assets/js/main.js')}}"></script>
		<script>
		jQuery(document).ready(function($) {
			  $('[data-countdown]').each(function() {
				  var $this = $(this), finalDate = $(this).data('countdown');
				  $this.countdown(finalDate, function(event) {
					$this.html(event.strftime(' %H : %M : %S'));
				  });
			 });
		});
		</script>
		<script>
			const ctx = document.getElementById('myChart_one').getContext('2d');
			const myChart_one = new Chart(ctx, {
				type: 'bar',
				
				data: {
					labels: ['Sat', 'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri'],
					datasets: [{
						label: 'AVG Sale',
						data: [90, 55, 80, 25, 65, 40, 95],
						backgroundColor: [
							'#5356FB',
							'#5356FB',
							'#5356FB',
							'#5356FB',
							'#5356FB',
							'#5356FB',
							'#5356FB',
						],
						
						fill: true,
						tension:0.4,
						borderWidth: 0,
						borderSkipped:false,
						borderRadius:3,
						barPercentage:0.4,
						categoryPercentage:0.4,
					},{
						label: 'Total Sell',
						data: [55, 80, 50, 75, 45, 55, 80],
						backgroundColor: [
							'#F239F5',
							'#F239F5',
							'#F239F5',
							'#F239F5',
							'#F239F5',
							'#F239F5',
							'#F239F5',
						],
						borderWidth: 0,
						borderSkipped:false,
						borderRadius:3,
						categoryPercentage:0.4,
						barPercentage: 0.4
					}]
				},
				
				 options: {
					maintainAspectRatio: false,
					responsive: true,
					scales: {
						x:{
							grid:{
								display:false,
								drawBorder: false,
							},
							
						},
						y:{
							grid:{
								drawBorder: false,
							},
						},
					},
					plugins: {
					  legend: {
						position: 'top',
						display: false,
					  },
					  title: {
						display: false,
						text: 'Sell History'
					  }
					}
				}
			});
			
			const ctx_two = document.getElementById('myChart_two').getContext('2d');
			const myChart_two = new Chart(ctx_two, {
				type: 'line',
				
				data: {
					labels: ['Jan 1', 'Jan 2', 'Jan 3', 'Jan 4', 'Jan 5', 'Jan 6', 'Jan 7','Jan 8','Jan 9','Jan 10','Jan 11','Jan 12','Jan 13','Jan 14','Jan 15'],
					datasets: [{
						label: 'Visitor',
						data: [50, 20, 45, 15, 55, 20,60, 20,70,45,64,20,72,22,66],
						backgroundColor: '#FAECFF',
						borderColor:'#DE3DF8',
						pointRadius: 5,
						pointBackgroundColor: '#fff',
						pointBorderColor: '#AE8FF7',
						tension: 0.6,
						borderWidth:4,
						fill:true,
						fillColor:'#fff',
					}]
				},
				
				 options: {
					maintainAspectRatio: false,
					responsive: true,
					scales: {
						x:{
							grid:{
								display:false,
								drawBorder: false,
							},
							
						},
						y:{
							grid:{
								display:false,
								drawBorder: false,
							},
							ticks:{
								display:false
							}
						},
					},
					
					plugins: {
					  legend: {
						position: 'top',
						display: false,
					  },
					  title: {
						display: false,
						text: 'Visitor: 2k'
					  }
					}
				}
			});
			
			const ctx_side_two = document.getElementById('myChart_Side_One').getContext('2d');
			const myChart_Side_One = new Chart(ctx_side_two, {
				type: 'doughnut',
				
				data: {
					labels: [
						'Total Sold',
						'Total Cancel',
						'Total Cancel',
						'Total Planding'
					  ],
					  datasets: [{
						label: 'My First Dataset',
						data: [16, 16, 16, 30],
						backgroundColor: [
						  '#5356FB',
						  '#F539F8',
						  '#FFC210',
						  '#E3E4FE'
						],
						hoverOffset: 2,
						borderWidth: 0,
					  }]
				},
				
				 options: {
				 
					responsive: true,
					plugins: {
					  legend: {
						position: 'top',
						display: false,
					  },
					  title: {
						display: false,
						text: 'Sell History'
					  }
					}
				}
				
			});
			
			const ctx_side_three = document.getElementById('myChart_Side_Two').getContext('2d');
			const myChart_Side_Two = new Chart(ctx_side_three, {
				type: 'line',
				
				data: {
					labels: ['12:00 AM', '04:00 AM', '08:00 AM'],
					datasets: [{
						label: 'Visitor',
						data: [40, 90, 10],
						backgroundColor: '#D8D8FE',
						borderColor:'#5356FB',
						pointRadius: 3,
						pointBackgroundColor: '#5356FB',
						pointBorderColor: '#5356FB',
						borderWidth:4,
						tension: 0.9,
						fill:true,
						fillColor:'#fff',
						
					}]
				},
				
				 options: {
					responsive: true,
					scales: {
						x:{
							grid:{
								display:false,
								drawBorder: false,
							},
							
						},
						y:{
							grid:{
								display:false,
								drawBorder: false,
							},
							ticks:{
								display:false
							}
						},
					},
					
					plugins: {
					  legend: {
						position: 'top',
						display: false,
					  },
					  title: {
						display: false,
						text: 'Visitor: 2k'
					  }
					}
				}
			});
		</script>
		
	</body>
</html>