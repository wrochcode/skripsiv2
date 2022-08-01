<x-app-admin title="Dashboard">
    <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                    {{-- card --}}
                    <div class="row">
                        <div class="col-xl-12 col-md-6">
                            <div class="card bg-info justify-content-md-center text-white mb-4">
                                <div class="card-header text-center">Event on Going</div>
                                <div class="card-body text-center">{{ $value }}</div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="row">
                        <div class="col-xl-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-area me-1"></i> Area Chart Example
                                </div>
                                <div class="card-body">
                                    <canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i> Visitor Data
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Jumlah Login</th>
                                        <th>Hari</th>
                                        <th>Total Pengunjung</th>
                                        <th>Jml Pelajar</th>
                                        <th>Jml Pengunjung Umum</th>
                                        <th>Total Pendapatan</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Penanggung Jawab</th>
                                        <th>Hari</th>
                                        <th>Total Pengunjung</th>
                                        <th>Jml Pelajar</th>
                                        <th>Jml Pengunjung Umum</th>
                                        <th>Total Pendapatan</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php $no =1 ;?>
                                    @foreach ($visits as $index => $visit)
                                        <tr>
                                            <td>{{ $no }}</td>
                                            <?php $no++ ;?>
                                            <td>{{ $visit->responsibility }}</td>
                                            <td>{{ $visit->day }}</td>
                                            <td>{{ $visit->visitor }}</td>
                                            <td>{{ $visit->student }}</td>
                                            <td>{{ $visit->reguler }}</td>
                                            <td>Rp. <?php echo number_format($visit->money,2,',','.') ?></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2021</div>
                        <div>
                            <a href="#">Privacy Policy</a> &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</x-app-admin>