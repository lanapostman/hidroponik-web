<div class="row clearfix">
  <!-- Suhu -->
  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
    <div class="card">
      <div class="header">
        <h2>SUHU</h2>
      </div>
      <div class="body">
        <div id="chart-container1" style="height: 250px;"></div>
      </div>
    </div>
  </div>
  <!-- #END# Suhu -->

  <!-- Ph -->
  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
    <div class="card">
      <div class="header">
        <h2>PH</h2>
      </div>
      <div class="body">
        <div id="chart-container" style="height: 250px;"></div>
      </div>
    </div>
  </div>
  <!-- #END# Ph -->

  <!-- Kekeruhan -->
  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
    <div class="card">
      <div class="header">
        <h2>KEKERUHAN</h2>
      </div>
      <div class="body">
        <div id="chart-kekeruhan" style="height: 250px;"></div>
      </div>
    </div>
  </div>
  <!-- #END# Kekeruhan -->
</div>

<div class="row clearfix">
  <?php
    if ($myData['kekeruhan'] <= 50) {
      echo '<h2 style="margin-left: 15px">Status: Baik</h2>';
    }
    else if ($myData['kekeruhan'] >= 51) {
      echo '<h2 style="margin-left: 15px">Status: Cukup Baik</h2>';
    }
    else {
      echo '<h2 style="margin-left: 15px">Status: Tidak Baik</h2>';
    }
  ?>
</div>

<script type="text/javascript">
    dataSource = {
      chart: {
        caption: "Data Suhu",
        lowerlimit: "0",
        upperlimit: "40",
        showvalue: "1",
        theme: "fusion",
        showtooltip: "0"
      },
      colorrange: {
        color: [
          {
            minvalue: "0",
            maxvalue: "10",
            code: "#F2726F"
          },
          {
            minvalue: "10",
            maxvalue: "20",
            code: "#FFC533"
          },
          {
            minvalue: "20",
            maxvalue: "30",
            code: "#62B58F"
          },
          {
            minvalue: "30",
            maxvalue: "40",
            code: "#FFC533"
          }
        ]
      },
      dials: {
        dial: [
          {
            value: '<?php echo $myData['suhu']?>'
          }
        ]
      }
    };

    FusionCharts.ready(function() {
      var myChart = new FusionCharts({
        type: "angulargauge",
        renderAt: "chart-container1",
        width: "100%",
        height: "100%",
        dataFormat: "json",
        dataSource
      }).render();
    });

</script>

<script type="text/javascript">
    FusionCharts.ready(function(){
      var chartObj = new FusionCharts({
        type: 'angulargauge',
        renderAt: 'chart-container',
        width: '100%',
        height: '100%',
        dataFormat: 'json',
        dataSource: {
            "chart": {
                "caption": "Data Ph",
                "lowerlimit": "0",
                "upperlimit": "15",
                "showvalue": "1",
                "theme": "fusion",
                "showtooltip": "0"
            },
            "colorRange": {
                "color": [{
                  "minvalue": "0",
                  "maxvalue": "5",
                  "code": "#F2726F"
                }, {
                    "minValue": "5",
                    "maxValue": "10",
                    "code": "#62B58F"
                }, {
                    "minValue": "10",
                    "maxValue": "15",
                    "code": "#FFC533"
                }]
            },
            "dials": {
                "dial": [{
                    "value": "<?php echo $myData['ph']?>"
                }]
            }
        }
    }
    );
      chartObj.render();
    });
  </script>

<script type="text/javascript">
    FusionCharts.ready(function(){
      var chartObj = new FusionCharts({
        type: 'angulargauge',
        renderAt: 'chart-kekeruhan',
        width: '100%',
        height: '100%',
        dataFormat: 'json',
        dataSource: {
            "chart": {
                "caption": "Data Kekeruhan",
                "lowerlimit": "0",
                "upperlimit": "160",
                "showvalue": "1",
                "theme": "fusion",
                "showtooltip": "0"
            },
            "colorRange": {
                "color": [{
                  "minvalue": "0",
                  "maxvalue": "80",
                  "code": "#F2726F"
                }, {
                    "minValue": "80",
                    "maxValue": "120",
                    "code": "#FFC533"
                }, {
                    "minValue": "120",
                    "maxValue": "160",
                    "code": "#62B58F"
                }]
            },
            "dials": {
                "dial": [{
                    "value": "<?php echo $myData['kekeruhan']?>"
                }]
            }
        }
    }
    );
      chartObj.render();
    });
  </script>






            