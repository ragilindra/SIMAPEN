@extends('layout.app')

@section('title', 'Halaman Penjualan')

@section('content')
<main>
    <div class="container-fluid">
    <h5 class="mt-4 mb-5">Penjualan</h5>
    <div class="row mt-4 justify-content-between">
        <!-- card menu -->
        <div class="col-xl-4 col-md-6">
        <div class="card mb-3">
            <div class="row no-gutters">
            <div class="col-md-5 bg-danger rounded text-center">
                <h5 class="card-title text-light mt-2">Total Pendapatan</h5>
            </div>
            <div class="col-md-7">
                <div class="card-body text-center">
                <a class="text-dark text-decoration-none" href="menu.html">
                    <h5 class="card-title">Rp. 2.852.000,00</h5>
                </a>
                </div>
            </div>
            </div>
        </div>
        </div>
        <!-- end card menu -->

        <!-- card penjualan -->
        <div class="col-xl-4 col-md-6">
        <div class="card mb-3">
            <div class="row no-gutters">
            <div class="col-md-5 bg-success rounded text-center">
                <h5 class="card-title text-light mt-2">Total Keuntungan</h5>
            </div>
            <div class="col-md-7">
                <div class="card-body text-center">
                <a class="text-dark text-decoration-none" href="menu.html">
                    <h5 class="card-title">1.000.000,00</h5>
                </a>
                </div>
            </div>
            </div>
        </div>
        </div>
        <!-- end card penjualan -->

        <!-- card barista -->
        <div class="col-xl-4 col-md-6">
        <div class="card mb-3">
            <div class="row no-gutters">
            <div class="col-md-5 bg-warning rounded text-center">
                <h5 class="card-title text-light mt-2">Total Barang Terjual</h5>
            </div>
            <div class="col-md-7">
                <div class="card-body text-center">
                <a class="text-dark text-decoration-none" href="menu.html">
                    <h5 class="card-title">278</h5>
                </a>
                </div>
            </div>
            </div>
        </div>
        </div>
        <!-- end card barista -->
    </div>
    <!-- tabel alat -->
    <div class="card mb-4">
        <div class="row">
        <div class="col"><h5 class="mt-4 ml-3">Data Penjualan</h5></div>
        <div class="col text-right">
            <button type="button" class="btn btn-sm btn-primary mt-4 mr-4"><i class="fas fa-plus"></i> Tambah Penjualan Baru</button>
        </div>
        </div>
        <div class="input-group mt-3">
        <p class="mt-3 my-auto ml-3 rounded p-2 shadow-sm" style="background-color: #a4cada">Total Penjualan : Rp. <span class="p-1 rounded" style="background-color: #cbd2d4">852.000,00</span></p>
        </div>
        <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                <th>NO</th>
                <th>TANGGAL</th>
                <th>NAMA BARANG</th>
                <th>JUMLAH</th>
                <th>TOTAL HARGA</th>
                <th>OPSI</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                <td>1</td>
                <td>28 / 04 /2021</td>
                <td>Ice Coffe Latte</td>
                <td>6</td>
                <td>Rp. 25.000,00</td>
                <td>
                    <button type="button" class="btn btn-sm btn-warning ml-2" style="width: 60px">Edit</button>
                </td>
                </tr>
                <tr>
                <td>1</td>
                <td>28 / 04 /2021</td>
                <td>Ice Coffe Latte</td>
                <td>6</td>
                <td>Rp. 25.000,00</td>
                <td>
                    <button type="button" class="btn btn-sm btn-warning ml-2" style="width: 60px">Edit</button>
                </td>
                </tr>
                <tr>
                <td>1</td>
                <td>28 / 04 /2021</td>
                <td>Ice Coffe Latte</td>
                <td>6</td>
                <td>Rp. 25.000,00</td>
                <td>
                    <button type="button" class="btn btn-sm btn-warning ml-2" style="width: 60px">Edit</button>
                </td>
                </tr>
                <tr>
                <td>1</td>
                <td>28 / 04 /2021</td>
                <td>Ice Coffe Latte</td>
                <td>6</td>
                <td>Rp. 25.000,00</td>
                <td>
                    <button type="button" class="btn btn-sm btn-warning ml-2" style="width: 60px">Edit</button>
                </td>
                </tr>
                <tr>
                <td>1</td>
                <td>28 / 04 /2021</td>
                <td>Ice Coffe Latte</td>
                <td>6</td>
                <td>Rp. 25.000,00</td>
                <td>
                    <button type="button" class="btn btn-sm btn-warning ml-2" style="width: 60px">Edit</button>
                </td>
                </tr>
                <tr>
                <td>1</td>
                <td>28 / 04 /2021</td>
                <td>Ice Coffe Latte</td>
                <td>6</td>
                <td>Rp. 25.000,00</td>
                <td>
                    <button type="button" class="btn btn-sm btn-warning ml-2" style="width: 60px">Edit</button>
                </td>
                </tr>
                <tr>
                <td>1</td>
                <td>28 / 04 /2021</td>
                <td>Ice Coffe Latte</td>
                <td>6</td>
                <td>Rp. 25.000,00</td>
                <td>
                    <button type="button" class="btn btn-sm btn-warning ml-2" style="width: 60px">Edit</button>
                </td>
                </tr>
                <tr>
                <td>1</td>
                <td>28 / 04 /2021</td>
                <td>Ice Coffe Latte</td>
                <td>6</td>
                <td>Rp. 25.000,00</td>
                <td>
                    <button type="button" class="btn btn-sm btn-warning ml-2" style="width: 60px">Edit</button>
                </td>
                </tr>
                <tr>
                <td>1</td>
                <td>28 / 04 /2021</td>
                <td>Ice Coffe Latte</td>
                <td>6</td>
                <td>Rp. 25.000,00</td>
                <td>
                    <button type="button" class="btn btn-sm btn-warning ml-2" style="width: 60px">Edit</button>
                </td>
                </tr>
                <tr>
                <td>1</td>
                <td>28 / 04 /2021</td>
                <td>Ice Coffe Latte</td>
                <td>6</td>
                <td>Rp. 25.000,00</td>
                <td>
                    <button type="button" class="btn btn-sm btn-warning ml-2" style="width: 60px">Edit</button>
                </td>
                </tr>
                <tr>
                <td>1</td>
                <td>28 / 04 /2021</td>
                <td>Ice Coffe Latte</td>
                <td>6</td>
                <td>Rp. 25.000,00</td>
                <td>
                    <button type="button" class="btn btn-sm btn-warning ml-2" style="width: 60px">Edit</button>
                </td>
                </tr>
                <tr>
                <td>1</td>
                <td>28 / 04 /2021</td>
                <td>Ice Coffe Latte</td>
                <td>6</td>
                <td>Rp. 25.000,00</td>
                <td>
                    <button type="button" class="btn btn-sm btn-warning ml-2" style="width: 60px">Edit</button>
                </td>
                </tr>
                <tr>
                <td>1</td>
                <td>28 / 04 /2021</td>
                <td>Ice Coffe Latte</td>
                <td>6</td>
                <td>Rp. 25.000,00</td>
                <td>
                    <button type="button" class="btn btn-sm btn-warning ml-2" style="width: 60px">Edit</button>
                </td>
                </tr>
                <tr>
                <td>1</td>
                <td>28 / 04 /2021</td>
                <td>Ice Coffe Latte</td>
                <td>6</td>
                <td>Rp. 25.000,00</td>
                <td>
                    <button type="button" class="btn btn-sm btn-warning ml-2" style="width: 60px">Edit</button>
                </td>
                </tr>
                <tr>
                <td>1</td>
                <td>28 / 04 /2021</td>
                <td>Ice Coffe Latte</td>
                <td>6</td>
                <td>Rp. 25.000,00</td>
                <td>
                    <button type="button" class="btn btn-sm btn-warning ml-2" style="width: 60px">Edit</button>
                </td>
                </tr>
            </tbody>
            </table>
        </div>
        </div>
    </div>
    </div>
    </main>
@endsection