<div class="row clearfix">
  <!-- Suhu -->
  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
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
  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
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

  <!-- Ppm -->
  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
    <div class="card">
      <div class="header">
        <h2>NUTRISI</h2>
      </div>
      <div class="body">
        <div id="chart-nutrisi" style="height: 250px;"></div>
      </div>
    </div>
  </div>
  <!-- #END# Ppm -->

  <!-- Ketinggian -->
  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
    <div class="card">
      <div class="header">
        <h2>KETINGGIAN</h2>
      </div>
      <div class="body">
        <div id="chart-ketinggian" style="height: 250px;"></div>
      </div>
    </div>
  </div>
  <!-- #END# Ketinggian -->
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
                "caption": "Data pH",
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
        renderAt: 'chart-nutrisi',
        width: '100%',
        height: '100%',
        dataFormat: 'json',
        dataSource: {
            "chart": {
                "caption": "Data Nutrisi (PPM)",
                "lowerlimit": "0",
                "upperlimit": "1500",
                "showvalue": "1",
                "theme": "fusion",
                "showtooltip": "0"
            },
            "colorRange": {
                "color": [{
                  "minvalue": "0",
                  "maxvalue": "500",
                  "code": "#62B58F"
                }, {
                    "minValue": "500",
                    "maxValue": "1000",
                    "code": "#FFC533"
                }, {
                    "minValue": "1000",
                    "maxValue": "1500",
                    "code": "#F2726F"
                }]
            },
            "dials": {
                "dial": [{
                    "value": "<?php echo $myData['nutrisi']?>"
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
        renderAt: 'chart-ketinggian',
        width: '100%',
        height: '100%',
        dataFormat: 'json',
        dataSource: {
            "chart": {
                "caption": "Data Ketinggian Air (CM)",
                "lowerlimit": "0",
                "upperlimit": "50",
                "showvalue": "1",
                "theme": "fusion",
                "showtooltip": "0"
            },
            "colorRange": {
                "color": [{
                  "minvalue": "0",
                  "maxvalue": "20",
                  "code": "#F2726F"
                }, {
                    "minValue": "20",
                    "maxValue": "40",
                    "code": "#FFC533"
                }, {
                    "minValue": "40",
                    "maxValue": "50",
                    "code": "#62B58F"
                }]
            },
            "dials": {
                "dial": [{
                    "value": "<?php echo $myData['kedalaman']?>"
                }]
            }
        }
    }
    );
      chartObj.render();
    });
  </script>






            