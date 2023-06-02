@foreach($examsQuestions as $question)
    <tr class="odd border-bottom border-danger" data-question_id="{{$question->id}}">
        <!--begin::ID-->
        <td>
            <b>{{$loop->iteration}}.{{$question->name}}</b>
            <div class="row bg-dark mt-5 p-5">
                @foreach(json_decode($question->options) as $key=>$option)
                    <div class="form-check col-sm-6 mt-2">
                        <input class="form-check-input"
                               type="radio" disabled
                               name="{{$question->id}}"
                               id="{{$question->id.$key}}"
                               value="{{$key}}"
                               @if($question->ans == $key) checked @endif>
                        <label class="form-check-label fw-bold"
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
                class="btn btn-sm btn-danger deleteExamsQuestion" data-id="{{$question->id}}"
            ><i class="fa-solid fa-trash"></i>
            </button>
        </td>
        <!--end::Action=-->
    </tr>
@endforeach
