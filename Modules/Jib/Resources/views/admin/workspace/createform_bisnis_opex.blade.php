@extends('layouts.dashboard')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Form Persetujuan JIB</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="{{ url('admin/jib/pengajuan') }}">@lang('jib::pengajuan.manage_pengajuan')</a></div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4> BISNIS OPEX</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">No DRK</label>
                                <div class="col-sm-4">
                                    <input type="text" name="no_drp"
                                           class="form-control @error('no_drp') is-invalid @enderror @if (!$errors->has('no_drp') && old('no_drp')) is-valid @endif"
                                           value="{{ !empty($pengajuan->no_drp) ? $pengajuan->no_drp : '' }}" disabled>
                                </div>

                                <label class="col-sm-2 col-form-label">Term of Payment</label>
                                <div class="col-sm-4">
                                    <input type="text" name="top"
                                           class="form-control @error('top') is-invalid @enderror @if (!$errors->has('top') && old('top')) is-valid @endif"
                                           value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Kelompok Akun</label>
                                <div class="col-sm-4">
                                    <input type="text" name="akun"
                                           class="form-control @error('akun') is-invalid @enderror @if (!$errors->has('akun') && old('akun')) is-valid @endif"
                                           value="">
                                </div>

                                <label class="col-sm-2 col-form-label">Beban</label>
                                <div class="col-sm-4">
                                    <input type="text" name="beban"
                                           class="form-control @error('beban') is-invalid @enderror @if (!$errors->has('beban') && old('beban')) is-valid @endif"
                                           value="" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Kegiatan</label>
                                <div class="col-sm-4">
                                    <input type="text" name="kegiatan"
                                           class="form-control @error('kegiatan') is-invalid @enderror @if (!$errors->has('kegiatan') && old('kegiatan')) is-valid @endif"
                                           value="{{ !empty($pengajuan->kegiatan) ? $pengajuan->kegiatan : '' }}" disabled>
                                </div>

                                <label class="col-sm-2 col-form-label">Profit Margin (%)</label>
                                <div class="col-sm-4">
                                    <input type="text" name="profit_margin"
                                           class="form-control @error('profit_margin') is-invalid @enderror @if (!$errors->has('profit_margin') && old('profit_margin')) is-valid @endif"
                                           value="{{ !empty($pengajuan) ? $pengajuan->profit_margin : '' }}" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Customer</label>
                                <div class="col-sm-4">
                                    <select class="form-control" name="customer_id" id ="customer_id" disabled>
                                        <option value=" ">
                                            {{ !empty($pengajuan->mcustomers->name) ? $pengajuan->mcustomers->name : '' }}
                                        </option>
                                    </select>
                                </div>

                                <label class="col-sm-2 col-form-label">Net Cash Flow</label>
                                <div class="col-sm-4">
                                    <input type="text" name="net_cf"
                                           class="form-control @error('net_cf') is-invalid @enderror @if (!$errors->has('net_cf') && old('net_cf')) is-valid @endif"
                                           value="{{ !empty($pengajuan) ? $pengajuan->net_cf : '' }}" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Lokasi</label>
                                <div class="col-sm-4">
                                    <input type="text" name="lokasi"
                                           class="form-control @error('lokasi') is-invalid @enderror @if (!$errors->has('lokasi') && old('lokasi')) is-valid @endif"
                                           value="">
                                </div>

                                <label class="col-sm-2 col-form-label">Suku Bunga Acuan</label>
                                <div class="col-sm-4">
                                    <input type="text" name="suku_bunga"
                                           class="form-control @error('suku_bunga') is-invalid @enderror @if (!$errors->has('suku_bunga') && old('suku_bunga')) is-valid @endif"
                                           value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nilai Proyek</label>
                                <div class="col-sm-4">
                                    <input type="text" name="nilai_capex"
                                           class="form-control @error('nilai_capex') is-invalid @enderror @if (!$errors->has('nilai_capex') && old('nilai_capex')) is-valid @endif"
                                           value="{{ !empty($pengajuan->nilai_capex) ? $pengajuan->nilai_capex : '' }}" disabled>
                                </div>

                                <label class="col-sm-2 col-form-label">Resiko</label>
                                <div class="col-sm-4">
                                    <input type="text" name="risk_mitigasi"
                                           class="form-control @error('risk_mitigasi') is-invalid @enderror @if (!$errors->has('risk_mitigasi') && old('risk_mitigasi')) is-valid @endif"
                                           value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Scope of Work</label>
                                <div class="col-sm-4">
                                    <input type="text" name="sow"
                                           class="form-control @error('sow') is-invalid @enderror @if (!$errors->has('sow') && old('sow')) is-valid @endif"
                                           value="">
                                </div>

                                <label class="col-sm-2 col-form-label">Score Resiko</label>
                                <div class="col-sm-4">
                                    <input type="text" name="score_mitigasi"
                                           class="form-control @error('score_mitigasi') is-invalid @enderror @if (!$errors->has('score_mitigasi') && old('score_mitigasi')) is-valid @endif"
                                           value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Delivery Time</label>
                                <div class="col-sm-4">
                                    <input type="text" name="delivery_time"
                                           class="form-control @error('delivery_time') is-invalid @enderror @if (!$errors->has('delivery_time') && old('delivery_time')) is-valid @endif"
                                           value="">
                                </div>

                                <label class="col-sm-2 col-form-label">Kesimpulan</label>
                                <div class="col-sm-4">
                                    <input type="text" name="kesimpulan"
                                           class="form-control @error('kesimpulan') is-invalid @enderror @if (!$errors->has('kesimpulan') && old('kesimpulan')) is-valid @endif"
                                           value="">
                                </div>
                            </div>
                            <div class="form-group row">


                                <label class="col-sm-2 col-form-label">Catatan</label>
                                <div class="col-sm-4">
                                    <textarea name="catatan" class="form-control" style="height: 70px;"></textarea>
                                </div>
                            </div>

                        </div>
                        <div class="card-footer text-left">
                            <a href="{{ url('admin/jib/workspace/'.$pengajuan->id.'/editworkspace') }}"><button class="btn btn-light">Back</button></a>
                            <a href=""><button class="btn btn-success">Create</button></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection