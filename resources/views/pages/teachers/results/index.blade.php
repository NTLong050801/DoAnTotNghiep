@extends('layouts.main')
@section('content')
    <div class="card card-flush">
        <!--begin::Card header-->
        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
            <!--begin::Card title-->
            <div class="card-title">
                <!--begin::Search-->
                <div class="d-flex align-items-center position-relative my-1">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                    <span class="svg-icon svg-icon-1 position-absolute ms-4">
                        <img src="{{asset('assets/media/icons/duotune/general/gen021.svg')}}" alt="">
                    </span>
                    <!--end::Svg Icon-->
                    <input type="text" data-kt-ecommerce-order-filter="search"
                           class="form-control form-control-solid w-250px ps-14" placeholder="Tìm kiếm">
                </div>
                <!--end::Search-->
                <!--begin::Export buttons-->
                <div id="kt_ecommerce_report_customer_orders_export" class="d-none">
                    <div class="dt-buttons btn-group flex-wrap">
                        <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0"
                                aria-controls="kt_ecommerce_report_customer_orders_table" type="button">
                            <span>Copy</span></button>
                        <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0"
                                aria-controls="kt_ecommerce_report_customer_orders_table" type="button">
                            <span>Excel</span></button>
                        <button class="btn btn-secondary buttons-csv buttons-html5" tabindex="0"
                                aria-controls="kt_ecommerce_report_customer_orders_table" type="button"><span>CSV</span>
                        </button>
                        <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0"
                                aria-controls="kt_ecommerce_report_customer_orders_table" type="button"><span>PDF</span>
                        </button>
                    </div>
                </div>
                <!--end::Export buttons-->
            </div>
            <!--end::Card title-->
            <!--begin::Card toolbar-->
            <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                <!--begin::Filter-->
                <div class="">
                    <select class="form-select form-control-sm" id="select_exams" data-control="select2"
                            data-placeholder="Chọn bài thi">
                        <option></option>
                        @foreach($exams as $exam)
                            <option @if(request('exam_id') == $exam->id) selected
                                    @endif value="{{$exam->id}}">{{$exam->name}}</option>
                        @endforeach
                    </select>
                </div>
                <!--end::Filter-->
                @if($examsStudents != null)
                    <button class="btn btn-sm btn-primary
                                btn-sm btn-active-light-primary my-1 me-2 chartExams"
                            id_exam="{{$exam->id}}" name_exam="{{$exam->name}}"
                            data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse"
                            data-bs-placement="bottom" title="Thống kê"
                    >
                        <i class="fa-solid fa-chart-simple"></i>
                    </button>
                    <!--begin::Export dropdown-->
                    <button type="button" class="btn btn-sm btn-light-primary" data-kt-menu-trigger="click"
                            data-kt-menu-placement="bottom-end">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
                        <span class="svg-icon svg-icon-2">
                        <img src="{{asset('assets/media/icons/duotune/arrows/arr078.svg')}}" alt="">
                    </span>
                        <!--end::Svg Icon-->Export
                    </button>
                    <div id="kt_ecommerce_report_customer_orders_export_menu"
                         class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4"
                         data-kt-menu="true">

                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="{{route('teachers.results.exportExcel',request('exam_id'))}}"
                               class="menu-link px-3" data-kt-ecommerce-export="excel">Export as Excel</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="{{route('teachers.results.exportImg',request('exam_id'))}}" class="menu-link px-3"
                               data-kt-ecommerce-export="img">Export as Image</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="{{route('teachers.results.exportPDF',request('exam_id'))}}" class="menu-link px-3"
                               data-kt-ecommerce-export="pdf">Export as PDF</a>
                        </div>
                        <!--end::Menu item-->
                    </div>
                @endif

                <!--end::Menu-->
                <!--end::Export dropdown-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-0">
            <!--begin::Table-->
            @if($examsStudents != null)
                <div id="kt_ecommerce_report_customer_orders_table_wrapper"
                     class="dataTables_wrapper dt-bootstrap4 no-footer">
                    <div class="table-responsive">
                        <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer"
                               id="kt_ecommerce_report_customer_orders_table">
                            <!--begin::Table head-->
                            <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                <th class="text-center">STT</th>
                                <th>Họ Tên</th>
                                <th>Email</th>
                                <th>Thời gian bắt đầu</th>
                                <th>Tổng số câu đúng</th>
                                <th>Số cảnh bảo</th>
                                <th>Tổng điểm</th>
                                <th>Hành động</th>
                            </tr>
                            <!--end::Table row-->
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="fw-semibold text-gray-600 ">
                            @foreach($examsStudents as $examsStudent)
                                @if($examsStudent->questions == null)
                                    <tr class="bg-warning text-black">
                                        <td class="col-1 text-center">{{$loop->iteration}}</td>
                                        <td style="width: 15%">{{$examsStudent->user->name}}</td>
                                        <td style="width: 15%">{{$examsStudent->user->email}}</td>
                                        <td style="width: 15%">--</td>
                                        <td style="width: 5%">--</td>
                                        <td style="width: 5%">--</td>
                                        <td style="width: 5%">0</td>
                                        <td style="width: 5%">
                                            <button class="btn btn-dark btn-sm">Bỏ thi</button>
                                        </td>
                                    </tr>
                                @else
                                    <tr>
                                        <td class="col-1 text-center">{{$loop->iteration}}</td>
                                        <td style="width: 15%">{{$examsStudent->user->name}}</td>
                                        <td style="width: 15%">{{$examsStudent->user->email}}</td>
                                        <td style="width: 15%">{{$examsStudent->time_started ? $examsStudent->time_started : '--'}}</td>
                                        <td style="width: 5%">
                                            {{$examsStudent->result.'/'.count(json_decode($examsStudent->questions))}}
                                        </td>
                                        <td style="width: 5%">{{$examsStudent->warning}}</td>
                                        <td style="width: 5%">{{$examsStudent->result*10/count(json_decode($examsStudent->questions))}}</td>
                                        <td style="width: 5%">
                                            <a href="{{route('teachers.results.answers',[request('exam_id'),$examsStudent->id_user])}}"
                                               target="_blank">
                                                <button class="btn btn-sm btn-info">Xem</button>
                                            </a>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                            </tbody>
                            <!--end::Table body-->
                        </table>
                    </div>
                </div>
            @else
                <h3 class="text-success text-center">Vui lòng chọn đề thi</h3>
            @endif
        </div>
        <!--end::Card body-->
        <!-- Modal -->
        <div class="modal fade" id="modal_chart" tabindex="-1" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="title_chart">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body " id="body_chart ">
                        <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x mb-5 fs-6 nav-stretch justify-content-end">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#kt_tab_pane_4">Biểu đồ
                                    thanh</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#kt_tab_pane_5">Biểu đồ đường </a>
                            </li>

                        </ul>

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="kt_tab_pane_4" role="tabpanel">
                                <canvas id="myChart"></canvas>
                            </div>
                            <div class="tab-pane fade" id="kt_tab_pane_5" role="tabpanel">
                                <canvas id="myChart1"></canvas>
                            </div>

                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('javascript')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        $(document).ready(function () {
            $('#select_exams').change(function () {
                exam_id = $(this).val()
                window.location.href = "/teachers/results/" + exam_id;
            })
        })
        $('.chartExams').click(function () {
            exam_id = $(this).attr('id_exam')
            name_exam = $(this).attr('name_exam')
            $.ajax({
                url: '/teachers/exams/' + exam_id + '/chart',
                method: "GET",
                data: {
                    exam_id: exam_id
                },
                success: function (res) {
                    $('#title_chart').html(name_exam)
                    $('#modal_chart').modal('show')

                    $('#kt_tab_pane_4 #myChart').remove()
                    $('#kt_tab_pane_4').append('<canvas id="myChart" class="animated fadeIn" height="150"></canvas>')

                    $('#kt_tab_pane_5 #myChart1').remove()
                    $('#kt_tab_pane_5').append('<canvas id="myChart1" class="animated fadeIn" height="150"></canvas>')

                    var ctx = document.getElementById('myChart');
                    var type = 'bar'
                    var label = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10']
                    var nameLabel = 'Thi sinh'
                    var data = res
                    chartClass.ChartData(ctx, type, label, nameLabel, data)

                    var ctx1 = document.getElementById('myChart1');
                    var type1 = 'line'
                    var label1 = res
                    var data1 = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10']
                    chartClass.ChartData(ctx1, type1, label, nameLabel, data)
                }
            })

            chartClass = {
                ChartData: function (ctx, type, label, nameLabel, data) {
                    new Chart(ctx, {
                        type: type,
                        data: {
                            labels: label,
                            datasets: [{
                                label: nameLabel,
                                data: data,
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });
                }
            }

        })
    </script>
@endsection
