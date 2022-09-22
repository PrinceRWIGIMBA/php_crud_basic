<?php
if(isset($_SESSION['message'])):
?>
<div class="alter alter-warning alter-dismissible fade show" role="alter">
    <strong>yooo!</strong><?=$_SESSION['message'];?>
    <button type="button" class="btn-close" data-bs-dismiss="alter" aria-label="close">

    </button>

</div>
<?php
unset($_SESSION['message']);

endif;?>