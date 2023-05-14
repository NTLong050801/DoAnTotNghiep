@foreach($students as $student)
    <tr class="odd">
        <td >{{$student->user->name}}</td>
        <td >{{$student->user->identifier}}</td>
        <!--begin::User=-->
        <td class="d-flex align-items-center">
            <span>{{$student->user->email}}</span>
        </td>
        <!--begin::Action=-->
        <td class="text-end">
        </td>
        <!--end::Action=-->
    </tr>
@endforeach
