window.app = window.app || {};

app.apartmentSave = {
    perform: function () {

        var o = {
            Name: $("#txName").val(),
            Address: $("#txAddress").val(),
            Zillow: $("#txZillow").val(),
            Apartment_ID: $("#apartmentID").val()
        };
        $.post("api/apartment/save.php", o, function (data) {
            app.apartment.list = data.apartments;
            app.apartment.render();
            $("#mdlApartment").modal("hide");
        });


    }
};

$(function () {
    $("#btAdd").click(function () {
        app.apartment.clearForm();
        $("#mdlApartment").modal("show");
        return false;
    });
    $("#btSave").click(function () {
        app.apartmentSave.perform();
    });
    $("#apartmentList").on("click",".apartmentEdit",function(){
        app.apartment.clearForm();

        let idx = $(this).index(),
            o = app.apartment.list[idx];

        $("#txName").val(o.Name);
        $("#txAddress").val(o.Address);
        $("#txZillow").val(o.Zillow);
        $("#apartmentID").val(o.Apartment_ID);

        $("#mdlApartment").modal("show");
        return false;
    });
});