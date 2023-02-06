@extends('layouts.template')
@section('content')
<div class="content-wrapper">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Data Arsip
                        <a href="{{ route('arsip.create') }}" class="btn btn-sm btn-primary" style="float: right">
                            Tambah Data
                        </a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-middle" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Aksi</th>
                                        <th>Nomor Arsip</th>
                                        <th>Bentuk Arsip</th>
                                        <th>Masuk/Keluar</th>
                                        <th>Uraian</th>
                                        <th>Sampai Dengan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($arsip as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>
                                                <form action="{{ route('arsip.destroy', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('arsip.edit', $data->id) }}"
                                                        class="btn btn-sm btn-outline-success">
                                                        Edit
                                                    </a> |
                                                    <a href="{{ route('arsip.show', $data->id) }}"
                                                        class="btn btn-sm btn-outline-warning">
                                                        Show
                                                    </a> |
                                                    <button type="submit" class="btn btn-sm btn-outline-danger"
                                                        onclick="return confirm('Apakah Anda Yakin?')">Delete
                                                    </button>
                                                </form>
                                            </td>
                                            <td>{{ $data->no_arsip }}</td>
                                            <td>{{ $data->bentuk_arsip }}</td>
                                            <td>{{ $data->m_k }}</td>
                                            <td>{{ $data->uraian }}</td>
                                            <td>{{ date('d M Y', strtotime($data->s_d)) }}</td>
                                            
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection