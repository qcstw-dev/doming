<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
    <div class="col-xs-12">
        <h3>Title</h3>
        <div class="gallery gallery-container-4">
            <div class="col-xs-3 col-sm-3 padding"><a class="thumbnail" href="<?php print url("/sites/default/files/factory-and-process/4-1-outisde-of-the-building.jpg") ?>">
              <img class="" src="<?php print url("/sites/default/files/factory-and-process/4-1-outisde-of-the-building.jpg") ?>" alt="Outisde of the building" title="Outisde of the building" />
            </a></div>
            <div class="col-xs-3 col-sm-3 padding"><a class="thumbnail" href="<?php print url("/sites/default/files/factory-and-process/4-2-office-merchandising.jpg") ?>">
              <img class="" src="<?php print url("/sites/default/files/factory-and-process/4-2-office-merchandising.jpg") ?>" alt="Office - Merchandising" title="Office - Merchandising" />
            </a></div>
            <div class="col-xs-3 col-sm-3 padding"><a class="thumbnail" href="<?php print url("/sites/default/files/factory-and-process/4-3-visitors-waiting-room.jpg") ?>">
              <img class="" src="<?php print url("/sites/default/files/factory-and-process/4-3-visitors-waiting-room.jpg") ?>" alt="Visitors waiting room" title="Visitors waiting room" />
            </a></div>
            <div class="col-xs-3 col-sm-3 padding"><a class="thumbnail" href="<?php print url("/sites/default/files/factory-and-process/4-4-meeting-room.jpg") ?>">
              <img class="" src="<?php print url("/sites/default/files/factory-and-process/4-4-meeting-room.jpg") ?>" alt="Meeting room" title="Meeting room" />
            </a></div>
        </div>
    </div>
    <div class="col-xs-12">
        <h3>Title</h3>
        <div class="gallery gallery-container-5">
            <div class="col-xs-3 col-sm-3 padding"><a class="thumbnail" href="<?php print url("/sites/default/files/factory-and-process/5-1-warning-assembly-shop.jpg") ?>">
              <img class="" src="<?php print url("/sites/default/files/factory-and-process/5-1-warning-assembly-shop.jpg") ?>" alt="Warning assembly shop" title="Warning assembly shop" />
            </a></div>
            <div class="col-xs-3 col-sm-3 padding"><a class="thumbnail" href="<?php print url("/sites/default/files/factory-and-process/5-2-assembling-and-packing-workers.jpg") ?>">
              <img class="" src="<?php print url("/sites/default/files/factory-and-process/5-2-assembling-and-packing-workers.jpg") ?>" alt="Assembling and packing workers" title="Assembling and packing workers" />
            </a></div>
            <div class="col-xs-3 col-sm-3 padding"><a class="thumbnail" href="<?php print url("/sites/default/files/factory-and-process/5-3-quality-inspection.jpg") ?>">
              <img class="" src="<?php print url("/sites/default/files/factory-and-process/5-3-quality-inspection.jpg") ?>" alt="Quality inspection" title="Quality inspection" />
            </a></div>
            <div class="col-xs-3 col-sm-3 padding"><a class="thumbnail" href="<?php print url("/sites/default/files/factory-and-process/5-4-quality-inspection.jpg") ?>">
              <img class="" src="<?php print url("/sites/default/files/factory-and-process/5-4-quality-inspection.jpg") ?>" alt="Quality inspection" title="Quality inspection" />
            </a></div>
        </div>
    </div>
    <div class="col-xs-12">
        <h3>Title</h3>
        <div class="gallery gallery-container-6">
            <div class="col-xs-3 col-sm-3 padding"><a class="thumbnail" href="<?php print url("/sites/default/files/factory-and-process/6-1-production-samples-storage.jpg") ?>">
              <img class="" src="<?php print url("/sites/default/files/factory-and-process/6-1-production-samples-storage.jpg") ?>" alt="Production samples storage" title="Production samples storage" />
            </a></div>
            <div class="col-xs-3 col-sm-3 padding"><a class="thumbnail" href="<?php print url("/sites/default/files/factory-and-process/6-2-raw-material-storage.jpg") ?>">
              <img class="" src="<?php print url("/sites/default/files/factory-and-process/6-2-raw-material-storage.jpg") ?>" alt="Raw material storage" title="Raw material storage" />
            </a></div>
            <div class="col-xs-3 col-sm-3 padding"><a class="thumbnail" href="<?php print url("/sites/default/files/factory-and-process/6-3-storage.jpg") ?>">
              <img class="" src="<?php print url("/sites/default/files/factory-and-process/6-3-storage.jpg") ?>" alt="Storage" title="Storage" />
            </a></div>
        </div>
    </div>
</div>
<script>
    $('.gallery-container-4').magnificPopup({
      delegate: 'a', // child items selector, by clicking on it popup will open
      type: 'image',
      gallery:{enabled:true}
    });
    $('.gallery-container-5').magnificPopup({
      delegate: 'a', // child items selector, by clicking on it popup will open
      type: 'image',
      gallery:{enabled:true}
    });
    $('.gallery-container-6').magnificPopup({
      delegate: 'a', // child items selector, by clicking on it popup will open
      type: 'image',
      gallery:{enabled:true}
    });
</script>
