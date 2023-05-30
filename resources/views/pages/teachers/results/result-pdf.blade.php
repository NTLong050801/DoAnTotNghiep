<head>
    <meta charset="utf-8">
    <style>
        body{
            margin: 0;
            font-family: firefly, DejaVu Sans, sans-serif;
            text-indent: initial;
            font-size: 13px;
        }
        .table-responsive {

            text-align: center;
            align-items: center;
        }

        .d-flex {
            display: inline-block;
        }

        .text-center {
            text-align: center;
        }

        .text-start {
            text-align: left;
        }
    </style>
</head>
<body>
<div style="display:block">
    <h1 class="text-center">Điểm bài thi {{$exam->name}}</h1>
    <h4>Ngày <span style="color: red">{{  $exam->date_start ? $exam->date_start : '......'}}</span></h4>
    <h4>Thời gian <span style="color: red">{{$exam->minute_time}}</span> phút</h4>
    <h4>Số câu: <span style="color: red">{{$exam->number_question ? $exam->number_question : '.......'}}</span></h4>
</div>
<div class="table-responsive">
    <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer"
           id="kt_ecommerce_report_customer_orders_table">
        <!--begin::Table head-->
        <thead>
        <!--begin::Table row-->
        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0" style="width: 100%">
            <th>STT</th>
            <th>Họ Tên</th>
            <th>Email</th>
            <th style="width: 5%">T/g bắt đầu</th>
            <th>Số câu đúng</th>
            <th>Số cảnh bảo</th>
            <th>Tổng điểm</th>

        </tr>
        <!--end::Table row-->
        </thead>
        <!--end::Table head-->
        <!--begin::Table body-->
        <tbody class="fw-semibold text-gray-600 text-center">
        @foreach($examsStudents as $examsStudent)
            @if($examsStudent->questions == null)
                <tr class="bg-danger text-white " style="background-color: yellow">
                    <td style="width: 5%">{{$loop->iteration}}</td>
                    <td class="text-start" style="width: 10%">{{$examsStudent->user->name}}</td>
                    <td style="width: 15%">{{$examsStudent->user->email}}</td>
                    <td style="width: 10%">--</td>
                    <td style="width: 5%">--</td>
                    <td style="width: 5%">--</td>
                    <td style="width: 5%">0</td>

                </tr>
            @else
                <tr>
                    <td style="width: 5%">{{$loop->iteration}}</td>
                    <td class="text-start" style="width: 15%">{{$examsStudent->user->name}}</td>
                    <td style="width: 15%">{{$examsStudent->user->email}}</td>
                    <td style="width: 10%">{{ \Illuminate\Support\Carbon::parse($examsStudent->time_started)->format('H:i:s')}}</td>
                    <td style="width: 5%">
                        {{$examsStudent->result.'/'.count(json_decode($examsStudent->questions))}}
                    </td>
                    <td style="width: 5%">{{$examsStudent->warning}}</td>
                    <td style="width: 5%">{{$examsStudent->result*10/count(json_decode($examsStudent->questions))}}</td>
                </tr>
            @endif
        @endforeach
        </tbody>
        <!--end::Table body-->
    </table>
</div>
</body>
