<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
    <div class="col-xs-12">
        <div class="row margin-top-20">
            <div class="col-xs-12 col-sm-6 thumbnail">
                <img src="<?php print url("/sites/default/files/factory-and-process/process.jpg") ?>" alt="" title="" />
            </div>
            <div class="col-xs-12 col-sm-6">
                <h2>Title 1</h2>
                <div class="text-justify">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing 
                        elit. Donec non felis risus. Suspendisse sit amet lectus facilisis,
                        aliquam erat fermentum, dictum nisi. Ut euismod leo nulla, ut 
                        convallis leo dapibus cursus. Proin consectetur magna 
                        ac volutpat congue. Lorem ipsum dolor sit amet, consectetur adipiscing 
                        elit. Donec non felis risus. Suspendisse sit amet lectus facilisis,
                        aliquam erat fermentum, dictum nisi. Ut euismod leo nulla, ut 
                        convallis leo dapibus cursus. Proin consectetur magna 
                        ac volutpat congue.Lorem ipsum dolor sit amet, consectetur adipiscing 
                        elit. Donec non felis risus. Suspendisse sit amet lectus facilisis,
                        aliquam erat fermentum, dictum nisi. Ut euismod leo nulla, ut 
                        convallis leo dapibus cursus. Proin consectetur magna 
                        ac volutpat congue. 
                    </p>
                </div>
            </div>
        </div>
        <div class="row margin-top-20 margin-bottom-20">
            <div class="col-sm-6">
                <h2>Title 2</h2>
                <div class="text-justify">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing 
                        elit. Donec non felis risus. Suspendisse sit amet lectus facilisis,
                        aliquam erat fermentum, dictum nisi. Ut euismod leo nulla, ut 
                        convallis leo dapibus cursus. Proin consectetur magna 
                        ac volutpat congue. Lorem ipsum dolor sit amet, consectetur adipiscing 
                        elit. Donec non felis risus. Suspendisse sit amet lectus facilisis,
                        aliquam erat fermentum, dictum nisi. Ut euismod leo nulla, ut 
                        convallis leo dapibus cursus. Proin consectetur magna 
                        ac volutpat congue.Lorem ipsum dolor sit amet, consectetur adipiscing 
                        elit. Donec non felis risus. Suspendisse sit amet lectus facilisis,
                        aliquam erat fermentum, dictum nisi. Ut euismod leo nulla, ut 
                        convallis leo dapibus cursus. Proin consectetur magna 
                        ac volutpat congue.
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 thumbnail">
                <img src="<?php print url("/sites/default/files/factory-and-process/process.jpg") ?>" alt="" title="" />
            </div>
        </div>
    </div>
</div>
<div class="gallery-container">
    <a class="col-xs-3 col-sm-2 col-sm-offset-1 thumbnail" href="<?php print url("/sites/default/files/factory-and-process/LR.jpg") ?>">
      <img class="" src="<?php print url("/sites/default/files/factory-and-process/LR.jpg") ?>" alt="" title="" />
    </a>
    <a class="col-xs-3 col-sm-2 col-sm-offset-1 thumbnail" href="<?php print url("/sites/default/files/factory-and-process/stamping.jpg") ?>">
      <img class="" src="<?php print url("/sites/default/files/factory-and-process/stamping.jpg") ?>" alt="" title="" />
    </a>
    <a class="col-xs-3 col-sm-2 col-sm-offset-1 thumbnail" href="<?php print url("/sites/default/files/factory-and-process/LR.jpg") ?>">
      <img class="" src="<?php print url("/sites/default/files/factory-and-process/LR.jpg") ?>" alt="" title="" />
    </a>
    <a class="col-xs-3 col-sm-2 col-sm-offset-1 thumbnail" href="<?php print url("/sites/default/files/factory-and-process/stamping.jpg") ?>">
      <img class="" src="<?php print url("/sites/default/files/factory-and-process/stamping.jpg") ?>" alt="" title="" />
    </a>
    <a class="col-xs-3 col-sm-2 col-sm-offset-1 thumbnail" href="<?php print url("/sites/default/files/factory-and-process/stamping.jpg") ?>">
      <img class="" src="<?php print url("/sites/default/files/factory-and-process/stamping.jpg") ?>" alt="" title="" />
    </a>
    <a class="col-xs-3 col-sm-2 col-sm-offset-1 thumbnail" href="<?php print url("/sites/default/files/factory-and-process/LR.jpg") ?>">
      <img class="" src="<?php print url("/sites/default/files/factory-and-process/LR.jpg") ?>" alt="" title="" />
    </a>
    <a class="col-xs-3 col-sm-2 col-sm-offset-1 thumbnail" href="<?php print url("/sites/default/files/factory-and-process/stamping.jpg") ?>">
      <img class="" src="<?php print url("/sites/default/files/factory-and-process/stamping.jpg") ?>" alt="" title="" />
    </a>
    <a class="col-xs-3 col-sm-2 col-sm-offset-1 thumbnail" href="<?php print url("/sites/default/files/factory-and-process/LR.jpg") ?>">
      <img class="" src="<?php print url("/sites/default/files/factory-and-process/LR.jpg") ?>" alt="" title="" />
    </a>
</div>
<script>
    $('.gallery-container').magnificPopup({
      delegate: 'a', // child items selector, by clicking on it popup will open
      type: 'image',
      gallery:{enabled:true}
    });
</script>