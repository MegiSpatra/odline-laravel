@extends('layoutd.main')
@section('dashboard-container')

    <body>
        <div class="container text-white mt-5">
            <div class="col-md-15 d-flex flex-column justify-content-center">
                <h2>TEAM MEMBERS </h2>
                <h4>You Can Add Team Members </h4>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-5">
                <a href="addmember"><button type="button" class="btn btn-outline-warning btn-lg"> Member
                        Rotators</button></a>
                <a href="addmember"><button type="button" class="btn btn-outline-warning btn-lg">View Team
                        Performance</button></a>
                <a href="addmember"><button type="button" class="btn btn-outline-warning btn-lg">Add New Member</button></a>
            </div>
        </div>
        {{-- <div class="form-group mr-1">
            <a class="btn btn-primary" href="{{ route('team-members.create') }}">Tambah</a>
        </div> --}}
        <form class="d-flex mt-5">
            <input type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

            <div class="card-body p-0 table-responsive">
                <table class="table table-bordered table-striped table-dark table-hover mb-0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Level</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <?php $no = 1; ?>
                    
                    @foreach ($rows as $row)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->email }}</td>
                            <td>{{ $row->level }}</td>
                            <td>
                                <a class="btn btn-sm btn-warning" href="{{ route('team-members.edit', $row) }}">Ubah</a>
                                <form method="POST" action="{{ route('team-members.destroy', $row) }}"
                                    style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger"
                                        onclick="return confirm('Hapus Data?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
    </body>
@endsection
