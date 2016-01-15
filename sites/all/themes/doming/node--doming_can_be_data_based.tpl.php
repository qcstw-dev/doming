<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
    <div class="col-xs-12 text-center padding-0">
        <h2><?= $title ?></h2>
    </div>
    <div class="col-xs-12 text-justify"><?php
        print $field_databased_text[0]['value'] ?>
    </div>
    <div class="col-xs-12 text-center padding-0">
        <div class="col-sm-4 col-md-4">
            <div class="thumbnail margin-auto">
                <img src="<?php print url("/sites/default/files/data-based/barcode.jpg") ?>" alt="Doming label barcode" title="Doming label barcode">
            </div>
            <p class="subtitle-pic margin-top-10">Barcode</p>
        </div>
        <div class="col-sm-4 col-md-4">
            <div class="thumbnail margin-auto">
                <img src="<?php print url("/sites/default/files/data-based/qr-code.jpg") ?>" alt="Dome labels QR code" title="Dome labels QR code">
            </div>
            <p class="subtitle-pic margin-top-10">QR code</p>
        </div>
        <div class="col-sm-4 col-md-4">
            <div class="thumbnail margin-auto">
                <img src="<?php print url("/sites/default/files/data-based/running-number.jpg") ?>" alt="3D doming running number" title="3D doming running number">
            </div>
            <p class="subtitle-pic margin-top-10">Running number</p>
        </div>
    </div>
</div>
