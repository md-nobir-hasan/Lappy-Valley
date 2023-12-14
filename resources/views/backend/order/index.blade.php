@extends('backend.layouts.master')
@push('title')
    Orders
@endpush
@section('main-content')
 <!-- DataTales Example -->
 <div class="mb-4 shadow card">
     <div class="row">
         <div class="col-md-12">
            @include('backend.layouts.notification')
         </div>
     </div>
    <div class="py-3 card-header">
      <h6 class="float-left m-0 font-weight-bold text-primary">Order Lists</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        @if(count($orders)>0)
        <table class="table table-bordered" id="order-dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>S.N.</th>
              <th>Order No.</th>
              <th>Name</th>
              <th>Email</th>
              <th>Quantity</th>
              <th>Charge</th>
              <th>Total Amount</th>
              <th>Status</th>
              @canany(['Edit Order', 'Delete Order'])
                                    <th>Action</th>
                                @endcanany
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>S.N.</th>
              <th>Order No.</th>
              <th>Name</th>
              <th>Email</th>
              <th>Quantity</th>
              <th>Charge</th>
              <th>Total Amount</th>
              <th>Status</th>
              @canany(['Edit Order', 'Delete Order'])
                                    <th>Action</th>
                                @endcanany
              </tr>
          </tfoot>
          <tbody>
            @foreach($orders as $order)
{{-- @dd($order) --}}
                <tr>
                    <td>{{$order->id}}</td>
                    <td>{{$order->order_number}}</td>
                    <td>{{$order->name}} {{$order->l_name}}</td>
                    <td>{{$order->email}}</td>
                    <td>{{$order->quantity}}</td>
                    <td>{{$order->shipping->price}}</td>
                    <td>৳{{number_format($order->total_amount,2)}}</td>
                    <td>
                        @if($order->order_status->title=='New')
                          <span class="badge badge-primary">{{$order->order_status->title}}</span>
                        @elseif($order->order_status->title=='Processing')
                          <span class="badge badge-warning">{{$order->order_status->title}}</span>
                        @elseif($order->order_status->title=='Delivered')
                          <span class="badge badge-success">{{$order->order_status->title}}</span>
                        @else
                          <span class="badge badge-danger">{{$order->order_status->title}}</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{route('order.show',$order->id)}}" class="float-left mr-1 btn btn-warning btn-sm" style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" title="view" data-placement="bottom"><i class="fas fa-eye"></i></a>
                        @can('Edit Order')
                        <a href="{{route('order.edit',$order->id)}}" class="float-left mr-1 btn btn-primary btn-sm" style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" title="edit" data-placement="bottom"><i class="fas fa-edit"></i></a>
                        @endcan
                       @can('Delet Order')
                            <form method="POST" action="{{route('order.destroy',[$order->id])}}">
                          @csrf
                          @method('delete')
                              <button class="btn btn-danger btn-sm dltBtn" data-id={{$order->id}} style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fas fa-trash-alt"></i></button>
                        </form>
                       @endcan
                    </td>
                </tr>
            @endforeach
          </tbody>
        </table>
        <span style="float:right">{{$orders->links('vendor.pagination.bootstrap-4')}}</span>
        @else
          <h6 class="text-center">No orders found!!! Please order some products</h6>
        @endif
      </div>
    </div>
</div>
@endsection

@push('styles')
  <link href="{{asset('backend/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
  <style>
      div.dataTables_wrapper div.dataTables_paginate{
          display: none;
      }
  </style>
@endpush

@push('scripts')

  <!-- Page level plugins -->
  <script src="{{asset('backend/vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('backend/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="{{asset('backend/js/demo/datatables-demo.js')}}"></script>
  <script>

      $('#order-dataTable').DataTable( {
            "columnDefs":[
                {
                    "orderable":false,
                    "targets":[8]
                }
            ]
        } );

        // Sweet alert

        function deleteData(id){

        }
  </script>
  <script>
      $(document).ready(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
          $('.dltBtn').click(function(e){
            var form=$(this).closest('form');
              var dataID=$(this).data('id');
              // alert(dataID);
              e.preventDefault();
              swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this data!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                       form.submit();
                    } else {
                        swal("Your data is safe!");
                    }
                });
          })
      })
  </script>
@endpush
