
@extends('layoutd.main')
@section('dashboard-container')

<div class="page page-member-creator">
  <div class="container">
      <div class="page-header">
          <h1 class="page-title mt-5 text-white">Add Product</h1>
          <a href="product">kembali ke halaman product..</a>
      </div>
      <div class="page-content">
          <form class="form">
              @csrf
              <div class="card-group mb-3">
                  <div class="card col-lg-4 col-md-12 p-0">
                      <div class="card-body box--md">
                          <h5 class="mb-4">ADD PRODUCT</h5>
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
                              <input type="text" name="Price" class="form-control @error('price') is-invalid @enderror" id="price" placeholder="price" required value="{{ old('price') }}">
                              <label for="price">Price</label>
                              @error('price')
                              <div class="invalid-feedback">
                                  {{ $message }}
                                </div>                    
                              @enderror
                            </div>
                            <div class="form-floating">
                              <input type="text" name="COGS" class="form-control rounded-top @error('COGS') is-invalid @enderror"
                              id="COGS" placeholder="COGS" required value="{{ old('COGS') }}"><label for="cogs">COGS</label>
                              @error('COGS')
                              <div class="invalid-feedback">
                                  {{ $message }}
                                </div>                    
                              @enderror
                          </div>
                            <div class="form-floating">
                              <input type="text" name="iventory" class="form-control rounded-top @error('iventory') is-invalid @enderror"
                              id="Iventory" placeholder="Iventory" required value="{{ old('iventory') }}"><label for="Iventory">Iventory</label>
                              @error('iventory')
                              <div class="invalid-feedback">
                                  {{ $message }}
                                </div>                    
                              @enderror
                          </div>
                          <div class="form-floating">
                            <input type="text" name="order" class="form-control @error('order') is-invalid @enderror" id="Order" placeholder="order" required value="{{ old('order') }}">
                            <label for="order">Order</label>
                            @error('order')
                            <div class="invalid-feedback">
                                {{ $message }}
                              </div>                    
                            @enderror
                          </div>
                          <div class="form-floating">
                            <input type="text" name="paid" class="form-control @error('paid') is-invalid @enderror" id="paid" placeholder="paid" required value="{{ old('paid') }}">
                            <label for="paid">Paid</label>
                            @error('paid')
                            <div class="invalid-feedback">
                                {{ $message }}
                              </div>                    
                            @enderror
                          </div>
                          <div class="form-floating">
                            <input type="text" name="paidratio" class="form-control @error('paidratio') is-invalid @enderror" id="paidratio" placeholder="paidratio" required value="{{ old('paidratio') }}">
                            <label for="paidratio">Paid Ratio</label>
                            @error('paidratio')
                            <div class="invalid-feedback">
                                {{ $message }}
                              </div>                    
                            @enderror
                          </div>
                          <div class="form-floating">
                            <input type="text" name="qtysold" class="form-control @error('qtysold') is-invalid @enderror" id="qtysold" placeholder="qtysold" required value="{{ old('qtysold') }}">
                            <label for="qtysold">Qty Sold</label>
                            @error('qtysold')
                            <div class="invalid-feedback">
                                {{ $message }}
                              </div>                    
                            @enderror
                          </div>
                          <div class="form-floating">
                            <input type="text" name="netrevenue" class="form-control @error('netrevenue') is-invalid @enderror" id="netrevenue" placeholder="netRevenue" required value="{{ old('netrevenue') }}">
                            <label for="netrevenue">Net Revenue</label>
                            @error('netrevenue')
                            <div class="invalid-feedback">
                                {{ $message }}
                              </div>                    
                            @enderror
                          </div>
                          <div class="text-right mb-3 mt-3">
                            <a href="product"><button type="submit" class="btn btn-primary btn-lg">Lanjutkan</button></a>
                        </div>
                      </div>
                  </div>
              </div>
      </div>
  </div>
</form>
@endsection

