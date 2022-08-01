<x-app-admin title="About">
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">About Admin</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Admin About Control</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i> Control
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-md-2">
                                <div class="form-floating mb-3 mb-md-0">
                                    <label for="inputFirstName">{{ $about->name }}</label>
                                </div>
                            </div>
                            <div class="col-md-4 mt-2">
                                <input class="form-control" name="value" value="{{ $about->value }}" id="inputLastName" type="text" placeholder="Enter your last name" />
                            </div>
                            <div class="col-md-1 mt-2">
                                <div class="form-floating ">
                                    <div class="d-grid"><a href="{{ route('aboutadmin.edit', $about->id) }}" class="btn btn-primary btn-block">Update</a></div>
                                </div>
                            </div>
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
</x-app-admin>