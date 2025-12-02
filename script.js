$(document).ready(function () {
    $("#regForm").submit(function () {

        if ($("#phone").val().length != 10) {
            alert("Phone number must be 10 digits");
            return false;
        }

        alert("Form submitted successfully!");
        return true;
    });
});
