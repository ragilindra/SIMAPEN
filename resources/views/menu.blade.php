@extends('layout.app')

@section('title', 'Menu')

@section('content')

<main>
    <div class="container-fluid">
    <h5 class="mt-4 mb-5">Menu</h5>
    <!-- tabel alat -->
    <div class="card mb-4">
        <div class="row">
        <div class="col"><h5 class="mt-4 ml-3">Daftar Menu</h5></div>
        <div class="col text-right">
            <button type="button" class="btn btn-sm btn-primary mt-4 mr-4"><i class="fas fa-plus"></i> Tambah Menu Baru</button>
        </div>
        </div>

        <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                <th>NO</th>
                <th>NAMA MENU</th>
                <th>HARGA</th>
                <th>OPSI</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                <td>1</td>
                <td>Biji Kopi</td>
                <td>Rp. 25.000,00</td>
                <td>
                    <button type="button" class="btn btn-sm btn-warning ml-2" style="width: 60px">Edit</button>
                    <button type="button" class="btn btn-sm btn-danger ml-2 mt-1" style="width: 60px" data-toggle="modal" data-target="#staticBackdrop">Hapus</button>
                </td>
                </tr>
                <td>2</td>
                <td>Biji Kopi</td>
                <td>Rp. 25.000,00</td>
                <td>
                    <button type="button" class="btn btn-sm btn-warning ml-2" style="width: 60px">Edit</button>
                    <button type="button" class="btn btn-sm btn-danger ml-2 mt-1" style="width: 60px" data-toggle="modal" data-target="#staticBackdrop">Hapus</button>
                </td>
                </tr>
                <td>3</td>
                <td>Biji Kopi</td>
                <td>Rp. 25.000,00</td>
                <td>
                    <button type="button" class="btn btn-sm btn-warning ml-2" style="width: 60px">Edit</button>
                    <button type="button" class="btn btn-sm btn-danger ml-2 mt-1" style="width: 60px" data-toggle="modal" data-target="#staticBackdrop">Hapus</button>
                </td>
                </tr>
                <td>4</td>
                <td>Biji Kopi</td>
                <td>Rp. 25.000,00</td>
                <td>
                    <button type="button" class="btn btn-sm btn-warning ml-2" style="width: 60px">Edit</button>
                    <button type="button" class="btn btn-sm btn-danger ml-2 mt-1" style="width: 60px" data-toggle="modal" data-target="#staticBackdrop">Hapus</button>
                </td>
                </tr>
                <td>5</td>
                <td>Biji Kopi</td>
                <td>Rp. 25.000,00</td>
                <td>
                    <button type="button" class="btn btn-sm btn-warning ml-2" style="width: 60px">Edit</button>
                    <button type="button" class="btn btn-sm btn-danger ml-2 mt-1" style="width: 60px" data-toggle="modal" data-target="#staticBackdrop">Hapus</button>
                </td>
                </tr>
                <td>6</td>
                <td>Biji Kopi</td>
                <td>Rp. 25.000,00</td>
                <td>
                    <button type="button" class="btn btn-sm btn-warning ml-2" style="width: 60px">Edit</button>
                    <button type="button" class="btn btn-sm btn-danger ml-2 mt-1" style="width: 60px" data-toggle="modal" data-target="#staticBackdrop">Hapus</button>
                </td>
                </tr>
                <td>7</td>
                <td>Biji Kopi</td>
                <td>Rp. 25.000,00</td>
                <td>
                    <button type="button" class="btn btn-sm btn-warning ml-2" style="width: 60px">Edit</button>
                    <button type="button" class="btn btn-sm btn-danger ml-2 mt-1" style="width: 60px" data-toggle="modal" data-target="#staticBackdrop">Hapus</button>
                </td>
                </tr>
                <td>8</td>
                <td>Biji Kopi</td>
                <td>Rp. 25.000,00</td>
                <td>
                    <button type="button" class="btn btn-sm btn-warning ml-2" style="width: 60px">Edit</button>
                    <button type="button" class="btn btn-sm btn-danger ml-2 mt-1" style="width: 60px" data-toggle="modal" data-target="#staticBackdrop">Hapus</button>
                </td>
                </tr>
                <td>9</td>
                <td>Biji Kopi</td>
                <td>Rp. 25.000,00</td>
                <td>
                    <button type="button" class="btn btn-sm btn-warning ml-2" style="width: 60px">Edit</button>
                    <button type="button" class="btn btn-sm btn-danger ml-2 mt-1" style="width: 60px" data-toggle="modal" data-target="#staticBackdrop">Hapus</button>
                </td>
                </tr>
                <td>10</td>
                <td>Biji Kopi</td>
                <td>Rp. 25.000,00</td>
                <td>
                    <button type="button" class="btn btn-sm btn-warning ml-2" style="width: 60px">Edit</button>
                    <button type="button" class="btn btn-sm btn-danger ml-2 mt-1" style="width: 60px" data-toggle="modal" data-target="#staticBackdrop">Hapus</button>
                </td>
                </tr>
                <td>11</td>
                <td>Biji Kopi</td>
                <td>Rp. 25.000,00</td>
                <td>
                    <button type="button" class="btn btn-sm btn-warning ml-2" style="width: 60px">Edit</button>
                    <button type="button" class="btn btn-sm btn-danger ml-2 mt-1" style="width: 60px" data-toggle="modal" data-target="#staticBackdrop">Hapus</button>
                </td>
                </tr>
                <td>12</td>
                <td>Biji Kopi</td>
                <td>Rp. 25.000,00</td>
                <td>
                    <button type="button" class="btn btn-sm btn-warning ml-2" style="width: 60px">Edit</button>
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
        <h5 class="modal-title" id="staticBackdropLabel">Apakah Anda yakin ingin menghapus menu?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">Jika Anda menekan "yakin" maka menu akan dihapus dari tabel.</div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary">Yakin</button>
        </div>
    </div>
    </div>
</div>
<!-- akhir modals -->
@endsection