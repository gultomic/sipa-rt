@extends('layouts.app')

@section('title', 'Keuangan')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Laporan Keuangan</h1>
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('users.create') }}" class="btn btn-sm btn-primary">
                        <i class="fas fa-plus"></i> Add New
                    </a>
                </div>
                {{-- <div class="col-md-6">
                    <a href="{{ route('users.export') }}" class="btn btn-sm btn-success">
                        <i class="fas fa-check"></i> Export To Excel
                    </a>
                </div> --}}

            </div>

        </div>

        {{-- Alert Messages --}}
        @include('common.alert')

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Keuangan</h6>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th width="3%">Tanggal</th>
                                <th width="5%">Jenis Keuangan</th>
                                <th width="1%">Status</th>
                                <th width="5%">Rincian</th>
                                <th width="3%">Nominal</th>
                                <th width="5%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($collection as $item)
                                <tr>
                                    <td>{{ \Carbon\Carbon::parse($item->updated_at)->format('d-m-Y') }}</td>
                                    <td>{{ $item->jenis->nama }}</td>
                                    <td>{{ $item->tipe }}</td>
                                    <td>{{ $item->keterangan }}</td>
                                    <td>{{ number_format($item->nominal, 0, ',', '.') }}</td>
                                    <td style="display: flex">
                                        <a href="#"
                                            class="btn btn-primary m-2">
                                            <i class="fa fa-pen"></i>
                                        </a>
                                        <a class="btn btn-danger m-2" href="#" data-toggle="modal" data-target="#deleteModal">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{ $collection->links() }}
                </div>
            </div>
        </div>

    </div>

    {{-- @include('users.delete-modal') --}}

@endsection

@section('scripts')

@endsection
