<!-- Logout confirmation -->
<div class="custom-popup width-100" id="logoutConfirm">
    <div class="padding-md">
        <h4 class="m-top-none"> <?=$confirm['message']?></h4>
    </div>

    <div class="text-center">
        <a class="btn btn-success m-right-sm" href="<?=$confirm['url']?>"><?=$confirm['ok']?></a>
        <button class="btn btn-danger logoutConfirm_close">Cancel</button>
    </div>
</div>