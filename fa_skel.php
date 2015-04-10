<!DOCTYPE html>

<html>

<?php
  include_once "/var/www/includes/getPage.php";

  // Set page-specific variables after the load above - to overwrite defaults
  $thename = "Fractional Anisotropy";
  $this_page = "fa";
  $result_dir = "fa";
  $figures_base_dir = "figures/";

  // Call the get page function to build the actual page
  getPage($thename,$this_page,$result_dir,$figures_base_dir);
?>

</html>

