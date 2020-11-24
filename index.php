<!DOCTYPE html>
<html lang="en">

<!-- Header -->
<?php include('./templates/header.php'); ?>

<!-- Main -->
<main class="bg">
  <!-- Only Section -->
  <section>
    <div class="container mx-auto">
      <!-- Section Title -->
      <h1 class="text-dark text-center font-weight-bold my-5 shadow rounded-lg py-1">Wind Turbine Inspection Items</h1>

      <!-- Grid Container -->
      <div id='container' class="row mx-auto">


      </div> <!-- end of grid -->

    </div> <!-- end of container -->

  </section>
</main>

<!-- Footer -->
<?php include('./templates/footer.php'); ?>

<!-- Ajax script to get the PHP from data.php -->
<script type="text/javascript">
  $(document).ready(function() {
    $("#container").load("data.php", function(res, status, xhr) {
      if (status == 'error') {
        alert('There was an error with the Ajax call')
      }
    });
  });
</script>
</body>

</html>