$(document).ready(function () {
    $("body").on("click", ".delete", function (e) {
        let id = $(this).attr("id");
        $.ajax({
            type: "DELETE",
            url: "http://127.0.0.1:8000/letovi/let/delete?let_id=" + id,
            dataType: "json",
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            success: function (response) {
                alert(response.message);
            },
            error: function(response) {
                alert(response.message);
            }
        });
    });
});
