<?php

use app\models\Bot;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Pjax;
use frontend\assets\AnaliticAsset;

/** @var yii\web\View $this */
/** @var app\models\BotLeads $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */
AnaliticAsset::register($this);
$this->title = 'Bots';
$this->params['breadcrumbs'][] = $this->title;
//echo '<pre>';
//var_dump($row);
$YEAR = [];
$TOTAL = [];

foreach ( $row as $item) {
    $YEAR[] = $item['month'];
}

foreach ( $row as $item) {
    $TOTAL[] = $item['total'];
}
$ye = implode(',', $YEAR);
$re = implode(',', $TOTAL);
$content = "<p>This is a sample text where {username}</p>";
echo preg_replace('/{(.*?)}/', 'Alexey', $content);

?>

<div class="row">
    <div class="col-md-12">
    <div class="fgr"><?php echo $re ?></div>
        <h1><?= Html::encode($this->title) ?></h1>

        <p>
            <?= Html::a('Create Bot', ['create'], ['class' => 'btn btn-success']) ?>
        </p>


        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Apex</a></li>
                                <li class="breadcrumb-item active">Line Charts</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Line Charts</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mb-4">Simple line chart</h4>
                            <div dir="ltr">
                                <div id="line-chart" class="apex-charts" data-colors="#ffbc00"></div>
                            </div>
                        </div>
                        <!-- end card body-->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col-->

                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mb-4">Line with Data Labels</h4>
                            <div dir="ltr">
                                <div id="line-chart-datalabel" class="apex-charts" data-colors="#6c757d,#727cf5"></div>
                            </div>
                        </div>
                        <!-- end card body-->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col-->
            </div>
            <!-- end row-->

            <div class="row">
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mb-4">Zoomable Timeseries</h4>
                            <div dir="ltr">
                                <div id="line-chart-zoomable" class="apex-charts" data-colors="#fa5c7c"></div>
                            </div>
                        </div>
                        <!-- end card body-->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col-->

                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mb-4">Line Chart with Annotations</h4>
                            <div dir="ltr">
                                <div id="line-chart-annotations" class="apex-charts" data-colors="#39afd1"></div>
                            </div>
                        </div>
                        <!-- end card body-->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col-->
            </div>
            <!-- end row-->

            <div class="row">
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mb-4">Syncing charts</h4>
                            <div id="line-chart-syncing2" data-colors="#727cf5"></div>
                            <div dir="ltr">
                                <div id="line-chart-syncing" class="apex-charts" data-colors="#6c757d"></div>
                            </div>
                        </div>
                        <!-- end card body-->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col-->

                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mb-4">Gradient Line Chart</h4>
                            <div dir="ltr">
                                <div id="line-chart-gradient" class="apex-charts"></div>
                            </div>
                        </div>
                        <!-- end card body-->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col-->
            </div>
            <!-- end row-->

            <div class="row">
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mb-4">Missing / Null values</h4>
                            <div dir="ltr">
                                <div id="line-chart-missing" class="apex-charts" data-colors="#ffbc00,#0acf97,#39afd1"></div>
                            </div>
                        </div>
                        <!-- end card body-->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col-->

                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mb-4">Dashed Line Chart</h4>
                            <div dir="ltr">
                                <div id="line-chart-dashed" class="apex-charts" data-colors="#6c757d,#0acf97,#39afd1"></div>
                            </div>
                        </div>
                        <!-- end card body-->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col-->
            </div>
            <!-- end row-->

            <div class="row">
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mb-3">Stepline Chart</h4>
                            <div dir="ltr">
                                <div id="line-chart-stepline" class="apex-charts" data-colors="#0acf97"></div>
                            </div>
                        </div>
                        <!-- end card body-->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col-->

                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Brush Chart</h4>
                            <div dir="ltr">
                                <div id="chart-line2" class="apex-charts" data-colors="#727cf5"></div>
                                <div id="chart-line" class="apex-charts" data-colors="#39afd1"></div>
                            </div>
                        </div>
                        <!-- end card body-->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col-->
            </div>
            <!-- end row-->

            <div class="row">
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Realtime Chart</h4>
                            <div dir="ltr">
                                <div id="line-chart-realtime" class="apex-charts" data-colors="#39afd1"></div>
                            </div>
                        </div>
                        <!-- end card body-->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col-->
            </div>
            <!-- end row-->

        </div> <!-- container -->
    </div>
    <div class="col-6"><div id="chart2"></div></div>
</div>


<?php

$js = <<<JS
var tjtyj = [$re];
var year = [$ye];
console.log(tjtyj);
var options = {
    
          series: [{
          name: 'Подписались',
          data: [31, 40, 28, 51, 42, 109, 100]
        }, {
          name: 'Отписались',
          data: tjtyj
        }],
          chart: {
          height: 350,
          type: 'line'
        },
        dataLabels: {
          enabled: true
        },
        stroke: {
          curve: 'smooth'
        },
        xaxis: {
          type: 'datetime',
          categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
        },
        tooltip: {
          x: {
            format: 'dd/MM/yy HH:mm'
          },
        },
        chart: {
      toolbar: {
        show: true,
        offsetX: 0,
        offsetY: 0,
        tools: {
          download: true,
          selection: true,
          zoom: true,
          zoomin: true,
          zoomout: true,
          pan: true,
          reset: true | '<img src="/static/icons/reset.png" width="20">',
          customIcons: []
        },
        export: {
          csv: {
            filename: undefined,
            columnDelimiter: ',',
            headerCategory: 'category',
            headerValue: 'value',
            dateFormatter(timestamp) {
              return new Date(timestamp).toDateString()
            }
          },
          svg: {
            filename: undefined,
          },
          png: {
            filename: undefined,
          }
        },
        autoSelected: 'zoom' 
      },
  }
        };

        var chart = new ApexCharts(document.querySelector("#chart2"), options);
        chart.render();
      

JS;
$this->registerJs($js);
?>

