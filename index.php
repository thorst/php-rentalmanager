<?php

  $name = "Home";

  // Define head section, below global scripts
  function sectionHead(){?>
    <style>
      .starter-template {
        padding: 3rem 1.5rem;
        text-align: center;
      }
    </style>
  <?php }

  include('header.php');
?>

  <div class="starter-template">
    <h1>Bootstrap starter template</h1>
    <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
  </div>

<?php
  include('footer.php');
?>