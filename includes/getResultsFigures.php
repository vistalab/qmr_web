
<?php

    function getResultsFigures($session,$measure) {

      // Get the variables
      include '/var/www/includes/variables.php';


      // Display the nested measures
      if( $measure == $addir || $measure == $fadir || $measure == $mddir || $measure == $rddir || $measure == $t1dir || $measure == $tvdir || $measure == $sidir )
      {
        $image_dir = $figures_dir . "/" . $session . "/" . $measure . "/";

        $images = glob($image_dir . "*.png");

        // If there are no images then display that we're still working
        if(empty($images))
        {
            echo "<h2>Still working...</h2>";
            // If the log file exists then show a link to it.
            if (file_exists($logfile))
            {
                echo "You can track progress by viewing the <a href=\"log.php\">log file.</a><br>&nbsp;";
            }
        }

        foreach($images as $i) {
          $path = explode('.', ${'i'});
          $imname = explode('/', $path[0]);

          //echo "<span style=\"text-align:left\";><h3><a href=\"${i}\">$imname[3]</a></h3></span>" ;
          echo "<a href=\"${i}\"><img src=\"${i}\" width=\"100%\" align=\"center\" title=\"Dark gray bars are 1 standard deviation from the mean. Light gray bars are 2 standard deviations from the mean\"</img></a>" ;
          echo "<p>&nbsp;</p><hr> &nbsp;";
        }
      }


      // Display the MRQ maps
      if( $measure == $mrqdir )
      {
          $images = glob($figures_dir . "/" . $mrqdir . "/" . "*.png");

          // If there are no images then display that we're still working
          if(empty($images))
          {
              echo "<h2>Still working...</h2>";
              // If the log file exists then show a link to it.
              if (file_exists($logfile))
              {
                  echo "You can track progress by viewing the <a href=\"log.php\">log file.</a><br>&nbsp;";
              }
          }

          // Display each image with the name of the image
          foreach($images as $i)
          {
            $path = explode('.', ${'i'});
            $imname = explode('/', $path[0]);

            // Display the images names if it's the mrq dir.
            echo "<span style=\"text-align:left\";><h3><a href=\"${i}\">$imname[2]</a></h3></span>" ;

            // display the imgages
            echo "<a href=\"${i}\"><img src=\"${i}\" width=\"100%\" align=\"center\"</img></a>" ;
            echo "<p>&nbsp;</p><hr> &nbsp;";
          }
      }


      // Display the DTI images from processing
      if (($measure == strtolower($dtidir)) && is_dir($figures_dir . "/" . $session . "/" . strtolower($dtidir)) )
      {
        $images = glob($figures_dir . "/" . $session . "/" . strtolower($dtidir) . "/" . "*.png");

        if(empty($images))
        {
            echo "<h2>Still working...</h2>";
            // If the log file exists then show a link to it.
            if (file_exists($logfile))
            {
                echo "You can track progress by viewing the <a href=\"log.php\">log file.</a><br>&nbsp;";
            }
        }

          foreach($images as $i) {
            $path = explode('.', ${'i'});
            $imname = explode('/', $path[0]);

            // Display the images
            echo "<span style=\"text-align:left\";><h3><a href=\"${i}\">$imname[3]</a></h3></span>" ;
            echo "<a href=\"${i}\"><img src=\"${i}\" width=\"100%\" align=\"center\"</img></a>" ;
            echo "<p>&nbsp;</p><hr> &nbsp;";
          }
      }

    }
?>


