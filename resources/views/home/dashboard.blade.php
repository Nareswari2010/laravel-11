@extends('layouts.master')
@section('tittle', 'dashboard')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>Data User</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Data Barang</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>Data Pelanggan</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-stalker"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Data Penjualan</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
    </section>


    <section class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3>History Data Pelanggan</h3>
                </div>
                <div class="card-body">
                  <div
                    class="table-responsive"
                  >
                    <table
                      class="table table-primary"
                    >
                      <thead>
                        <tr>
                          <th scope="col">Nama Pelanggan</th>
                          <th scope="col">NoTelp</th>
                          <th scope="col">Alamat</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="">
                          <td scope="row">R1C1</td>
                          <td>R1C2</td>
                          <td>R1C3</td>
                        </tr>
                        <tr class="">
                          <td scope="row">Item</td>
                          <td>Item</td>
                          <td>Item</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  
                </div>
            </div>
        </div>
    </div>
    </section>

    <section class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3>History Data Barang</h3>
                </div>
                <div class="card-body">
                  <div
                    class="table-responsive"
                  >
                    <table
                      class="table table-primary"
                    >
                      <thead>
                        <tr>
                          <th scope="col">Nama Barang</th>
                          <th scope="col">Harga</th>
                          <th scope="col">Stok</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="">
                          <td scope="row">R1C1</td>
                          <td>R1C2</td>
                          <td>R1C3</td>
                        </tr>
                        <tr class="">
                          <td scope="row">Item</td>
                          <td>Item</td>
                          <td>Item</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  
                </div>
            </div>
        </div>
    </div>
    </section>

    <section class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3>History Data Penjualan</h3>
                    </div>
                <div class="card-body">
                  <div
                    class="table-responsive"
                  >
                    <table
                      class="table table-primary"
                    >
                      <thead>
                        <tr>
                          <th scope="col">Nama Barang</th>
                          <th scope="col">Tgl Penjualan</th>
                          <th scope="col">Total Harga</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="">
                          <td scope="row">R1C1</td>
                          <td>R1C2</td>
                          <td>R1C3</td>
                        </tr>
                        <tr class="">
                          <td scope="row">Item</td>
                          <td>Item</td>
                          <td>Item</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
            </div>
        </div>
    </div>
    </section>

  </div>

@endsection
