<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>
            Подготовительные задания к курсу
        </title>
        <meta name="description" content="Chartist.html">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
        <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
        <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
        <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
        <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
    </head>
    <body class="mod-bg-1 mod-nav-link ">
        <main id="js-page-content" role="main" class="page-content">
            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <?php 
                        $_person = [
                            [
                                    'name' => 'Sunny',
                                    'surname' => 'A.',
                                    'department' => '(UI/UX Expert)',
                                    'photo' => 'sunny',
                                    'socialNet' => 'myplaneticket',
                                    'position' => 'Lead Author',
                                    'postUser' => 'myorange',
                                    'status' => 'active'
                            ],
                            [
                                    'name' => 'Jos',
                                    'surname' => 'K.',
                                    'department' => '(ASP.NET Developer)',
                                    'photo' => 'josh',
                                    'socialNet' => 'atlantez',
                                    'position' => 'Partner &amp; Contributor',
                                    'postUser' => 'Walapa',
                                    'status' => 'active'
                            ],
                            [
                                    'name' => 'Jovanni',
                                    'surname' => 'L.',
                                    'department' => '(PHP Developer)',
                                    'photo' => 'jovanni',
                                    'socialNet' => 'lodev09',
                                    'position' => 'Partner &amp; Contributor',
                                    'postUser' => 'lodev09',
                                    'status' => 'banned'
                            ],
                            [
                                    'name' => 'Roberto',
                                    'surname' => 'R.',
                                    'department' => '(Rails Developer)',
                                    'photo' => 'roberto',
                                    'socialNet' => 'sildur',
                                    'position' => 'Partner &amp; Contributor',
                                    'postUser' => 'sildur',
                                    'status' => 'banned'
                            ]
                        ]
                    ?>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="d-flex flex-wrap demo demo-h-spacing mt-3 mb-3">
                                <?php 
                                    foreach($_person as $detailInfo):
                                ?>
                                <div class="
                                    <?php 
                                        echo($detailInfo['status'] == 'active')?"":"banned";
                                    ?> 
                                bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                                    <img src="img/demo/authors/<?php echo $detailInfo['photo']; ?>.png" alt="<?php echo $detailInfo['name']." ".$detailInfo['surname']; ?>" class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                                    <div class="ml-2 mr-3">
                                        <h5 class="m-0">
                                            <?php echo $detailInfo['name']." ".$detailInfo['surname']." ".$detailInfo['department']; ?>
                                            <small class="m-0 fw-300">
                                                <?php 
                                                    echo $detailInfo['position'];
                                                ?>
                                            </small>
                                        </h5>
                                        <a href="https://twitter.com/<?php echo $detailInfo['socialNet'] ?>" class="text-info fs-sm" target="_blank">@<?php echo $detailInfo['socialNet'] ?></a> -
                                        <a href="https://wrapbootstrap.com/user/<?php 
                                            echo $detailInfo['postUser']; 
                                        ?>" class="text-info fs-sm" target="_blank" title="Contact <?php 
                                            echo $detailInfo['name']; 
                                        ?>">
                                        <i class="fal fa-envelope"></i></a>
                                    </div>
                                </div>
                                <?php 
                                    endforeach;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        

        <script src="js/vendors.bundle.js"></script>
        <script src="js/app.bundle.js"></script>
        <script>
            // default list filter
            initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
            // custom response message
            initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
        </script>
    </body>
</html>
