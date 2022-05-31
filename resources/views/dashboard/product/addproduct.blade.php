
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
                              <input type="text" name="Price" class="form-control @error('Price') is-invalid @enderror" id="price" placeholder="price" required value="{{ old('price') }}">
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
                            <input type="text" name="paid ratio" class="form-control @error('paid ratio') is-invalid @enderror" id="paid ratio" placeholder="paid ratio" required value="{{ old('paid ratio') }}">
                            <label for="paid ratio">Paid Ratio</label>
                            @error('paid ratio')
                            <div class="invalid-feedback">
                                {{ $message }}
                              </div>                    
                            @enderror
                          </div>
                          <div class="form-floating">
                            <input type="text" name="qty sold" class="form-control @error('qty sold') is-invalid @enderror" id="qty sold" placeholder="qty sold" required value="{{ old('qty sold') }}">
                            <label for="qty sold">Qty Sold</label>
                            @error('qty sold')
                            <div class="invalid-feedback">
                                {{ $message }}
                              </div>                    
                            @enderror
                          </div>
                          <div class="form-floating">
                            <input type="text" name="net revenue" class="form-control @error('net revenue') is-invalid @enderror" id="net revenue" placeholder="net Revenue" required value="{{ old('net revenue') }}">
                            <label for="net revenue">Net Revenue</label>
                            @error('net revenue')
                            <div class="invalid-feedback">
                                {{ $message }}
                              </div>                    
                            @enderror
                          </div>
                          <div class="text-right mb-3 mt-3">
                            <a href="product">
                            <button type="submit"
                                class="btn btn-primary btn-lg">Lanjutkan</button></a>
                        </div>
                      </div>
                  </div>
              </div>
      </div>
  </div>
</form>
@endsection

