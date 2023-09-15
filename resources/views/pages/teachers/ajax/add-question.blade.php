<!--begin::Table-->
<div id="kt_roles_view_table_wrapper"
     class="dataTables_wrapper dt-bootstrap4 no-footer">
    <div class="table-responsive">
        <table
            class="table align-middle table-row-dashed fs-6 gy-5 mb-0 dataTable no-footer"
            id="kt_myQuestion_view_table">
            <!--begin::Table head-->
            <thead>
            <!--begin::Table row-->
            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                <th class="w-10px pe-2 sorting_disabled" rowspan="1"
                    colspan="1" aria-label="
																" style="width: 29.9px;">
                    <div
                        class="form-check form-check-sm form-check-custom form-check-solid me-3">
                        <input class="form-check-input" type="checkbox"
                               data-kt-check="true"
                               data-kt-check-target="#kt_myQuestion_view_table .form-check-input"
                               value="1">
                    </div>
                </th>
                <th class="min-w-600px sorting" tabindex="0"
                    aria-controls="kt_myQuestion_view_table"
                    rowspan="1" colspan="1"
                    aria-label="ID: activate to sort column ascending"
                    style="width: 82.325px;">Câu hỏi
                </th>
                <th class="text-end min-w-30px sorting_disabled"
                    rowspan="1" colspan="1"
                    aria-label="Actions" style="width: 136.175px;">Actions
                </th>
            </tr>
            <!--end::Table row-->
            </thead>
            <!--end::Table head-->
            <!--begin::Table body-->
            <tbody class="fw-semibold text-gray-600">
            @foreach($questions as $question)
                <tr class="odd"  data-question_id="{{$question->id}}">
                    <!--begin::Checkbox-->
                    <td>
                        <div
                            class="form-check form-check-sm ">
                            <input class="form-check-input"
                                   type="checkbox"
                                   value="1">
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::ID-->
                    <td>
                        <b>{{$question->name}}</b>
                        <div class="row bg-dark mt-5 p-5">
                            @foreach(json_decode($question->options) as $key=>$option)
                                <div class="form-check col-sm-6 mt-2">
                                    <input class="form-check-input"
                                           type="radio" disabled
                                           name="{{$question->id}}"
                                           id="{{$question->id.$key}}"
                                           value="{{$key}}"
                                           @if($question->ans == $key) checked @endif>
                                    <label class="form-check-label fw-bolder"
                                           for="{{$question->id.$key}}">
                                        {{$option}}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </td>
                    <!--begin::ID-->
                    <td class="text-end">
                        <button
                            class="btn btn-sm btn-success text-center addMyQuestion"
                        ><i class="fa-sharp fa-solid fa-plus"></i>
                        </button>
                    </td>
                    <!--end::Action=-->
                </tr>
            @endforeach
            </tbody>
            <!--end::Table body-->
        </table>
    </div>
</div>
<!--end::Table-->
