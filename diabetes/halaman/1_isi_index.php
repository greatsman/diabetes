<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Advanced form elements</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../tampilan/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../tampilan/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../tampilan/bower_components/Ionicons/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="../tampilan/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="../tampilan/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../tampilan/plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../tampilan/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="../tampilan/plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../tampilan/bower_components/select2/dist/css/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../tampilan/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../tampilan/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
              </head>

              <body class="hold-transition skin-yellow sidebar-mini">
              <div class="wrapper">
              <header class="main-header">
              <a href="#" class="logo">
              <span class="logo-mini"><b>D</b>NF</span>
              <span class="logo-lg"><b>DIABETES</b>NEFROTIK</span>
              </a>
              <nav class="navbar navbar-static-top" role="navigation">
              <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
              <span class="sr-only">Toggle navigation</span>
              </a>
              <div class="navbar-custom-menu">
              <ul class="nav navbar-nav">
              <li class="dropdown user user-menu">
              <a href="logout" class="dropdown-toggle">
              <img src="../tampilan/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Logout</span>
              </a>
              </li>
              </ul>
              </div>
              </nav>
              </header>
              <aside class="main-sidebar">
              <section class="sidebar">
              <div class="user-panel">
              <div class="pull-left image">
              <img src="../tampilan/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
              </div>
              <div class="pull-left info">
              <p><?= $_SESSION['nama'];?></p>
              <!-- Status -->
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
              </div>
              </div>

              <!-- Sidebar Menu -->
              <ul class="sidebar-menu" data-widget="tree">
              <li class="header">Daftar Menu</li>
              <!-- Optionally, you can add icons to the links -->
              <li class="treeview"><a href="#"><i class="fa fa-user"></i> <span>Menu Data Diri</span></a>
                <ul class="treeview-menu">
                <li class="active">
                  <a href="data">
                    <i class="fa fa-circle-o"></i>Data Diri
                  </a>
                </li>
                <li class="active">
                  <a href="edit&id<?= $_SESSION['pengguna'];?>">
                    <i class="fa fa-circle-o"></i> Edit data
                  </a>
                </li>
                </ul>
              </li>
              <li class="treeview"><a href="#"><i class="fa fa-medkit"></i> <span>Menu Makanan</span></a>
                <ul class="treeview-menu">
                <li class="active">
                  <a href="pilihmenu">
                    <i class="fa fa-circle-o"></i>Pilih Menu Makan
                  </a>
                </li>
                <li class="active">
                  <a href="riwayat">
                    <i class="fa fa-circle-o"></i>Riwayat Menu Makan
                  </a>
                </li>
                </ul>
              </li>
              <li><a href="#"><i class="fa fa-info-circle"></i> <span>Bantuan</span></a></li>
              </ul>
              <!-- /.sidebar-menu -->
              </section>
              <!-- /.sidebar -->
              </aside>

              <!-- Content Wrapper. Contains page content -->
              <div class="content-wrapper">
              <!-- Content Header (Page header) -->


              <!-- Main content -->
              <section class="content container-fluid">

              <?php include 'skrip/daftar_isi.php'; ?>

              </section>
              <!-- /.content -->
              </div>
              <!-- /.content-wrapper -->

              <!-- Main Footer -->
              <footer class="main-footer">
              <!-- To the right -->
              <div class="pull-right hidden-xs">
              Ahmad Fathoni
              </div>
              <!-- Default to the left -->
              <strong>Aplikasi Kalkulator Diabetes Nefrotik &copy; 2018 <a href="#">Tugas Akhir</a>.</strong> Universitas Muhammadiyah Surakarta
              </footer>
              </div>
              <!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../tampilan/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../tampilan/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="../tampilan/bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- InputMask -->
<script src="../tampilan/plugins/input-mask/jquery.inputmask.js"></script>
<script src="../tampilan/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="../tampilan/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="../tampilan/bower_components/moment/min/moment.min.js"></script>
<script src="../tampilan/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="../tampilan/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap color picker -->
<script src="../tampilan/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../tampilan/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll -->
<script src="../tampilan/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="../tampilan/plugins/iCheck/icheck.min.js"></script>
<!-- ChartJS -->
<script src="../tampilan/bower_components/chart.js/Chart.js"></script>
<!-- FastClick -->
<script src="../tampilan/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../tampilan/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../tampilan/dist/js/demo.js"></script>
<!-- Page script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
</script>
<script>
  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */
    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieChart       = new Chart(pieChartCanvas)
    var PieData        = [
      {
        value    : <?= $_SESSION['gprotein'];?>,
        color    : '#00a65a',
        highlight: '#00a65a',
        label    : 'Protein (g)'
      },
      {
        value    : <?= $_SESSION['glemak'];?>,
        color    : '#00c0ef',
        highlight: '#00c0ef',
        label    : 'Lemak (g)'
      },
      {
        value    : <?= $_SESSION['gkarbohidrat'];?>,
        color    : '#00c0ef',
        highlight: '#00c0ef',
        label    : 'Karbohidrat (g)'
      }
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
</body>
</html>
