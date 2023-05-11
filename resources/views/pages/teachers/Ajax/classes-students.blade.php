<!--begin::Details-->
@foreach($students as $student)
    <div class="d-flex align-items-center mt-3">
        <!--begin::Avatar-->
        <div class="symbol symbol-40px symbol-circle col-2">
            <img alt="Pic" src="{{$student->avatar}}">
        </div>
        <!--end::Avatar-->
        <!--begin::Details-->
        <div class="ms-4 col-8">
            <a href="#" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2 detail_student" id_student ="{{$student->id}}"> {{$student->name}}</a>
            <div class="fw-semibold fs-7 text-muted">{{$student->email}}</div>
        </div>
        <div class="col-2">
            <button class="btn btn-sm btn-light-danger delete" id_student ="{{$student->id}}"><i class="fa-solid fa-trash"></i></button>
        </div>
    </div>
@endforeach
<!--end::Details-->
