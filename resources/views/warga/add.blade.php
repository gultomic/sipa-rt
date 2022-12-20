@extends('layouts.app')

@section('title', 'Tambah Data')

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Warga</h1>
        <a href="{{route('warga.index')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-arrow-left fa-sm text-white-50"></i> Back</a>
    </div>

    {{-- Alert Messages --}}
    @include('common.alert')

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Add New</h6>
        </div>
        <form method="POST" action="{{route('warga.store')}}">
            @csrf
            <div class="card-body">
                <div class="form-group row">

                    <div class="col-sm-3 mb-3 mt-3 mb-sm-0">
                        <span style="color:red;">*</span>NIK</label>
                        <input
                            type="text"
                            class="form-control form-control-user @error('nik') is-invalid @enderror"
                            id="nikId"
                            placeholder="Nomor Induk Kependudukan"
                            name="nik"
                            value="{{ old('nik') }}">

                        @error('nik')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="col-sm-3 mb-3 mt-3 mb-sm-0">
                        <span style="color:red;">*</span>NKK</label>
                        <input
                            type="text"
                            class="form-control form-control-user @error('nkk') is-invalid @enderror"
                            id="nkkId"
                            placeholder="Nomor Kartu Keluarga"
                            name="nkk"
                            value="{{ old('nkk') }}">

                        @error('nkk')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="col-sm-6 mb-3 mt-3 mb-sm-0">
                        <span style="color:red;">*</span>Nama Lengkap</label>
                        <input
                            type="text"
                            class="form-control form-control-user @error('nama_lengkap') is-invalid @enderror"
                            id="namaLengkap"
                            placeholder="Nama lengkap"
                            name="nama_lengkap"
                            value="{{ old('nama_lengkap') }}">

                        @error('nama_lengkap')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="col-sm-3 mb-3 mt-3 mb-sm-0">
                        <span style="color:red;">*</span>Status dalam keluarga</label>
                        <select class="form-control form-control-user @error('status_kk') is-invalid @enderror" name="status_kk">
                            <option selected disabled>Pilih...</option>
                            <option value="Kepala Keluarga">Kepala Keluarga</option>
                            <option value="Suami">Suami</option>
                            <option value="Isteri">Isteri</option>
                            <option value="Anak">Anak</option>
                        </select>
                        @error('status_kk')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="col-sm-3 mb-3 mt-3 mb-sm-0">
                        <lable class="pl-2">Jenis Kelamin</label>
                        <select class="form-control form-control-user @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin">
                            <option selected disabled>Pilih...</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        @error('jenis_kelamin')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="col-sm-3 mb-3 mt-3 mb-sm-0">
                        <lable class="pl-2">Tempat Lahir</label>
                        <input
                            type="text"
                            class="form-control form-control-user @error('tempat_lahir') is-invalid @enderror"
                            id="tempatLahir"
                            placeholder="Tempat Lahir"
                            name="tempat_lahir"
                            value="{{ old('tempat_lahir') }}">

                        @error('tempat_lahir')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="col-sm-3 mb-3 mt-3 mb-sm-0">
                        <lable class="pl-2">Tanggal Lahir</label>
                        <input
                            type="date"
                            class="form-control form-control-user @error('tanggal_lahir') is-invalid @enderror"
                            id="tanggalLahir"
                            placeholder="Tanggal Lahir"
                            name="tanggal_lahir"
                            value="{{ old('tanggal_lahir') }}">

                        @error('tanggal_lahir')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="col-sm-3 mb-3 mt-3 mb-sm-0">
                        <lable class="pl-2">Agama</label>
                        <input
                            type="text"
                            class="form-control form-control-user @error('agama') is-invalid @enderror"
                            id="agama"
                            placeholder="Agama"
                            name="agama"
                            value="{{ old('agama') }}">
                        @error('agama')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="col-sm-3 mb-3 mt-3 mb-sm-0">
                        <lable class="pl-2">Pendidikan</label>
                        <input
                            type="text"
                            class="form-control form-control-user @error('pendidikan') is-invalid @enderror"
                            id="pendidikan"
                            placeholder="Pendidikan"
                            name="pendidikan"
                            value="{{ old('pendidikan') }}">
                        @error('pendidikan')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="col-sm-3 mb-3 mt-3 mb-sm-0">
                        <lable class="pl-2">Jenis Pekerjaan</label>
                        <input
                            type="text"
                            class="form-control form-control-user @error('jenis_pekerjaan') is-invalid @enderror"
                            id="jenisPekerjaan"
                            placeholder="Jenis pekerjaan"
                            name="jenis_pekerjaan"
                            value="{{ old('jenis_pekerjaan') }}">
                        @error('jenis_pekerjaan')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-success btn-user float-right mb-3">Save</button>
                <a class="btn btn-primary float-right mr-3 mb-3" href="{{ route('warga.index') }}">Cancel</a>
            </div>
        </form>
    </div>

</div>


@endsection
