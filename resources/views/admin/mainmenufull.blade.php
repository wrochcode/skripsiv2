<x-app-admin title="Dashboard">
    <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Menu</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Food Menu Bundling</li>
                    </ol>
                    {{-- card --}}
                    @if (session()->has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i> Data Rakomendasi Menggunakan SAW
                        </div>
                        <div class="card-body">
                            <div class="row ms-1 mb-3">
                                {{ $metode }} Metode<br>Criteria: 
                                @foreach ($criterias as $index =>  $criteria)
                                    {{ $criteria }}
                                @endforeach
                            </div>
                            @if (isset($recs))
                            <div class="row mb-3">
                                <?php $number = 1; ?>
                                @for ($i= 0 ;$i<$trec;$i++)
                                    <div class="col-md-3 mt-2">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input value="<?php echo $recs[$i]['name'];?>" name="name" class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" autocomplete="off" />
                                            <label for="inputFirstName">Rank {{ $number }}</label>
                                        </div>
                                        <?php $number++;?>
                                    </div>
                                @endfor
    
                                <div class="col-md-1">
                                    <div class="form-floating mb-3 ">
                                        <a href="{{ route('foodmenu.full') }}"class="btn btn-primary mt-2" type="submit">Lihat Semua</a>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                    <h1 class="mt-4">Item Menu</h1>
                    {{-- saw --}}
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i> Data Event
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Menu</th>
                                        <th>Kalori</th>
                                        <th>Karbohidrat</th>
                                        <th>Lemak</th>
                                        <th>Protein</th>
                                        <th>Hasil SAW</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Menu</th>
                                        <th>Kalori</th>
                                        <th>Karbohidrat</th>
                                        <th>Lemak</th>
                                        <th>Protein</th>
                                        <th>Hasil SAW</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php $no =1 ;?>
                                    @for ($i = 0 ; $i<$trec ; $i++ )
                                        
                                        <tr>
                                        <td>{{ $no }}</td>
                                        <?php $no++ ;?>
                                        <td><?php echo $recs[$i]['name'];?></td>
                                        <td><?php echo $recs[$i]['calorie'];?></td>
                                        <td><?php echo $recs[$i]['carb'];?></td>
                                        <td><?php echo $recs[$i]['fat'];?></td>
                                        <td><?php echo $recs[$i]['protein'];?></td>
                                        <td><?php echo $recs[$i]['nilai'];?></td>
                                        </tr>
                                    @endfor
                                        
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