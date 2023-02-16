@extends('layouts.template')
@section('content')
<div class="content-wrapper">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Data Arsip
                        <a href="{{ route('arsip.index') }}" class="btn btn-sm btn-outline-primary" style="float: right">
                            Back
                        </a>
                    </div>
                    <div class="col-12 grid-margin">
                        <div class="card">
                          <div class="card-body">
                            <h4 class="card-title">Read Data Arsip</h4>
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">ARSIP ID</label>
                                    <div class="col-sm-9">
                                      <input type="text" name="arsipid" value=" {{ $arsip->arsipid }} "class="form-control" readonly />
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">NO ARSIP</label>
                                    <div class="col-sm-9">
                                      <input type="text" name="no_arsip" value="{{ $arsip->no_arsip }}" class="form-control" readonly/>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">KLASIFIKASI</label>
                                    <div class="col-sm-9">
                                      <input type="text" name="klasifikasi" value="{{ $arsip->klasifikasi }}" class="form-control" readonly/>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">BENTUK ARSIP</label>
                                    <div class="col-sm-9">
                                      <input type="text" name="bentuk_arsip" value="{{ $arsip->bentuk_arsip }}" class="form-control" readonly/>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">URAIAN</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="uraian" style="height: 100px" readonly>{{ $arsip->uraian }}"</textarea>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">KODE UNIT</label>
                                    <div class="col-sm-9">
                                      <input type="text" name="kode_unit" value="{{ $arsip->kode_unit }}" class="form-control" readonly/>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">JENIS ARSIP</label>
                                    <div class="col-sm-9">
                                      <input type="text" name="jenis_arsip" value="{{ $arsip->jenis_arsip }}" class="form-control" readonly/>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">RUAS</label>
                                    <div class="col-sm-9">
                                      <input type="text" name="ruas" value="{{ $arsip->ruas }}" class="form-control" readonly/>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">UNIT P</label>
                                    <div class="col-sm-9">
                                      <input type="text" name="unit_p" value="{{ $arsip->unit_p }}" class="form-control" readonly/>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">MASUK/KELUAR</label>
                                    <div class="col-sm-9">
                                      <input type="text" name="m_k" value="{{ $arsip->m_k }}" class="form-control" readonly/>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">TAHUN</label>
                                    <div class="col-sm-9">
                                      <input type="date" name="tahun" value="{{ $arsip->tahun }}" class="form-control" readonly/>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">JUMLAH</label>
                                    <div class="col-sm-9">
                                      <input type="text" name="jumlah" value="{{ $arsip->jumlah }}" class="form-control" readonly/>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">SAMPAI DENGAN</label>
                                    <div class="col-sm-9">
                                      <input type="date" name="s_d" value="{{ $arsip->s_d }}" class="form-control" readonly/>
                                  </div>
                                </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">NO BOX</label>
                                    <div class="col-sm-9">
                                      <input type="text" name="no_box" value="{{ $arsip->no_box }}" class="form-control" readonly/>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">PERKEMBANGAN</label>
                                    <div class="col-sm-9">
                                      <input type="text" name="perkembangan" value="{{ $arsip->perkembangan }}" class="form-control" readonly/>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">LOKASI</label>
                                    <div class="col-sm-9">
                                      <input type="text" name="lokasi" value="{{ $arsip->lokasi }}" class="form-control" readonly/>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">RETENSI</label>
                                    <div class="col-sm-9">
                                      <input type="date" name="retensi" value="{{ $arsip->retensi }}" class="form-control" readonly/>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">GUDANG</label>
                                    <div class="col-sm-9">
                                      <input type="date" name="gudang" value="{{ $arsip->gudang }}" class="form-control" readonly/>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">KETERANGAN</label>
                                    <div class="col-sm-9">
                                      <input type="text" name="keterangan" value="{{ $arsip->keterangan }}" class="form-control" readonly/>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">KELOMPOK</label>
                                    <div class="col-sm-9">
                                      <input type="text" name="kelompok" value="{{ $arsip->kelompok }}" class="form-control" readonly/>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">PROYEK</label>
                                    <div class="col-sm-9">
                                      <input type="text" name="proyek" value="{{ $arsip->proyek }}" class="form-control" readonly/>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">INDEKS</label>
                                    <div class="col-sm-9">
                                      <input type="text" name="indeks" value="{{ $arsip->no_arsip }}" class="form-control" readonly/>
                                    </div>
                                  </div>
                                </div>
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