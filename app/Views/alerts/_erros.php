<?php if ($this->errors):?>
<div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <?php foreach ($this->errors as $msg): ?>
        <p><i class="glyphicon glyphicon-alert"></i> <?php echo $msg; ?></p>
        <?php endforeach; ?>
    </div>
<?php endif; ?>