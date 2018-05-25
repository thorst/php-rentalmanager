window.app = window.app || {};

app.apartment = {
    list:[],
    perform: function(){
        $.post( "api/apartment/get.php", function(data  ) {
            app.apartment.list = data.apartments;
           app.apartment.render();
        });
    },
    render: function() {
        $("#apartmentList").html($("#tmplApartments").render( app.apartment.list));
        $("#apartmentTotal").html(app.apartment.list.length);
    },
    clearForm: function() {
        $("#txName").val('');
        $("#txAddress").val('');
        $("#txZillow").val('');
        $("#apartmentID").val('');
    }
};

$(function(){
    app.apartment.perform();

    
});