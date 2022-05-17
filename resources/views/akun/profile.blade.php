@extends('layoutd.main')
@section('dashboard-container')

    <body>
        <h1>memek</h1>
        <h2 class="container text-white ">Account</h2>

            <div class="card mt-4" style="width: 18rem;">
                <?php $no = 1; ?>
                    
                @foreach ($rows as $row)
              
                <h5 class="container mt-3">Hi {{ $row->name }}</h5>
                    <ul class="list-group list-group-flush">
                <li class="list-group-item">Admin : {{ $no++ }}</li>
                  <li class="list-group-item">Nama : {{ $row->name }}</li>
                  <li class="list-group-item">Email: {{ $row->email }}</li>
                  <li class="list-group-item">{{ $row->level }}</li>>
                      
                </ul>
                @endforeach
              </div>
    </body>
@endsection
