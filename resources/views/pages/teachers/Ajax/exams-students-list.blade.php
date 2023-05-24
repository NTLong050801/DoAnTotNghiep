@foreach($students as $student)

    <tr class="odd">
        <td style="width: 15%">{{$student->name}}</td>
        <td style="width: 10%">{{$student->identifier}}</td>
        <!--begin::User=-->
        <td style="width: 20%">
            {{$student->email}}
        </td>
        <td style="width: 10%">{{myExam($exam_id,$student->id)->time_started ? myExam($exam_id,$student->id)->time_started : '---' }}</td>
        <!--begin::Action=-->
        <td class="text-danger" style="width: 10%">{{myExam($exam_id,$student->id)->warning ? myExam($exam_id,$student->id)->warning : '---'}}</td>
        <td style="width: 15%">
            @if(myExam($exam_id,$student->id)->isActive == 0)
                <button class="btn btn-secondary btn-sm">Chưa làm bài</button>
            @endif
            @if(myExam($exam_id,$student->id)->isActive == 1 && myExam($exam_id,$student->id)->result == '')
                <button class="btn btn-danger btn-sm">Đang làm bài</button>
            @endif
            @if(myExam($exam_id,$student->id)->isActive == 1 && myExam($exam_id,$student->id)->result != '')
                <button class="btn btn-success btn-sm show_result" data-user_id="{{$student->id}}">Đã nộp</button>
            @endif
        </td>
        <td class="text-end" style="width: 15%" data-user_id="{{$student->id}}">
            @if(myExam($exam_id,$student->id)->isActive == 1 && myExam($exam_id,$student->id)->result == '')
                <button class="btn btn-sm btn-warning endExam" type="button"
                        data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="bottom"
                        title="Kết thúc bài thi">
                    <i class="fa-solid fa-power-off"></i>
                </button>
            @endif
            <button class="btn btn-sm btn-info reset_exam" type="button"
                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="bottom"
                    title="Reset bài thi">
                <i class="fa-solid fa-reply-all"></i>
            </button>
            <button class="btn btn-sm btn-danger delete_student" type="button"><i class="fa-solid fa-trash"></i>
            </button>

        </td>
        <!--end::Action=-->
    </tr>
@endforeach
