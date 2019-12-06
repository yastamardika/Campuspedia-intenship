@extends('admin')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"> Data Siswa</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <th>
                                Name
                            </th>
                            <th>
                                Phone
                            </th>
                            <th>
                                Email
                            </th>
                            <th >
                                Action
                            </th>
                        </thead>
                        <tbody>
                            @foreach ($siswa as $s)
                            <tr>
                                <td>
                                    {{ $s->Nama  }}
                                </td>
                                <td>
                                    {{ $s->no_hp }}
                                </td>
                                <td>
                                   {{ $s->email }}
                                </td>
                                <td>
                                    <a href="/edit/{{ $s->id }}">Edit</a>
                                    <a href="/hapus/{{ $s->id }}">Hapus</a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
