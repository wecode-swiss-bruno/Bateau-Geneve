<?php if(!$this->hasCenter()): ?>
    <div class="text-warning fw-500 rounded">
        <b><?php echo app('translator')->get('admin::lang.locations.alert_missing_map_center'); ?></b>
    </div>
<?php elseif(!$this->isConfigured()): ?>
    <div class="text-warning fw-500 rounded">
        <b><?php echo app('translator')->get('admin::lang.locations.alert_missing_map_config'); ?></b>
    </div>
<?php else: ?>
    <div
        data-control="map-view"
        data-map-height="<?php echo e($mapHeight); ?>"
        data-map-zoom="<?php echo e($mapZoom); ?>"
        data-map-center='<?php echo json_encode($mapCenter, 15, 512) ?>'
        data-map-shape-selector="<?php echo e($shapeSelector); ?>"
        data-map-editable-shape="<?php echo e(!$previewMode); ?>"
    >
        <div class="map-view"></div>
    </div>
<?php endif; ?>
<?php /**PATH /home/clients/90374f62723720b37b942de7178cb4c4/sites/app.uramaki-store.com/app/admin/formwidgets/mapview/mapview.blade.php ENDPATH**/ ?>