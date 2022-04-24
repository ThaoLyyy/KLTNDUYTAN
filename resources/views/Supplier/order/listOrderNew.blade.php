@extends('admin.layout.master')

@section('content')
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="card-box mb-30">
                    <div class="pd-20">
                        <h4 class="text-blue h4">Orders List</h4>
                    </div>
                    <div class="pb-20">
                        <table class="table stripe hover">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Receiver</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Create at</th>
                                <th class="datatable-nosort">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($orders as $row)
                                <tr>
                                    <td>{{ $row->id }}</td>
                                    <td>{{ $row->receiver }}</td>
                                    <td>{{ $row->phone }}</td>
                                    <td>{{ $row->address }}</td>
                                    <td>{{ $row->created_at }}</td>
                                    <td>
                                        <div class="dropdown">
                                                <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                                   href="#" role="button" data-toggle="dropdown">
                                                    <i class="dw dw-more"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                                    <a class="dropdown-item"
                                                       href="{{route('supplier.order.confirm',$row->id)}}"><i
                                                            class="dw dw-edit2"></i> Duyệt Đơn Hàng</a>
                                                            <a class="dropdown-item"
                                                       href="{{route('supplier.order.orders_detail',$row->id)}}"><i
                                                            class="dw dw-edit2"></i> Chi tiết Đơn Hàng</a>
                                                        <a class="dropdown-item"
                                                           href="{{route('supplier.order.block',$row->id)}}"><i
                                                                class="dw dw-delete-3"></i>
                                                            Hủy Đơn</a>
                                                </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="clearfix pd-30">
                            <div class="pull-left">
                                {{ $orders->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
@endpush
