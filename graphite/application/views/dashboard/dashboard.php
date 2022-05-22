<h2 class="page-title" style="color : #F1BBD5;">
    Dashboard
</h2>
<div class="alert alert-success" role="alert">
  <!-- SVG icon code with class="mr-1" -->
  <svg xmlns="http://www.w3.org/2000/svg" class="icon mr-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="7" r="4" /><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /></svg>
  Selamat datang, <b><?php echo $this->session->userdata('nama_lengkap');?></b> sebagai <b><?php echo ucwords($this->session->userdata('level'));?></b>.
</div>
<div class="row">
    <div class="col-md-6">
        <div class="card" >
            <div class="card-body">
                <div class="row g-2 align-items-center">
                    <div class="col-auto">
                        <a href="."><img src="<?php echo base_url();?>assets/dist/img/money.png" height="75" alt="Dollar"></a>
                    </div>
                    <div class="col">
                        <h4 class="card-title m-0">Pendapatan hari ini</a></h4>
                        <div class="text-muted">Rp. <?php echo number_format($saleshariini['dailysales'], 0, '', '.');?>,-</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card" >
            <div class="card-body">
                <div class="row g-2 align-items-center">
                    <div class="col-auto">
                        <a href="."><img src="<?php echo base_url();?>assets/dist/img/money.png" height="75" alt="Dollar"></a>
                    </div>
                    <div class="col">
                        <h4 class="card-title m-0">Pendapatan Bulan ini</a></h4>
                        <div class="text-muted">Rp. <?php echo number_format($salesbulanini['monthlysales'], 0, '', '.');?>,-</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-xl">
        <div class="card" >
            <div class="card-header">
                <h3 class="card-title">Penjualan tiap id produk bulan ini</h3>
            </div>
            <div class="card-body">
				<?php foreach($salesoverview as $d){
					$idbarang[] = $d->id_barang;
					$total[] = $d->totalpnj;
				}
				?>
                <div id="chart-barang"></div>
            </div>
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-xl">
        <div class="card" >
            <div class="card-header">
                <h3 class="card-title">Penjualan per bulan tahun ini</h3>
            </div>
            <div class="card-body">
				<?php foreach($penjualanperbulan as $d){
					$bulan[] = $d->bulan;
					$ppb[] = $d->penjualanperbulan;
				}
				?>
                <div id="chart-penjualan"></div>
            </div>
        </div>
    </div>
</div>
<script>
      // @formatter:off
      document.addEventListener("DOMContentLoaded", function () {
      	window.ApexCharts && (new ApexCharts(document.getElementById('chart-barang'), {
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
      			data: <?php echo json_encode($total)?>
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
      			categories: <?php echo json_encode($idbarang)?>,
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
      	window.ApexCharts && (new ApexCharts(document.getElementById('chart-penjualan'), {
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
      			data: <?php echo json_encode($ppb);?>
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