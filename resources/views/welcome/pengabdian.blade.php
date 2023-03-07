@extends('layouts.app')

@section('content')
    <!-- Hoverable Table rows -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Beranda</a></li>
            <li class="breadcrumb-item"><a href="{{ route('welcome.pengabdian') }}">Pengabdian</a></li>
        </ol>
    </nav>
    @include('component.carousel')

    <h3 class="mt-5">Pengabdian</h3>
    <div class="card">
        <div class="table-responsive text-nowrap">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Tgl Mulai</th>
                    <th>Tgl Selesai</th>
                    <th>Sumber Dana</th>
                    <th>Jumlah</th>
                    <th>Sebagai</th>
                    <th>Penulis</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                @foreach($pengabdian as $value)
                    <tr>
                        <td><strong>#</strong></td>
                        <td><strong>{{ $value->judul }}</strong></td>
                        <td>{{ $value->tanggal_mulai }}</td>
                        <td>{{ $value->tanggal_selesai }}</td>
                        <td>{{ $value->sumber_dana }}</td>
                        <td>Rp.{{ number_format($value->jumlah) }}</td>
                        <td>{{ $value->sebagai }}</td>
                        <th>{{ $value->owner }}</th>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="mx-3 my-3">
            {{ $pengabdian->links() }}
        </div>
    </div>
    <!--/ Hoverable Table rows -->
@endsection
