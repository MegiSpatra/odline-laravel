@extends('layoutd.main')
@section('dashboard-container')

    <body>
        <h2 class="container text-white ">Account</h2>

            <div class="card mt-4" style="width: 18rem;">
                <?php $no = 1; ?>
                @auth 
                <h5 class="container mt-3">Hi {{ auth()->user()->name }}</h5>
                <ul class="list-group list-group-flush">
                <li class="list-group-item">Level : Admin</li>
                <li class="list-group-item">Nama : {{ auth()->user()->name }}</li>
                  <li class="list-group-item">Email: {{ auth()->user()->email }}</li>
                       
                </ul>

                @endauth 
              </div>
    </body>
@endsection
