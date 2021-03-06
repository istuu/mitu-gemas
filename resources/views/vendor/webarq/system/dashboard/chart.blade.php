<div class="row">
    <div class="col-lg-6">
    <!-- BAR CHART -->
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Unique Code</h3>
            </div>
            <div class="box-body">
                <div class="chart">
                    <canvas id="barChart" style="height:233px"></canvas>
                </div>
            </div>
          <!-- /.box-body -->
        </div>
    <!-- /.box -->
    </div>

    <div class="col-lg-6">
        <div class="box box-danger">
          <div class="box-header with-border">
            <h3 class="box-title">Access Via</h3>
          </div>
          <div class="box-body">
            <canvas id="pieChart" style="height:250px"></canvas>
          </div>
          <!-- /.box-body -->
        </div>
    </div>
</div>
@push('view-script')
<script src="{{URL::asset('vendor/webarq/admin-lte/plugins/chartjs/Chart.min.js')}}"></script>
<script>
  $(function () {
    //-------------
    //- BAR CHART -
    //-------------
    var voucherData = {
      labels  : ['Unique Code Data'],
      datasets: [
        {
          label               : 'Available',
          fillColor           : 'rgba(25, 181, 254,1)',
          strokeColor         : 'rgba(25, 181, 254,1)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(25, 181, 254,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(25, 181, 254,1)',
          data                : ['{{ $available_voucher }}']
        },
        {
          label               : 'Valid',
          fillColor           : 'rgba(210, 214, 222, 1)',
          strokeColor         : 'rgba(210, 214, 222, 1)',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : ['{{ $used_voucher }}']
        },
        {
          label               : 'Invalid',
          fillColor           : 'rgba(239, 72, 54, 1)',
          strokeColor         : 'rgba(239, 72, 54, 1)',
          pointColor          : 'rgba(239, 72, 54, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(239, 72, 54, 1)',
          data                : ['{{ $invalid_voucher }}']
        },
        {
          label               : 'Duplicate',
          fillColor           : 'rgba(247, 202, 24, 1)',
          strokeColor         : 'rgba(247, 202, 24, 1)',
          pointColor          : 'rgba(247, 202, 24, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(247, 202, 24, 1)',
          data                : ['{{ $duplicate_voucher }}']
        }

      ]
    }

    var barChartCanvas                   = $('#barChart').get(0).getContext('2d')
    var barChart                         = new Chart(barChartCanvas)
    var barChartData                     = voucherData
    barChartData.datasets[1].fillColor   = '#00a65a'
    barChartData.datasets[1].strokeColor = '#00a65a'
    barChartData.datasets[1].pointColor  = '#00a65a'
    var barChartOptions                  = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero        : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : true,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - If there is a stroke on each bar
      barShowStroke           : true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth          : 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing         : 5,
      //Number - Spacing between data sets within X values
      barDatasetSpacing       : 1,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to make the chart responsive
      responsive              : true,
      maintainAspectRatio     : true
    }

    barChartOptions.datasetFill = false
    barChart.Bar(barChartData, barChartOptions)

    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieChart       = new Chart(pieChartCanvas)
    var PieData        = [
      {
        value    : '{{ $desktop }}',
        color    : '#f56954',
        highlight: '#f56954',
        label    : 'Desktop'
      },
      {
        value    : '{{ $tablet }}',
        color    : '#00a65a',
        highlight: '#00a65a',
        label    : 'Tablet'
      },
      {
        value    : '{{ $mobile }}',
        color    : '#f39c12',
        highlight: '#f39c12',
        label    : 'Mobile/Smartphone'
      },
    ]
    var pieOptions     = {
      //Boolean - Whether we should show a stroke on each segment
      segmentShowStroke    : true,
      //String - The colour of each segment stroke
      segmentStrokeColor   : '#fff',
      //Number - The width of each segment stroke
      segmentStrokeWidth   : 2,
      //Number - The percentage of the chart that we cut out of the middle
      percentageInnerCutout: 50, // This is 0 for Pie charts
      //Number - Amount of animation steps
      animationSteps       : 100,
      //String - Animation easing effect
      animationEasing      : 'easeOutBounce',
      //Boolean - Whether we animate the rotation of the Doughnut
      animateRotate        : true,
      //Boolean - Whether we animate scaling the Doughnut from the centre
      animateScale         : false,
      //Boolean - whether to make the chart responsive to window resizing
      responsive           : true,
      // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio  : true,
      //String - A legend template
      legendTemplate       : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<segments.length; i++){%><li><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>'
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    pieChart.Doughnut(PieData, pieOptions)
  })
</script>
@endpush
