@extends('Backend.master')
@section('content')
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <!-- Main-body start -->
            <div class="main-body">
                <div class="page-wrapper">
                    <!-- Page-header start -->
                    <div class="page-header card">
                        <div class="card-block">
                            <h5 class="m-b-10">Result Data</h5>

                            <ul class="breadcrumb-title b-t-default p-t-10">
                                <li class="breadcrumb-item">
                                    <a href=""> <i class="fa fa-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item"><a href="">Create model</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    @if($errors->any())
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger"> {{$error}} </div>
                    @endforeach
                @endif

                <!-- Page-header end -->
                    <!-- Page body start -->
                    <div class="page-body">
                        <div class="row">
                            <div class="col-sm-12">



                                <div class="page-header card">
                                    <div class="card-block">
                                        <form action="{{route('brands.store')}}" method="post">
                                            @csrf
                                            <div class="form-group row">
                                                {{--<div class="col-sm-6">--}}
                                                    {{--<label for=""  class="block">Student Name</label>--}}
                                                    {{--<select name="student_id" id="">--}}
                                                        {{--@foreach($students as $key => $student)--}}
                                                            {{--<option value="{{$key}}"> {{$student}}  </option>--}}
                                                        {{--@endforeach--}}
                                                    {{--</select> >--}}
                                                {{--</div>--}}

                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">Title</label>

                                                    <input id="userName-2b" name="title" type="text" class=" form-control"
                                                           value="{{ old("title") ? old("title") : (!empty($result) ? $result->title: null) }}">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">Subtitle</label>

                                                    <input id="userName-2b" name="subtitle" type="text" class=" form-control"
                                                           value="{{ old("subtitle") ? old("subtitle") : (!empty($result) ? $result->subtitle: null) }}">
                                                </div>
                                                {{--<div class="col-sm-4">--}}
                                                    {{--<label for=""  class="block">Type</label>--}}

                                                    {{--<input id="userName-2b" name="subtitle" type="text" class=" form-control"--}}
                                                           {{--value="{{ old("type") ? old("type") : (!empty($result) ? $result->subtitle: null) }}">--}}
                                                {{--</div>--}}
                                            </div>



                                            <button type="submit">Submit</button>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection