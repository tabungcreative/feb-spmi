<div class="card">
    <div class="card-body">

        @can('admin')
        <button
            type="button"
            class="btn btn-warning"
            data-bs-toggle="modal"
            data-bs-target="#backDropModal"
        >
            <i class="bx bx-plus-circle me-1"></i> Tambah Dokumen
        </button>
        @endcan


        <div class="table-responsive text-nowrap">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Tahun</th>
                    <th>Nama</th>
                    <th>Dokumen</th>
                    @can('admin')
                    <th>Actions</th>
                    @endcan
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                @foreach($dokumenMutu->fileDokumen as $value)
                    <tr>
                        <td><strong>#</strong></td>
                        <td>{{ $value->created_at }}</td>
                        <td>{{ $dokumenMutu->tahun }}</td>
                        <td>{{ $value->nama_file }}</td>
                        <td>
                            <a href="{{ $value->file_url }}" target="_blank">Preview</a>
                        </td>
                        @can('admin')
                        <td>
                            <div>
                                {!! Form::open(['route' => ['file-dokumen.destroy', $value->id], 'method' => 'DELETE']) !!}
                                <button type="submit" class="btn btn-sm btn-danger">
                                    <i class="bx bx-trash me-1"></i> Delete
                                </button>
                                {!! Form::close() !!}
                            </div>
                        </td>
                        @endcan
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@include('dokumen-mutu.create-file')
