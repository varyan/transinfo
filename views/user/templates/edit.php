<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <button type="button" id="profile_edit" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i> <?=$system_title['edit']?></button>
        </div>
    </div><!-- /panel -->
</div>
<div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="text-primary"><i class="fa fa-globe"></i> <?=$system_title['global_info']?></h4>
        </div>
        <div class="panel-body">
            <div class="form-group padding-xs">
                <div class="col-md-5">
                    <label><?=$system_title['username']?></label>
                </div>
                <div class="col-md-7">
                    <label data-for="user" id="username" class=""><?=$user->username?></label>
                    <span></span>
                </div><!-- /.col -->
            </div><!-- /form-group -->
            <div class="form-group padding-xs">
                <div class="col-md-5">
                    <label><?=$system_title['email']?></label>
                </div>
                <div class="col-md-7">
                    <label data-for="user" id="email" class="editable"><?=$user->email?></label>
                    <span></span>
                </div><!-- /.col -->
            </div><!-- /form-group -->
        </div>
    </div><!-- /panel -->
</div>
<div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="text-primary"><i class="fa fa-user-secret"></i> <?=$system_title['director_person']?></h4>
        </div>
        <div class="panel-body">
            <div class="form-group padding-xs">
                <div class="col-md-5">
                    <label><?=$system_title['surname']?></label>
                </div>
                <div class="col-md-7">
                    <label data-for="user_info" id="director_person_surname" class="editable"><?=$user_info->director_person_surname?></label>
                    <span></span>
                </div><!-- /.col -->
            </div><!-- /form-group -->
            <div class="form-group padding-xs">
                <div class="col-md-5">
                    <label><?=$system_title['name']?></label>
                </div>
                <div class="col-md-7">
                    <label data-for="user_info" id="director_person_name" class="editable"><?=$user_info->director_person_name?></label>
                    <span></span>
                </div><!-- /.col -->
            </div><!-- /form-group -->
            <div class="form-group padding-xs">
                <div class="col-md-5">
                    <label><?=$system_title['fatherland']?></label>
                </div>
                <div class="col-md-7">
                    <label data-for="user_info" id="director_person_fatherland" class="editable"><?=$user_info->director_person_fatherland?></label>
                    <span></span>
                </div><!-- /.col -->
            </div><!-- /form-group -->
        </div>
    </div><!-- /panel -->
</div>
<div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="text-primary"><i class="fa fa-home"></i> <?=$system_title['leg_address']?></h4>
        </div>
        <div class="panel-body">
            <div class="form-group padding-xs">
                <div class="col-md-5">
                    <label><?=$system_title['country']?></label>
                </div>
                <div class="col-md-7">
                    <label data-for="user" id="legal_country" class="editable"><?=$user_info->legal_country?></label>
                    <span></span>
                </div><!-- /.col -->
            </div><!-- /form-group -->
            <div class="form-group padding-xs">
                <div class="col-md-5">
                    <label><?=$system_title['city']?></label>
                </div>
                <div class="col-md-7">
                    <label data-for="user_info" id="legal_city" class="editable"><?=$user_info->legal_city?></label>
                    <span></span>
                </div><!-- /.col -->
            </div><!-- /form-group -->
            <div class="form-group padding-xs">
                <div class="col-md-5">
                    <label><?=$system_title['region']?></label>
                </div>
                <div class="col-md-7">
                    <label data-for="user_info" id="legal_region" class="editable"><?=$user_info->legal_region?></label>
                    <span></span>
                </div><!-- /.col -->
            </div><!-- /form-group -->
        </div>
    </div><!-- /panel -->
</div>
<div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="text-primary"><i class="fa fa-building"></i> <?=$system_title['work_address']?></h4>
        </div>
        <div class="panel-body">
            <div class="form-group padding-xs">
                <div class="col-md-5">
                    <label><?=$system_title['country']?></label>
                </div>
                <div class="col-md-7">
                    <label data-for="user" id="work_country" class="editable"><?=$user_info->work_country?></label>
                    <span></span>
                </div><!-- /.col -->
            </div><!-- /form-group -->
            <div class="form-group padding-xs">
                <div class="col-md-5">
                    <label><?=$system_title['city']?></label>
                </div>
                <div class="col-md-7">
                    <label data-for="user_info" id="work_city" class="editable"><?=$user_info->work_city?></label>
                    <span></span>
                </div><!-- /.col -->
            </div><!-- /form-group -->
            <div class="form-group padding-xs">
                <div class="col-md-5">
                    <label><?=$system_title['region']?></label>
                </div>
                <div class="col-md-7">
                    <label data-for="user_info" id="work_region" class="editable"><?=$user_info->work_region?></label>
                    <span></span>
                </div><!-- /.col -->
            </div><!-- /form-group -->
        </div>
    </div><!-- /panel -->
</div>
<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="text-primary"><i class="fa fa-phone"></i> <?=$system_title['contact_info']?></h4>
        </div>
        <div class="panel-body">
            <div class="form-group padding-xs">
                <div class="col-md-5">
                    <label><?=$system_title['surname']?></label>
                </div>
                <div class="col-md-7">
                    <label data-for="user_info" id="contact_person_surname" class="editable"><?=$user_info->contact_person_surname?></label>
                    <span></span>
                </div><!-- /.col -->
            </div><!-- /form-group -->
            <div class="form-group padding-xs">
                <div class="col-md-5">
                    <label><?=$system_title['name']?></label>
                </div>
                <div class="col-md-7">
                    <label data-for="user_info" id="contact_person_name" class="editable"><?=$user_info->contact_person_name?></label>
                    <span></span>
                </div><!-- /.col -->
            </div><!-- /form-group -->
            <div class="form-group padding-xs">
                <div class="col-md-5">
                    <label><?=$system_title['fatherland']?></label>
                </div>
                <div class="col-md-7">
                    <label data-for="user_info" id="contact_person_fatherland" class="editable"><?=$user_info->contact_person_fatherland?></label>
                    <span></span>
                </div><!-- /.col -->
            </div><!-- /form-group -->
            <div class="form-group padding-xs">
                <div class="col-md-5">
                    <label><?=$system_title['bank_details']?></label>
                </div>
                <div class="col-md-7">
                    <label data-for="user_info" id="bank_details" class="editable"><?=$user_info->bank_details?></label>
                    <span></span>
                </div><!-- /.col -->
            </div><!-- /form-group -->
            <div class="form-group padding-xs">
                <div class="col-md-5">
                    <label><?=$system_title['inn']?></label>
                </div>
                <div class="col-md-7">
                    <label data-for="user_info" id="inn" class="editable"><?=$user_info->inn?></label>
                    <span></span>
                </div><!-- /.col -->
            </div><!-- /form-group -->
            <div class="form-group padding-xs">
                <div class="col-md-5">
                    <label><?=$system_title['fax']?></label>
                </div>
                <div class="col-md-7">
                    <label data-for="user_info" id="fax" class="editable"><?=$user_info->fax?></label>
                    <span></span>
                </div><!-- /.col -->
            </div><!-- /form-group -->
            <div class="form-group padding-xs">
                <div class="col-md-5">
                    <label><?=$system_title['website']?></label>
                </div>
                <div class="col-md-7">
                    <label data-for="user_info" id="website" class="editable"><?=$user_info->website?></label>
                    <span></span>
                </div><!-- /.col -->
            </div><!-- /form-group -->
            <div class="form-group padding-xs">
                <div class="col-md-5">
                    <label><?=$system_title['skype']?></label>
                </div>
                <div class="col-md-7">
                    <label data-for="user_info" id="skype" class="editable"><?=$user_info->skype?></label>
                    <span></span>
                </div><!-- /.col -->
            </div><!-- /form-group -->
            <div class="form-group padding-xs">
                <div class="col-md-5">
                    <label><?=$system_title['icq']?></label>
                </div>
                <div class="col-md-7">
                    <label data-for="user_info" id="icq" class="editable"><?=$user_info->icq?></label>
                    <span></span>
                </div><!-- /.col -->
            </div><!-- /form-group -->
            <?php if($numbers = $user_get($user->id,'phone_numbers')) : ?>
            <?php foreach($numbers as $number) : ?>
                <div class="form-group padding-xs">
                    <div class="col-md-5">
                        <label><?=$system_title[$number->type.'_phone']?></label>
                    </div>
                    <div class="col-md-7">
                        <label data-for="phone_numbers" id="number" data-id="<?=$number->id?>" class="editable"><?=$number->number?></label>
                        <span></span>
                    </div><!-- /.col -->
                </div><!-- /form-group -->
            <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div><!-- /panel -->
</div>