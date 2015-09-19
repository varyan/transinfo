<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?=$title?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="<?=base_url()?>assets/img/title-icon.png" />
    <link href="<?=base_url()?>assets/css/global.css" rel="stylesheet">
    <script src="<?=base_url()?>assets/js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&libraries=places&language=<?=$api_lang?>"></script>

</head>
<body class=" pace-done" onload="lang = '<?=$lang?>';">
    <div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="width: 100%;">
        <div class="pace-progress-inner"></div>
    </div>
    <div class="popup_align" style="display: inline-block; vertical-align: middle; height: 100%;"></div></div>
<!-- Overlay Div -->
<div id="overlay" class="transparent" style="display: none;"></div>
<div id="wrapper" class="sidebar-hide">
    <div id="top-nav" class="skin-6 fixed">
        <div class="brand">
            <span>Transinfo</span>
            <span class="text-toggle"> .RU</span>
        </div><!-- /brand -->
        <ul class="nav-notification clearfix">
            <li class="animated">
                <a href="<?=base_url($lang)?>">
                    <i class="fa fa-home fa-lg"></i> <?=$menu_title['index']?>
                </a>
            </li>
            <li class="animated">
                <a href="<?=base_url($lang.'/about')?>">
                    <i class="fa fa-info fa-lg"></i> <?=$menu_title['about']?>
                </a>
            </li>
            <li class="animated">
                <a href="<?=base_url($lang.'/contact')?>">
                    <i class="fa fa-phone fa-lg"></i> <?=$menu_title['contacts']?>
                </a>
            </li>
            <li class="animated bounceInLeft animation-delay4">
                <a href="<?=base_url()?>langswitch/change/ru">
                    <img class="img-responsive img-rounded" src="<?=base_url()?>assets/img/icon-ru.png">
                </a>
            </li>
            <li class="animated bounceInLeft animation-delay3">
                <a href="<?=base_url()?>langswitch/change/en">
                    <img class="img-responsive img-rounded" src="<?=base_url()?>assets/img/icon-en.png">
                </a>
            </li>
        </ul>
    </div><!-- /top-nav-->
    <div id="main-container">
        <div id="breadcrumb">
            <?php if($this->session->flashdata('error')){?>
                <div class="alert alert-danger"><?=$this->session->flashdata('error')?></div>
            <?php }elseif($this->session->flashdata('success')){?>
                <div class="alert alert-success"><?=$this->session->flashdata('success')?></div>
                <!--<a onclick="location.href='<?=base_url($lang)?>'" href="<?=base_url($lang)?>" class="label label-success">Ok</a>-->
            <?php } ?>