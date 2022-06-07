@extends('layoutd.main')
@section('dashboard-container')

    <div class="row row-cols-0 row-cols-md-15 g-4">
        <div class="col-md-15">
            @if ($errors->any())
                @foreach ($errors->all() as $err)
                    <p class="alert alert-danger">{{ $err }}</p>
                @endforeach
            @endif
            <form action="{{ route('product.store') }}" method="POST">
                @csrf
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <div class="page-wrapper">
                                <div class="page page-member-creator">
                                    <div class="container">
                                        <div class="page-header">
                                            <h1 class="page-title mt-5">Add product</h1>
                                            <a href="team-members">kembali ke halaman member..</a>
                                        </div>
                                        <div class="page-content">
                                            <form class="form">
                                                @csrf
                                                <div class="card-group mb-3">
                                                    <div class="card col-lg-4 col-md-12 p-0">
                                                        <div class="card-body box--md">
                                                            <h5 class="mb-4">Product</h5>
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
                                                                <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" id="price" placeholder="price" required value="{{ old('price') }}">
                                                                <label for="price">price</label>
                                                                @error('price')
                                                                  <div class="invalid-feedback">
                                                                      {{ $message }}
                                                                    </div>                    
                                                                  @enderror
                                                              </div>
                                                              <div class="form-floating">
                                                                <input type="text" name="COGS" class="form-control @error('COGS') is-invalid @enderror rounded-bottom" id="COGS" placeholder="COGS" required value="{{ old('COGS') }}">
                                                                <label for="COGS">COGS</label>
                                                                @error('COGS')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                  </div>                    
                                                                @enderror
                                                              </div>                   
                                                              <div class="form-floating">
                                                                <input type="text" name="inventory" class="form-control @error('inventory') is-invalid @enderror rounded-bottom" id="inventory" placeholder="inventory" required value="{{ old('inventory') }}">
                                                                <label for="inventory">inventory</label>
                                                                @error('inventory')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                  </div>                    
                                                                @enderror
                                                              </div>                   
                                                              <div class="form-floating">
                                                                <input type="text" name="order" class="form-control @error('order') is-invalid @enderror" id="order" placeholder="order" required value="{{ old('order') }}">
                                                                <label for="order">order</label>
                                                                @error('order')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                  </div>                    
                                                                @enderror
                                                              </div>
                                                              <div class="form-floating">
                                                                <input type="text" name="paidratio" class="form-control @error('paidratio') is-invalid @enderror" id="paidratio" placeholder="paidratio" required value="{{ old('paidratio') }}">
                                                                <label for="paidratio">paidratio</label>
                                                                @error('paidratio')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                  </div>                    
                                                                @enderror
                                                              </div>
                                                              <div class="form-floating">
                                                                <input type="text" name="qtysold" class="form-control @error('qtysold') is-invalid @enderror" id="qtysold" placeholder="qtysold" required value="{{ old('qtysold') }}">
                                                                <label for="qtysold">qtysold</label>
                                                                @error('qtysold')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                  </div>                    
                                                                @enderror
                                                              </div>
                                                              <div class="form-floating">
                                                                <input type="text" name="netrevenue" class="form-control @error('netrevenue') is-invalid @enderror" id="netrevenue" placeholder="netrevenue" required value="{{ old('netrevenue') }}">
                                                                <label for="netrevenue">netrevenue</label>
                                                                @error('netrevenue')
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
