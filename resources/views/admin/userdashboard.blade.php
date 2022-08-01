<x-app-admin title="Dashboard">
    <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard Member</li>
                    </ol>
                    <div class="row">
                        <div class="col-xl-12 col-md-6">
                            <div class="card bg-info justify-content-md-center text-white mb-4">
                                <div class="card-header text-center">Event on Going</div>
                                <div class="card-body text-center">{{ $value }}</div>
                            </div>
                        </div>
                    </div>
                    <ol class="breadcrumb mb-4 mt-4">
                        <li class="breadcrumb-item">Kalkulator Sehat </li>
                    </ol>
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-info justify-content-md-center text-dark mb-4">
                                <div class="card-header text-center">Kalkulator BMI</div>
                                <div class="card-body text-center">Tubuh Anda tergolong : {{ $kalkulator['descbmi'] }}</div>
                                <div class="card-body text-center">BMI : {{ $kalkulator['bmi'] }}Kg/m<sup>2<sup></div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-success justify-content-md-center text-white mb-4">
                                <div class="card-header text-center">Kalkulator RMR</div>
                                <div class="card-body text-center">Kebutuhan kalori saat istirahat : <br>{{ $kalkulator['rmr'] }}Kcal </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-warning justify-content-md-center text-dark mb-4">
                                <div class="card-header text-center">Kalkulator EER</div>
                                <div class="card-body text-center">Kebutuhan kalori saat<br> maintenance : <br>{{ $kalkulator['eer'] }}Kcal </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary justify-content-md-center text-white mb-4">
                                <div class="card-header text-center">TDEE</div>
                                <div class="card-body text-center">Jumlah kalori yang anda bakar setiap harinya : <br>{{ $kalkulator['tdee'] }}Kcal </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-info justify-content-md-center text-white mb-4">
                                <div class="card-header text-center">Kalkulator Serat</div>
                                <div class="card-body text-center">Estimasi berapa gram serat yang perlu anda konsumsi : <br>{{ $kalkulator['serat'] }} gram</div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-info justify-content-md-center text-white mb-4">
                                <div class="card-header text-center">Kalkulator Protein</div>
                                <div class="card-body text-center">Estimasi berapa gram protein yang perlu anda konsumsi : <br>{{ $kalkulator['proteingram'] }} <br> {{ $kalkulator['protein'] }}</div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-info justify-content-md-center text-white mb-4">
                                <div class="card-header text-center">Kalkulator Karbohidrat</div>
                                <div class="card-body text-center">Estimasi berapa gram karbohidrat yang perlu anda konsumsi : <br>{{ $kalkulator['carbgram'] }} <br> {{ $kalkulator['carb'] }}</div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-info justify-content-md-center text-white mb-4">
                                <div class="card-header text-center">Kalkulator lemak</div>
                                <div class="card-body text-center">Estimasi berapa gram lemak yang perlu anda konsumsi : <br>{{ $kalkulator['fatgram'] }} <br> {{ $kalkulator['fat'] }}</div>
                            </div>
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