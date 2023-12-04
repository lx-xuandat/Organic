import './bootstrap';
import './pages/order';

// $(function () {
//     $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         },
//         error: function (x, status, error) {
//             if (x.status == 403) {
//                 alert("Sorry, your session has expired. Please login again to continue");
//                 window.location.href = "/login";
//             }
//         },
//         dataType: "json",
//     })

//     setInterval(() => {
//         $.get('/csrf_token')
//             .then((data) => {
//                 $('meta[name="csrf-token"]').attr('content', data)
//                 $.ajaxSetup({
//                     headers: {
//                         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//                     }
//                 })
//             })
//             .catch((x) => {

//             })
//     }, 1000)
// })

