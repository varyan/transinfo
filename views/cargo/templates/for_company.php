<?php $deals = $deals($cargo_info->id);  if(count($deals) < 1) : ?>
    <form id="ready_for" class="form-inline no-margin">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="input-group">
                    <input type="hidden" id="for_user" value="<?=$cargo_info->user_id.','.$cargo_info->id?>">
                    <input id="pay_sum" type="text" class="form-control input-sm">
                    <div class="input-group-btn">
                        <button type="submit" class="btn btn-sm btn-primary"><?=$system_title['send']?></button>
                    </div> <!-- /input-group-btn -->
                </div> <!-- /input-group -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </form>
<?php else : ?>
    <h5 class="text-primary text-center well">Вы одобрили эту сделку за <?=$deals[0]->deal_sum?> рублей.</h5>
<?php endif; ?>