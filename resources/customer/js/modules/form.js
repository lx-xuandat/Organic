let ajax = {
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    error: function (x, status, error) {
        if (x.status == 401) {
            alert("Sorry, your session has expired. Please login again to continue");
            window.location.href = "/login";
        }

        if (x.status == 403) {
            alert("Sorry, you not permission");
        }
    },
    dataType: "json",
}

let csrf_token = function () {
    $.get('/csrf-token')
        .then((data) => {
            $('meta[name="csrf-token"]').attr('content', data)
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': data
                }
            })
        })
        .catch((x) => {

        })
}

export {
    ajax,
    csrf_token
}
