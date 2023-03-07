<div class="container">
    <div class="row mt-5 gx-5 gy-3">
        <div class="col-md-12">
            <h3 class="text-success text-center mb-5"><i class="fas fa-file"></i> Audit</h3>
                <div class="card">
                    <div class="table-responsive text-nowrap">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Tahun</th>
                                <th>Semester</th>
                                <th>File</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                            @foreach($audit as $value)
                                <tr>
                                    <td><strong>#</strong></td>
                                    <td><strong>{{ $value->nama }}</strong></td>
                                    <td>{{ $value->tahun }}</td>
                                    <td>Semester {{ $value->semester }}</td>
                                    <td>
                                        <a class="link-info" target="_blank" href="{{ $value->file_url }}">Preview</a> /
                                        <a href="{{ $value->file_url }}">Download</a>

                                    </td>
                                    <td class="d-flex">
                                        <a class="btn btn-sm btn-primary mx-1" href="{{ route('audit.edit', $value->id) }}">
                                            <i class="bx bx-edit-alt me-1"></i> Edit
                                        </a>
                                        <div>
                                            {!! Form::open(['route' => ['audit.destroy', $value->id], 'method' => 'DELETE']) !!}
                                            <button type="submit" class="btn btn-sm btn-danger delete-confirm">
                                                <i class="bx bx-trash me-1"></i> Hapus
                                            </button>
                                            {!! Form::close() !!}
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="mx-3 my-3">
                        {{ $audit->links() }}
                    </div>
                </div>
        </div>
    </div>
</div>
    <!--/ Hoverable Table rows -->
