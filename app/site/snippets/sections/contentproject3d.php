   <!-- content-3d-model -->
  <div class="col-sm-7 middle-col col-sm-offset-3">
      
    <iframe width="690" height="480" src="<?php echo $content->sketchfabmodel() ?>/embed" 
        frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" onmousewheel="">
    </iframe>
  </div>

  <div class="col-sm-2 caption">
    <p><?php echo $content->modelcaption()->kirbytextRaw() ?></p>
  </div>
  <!-- ./content-3d-model -->