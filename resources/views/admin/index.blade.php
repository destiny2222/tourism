@extends('layouts.master-2')
@section('content')
    <div class="container-fluid">
        <!-- Start::page-header -->
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <div>
                <p class="fw-semibold fs-18 mb-0">{{  $admin->name }}</p>
                <span class="fs-semibold text-muted">Track your sales activity, leads and deals here.</span>
            </div>
        </div>
        <!-- End::page-header -->
        <div class="row">
            <div class="col-lg-12 col-xl-12">
                <div class="row">
                    <div class="col-xxl-6 col-lg-6 col-md-6">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-body">
                                <div class="d-flex align-items-top justify-content-between">
                                    <div>
                                        <span class="avatar avatar-md avatar-rounded bg-primary">
                                            <i class="ti ti-users fs-16"></i>
                                        </span>
                                    </div>
                                    <div class="flex-fill ms-3">
                                        <div
                                            class="d-flex align-items-center justify-content-between flex-wrap">
                                            <div>
                                                <p class="text-muted mb-0">Total Customers</p>
                                                <h4 class="fw-semibold mt-1">0</h4>
                                            </div>
                                            <div id="crm-total-customers"></div>
                                        </div>
                                        <div
                                            class="d-flex align-items-center justify-content-between mt-1">
                                            <div>
                                                <a class="text-primary" href="javascript:void(0);">View
                                                    All<i
                                                        class="ti ti-arrow-narrow-right ms-2 fw-semibold d-inline-block"></i></a>
                                            </div>
                                            <div class="text-end">
                                                <p class="mb-0 text-success fw-semibold">
                                                    +40%
                                                </p>
                                                <span class="text-muted op-7 fs-11">this month</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-lg-6 col-md-6">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-body">
                                <div class="d-flex align-items-top justify-content-between">
                                    <div>
                                        <span class="avatar avatar-md avatar-rounded bg-secondary">
                                            <i class="ti ti-wallet fs-16"></i>
                                        </span>
                                    </div>
                                    <div class="flex-fill ms-3">
                                        <div
                                            class="d-flex align-items-center justify-content-between flex-wrap">
                                            <div>
                                                <p class="text-muted mb-0">Total Revenue</p>
                                                <h4 class="fw-semibold mt-1">$0</h4>
                                            </div>
                                            <div id="crm-total-revenue"></div>
                                        </div>
                                        <div
                                            class="d-flex align-items-center justify-content-between mt-1">
                                            <div>
                                                <a class="text-secondary"
                                                    href="javascript:void(0);">View All<i
                                                        class="ti ti-arrow-narrow-right ms-2 fw-semibold d-inline-block"></i></a>
                                            </div>
                                            <div class="text-end">
                                                <p class="mb-0 text-success fw-semibold">
                                                    +25%
                                                </p>
                                                <span class="text-muted op-7 fs-11">this month</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-lg-6 col-md-6">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-body">
                                <div class="d-flex align-items-top justify-content-between">
                                    <div>
                                        <span class="avatar avatar-md avatar-rounded bg-success">
                                            <i class="ti ti-wave-square fs-16"></i>
                                        </span>
                                    </div>
                                    <div class="flex-fill ms-3">
                                        <div
                                            class="d-flex align-items-center justify-content-between flex-wrap">
                                            <div>
                                                <p class="text-muted mb-0">
                                                    Conversion Ratio
                                                </p>
                                                <h4 class="fw-semibold mt-1">0%</h4>
                                            </div>
                                            <div id="crm-conversion-ratio"></div>
                                        </div>
                                        <div
                                            class="d-flex align-items-center justify-content-between mt-1">
                                            <div>
                                                <a class="text-success" href="javascript:void(0);">View
                                                    All<i
                                                        class="ti ti-arrow-narrow-right ms-2 fw-semibold d-inline-block"></i></a>
                                            </div>
                                            <div class="text-end">
                                                <p class="mb-0 text-danger fw-semibold">
                                                    -12%
                                                </p>
                                                <span class="text-muted op-7 fs-11">this month</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-lg-6 col-md-6">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-body">
                                <div class="d-flex align-items-top justify-content-between">
                                    <div>
                                        <span class="avatar avatar-md avatar-rounded bg-warning">
                                            <i class="ti ti-briefcase fs-16"></i>
                                        </span>
                                    </div>
                                    <div class="flex-fill ms-3">
                                        <div
                                            class="d-flex align-items-center justify-content-between flex-wrap">
                                            <div>
                                                <p class="text-muted mb-0">Total Deals</p>
                                                <h4 class="fw-semibold mt-1">0</h4>
                                            </div>
                                            <div id="crm-total-deals"></div>
                                        </div>
                                        <div
                                            class="d-flex align-items-center justify-content-between mt-1">
                                            <div>
                                                <a class="text-warning" href="javascript:void(0);">View
                                                    All<i
                                                        class="ti ti-arrow-narrow-right ms-2 fw-semibold d-inline-block"></i></a>
                                            </div>
                                            <div class="text-end">
                                                <p class="mb-0 text-success fw-semibold">
                                                    +19%
                                                </p>
                                                <span class="text-muted op-7 fs-11">this month</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start::row-1 -->
            <div class="row">
                <div class="col-xxl-12 col-xl-12">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="row">
                               
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">Ahtes Registerations</div>
                                    
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example" class="table text-nowrap table-hover border table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="row" class="ps-4">
                                                      S/N
                                                    </th>
                                                    <th scope="col">First Name</th>
                                                    <th scope="col">Last Name</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Phone</th>
                                                    <th scope="col">Organization</th>
                                                    <th scope="col">Position</th>
                                                    <th scope="col">Language</th>
                                                    <th scope="col">Interpreter</th>
                                                    <th scope="col">Hotel</th>
                                                    <th scope="col">Visa</th>
                                                    <th scope="col">Source</th>
                                                    <th scope="col">Country</th>
                                                    <th scope="col">Package</th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                                @foreach ($ahtes as $item)
                                                    <tr>
                                                        <th scope="row" class="ps-4">
                                                            {{ $loop->index + 1 }}
                                                        </th>
                                                        <td>
                                                            {{ $item->fname }}
                                                        </td>
                                                        <td>{{ $item->lname }}</td>
                                                        <td>{{ $item->email }}</td>
                                                        <td>{{ $item->phone }}</td>
                                                        <td>{{ $item->organization }}</td>
                                                        <td>{{ $item->position }}</td>
                                                        <td>{{ $item->language }}</td>
                                                        <td>{{ $item->interpreter }}</td>
                                                        <td>{{ $item->hotel }}</td>
                                                        <td>{{ $item->visa }}</td>
                                                        <td>{{ $item->source }}</td>
                                                        <td>
                                                            <span class="badge bg-info-transparent">{{ $item->country }}</span>
                                                        </td>
                                                        <td>{{ $item->register_as }}</td>
                                                       <!-- <td>
                                                            <div class="hstack gap-2 fs-15">
                                                                <a aria-label="anchor" href="javascript:void(0);"
                                                                    class="btn btn-icon btn-wave waves-effect waves-light btn-sm btn-success-light"><i
                                                                        class="ri-download-2-line"></i>
                                                                </a>
                                                                <a aria-label="anchor" href="javascript:void(0);"
                                                                    class="btn btn-icon btn-wave waves-effect waves-light btn-sm btn-primary-light"><i
                                                                        class="ri-edit-line"></i>
                                                                    </a>
                                                                <a aria-label="anchor" href="javascript:void(0);"
                                                                   class="btn btn-icon btn-wave waves-effect waves-light btn-sm btn-danger-light"><i
                                                                    class="ri-delete-bin-line"></i>
                                                                </a>
                                                            </div>
                                                        </td> -->
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="d-flex align-items-center justify-content-center">
                                        {{ $ahtes->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                </div>
            </div>
        <!-- End::row-1 -->
    </div>  
    
@endsection

@push('scripts')
    <script>
        function applyDataTable(){
  
  $('#example').DataTable( {
          dom: 'Bfrtip',
          buttons: [
              {
                  extend: 'print',
                  text: 'Print all'
              },
              {
                  extend: 'print',
                  text: 'Print current page',
                  exportOptions: {
                      modifier: {
                          page: 'current'
                      }
                  }
              }
          ],
          select: true
      } );
  
  
  }


  $(document).ready(function() {
  $('#trigger-update').click(function(){
      $('#example').DataTable().destroy();
      
      setTimeout(function(){
          applyDataTable();
      },2000);
      
  });
  
  applyDataTable();
      
  } );
    </script>
@endpush


