<h2 class="page-title" style="color : #F1BBD5;">
    Detail Penjualan
</h2>
<h4 style="color : #F1BBD5;">
    Berikut detail penjualan perusahaan dalam satu tahun.
</h4>
<div class="row mt-4">
    <h3 style="color : #F1BBD5;">Pendapatan Keseluruhan</h3>
</div>
<div class="row">
    <div class="col-4">
        <div class="card">
            <div class="card-body">
                <div class="row g-2 align-items-center">
                    <div class="col-auto">
                        <a href="."><img src="<?php echo base_url();?>assets/dist/img/money.png" height="75" alt="Dollar"></a>
                    </div>
                    <div class="col">
                        <h4 class="card-title m-0">Pendapatan Hari ini</a></h4>
                        <div class="text-muted"><?php echo "Rp." . number_format($saleshariini['dailysales'], 0, '', '.');?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="card">
            <div class="card-body">
                <div class="row g-2 align-items-center">
                    <div class="col-auto">
                        <a href="."><img src="<?php echo base_url();?>assets/dist/img/money.png" height="75" alt="Dollar"></a>
                    </div>
                    <div class="col">
                        <h4 class="card-title m-0">Pendapatan Bulan ini</a></h4>
                        <div class="text-muted"><?php echo "Rp." . number_format($salesbulanini['monthlysales'], 0, '', '.');?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="card">
            <div class="card-body">
                <div class="row g-2 align-items-center">
                    <div class="col-auto">
                        <a href="."><img src="<?php echo base_url();?>assets/dist/img/money.png" height="75" alt="Dollar"></a>
                    </div>
                    <div class="col">
                        <h4 class="card-title m-0">Pendapatan Tahun ini</a></h4>
                        <div class="text-muted"><?php echo "Rp." . number_format($salestahunini['annualsales'], 0, '', '.');?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row mt-4">
    <h3 style="color : #F1BBD5;">Penjualan per id Produk</h3>
</div>
<div class="row">
    <div class="col-4">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Hari ini</h3>
            </div>
            <div class="card-body">
				<?php foreach($dailyoverview as $d){
					$idbarang1[] = $d->id_barang;
					$total1[] = $d->total1;
				}
				?>
                <div id="chart-barang-harian"></div>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Bulan ini</h3>
            </div>
            <div class="card-body">
				<?php foreach($monthlyoverview as $d){
					$idbarang2[] = $d->id_barang;
					$total2[] = $d->total2;
				}
				?>
                <div id="chart-barang-bulanan"></div>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tahun ini</h3>
            </div>
            <div class="card-body">
				<?php foreach($annualoverview as $d){
					$idbarang3[] = $d->id_barang;
					$total3[] = $d->total3;
				}
				?>
                <div id="chart-barang-tahunan"></div>
            </div>
        </div>
    </div>
</div>
<div class="row mt-4">
    <h3 style="color : #F1BBD5;">Pendapatan per Kurun Waktu</h3>
</div>
<div class="row">
    <div class="col-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Per Hari</h3>
            </div>
            <div class="card-body">
            <?php foreach($penjualanperhari as $d){
					$hari[] = $d->hari;
					$pph[] = $d->penjualanperhari;
				}
				?>
                <div id="chart-penjualan-bulanan"></div>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Per Bulan</h3>
            </div>
            <div class="card-body">
                <?php foreach($penjualanperbulan as $d){
					$bulan[] = $d->bulan;
					$ppb[] = $d->penjualanperbulan;
				}
				?>
                <div id="chart-penjualan-tahunan"></div>
            </div>
        </div>
    </div>
</div>

<script>
      // @formatter:off
      document.addEventListener("DOMContentLoaded", function () {
      	window.ApexCharts && (new ApexCharts(document.getElementById('chart-barang-harian'), {
      		chart: {
      			type: "bar",
      			fontFamily: 'inherit',
      			height: 320,
      			parentHeightOffset: 0,
      			toolbar: {
      				show: false,
      			},
      			animations: {
      				enabled: false
      			},
      		},
      		plotOptions: {
      			bar: {
      				columnWidth: '50%',
      			}
      		},
      		dataLabels: {
      			enabled: false,
      		},
      		fill: {
      			opacity: 1,
      		},
      		series: [{
      			name: "Penjualan",
      			data: <?php echo json_encode($total1)?>
      		}],
      		grid: {
      			padding: {
      				top: -20,
      				right: 0,
      				left: -4,
      				bottom: -4
      			},
      			strokeDashArray: 4,
      		},
      		xaxis: {
      			labels: {
      				padding: 0
      			},
      			tooltip: {
      				enabled: false
      			},
      			axisBorder: {
      				show: false,
      			},
      			categories: <?php echo json_encode($idbarang1)?>,
      		},
      		yaxis: {
      			labels: {
      				padding: 4
      			},
      		},
      		colors: ["#A12559"],
      		legend: {
      			show: false,
      		},
      	})).render();
      });
      // @formatter:on
</script>
<script>
      // @formatter:off
      document.addEventListener("DOMContentLoaded", function () {
      	window.ApexCharts && (new ApexCharts(document.getElementById('chart-barang-bulanan'), {
      		chart: {
      			type: "bar",
      			fontFamily: 'inherit',
      			height: 320,
      			parentHeightOffset: 0,
      			toolbar: {
      				show: false,
      			},
      			animations: {
      				enabled: false
      			},
      		},
      		plotOptions: {
      			bar: {
      				columnWidth: '50%',
      			}
      		},
      		dataLabels: {
      			enabled: false,
      		},
      		fill: {
      			opacity: 1,
      		},
      		series: [{
      			name: "Penjualan",
      			data: <?php echo json_encode($total2)?>
      		}],
      		grid: {
      			padding: {
      				top: -20,
      				right: 0,
      				left: -4,
      				bottom: -4
      			},
      			strokeDashArray: 4,
      		},
      		xaxis: {
      			labels: {
      				padding: 0
      			},
      			tooltip: {
      				enabled: false
      			},
      			axisBorder: {
      				show: false,
      			},
      			categories: <?php echo json_encode($idbarang2)?>,
      		},
      		yaxis: {
      			labels: {
      				padding: 4
      			},
      		},
      		colors: ["#A12559"],
      		legend: {
      			show: false,
      		},
      	})).render();
      });
      // @formatter:on
</script>
<script>
      // @formatter:off
      document.addEventListener("DOMContentLoaded", function () {
      	window.ApexCharts && (new ApexCharts(document.getElementById('chart-barang-tahunan'), {
      		chart: {
      			type: "bar",
      			fontFamily: 'inherit',
      			height: 320,
      			parentHeightOffset: 0,
      			toolbar: {
      				show: false,
      			},
      			animations: {
      				enabled: false
      			},
      		},
      		plotOptions: {
      			bar: {
      				columnWidth: '50%',
      			}
      		},
      		dataLabels: {
      			enabled: false,
      		},
      		fill: {
      			opacity: 1,
      		},
      		series: [{
      			name: "Penjualan",
      			data: <?php echo json_encode($total3)?>
      		}],
      		grid: {
      			padding: {
      				top: -20,
      				right: 0,
      				left: -4,
      				bottom: -4
      			},
      			strokeDashArray: 4,
      		},
      		xaxis: {
      			labels: {
      				padding: 0
      			},
      			tooltip: {
      				enabled: false
      			},
      			axisBorder: {
      				show: false,
      			},
      			categories: <?php echo json_encode($idbarang3)?>,
      		},
      		yaxis: {
      			labels: {
      				padding: 4
      			},
      		},
      		colors: ["#A12559"],
      		legend: {
      			show: false,
      		},
      	})).render();
      });
      // @formatter:on
</script>
<script>
      // @formatter:off
      document.addEventListener("DOMContentLoaded", function () {
      	window.ApexCharts && (new ApexCharts(document.getElementById('chart-penjualan-bulanan'), {
      		chart: {
      			type: "line",
      			fontFamily: 'inherit',
      			height: 240,
      			parentHeightOffset: 0,
      			toolbar: {
      				show: false,
      			},
      			animations: {
      				enabled: false
      			},
      		},
      		fill: {
      			opacity: 1,
      		},
      		stroke: {
      			width: 2,
      			lineCap: "round",
      			curve: "straight",
      		},
      		series: [{
      			name: "Penjualan",
      			data: <?php echo json_encode($pph)?>
      		}],
      		grid: {
      			padding: {
      				top: -20,
      				right: 0,
      				left: -4,
      				bottom: -4
      			},
      			strokeDashArray: 4,
      		},
      		xaxis: {
      			labels: {
      				padding: 0
      			},
      			tooltip: {
      				enabled: false
      			},
      			axisBorder: {
      				show: false,
      			},
      			categories: <?php echo json_encode($hari);?>,
      		},
      		yaxis: {
      			labels: {
      				padding: 4
      			},
      		},
      		colors: ["#A12559"],
      		legend: {
      			show: false,
      		},
      	})).render();
      });
      // @formatter:on
</script>
<script>
      // @formatter:off
      document.addEventListener("DOMContentLoaded", function () {
      	window.ApexCharts && (new ApexCharts(document.getElementById('chart-penjualan-tahunan'), {
      		chart: {
      			type: "line",
      			fontFamily: 'inherit',
      			height: 240,
      			parentHeightOffset: 0,
      			toolbar: {
      				show: false,
      			},
      			animations: {
      				enabled: false
      			},
      		},
      		fill: {
      			opacity: 1,
      		},
      		stroke: {
      			width: 2,
      			lineCap: "round",
      			curve: "straight",
      		},
      		series: [{
      			name: "Penjualan",
      			data: <?php echo json_encode($ppb)?>
      		}],
      		grid: {
      			padding: {
      				top: -20,
      				right: 0,
      				left: -4,
      				bottom: -4
      			},
      			strokeDashArray: 4,
      		},
      		xaxis: {
      			labels: {
      				padding: 0
      			},
      			tooltip: {
      				enabled: false
      			},
      			axisBorder: {
      				show: false,
      			},
      			categories: <?php echo json_encode($bulan);?>,
      		},
      		yaxis: {
      			labels: {
      				padding: 4
      			},
      		},
      		colors: ["#A12559"],
      		legend: {
      			show: false,
      		},
      	})).render();
      });
      // @formatter:on
</script>