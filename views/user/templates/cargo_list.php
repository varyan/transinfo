<div class="panel panel-default table-responsive">
    <div class="panel-heading">
        <h5 class="label label-primary pull-right"><?=(isset($cargoes)) ? count($cargoes) : 0 ?> Item ( s )</h5>
    </div>
    <div class="padding-md clearfix">
        <table class="table table-striped table-bordered" cellspacing="0" width="100%" id="dataTable">
            <thead>
            <tr>
                <th>#</th>
                <th><?=$system_title['title']?></th>
                <th><?=$system_title['from']?></th>
                <th><?=$system_title['to']?></th>
                <th><?=$system_title['load_location']?></th>
                <th><?=$system_title['unload_location']?></th>
                <th><?=$system_title['cargo_dimensions']?></th>
                <th><?=$system_title['weight']?></th>
                <th><?=$system_title['volume']?></th>
                <th><?=$system_title['body_type']?></th>
                <?php if($user->type_id == 1) : ?>
                <th><?='Status'?></th>
                <?php endif; ?>
                <?php /*
                <th><?=$system_title['cl_payments']?></th>
                <th><?=$system_title['prepay']?></th>
                <th><?=$system_title['loading']?></th>
                <th><?=$system_title['permissions']?></th>
                */?>
            </tr>
            </thead>
            <tbody>
            <?php if(isset($cargoes)): ?>
                <?php foreach($cargoes as $cargo) : $deals = $user_deals($cargo->id); ?>
                    <tr>
                        <td style="background:<?php
                            if ($deals)  echo "#3ec291";
                            else echo "#fb5a43";
                        ?> !important;">
                            <?=anchor(base_url($lang.'/cargo/show/'.$cargo->id),$cargo->id)?></td>
                        <td><?=anchor(base_url($lang.'/cargo/show/'.$cargo->id),$cargo->title)?></td>
                        <td><?=anchor(base_url($lang.'/cargo/show/'.$cargo->id),$cargo->date_from)?></td>
                        <td><?=anchor(base_url($lang.'/cargo/show/'.$cargo->id),$cargo->date_to)?></td>
                        <td><?=anchor(base_url($lang.'/cargo/show/'.$cargo->id),$cargo->load_country.'<br>'.$cargo->load_city.'<br>'.$cargo->load_region)?></td>
                        <td><?=anchor(base_url($lang.'/cargo/show/'.$cargo->id),$cargo->unload_country.'<br>'.$cargo->unload_city.'<br>'.$cargo->unload_region)?></td>
                        <td><?=anchor(base_url($lang.'/cargo/show/'.$cargo->id),$system_title['length'].' '.$cargo->length.'<br>'.$system_title['width'].' '.$cargo->width.'<br>'.$system_title['height'].' '.$cargo->height)?></td>
                        <td><?=anchor(base_url($lang.'/cargo/show/'.$cargo->id),$system_title['from'].' '.$cargo->from_weight.'<br>'.$system_title['to'].' '.$cargo->to_weight)?></td>
                        <td><?=anchor(base_url($lang.'/cargo/show/'.$cargo->id),$system_title['from'].' '.$cargo->from_volume.'<br>'.$system_title['to'].' '.$cargo->to_volume)?></td>
                        <td><?=anchor(base_url($lang.'/cargo/show/'.$cargo->id),$body_types[$cargo->body_type])?></td>
                        <?php if($user->type_id == 1) {
                            if ($deals) { $i = 0;
                                echo "<td>";
                                foreach ($deals as $deal) {$i++;
                                    if($i <= 3) echo '<p><a href="'.base_url($lang.'/rating/show/'.$deal->deal_sender_id).'">' . $deal->deal_sender_id . ' - ' . $deal->deal_sum . '</a></p>';
                                    else{echo "<p class='padding-sm'>Show all</p>";break;}
                                }
                                echo "</td>";
                            }else{echo '<td>'.$system_title['no_offers'].'</td>';}
                        }?>
                        <?php /*
                        <td><?=$payment_types[$cargo->payment_type]?></td>
                        <td><?=$cargo->prepay?>%</td>
                        <td>
                            <?php $loading = json_decode($cargo->loading); for($i = 0; $i < count($loading); $i++) : ?>
                                <?=$system_title[$loading[$i]].'<br>'?>
                            <?php endfor; ?>
                        </td>
                        <td>
                            <?php $permission = json_decode($cargo->permission); for($i = 0; $i < count($permission); $i++) : ?>
                                <?=$permission[$i].'<br>'?>
                            <?php endfor; ?>
                        </td>
                        */?>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
            </tbody>
        </table>
    </div><!-- /.padding-md -->
</div><!-- /panel -->