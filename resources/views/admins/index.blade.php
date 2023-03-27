<x-layout>

    <h1>Accueil Admin</h1>
    <div style="max-width:300px; max-height:240px;"><canvas id="myChart"></canvas></div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js"></script>
    <script>window.onload = function () {
		Chart.defaults.font.family = 'Helvetica';
        const centerText = {
            id: 'centerText',
            afterDatasetsDraw(chart, args, options){
                const { ctx, chartArea:{left,right,top,bottom,width,height}} =chart;
                ctx.save();

                console.log('top');
                const text = ((chart.data.datasets[0].data[0]*100)/chart.data.datasets[0].data[1])+'%';
                ctx.font = "30px Helvetica";
                ctx.fillStyle = 'rgba(0,0,0,1)';
                ctx.textAlign = 'center';
                ctx.fillText(text,width/2+left,bottom-15);
                ctx.restore();

                ctx.font = "11px Helvetica";
                ctx.fillStyle = 'rgba(0,0,0,1)';
                ctx.textAlign = 'center';
                ctx.fillText('Pourcentage de logements contrôler',width/2+left,bottom);
                ctx.restore();
            }
        };
		//Graph 1
		var ctx = document.getElementById("myChart");	
        var myChart = new Chart(ctx, {
		type: 'doughnut',
		data: {
			labels: ['Nombres de logements contrôler','Reste à controler'],
			datasets: [{
			label: '',
			data: [<?php
                
							echo "'".json_encode($nbLogementsRapport, JSON_NUMERIC_CHECK)."'";
				?>,<?php
                
                echo "'".json_encode($nbLogements, JSON_NUMERIC_CHECK)."'";
    ?>],
			backgroundColor: [
				'rgba(192, 0, 221, 1)',
				'rgba(0,221,25, 0.2)'
			],
			borderColor: [
				'rgba(0,0,0,0.1)',
                'rgba(255,255,255,1)'
			],
			borderWidth: 0,
			hoverOffset: 10
			}]
		},
        options: {
            responsive:true,
            cutout: 80,
            circumference:240,
            rotation:-120,
            maintainAspectRatio: false,
            layout: {
                padding : 20
            },
            plugins:{
                legend: {
                    display: false
                }
            }

            
        },
        plugins:[centerText]
		});    
    }  
        </script>
</x-layout>