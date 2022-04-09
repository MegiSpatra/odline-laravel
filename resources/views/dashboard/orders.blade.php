@extends('layoutd.main')
@section('dashboard-container')

<main class="main"><!----><!----><div class="container orders-container"><div class="page page-orders"><div class="page-header"><h1 class="page-title">Orders</h1><div class="row mt-3"><div class="col-md-9"><div class="form-inline"><div tabindex="-1" class="multiselect page-header__select orders-products-list multiselect-auto-width form-control"><div class="multiselect__select"></div>  <div class="multiselect__tags"><div class="multiselect__tags-wrap" style="display: none;"></div> <!----> <div class="multiselect__spinner" style="display: none;"></div> <input name="" type="text" autocomplete="nope" placeholder="Select Product" tabindex="0" class="multiselect__input" style="width: 0px; position: absolute; padding: 0px;"> <!----> <span class="multiselect__placeholder">
    Select Product
  </span></div> <div tabindex="-1" class="multiselect__content-wrapper" style="max-height: 300px; display: none;"><ul class="multiselect__content" style="display: block;"> <!---->  <li style="display: none;"><span class="multiselect__option"><span>No products found</span></span></li> <li><span class="multiselect__option">List is empty.</span></li> </ul></div></div><div tabindex="-1" class="multiselect page-header__select orders-forms-list multiselect-auto-width form-control"><div class="multiselect__select"></div>  <div class="multiselect__tags"><div class="multiselect__tags-wrap" style="display: none;"></div> <!----> <div class="multiselect__spinner" style="display: none;"></div> <input name="" type="text" autocomplete="nope" placeholder="Select Checkout Page" tabindex="0" class="multiselect__input" style="width: 0px; position: absolute; padding: 0px;"> <span class="multiselect__single">All Checkout Pages</span> <!----></div> <div tabindex="-1" class="multiselect__content-wrapper" style="max-height: 300px; display: none;"><ul class="multiselect__content" style="display: inline-block;"> <!----> <li class="multiselect__element"><span data-select="" data-selected="" data-deselect="" class="multiselect__option multiselect__option--highlight multiselect__option--selected"><span>All Checkout Pages</span></span> <!----></li> <li style="display: none;"><span class="multiselect__option"><span>No checkout page found</span></span></li> <li style="display: none;"><span class="multiselect__option">List is empty.</span></li> </ul></div></div></div></div><div class="col-md-3"><div class="page-header-right text-right"><div data-v-763c82b9="" class="calendar-root"><div data-v-763c82b9="" class="input-date input-date-pill form-control"><i data-v-763c82b9="" class="material-icons">date_range</i><span data-v-763c82b9="" class="label">Last 30 Days</span></div><!----></div></div></div></div></div><div class="submissions-summaries"><div class="overviews"><div class="row"><div class="col-sm-6 col-md-3"><div class="overview box box--primary"><div class="overview__number overview__number--normal">
  0
</div><div class="overview__label"><div class="overview__label__name"><!----><svg class="feather mr-2" style="color: rgb(0, 152, 218);"><use xlink:href="/icons/feather-sprite.svg#shopping-cart"></use></svg><span class="overview__text">Total Orders</span><!----></div><!----></div></div></div><div class="col-sm-6 col-md-3"><div class="overview box box--primary"><div class="overview__number overview__number--normal">
  0
</div><div class="overview__label"><div class="overview__label__name"><!----><svg class="feather mr-2" style="color: rgb(60, 184, 120);"><use xlink:href="/icons/feather-sprite.svg#credit-card"></use></svg><span class="overview__text">Total Paid</span><!----></div><!----></div></div></div><div class="col-sm-6 col-md-3"><div class="overview box box--primary"><div class="overview__number overview__number--percentage">
  0%
</div><div class="overview__label"><div class="overview__label__name"><!----><svg class="feather mr-2" style="color: rgb(51, 51, 51);"><use xlink:href="/icons/feather-sprite.svg#percent"></use></svg><span class="overview__text">Paid Ratio</span><!----></div><!----></div></div></div><div class="col-sm-6 col-md-3"><div class="overview box box--primary"><div class="overview__number overview__number--normal">
  0
</div><div class="overview__label"><div class="overview__label__name"><!----><svg class="feather mr-2" style="color: rgb(222, 179, 23);"><use xlink:href="/icons/feather-sprite.svg#shopping-cart"></use></svg><span class="overview__text">Unpaid Orders</span><i class="overview__info material-icons info has-tooltip" data-original-title="null">info</i></div><!----></div></div></div></div></div></div><div class="flex-center flex-wrap"><button class="btn btn-primary mr-2 mb-3 d-flex align-items-center"><i class="material-icons">add</i><span>Input Order</span></button><div class="dropdown mr-2 mb-3"><button data-toggle="dropdown" class="btn btn-light dropdown-toggle flex-center" aria-expanded="false"><i class="material-icons">save_alt</i><span class="mr-2">Export</span></button><div class="dropdown-menu" x-placement="top-start" style="position: absolute; transform: translate3d(0px, -2px, 0px); top: 0px; left: 0px; will-change: transform;"><button type="button" class="dropdown-item">
                  Export as CSV
              </button><button type="button" class="dropdown-item">
                  Export Order ID
              </button><button type="button" class="dropdown-item">
                  Facebook Customer File
              </button><button type="button" class="dropdown-item">
                  Facebook Customer File with LTV
              </button><button type="button" class="dropdown-item">
                  Facebook Offline Conversion
              </button></div></div><button type="button" class="btn btn-icon btn-light mr-2 mb-3"><svg aria-hidden="true" width="16" height="16" viewBox="0 0 512 512" focusable="false" class="fa-icon" scala="1.1"><path d="M0 448v-384h18v384h-18zM26.9 447.7v-383.7h9.1v383.7h-9.1zM54 447.7v-383.7h8.9v383.7h-8.9zM98.9 447.7v-383.7h8.9v383.7h-8.9zM134.9 447.7v-383.7h17.7v383.7h-17.7zM179.7 447.7v-383.7h8.9v383.7h-8.9zM197.7 447.7v-383.7h8.9v383.7h-8.9zM215.7 447.7v-383.7h8.9v383.7h-8.9zM251.4 447.7v-383.7h18v383.7h-18zM296.3 447.7v-383.7h18v383.7h-18zM332.3 447.7v-383.7h18v383.7h-18zM368.3 447.7v-383.7h18v383.7h-18zM395.1 447.7v-383.7h18v383.7h-18zM440.3 447.7v-383.7h26.9v383.7h-26.9zM476 447.7v-383.7h9.1v383.7h-9.1zM494 448v-384h18v384h-18z"></path></svg><span>Barcode</span></button><button type="button" class="btn btn-icon btn-light mb-3 hidden-sm"><i class="material-icons">list_alt</i><span>Upload Receipt Numbers</span></button><div class="d-flex align-items-center ml-auto"><!----><div class="flex-center justify-content-center mb-3 mr-2" style="width: 160px;"><div class="mb-1"><label class="label-toggle d-block"><input type="checkbox" class="toggle"><div class="toggle-btn d-inline-block"></div><span class="input-checkbox-text">Reseller Orders</span><!----></label></div></div><button class="btn btn-icon btn-light mb-3"><i class="material-icons">bar_chart</i><span>View More Stats</span></button></div></div><!----><div class="table-list-menu mt-3 d-lg-flex align-items-center"><div class="table-actions d-flex align-items-center flex-wrap"><button type="button" disabled="disabled" class="btn btn-light btn-sm d-flex align-items-center"><i class="material-icons">description</i><span>Shipping Label</span></button><button type="button" disabled="disabled" class="btn btn-light btn-sm d-flex align-items-center"><i class="material-icons">alarm</i><span>Add Reminder</span></button><div class="dropdown"><button type="button" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false" disabled="disabled" class="btn btn-sm btn-light dropdown-toggle">Mark As</button><div class="dropdown-menu table-action-dropdown"><button type="button" class="dropdown-item">
                      Mark as Pending
                  </button><button type="button" class="dropdown-item">
                      Mark as Process
                  </button><button type="button" class="dropdown-item">
                      Mark as Complete
                  </button><button type="button" class="dropdown-item">
                      Mark as Refund
                  </button><button type="button" class="dropdown-item">
                      Mark as Cancel
                  </button><div class="dropdown-divider"></div><button type="button" class="dropdown-item">
                      Mark as Paid
                  </button><button type="button" class="dropdown-item">
                      Mark as Unpaid
                  </button></div></div><div class="dropdown"><button type="button" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false" disabled="disabled" class="btn btn-sm btn-light dropdown-toggle">Actions</button><div class="dropdown-menu table-action-dropdown"><button type="button" class="dropdown-item">
                      Set Tag
                  </button><button type="button" disabled="disabled" class="dropdown-item">
                      Assign to
                  </button><button type="button" disabled="disabled" class="dropdown-item">
                      Delete
                  </button></div></div><button type="button" class="btn btn-light btn-sm d-flex align-items-center hidden disabled"><i class="material-icons">local_shipping</i><span>Shipment</span></button><!----><button type="button" class="btn btn-light btn-sm d-flex align-items-center disabled"><i class="material-icons">local_shipping</i><span>Shipment</span></button><!----><!----></div><div class="table-filters d-flex align-items-center ml-auto"><button type="button" class="btn btn-light btn-sm flex-center"><i class="material-icons">view_week</i><span>Customize Columns</span></button><button type="button" class="filter-toggle btn btn-light btn-sm d-flex align-items-center justify-content-center"><i class="material-icons">filter_list</i><span>Filter</span></button><input type="text" placeholder="Search.." class="input form-control form-control-sm"></div></div><!----><div id="orders-list" class="submissions-list table-responsive"><table id="orders-list-table" class="submissions-list-table table table-striped table-hover"><thead><tr><th><label class="input-checkbox-container"><input type="checkbox" class="input-checkbox"><span></span></label></th><th class="th-sort hidden-sm">ID</th><th class="th-sort hidden-sm">Name</th><!----><!----><!----><!----><th class="th-sort visible-sm">Orders</th><!----><!----><!----><!----><!----><!----><th class="th-sort hidden-sm">City</th><!----><!----><th class="th-sort hidden-sm"><div class="label-info"><span>Status</span><span class="info has-tooltip" data-original-title="null"><i class="material-icons">info</i></span></div></th><th class="th-sort hidden-sm fitwidth"><div class="label-info">Payment Status</div></th><!----><!----><!----><th class="th-sort hidden-sm th-sort-desc">Date</th><!----><!----><!----><!----><th class="th-gross-revenue th-sort hidden-sm text-center">Gross Revenue</th><!----><!----><!----><!----><!----><!----><!----><!----><th width="20%" class="hidden-sm"><div class="label-info"><span>Follow-Up</span><span class="info has-tooltip" data-original-title="null"><i class="material-icons">info</i></span></div></th><th width="10%" class="hidden-sm">Actions</th></tr></thead><tbody></tbody></table><!----><div class="list-empty table-empty b-0"><i class="material-icons md-48 mr-2">error_outline</i><span>You have no orders in this date range.</span></div><div id="orders-list-vertical-scroll" class="table-vertical-scroll hidden-sm" style="width: 1206px; left: 71px; display: none;"><div id="orders-list-vertical-scroll-content" class="table-vertical-scroll-content" style="width: 1204px;"></div></div></div></div><div class="modals"><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----></div><div class="offsets"><canvas id="barcode" class="barcode"></canvas></div><div class="notifications" style="width: 300px; bottom: 0px; right: 0px;"><span></span></div><div class="layout-toggle"><div><label class="label-toggle d-block"><input type="checkbox" class="toggle"><div class="toggle-btn d-inline-block"></div><span class="input-checkbox-text">Full Width</span><!----></label></div></div></div><!----></main>

@endsection