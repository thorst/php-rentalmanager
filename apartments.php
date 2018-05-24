<?php
include('header.php');
?>


      here is the apartment list

<?php
include('footer.php');

?>
<script>
var data = "";
$.post( "api/apartment/get.php", function( data ) {
  console.log( data );
});
</script>