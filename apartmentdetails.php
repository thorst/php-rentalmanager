<?php

  $name = "Apartment Details";

  // Define scripts section, below global scripts
  function sectionScripts(){?>

    <!-- JSRender Template
    <script id="tmplApartments" type="text/x-jsrender">
      <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
        <div class="d-flex w-100 justify-content-between">
          <h5 class="mb-1">{{:Name}}</h5>
          <small>1 Unit</small>
        </div>
        <p class="mb-1">{{:Zillow}}</p>
        <small><button class="btn btn-link btn-xs apartmentEdit">Edit</button></small>
      </a>
    </script>

    <!- - JS - ->
    <script src="scripts/pages/apartments/apartment.js"></script>
    <script src="scripts/pages/apartments/apartmentSave.js"></script> -->

  <?php }


  include('header.php');
?>


<!-- Body -->
<div class="card">
  <div class="card-header">
  <h5 style="display:inline;">Leases</h5>
            <a href="#" class="copyHide" id="btAdd">Add</a>
            <div class="float-right"><!--<span id="officeMatch"></span>--> <span id="apartmentTotal"></span> Total</div>

  </div>

<div class="list-group" id="apartmentList"></div>
</div>
<div class="card">
  <div class="card-header">
  <h5 style="display:inline;">Units</h5>
            <a href="#" class="copyHide" id="btAdd">Add</a>
            <div class="float-right"><!--<span id="officeMatch"></span>--> <span id="apartmentTotal"></span> Total</div>

  </div>

<div class="list-group" id="apartmentList"></div>
</div>
<!-- Modals -->
<!-- <div class="modal fade" id="mdlApartment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add/Edit Apartment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="hidden" id="apartmentID" />

        <div class="form-group">
          <label for="txName">Name</label>
          <input type="text" class="form-control" id="txName"  placeholder="Enter Name">
        </div>
        <div class="form-group">
          <label for="txAddress">Address</label>
          <input type="text" class="form-control" id="txAddress"  placeholder="Enter Address">
        </div>
        <div class="form-group">
          <label for="txZillow">Zillow Url</label>
          <input type="text" class="form-control" id="txZillow"  placeholder="Enter Zillow Url">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="btSave">Save</button>
      </div>
    </div>
  </div>
</div> -->

<?php
  include('footer.php');
?>