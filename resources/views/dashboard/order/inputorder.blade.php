@extends('layoutd.main')
@section('dashboard-container')

    <div class="row row-cols-0 row-cols-md-15 g-4">
        <div class="col-md-15">
            @if ($errors->any())
                @foreach ($errors->all() as $err)
                    <p class="alert alert-danger">{{ $err }}</p>
                @endforeach
            @endif
            <form action="{{ route('orders.store') }}" method="POST">
                @csrf
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <div class="page-wrapper">
                                <div class="page page-member-creator">
                                    <div class="container">
                                        <div class="page-header">
                                            <h1 class="page-title mt-5">Input Orders</h1>
                                            <a href="">kembali ke halaman orders</a>
                                        </div>
                                        <div class="page-content">
                                            <form class="form">
                                                @csrf
                                                <div class="card-group mb-3">
                                                    <div class="card col-lg-4 col-md-12 p-0">
                                                        <div class="card-body box--md">
                                                            <h5 class="mb-4">Orders</h5>
                                                            <div class="form-floating">
                                                                <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror"
                                                                id="name" placeholder="name" required value="{{ old('name') }}"><label for="name">Name</label>
                                                                @error('name')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                  </div>                    
                                                                @enderror
                                                            </div>
                                                            <div class="form-floating">
                                                                <input type="text" name="city" class="form-control @error('city') is-invalid @enderror" id="city" placeholder="city" required value="{{ old('city') }}">
                                                                <label for="city">city</label>
                                                                @error('city')
                                                                  <div class="invalid-feedback">
                                                                      {{ $message }}
                                                                    </div>                    
                                                                  @enderror
                                                              </div>
                                                              <div class="form-floating">
                                                                <input type="text" name="status" class="form-control @error('status') is-invalid @enderror rounded-bottom" id="status" placeholder="status" required value="{{ old('status') }}">
                                                                <label for="status">status</label>
                                                                @error('status')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                  </div>                    
                                                                @enderror
                                                              </div>                                     
                                                              <div class="form-floating">
                                                                <input type="text" name="paymentstatus" class="form-control @error('paymentstatus') is-invalid @enderror rounded-bottom" id="paymentstatus" placeholder="paymentstatus" required value="{{ old('paymentstatus') }}">
                                                                <label for="paymentstatus">paymentstatus</label>
                                                                @error('paymentstatus')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                  </div>                    
                                                                @enderror
                                                              </div>                                     
                                                              <div class="form-floating">
                                                                <input type="date" name="date" class="form-control @error('date') is-invalid @enderror" id="date" placeholder="date" required value="{{ old('date') }}">
                                                                <label for="date">date</label>
                                                                @error('date')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                  </div>                    
                                                                @enderror
                                                              </div>
                                                              <div class="form-floating">
                                                                <input type="text" name="grossrevenue" class="form-control @error('grossrevenue') is-invalid @enderror" id="grossrevenue" placeholder="grossrevenue" required value="{{ old('grossrevenue') }}">
                                                                <label for="grossrevenue">gross revenue</label>
                                                                @error('grossrevenue')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                  </div>                    
                                                                @enderror
                                                              </div>
                                                              <div class="form-floating">
                                                                <input type="text" name="follow_up" class="form-control @error('follow_up') is-invalid @enderror" id="follow_up" placeholder="follow_up" required value="{{ old('follow_up') }}">
                                                                <label for="follow_up">follow_up</label>
                                                                @error('follow_up')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                  </div>                    
                                                                @enderror
                                                              </div>
                                                              <div class="form-floating">
                                                                <input type="text" name="actions" class="form-control @error('actions') is-invalid @enderror" id="actions" placeholder="actions" required value="{{ old('actions') }}">
                                                                <label for="actions">actions</label>
                                                                @error('actions')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                  </div>                    
                                                                @enderror
                                                              </div>
                                                              <div class="text-right mb-3 mt-5">
                                                                <button type="submit"
                                                                    class="btn btn-primary btn-lg">Save</button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                        </div>
                                    </div>
            </form>
        </div>
    </div>
    </div>
    <div class="notifications" style="width: 300px; bottom: 0px; right: 0px;"><span></span>
    </div>
    </div>
    </div>
    </div>
    </div>

    </div>
@endsection
