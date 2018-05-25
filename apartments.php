<?php

  $name = "Apartments";

  // Define scripts section, below global scripts
  function sectionScripts(){?>

    <!-- JSRender Template{{:Name}} -->
    <script id="tmplApartments" type="text/x-jsrender">

      <a href="#" class="list-group-item list-group-item-action"></a>
    </script>


    <script>
    $(function(){
      $.post( "api/apartment/get.php", function(data  ) {
          $("#apartmentList").html($("#tmplApartments").render(data.apartments));
      });

 $("#btAdd").click(function(){
$("#mdlApartment").modal("show");
 });
      $("#btSave").click(function(){
        var o ={
            Name:$("#txName").val(),
            Address: "test",
            Zillow: ""
          };
        $.post( "api/apartment/save.php",o.serialize(), function( data ) {
          $("#apartmentList").html($("#tmplApartments").render(data.apartments));
      });

      });
    });
    </script>
  <?php }


  include('header.php');
?>

<button type="button" class="btn btn-primary" id="btAdd">Add</button>
<div class="list-group" id="apartmentList"></div>

<div class="modal fade" id="mdlApartment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add/Edit Apartment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="txName">Name</label>
          <input type="text" class="form-control" id="txName"  placeholder="Enter Name">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="btSave">Save</button>
      </div>
    </div>
  </div>
</div>

<?php
  include('footer.php');
?>