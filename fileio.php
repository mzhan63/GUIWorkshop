<?php
      $selected_radio_button = $_POST['group1'];
      $dir = $_POST['dir'];
      $filename = $_POST['filename'];
      $text = $_POST['texttobeputinfile'];
      $file= $dir . "/" . $filename;
      if ($selected_radio_button == 'write'&& is_dir($dir)) {
            file_put_contents($file, $text.$text);
            echo '<p><h1>Success Writing to File</h1>';
      }
      else if ($selected_radio_button == 'read'&& is_dir($dir))
      {
            $readfromfile = file_get_contents($file);
            echo '<p><h1>Success when reading from file</h1>';
            echo "<p><h1>File containted: $readfromfile</h1>";
      }
      else 
      {
            echo "<p><h1>Something weird is going on, no file io!</h1></p>";
      }
?>