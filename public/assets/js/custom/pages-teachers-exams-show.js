$(document).ready(function (){
    var exam_id = $('#exam_id').attr('exam_id');
    $(document).on('click','.addMyQuestion',function (){
        var row = $(this).closest('tr'); // Get the row
        var question_id = row.data('question_id')
        var count_question = $('#count_question').html();
        $.ajax({
            url : '/teachers/exams-questions',
            method : "GET",
            data : {
                question_id : question_id,
                exam_id : exam_id,
            },
            success : function (res){
                if(res == '1'){
                    Swal.fire({
                        text: "Thêm câu hỏi thành công!.",
                        icon: "success",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, tiếp!",
                        customClass: {
                            confirmButton: "btn fw-bold btn-primary",
                        }
                    }).then(function (){
                        row.hide();
                        $('#count_question').html(count_question-1)
                    })
                }
            }
        })
    })


})
