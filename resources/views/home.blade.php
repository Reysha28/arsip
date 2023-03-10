@extends('layouts.stisla.index', ['title' => 'Admin Dashboard', 'page_heading' => 'Dashboard'])

@section('content')
<div class="row">
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <div class="card-icon bg-primary">
        <i class="fas fa-columns"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Total Arsip</h4>
        </div>
        <div class="card-body">
          {{ $commodity_count }}
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <div class="card-icon bg-info">
        <i class="fas fa-fw fa-check-circle"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Kondisi Umum</h4>
        </div>
        <div class="card-body">
          {{ $commodity_condition_good_count }}
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <div class="card-icon bg-warning">
        <i class="fas fa-fw fa-exclamation-circle"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Kondisi Penting</h4>
        </div>
        <div class="card-body">
          {{ $commodity_condition_not_good_count }}
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <div class="card-icon bg-danger">
        <i class="fas fa-fw fa-times-circle"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Kondisi Rahasia</h4>
        </div>
        <div class="card-body">
          {{ $commodity_condition_heavily_damage_count }}
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-12 col-md-12 col-12 col-sm-12">
    <div class="card">
      <div class="card-header">
        <h4>Arsip Keuangan</h4>
      </div>
      <div class="card-body">
        <div class="text-center pt-1 pb-1">
          <a href="{{ route('arsip.index') }}" class="btn btn-primary btn-lg btn-round">
            Lihat Semua Arsip
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection


@push('js')
@include('_script');
@endpush