

$( document ).ready(function() {
   
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    // $('#submit').click(function () {
    //     var id = $(this).data('id');
    //     data = $("#submit_form").serializeArray();
    //     var check = typeof (data);
    //     var formData = new FormData($('#submit_form')[0]);
    //     console.log(id);
    //     return;
    //     $.ajax({
    //         type: 'POST',
    //         url: "",
    //         data: data,
    //         success: function (data) {
    //            alert();
    //         },
    //     });
    // })


    
});