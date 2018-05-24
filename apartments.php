<?php

  $name = "Apartments";

  // Define scripts section, below global scripts
  function sectionScripts(){?>
    <script>
      var data = "";
      $.post( "api/apartment/get.php", function( data ) {
        console.log( data );
      });
    </script>
  <?php }


  include('header.php');
?>


      here is the apartment list

<?php
  include('footer.php');
?>