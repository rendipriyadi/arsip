@extends('layouts.template')
@section('content')
<div class="content-wrapper">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header mb-2">
              Dashboard
          </div>
          <div class="col-sm-12">
            <div class="row">
              <div class="col-sm-4">
                <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                  <div class="card-header">Jumlah Arsip CMNP</div>
                  <div class="card-body">
                    <h5 class="card-text" style="float:right">{{ $totalArsip }}</h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                  <div class="card-header">Jumlah Arsip Keluar</div>
                  <div class="card-body">
                    <h5 class="card-text" style="float:right">{{ $arsipKeluar }}</h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                  <div class="card-header">Jumlah Arsip Masuk</div>
                  <div class="card-body">
                    <h5 class="card-text" style="float:right">{{ $arsipMasuk }}</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
      </div>
    </div>
  </div>
  @endsection