
// form focus
$('.input').focus(function () {
    $(this).parent().addClass('focus');
}).blur(function () {
    if($(this).val() === ''){
        $(this).parent().removeClass('focus');
    }
});

//lazy load
// $(document).ready(function(){
//     var _token = $('input[name="_token"]').val();
//
//     function load_data(id = "", _token)
//     {
//         $.ajax({
//             url:"{{ rpote('loadmore.load_data') }}",
//             method:"POST",
//             data:{id:id, _token:_token},
//             success:function(data)
//             {
//                 $('#load_more_button').remove();
//             }
//         })
//     }
// });
