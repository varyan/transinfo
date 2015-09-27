<div id="breadcrumb">
    <ul class="breadcrumb text-center">
        <li class="text-info"><i class="fa fa-list"></i> <a href="<?=base_url($lang.'/user/profile')?>"><?=$system_title['cargo_list']?></a></li>
    </ul>
</div>
<table class="table table-striped m-top-md">
    <thead class="text-primary text-uppercase">
    <tr class="bg-theme">
        <th>Rate from</th>
        <th>Rate for</th>
        <th>Rate value</th>
        <th>Rate date</th>
    </tr>
    </thead>
    <tbody class="text-primary">
        <?php if(count($rate_info)) : ?>
            <?php foreach($rate_info as $rate) : ?>
                <tr>
                    <td><img class="img-responsive img-small" src="<?=base_url('assets/img/defaultuser.jpg')?>"><?=$rate->from_id?></td>
                    <td><?=$system_title[$rate->title]?></td>
                    <td><?=$rate->value?></td>
                    <td><?=$rate->created_at?></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="4"><h3 class="text-primary text-center"><?=$system_title['no_rating']?></h3></td></tr>
        <?php endif; ?>
    </tbody>
</table>
