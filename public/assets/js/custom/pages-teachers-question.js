$(document).ready(function () {
    // Listen for checkbox clicks within the table
    var  countChecked;
    $('tbody tr').on('click', 'input[type="checkbox"]', function () {
        // Count the number of checkboxes that are checked
         countChecked = $('tbody tr input[type="checkbox"]:checked').length;
        showSelected()
        if(countChecked == 20){
            var isChecked = $(this).prop('checked');
            $('#checkboxAll').prop('checked', isChecked)
        }else{
            $('#checkboxAll').prop('checked', false)
        }

    });
    $('#checkboxAll').click(function () {
        // Detect checkboxes state & count
        var isChecked = $(this).prop('checked');
        // Set the checked status of all body checkboxes to match the header checkbox
        $('tbody td input[type="checkbox"]').prop('checked', isChecked);
        countChecked = $('tbody tr input[type="checkbox"]:checked').length;
        showSelected()
    })
    function showSelected(){
        // Display the count
        if (countChecked > 0) {
            $('#select').removeClass('d-none')
            $('#toolbar').addClass('d-none');
        } else {
            $('#toolbar').removeClass('d-none');
            $('#select').addClass('d-none')
        }
        $('#selected_count').html(countChecked)
    }
    $('#delete_selected').click(function () {
        // Get all attributes of checked checkboxes
        var deteleSelected = [];
        $('tbody tr input[type="checkbox"]:checked').each(function () {
            deteleSelected.push($(this).val());
        });
        Swal.fire({
            text: "Bạn chắc chắn muốn xóa "+countChecked+" câu hỏi này ?",
            icon: "warning",
            showCancelButton: true,
            buttonsStyling: false,
            confirmButtonText: "Đồng ý, Xóa!",
            cancelButtonText: "Không, Hủy",
            customClass: {
                confirmButton: "btn fw-bold btn-danger",
                cancelButton: "btn fw-bold btn-active-light-primary"
            }
        }).then(function (result) {
            if (result.value) {
                axios.post('/teachers/questions/deleteSelected',{
                    deteleSelected : deteleSelected,
                }).then(res => {
                    Swal.fire({
                        text: "Xóa thành công!.",
                        icon: "success",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, trở về!",
                        customClass: {
                            confirmButton: "btn fw-bold btn-primary",
                        }
                    }).then(function (){
                        location.reload();
                        // if(deteleSelected.length >= 20){
                        //
                        // }
                        // $('tbody tr input[type="checkbox"]:checked').each(function () {
                        //    $(this).parent().parent().parent().hide()
                        // });
                        // $('#toolbar').removeClass('d-none');
                        // $('#select').addClass('d-none')
                    })
                } )
            } else if (result.dismiss === 'cancel') {
                Swal.fire({
                    text: "Không thể xóa !!!.",
                    icon: "error",
                    buttonsStyling: false,
                    confirmButtonText: "Ok, trở về!",
                    customClass: {
                        confirmButton: "btn fw-bold btn-primary",
                    }
                });
            }
        });
    })
});
