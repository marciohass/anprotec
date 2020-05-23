
@extends('admin.master.header')

<body class="hold-transition sidebar-mini">
<div class="wrapper">

  @extends('admin.master.side-bar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-8">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>{{$count_inscritos}}</h3>

                  <p>Total de inscritos</p>
                </div>
                <div class="icon">
                  <i class="icon ion-android-contacts"></i>
                </div>
                <a href="{{ route('admin.lista-inscritos') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-8">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>{{$count_associados}}</h3>

                  <p>Total de associados</p>
                </div>
                <div class="icon">
                  <i class="icon ion-thumbsup"></i>
                </div>
                <a href="{{ route('admin.lista-associados') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-8">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3>{{$count_nao_associados}}</h3>

                  <p>Total de não associados</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="{{ route('admin.lista-nao-associados') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
        </div>
        <div class="row">
            <div class="col-lg-12">
            <div class="card">
                <div class="card-header ui-sortable-handle" style="cursor: move;">
                  <h3 class="card-title">
                    <i class="fas fa-chart-pie mr-1"></i>
                    Inscrições
                  </h3>
                  <div class="card-tools">
                    <ul class="nav nav-pills ml-auto">
                      <li class="nav-item">
                        <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Inscritos</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#sales-chart" data-toggle="tab">Associados</a>
                      </li>
                    </ul>
                  </div>
                </div><!-- /.card-header -->
                <div class="card-body">
                  <div class="tab-content p-0">
                    <!-- Morris chart - Sales -->
                    <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                        <canvas id="bar-chart" width="800" height="250"></canvas>
                    </div>
                    <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                        <canvas id="bar-chart2" width="800" height="250"></canvas>
                    </div>
                  </div>
                </div><!-- /.card-body -->
              </div>
            </div>
        </div>

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anprotec
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->
<!-- ChartJS -->
<script src="../../../chart.js/Chart.min.js"></script>
<!-- jQuery -->
<script src="../../../jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../../bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../../dist/js/adminlte.min.js"></script>
<script>
    // Bar chart
    var firstBarChart = new Chart(document.getElementById("bar-chart"), {
        type: 'bar',
        data: {
        labels: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"],
        datasets: [
            {
            label: "Inscritos no UF",
            backgroundColor: ["#6610f2", "#6610f2","#6610f2","#6610f2","#6610f2","#6610f2", "#6610f2","#6610f2","#6610f2","#6610f2","#6610f2", "#6610f2"],
            data: [200,300,23,210,23,44,120,800,90,987,89,99]
            }
        ]
        },
        options: {
        legend: { display: false },
        title: {
            display: true,
            text: 'Inscrições por Estado'
        }
        }
    });


    var myBarChart = new Chart(document.getElementById("bar-chart2"), {
        type: 'bar',
        data: {
        labels: [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,18,19,20,21,22,23,24,25,26,27,28,29,30,31],
        datasets: [
            {
            label: "Vendas no mês de Maio",
            backgroundColor: ['#6610f2','#6610f2','#6610f2','#6610f2','#6610f2','#6610f2','#6610f2','#6610f2','#6610f2','#6610f2','#6610f2','#6610f2','#6610f2','#6610f2','#6610f2','#6610f2','#6610f2','#6610f2','#6610f2','#6610f2','#6610f2','#6610f2','#6610f2','#6610f2','#6610f2','#6610f2','#6610f2','#6610f2','#6610f2','#6610f2','#6610f2'],
            data: [21,32,22,24,23,45,56,34,23,44,34,22,12,45,67,78,78,34,23,56,234,45,45,23,67,66,44,22,66,44,33]
            }
        ]
        },
        options: {
        legend: { display: false },
        title: {
            display: true,
            text: 'Vendas no mês 03'
        }
        }
    });
</script>
</body>
</html>
