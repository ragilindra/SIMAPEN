@extends('layout.app')

@section('title', 'Halaman Barista')

@section('content')

<main>
    <div class="container-fluid">
    <h5 class="mt-4 mb-5">Barista</h5>
    <!-- tabel alat -->
    <div class="card mb-4">
        <div class="row">
        <div class="col"><h5 class="mt-4 ml-3">Data Barista</h5></div>
        <div class="col text-right">
            <button type="button" class="btn btn-sm btn-primary mt-4 mr-4"><i class="fas fa-plus"></i> Tambah Barista Baru</button>
        </div>
        </div>

        <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                <th>NO</th>
                <th>NAMA BARISTA</th>
                <th>GAJI</th>
                <th>SHIFT</th>
                <th>OPSI</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                <td>1</td>
                <td>Gidion Aldi Tarigan</td>
                <td>
                    <div class="row">
                    <div class="col">Rp. 2.000.000</div>
                    <div class="col">
                        <button type="button" class="btn btn-sm btn-warning ml-2 mt-1" style="width: 60px">Edit</button>
                    </div>
                    </div>
                </td>
                <td>
                    <div class="row">
                    <div class="col">08.00 - 15.00</div>
                    <div class="col">
                        <button type="button" class="btn btn-sm btn-warning ml-2 mt-1" style="width: 60px">Edit</button>
                    </div>
                    </div>
                </td>
                <td>
                    <button type="button" class="btn btn-sm btn-danger ml-2 mt-1" style="width: 60px" data-toggle="modal" data-target="#staticBackdrop">Hapus</button>
                </td>
                </tr>
                <tr>
                <td>2</td>
                <td>Muhammad Risal Habibulloh</td>
                <td>
                    <div class="row">
                    <div class="col">Rp. 2.500.000</div>
                    <div class="col">
                        <button type="button" class="btn btn-sm btn-warning ml-2 mt-1" style="width: 60px">Edit</button>
                    </div>
                    </div>
                </td>
                <td>
                    <div class="row">
                    <div class="col">08.00 - 15.00</div>
                    <div class="col">
                        <button type="button" class="btn btn-sm btn-warning ml-2 mt-1" style="width: 60px">Edit</button>
                    </div>
                    </div>
                </td>
                <td>
                    <button type="button" class="btn btn-sm btn-danger ml-2 mt-1" style="width: 60px" data-toggle="modal" data-target="#staticBackdrop">Hapus</button>
                </td>
                </tr>
                <tr>
                <td>3</td>
                <td>Rafatar Farid Ahmad</td>
                <td>
                    <div class="row">
                    <div class="col">Rp. 12.000.000</div>
                    <div class="col">
                        <button type="button" class="btn btn-sm btn-warning ml-2 mt-1" style="width: 60px">Edit</button>
                    </div>
                    </div>
                </td>
                <td>
                    <div class="row">
                    <div class="col">08.00 - 15.00</div>
                    <div class="col">
                        <button type="button" class="btn btn-sm btn-warning ml-2 mt-1" style="width: 60px">Edit</button>
                    </div>
                    </div>
                </td>
                <td>
                    <button type="button" class="btn btn-sm btn-danger ml-2 mt-1" style="width: 60px" data-toggle="modal" data-target="#staticBackdrop">Hapus</button>
                </td>
                </tr>
                <tr>
                <td>4</td>
                <td>Ahmad Fahrul Romadlon</td>
                <td>
                    <div class="row">
                    <div class="col">Rp. 2.000.000</div>
                    <div class="col">
                        <button type="button" class="btn btn-sm btn-warning ml-2 mt-1" style="width: 60px">Edit</button>
                    </div>
                    </div>
                </td>
                <td>
                    <div class="row">
                    <div class="col">08.00 - 15.00</div>
                    <div class="col">
                        <button type="button" class="btn btn-sm btn-warning ml-2 mt-1" style="width: 60px">Edit</button>
                    </div>
                    </div>
                </td>
                <td>
                    <button type="button" class="btn btn-sm btn-danger ml-2 mt-1" style="width: 60px" data-toggle="modal" data-target="#staticBackdrop">Hapus</button>
                </td>
                </tr>
                <tr>
                <td>5</td>
                <td>Bambang Pamungkas</td>
                <td>
                    <div class="row">
                    <div class="col">Rp. 1.000.000</div>
                    <div class="col">
                        <button type="button" class="btn btn-sm btn-warning ml-2 mt-1" style="width: 60px">Edit</button>
                    </div>
                    </div>
                </td>
                <td>
                    <div class="row">
                    <div class="col">08.00 - 15.00</div>
                    <div class="col">
                        <button type="button" class="btn btn-sm btn-warning ml-2 mt-1" style="width: 60px">Edit</button>
                    </div>
                    </div>
                </td>
                <td>
                    <button type="button" class="btn btn-sm btn-danger ml-2 mt-1" style="width: 60px" data-toggle="modal" data-target="#staticBackdrop">Hapus</button>
                </td>
                </tr>
            </tbody>
            </table>
        </div>
        </div>
    </div>
    </div>
    </main>
    <!-- modals -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Apakah Anda yakin ingin menghapus data Barista?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">Jika Anda menekan "yakin" maka data barista akan dihapus dari tabel.</div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary">Yakin</button>
        </div>
    </div>
    </div>
    </div>
    <!-- akhir modals -->
@endsection