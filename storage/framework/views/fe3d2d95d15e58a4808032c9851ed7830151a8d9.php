<div class="calendar-popover-content">
    <h5>
        <a href="<?php echo e(admin_url('reservations/edit')); ?>/{{id}}">#{{id}}</a>
        &nbsp;&nbsp;&nbsp;&nbsp;
        
            <span
                class="label label-secondary text-white"
                style="background-color: {{status.status_color}};"
            >{{status.status_name}}</span>
        
    </h5>

    <p>
        <b><?php echo app('translator')->get('admin::lang.reservations.column_table'); ?>:</b>
        
            {{#tables}}<em>{{table_name}}</em> - {{/tables}}
            {{^tables}}No Table({{/tables}}
        
    </p>
    <p>
        <b><?php echo app('translator')->get('admin::lang.reservations.label_guest'); ?>:</b>
        {{guest_num}}
    </p>
    <p>
        <b><?php echo app('translator')->get('admin::lang.reservations.label_reservation_time'); ?>:</b>
        {{reserve_time}}
    </p>
    <p>
        <b><?php echo app('translator')->get('admin::lang.reservations.label_customer_name'); ?>:</b>
        {{first_name}} {{last_name}}
    </p>
    <p>
        <b><?php echo app('translator')->get('admin::lang.label_email'); ?>:</b>
        {{email}}
    </p>

    <a href="<?php echo e(admin_url('reservations/edit')); ?>/{{id}}">Editer</a>
</div>
<?php /**PATH /Applications/MAMP/htdocs/bateau-geneve/app/admin/views/reservations/calendar_popover.blade.php ENDPATH**/ ?>