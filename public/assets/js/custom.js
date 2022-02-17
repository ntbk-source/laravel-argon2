function readImgUrl(input, imgClass) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            // $(id).html(`<img height="`+ height +`" width="`+ width +`" src="`+ e.target.result +`"/>`);
            // $('.img-preview').html(`<img src="` + e.target.result + `"/>`);
            $(imgClass).attr("src", e.target.result).width(80).height(80);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

function copyText(text) {
    let dummy = document.createElement("textarea");
    document.body.appendChild(dummy);
    dummy.setAttribute("id", "dummy_id");
    document.getElementById("dummy_id").value = text;
    dummy.select();
    document.execCommand("copy");
    document.body.removeChild(dummy);
    Swal.fire("Yeay!", "Copied success", "success");
}

function resetError(keyArray) {
    $.each(keyArray, (key, value) => {
        $(".err_" + key).html("");
        $("#" + key).removeClass("is-invalid");
    });
}

function displayError(keyArray) {
    $.each(keyArray, (key, value) => {
        if (value !== "") {
            $(".err_" + key).html(value);
            $("#" + key).addClass("is-invalid");
        } else {
            $(".err_" + key).html("");
            $("#" + key).removeClass("is-invalid");
        }
    });
}

function formAction(
    type,
    url,
    data,
    beforeCallback,
    errorCallback,
    successCallback,
    dataType = "json"
) {
    $.ajax({
        type,
        url,
        data,
        contentType: false,
        cache: false,
        processData: false,
        dataType,
        beforeSend: beforeCallback ? beforeCallback : () => {},
        error: errorCallback ? errorCallback : () => {},
        success: successCallback ? successCallback : () => {},
    });
}
