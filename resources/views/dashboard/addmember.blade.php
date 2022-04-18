@extends('layoutd.main')
@section('dashboard-container')

    <div class="row row-cols-0 row-cols-md-15 g-4">
        <div class="col-md-15">
            @if ($errors->any())
                @foreach ($errors->all() as $err)
                    <p class="alert alert-danger">{{ $err }}</p>
                @endforeach
            @endif
            <form action="{{ route('team-members.store') }}" method="POST">
                @csrf
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <div class="page-wrapper">
                                <div class="page page-member-creator">
                                    <div class="container">
                                        <div class="page-header">
                                            <h1 class="page-title mt-5">Add New Member</h1>
                                            <a href="team-members">kembali ke halaman member..</a>
                                        </div>
                                        <div class="page-content">
                                            <form class="form">
                                                @csrf
                                                <div class="card-group mb-3">
                                                    <div class="card col-lg-4 col-md-12 p-0">
                                                        <div class="card-body box--md">
                                                            <h5 class="mb-4">Member Profile</h5>
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
                                                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                                                                <label for="email">Alamat Email</label>
                                                                @error('email')
                                                                  <div class="invalid-feedback">
                                                                      {{ $message }}
                                                                    </div>                    
                                                                  @enderror
                                                              </div>
                                                              <div class="form-floating">
                                                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror rounded-bottom" id="password" placeholder="password" required value="{{ old('password') }}">
                                                                <label for="password">Password</label>
                                                                @error('password')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                  </div>                    
                                                                @enderror
                                                              </div>                                                         </div>
                                                              <div class="form-floating">
                                                                <input type="text" name="NoTelephone" class="form-control @error('NoTelephone') is-invalid @enderror" id="NoTelephone" placeholder="NoTelephone" required value="{{ old('NoTelephone') }}">
                                                                <label for="username">No. Telephone</label>
                                                                @error('NoTelephone')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                  </div>                    
                                                                @enderror
                                                              </div>
                                                              <div class="form-floating">
                                                                <input type="text" name="level" class="form-control rounded-top @error('level') is-invalid @enderror"
                                                                id="level" placeholder="level" required value="{{ old('level') }}"><label for="level">Role</label>
                                                                @error('level')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                  </div>                    
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="card bg-grey col-lg-8 col-md-12 p-0 mt-5">
                                                    <div class="card-body box--md">
                                                        <h5 class="mb-4">Permissions</h5>
                                                        <div class="capabilities">
                                                            <div class="capability">
                                                                <div class="capability-entity">
                                                                    <b>Dashboard</b>
                                                                </div>
                                                                <div class="capability-options">
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <label>
                                                                                <input type="checkbox"
                                                                                    class="input-checkbox input-checkbox-large"
                                                                                    value="dashboard_view">
                                                                                <span></span>
                                                                                <span class="input-checkbox-text">View
                                                                                    Dashboard</span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="capability">
                                                                <div class="capability-entity">
                                                                    <b>Product</b>
                                                                </div>
                                                                <div class="capability-options">
                                                                    <div class="row">
                                                                        <div class="col-lg-3 col-md-6">
                                                                            <label><input type="checkbox"
                                                                                    class="input-checkbox input-checkbox-large"
                                                                                    value="product_add"><span></span>
                                                                                <span class="input-checkbox-text">Create
                                                                                    Product</span>
                                                                            </label>
                                                                        </div>
                                                                        <div class="col-lg-3 col-md-6">
                                                                            <label>
                                                                                <input type="checkbox"
                                                                                    class="input-checkbox input-checkbox-large"
                                                                                    value="product_view">
                                                                                <span></span>
                                                                                <span class="input-checkbox-text">View
                                                                                    Product</span>
                                                                            </label>
                                                                        </div>
                                                                        <div class="col-lg-3 col-md-6">
                                                                            <label>
                                                                                <input type="checkbox"
                                                                                    class="input-checkbox input-checkbox-large"
                                                                                    value="product_edit">
                                                                                <span></span>
                                                                                <span class="input-checkbox-text">Edit
                                                                                    Product</span>
                                                                            </label>
                                                                        </div>
                                                                        <div class="col-lg-3 col-md-6">
                                                                            <label>
                                                                                <input type="checkbox"
                                                                                    class="input-checkbox input-checkbox-large"
                                                                                    value="product_delete"><span></span>
                                                                                <span class="input-checkbox-text">Delete
                                                                                    Product</span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="capability">
                                                                <div class="capability-entity">
                                                                    <b>Orders</b>
                                                                </div>
                                                                <div class="capability-options">
                                                                    <div class="row">

                                                                        <div class="col-lg-6">
                                                                            <label>
                                                                                <input type="checkbox"
                                                                                    class="input-checkbox input-checkbox-large"
                                                                                    value="order_view"><span></span>
                                                                                <span class="input-checkbox-text">View
                                                                                    Orders</span>
                                                                            </label>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <label>
                                                                                <input type="checkbox"
                                                                                    class="input-checkbox input-checkbox-large"
                                                                                    value="order_delete"><span></span>
                                                                                <span class="input-checkbox-text">Delete
                                                                                    Order</span>
                                                                            </label>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <label>
                                                                                <input type="checkbox"
                                                                                    class="input-checkbox input-checkbox-large"
                                                                                    value="order_edit"><span></span>
                                                                                <span class="input-checkbox-text">Edit
                                                                                    Order</span>
                                                                            </label>
                                                                            <div class="well mb-3 mt-3">
                                                                                <div class="container-fluid">
                                                                                    <div class="row">
                                                                                        <div
                                                                                            class="col-lg-4 col-md-6 col-6 p-0">
                                                                                            <label>
                                                                                                <input type="checkbox"
                                                                                                    class="input-checkbox"
                                                                                                    value="order_edit_phone"><span></span>
                                                                                                <span
                                                                                                    class="input-checkbox-text">
                                                                                                    Customers Phone</span>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>



                                                                        <div class="capability">
                                                                            <div class="capability-entity">
                                                                                <b>Coupons</b>
                                                                            </div>
                                                                            <div class="capability-options">
                                                                                <div class="row">
                                                                                    <div class="col-lg-3 col-md-6"><label>
                                                                                            <input type="checkbox"
                                                                                                class="input-checkbox input-checkbox-large"
                                                                                                value="coupon_add"><span></span>
                                                                                            <span
                                                                                                class="input-checkbox-text">Create
                                                                                                Coupon</span>
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-lg-3 col-md-6">
                                                                                        <label>
                                                                                            <input type="checkbox"
                                                                                                class="input-checkbox input-checkbox-large"
                                                                                                value="coupon_view"><span></span>
                                                                                            <span
                                                                                                class="input-checkbox-text">View
                                                                                                Coupon</span>
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-lg-3 col-md-6">
                                                                                        <label>
                                                                                            <input type="checkbox"
                                                                                                class="input-checkbox input-checkbox-large"
                                                                                                value="coupon_edit"><span></span>
                                                                                            <span
                                                                                                class="input-checkbox-text">Edit
                                                                                                Coupon</span>
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-lg-3 col-md-6">
                                                                                        <label>
                                                                                            <input type="checkbox"
                                                                                                class="input-checkbox input-checkbox-large"
                                                                                                value="coupon_delete"><span></span>
                                                                                            <span
                                                                                                class="input-checkbox-text">Delete
                                                                                                Coupon</span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="capability">
                                                                            <div class="capability-entity">
                                                                                <b>Payments</b>
                                                                            </div>
                                                                            <div class="capability-options">
                                                                                <div class="row">
                                                                                    <div class="col-lg-3 col-md-6">
                                                                                        <label>
                                                                                            <input type="checkbox"
                                                                                                class="input-checkbox input-checkbox-large"
                                                                                                value="payment_view"><span></span>
                                                                                            <span
                                                                                                class="input-checkbox-text">View
                                                                                                Payment</span>
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-lg-3 col-md-6"><label>
                                                                                            <input type="checkbox"
                                                                                                class="input-checkbox input-checkbox-large"
                                                                                                value="payment_update"><span></span>
                                                                                            <span
                                                                                                class="input-checkbox-text">Update
                                                                                                Payment</span>
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-lg-3 col-md-6">
                                                                                        <label>
                                                                                            <input type="checkbox"
                                                                                                class="input-checkbox input-checkbox-large"
                                                                                                value="payment_delete"><span></span>
                                                                                            <span
                                                                                                class="input-checkbox-text">Delete
                                                                                                Payment</span>
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-lg-3 col-md-6">
                                                                                        <label>
                                                                                            <input type="checkbox"
                                                                                                class="input-checkbox input-checkbox-large"
                                                                                                value="payment_page_edit"><span></span>
                                                                                            <span
                                                                                                class="input-checkbox-text">Payment
                                                                                                Page</span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="capability">
                                                                            <div class="capability-entity">
                                                                                <b>Expenses</b>
                                                                            </div>
                                                                            <div class="capability-options">
                                                                                <div class="row">
                                                                                    <div class="col-lg-3 col-md-6">
                                                                                        <label>
                                                                                            <input type="checkbox"
                                                                                                class="input-checkbox input-checkbox-large"
                                                                                                value="expense_add"><span></span>
                                                                                            <span
                                                                                                class="input-checkbox-text">Create
                                                                                                Expense</span>
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-lg-3 col-md-6">
                                                                                        <label>
                                                                                            <input type="checkbox"
                                                                                                class="input-checkbox input-checkbox-large"
                                                                                                value="expense_view"><span></span>
                                                                                            <span
                                                                                                class="input-checkbox-text">View
                                                                                                Expense</span>
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-lg-3 col-md-6">
                                                                                        <label>
                                                                                            <input type="checkbox"
                                                                                                class="input-checkbox input-checkbox-large"
                                                                                                value="expense_edit"><span></span>
                                                                                            <span
                                                                                                class="input-checkbox-text">Edit
                                                                                                Expense</span>
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-lg-3 col-md-6">
                                                                                        <label>
                                                                                            <input type="checkbox"
                                                                                                class="input-checkbox input-checkbox-large"
                                                                                                value="expense_delete"><span></span>
                                                                                            <span
                                                                                                class="input-checkbox-text">Delete
                                                                                                Expense</span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="capability">
                                                                            <div class="capability-entity">
                                                                                <b>Team Members</b>
                                                                            </div>
                                                                            <div class="capability-options">
                                                                                <div class="row">
                                                                                    <div class="col-lg-3 col-md-6">
                                                                                        <label>
                                                                                            <input type="checkbox"
                                                                                                class="input-checkbox input-checkbox-large"
                                                                                                value="team_member_add"><span>
                                                                                            </span><span
                                                                                                class="input-checkbox-text">Add
                                                                                                Member</span>
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-lg-3 col-md-6">
                                                                                        <label>
                                                                                            <input type="checkbox"
                                                                                                class="input-checkbox input-checkbox-large"
                                                                                                value="team_member_view"><span></span>
                                                                                            <span
                                                                                                class="input-checkbox-text">View
                                                                                                Members</span>
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-lg-3 col-md-6">
                                                                                        <label>
                                                                                            <input type="checkbox"
                                                                                                class="input-checkbox input-checkbox-large"
                                                                                                value="team_member_edit"><span></span>
                                                                                            <span
                                                                                                class="input-checkbox-text">Update
                                                                                                Member</span>
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-lg-3 col-md-6">
                                                                                        <label>
                                                                                            <input type="checkbox"
                                                                                                class="input-checkbox input-checkbox-large"
                                                                                                value="team_member_delete"><span></span>
                                                                                            <span
                                                                                                class="input-checkbox-text">Delete
                                                                                                Member</span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="capability">
                                                                            <div class="capability-entity">
                                                                                <b>Resellers</b>
                                                                            </div>
                                                                            <div class="capability-options">
                                                                                <div class="row">
                                                                                    <div class="col-lg-3 col-md-6">
                                                                                        <label>
                                                                                            <input type="checkbox"
                                                                                                class="input-checkbox input-checkbox-large"
                                                                                                value="reseller_add"><span></span>
                                                                                            <span
                                                                                                class="input-checkbox-text">Add
                                                                                                Reseller</span>
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-lg-3 col-md-6"><label>
                                                                                            <input type="checkbox"
                                                                                                class="input-checkbox input-checkbox-large"
                                                                                                value="reseller_view"><span></span>
                                                                                            <span
                                                                                                class="input-checkbox-text">View
                                                                                                Resellers</span>
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-lg-3 col-md-6">
                                                                                        <label>
                                                                                            <input type="checkbox"
                                                                                                class="input-checkbox input-checkbox-large"
                                                                                                value="reseller_edit"><span></span>
                                                                                            <span
                                                                                                class="input-checkbox-text">Update
                                                                                                Reseller</span>
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-lg-3 col-md-6">
                                                                                        <label>
                                                                                            <input type="checkbox"
                                                                                                class="input-checkbox input-checkbox-large"
                                                                                                value="reseller_delete"><span></span>
                                                                                            <span
                                                                                                class="input-checkbox-text">Delete
                                                                                                Reseller</span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-lg-3 col-md-6">
                                                                                        <label>
                                                                                            <input type="checkbox"
                                                                                                class="input-checkbox input-checkbox-large"
                                                                                                value="reseller_tier_add"><span></span>
                                                                                            <span
                                                                                                class="input-checkbox-text">Add
                                                                                                Reseller Tier</span>
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-lg-3 col-md-6">
                                                                                        <label>
                                                                                            <input type="checkbox"
                                                                                                class="input-checkbox input-checkbox-large"
                                                                                                value="reseller_tier_view"><span></span>
                                                                                            <span
                                                                                                class="input-checkbox-text">View
                                                                                                Reseller Tiers</span>
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-lg-3 col-md-6">
                                                                                        <label>
                                                                                            <input type="checkbox"
                                                                                                class="input-checkbox input-checkbox-large"
                                                                                                value="reseller_tier_edit"><span></span>
                                                                                            <span
                                                                                                class="input-checkbox-text">Update
                                                                                                Reseller Tier</span>
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-lg-3 col-md-6">
                                                                                        <label>
                                                                                            <input type="checkbox"
                                                                                                class="input-checkbox input-checkbox-large"
                                                                                                value="reseller_tier_delete"><span></span>
                                                                                            <span
                                                                                                class="input-checkbox-text">Delete
                                                                                                Reseller Tier</span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-lg-3 col-md-6">
                                                                                        <label>
                                                                                            <input type="checkbox"
                                                                                                class="input-checkbox input-checkbox-large"
                                                                                                value="reseller_reward_add"><span></span>
                                                                                            <span
                                                                                                class="input-checkbox-text">Add
                                                                                                Reseller Reward</span>
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-lg-3 col-md-6">
                                                                                        <label>
                                                                                            <input type="checkbox"
                                                                                                class="input-checkbox input-checkbox-large"
                                                                                                value="reseller_reward_view"><span></span>
                                                                                            <span
                                                                                                class="input-checkbox-text">View
                                                                                                Reseller Rewards</span>
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-lg-3 col-md-6">
                                                                                        <label>
                                                                                            <input type="checkbox"
                                                                                                class="input-checkbox input-checkbox-large"
                                                                                                value="reseller_reward_edit"><span></span>
                                                                                            <span
                                                                                                class="input-checkbox-text">Update
                                                                                                Reseller Reward</span>
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-lg-3 col-md-6">
                                                                                        <label>
                                                                                            <input type="checkbox"
                                                                                                class="input-checkbox input-checkbox-large"
                                                                                                value="reseller_reward_delete"><span></span>
                                                                                            <span
                                                                                                class="input-checkbox-text">Delete
                                                                                                Reward Reseller</span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="capability">
                                                                            <div class="capability-entity">
                                                                                <b>Reports</b>
                                                                            </div>
                                                                            <div class="capability-options">
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                        <label>
                                                                                            <input type="checkbox"
                                                                                                class="input-checkbox input-checkbox-large"
                                                                                                value="report_team"><span></span>
                                                                                            <span
                                                                                                class="input-checkbox-text">View
                                                                                                Team Reports</span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="capability">
                                                                            <div class="capability-entity">
                                                                                <b>Statistics</b>
                                                                            </div>
                                                                            <div class="capability-options">
                                                                                <div class="row">
                                                                                    <div class="col-lg-3 col-md-4">
                                                                                        <label>
                                                                                            <input type="checkbox"
                                                                                                class="input-checkbox input-checkbox-large"
                                                                                                value="statistic_submission_count"><span></span>
                                                                                            <span
                                                                                                class="input-checkbox-text">View
                                                                                                Total Orders</span>
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-lg-3 col-md-4">
                                                                                        <label>
                                                                                            <input type="checkbox"
                                                                                                class="input-checkbox input-checkbox-large"
                                                                                                value="statistic_transaction_count"><span></span>
                                                                                            <span
                                                                                                class="input-checkbox-text">View
                                                                                                Total Paid</span>
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-lg-3 col-md-4">
                                                                                        <label>
                                                                                            <input type="checkbox"
                                                                                                class="input-checkbox input-checkbox-large"
                                                                                                value="statistic_paid_ratio"><span></span>
                                                                                            <span
                                                                                                class="input-checkbox-text">View
                                                                                                Paid Ratio</span>
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-lg-3 col-md-4">
                                                                                        <label>
                                                                                            <input type="checkbox"
                                                                                                class="input-checkbox input-checkbox-large"
                                                                                                value="statistic_unpaid_count"><span></span>
                                                                                            <span
                                                                                                class="input-checkbox-text">View
                                                                                                Unpaid Orders</span>
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-lg-3 col-md-4">
                                                                                        <label>
                                                                                            <input type="checkbox"
                                                                                                class="input-checkbox input-checkbox-large"
                                                                                                value="statistic_cogs"><span></span>
                                                                                            <span
                                                                                                class="input-checkbox-text">View
                                                                                                COGS</span>
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-lg-3 col-md-4">
                                                                                        <label>
                                                                                            <input type="checkbox"
                                                                                                class="input-checkbox input-checkbox-large"
                                                                                                value="statistic_unpaid_revenue"><span></span>
                                                                                            <span
                                                                                                class="input-checkbox-text">View
                                                                                                Unpaid Revenue</span>
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-lg-3 col-md-4">
                                                                                        <label>
                                                                                            <input type="checkbox"
                                                                                                class="input-checkbox input-checkbox-large"
                                                                                                value="statistic_bump_count"><span></span>
                                                                                            <span
                                                                                                class="input-checkbox-text">View
                                                                                                Bump Orders</span>
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-lg-3 col-md-4">
                                                                                        <label>
                                                                                            <input type="checkbox"
                                                                                                class="input-checkbox input-checkbox-large"
                                                                                                value="statistic_bump_revenue"><span></span>
                                                                                            <span
                                                                                                class="input-checkbox-text">View
                                                                                                Bump Revenue</span>
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-lg-3 col-md-4">
                                                                                        <label>
                                                                                            <input type="checkbox"
                                                                                                class="input-checkbox input-checkbox-large"
                                                                                                value="statistic_coupon_discount_claimed"><span></span>
                                                                                            <span
                                                                                                class="input-checkbox-text">View
                                                                                                Discount Claim</span>
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-lg-3 col-md-4">
                                                                                        <label>
                                                                                            <input type="checkbox"
                                                                                                class="input-checkbox input-checkbox-large"
                                                                                                value="statistic_shipping_cost"><span></span>
                                                                                            <span
                                                                                                class="input-checkbox-text">View
                                                                                                Shipping Cost</span>
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-lg-3 col-md-4">
                                                                                        <label>
                                                                                            <input type="checkbox"
                                                                                                class="input-checkbox input-checkbox-large"
                                                                                                value="statistic_gross_revenue"><span></span>
                                                                                            <span
                                                                                                class="input-checkbox-text">View
                                                                                                Gross Revenue</span>
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-lg-3 col-md-4">
                                                                                        <label>
                                                                                            <input type="checkbox"
                                                                                                class="input-checkbox input-checkbox-large"
                                                                                                value="statistic_net_revenue"><span></span>
                                                                                            <span
                                                                                                class="input-checkbox-text">View
                                                                                                Net Revenue</span>
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-lg-3 col-md-4">
                                                                                        <label>
                                                                                            <input type="checkbox"
                                                                                                class="input-checkbox input-checkbox-large"
                                                                                                value="statistic_gross_profit"><span></span>
                                                                                            <span
                                                                                                class="input-checkbox-text">View
                                                                                                Gross Profit</span>
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-lg-3 col-md-4">
                                                                                        <label>
                                                                                            <input type="checkbox"
                                                                                                class="input-checkbox input-checkbox-large"
                                                                                                value="statistic_net_profit"><span></span>
                                                                                            <span
                                                                                                class="input-checkbox-text">View
                                                                                                Net Profit</span>
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-lg-3 col-md-4">
                                                                                        <label>
                                                                                            <input type="checkbox"
                                                                                                class="input-checkbox input-checkbox-large"
                                                                                                value="statistic_expense"><span></span>
                                                                                            <span
                                                                                                class="input-checkbox-text">View
                                                                                                Expenses</span>
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-lg-3 col-md-4">
                                                                                        <label>
                                                                                            <input type="checkbox"
                                                                                                class="input-checkbox input-checkbox-large"
                                                                                                value="statistic_quantity"><span></span>
                                                                                            <span
                                                                                                class="input-checkbox-text">View
                                                                                                Quantity Sold</span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="capability">
                                                                            <div class="capability-entity">
                                                                                <b>Logistics</b>
                                                                            </div>
                                                                            <div class="capability-options">
                                                                                <div class="row">
                                                                                    <div class="col-md-3">
                                                                                        <label>
                                                                                            <input type="checkbox"
                                                                                                class="input-checkbox input-checkbox-large"
                                                                                                value="logistic_pickup"><span></span>
                                                                                            <span
                                                                                                class="input-checkbox-text">Logistic
                                                                                                Pickup</span>
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <label>
                                                                                            <input type="checkbox"
                                                                                                class="input-checkbox input-checkbox-large"
                                                                                                value="logistic_shipments"><span></span>
                                                                                            <span
                                                                                                class="input-checkbox-text">View
                                                                                                Shipments</span>
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <label>
                                                                                            <input type="checkbox"
                                                                                                class="input-checkbox input-checkbox-large"
                                                                                                value="logistic_report"><span></span>
                                                                                            <span
                                                                                                class="input-checkbox-text">View
                                                                                                Report</span>
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <label>
                                                                                            <input type="checkbox"
                                                                                                class="input-checkbox input-checkbox-large"
                                                                                                value="logistic_monitor">
                                                                                            <span>
                                                                                            </span>
                                                                                            <span
                                                                                                class="input-checkbox-text">Monitoring</span></label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="capability">
                                                                            <div class="capability-entity">
                                                                                <b>Billings</b>
                                                                            </div>
                                                                            <div class="capability-options">
                                                                                <div class="row">
                                                                                    <div class="col-md-3">
                                                                                        <label>
                                                                                            <input type="checkbox"
                                                                                                class="input-checkbox input-checkbox-large"
                                                                                                value="billings_view"><span></span>
                                                                                            <span
                                                                                                class="input-checkbox-text">View
                                                                                                Billings</span>
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <label>
                                                                                            <input type="checkbox"
                                                                                                class="input-checkbox input-checkbox-large"
                                                                                                value="billings_confirm"><span></span>
                                                                                            <span
                                                                                                class="input-checkbox-text">Confirm
                                                                                                Billings</span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="capability">
                                                                            <div class="capability-entity">
                                                                                <b>Credits</b>
                                                                            </div>
                                                                            <div class="capability-options">
                                                                                <div class="row">
                                                                                    <div class="col-md-3">
                                                                                        <label>
                                                                                            <input type="checkbox"
                                                                                                class="input-checkbox input-checkbox-large"
                                                                                                value="wallet_view"><span></span>
                                                                                            <span
                                                                                                class="input-checkbox-text">View
                                                                                                Credits</span>
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <label>
                                                                                            <input type="checkbox"
                                                                                                class="input-checkbox input-checkbox-large"
                                                                                                value="wallet_withdraw"><span></span>
                                                                                            <span
                                                                                                class="input-checkbox-text">Withdraw
                                                                                                Credits</span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="capability">
                                                                            <div class="capability-entity">
                                                                                <b>Collections</b>
                                                                            </div>
                                                                            <div class="capability-options">
                                                                                <div class="row">
                                                                                    <div class="col-md-3">
                                                                                        <label>
                                                                                            <input type="checkbox"
                                                                                                class="input-checkbox input-checkbox-large"
                                                                                                value="collections_view"><span></span>
                                                                                            <span
                                                                                                class="input-checkbox-text">View
                                                                                                Collections</span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="capability">
                                                                            <div class="capability-entity">
                                                                                <b>Funnels</b>
                                                                            </div>
                                                                            <div class="capability-options">
                                                                                <div class="row">
                                                                                    <div class="col-md-3">
                                                                                        <label>
                                                                                            <input type="checkbox"
                                                                                                class="input-checkbox input-checkbox-large"
                                                                                                value="funnels_add"><span></span>
                                                                                            <span
                                                                                                class="input-checkbox-text">Create
                                                                                                Funnel</span>
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <label>
                                                                                            <input type="checkbox"
                                                                                                class="input-checkbox input-checkbox-large"
                                                                                                value="funnels_view"><span></span>
                                                                                            <span
                                                                                                class="input-checkbox-text">View
                                                                                                Funnel</span>
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <label>
                                                                                            <input type="checkbox"
                                                                                                class="input-checkbox input-checkbox-large"
                                                                                                value="funnels_edit"><span></span>
                                                                                            <span
                                                                                                class="input-checkbox-text">Edit
                                                                                                Funnel</span>
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <label>
                                                                                            <input type="checkbox"
                                                                                                class="input-checkbox input-checkbox-large"
                                                                                                value="funnels_delete"><span></span>
                                                                                            <span
                                                                                                class="input-checkbox-text">Delete
                                                                                                Funnel</span>
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <label>
                                                                                            <input type="checkbox"
                                                                                                class="input-checkbox input-checkbox-large"
                                                                                                value="funnel_pages_add"><span></span>
                                                                                            <span
                                                                                                class="input-checkbox-text">Create
                                                                                                Funnel Page</span>
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <label>
                                                                                            <input type="checkbox"
                                                                                                class="input-checkbox input-checkbox-large"
                                                                                                value="funnel_pages_view"><span></span>
                                                                                            <span
                                                                                                class="input-checkbox-text">View
                                                                                                Funnel Page</span>
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <label>
                                                                                            <input type="checkbox"
                                                                                                class="input-checkbox input-checkbox-large"
                                                                                                value="funnel_pages_edit"><span></span>
                                                                                            <span
                                                                                                class="input-checkbox-text">Edit
                                                                                                Funnel Page</span>
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <label>
                                                                                            <input type="checkbox"
                                                                                                class="input-checkbox input-checkbox-large"
                                                                                                value="funnel_pages_delete"><span></span>
                                                                                            <span
                                                                                                class="input-checkbox-text">Delete
                                                                                                Funnel Page</span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="capability">
                                                                            <div class="capability-entity">
                                                                                <b>Rotators</b>
                                                                            </div>
                                                                            <div class="capability-options">
                                                                                <div class="row">
                                                                                    <div class="col-md-3">
                                                                                        <label>
                                                                                            <input type="checkbox"
                                                                                                class="input-checkbox input-checkbox-large"
                                                                                                value="rotator_add"><span></span>
                                                                                            <span
                                                                                                class="input-checkbox-text">Create
                                                                                                Rotator</span>
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <label>
                                                                                            <input type="checkbox"
                                                                                                class="input-checkbox input-checkbox-large"
                                                                                                value="rotator_view"><span></span>
                                                                                            <span
                                                                                                class="input-checkbox-text">View
                                                                                                Rotator</span>
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <label>
                                                                                            <input type="checkbox"
                                                                                                class="input-checkbox input-checkbox-large"
                                                                                                value="rotator_edit"><span></span>
                                                                                            <span
                                                                                                class="input-checkbox-text">Edit
                                                                                                Rotator</span>
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <label>
                                                                                            <input type="checkbox"
                                                                                                class="input-checkbox input-checkbox-large"
                                                                                                value="rotator_delete"><span></span>
                                                                                            <span
                                                                                                class="input-checkbox-text">Delete
                                                                                                Rotator</span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="text-right mb-3 mt-5">
                                                            <button type="submit"
                                                                class="btn btn-primary btn-lg">Save</button>
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
