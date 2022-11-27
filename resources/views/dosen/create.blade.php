@extends('layouts.template')

@section('content')
    <a class="btn btn-primary mb-3" href="{{ route('dosen.index') }}">
        <i class="bx bx-arrow-back me-1"></i> Kembali
    </a>
    <div class="row">
        <div class="col-xl-9">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Tambah Dosen</h5>
                </div>
                <div class="card-body">
                    {!! Form::open(['route' => 'dosen.store', 'method' => 'POST']) !!}
                    <div class="mb-3">
                        <label class="text-danger">*</label>
                        {!! Form::label('nidn', 'NIDN', ['class' => 'form-label']); !!}
                        {!! Form::text('nidn', null ,['class' => 'form-control']); !!}
                    </div>

                    <div class="mb-3">
                        <label class="text-danger">*</label>
                        {!! Form::label('nama', 'Nama', ['class' => 'form-label']); !!}
                        {!! Form::text('nama', null ,['class' => 'form-control']); !!}
                    </div>

                    <div class="mb-3">
                        <label class="text-danger">*</label>
                        {!! Form::label('tempat_lahir', 'Tempat Lahir', ['class' => 'form-label']); !!}
                        {!! Form::text('tempat_lahir', null ,['class' => 'form-control']); !!}
                    </div>

                    <div class="mb-3">
                        <label class="text-danger">*</label>
                        {!! Form::label('tanggal_lahir', 'Tanggal Lahir', ['class' => 'form-label']); !!}
                        {!! Form::date('tanggal_lahir', null ,['class' => 'form-control']); !!}
                    </div>

                    <div class="mb-3">
                        <label class="text-danger">*</label>
                        {!! Form::label('nik', 'NIK', ['class' => 'form-label']); !!}
                        {!! Form::text('nik', null ,['class' => 'form-control']); !!}
                    </div>

                    <div class="mb-3">
                        <label class="text-danger">*</label>
                        {!! Form::label('jenis_kelamin', 'Jenis Kelamin', ['class' => 'form-label']); !!}
                        {!! Form::select('jenis_kelamin', ['L' => 'Laki - laki', 'P' => 'Perempuan'],null ,['class' => 'form-control', 'placeholder' => 'Pilih Jenis Kelamin']); !!}
                    </div>

                    <div class="mb-3">
                        <label class="text-danger">*</label>
                        {!! Form::label('nomer_hp', 'Nomer HP', ['class' => 'form-label']); !!}
                        {!! Form::text('nomer_hp', null ,['class' => 'form-control']); !!}
                    </div>

                    <div class="mb-3">
                        <label class="text-danger">*</label>
                        {!! Form::label('alamat', 'Alamat', ['class' => 'form-label']); !!}
                        {!! Form::text('alamat', null ,['class' => 'form-control']); !!}
                    </div>

                    <button type="submit" class="btn btn-primary">Kirim</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->

@endsection
