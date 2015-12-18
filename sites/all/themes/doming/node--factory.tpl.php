<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
    <div class="col-xs-12">
        <h3>Title</h3>
        <div class="gallery gallery-container-1">
            <div class="col-xs-3 col-sm-3 padding"><a class="thumbnail" href="<?php print url("/sites/default/files/factory-and-process/1-1-rules-to-enter-white-room.jpg") ?>">
              <img class="" src="<?php print url("/sites/default/files/factory-and-process/1-1-rules-to-enter-white-room.jpg") ?>" alt="Rules to enter white room" title="Rules to enter white room" />
            </a></div>
            <div class="col-xs-3 col-sm-3 padding"><a class="thumbnail" href="<?php print url("/sites/default/files/factory-and-process/1-2-dust-temperature-and-humidity-control-set-up.jpg") ?>">
              <img class="" src="<?php print url("/sites/default/files/factory-and-process/1-2-dust-temperature-and-humidity-control-set-up.jpg") ?>" alt="Dust, temperature & Humidity control set up" title="Dust, temperature & Humidity control set up" />
            </a></div>
            <div class="col-xs-3 col-sm-3 padding"><a class="thumbnail" href="<?php print url("/sites/default/files/factory-and-process/1-3-doming-machine.jpg") ?>">
              <img class="" src="<?php print url("/sites/default/files/factory-and-process/1-3-doming-machine.jpg") ?>" alt="Doming machine" title="Doming machine" />
            </a></div>
            <div class="col-xs-3 col-sm-3 padding"><a class="thumbnail" href="<?php print url("/sites/default/files/factory-and-process/1-4-printer-machine.jpg") ?>">
              <img class="" src="<?php print url("/sites/default/files/factory-and-process/1-4-printer-machine.jpg") ?>" alt="Printer machine" title="Printer machine" />
            </a></div>
        </div>
    </div>
    <div class="col-xs-12">
        <h3>Title</h3>
        <div class="gallery gallery-container-2">
            <div class="col-xs-3 col-sm-3 padding"><a class="thumbnail" href="<?php print url("/sites/default/files/factory-and-process/2-1-computer-setting.jpg") ?>">
              <img class="" src="<?php print url("/sites/default/files/factory-and-process/2-1-computer-setting.jpg") ?>" alt="Computer setting" title="Computer setting" />
            </a></div>
            <div class="col-xs-3 col-sm-3 padding"><a class="thumbnail" href="<?php print url("/sites/default/files/factory-and-process/2-2-doming-machine.jpg") ?>">
              <img class="" src="<?php print url("/sites/default/files/factory-and-process/2-2-doming-machine.jpg") ?>" alt="Doming machine" title="Doming machine" />
            </a></div>
            <div class="col-xs-3 col-sm-3 padding"><a class="thumbnail" href="<?php print url("/sites/default/files/factory-and-process/2-3-doming-under-proceeding.jpg") ?>">
              <img class="" src="<?php print url("/sites/default/files/factory-and-process/2-3-doming-under-proceeding.jpg") ?>" alt="Doming under processing" title="Doming under processing" />
            </a></div>
            <div class="col-xs-3 col-sm-3 padding"><a class="thumbnail" href="<?php print url("/sites/default/files/factory-and-process/2-4-domed-printed-sheet-drying.jpg") ?>">
              <img class="" src="<?php print url("/sites/default/files/factory-and-process/2-4-domed-printed-sheet-drying.jpg") ?>" alt="Domed printed sheet drying" title="Domed printed sheet drying" />
            </a></div>
        </div>
    </div>
    <div class="col-xs-12">
        <h3>Title</h3>
        <div class="gallery gallery-container-3">
            <div class="col-xs-3 col-sm-3 padding"><a class="thumbnail" href="<?php print url("/sites/default/files/factory-and-process/3-1-computer-programming.jpg") ?>">
              <img class="" src="<?php print url("/sites/default/files/factory-and-process/3-1-computer-programming.jpg") ?>" alt="Computer programming" title="Computer programming" />
            </a></div>
            <div class="col-xs-3 col-sm-3 padding"><a class="thumbnail" href="<?php print url("/sites/default/files/factory-and-process/3-2-printer-in-action.jpg") ?>">
              <img class="" src="<?php print url("/sites/default/files/factory-and-process/3-2-printer-in-action.jpg") ?>" alt="Printer in action" title="Printer in action" />
            </a></div>
        </div>
    </div>
</div>
<script>
    $('.gallery-container-1').magnificPopup({
      delegate: 'a', // child items selector, by clicking on it popup will open
      type: 'image',
      gallery:{enabled:true}
    });
    $('.gallery-container-2').magnificPopup({
      delegate: 'a', // child items selector, by clicking on it popup will open
      type: 'image',
      gallery:{enabled:true}
    });
    $('.gallery-container-2').magnificPopup({
      delegate: 'a', // child items selector, by clicking on it popup will open
      type: 'image',
      gallery:{enabled:true}
    });
    $('.gallery-container-3').magnificPopup({
      delegate: 'a', // child items selector, by clicking on it popup will open
      type: 'image',
      gallery:{enabled:true}
    });
</script>
