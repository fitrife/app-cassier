<div class="row">
	<ol class="breadcrumb">
		<li><a href="#">
			<em class="fa fa-home"></em>
		</a></li>
	</ol>
</div>

<div class="row">
	<div class="col-md-12">
		<h1 class="page-header">Dashboard</h1>
	</div>
</div>

<div>
	<div class="row">
		<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
			<div class="panel panel-teal panel-widget panel-right">
				<div class="row no-padding">
					<em class="fa fa-coffee icon"></em>
					<div class="large">120</div>
					<div>Jumlah Menu</div>
				</div>
			</div>
		</div>

		<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
			<div class="panel panel-teal panel-widget panel-right">
				<div class="row no-padding">
					<em class="fa fa-users icon"></em>
					<div class="large">120</div>
					<div>Jumlah Kasir</div>
				</div>
			</div>
		</div>

		<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
			<div class="panel panel-teal panel-widget panel-right">
				<div class="row no-padding">
					<em class="fa fa-files-o icon"></em>
					<div class="large">120</div>
					<div>Total Transaksi</div>
				</div>
			</div>
		</div>

		<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
			<div class="panel panel-teal panel-widget panel-right">
				<div class="row no-padding">
					<em class="fa fa-dollar icon"></em>
					<div class="large">120</div>
					<div>Jumlah Pemasukan</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="container" style="min-width: 300px; height: 400px; margin: 0 auto"></div>

<script src="./highcharts/highcharts.js"></script>
<script src="./highcharts/exporting.js"></script>

<script type="text/javascript">
Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'World\'s largest cities per 2017'
    },
    subtitle: {
        text: 'Source: <a href="http://en.wikipedia.org/wiki/List_of_cities_proper_by_population">Wikipedia</a>'
    },
    xAxis: {
        type: 'category',
        labels: {
            rotation: -45,
            style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Population (millions)'
        }
    },
    legend: {
        enabled: false
    },
    tooltip: {
        pointFormat: 'Population in 2017: <b>{point.y:.1f} millions</b>'
    },
    series: [{
        name: 'Population',
        data: [
            ['Shanghai', 24.2],
            ['Beijing', 20.8],
            ['Karachi', 14.9],
            ['Shenzhen', 13.7],
            ['Guangzhou', 13.1],
            ['Istanbul', 12.7],
            ['Mumbai', 12.4],
            ['Moscow', 12.2],
            ['São Paulo', 12.0],
            ['Delhi', 11.7],
            ['Kinshasa', 11.5],
            ['Tianjin', 11.2],
            ['Lahore', 11.1],
            ['Jakarta', 10.6],
            ['Dongguan', 10.6],
            ['Lagos', 10.6],
            ['Bengaluru', 10.3],
            ['Seoul', 9.8],
            ['Foshan', 9.3],
            ['Tokyo', 9.3]
        ],
        dataLabels: {
            enabled: true,
            rotation: -90,
            color: '#FFFFFF',
            align: 'right',
            format: '{point.y:.1f}', // one decimal
            y: 10, // 10 pixels down from the top
            style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    }]
});

</script>