@extends('layouts.main')
@section('content')
    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-5 g-xl-9">
        <!--begin::Col-->
        @foreach($roles as $role)
            <div class="col-md-4">
                <!--begin::Card-->
                <div class="card card-flush h-md-100">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <h2>{{ucwords($role->name)}}</h2>
                        </div>
                        <!--end::Card title-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-1">
                        <!--begin::Users-->
                        <div class="fw-bold text-gray-600 mb-5">
                            Có {{number_format($role->users_count)}} người thuộc phòng ban này
                        </div>
                        <!--end::Users-->
                        <!--begin::Permissions-->
                        @if($role->permissions->count())
                            <div class="d-flex flex-column text-gray-600">
                                <div class="d-flex align-items-center py-2">
                                    <span class="bullet bg-primary me-3"></span>
                                    {{$role->permissions->pluck('name')->implode(',')}}
                                </div>
                            </div>
                        @endif
                        <!--end::Permissions-->
                    </div>
                    <!--end::Card body-->
                    <!--begin::Card footer-->
                    <div class="card-footer flex-wrap pt-0">
                        <a href="{{route('roles.show',$role)}}" class="btn btn-light btn-active-primary my-1 me-2">
                            View Role
                        </a>

                        <a href="{{route('roles.edit',$role)}}" class="btn btn-light btn-active-light-primary my-1">
                            Edit Role
                        </a>
                    </div>
                    <!--end::Card footer-->
                </div>
                <!--end::Card-->
            </div>
        @endforeach

        <!--begin::Add new card-->
        <div class="ol-md-4">
            <!--begin::Card-->
            <div class="card h-md-100">
                <!--begin::Card body-->
                <div class="card-body d-flex flex-center">
                    <!--begin::Button-->
                    <a href="{{route('roles.create')}}" class="btn btn-clear d-flex flex-column flex-center">
                        <!--begin::Illustration-->
                        <img src="{{asset('assets/media/illustrations/sketchy-1/4.png')}}" class="mw-100 mh-150px mb-7"
                             alt="">
                        <!--end::Illustration-->
                        <!--begin::Label-->
                        <div class="fw-bold fs-3 text-gray-600 text-hover-primary">Add New Role</div>
                        <!--end::Label-->
                    </a>
                    <!--begin::Button-->
                </div>
                <!--begin::Card body-->
            </div>
            <!--begin::Card-->
        </div>
        <!--begin::Add new card-->
    </div>
@endsection
