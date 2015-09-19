<form method="post" name="client_form">
    <label class="text-primary text-center"><?=$system_title['cl_cargo_type']?></label>
    <input id="cargo_type" name="rate_value" type="number" min=0 max=5 step=0.1 data-size="xs" data-id="<?=$user->id?>" >
    <br>
    <label class="text-primary text-center"><?=$system_title['cl_cargo_weight']?></label>
    <input id="cargo_weight" name="rate_value" type="number" min=0 max=5 step=0.1 data-size="xs" data-id="<?=$user->id?>">
    <br>
    <label class="text-primary text-center"><?=$system_title['cl_load_days']?></label>
    <input id="load_days" name="rate_value" type="number" min=0 max=5 step=0.1 data-size="xs" data-id="<?=$user->id?>">
    <br>
    <label class="text-primary text-center"><?=$system_title['cl_unload_days']?></label>
    <input id="unload_days" name="rate_value" type="number" min=0 max=5 step=0.1 data-size="xs" data-id="<?=$user->id?>">
    <br>
    <label class="text-primary text-center"><?=$system_title['cl_payments']?></label>
    <input id="payments" name="rate_value" type="number" min=0 max=5 step=0.1 data-size="xs" data-id="<?=$user->id?>">
</form>