@extends('layouts.main')
@section('content')
    <!--begin::Card-->
    <div class="card">
        <!--begin::Card header-->
        <div class="card-header border-0 pt-6">
            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Toolbar-->
                <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                    <!--begin::Add user-->
                    <a href="{{route('users.create')}}" class="btn btn-primary">
                        Add User
                    </a>
                    <!--end::Add user-->
                </div>
                <!--end::Toolbar-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body py-4">
            <!--begin::Table-->
            <div id="kt_table_users_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="table-responsive">
                    <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer"
                           id="kt_table_users">
                        <thead>
                        <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                            <th class="w-10px pe-2 sorting_disabled" rowspan="1" colspan="1" aria-label=""
                                style="width: 29.8906px;">
                                <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                    #
                                </div>
                            </th>
                            <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users"
                                rowspan="1" colspan="1" aria-label="User: activate to sort column ascending"
                                style="width: 276.234px;">Username
                            </th>
                            <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users"
                                rowspan="1" colspan="1" aria-label="Role: activate to sort column ascending"
                                style="width: 161.703px;">Role
                            </th>
                            <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users"
                                rowspan="1" colspan="1"
                                aria-label="Username: activate to sort column ascending"
                                style="width: 161.703px;">Name
                            </th>
                            <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users"
                                rowspan="1" colspan="1"
                                aria-label="Phone : activate to sort column ascending"
                                style="width: 161.703px;">Phone
                            </th>
                            <th>Updated At</th>
                            <th class="text-end min-w-100px sorting_disabled" rowspan="1" colspan="1"
                                aria-label="Actions" style="width: 232.359px;">Actions
                            </th>
                        </tr>
                        </thead>
                        <tbody class="text-gray-600 fw-semibold">
                        @foreach($users as $user)
                            <tr class="odd">
                                <td>
                                    {{$loop->iteration}}
                                </td>
                                <td class="d-flex align-items-center">
                                    <!--begin:: Avatar -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="{{route('users.edit',$user)}}">
                                            <div class="symbol-label">
                                                <img src="{{$user->avatar}}" class="w-100">
                                            </div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::User details-->
                                    <div class="d-flex flex-column">
                                        <a href="{{route('users.edit',$user)}}"
                                           class="text-gray-800 text-hover-primary mb-1">
                                            {{$user->username}}
                                        </a>
                                        <span>{{$user->email}}</span>
                                    </div>
                                    <!--begin::User details-->
                                </td>
                                <td>
                                    @foreach($user->getRoleNames() as $roleName)
                                        {{$roleName}}
                                    @endforeach
                                </td>
                                <td data-order="2023-04-10T11:20:21+07:00">
                                    <div> {{$user->name}}</div>
                                </td>
                                <td>
                                    {{$user->phone}}
                                </td>
                                <td data-order="2023-06-20T22:10:00+07:00">
                                    {{$user->updated_at}}
                                </td>
                                <td class="d-flex align-items-center justify-content-end">
                                    <a href="{{route('users.show',$user)}}"
                                       class="btn btn-primary">
                                        Show User
                                    </a>

                                    <form
                                        action="{{route('users.destroy',$user)}}"
                                        method="post"
                                    >
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-light btn-danger">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!--end::Table-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Card-->
@endsection
