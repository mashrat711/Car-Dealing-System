@extends('Backend.master')
@section('content')

    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <!-- Main-body start -->
            <div class="main-body">
                <div class="page-wrapper">
                    <!-- Page-header start -->
                    <div class="page-header card">

                        @if($errors->any())
                            @foreach($errors->all() as $error)
                                <div class="alert alert-danger"> {{$error}} </div>
                            @endforeach
                        @endif

                    </div>

                    <!-- Page-header end -->



                    <!-- Page-body start -->
                    <div class="page-body">
                        <div class="row">
                            <div class="col-sm-12">

                            <!-- Individual Column Searching (Text Inputs) start -->
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Data table</h5>
                                        <span>DataTables has most features enabled by default, so all you need to do to use it with your own ables is to call the construction function: $().DataTable();.</span>
                                    </div>
                                    <div class="card-block">
                                        <div class="dt-responsive table-responsive">
                                            <table id="simpletable" class="table table-striped table-bordered nowrap">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Company Name</th>
                                                    <th>Address</th>
                                                    <th>City Id</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>

                                                   
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($shippings as $row)
                                                    <tr>
                                                        <td>{{$row->id}}</td>
                                                        <td><span class="label label-info">{{$row->first_name}}</span></td>
                                                        <td>{{$row->last_name}}</td>
                                                        <td>{{$row->company_name}}</td>
                                                        <td><span class="label label-info">{{$row->address}}</span></td>
                                                        <td>{{$row->city_id}}</td>
                                                        <td>{{$row->email}}</td>
                                                        <td>{{$row->phone}}</td>

                                                        <td>
                                                            {{--<div class="btn-group">--}}
                                                                {{--<a title="Details"  href='{{route('car_models.store')}}'  class="btn btn-primary btn-sm"><i class="fa fa-eye"></i>--}}
                                                                {{--</a>--}}
                                                            {{--</div>--}}
                                                            {{--<div class="btn-group">--}}
                                                                {{--<a title="Edit" href='{{route('car_brands.edit',$row->id)}}' class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>--}}

                                                            {{--</div>--}}
                                                            <!-- todo: have problem in mobile device -->
                                                            {{--<div class="btn-group">--}}
                                                                {{--<form  class="myAction" method="POST" action="{{route('brands.destroy',$row->id)}}">--}}
                                                                    {{--@csrf--}}
                                                                    {{--<input name="_method" type="hidden" value="DELETE">--}}
                                                                    {{--<button type="submit" class="btn btn-danger btn-sm" title="Delete">--}}
                                                                        {{--<i class="fa fa-fw fa-trash"></i>--}}
                                                                    {{--</button>--}}
                                                                {{--</form>--}}
                                                            {{--</div>--}}

                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>

                                            </table>

                                        </div>
                                    </div>
                                </div>

<!-- Individual Column Searching (Text Inputs) end -->
                                </div></div></div></div></div></div></div>
                                @endsection