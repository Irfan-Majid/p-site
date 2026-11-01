<?php
$this->pageTitle = 'Home - ' . Yii::app()->name;
?>
<!-- main content -->
<!---slider section --->
<!---slider section --->
<div class="col-md-12 bg_white">
    <div class="fr_lr">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 banner">
            <div class="container-fluid ">
                <div class="col-lg-3 col-md-3">
                    <!--IGP Image and Message Link-->
                    <div class="col-md-12 bg_blue_site white box-shadow-6-1 text-center padding-10-10 relative" style="/*height:46vh;*/ height: 305px; overflow: hidden;">
                        <?= Content::get_picture(2, 'igp_img') ?>
                        <h2 class="margin_top_10">
                            <span class="block size-16"><?= Content::getData(2, 'title') ?></span>
                        </h2>
                        <div class="absolute left-0 bottom-0 margin_bottom_10 z-index-100 text-center width_full google_pragati_narrow">
                            <?php echo CHtml::link('Read more <i class="fa fa-angle-double-right"></i>', array('content/view', 'id' => 2), array('class' => 'scroll btn button_4_1 size-16')); ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 banner_main no-padding-left hide_in_700">
                    <div class="bg_white banner_main_child box-shadow-6">
                        <div class="slider policeSlider" style="background: url('<?php echo Yii::app()->baseUrl; ?>/uploads/banner/a.jpg') center center no-repeat;">
                            <?= Banner::home_slider(1) ?>                            
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>    <!--</div>-->
<div class="row second_look margin_bottom_1 bg_img_9 no-display" id="rrr">
    &nbsp;
</div>
<!---recent activities section --->
<!--===== Recent Activities =====-->
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg_gray_gradient">
    <div class="fr_lr">
        <!--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
        <div class="container-fluid">
            <div class="col-md-12">
                <div class="col-md-12 padding-bottom-5-prcnt ">
                    <div class="row">
                        <!--[Left] Widgets / Linked Buttons============================-->
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-left text-left">
                            <div class="col-md-12 margin_bottom_10">
                                <div class=" row box-shadow-6-1 relative z-index-10" style="height: 100%">
                                    <ul class="no-margin no-padding list-2 google_pragati_narrow">
                                        <li class="bg_red_site text-left"><a href="http://pcc.police.gov.bd/en/f?p=500" class="lnk-3-2"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/clearence.png" class="bg_blue_site_1 icon_img_1" alt="activities image"> অনলাইন পুলিশ ক্লিয়ারেন্স</a> </li>
                                        <li class="bg_red_site text-left"><a href="https://play.google.com/store/apps/details?id=com.ntitas.bdPoliceHelpLine&amp;hl=en" class="lnk-3-2"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/help_line.png" class="bg_blue_site_1 icon_img_1" alt="activities image"> বিডি পুলিশ হেল্প লাইন</a> </li>
                                        <li class="bg_red_site text-left"><?php echo CHtml::link('<img src="' . Yii::app()->theme->baseUrl . '/assets/images/expert_call.png" class="bg_blue_site_1 icon_img_1" alt="activities image"> টেলিফোন ও ই-মেইল ডাই :', array('content/view', 'id' => 14), array('class' => 'lnk-3-2')); ?></li>
                                        <li class="bg_red_site text-left"><a href="http://discipline.police.gov.bd:8080/apex/f?p=347:1::::::" class="lnk-3-2"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/opinion.png" class="bg_blue_site_1 icon_img_1" alt="activities image">  মতামত ও অভিযোগ</a> </li>
                                        <li class="bg_red_site text-left"><?php echo CHtml::link('<img src="' . Yii::app()->theme->baseUrl . '/assets/images/nis_bdpolice.png" class="bg_blue_site_1 icon_img_1" alt="activities image"> এনআইএস বাংলাদেশ পুলিশ', array('document/index', 'id' => 2), array('class' => 'lnk-3-2')); ?></li>
                                        <li class="bg_red_site text-left"><?php echo CHtml::link('<img src="' . Yii::app()->theme->baseUrl . '/assets/images/hotline.png" class="bg_blue_site_1 icon_img_1" alt="activities image"> জরুরী সেবা সমূহ', array('content/view', 'id' => 15), array('class' => 'lnk-3-2')); ?></li>
                                        <li class="bg_red_site text-left"><?php echo CHtml::link('<img src="' . Yii::app()->theme->baseUrl . '/assets/images/right_information.png" class="bg_blue_site_1 icon_img_1" alt="activities image"> তথ্য জানার অধিকার', array('document/index', 'id' => 3), array('class' => 'lnk-3-2')); ?></li>
                                     <li class="bg_red_site text-left"><?php echo CHtml::link('<img src="' . Yii::app()->theme->baseUrl . '/assets/images/beat_policeing.gif" class="bg_blue_site_1 icon_img_1" alt="activities image"> বিট পুলিশিং কার্যক্রম', array('content/view', 'id' => 201), array('class' => 'lnk-3-2')); ?></li>
                                    
                                    </ul>
                                    <ul class="no-margin no-padding list-2 google_pragati_narrow col-sm-12 col-xs-12 hidden-lg hidden-md">
                                        <li class="bg_red_site text-right"><a href="en/press_release.html" class="lnk-3-1 size-14">নিয়োগ বিজ্ঞপ্তি<img src="storage/upload/announcement/btLkgP7ZYixPpI1jfFlYG1qBMVp7qBp57Vh2ovrI.png" class="bg_blue_site_1 icon_img_2" alt="icon"></a> </li>
                                        <li class="bg_red_site text-right"><a href="en/recruitment_information.html" class="lnk-3-1 size-14">Recruitment Information <img src="storage/upload/announcement/police-info_file844111724.png" class="bg_blue_site_1 icon_img_2" alt="icon"></a> </li>
                                        <li class="bg_red_site text-right"><a href="en/procurement_ortender_notice.html" class="lnk-3-1 size-14">Procurement / Tender Notice <img src="storage/upload/announcement/police-info_file900111750.png" class="bg_blue_site_1 icon_img_2" alt="icon"></a> </li>
                                        <li class="bg_red_site text-right"><a href="en/legal_instruments.html" class="lnk-3-1 size-14">Legal Instrument <img src="storage/upload/announcement/police-info_file416111811.png" class="bg_blue_site_1 icon_img_2" alt="icon"></a> </li>
                                        <li class="bg_red_site text-right"><a href="en/innovative_activities.html" class="lnk-3-1 size-14">Innovative Activities <img src="storage/upload/announcement/DVN6JzYHKGuUSEf1Rg4WeVkMf9r5NKPCnZoVj6qF.jpg" class="bg_blue_site_1 icon_img_2" alt="icon"></a> </li>
                                    </ul>
                                </div>
                                <div class="row box-shadow-6-1 relative z-index-10 margin_top_10 bg_red_white_2 red_site text-right google_pragati_narrow" style="height: 100%; padding:20px 10px 15px 0;">
                                    <h1 class="size-25 text-center">পুলিশ কন্ট্রোল রুম, চট্টগ্রাম </h1>
                                    <div class="size-20">
                                        <!-- জরুরী প্রয়োজনে- (০২) ৯৫৫৫৫৫৫, ৯৫৫৬৬৬৬, ৯৫৫৬৬৬৭-->

                                        <ul class="no-list text-justify">

                                            <li><i class="fa fa-phone-square"></i> :  01320108398</li>
 <li><i class="fa fa-phone-square"></i> :  01320108399</li>
  <li><i class="fa fa-phone-square"></i> :  031726867</li>
                            
                                        </ul>
                                    </div>
                                </div>
                                <!--<div class="row box-shadow-6-1 relative z-index-10 margin_top_10 bg_red_white blue_site text-right" style="height: 100%; padding:20px 10px 15px 0;">
                                    <h1 class="size-25">Traffic Hotline </h1>
                                    <h1 class="size-20"><i class="fa fa-phone-square"></i> : +880-2-9561967 </h1>
                                </div>-->
                            </div>
                            <!--==For widgets start=======================================================-->
                            <!--Widget-1=================-->
                            <div class="col-md-12 police-blue margin_bottom_10 widget_panel box-shadow-6-1">
                                <!--Heading of Widget-->
                                <h1 class="heading-2 padding-10-0 size-20 google_playball cursor-pointer"><span>Police Web Links</span></h1>
                                <!--Description-->
                                <div class="widget_description margin_bottom_10 padding-15-15">
                                    <a href="http://www.mha.gov.bd/" target="_blank" class="text-left block padding-10-10 margin_bottom_1 google_courgette"><i class="fa fa-angle-double-right"></i>Ministry of Home Affairs</a>
                                    <a href="http://www.bangladesh.gov.bd/" target="_blank" class="text-left block padding-10-10 margin_bottom_1 google_courgette"><i class="fa fa-angle-double-right"></i>Bangladesh National Portal</a>
                                    <a href="https://www.eprocure.gov.bd/" target="_blank" class="text-left block padding-10-10 margin_bottom_1 google_courgette"><i class="fa fa-angle-double-right"></i>National e-Government Procurement</a>
                                    <a href="https://www.interpol.int/" target="_blank" class="text-left block padding-10-10 margin_bottom_1 google_courgette"><i class="fa fa-angle-double-right"></i>Interpol</a>
                                    <a href="http://www.un.org/en" target="_blank" class="text-left block padding-10-10 margin_bottom_1 google_courgette"><i class="fa fa-angle-double-right"></i>UN</a>
                                    <a href="http://www.theiacp.org/" target="_blank" class="text-left block padding-10-10 margin_bottom_1 google_courgette"><i class="fa fa-angle-double-right"></i>IACP</a>
                                    <a href="http://pcc.police.gov.bd/en" target="_blank" class="text-left block padding-10-10 margin_bottom_1 google_courgette"><i class="fa fa-angle-double-right"></i>Online Police Clearance</a>
                                </div>
                                <!--Hide N Show buttons-->
                                <div class="btn  absolute top-0 right-0 collapse_widget no-focus"><i class="fa fa-angle-up"></i></div>
                                <div class="btn  absolute top-0 right-0 open_widget no-focus"><i class="fa fa-angle-down"></i></div>
                            </div>
                            <!--==For widgets end=========================================================-->
                        </div>
                        <!--Recent Activities Contents================================-->
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 padding-bottom-2-prcnt text-left" style="background: url('<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/floral-2-5-1.png') left top no-repeat,url('<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/floral-3-5-1.png') right bottom no-repeat; background-color: #f0f0f0;">
                            <h1 class="heading-1 padding-3-0-prcnt blue_site text_shadow_1 google_marcellus_SC size-20">
                                &nbsp; <?= Category::getData(3, 'title') ?> &nbsp;
                            </h1>
                            <!--for multiple columns-->
                            <div class="row">
                                <?php
                                $RecentActivities = Content::model()->findAll(array('condition' => 'category=3 AND status="Active"', 'limit' => 4, 'order' => 'created_on DESC'));
                                foreach ($RecentActivities as $key => $value) {
                                    ?>
                                    <div class="col-md-6 margin_top_10 margin_bottom_10">
                                        <div class="col-md-12 bg_white padding-bottom-10 box9 box-shadow-5 google_pragati_narrow padding_p">
                                            <h1 class="size-16 margin_bottom_10">
                                                <?php echo CHtml::link(Content::limit(Content::getData($value['id'], 'title'), 30), array('content/view', 'id' => $value['id']), array('class' => '')); ?>                         
                                            </h1>
                                           <div style="background: url('<?= Yii::app()->baseUrl ?>/uploads/content/<?= $value['image'] ?>') center center; background-size: contain;background-repeat: no-repeat;height: 100px; "></div>
                                            <?= Content::words(Content::getData($value['id'], 'details'), 30) ?> <!-- RANA DEC 16 2019 -->                                             
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                            <div class="text-center padding-bottom-10">
                                <?php echo CHtml::link('More', array('content/index', 'id' => 3), array('class' => 'btn button_2 margin_bottom_2 no-focus')); ?>  
                            </div>
                        </div>
                        <!--[Right] Widgets / Linked Buttons===========================-->
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-left text-left">
                            <div class="col-md-12 margin_bottom_10">
                                <div class=" row box-shadow-6" style="height: 100%">
                                    <ul class="no-margin no-padding list-2 google_pragati_narrow hidden-sm hidden-xs">
                                        <li class="bg_red_site text-right"><?php echo CHtml::link('প্রেস রিলিজ <img src="' . Yii::app()->theme->baseUrl . '/assets/images/press_realese.png" class="bg_blue_site_1 icon_img_2" alt="icon">', array('content/index', 'id' => 5), array('class' => 'lnk-3-1')); ?></li>
                                        <li class="bg_red_site text-right"><?php echo CHtml::link('নিয়োগ বিজ্ঞপ্তি <img src="' . Yii::app()->theme->baseUrl . '/assets/images/ricrutment.png" class="bg_blue_site_1 icon_img_2" alt="icon">', array('document/index', 'id' => 4), array('class' => 'lnk-3-1')); ?></li>
                                        <li class="bg_red_site text-right"><?php echo CHtml::link('টেন্ডার নোটিশ <img src="' . Yii::app()->theme->baseUrl . '/assets/images/tender.png" class="bg_blue_site_1 icon_img_2" alt="icon">', array('document/index', 'id' => 5), array('class' => 'lnk-3-1')); ?></li>
                                        <li class="bg_red_site text-right"><?php echo CHtml::link('Legal Instrument <img src="' . Yii::app()->theme->baseUrl . '/assets/images/legal.png" class="bg_blue_site_1 icon_img_2" alt="icon">', array('document/index', 'id' => 6), array('class' => 'lnk-3-1')); ?></li>                                      
                                        <li class="bg_red_site text-right"><?php echo CHtml::link('উদ্ভাবনমূলক কার্যক্রম <img src="' . Yii::app()->theme->baseUrl . '/assets/images/innovative.jpeg" class="bg_blue_site_1 icon_img_2" alt="icon">', array('document/index', 'id' => 7), array('class' => 'lnk-3-1')); ?></li>                                      
                                    </ul>
                                </div>
                                <div class="row google_pragati_narrow">
                                    <a href="https://www.interpol.int/" target="_blank" class="block box-shadow-6 relative z-index-10 margin_top_10 bg_blue_blue white text-left" style="height:75px; line-height: 75px;">
                                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/interpole.png" width="70" align="left" class="padding-5-5" alt="activities image"> <span class="white size-20">INTERPOL</span>
                                    </a>
                                </div>
                                <div class="row google_pragati_narrow">
                                    <a href="https://www.un.org/en/index.html" target="_blank" class="block box-shadow-6 relative z-index-10 margin_top_10 bg_blue_1 white text-left" style="height:75px; line-height: 75px;">
                                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/un.png" width="75" align="left" class="padding-5-5" alt="image"> <span class="white size-20">United Nations(UN)</span>
                                    </a>
                                </div>
                               

                            </div>
                            <!--==For widgets start=======================================================-->
                            <!--Widget-1=================-->
                            <div class="col-md-12 green-color margin_bottom_10 widget_panel box-shadow-6">
                                <!--Heading of Widget-->
                                <h1 class="heading-2 padding-10-0 size-20 google_playball cursor-pointer"><span>Important Govt. Websites</span></h1>
                                <!--Description-->
                                <div class="widget_description margin_bottom_10 padding-15-15">
                                    <a href="http://www.mha.gov.bd/" target="_blank" class="text-left block padding-10-10 margin_bottom_1 google_courgette"><i class="fa fa-angle-double-right"></i>Ministry of Home Affairs</a>
                                    <a href="http://www.bangladesh.gov.bd/" target="_blank" class="text-left block padding-10-10 margin_bottom_1 google_courgette"><i class="fa fa-angle-double-right"></i>Bangladesh National Portal</a>
                                    <a href="https://www.eprocure.gov.bd/" target="_blank" class="text-left block padding-10-10 margin_bottom_1 google_courgette"><i class="fa fa-angle-double-right"></i>National e-Government Procurement</a>
                                    <a href="https://www.interpol.int/" target="_blank" class="text-left block padding-10-10 margin_bottom_1 google_courgette"><i class="fa fa-angle-double-right"></i>Interpol</a>
                                    <a href="http://www.un.org/en" target="_blank" class="text-left block padding-10-10 margin_bottom_1 google_courgette"><i class="fa fa-angle-double-right"></i>UN</a>
                                    <a href="http://www.theiacp.org/" target="_blank" class="text-left block padding-10-10 margin_bottom_1 google_courgette"><i class="fa fa-angle-double-right"></i>IACP</a>
                                    <a href="http://pcc.police.gov.bd/en" target="_blank" class="text-left block padding-10-10 margin_bottom_1 google_courgette"><i class="fa fa-angle-double-right"></i>অনলাইন পুলিশ ক্লিয়ারেন্স</a>
                                </div>
                                <!--Hide N Show buttons-->
                                <div class="btn  absolute top-0 right-0 collapse_widget no-focus"><i class="fa fa-angle-up"></i></div>
                                <div class="btn  absolute top-0 right-0 open_widget no-focus"><i class="fa fa-angle-down"></i></div>
                            </div>
<div class="related_post_sec single_post" style="margin-bottom:50px;">
   
                </div>
                            <!--==For widgets end=========================================================-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--- message from IGP section--->
<div class="row second_look margin_bottom_1" id="igpmessage" style="background: url('storage/upload/file/QxMvrgszx7c9LaBv9WiiV3DcUQ1nAAw9oS1N0rp0.png') left top repeat fixed; background-size:cover  ">
    <!--<div class="row second_look margin_bottom_1 bg_gray_light_1" id="igpmessage">-->
    <!--===== Message =====-->
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg_trans_black_70">
        <!--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
        <div class="fr_lr">
            <div class="container-fluid">
                <div class="col-md-12">
                    <div class="col-md-12 padding-bottom-5-prcnt">
                        <div class="col-md-12 padding-6-0-prcnt">
                            <h1 class=" heading-1 padding-3-0-prcnt white text-center google_marcellus_SC size-3-vw">
                                <span class="text_shadow_4">&nbsp; পুলিশ সুপার মহোদয় সর্ম্পকীত &nbsp;</span>
                            </h1>
                            <div class="clearfix bg_white">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center bg_blue_gray min-height-600">
                                    <div class=" padding-15-15 margin_top_10 bg_white" style="border-width: 10px 1px 10px 1px; border-style: solid; border-color: #606060; -webkit-border-radius:15px;-moz-border-radius:15px ;border-radius: 15px;">
                                        <div class="margin_bottom_10">
                                            <div style="height: 180px;" class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <?= Content::get_picture(2, 'height_full img-responsive center-block') ?>
                                            </div>
                                            <div style="height: 180px; vertical-align:bottom;" class="col-lg-6 col-md-6 col-sm-6 col-xs-12 relative">
                                                <img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/police-logo-circular.png" class="img-responsive center-block" height="100%">
                                                <p class="google_pragati_narrow size-20 blue_site absolute width_full" style="bottom:0; line-height: 23px;">Superintendent of Police</p>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <h2 class=" size-2-vw bg_gray_gradient_1 padding-10-0 "><?= Content::getData(2, 'title') ?></h2>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 min-height-600" style="background: url('<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/floral-2-10.png') left top no-repeat,url('<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/floral-3-5-1.png') right bottom no-repeat;">
                                    <h1 class=" heading-6 padding-3-0-prcnt blue_site google_courgette size-3-vw"></h1>
                                    <div class="box_msg text-left size-18" style="border: 5px double #606060; padding: 20px; margin-bottom: 20px;">
                                        <?= Content::getData(2, 'details') ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--- mission vision section--->
<div class="row third_look padding-top-6-prcnt padding-bottom-6-prcnt" id="missionvision" style="background: url('storage/upload/file/background_304120853.jpg') center bottom no-repeat; background-size: cover;">
    <!--===== Mission & Vision =====-->
    <div class="container-fluid ">
        <div class="col-md-12 ">
            <div class="fr_lr">
                <div class=" padding-10-0-prcnt">
                    <!--Mission-->
                    <div class="col-md-6 col-sm-6 col-xs-12 text-right">
                        <div class="padding-7-0-prcnt border_bottom_1 margin_bottom_10" style="height: auto;">
                            <!--<img src="images/mission-2.png" class="width_full" style="max-width: 405px; width: 100%;">-->
                            <span class="mission_head">
                                <span class="mission_head_child google_pinyon_script black">
                                    <?= Content::getData(1, 'title') ?>
                                </span>
                            </span>
                        </div>
                        <div class="text-right-mission">
                            <p class="size-2-em black google_pragati_narrow">
                                <?= Content::getData(1, 'details') ?>
                            </p>
                        </div>
                    </div>
                    <!--Vision-->
                    <div class="col-md-6 col-sm-6 col-xs-12 text-left">
                        <div class="padding-7-0-prcnt border_bottom_1 margin_bottom_10" style="height: auto;">
                            <!--<img src="images/vision-2.png" class="img-responsive">-->
                            <span class="vision_head">
                                <span class="vision_head_child google_pinyon_script black">
                                    <?= Content::getData(3, 'title') ?>
                                </span>
                            </span>
                        </div>
                        <div class="text-left-vision">
                            <!--<h2 class="size-30 margin_bottom_10 white border_bottom_1">&nbsp;</h2>-->
                            <p class="size-2-em black google_pragati_narrow">
                                <?= Content::getData(3, 'details') ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--<div class="row third_look" style="background: url('images/activities-3.jpg') center center fixed; background-size:cover  ">-->
<div class="row fourth_look  bg_gray_gradient_2" id="history">
    <!--===== History =====-->
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
        <div class="fr_lr">
            <div class="container-fluid">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <div class=" col-md-12 padding-6-0-prcnt text-center border_bottom">

                            <h1 class="heading-1 padding-0-0-2-0-prcnt blue_site google_marcellus_SC size-3-vw">
                                <span>&nbsp; <?= Content::getData(4, 'title') ?> &nbsp;</span>
                            </h1>
                            <div class="row padding-3-0-0-0-prcnt">
                                <div class="col-md-12 margin_bottom_25 hide_in_700">
                                    <?= Content::get_picture(4) ?>
                                </div>
                            </div>
                            <div class="text-justify blue_site margin_bottom_25 size-18">
                                <p><?= Content::getData(4, 'metadesc') ?></p>
                            </div>
                            <div>
                                <?php echo CHtml::link('Details <i class="fa fa-angle-double-right"></i>', array('content/view', 'id' => 4), array('class' => 'btn button_1')); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--units section============-->
<div class="row fifth_look bg_img_10_1" id="units" style="/*background: url('images/activities-2.jpg') center center fixed; background-size:cover  */">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-9-0-prcnt padding-top-6-prcnt bg_trans_blue_90">
        <div class="fr_lr">
            <div class="container-fluid padding-top-6-prcnt padding-bottom-5-prcnt">
                <div class="col-md-12">
                    <h1 class="heading-1 google_marcellus_SC size-3-vw">
                        <span class="white">&nbsp; চট্টগ্রাম জেলা পুলিশের ইউনিট সমুহ &nbsp;</span>
                    </h1>
                    <div class="col-md-12">
                        <div class="padding-7-0-prcnt">
                            <div id="UnitCarousel" class="carouselTicker relative bg_trans_blue_60 padding-3-3-prcnt" style="padding-top:10px;">
                                <ul class="carouselTicker__list " style="height: 145px; overflow: hidden !important;">
                                    <!--Police Flag============-->
                                    <?= Banner::home_slider_unit(3) ?>                                    
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--- important links section--->
<!--=========================================================================================================-->
<!-- Important Links and Widgets ============================================================================-->
<!--=========================================================================================================-->
<div class="row" id="importantLinks">
    <!--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background: url('https://www.police.gov.bd/<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/mahora.jpg') center center fixed; background-size:cover;">-->
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg_img_4">
        <div class="row padding-10-0-prcnt padding-top-6-prcnt padding-bottom-5-prcnt bg_trans_white_80" >
            <div class="fr_lr">
                <h1 class="heading-1 padding-0-0-5-0-prcnt padding-bottom-5-prcnt blue_site google_marcellus_SC size-3-vw">
                    <span>&nbsp; গুরুত্বপূর্ণ লিংক সমুহ&nbsp;</span>
                </h1>
                <div class="container-fluid">
                    <div class="col-md-12">
                        <div class="col-lg-12 col-md-12">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 margin_bottom_20  ">
                                <div class=" col-md-12 bg_gray_light  text-center box8" style="width: 100%;/*height:66px; background: url('images/no_image.png') left center no-repeat; background-position: 110%*/">
                                    <a href="http://www.mha.gov.bd/" target="_blank" class="block" style="height: 100px;">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 hide_overflow" style="height: 100px; line-height: 80px;" >
                                                <img src="storage/upload/announcement/j8QfLbm0otPhIBF8KMlZKxHiRxy3kBEo4cBg29qw.png" onerror="this.src='<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/icons/Government_Seal_of_Bangladesh.png'" width="40">
                                            </div>
                                            <div class="col-lg-10 col-md-9 col-sm-9 col-xs-10 text-left hide_overflow black" style="height: 80px; display:table-cell; vertical-align: middle !important;">
                                                <table class="height_full width_full">
                                                    <tr>
                                                        <td valign="middle">
                                                            <span class="size-16">স্বরাষ্ট্র মন্ত্রণালয়</span><br>
                                                            <span class="size-12 gray_dark">গণপ্রজাতন্ত্রী বাংলাদেশ সরকার</span>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 margin_bottom_20  ">
                                <div class=" col-md-12 bg_gray_light  text-center box8" style="width: 100%;/*height:66px; background: url('images/no_image.png') left center no-repeat; background-position: 110%*/">
                                    <a href="http://www.bangladesh.gov.bd/" target="_blank" class="block" style="height: 100px;">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 hide_overflow" style="height: 100px; line-height: 80px;" >
                                                <img src="storage/upload/announcement/Jbcd2YQwOdCufDskEOPJvpaqDk8kAArJyyZ7qlr6.png" onerror="this.src='<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/icons/Government_Seal_of_Bangladesh.png'" width="40">
                                            </div>
                                            <div class="col-lg-10 col-md-9 col-sm-9 col-xs-10 text-left hide_overflow black" style="height: 80px; display:table-cell; vertical-align: middle !important;">
                                                <table class="height_full width_full">
                                                    <tr>
                                                        <td valign="middle">
                                                            <span class="size-16">বাংলাদেশ জাতীয় তথ্য বাতায়ন</span><br>
                                                            <span class="size-12 gray_dark">গণপ্রজাতন্ত্রী বাংলাদেশ সরকার</span>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 margin_bottom_20  ">
                                <div class=" col-md-12 bg_gray_light  text-center box8" style="width: 100%;/*height:66px; background: url('images/no_image.png') left center no-repeat; background-position: 110%*/">
                                    <a href="https://www.eprocure.gov.bd/" target="_blank" class="block" style="height: 100px;">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 hide_overflow" style="height: 100px; line-height: 80px;" >
                                                <img src="storage/upload/announcement/97AkWQSyhXQzy2FCt4VlhEBKkZ57gKxJRRMkGFmk.png" onerror="this.src='<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/icons/Government_Seal_of_Bangladesh.png'" width="40">
                                            </div>
                                            <div class="col-lg-10 col-md-9 col-sm-9 col-xs-10 text-left hide_overflow black" style="height: 80px; display:table-cell; vertical-align: middle !important;">
                                                <table class="height_full width_full">
                                                    <tr>
                                                        <td valign="middle">
                                                            <span class="size-16">National e-Government Procurement</span><br>
                                                            <span class="size-12 gray_dark"></span>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 margin_bottom_20  ">
                                <div class=" col-md-12 bg_gray_light  text-center box8" style="width: 100%;/*height:66px; background: url('images/no_image.png') left center no-repeat; background-position: 110%*/">
                                    <a href="https://www.facebook.com/CtgDistPolice/" target="_blank" class="block" style="height: 100px;">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 hide_overflow" style="height: 100px; line-height: 80px;" >
                                                <img src="storage/upload/announcement/important-links_file289065414.png" onerror="this.src='<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/icons/Government_Seal_of_Bangladesh.png'" width="40">
                                            </div>
                                            <div class="col-lg-10 col-md-9 col-sm-9 col-xs-10 text-left hide_overflow black" style="height: 80px; display:table-cell; vertical-align: middle !important;">
                                                <table class="height_full width_full">
                                                    <tr>
                                                        <td valign="middle">
                                                            <span class="size-16">ফেসবুক পেজ</span><br>
                                                            <span class="size-12 gray_dark"> চট্টগ্রাম পুলিশ সুপারের কার্যালয়</span>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 margin_bottom_20  ">
                                <div class=" col-md-12 bg_gray_light  text-center box8" style="width: 100%;/*height:66px; background: url('images/no_image.png') left center no-repeat; background-position: 110%*/">
                                    <a href="http://police.chattogram.gov.bd/" target="_blank" class="block" style="height: 100px;">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 hide_overflow" style="height: 100px; line-height: 80px;" >
                                                <img src="storage/upload/announcement/QKlE4uZ0CTtxMbbWitUmBdmCE946ScRkEwv1IbJe.png" onerror="this.src='<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/icons/Government_Seal_of_Bangladesh.png'" width="40">
                                            </div>
                                            <div class="col-lg-10 col-md-9 col-sm-9 col-xs-10 text-left hide_overflow black" style="height: 80px; display:table-cell; vertical-align: middle !important;">
                                                <table class="height_full width_full">
                                                    <tr>
                                                        <td valign="middle">
                                                            <span class="size-16">জাতীয় তথ্য বাতায়ন</span><br>
                                                            <span class="size-12 gray_dark">চট্টগ্রাম জেলা পুলিশ সুপারের কার্যালয় </span>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 margin_bottom_20  ">
                                <div class=" col-md-12 bg_gray_light  text-center box8" style="width: 100%;/*height:66px; background: url('images/no_image.png') left center no-repeat; background-position: 110%*/">
                                    <a href="http://www.theiacp.org/" target="_blank" class="block" style="height: 100px;">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 hide_overflow" style="height: 100px; line-height: 80px;" >
                                                <img src="storage/upload/announcement/JVrFZbUCOGYZtuKKjsjUuqZPByZFkSDVfBAkcDSm.png" onerror="this.src='<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/icons/Government_Seal_of_Bangladesh.png'" width="40">
                                            </div>
                                            <div class="col-lg-10 col-md-9 col-sm-9 col-xs-10 text-left hide_overflow black" style="height: 80px; display:table-cell; vertical-align: middle !important;">
                                                <table class="height_full width_full">
                                                    <tr>
                                                        <td valign="middle">
                                                            <span class="size-16">IACP</span><br>
                                                            <span class="size-12 gray_dark"></span>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 margin_bottom_20  hide_box">
                                <div class=" col-md-12 bg_gray_light  text-center box8" style="width: 100%;/*height:66px; background: url('images/no_image.png') left center no-repeat; background-position: 110%*/">
                                    <a href="http://pcc.police.gov.bd/en" target="_blank" class="block" style="height: 100px;">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 hide_overflow" style="height: 100px; line-height: 80px;" >
                                                <img src="storage/upload/announcement/MQuCXKRAeSgqvnsj1Rrr2osAxer8pbzIF0a2izkN.png" onerror="this.src='<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/icons/Government_Seal_of_Bangladesh.png'" width="40">
                                            </div>
                                            <div class="col-lg-10 col-md-9 col-sm-9 col-xs-10 text-left hide_overflow black" style="height: 80px; display:table-cell; vertical-align: middle !important;">
                                                <table class="height_full width_full">
                                                    <tr>
                                                        <td valign="middle">
                                                            <span class="size-16">Online Police Clearance</span><br>
                                                            <span class="size-12 gray_dark"></span>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 margin_bottom_20  hide_box">
                                <div class=" col-md-12 bg_gray_light  text-center box8" style="width: 100%;/*height:66px; background: url('images/no_image.png') left center no-repeat; background-position: 110%*/">
                                    <a href="https://www.dmp.gov.bd/" target="_blank" class="block" style="height: 100px;">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 hide_overflow" style="height: 100px; line-height: 80px;" >
                                                <img src="storage/upload/announcement/wRj99XFcjGoJi72QmJLKFcHc7nVBkQiz8QEIW6Nf.png" onerror="this.src='<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/icons/Government_Seal_of_Bangladesh.png'" width="40">
                                            </div>
                                            <div class="col-lg-10 col-md-9 col-sm-9 col-xs-10 text-left hide_overflow black" style="height: 80px; display:table-cell; vertical-align: middle !important;">
                                                <table class="height_full width_full">
                                                    <tr>
                                                        <td valign="middle">
                                                            <span class="size-16">Dhaka Metropolitan Police, Bangladesh</span><br>
                                                            <span class="size-12 gray_dark">Dhaka Metropolitan Police, Bangladesh</span>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 margin_bottom_20  hide_box">
                                <div class=" col-md-12 bg_gray_light  text-center box8" style="width: 100%;/*height:66px; background: url('images/no_image.png') left center no-repeat; background-position: 110%*/">
                                    <a href="http://bpa.gov.bd/" target="_blank" class="block" style="height: 100px;">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 hide_overflow" style="height: 100px; line-height: 80px;" >
                                                <img src="storage/upload/announcement/9aAkclTTVcx3SvT5AdPoCYYC7BGo18XWC7djduDy.png" onerror="this.src='<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/icons/Government_Seal_of_Bangladesh.png'" width="40">
                                            </div>
                                            <div class="col-lg-10 col-md-9 col-sm-9 col-xs-10 text-left hide_overflow black" style="height: 80px; display:table-cell; vertical-align: middle !important;">
                                                <table class="height_full width_full">
                                                    <tr>
                                                        <td valign="middle">
                                                            <span class="size-16">Police Academy Sarda, Bangladesh</span><br>
                                                            <span class="size-12 gray_dark">Police Academy Sarda, Bangladesh</span>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 margin_bottom_20  hide_box">
                                <div class=" col-md-12 bg_gray_light  text-center box8" style="width: 100%;/*height:66px; background: url('images/no_image.png') left center no-repeat; background-position: 110%*/">
                                    <a href="en.html" target="_blank" class="block" style="height: 100px;">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 hide_overflow" style="height: 100px; line-height: 80px;" >
                                                <img src="storage/upload/announcement/CHvGtBBO6HQRRlqD6MvOL7Zfku2348nRkQdzEbgj.jpg" onerror="this.src='<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/icons/Government_Seal_of_Bangladesh.png'" width="40">
                                            </div>
                                            <div class="col-lg-10 col-md-9 col-sm-9 col-xs-10 text-left hide_overflow black" style="height: 80px; display:table-cell; vertical-align: middle !important;">
                                                <table class="height_full width_full">
                                                    <tr>
                                                        <td valign="middle">
                                                            <span class="size-16">Police Staff College, Bangladesh</span><br>
                                                            <span class="size-12 gray_dark">Police Staff College, Bangladesh</span>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 margin_bottom_20  hide_box">
                                <div class=" col-md-12 bg_gray_light  text-center box8" style="width: 100%;/*height:66px; background: url('images/no_image.png') left center no-repeat; background-position: 110%*/">
                                    <a href="http://sylhetmetropolitanpolice.com/" target="_blank" class="block" style="height: 100px;">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 hide_overflow" style="height: 100px; line-height: 80px;" >
                                                <img src="storage/upload/announcement/BP79DnX5qekn7yAzO4p8L3nJ8Ke1ocStC8zdTX5h.jpg" onerror="this.src='<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/icons/Government_Seal_of_Bangladesh.png'" width="40">
                                            </div>
                                            <div class="col-lg-10 col-md-9 col-sm-9 col-xs-10 text-left hide_overflow black" style="height: 80px; display:table-cell; vertical-align: middle !important;">
                                                <table class="height_full width_full">
                                                    <tr>
                                                        <td valign="middle">
                                                            <span class="size-16">Sylhet Metropoltan Police, Bangladesh</span><br>
                                                            <span class="size-12 gray_dark">Sylhet Metropoltan Police, Bangladesh</span>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 margin_bottom_20  hide_box">
                                <div class=" col-md-12 bg_gray_light  text-center box8" style="width: 100%;/*height:66px; background: url('images/no_image.png') left center no-repeat; background-position: 110%*/">
                                    <a href="http://www.rab.gov.bd/" target="_blank" class="block" style="height: 100px;">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 hide_overflow" style="height: 100px; line-height: 80px;" >
                                                <img src="storage/upload/announcement/yQMPdAUpIj6H6ZfwGZjKWyPLWz9Us3PKTWsnIW5c.png" onerror="this.src='<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/icons/Government_Seal_of_Bangladesh.png'" width="40">
                                            </div>
                                            <div class="col-lg-10 col-md-9 col-sm-9 col-xs-10 text-left hide_overflow black" style="height: 80px; display:table-cell; vertical-align: middle !important;">
                                                <table class="height_full width_full">
                                                    <tr>
                                                        <td valign="middle">
                                                            <span class="size-16">Rapid Action Battalian, Bangladesh</span><br>
                                                            <span class="size-12 gray_dark">Rapid Action Battalian, Bangladesh</span>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 margin_bottom_20  hide_box">
                                <div class=" col-md-12 bg_gray_light  text-center box8" style="width: 100%;/*height:66px; background: url('images/no_image.png') left center no-repeat; background-position: 110%*/">
                                    <a href="http://www.bangladesh.gov.bd/" target="_blank" class="block" style="height: 100px;">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 hide_overflow" style="height: 100px; line-height: 80px;" >
                                                <img src="storage/upload/announcement/tjmcIp6TfKt3YQauBupUiICRVecGiYUb9UKMpkbH.png" onerror="this.src='<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/icons/Government_Seal_of_Bangladesh.png'" width="40">
                                            </div>
                                            <div class="col-lg-10 col-md-9 col-sm-9 col-xs-10 text-left hide_overflow black" style="height: 80px; display:table-cell; vertical-align: middle !important;">
                                                <table class="height_full width_full">
                                                    <tr>
                                                        <td valign="middle">
                                                            <span class="size-16">National Web Portal of Bangladesh</span><br>
                                                            <span class="size-12 gray_dark">National Web Portal of Bangladesh</span>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 margin_bottom_20  hide_box">
                                <div class=" col-md-12 bg_gray_light  text-center box8" style="width: 100%;/*height:66px; background: url('images/no_image.png') left center no-repeat; background-position: 110%*/">
                                    <a href="http://www.mha.gov.bd/" target="_blank" class="block" style="height: 100px;">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 hide_overflow" style="height: 100px; line-height: 80px;" >
                                                <img src="storage/upload/announcement/UXM8wymEUwmxd4Kdf9QMZx7DlMvQP5PxTGTOaOqt.png" onerror="this.src='<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/icons/Government_Seal_of_Bangladesh.png'" width="40">
                                            </div>
                                            <div class="col-lg-10 col-md-9 col-sm-9 col-xs-10 text-left hide_overflow black" style="height: 80px; display:table-cell; vertical-align: middle !important;">
                                                <table class="height_full width_full">
                                                    <tr>
                                                        <td valign="middle">
                                                            <span class="size-16">Ministry of Home Affairs, Bangladesh</span><br>
                                                            <span class="size-12 gray_dark">Ministry of Home Affairs, Bangladesh</span>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 margin_bottom_20  hide_box">
                                <div class=" col-md-12 bg_gray_light  text-center box8" style="width: 100%;/*height:66px; background: url('images/no_image.png') left center no-repeat; background-position: 110%*/">
                                    <a href="https://www.ictd.gov.bd/" target="_blank" class="block" style="height: 100px;">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 hide_overflow" style="height: 100px; line-height: 80px;" >
                                                <img src="storage/upload/announcement/z1Aoey6CtedwQ1uzyICPjgWIUO3TAOc7yAgbIYwe.png" onerror="this.src='<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/icons/Government_Seal_of_Bangladesh.png'" width="40">
                                            </div>
                                            <div class="col-lg-10 col-md-9 col-sm-9 col-xs-10 text-left hide_overflow black" style="height: 80px; display:table-cell; vertical-align: middle !important;">
                                                <table class="height_full width_full">
                                                    <tr>
                                                        <td valign="middle">
                                                            <span class="size-16">Ministry of Posts, Telecommunications and Information Technology (ICTD)</span><br>
                                                            <span class="size-12 gray_dark">Information &amp; Communication Technology Division</span>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 margin_bottom_20  hide_box">
                                <div class=" col-md-12 bg_gray_light  text-center box8" style="width: 100%;/*height:66px; background: url('images/no_image.png') left center no-repeat; background-position: 110%*/">
                                    <a href="http://www.parliament.gov.bd/" target="_blank" class="block" style="height: 100px;">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 hide_overflow" style="height: 100px; line-height: 80px;" >
                                                <img src="storage/upload/announcement/5rRrJDb4ornU9YVAS9A8BlL8YrmfWW8ayboPRhLr.png" onerror="this.src='<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/icons/Government_Seal_of_Bangladesh.png'" width="40">
                                            </div>
                                            <div class="col-lg-10 col-md-9 col-sm-9 col-xs-10 text-left hide_overflow black" style="height: 80px; display:table-cell; vertical-align: middle !important;">
                                                <table class="height_full width_full">
                                                    <tr>
                                                        <td valign="middle">
                                                            <span class="size-16">Bangladesh Parliament</span><br>
                                                            <span class="size-12 gray_dark"></span>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 margin_bottom_20  hide_box">
                                <div class=" col-md-12 bg_gray_light  text-center box8" style="width: 100%;/*height:66px; background: url('images/no_image.png') left center no-repeat; background-position: 110%*/">
                                    <a href="http://www.mopa.gov.bd/en" target="_blank" class="block" style="height: 100px;">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 hide_overflow" style="height: 100px; line-height: 80px;" >
                                                <img src="storage/upload/announcement/DQyXSZpZf2eU6ukFFhVzTwuwUisiGtUnQ22lwmp9.jpg" onerror="this.src='<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/icons/Government_Seal_of_Bangladesh.png'" width="40">
                                            </div>
                                            <div class="col-lg-10 col-md-9 col-sm-9 col-xs-10 text-left hide_overflow black" style="height: 80px; display:table-cell; vertical-align: middle !important;">
                                                <table class="height_full width_full">
                                                    <tr>
                                                        <td valign="middle">
                                                            <span class="size-16">Bangladesh Public Service Commission</span><br>
                                                            <span class="size-12 gray_dark">Bangladesh Public Service Commission</span>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 margin_bottom_20  hide_box">
                                <div class=" col-md-12 bg_gray_light  text-center box8" style="width: 100%;/*height:66px; background: url('images/no_image.png') left center no-repeat; background-position: 110%*/">
                                    <a href="http://www.mopa.gov.bd/en" target="_blank" class="block" style="height: 100px;">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 hide_overflow" style="height: 100px; line-height: 80px;" >
                                                <img src="storage/upload/announcement/Wt1QnvQ0bc92Ly71f9NRbgOYL0Tu86zR9eqKI7G0.jpg" onerror="this.src='<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/icons/Government_Seal_of_Bangladesh.png'" width="40">
                                            </div>
                                            <div class="col-lg-10 col-md-9 col-sm-9 col-xs-10 text-left hide_overflow black" style="height: 80px; display:table-cell; vertical-align: middle !important;">
                                                <table class="height_full width_full">
                                                    <tr>
                                                        <td valign="middle">
                                                            <span class="size-16">Ministry of Public Administration</span><br>
                                                            <span class="size-12 gray_dark">Ministry of Public Administration</span>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 margin_bottom_20  hide_box">
                                <div class=" col-md-12 bg_gray_light  text-center box8" style="width: 100%;/*height:66px; background: url('images/no_image.png') left center no-repeat; background-position: 110%*/">
                                    <a href="http://www.bgb.gov.bd/" target="_blank" class="block" style="height: 100px;">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 hide_overflow" style="height: 100px; line-height: 80px;" >
                                                <img src="storage/upload/announcement/rtA9DNk97vBhSjHEKIm0KaJlxE4ockIjyOxuxnil.png" onerror="this.src='<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/icons/Government_Seal_of_Bangladesh.png'" width="40">
                                            </div>
                                            <div class="col-lg-10 col-md-9 col-sm-9 col-xs-10 text-left hide_overflow black" style="height: 80px; display:table-cell; vertical-align: middle !important;">
                                                <table class="height_full width_full">
                                                    <tr>
                                                        <td valign="middle">
                                                            <span class="size-16">Border Guard Bangladesh</span><br>
                                                            <span class="size-12 gray_dark">Border Guard Bangladesh</span>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 margin_bottom_20  hide_box">
                                <div class=" col-md-12 bg_gray_light  text-center box8" style="width: 100%;/*height:66px; background: url('images/no_image.png') left center no-repeat; background-position: 110%*/">
                                    <a href="http://ansarvdp.gov.bd/" target="_blank" class="block" style="height: 100px;">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 hide_overflow" style="height: 100px; line-height: 80px;" >
                                                <img src="storage/upload/announcement/XwjFQAtnKSIUIER2KVy9tShh0vwOTRINJ0jjNYLQ.png" onerror="this.src='<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/icons/Government_Seal_of_Bangladesh.png'" width="40">
                                            </div>
                                            <div class="col-lg-10 col-md-9 col-sm-9 col-xs-10 text-left hide_overflow black" style="height: 80px; display:table-cell; vertical-align: middle !important;">
                                                <table class="height_full width_full">
                                                    <tr>
                                                        <td valign="middle">
                                                            <span class="size-16">Bangladesh Ansar and VDP</span><br>
                                                            <span class="size-12 gray_dark"></span>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 margin_bottom_20  hide_box">
                                <div class=" col-md-12 bg_gray_light  text-center box8" style="width: 100%;/*height:66px; background: url('images/no_image.png') left center no-repeat; background-position: 110%*/">
                                    <a href="http://www.dip.gov.bd/" target="_blank" class="block" style="height: 100px;">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 hide_overflow" style="height: 100px; line-height: 80px;" >
                                                <img src="storage/upload/announcement/UkhoL3bmxg0lhJ1L9aQUzhYCwPgoV76DlJMgnBgV.png" onerror="this.src='<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/icons/Government_Seal_of_Bangladesh.png'" width="40">
                                            </div>
                                            <div class="col-lg-10 col-md-9 col-sm-9 col-xs-10 text-left hide_overflow black" style="height: 80px; display:table-cell; vertical-align: middle !important;">
                                                <table class="height_full width_full">
                                                    <tr>
                                                        <td valign="middle">
                                                            <span class="size-16">Department of Immigration and Passports</span><br>
                                                            <span class="size-12 gray_dark">Department of Immigration and Passports</span>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 margin_bottom_20  hide_box">
                                <div class=" col-md-12 bg_gray_light  text-center box8" style="width: 100%;/*height:66px; background: url('images/no_image.png') left center no-repeat; background-position: 110%*/">
                                    <a href="http://www.dnc.gov.bd/" target="_blank" class="block" style="height: 100px;">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 hide_overflow" style="height: 100px; line-height: 80px;" >
                                                <img src="storage/upload/announcement/oa8nts9M7tsP3cNSex39IirSozrKKpZMI7feCkuN.jpg" onerror="this.src='<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/icons/Government_Seal_of_Bangladesh.png'" width="40">
                                            </div>
                                            <div class="col-lg-10 col-md-9 col-sm-9 col-xs-10 text-left hide_overflow black" style="height: 80px; display:table-cell; vertical-align: middle !important;">
                                                <table class="height_full width_full">
                                                    <tr>
                                                        <td valign="middle">
                                                            <span class="size-16">Department of Narcotics Control, Bangladesh</span><br>
                                                            <span class="size-12 gray_dark">Department of Narcotics Control, Bangladesh</span>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 margin_bottom_20  hide_box">
                                <div class=" col-md-12 bg_gray_light  text-center box8" style="width: 100%;/*height:66px; background: url('images/no_image.png') left center no-repeat; background-position: 110%*/">
                                    <a href="http://www.bdpolice-estate.com/" target="_blank" class="block" style="height: 100px;">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 hide_overflow" style="height: 100px; line-height: 80px;" >
                                                <img src="storage/upload/announcement/IwTDM7TbBxl9lA9YUP5gnL3fdkL37FuJ0dHOjvbA.png" onerror="this.src='<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/icons/Government_Seal_of_Bangladesh.png'" width="40">
                                            </div>
                                            <div class="col-lg-10 col-md-9 col-sm-9 col-xs-10 text-left hide_overflow black" style="height: 80px; display:table-cell; vertical-align: middle !important;">
                                                <table class="height_full width_full">
                                                    <tr>
                                                        <td valign="middle">
                                                            <span class="size-16">Estate and Revenue - Bangladesh Police</span><br>
                                                            <span class="size-12 gray_dark">Estate and Revenue - Bangladesh Police</span>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 margin_bottom_20  hide_box">
                                <div class=" col-md-12 bg_gray_light  text-center box8" style="width: 100%;/*height:66px; background: url('images/no_image.png') left center no-repeat; background-position: 110%*/">
                                    <a href="http://pbi.gov.bd/" target="_blank" class="block" style="height: 100px;">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 hide_overflow" style="height: 100px; line-height: 80px;" >
                                                <img src="storage/upload/announcement/2kExOp7vnTh9xfTXXy8VsTB4NQ7FaHuhgPR6ayBP.jpg" onerror="this.src='<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/icons/Government_Seal_of_Bangladesh.png'" width="40">
                                            </div>
                                            <div class="col-lg-10 col-md-9 col-sm-9 col-xs-10 text-left hide_overflow black" style="height: 80px; display:table-cell; vertical-align: middle !important;">
                                                <table class="height_full width_full">
                                                    <tr>
                                                        <td valign="middle">
                                                            <span class="size-16">Police Bureau of Investigation</span><br>
                                                            <span class="size-12 gray_dark">Police Bureau of Investigation</span>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="clearfix"></div>

                            <div class="width_full text-center">
                                <button class="btn button_2 showbtn">Show More</button>
                                <button class="btn button_2 hidebtn">Show Less</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row fourth_look  bg_gray_gradient_2" id="history">
    <!--===== GOOGLE MAP =====-->
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
        <div class="fr_lr">
            <div class="container-fluid">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <div class=" col-md-12 padding-6-0-prcnt text-center border_bottom">

                            <h1 class="heading-1 padding-0-0-2-0-prcnt blue_site google_marcellus_SC size-3-vw">
                                <span>&nbsp; গুগল ম্যাপে চট্টগ্রাম জেলা পুলিশ সুপারের কার্যালয়  </span>
                            </h1>
                            <div class="text-justify blue_site margin_bottom_25 size-18">
                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3689.6971416500905!2d91.82551231457504!3d22.365061646193556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd883e2e351fb%3A0x4fd11f9e7106f5cc!2sPolice%20Super%20office%2C%20Chattogram!5e0!3m2!1sen!2smy!4v1601209526075!5m2!1sen!2smy" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end of nain content -->
<div class="popup" onclick="popupclick()">
  <div class="black_overlay"></div>
  <div class="content_overlay">
    
  </div>
</div>
