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
                            <h4 class="card-title">Change Data Arsip</h4>
                            <form method="POST" action="{{ route('arsip.update', $arsip->id) }}">
                              @csrf
                              @method('PUT')
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">ARSIP ID</label>
                                    <div class="col-sm-9">
                                      <input type="text" name="arsipid" value="{{ $arsip->arsipid }}" class="form-control" />
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">NO ARSIP</label>
                                    <div class="col-sm-9">
                                      <input type="text" name="no_arsip" value="{{ $arsip->no_arsip }}" class="form-control" />
                                    </div>
                                    @if($errors->has('no_arsip'))
                                      <p style="font-style: bold; color: red;">{{ $errors->first('no_arsip') }}</p>
                                    @endif
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">KLASIFIKASI</label>
                                    <div class="col-sm-9">
                                      <select class="form-control" name="klasifikasi">
                                            <option value="-"{{ $arsip->klasifikasi == 'DL.00' ? 'selected' : '' }}>-</option>
                                            <option value="DL.00"{{ $arsip->klasifikasi == 'DL.00' ? 'selected' : '' }}>DL.00</option>
                                            <option value="DL.02"{{ $arsip->klasifikasi == 'DL.02' ? 'selected' : '' }}>DL.02</option>
                                            <option value="HK.00"{{ $arsip->klasifikasi == 'HK.00' ? 'selected' : '' }}>HK.00</option>
                                            <option value="HK.01"{{ $arsip->klasifikasi == 'HK.01' ? 'selected' : '' }}>HK.01</option>
                                            <option value="HK.04"{{ $arsip->klasifikasi == 'HK.04' ? 'selected' : '' }}>HK.04</option>
                                            <option value="HK.05"{{ $arsip->klasifikasi == 'HK.05' ? 'selected' : '' }}>HK.05</option>
                                            <option value="HM.00"{{ $arsip->klasifikasi == 'HM.00' ? 'selected' : '' }}>HM.00</option>
                                            <option value="HM.02"{{ $arsip->klasifikasi == 'HM.02' ? 'selected' : '' }}>HM.02</option>
                                            <option value="HM.04"{{ $arsip->klasifikasi == 'HM.04' ? 'selected' : '' }}>HM.04</option>
                                            <option value="KP.00"{{ $arsip->klasifikasi == 'KP.00' ? 'selected' : '' }}>KP.00</option>
                                            <option value="KP.03"{{ $arsip->klasifikasi == 'KP.03' ? 'selected' : '' }}>KP.03</option>
                                            <option value="KP.04"{{ $arsip->klasifikasi == 'KP.04' ? 'selected' : '' }}>KP.04</option>
                                            <option value="KP.06"{{ $arsip->klasifikasi == 'KP.06' ? 'selected' : '' }}>KP.06</option>
                                            <option value="KP.09"{{ $arsip->klasifikasi == 'KP.09' ? 'selected' : '' }}>KP.09</option>
                                            <option value="KP.11"{{ $arsip->klasifikasi == 'KP.11' ? 'selected' : '' }}>KP.11</option>
                                            <option value="KU.00"{{ $arsip->klasifikasi == 'KU.00' ? 'selected' : '' }}>KU.00</option>
                                            <option value="KU.02"{{ $arsip->klasifikasi == 'KU.02' ? 'selected' : '' }}>KU.02</option>
                                            <option value="KU.03"{{ $arsip->klasifikasi == 'KU.03' ? 'selected' : '' }}>KU.03</option>
                                            <option value="KU.04"{{ $arsip->klasifikasi == 'KU.04' ? 'selected' : '' }}>KU.04</option>
                                            <option value="KU.05"{{ $arsip->klasifikasi == 'KU.05' ? 'selected' : '' }}>KU.05</option>
                                            <option value="KU.06"{{ $arsip->klasifikasi == 'KU.06' ? 'selected' : '' }}>KU.06</option>
                                            <option value="KU.08"{{ $arsip->klasifikasi == 'KU.08' ? 'selected' : '' }}>KU.08</option>
                                            <option value="KU.09"{{ $arsip->klasifikasi == 'KU.09' ? 'selected' : '' }}>KU.09</option>
                                            <option value="KU.10"{{ $arsip->klasifikasi == 'KU.10' ? 'selected' : '' }}>KU.10</option>
                                            <option value="KU.11"{{ $arsip->klasifikasi == 'KU.11' ? 'selected' : '' }}>KU.11</option>
                                            <option value="KU.12"{{ $arsip->klasifikasi == 'KU.12' ? 'selected' : '' }}>KU.12</option>
                                            <option value="KU.13"{{ $arsip->klasifikasi == 'KU.13' ? 'selected' : '' }}>KU.13</option>
                                            <option value="KU.14"{{ $arsip->klasifikasi == 'KU.14' ? 'selected' : '' }}>KU.14</option>
                                            <option value="LL.00"{{ $arsip->klasifikasi == 'LL.00' ? 'selected' : '' }}>LL.00</option>
                                            <option value="OT.01"{{ $arsip->klasifikasi == 'OT.01' ? 'selected' : '' }}>OT.01</option>
                                            <option value="OT.03"{{ $arsip->klasifikasi == 'OT.03' ? 'selected' : '' }}>OT.03</option>
                                            <option value="PL.00"{{ $arsip->klasifikasi == 'PL.00' ? 'selected' : '' }}>PL.00</option>
                                            <option value="PM.00"{{ $arsip->klasifikasi == 'PM.00' ? 'selected' : '' }}>PM.00</option>
                                            <option value="PM.02"{{ $arsip->klasifikasi == 'PM.02' ? 'selected' : '' }}>PM.02</option>
                                            <option value="PM.03"{{ $arsip->klasifikasi == 'PM.03' ? 'selected' : '' }}>PM.03</option>
                                            <option value="PP.00"{{ $arsip->klasifikasi == 'PP.00' ? 'selected' : '' }}>PP.00</option>
                                            <option value="PP.01"{{ $arsip->klasifikasi == 'PP.01' ? 'selected' : '' }}>PP.01</option>
                                            <option value="PP.02"{{ $arsip->klasifikasi == 'PP.02' ? 'selected' : '' }}>PP.02</option>
                                            <option value="PT.00"{{ $arsip->klasifikasi == 'PT.00' ? 'selected' : '' }}>PT.00</option>
                                            <option value="PT.02"{{ $arsip->klasifikasi == 'PT.02' ? 'selected' : '' }}>PT.02</option>
                                            <option value="PT.03"{{ $arsip->klasifikasi == 'PT.03' ? 'selected' : '' }}>PT.03</option>
                                            <option value="TU.00"{{ $arsip->klasifikasi == 'TU.00' ? 'selected' : '' }}>TU.00</option>
                                            <option value="TU.03"{{ $arsip->klasifikasi == 'TU.03' ? 'selected' : '' }}>TU.03</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">BENTUK ARSIP</label>
                                    <div class="col-sm-9">
                                      <select class="form-control" name="bentuk_arsip">
                                        <option value="-"{{ $arsip->bentuk_arsip == '-' ? 'selected' : '' }}>-</option>
                                        <option value="Foto"{{ $arsip->bentuk_arsip == 'Foto' ? 'selected' : '' }}>Foto</option>
                                        <option value="Gambar"{{ $arsip->bentuk_arsip == 'Gambar' ? 'selected' : '' }}>Gambar</option>
                                        <option value="Koresponden"{{ $arsip->bentuk_arsip == 'Koresponden' ? 'selected' : '' }}>Koresponden</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">URAIAN</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="uraian" style="height: 100px">{{ $arsip->uraian }}</textarea>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">KODE UNIT</label>
                                    <div class="col-sm-9">
                                      <input type="text" name="kode_unit" value="{{ $arsip->kode_unit }}" class="form-control" />
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">JENIS ARSIP</label>
                                    <div class="col-sm-9">
                                      <input type="text" name="jenis_arsip" value="{{ $arsip->jenis_arsip }}" class="form-control" />
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">RUAS</label>
                                    <div class="col-sm-9">
                                      <input type="text" name="ruas" value="{{ $arsip->ruas }}" class="form-control" />
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">UNIT P</label>
                                    <div class="col-sm-9">
                                      <input type="text" name="unit_p" value="{{ $arsip->unit_p }}" class="form-control" />
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">MASUK/KELUAR</label>
                                    <div class="col-sm-9">
                                      <select class="form-control" name="m_k">
                                        <option value="Masuk"{{ $arsip->m_k == 'Masuk' ? 'selected' : '' }}>Arsip Masuk</option>
                                        <option value="Keluar"{{ $arsip->m_k == 'Keluar' ? 'selected' : '' }}>Arsip Keluar</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">TAHUN</label>
                                    <div class="col-sm-9">
                                      <input type="date" name="tahun" value="{{ $arsip->tahun }}" class="form-control" />
                                    </div>
                                    @if($errors->has('tahun'))
                                      <p style="font-style: bold; color: red;">{{ $errors->first('tahun') }}</p>
                                    @endif
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">JUMLAH</label>
                                    <div class="col-sm-9">
                                      <input type="text" name="jumlah" value="{{ $arsip->jumlah }}" class="form-control" />
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">SAMPAI DENGAN</label>
                                    <div class="col-sm-9">
                                      <input type="date" name="s_d" value="{{ $arsip->s_d }}" class="form-control" />
                                    </div>
                                    @if($errors->has('s_d'))
                                      <p style="font-style: bold; color: red;">{{ $errors->first('s_d') }}</p>
                                    @endif
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">NO BOX</label>
                                    <div class="col-sm-9">
                                      <input type="text" name="no_box" value="{{ $arsip->no_box }}" class="form-control" />
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">PERKEMBANGAN</label>
                                    <div class="col-sm-9">
                                      <select class="form-control" name="perkembangan">
                                        <option value="-"{{ $arsip->perkembangan == '-' ? 'selected' : '' }}>-</option>
                                        <option value="Asli"{{ $arsip->perkembangan == 'Asli' ? 'selected' : '' }}>Asli</option>
                                        <option value="Copy"{{ $arsip->perkembangan == 'Copy' ? 'selected' : '' }}>Copy</option>
                                        <option value="Tembusan"{{ $arsip->perkembangan == 'Tembusan' ? 'selected' : '' }}>Tembusan</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">LOKASI</label>
                                    <div class="col-sm-9">
                                      <input type="text" name="lokasi" value="{{ $arsip->lokasi }}" class="form-control" />
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">RETENSI</label>
                                    <div class="col-sm-9">
                                      <input type="date" name="retensi" value="{{ $arsip->retensi }}" class="form-control" />
                                    </div>
                                    @if($errors->has('retensi'))
                                      <p style="font-style: bold; color: red;">{{ $errors->first('retensi') }}</p>
                                    @endif
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">GUDANG</label>
                                    <div class="col-sm-9">
                                      <input type="date" name="gudang" value="{{ $arsip->gudang }}" class="form-control" />
                                    </div>
                                    @if($errors->has('gudang'))
                                      <p style="font-style: bold; color: red;">{{ $errors->first('gudang') }}</p>
                                    @endif
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">KETERANGAN</label>
                                    <div class="col-sm-9">
                                      <select class="form-control" name="keterangan">
                                        <option value="-"{{ $arsip->klasifikasi == '-' ? 'selected' : '' }}>-</option>
                                        <option value="Simpan"{{ $arsip->klasifikasi == 'Simpan' ? 'selected' : '' }}>Simpan</option>
                                        <option value="Permanen"{{ $arsip->klasifikasi == 'Permanen' ? 'selected' : '' }}>Permanen</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">KELOMPOK</label>
                                    <div class="col-sm-9">
                                      <input type="text" name="kelompok" value="{{ $arsip->kelompok }}" class="form-control" />
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">PROYEK</label>
                                    <div class="col-sm-9">
                                      <input type="text" name="proyek" value="{{ $arsip->proyek }}" class="form-control" />
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">INDEKS</label>
                                    <div class="col-sm-9">
                                      <input type="text" name="indeks" value="{{ $arsip->indeks }}" class="form-control" />
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div style="float: right">
                                <button type="submit" class="btn btn-sm btn-outline-success">Update</button>
                                <button type="reset" class="btn btn-sm btn-outline-secondary">Reset</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection