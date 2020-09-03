<?php
$user = 'battalov_userDB';
$pass = '123456789!Q';


try {
    $pdo = new PDO('mysql:host=srv-pleskdb23.ps.kz:3306;dbname=battalov_dbMarlim', $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    exit($e->getMessage());
};

$result = $pdo->query("SELECT * FROM `privacyPolicy`", PDO::FETCH_ASSOC);



?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>
            Test
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
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="fs-lg fw-300 p-5 bg-white border-faded rounded mb-g">
                            <h2>Privacy</h2>
                            <p class="mb-g">
                                Your privacy is important to us at SmartAdmin and the protection, confidentiality and integrity of your personal data are our prime concerns.
                                We will only use your personal information to administer your account, provide the products and services you have requested from us, and to keep you informed about our products and services (if you have consented to this).
                                We only use your data for the purposes for which it was collected and, where relevant, to meet local legal obligations.
                                We will retain your personal information only for as long as is necessary for the purposes for which the information was collected, or as long as is required pursuant to law.
                            </p>
                            <h3>Cookies and other similar technologies</h3>
                            <p>
                                We collect certain data through cookies and similar technologies (e.g. web beacons, tags, device identifiers). Cookies are text files placed on your computer to collect standard internet log information and visitor behaviour information. This information is used to track visitor use of the website and to compile statistical reports on website activity. We register your interaction with our services in order to improve our website, content and services. Our use of such technologies and the data collected is described in more detail in our Cookie Policy. You can manage your cookie preferences through your browser settings.
                            </p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание №1 с помощю <code>foreach</code>
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                <p>Создать массив, добавить текст в него, и вывести их используя циклы <code>foreach, for, while</code>. Должно быть 3 примера используя 3 цикла.</p>
                            </div>
                          
                            <div class="fs-lg fw-300 p-5 bg-white border-faded rounded mb-g">
                                <?php
                                    for ($i=0; $i <= 1; $i++) { 
                                        foreach ($result as $key => $row) { 
                                            if ($key == $i) { ?>
                                                <h2><?php echo $row['title']; ?></h2>
                                                <p class="mb-g"><?php echo $row['text']; ?></p>
                                            <?php } else { ?>
                                                <h2><?php echo $row['title']; ?></h2>
                                                <p class="mb-g"><?php echo $row['text']; ?></p>

                                        <?php }
                                      
                                    };
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            

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
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                <p>Вывести список хлебных крошек при помощи цикла <code>foreach</code>
                                    <br> Структура элемента: ссылка + название <br>
                                    <i>Последний элемент должен иметь класс <code>active</code> и не иметь ссылки. </i>
                                </p>
                            </div>
                            <ol class="breadcrumb page-breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Главная</a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">PHP</a></li>
                                <li class="breadcrumb-item active">Функции</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

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
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-content">
                                <div class="panel-tag">
                                    <p>Выведите данные при помощи цикла <code>foreach</code></p>
                                </div>
                                <div class="bg-warning-100 border border-warning rounded">
                                    <div class="input-group p-2 mb-0">
                                        <input type="text" class="form-control form-control-lg shadow-inset-2 bg-warning-50 border-warning" id="js-list-msg-filter" placeholder="Filter list">
                                        <div class="input-group-append">
                                            <div class="input-group-text bg-warning-500 border-warning">
                                                <i class="fal fa-search fs-xl"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <ul id="js-list-msg" class="list-group px-2 pb-2 js-list-filter">
                                        <li class="list-group-item">
                                            <span data-filter-tags="reports file">Reports</span>
                                        </li>
                                        <li class="list-group-item">
                                            <span data-filter-tags="analytics graphs">Analytics</span>
                                        </li>
                                        <li class="list-group-item">
                                            <span data-filter-tags="export download">Export</span>
                                        </li>
                                        <li class="list-group-item">
                                            <span data-filter-tags="storage">Storage</span>
                                        </li>
                                    </ul>
                                    <div class="filter-message js-filter-message mt-0 fs-sm"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                <p>
                                    Сформируйте массив из элементов. Создайте структуру каждого элемента. <br>
                                    Выведите данные при помощи цикла <code>foreach</code>

                                </p>
                            </div>
                            <div class="d-flex mt-2">
                                My Tasks
                                <span class="d-inline-block ml-auto">130 / 500</span>
                            </div>
                            <div class="progress progress-sm mb-3">
                                <div class="progress-bar bg-fusion-400" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex">
                                Transfered
                                <span class="d-inline-block ml-auto">440 TB</span>
                            </div>
                            <div class="progress progress-sm mb-3">
                                <div class="progress-bar bg-success-500" role="progressbar" style="width: 34%;" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex">
                                Bugs Squashed
                                <span class="d-inline-block ml-auto">77%</span>
                            </div>
                            <div class="progress progress-sm mb-3">
                                <div class="progress-bar bg-info-400" role="progressbar" style="width: 77%;" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex">
                                User Testing
                                <span class="d-inline-block ml-auto">7 days</span>
                            </div>
                            <div class="progress progress-sm mb-g">
                                <div class="progress-bar bg-primary-300" role="progressbar" style="width: 84%;" aria-valuenow="84" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                             <p>
                              Сформируйте массив элементов и выведите данные при помощи цикла <code>foreach</code></p>
                            </div>
                           <div class="d-flex flex-wrap demo demo-h-spacing mt-3 mb-3">
                            <div class="rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                                <img src="img/demo/authors/sunny.png" alt="Sunny A." class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                                <div class="ml-2 mr-3">
                                    <h5 class="m-0">
                                        Sunny A. (UI/UX Expert)
                                        <small class="m-0 fw-300">
                                            Lead Author
                                        </small>
                                    </h5>
                                    <a href="https://twitter.com/@myplaneticket" class="text-info fs-sm" target="_blank">@myplaneticket</a> -
                                    <a href="https://wrapbootstrap.com/user/myorange" class="text-info fs-sm" target="_blank" title="Contact Sunny"><i class="fal fa-envelope"></i></a>
                                </div>
                            </div>
                            <div class="rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                                <img src="img/demo/authors/josh.png" alt="Jos K." class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                                <div class="ml-2 mr-3">
                                    <h5 class="m-0">
                                        Jos K. (ASP.NET Developer)
                                        <small class="m-0 fw-300">
                                            Partner &amp; Contributor
                                        </small>
                                    </h5>
                                    <a href="https://twitter.com/@atlantez" class="text-info fs-sm" target="_blank">@atlantez</a> -
                                    <a href="https://wrapbootstrap.com/user/Walapa" class="text-info fs-sm" target="_blank" title="Contact Jos"><i class="fal fa-envelope"></i></a>
                                </div>
                            </div>
                            <div class="rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                                <img src="img/demo/authors/jovanni.png" alt="Jovanni Lo" class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                                <div class="ml-2 mr-3">
                                    <h5 class="m-0">
                                        Jovanni L. (PHP Developer)
                                        <small class="m-0 fw-300">
                                            Partner &amp; Contributor
                                        </small>
                                    </h5>
                                    <a href="https://twitter.com/@lodev09" class="text-info fs-sm" target="_blank">@lodev09</a> -
                                    <a href="https://wrapbootstrap.com/user/lodev09" class="text-info fs-sm" target="_blank" title="Contact Jovanni"><i class="fal fa-envelope"></i></a>
                                </div>
                            </div>
                            <div class="rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                                <img src="img/demo/authors/roberto.png" alt="Jovanni Lo" class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                                <div class="ml-2 mr-3">
                                    <h5 class="m-0">
                                        Roberto R. (Rails Developer)
                                        <small class="m-0 fw-300">
                                            Partner &amp; Contributor
                                        </small>
                                    </h5>
                                    <a href="https://twitter.com/@sildur" class="text-info fs-sm" target="_blank">@sildur</a> -
                                    <a href="https://wrapbootstrap.com/user/sildur" class="text-info fs-sm" target="_blank" title="Contact Roberto"><i class="fal fa-envelope"></i></a>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

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
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                <p>
                                    Добавьте ключ <code>status</code>. Если у пользователя <code>status => true;</code> тогда вывести его, иначе пропускаем. <br>
                                    В итоге, нужно показать двоих из четырех пользователей.
                                </p>
                            </div>
                           <div class="d-flex flex-wrap demo demo-h-spacing mt-3 mb-3">
                            <div class="rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                                <img src="img/demo/authors/sunny.png" alt="Sunny A." class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                                <div class="ml-2 mr-3">
                                    <h5 class="m-0">
                                        Sunny A. (UI/UX Expert)
                                        <small class="m-0 fw-300">
                                            Lead Author
                                        </small>
                                    </h5>
                                    <a href="https://twitter.com/@myplaneticket" class="text-info fs-sm" target="_blank">@myplaneticket</a> -
                                    <a href="https://wrapbootstrap.com/user/myorange" class="text-info fs-sm" target="_blank" title="Contact Sunny"><i class="fal fa-envelope"></i></a>
                                </div>
                            </div>
                            <div class="rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                                <img src="img/demo/authors/josh.png" alt="Jos K." class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                                <div class="ml-2 mr-3">
                                    <h5 class="m-0">
                                        Jos K. (ASP.NET Developer)
                                        <small class="m-0 fw-300">
                                            Partner &amp; Contributor
                                        </small>
                                    </h5>
                                    <a href="https://twitter.com/@atlantez" class="text-info fs-sm" target="_blank">@atlantez</a> -
                                    <a href="https://wrapbootstrap.com/user/Walapa" class="text-info fs-sm" target="_blank" title="Contact Jos"><i class="fal fa-envelope"></i></a>
                                </div>
                            </div>
                            <div class="rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                                <img src="img/demo/authors/jovanni.png" alt="Jovanni Lo" class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                                <div class="ml-2 mr-3">
                                    <h5 class="m-0">
                                        Jovanni L. (PHP Developer)
                                        <small class="m-0 fw-300">
                                            Partner &amp; Contributor
                                        </small>
                                    </h5>
                                    <a href="https://twitter.com/@lodev09" class="text-info fs-sm" target="_blank">@lodev09</a> -
                                    <a href="https://wrapbootstrap.com/user/lodev09" class="text-info fs-sm" target="_blank" title="Contact Jovanni"><i class="fal fa-envelope"></i></a>
                                </div>
                            </div>
                            <div class="rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                                <img src="img/demo/authors/roberto.png" alt="Jovanni Lo" class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                                <div class="ml-2 mr-3">
                                    <h5 class="m-0">
                                        Roberto R. (Rails Developer)
                                        <small class="m-0 fw-300">
                                            Partner &amp; Contributor
                                        </small>
                                    </h5>
                                    <a href="https://twitter.com/@sildur" class="text-info fs-sm" target="_blank">@sildur</a> -
                                    <a href="https://wrapbootstrap.com/user/sildur" class="text-info fs-sm" target="_blank" title="Contact Roberto"><i class="fal fa-envelope"></i></a>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                <p>Сформируйте массив данных и выведите полностью альбом.</p>
                            </div>
                            <div id="js-lightgallery">
                                <a class="" href="img/demo/gallery/1.jpg" data-sub-html="The free in pointed they their for the so fame.">
                                    <img class="img-responsive" src="img/demo/gallery/thumb/1.jpg" alt="image">
                                </a>
                                <a class="" href="img/demo/gallery/2.jpg" data-sub-html="Sinking self-interest along four magazine he each specially rewritten">
                                    <img class="img-responsive" src="img/demo/gallery/thumb/2.jpg" alt="image">
                                </a>
                                <a class="" href="img/demo/gallery/3.jpg" data-sub-html="More and of are the of wonder, make written it checks, intrigued its the in.">
                                    <img class="img-responsive" src="img/demo/gallery/thumb/3.jpg" alt="image">
                                </a>
                                <a class="" href="img/demo/gallery/4.jpg" data-sub-html="And review, them. Turns second was enough those however the I wanting, written, above release unmoved would by slowly have peacefully">
                                    <img class="img-responsive" src="img/demo/gallery/thumb/4.jpg" alt="image">
                                </a>
                                <a class="" href="img/demo/gallery/5.jpg" data-sub-html="Was up the fresh candidates, concepts example">
                                    <img class="img-responsive" src="img/demo/gallery/thumb/5.jpg" alt="image">
                                </a>
                                <a class="" href="img/demo/gallery/6.jpg" data-sub-html="Few one what is him for team- little deceleration the the surely is well ran lifted">
                                    <img class="img-responsive" src="img/demo/gallery/thumb/6.jpg" alt="image">
                                </a>
                                <a class="" href="img/demo/gallery/7.jpg" data-sub-html="Concepts diet, personalities those life quietly every dressing epic in of men, presented. External their and music">
                                    <img class="img-responsive" src="img/demo/gallery/thumb/7.jpg" alt="image">
                                </a>
                                <a class="" href="img/demo/gallery/8.jpg" data-sub-html="Hunt, problems the on where your into so of which have he set he on instead, have shared of behind people">
                                    <img class="img-responsive" src="img/demo/gallery/thumb/8.jpg" alt="image">
                                </a>
                                <a class="" href="img/demo/gallery/9.jpg" data-sub-html="Him bread deep was meals we've amped rather it of some contact familiar this learn">
                                    <img class="img-responsive" src="img/demo/gallery/thumb/9.jpg" alt="image">
                                </a>
                                <a class="" href="img/demo/gallery/10.jpg" data-sub-html="And greatest lie as any as is and brown and tone as check to I o'clock time">
                                    <img class="img-responsive" src="img/demo/gallery/thumb/10.jpg" alt="image">
                                </a>
                                <a class="" href="img/demo/gallery/11.jpg" data-sub-html="Ut horses support succeeding, one clear cheerful, on would">
                                    <img class="img-responsive" src="img/demo/gallery/thumb/11.jpg" alt="image">
                                </a>
                                <a class="" href="img/demo/gallery/12.jpg" data-sub-html="harmonics, several from there character headline">
                                    <img class="img-responsive" src="img/demo/gallery/thumb/12.jpg" alt="image">
                                </a>
                                <a class="" href="img/demo/gallery/13.jpg" data-sub-html="what effort initial each real the refinements. I have in here's will. ">
                                    <img class="img-responsive" src="img/demo/gallery/thumb/13.jpg" alt="image">
                                </a>
                                <a class="" href="img/demo/gallery/14.jpg" data-sub-html="Neuter. Contribution his from to more because being the in design rather, concept both of.">
                                    <img class="img-responsive" src="img/demo/gallery/thumb/14.jpg" alt="image">
                                </a>
                                <a class="" href="img/demo/gallery/15.jpg" data-sub-html="With to contact that had posterity in at and in to the entirely as so">
                                    <img class="img-responsive" src="img/demo/gallery/thumb/15.jpg" alt="image">
                                </a>
                                <a class="" href="img/demo/gallery/16.jpg" data-sub-html="Convince let are officers, that sign up from this as the turner">
                                    <img class="img-responsive" src="img/demo/gallery/thumb/16.jpg" alt="image">
                                </a>
                                <a class="" href="img/demo/gallery/17.jpg" data-sub-html="Contracts. Who up texts rung best not the rendering feel thought">
                                    <img class="img-responsive" src="img/demo/gallery/thumb/17.jpg" alt="image">
                                </a>
                                <a class="" href="img/demo/gallery/18.jpg" data-sub-html="The diet, right far sign apart supplies was first look have I somehow eye times always are how even ">
                                    <img class="img-responsive" src="img/demo/gallery/thumb/18.jpg" alt="image">
                                </a>
                                <a class="" href="img/demo/gallery/19.jpg" data-sub-html=" Little is always the to weary she and various">
                                    <img class="img-responsive" src="img/demo/gallery/thumb/19.jpg" alt="image">
                                </a>
                                <a class="" href="img/demo/gallery/20.jpg" data-sub-html="wamples towards how eating elite. Him bread deep was meals we've amped rather it of some contact familiar">
                                    <img class="img-responsive" src="img/demo/gallery/thumb/20.jpg" alt="image">
                                </a>
                                <a class="" href="img/demo/gallery/21.jpg">
                                    <img class="img-responsive" src="img/demo/gallery/thumb/21.jpg" alt="image">
                                </a>
                                <a class="" href="img/demo/gallery/22.jpg">
                                    <img class="img-responsive" src="img/demo/gallery/thumb/22.jpg" alt="image">
                                </a>
                                <a class="" href="img/demo/gallery/23.jpg">
                                    <img class="img-responsive" src="img/demo/gallery/thumb/23.jpg" alt="image">
                                </a>
                                <a class="" href="img/demo/gallery/24.jpg">
                                    <img class="img-responsive" src="img/demo/gallery/thumb/24.jpg" alt="image">
                                </a>
                                <a class="" href="img/demo/gallery/25.jpg">
                                    <img class="img-responsive" src="img/demo/gallery/thumb/25.jpg" alt="image">
                                </a>
                                <a class="" href="img/demo/gallery/26.jpg">
                                    <img class="img-responsive" src="img/demo/gallery/thumb/26.jpg" alt="image">
                                </a>
                                <a class="" href="img/demo/gallery/27.jpg">
                                    <img class="img-responsive" src="img/demo/gallery/thumb/27.jpg" alt="image">
                                </a>
                                <a class="" href="img/demo/gallery/28.jpg">
                                    <img class="img-responsive" src="img/demo/gallery/thumb/28.jpg" alt="image">
                                </a>
                                <a class="" href="img/demo/gallery/29.jpg">
                                    <img class="img-responsive" src="img/demo/gallery/thumb/29.jpg" alt="image">
                                </a>
                                <a class="" href="img/demo/gallery/30.jpg">
                                    <img class="img-responsive" src="img/demo/gallery/thumb/30.jpg" alt="image">
                                </a>
                                <a class="" href="img/demo/gallery/31.jpg">
                                    <img class="img-responsive" src="img/demo/gallery/thumb/31.jpg" alt="image">
                                </a>
                                <a class="" href="img/demo/gallery/32.jpg">
                                    <img class="img-responsive" src="img/demo/gallery/thumb/32.jpg" alt="image">
                                </a>
                                <a class="" href="img/demo/gallery/33.jpg">
                                    <img class="img-responsive" src="img/demo/gallery/thumb/33.jpg" alt="image">
                                </a>
                                <a class="" href="img/demo/gallery/34.jpg">
                                    <img class="img-responsive" src="img/demo/gallery/thumb/34.jpg" alt="image">
                                </a>
                                <a class="" href="img/demo/gallery/35.jpg">
                                    <img class="img-responsive" src="img/demo/gallery/thumb/35.jpg" alt="image">
                                </a>
                                <a class="" href="img/demo/gallery/36.jpg">
                                    <img class="img-responsive" src="img/demo/gallery/thumb/36.jpg" alt="image">
                                </a>
                                <a class="" href="img/demo/gallery/37.jpg">
                                    <img class="img-responsive" src="img/demo/gallery/thumb/37.jpg" alt="image">
                                </a>
                                <a class="" href="img/demo/gallery/38.jpg">
                                    <img class="img-responsive" src="img/demo/gallery/thumb/38.jpg" alt="image">
                                </a>
                                <a class="" href="img/demo/gallery/39.jpg">
                                    <img class="img-responsive" src="img/demo/gallery/thumb/39.jpg" alt="image">
                                </a>
                                <a class="" href="img/demo/gallery/40.jpg">
                                    <img class="img-responsive" src="img/demo/gallery/thumb/40.jpg" alt="image">
                                </a>
                                <a class="" href="img/demo/gallery/41.jpg">
                                    <img class="img-responsive" src="img/demo/gallery/thumb/41.jpg" alt="image">
                                </a>
                                <a class="" href="img/demo/gallery/42.jpg">
                                    <img class="img-responsive" src="img/demo/gallery/thumb/42.jpg" alt="image">
                                </a>
                                <a class="" href="img/demo/gallery/43.jpg">
                                    <img class="img-responsive" src="img/demo/gallery/thumb/43.jpg" alt="image">
                                </a>
                                <a class="" href="img/demo/gallery/44.jpg">
                                    <img class="img-responsive" src="img/demo/gallery/thumb/44.jpg" alt="image">
                                </a>
                                <a class="" href="img/demo/gallery/45.jpg">
                                    <img class="img-responsive" src="img/demo/gallery/thumb/45.jpg" alt="image">
                                </a>
                                <a class="" href="img/demo/gallery/46.jpg">
                                    <img class="img-responsive" src="img/demo/gallery/thumb/46.jpg" alt="image">
                                </a>
                                <a class="" href="img/demo/gallery/47.jpg">
                                    <img class="img-responsive" src="img/demo/gallery/thumb/47.jpg" alt="image">
                                </a>
                                <a class="" href="img/demo/gallery/48.jpg">
                                    <img class="img-responsive" src="img/demo/gallery/thumb/48.jpg" alt="image">
                                </a>
                                <a class="" href="img/demo/gallery/49.jpg">
                                    <img class="img-responsive" src="img/demo/gallery/thumb/49.jpg" alt="image">
                                </a>
                                <a class="" href="img/demo/gallery/50.jpg">
                                    <img class="img-responsive" src="img/demo/gallery/thumb/50.jpg" alt="image">
                                </a>
                                <a class="" href="img/demo/gallery/51.jpg">
                                    <img class="img-responsive" src="img/demo/gallery/thumb/51.jpg" alt="image">
                                </a>
                                <a class="" href="img/demo/gallery/52.jpg">
                                    <img class="img-responsive" src="img/demo/gallery/thumb/52.jpg" alt="image">
                                </a>
                                <a class="" href="img/demo/gallery/53.jpg">
                                    <img class="img-responsive" src="img/demo/gallery/thumb/53.jpg" alt="image">
                                </a>
                                <a class="" href="img/demo/gallery/54.jpg">
                                    <img class="img-responsive" src="img/demo/gallery/thumb/54.jpg" alt="image">
                                </a>
                                <a class="" href="img/demo/gallery/55.jpg">
                                    <img class="img-responsive" src="img/demo/gallery/thumb/55.jpg" alt="image">
                                </a>
                                <a class="" href="img/demo/gallery/56.jpg">
                                    <img class="img-responsive" src="img/demo/gallery/thumb/56.jpg" alt="image">
                                </a>
                                <a class="" href="img/demo/gallery/57.jpg">
                                    <img class="img-responsive" src="img/demo/gallery/thumb/57.jpg" alt="image">
                                </a>
                                <a class="" href="img/demo/gallery/58.jpg">
                                    <img class="img-responsive" src="img/demo/gallery/thumb/58.jpg" alt="image">
                                </a>
                                <a class="" href="img/demo/gallery/59.jpg">
                                    <img class="img-responsive" src="img/demo/gallery/thumb/59.jpg" alt="image">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
            
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
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-content">
                                <div class="panel-tag">
                                    <p>Выведите пункты меню при помощи цикла <code>foreach</code></p>
                                </div>
                                <div class="panel-content">
                                    <div class="col-md-4">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary dropdown-toggle bg-trans-gradient waves-effect waves-themed" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Custom
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-animated" style="">
                                                <a class="dropdown-item">Action</a>
                                                <a class="dropdown-item">Another action</a>
                                                <a class="dropdown-item">Something else here</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-content">
                                <div class="panel-tag">
                                    <p>Сформируйте массив для всех меню включая заголовки и выведите циклом</p>
                                </div>
                                <div class="panel-content">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary dropdown-toggle bg-trans-gradient waves-effect waves-themed" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Technologies
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-animated" style="">
                                                    <a class="dropdown-item">HTML & CSS</a>
                                                    <a class="dropdown-item">PHP</a>
                                                    <a class="dropdown-item">MySQL</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary dropdown-toggle bg-trans-gradient waves-effect waves-themed" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Tools
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-animated" style="">
                                                    <a class="dropdown-item">git</a>
                                                    <a class="dropdown-item">PHPStorm</a>
                                                    <a class="dropdown-item">Docker</a>
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
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-content">
                                <div class="panel-tag">
                                    <p>Используя функции для дат <code>mktime(), date()</code> выведите текущие даты в заданном формате.</p>
                                </div>
                                <div class="panel-content">
                                    <div class="col-md-4">
                                        <p>2030-02-12 <mark>Год-Месяц-День</mark></p>
                                        <p>19/02/2030 <mark>День/Месяц/Год</mark></p>
                                        <p>19/02/2030 19:30:12 <mark>День/Месяц/Год Час:Минута:Секунда</mark></p>
                                        <p>Monday <mark>День недели</mark></p>
                                        <p>August <mark>Месяц</mark></p>
                                        <p>Sunday, June 10, 2030 <mark>День недели, Месяц Число, Год</mark></p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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
                    <div class="panel-container show">
                        <div class="panel-content">
                                <div class="panel-content">
                                <div class="panel-tag">
                                <p>Сформируйте массив с элементами и выведите при помощи цикла</p>
                            </div>
                                <div class="dropdown-menu d-block position-relative float-none" style="width: 14rem; z-index: 2">
                                    <a class="dropdown-item" href="javascript:void(0)"><span class="badge badge-success float-right ml-3">17</span>Action</a>
                                    <a class="dropdown-item" href="javascript:void(0)"><span class="badge badge-pill badge-primary float-right ml-3">29</span>Another action</a>
                                    <a class="dropdown-item disabled" href="javascript:void(0)">Disabled link</a>
                                    <div class="dropdown-divider"></div>
                                    <h6 class="dropdown-header">Dropdown header</h6>
                                    <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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
                    <div class="panel-container show">
                        <div class="panel-content">
                                <div class="panel-content">
                                <div class="panel-tag">
                                <p>Сформируйте массив с элементами и выведите при помощи цикла</p>
                            </div>
                                <div class="dropdown-menu d-block position-relative float-none" style="width: 14rem; z-index: 2">
                                    <a class="dropdown-item" href="javascript:void(0)">
                                        <span class="badge badge-success float-right ml-3">17</span>Action</a>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                        <span class="badge badge-pill badge-primary float-right ml-3">29</span>Another action</a>
                                    <a class="dropdown-item disabled" href="javascript:void(0)">Disabled link</a>
                                    <div class="dropdown-divider"></div>
                                    <h6 class="dropdown-header">Dropdown header</h6>
                                    <div class="dropdown-multilevel">
                                        <div class="dropdown-item">
                                            Multilevel
                                        </div>
                                        <div class="dropdown-menu">
                                            <a href="javascript:void(0);" class="dropdown-item">Menu Item</a>
                                            <a href="javascript:void(0);" class="dropdown-item">Another Item</a>
                                            <a href="javascript:void(0);" class="dropdown-item disabled">Disabled</a>
                                            <div class="dropdown-multilevel">
                                                <div class="dropdown-item">
                                                    Second Level
                                                </div>
                                                <div class="dropdown-menu">
                                                    <a href="javascript:void(0);" class="dropdown-item">Menu Item</a>
                                                    <a href="javascript:void(0);" class="dropdown-item">Another Item</a>
                                                    <a href="javascript:void(0);" class="dropdown-item">Third Level</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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
                    <div class="panel-container show">
                        <div class="panel-content">
                                <div class="panel-content">
                                <div class="panel-tag">
                                <p>Сформируйте массив с элементами и выведите при помощи цикла</p>
                            </div>
                                <div class="dropdown-menu d-block position-relative float-none" style="width: 14rem; z-index: 2">
                                    <a class="dropdown-item" href="javascript:void(0)">
                                        <span class="badge badge-success float-right ml-3">17</span>Action</a>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                        <span class="badge badge-pill badge-primary float-right ml-3">29</span>Another action</a>
                                    <a class="dropdown-item disabled" href="javascript:void(0)">Disabled link</a>
                                    <div class="dropdown-divider"></div>
                                    <h6 class="dropdown-header">Dropdown header</h6>
                                    <div class="dropdown-multilevel">
                                        <div class="dropdown-item">
                                            Multilevel
                                        </div>
                                        <div class="dropdown-menu">
                                            <a href="javascript:void(0);" class="dropdown-item">Menu Item</a>
                                            <a href="javascript:void(0);" class="dropdown-item">Another Item</a>
                                            <a href="javascript:void(0);" class="dropdown-item disabled">Disabled</a>
                                            <div class="dropdown-multilevel">
                                                <div class="dropdown-item">
                                                    Second Level
                                                </div>
                                                <div class="dropdown-menu">
                                                    <a href="javascript:void(0);" class="dropdown-item">Menu Item</a>
                                                    <a href="javascript:void(0);" class="dropdown-item">Another Item</a>
                                                    <div class="dropdown-multilevel dropdown-multilevel-left">
                                                        <div class="dropdown-item">
                                                            Third Level
                                                        </div>
                                                        <div class="dropdown-menu">
                                                            <a href="javascript:void(0);" class="dropdown-item">Menu Item</a>
                                                            <a href="javascript:void(0);" class="dropdown-item disabled">Disabled</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <div class="col-md-6">
                <div id="panel-4" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание </span>
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                <p>Сформируйте структуру массива и выведите элементы при помощи цикла <code>foreach</code></p>
                            </div>
                            <div class="bg-success-900 rounded bg-info-gradient">
                                <div class="d-flex position-relative py-3 px-4">
                                    <i class="fal fa-search color-success-700 position-absolute pos-left fs-lg px-3 py-2 mt-1 ml-4"></i>
                                    <input type="text" id="js_nested_list_filter" class="form-control shadow-inset-1 pl-6 border-success" placeholder="Filter nested items (e.g buttons, chart)">
                                </div>
                                <!-- nav-menu-reset will reset the font colors -->
                                <ul id="js_nested_list" class="nav-menu nav-menu-reset nav-menu-compact bg-success-900 bg-info-gradient mb-sm-4 mb-md-0 rounded" data-nav-accordion="true">
                                    <li class="open active">
                                        <a href="javascript:void(0);" data-filter-tags="user interface buttons compass action dropdown navigation sidebars">
                                            <span class="nav-link-text">User Interface </span>
                                            <strong class="dl-ref bg-primary-500">&nbsp;1.0&nbsp;</strong>
                                        </a>
                                        <ul style="display:block;">
                                            <li class="active">
                                                <a href="javascript:void(0);" data-filter-tags="user interface buttons">
                                                    <span class="nav-link-text">
                                                        Buttons
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" data-filter-tags="user interface compass">
                                                    <span class="nav-link-text">
                                                        Compass
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" data-filter-tags="user interface action dropdown navigation sidebars">
                                                    <span class="nav-link-text">
                                                        Action
                                                    </span>
                                                    <strong class="dl-ref bg-primary-500">&nbsp;1.3&nbsp;</strong>
                                                </a>
                                                <ul>
                                                    <li>
                                                        <a href="javascript:void(0);" data-filter-tags="user interface action dropdown">
                                                            <span class="nav-link-text">
                                                                Dropdown
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" data-filter-tags="user interface action navigation">
                                                            <span class="nav-link-text">
                                                                Navigation
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" data-filter-tags="user interface action sidebars">
                                                            <span class="nav-link-text">
                                                                Sidebars
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" data-filter-tags="graphs flot chart pie sythentic graphs polygraphs">
                                            <span class="nav-link-text">
                                                Graphs
                                            </span>
                                            <strong class="dl-ref bg-primary-500">&nbsp;2.0&nbsp;</strong>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0);" data-filter-tags="graphs flot chart">
                                                    <span class="nav-link-text">
                                                        Flot chart
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" data-filter-tags="graphs pie chart">
                                                    <span class="nav-link-text">
                                                        Pie charts
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" data-filter-tags="graphs sythentic">
                                                    <span class="nav-link-text">
                                                        Sythentic graphs
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" data-filter-tags="graphs flot polygraphs">
                                                    <span class="nav-link-text">
                                                        Polygraphs
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" data-filter-tags="forms controls loaders other elements buttons input checkbox">
                                            <span class="nav-link-text">Forms </span>
                                            <strong class="dl-ref bg-primary-500">&nbsp;3.0&nbsp;</strong>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0);" data-filter-tags="forms controls">
                                                    <span class="nav-link-text"> Controls</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" data-filter-tags="forms loaders">
                                                    <span class="nav-link-text"> Loaders</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" data-filter-tags="forms other elements buttons input checkbox">
                                                    <span class="nav-link-text">
                                                        Other elements
                                                    </span>
                                                    <strong class="dl-ref bg-primary-500">&nbsp;3.3&nbsp;</strong>
                                                </a>
                                                <ul>
                                                    <li>
                                                        <a href="javascript:void(0);" data-filter-tags="forms other elements buttons">
                                                            <span class="nav-link-text">
                                                                Buttons
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" data-filter-tags="forms other elements input">
                                                            <span class="nav-link-text">
                                                                Input
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li data-filter-tags="forms other elements checkbox">
                                                        <a href="javascript:void(0);">
                                                            <span class="nav-link-text">
                                                                Checkbox
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <div class="filter-message js-filter-message m-0 text-left pl-4 py-3 fw-500"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          
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
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-content">
                                <div class="panel-tag">
                                    <p>Сформируйте массив и выведите только пункты меню. Логотип и форму поиска не трогать.</p>
                                </div>
                                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                                    <a class="navbar-brand" href="javascript:void(0);">Navbar</a>
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <ul class="navbar-nav mr-auto">
                                            <li class="nav-item active">
                                                <a class="nav-link" href="javascript:void(0);">Home <span class="sr-only">(current)</span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="javascript:void(0);">Link</a>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="javascript:void(0);" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Dropdown
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link disabled" href="javascript:void(0);" tabindex="-1" aria-disabled="true">Disabled</a>
                                            </li>
                                        </ul>
                                        <form class="form-inline my-2 my-lg-0">
                                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                            <button class="btn btn-outline-success my-2 my-sm-0 waves-effect waves-themed" type="submit">Search</button>
                                        </form>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            

            <div class="col-md-6">
                <div id="panel-12" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                Сформируйте массив и выведите данные при помощи цикла. 
                            </div>
                            <div class="row">
                                <div class="col-auto">
                                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                            <i class="fal fa-home"></i>
                                            <span class="hidden-sm-down ml-1"> Home</span>
                                        </a>
                                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                            <i class="fal fa-user"></i>
                                            <span class="hidden-sm-down ml-1"> Profile</span>
                                        </a>
                                        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                                            <i class="fal fa-envelope"></i>
                                            <span class="hidden-sm-down ml-1"> Messages</span>
                                        </a>
                                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                                            <i class="fal fa-cog"></i>
                                            <span class="hidden-sm-down ml-1"> Settings</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="tab-content" id="v-pills-tabContent">
                                        <div class="tab-pane fade active show" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                            <h3>
                                                Home
                                            </h3>
                                            <p> Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. </p>
                                            <p> Organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore.</p>
                                            <span class="fs-sm d-flex align-items-center mt-3 flex-wrap">
                                                <a href="javascript:void(0);" class="mr-1 mt-1" title="Cell A-0012">
                                                    <img src="img/thumbs/pic-7.png" class="img-share" alt="pic-7" style="">
                                                </a>
                                                <a href="javascript:void(0);" class="mr-1 mt-1" title="Patient A-473 saliva">
                                                    <img src="img/thumbs/pic-8.png" class="img-share" alt="pic-8" style="">
                                                </a>
                                                <a href="javascript:void(0);" class="mr-1 mt-1" title="Patient A-473 blood cells">
                                                    <img src="img/thumbs/pic-11.png" class="img-share" alt="pic-11" style="">
                                                </a>
                                                <a href="javascript:void(0);" class="mr-1 mt-1" title="Patient A-473 Membrane O.C">
                                                    <img src="img/thumbs/pic-12.png" class="img-share" alt="pic-12" style="">
                                                </a>
                                            </span>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                            <h3>
                                                Profile
                                            </h3>
                                            <div class="d-flex flex-row rounded-top mb-3">
                                                <div class="d-flex flex-row align-items-center mt-1 mb-1">
                                                    <span class="mr-2">
                                                        <img src="img/demo/avatars/avatar-admin.png" class="rounded-circle profile-image" alt="Dr. Codex Lantern">
                                                    </span>
                                                    <div class="info-card-text">
                                                        <div class="fs-lg text-truncate text-truncate-lg">Dr. Codex Lantern</div>
                                                        <span class="text-truncate text-truncate-md opacity-80">drlantern@gotbootstrap.com</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <p>
                                                Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee.
                                            </p>
                                            <p>
                                                Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic.
                                            </p>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                            <h3>
                                                Messages
                                            </h3>
                                            <ul class="notification">
                                                <li>
                                                    <a href="javascript:void(0);" class="d-flex align-items-center py-2 px-0">
                                                        <span class="d-flex flex-column flex-1">
                                                            <span class="name">Melissa Ayre</span>
                                                            <span class="msg-a fs-sm">Re: New security codes</span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="d-flex align-items-center py-2 px-0">
                                                        <span class="d-flex flex-column flex-1">
                                                            <span class="name">Adison Lee</span>
                                                            <span class="msg-a fs-sm">Msed quia non numquam eius</span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="d-flex align-items-center py-2 px-0">
                                                        <span class="d-flex flex-column flex-1">
                                                            <span class="name">Oliver Kopyuv</span>
                                                            <span class="msg-a fs-sm">Msed quia non numquam eius</span>
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                            <h3>Settings</h3>
                                            <div class="alert alert-success">
                                                <strong>
                                                    Settings saved
                                                </strong>
                                                <p class="m-0">
                                                    All your settings changes have been saved!
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                Сформируйте массив и выведите данные при помощи цикла.
                            </div>
                            <h5 class="frame-heading">
                                Обычная таблица
                            </h5>
                            <div class="frame-wrap">
                                <table class="table m-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td colspan="2">Larry the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                Сформировать массив и вывести данные. Обратите внимание на формирование ссылок. <code>?id=X</code> где вместо Х должен быть id конкретной записи. Таким образом вы подготовите ссылки на Просмотр, Изменение и Удаление записи.
                            </div>
                            <h5 class="frame-heading">
                                Обычная таблица
                            </h5>
                            <div class="frame-wrap">
                                <table class="table table-dark m-0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>
                                                <a href="view.php?id=1" class="btn btn-info">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a href="edit.php?id=1" class="btn btn-warning">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="delete.php?id=1" class="btn btn-danger">
                                                    <i class="fa fa-window-close"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                            <td>
                                                <a href="view.php?id=2" class="btn btn-info">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a href="edit.php?id=2" class="btn btn-warning">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="delete.php?id=2" class="btn btn-danger">
                                                    <i class="fa fa-window-close"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                            <td>
                                                <a href="view.php?id=3" class="btn btn-info">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a href="edit.php?id=3" class="btn btn-warning">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="delete.php?id=3" class="btn btn-danger">
                                                    <i class="fa fa-window-close"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Формы -->
            
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
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-content">
                                <div class="panel-tag">
                                    <p>Настройте форму, создайте обработчик который будет принимать данные. Ваша цель: вывести текст на экран. Используйте метод <code>GET</code> </p>
                                </div>
                                <div class="form-group">
                                    <form action="">
                                        <label class="form-label" for="simpleinput">Text</label>
                                        <input type="text" id="simpleinput" class="form-control">
                                        <button class="btn btn-success mt-3">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-content">
                                <div class="panel-tag">
                                    <p>
                                        Если введен некорректный формат email, вывести сообщение: <code>Введите корректный email</code> <br>
                                        Используйте метод <code>POST</code>
                                        <br>
                                        Для вывода сообщения можете использовать любую функцию: <code>echo, var_dump(), die()</code>
                                    </p>
                                </div>
                                <div class="form-group">
                                    <form action="">
                                        <label class="form-label" for="example-email-2">Email</label>
                                        <input type="email" id="example-email-2" name="example-email-2" class="form-control" placeholder="Email">
                                        <button class="btn btn-success mt-3">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-content">
                                <div class="panel-tag">
                                    <p>Теперь по-умолчанию используйте метот <code>POST</code> Отправьте данные в обработчик, который проверит два поля. Если они не равны выведет сообщение: <code>Пароли не совпадают</code><br>
                                    Для вывода сообщения можете использовать любую функцию: <code>echo, var_dump(), die()</code>
                                    </p>
                                </div>
                                <div class="form-group">
                                    <form action="">
                                        <div class="form-group">
                                            <label class="form-label" for="example-password">Password</label>
                                            <input type="password" id="example-password" class="form-control" value="">
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label" for="example-password">Password Confirmation</label>
                                            <input type="password" id="example-password" class="form-control" value="">
                                            <button class="btn btn-success mt-3">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-content">
                                <div class="panel-tag">
                                    <p>
                                        Количество вводимых символов должно быть между 10 и 20. В обработчике проверьте, если меньше, то сообщение: <code>Количество символов должно быть больше 10</code>. А если больше 20, то <code>Количество символов должно быть меньше 20.</code>
                                        Для вывода сообщения можете использовать любую функцию: <code>echo, var_dump(), die()</code>
                                    </p>
                                </div>
                                <div class="form-group">
                                    <form action="">
                                        <label class="form-label" for="example-textarea">Text area</label>
                                        <textarea class="form-control" id="example-textarea" rows="5"></textarea>
                                        <button class="btn btn-success mt-3">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-content">
                                <div class="panel-tag">
                                    <p>
                                        Выведите сообщение того пункта, который вы выберете. К примеру, <mark>Вы выбрали пункт 2</mark><br>
                                        Для вывода сообщения можете использовать любую функцию: <code>echo, var_dump(), die()</code>
                                    </p>
                                </div>
                                <div class="form-group">
                                    <form action="">
                                        <label class="form-label" for="example-select">Input Select</label>
                                        <select class="form-control" id="example-select">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                        <button class="btn btn-success mt-3">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-content">
                                <div class="panel-tag">
                                    <p>
                                        Выведите сообщение: <mark>Вы выбрали пункты 2,5,3</mark> <br>
                                        Соответственно выведите те пункты, которые вы выбрали.
                                    </p>
                                </div>
                                <div class="form-group">
                                    <form action="">
                                        <label class="form-label" for="example-multiselect">Multiple Select</label>
                                        <select id="example-multiselect" multiple="" class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                        <button class="btn btn-success mt-3">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-content">
                                <div class="panel-tag">
                                    <p>Загрузите картинку на сервер и дайте ей уникальное название.</p>
                                </div>
                                <div class="form-group">
                                    <form action="">
                                        <label class="form-label" for="example-fileinput">Default file input</label>
                                        <input type="file" id="example-fileinput" class="form-control-file">
                                        <button class="btn btn-success mt-3">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-content">
                                <div class="panel-tag">
                                    <p>Если чекбокс выбран, выведите сообщение: <mark>Чекбокс отмечен</mark> иначе <mark>Чекбокс не отмечен.</mark></p>
                                </div>
                                <form action="">
                                    <div class="form-group custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="defaultChecked" checked="">
                                        <label class="custom-control-label" for="defaultChecked">Checked</label>
                                    </div>
                                    <button class="btn btn-success">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                <p>
                                    Сформируйте массив и выведите данные
                                </p>
                            </div>
                            <!-- datatable start -->
                            <table id="dt-basic-example" class="table table-bordered table-hover table-striped w-100">
                                <thead class="bg-primary-600">
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                    </tr>
                                    <tr>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>2011/07/25</td>
                                        <td>$170,750</td>
                                    </tr>
                                    <tr>
                                        <td>Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>2009/01/12</td>
                                        <td>$86,000</td>
                                    </tr>
                                    <tr>
                                        <td>Cedric Kelly</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2012/03/29</td>
                                        <td>$433,060</td>
                                    </tr>
                                    <tr>
                                        <td>Airi Satou</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>33</td>
                                        <td>2008/11/28</td>
                                        <td>$162,700</td>
                                    </tr>
                                    <tr>
                                        <td>Brielle Williamson</td>
                                        <td>Integration Specialist</td>
                                        <td>New York</td>
                                        <td>61</td>
                                        <td>2012/12/02</td>
                                        <td>$372,000</td>
                                    </tr>
                                    <tr>
                                        <td>Herrod Chandler</td>
                                        <td>Sales Assistant</td>
                                        <td>San Francisco</td>
                                        <td>59</td>
                                        <td>2012/08/06</td>
                                        <td>$137,500</td>
                                    </tr>
                                    <tr>
                                        <td>Rhona Davidson</td>
                                        <td>Integration Specialist</td>
                                        <td>Tokyo</td>
                                        <td>55</td>
                                        <td>2010/10/14</td>
                                        <td>$327,900</td>
                                    </tr>
                                    <tr>
                                        <td>Colleen Hurst</td>
                                        <td>Javascript Developer</td>
                                        <td>San Francisco</td>
                                        <td>39</td>
                                        <td>2009/09/15</td>
                                        <td>$205,500</td>
                                    </tr>
                                    <tr>
                                        <td>Sonya Frost</td>
                                        <td>Software Engineer</td>
                                        <td>Edinburgh</td>
                                        <td>23</td>
                                        <td>2008/12/13</td>
                                        <td>$103,600</td>
                                    </tr>
                                    <tr>
                                        <td>Jena Gaines</td>
                                        <td>Office Manager</td>
                                        <td>London</td>
                                        <td>30</td>
                                        <td>2008/12/19</td>
                                        <td>$90,560</td>
                                    </tr>
                                    <tr>
                                        <td>Quinn Flynn</td>
                                        <td>Support Lead</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2013/03/03</td>
                                        <td>$342,000</td>
                                    </tr>
                                    <tr>
                                        <td>Charde Marshall</td>
                                        <td>Regional Director</td>
                                        <td>San Francisco</td>
                                        <td>36</td>
                                        <td>2008/10/16</td>
                                        <td>$470,600</td>
                                    </tr>
                                    <tr>
                                        <td>Haley Kennedy</td>
                                        <td>Senior Marketing Designer</td>
                                        <td>London</td>
                                        <td>43</td>
                                        <td>2012/12/18</td>
                                        <td>$313,500</td>
                                    </tr>
                                    <tr>
                                        <td>Tatyana Fitzpatrick</td>
                                        <td>Regional Director</td>
                                        <td>London</td>
                                        <td>19</td>
                                        <td>2010/03/17</td>
                                        <td>$385,750</td>
                                    </tr>
                                    <tr>
                                        <td>Michael Silva</td>
                                        <td>Marketing Designer</td>
                                        <td>London</td>
                                        <td>66</td>
                                        <td>2012/11/27</td>
                                        <td>$198,500</td>
                                    </tr>
                                    <tr>
                                        <td>Paul Byrd</td>
                                        <td>Chief Financial Officer (CFO)</td>
                                        <td>New York</td>
                                        <td>64</td>
                                        <td>2010/06/09</td>
                                        <td>$725,000</td>
                                    </tr>
                                    <tr>
                                        <td>Gloria Little</td>
                                        <td>Systems Administrator</td>
                                        <td>New York</td>
                                        <td>59</td>
                                        <td>2009/04/10</td>
                                        <td>$237,500</td>
                                    </tr>
                                    <tr>
                                        <td>Bradley Greer</td>
                                        <td>Software Engineer</td>
                                        <td>London</td>
                                        <td>41</td>
                                        <td>2012/10/13</td>
                                        <td>$132,000</td>
                                    </tr>
                                    <tr>
                                        <td>Dai Rios</td>
                                        <td>Personnel Lead</td>
                                        <td>Edinburgh</td>
                                        <td>35</td>
                                        <td>2012/09/26</td>
                                        <td>$217,500</td>
                                    </tr>
                                    <tr>
                                        <td>Jenette Caldwell</td>
                                        <td>Development Lead</td>
                                        <td>New York</td>
                                        <td>30</td>
                                        <td>2011/09/03</td>
                                        <td>$345,000</td>
                                    </tr>
                                    <tr>
                                        <td>Yuri Berry</td>
                                        <td>Chief Marketing Officer (CMO)</td>
                                        <td>New York</td>
                                        <td>40</td>
                                        <td>2009/06/25</td>
                                        <td>$675,000</td>
                                    </tr>
                                    <tr>
                                        <td>Caesar Vance</td>
                                        <td>Pre-Sales Support</td>
                                        <td>New York</td>
                                        <td>21</td>
                                        <td>2011/12/12</td>
                                        <td>$106,450</td>
                                    </tr>
                                    <tr>
                                        <td>Doris Wilder</td>
                                        <td>Sales Assistant</td>
                                        <td>Sidney</td>
                                        <td>23</td>
                                        <td>2010/09/20</td>
                                        <td>$85,600</td>
                                    </tr>
                                    <tr>
                                        <td>Angelica Ramos</td>
                                        <td>Chief Executive Officer (CEO)</td>
                                        <td>London</td>
                                        <td>47</td>
                                        <td>2009/10/09</td>
                                        <td>$1,200,000</td>
                                    </tr>
                                    <tr>
                                        <td>Gavin Joyce</td>
                                        <td>Developer</td>
                                        <td>Edinburgh</td>
                                        <td>42</td>
                                        <td>2010/12/22</td>
                                        <td>$92,575</td>
                                    </tr>
                                    <tr>
                                        <td>Jennifer Chang</td>
                                        <td>Regional Director</td>
                                        <td>Singapore</td>
                                        <td>28</td>
                                        <td>2010/11/14</td>
                                        <td>$357,650</td>
                                    </tr>
                                    <tr>
                                        <td>Brenden Wagner</td>
                                        <td>Software Engineer</td>
                                        <td>San Francisco</td>
                                        <td>28</td>
                                        <td>2011/06/07</td>
                                        <td>$206,850</td>
                                    </tr>
                                    <tr>
                                        <td>Fiona Green</td>
                                        <td>Chief Operating Officer (COO)</td>
                                        <td>San Francisco</td>
                                        <td>48</td>
                                        <td>2010/03/11</td>
                                        <td>$850,000</td>
                                    </tr>
                                    <tr>
                                        <td>Shou Itou</td>
                                        <td>Regional Marketing</td>
                                        <td>Tokyo</td>
                                        <td>20</td>
                                        <td>2011/08/14</td>
                                        <td>$163,000</td>
                                    </tr>
                                    <tr>
                                        <td>Michelle House</td>
                                        <td>Integration Specialist</td>
                                        <td>Sidney</td>
                                        <td>37</td>
                                        <td>2011/06/02</td>
                                        <td>$95,400</td>
                                    </tr>
                                    <tr>
                                        <td>Suki Burks</td>
                                        <td>Developer</td>
                                        <td>London</td>
                                        <td>53</td>
                                        <td>2009/10/22</td>
                                        <td>$114,500</td>
                                    </tr>
                                    <tr>
                                        <td>Prescott Bartlett</td>
                                        <td>Technical Author</td>
                                        <td>London</td>
                                        <td>27</td>
                                        <td>2011/05/07</td>
                                        <td>$145,000</td>
                                    </tr>
                                    <tr>
                                        <td>Gavin Cortez</td>
                                        <td>Team Leader</td>
                                        <td>San Francisco</td>
                                        <td>22</td>
                                        <td>2008/10/26</td>
                                        <td>$235,500</td>
                                    </tr>
                                    <tr>
                                        <td>Martena Mccray</td>
                                        <td>Post-Sales support</td>
                                        <td>Edinburgh</td>
                                        <td>46</td>
                                        <td>2011/03/09</td>
                                        <td>$324,050</td>
                                    </tr>
                                    <tr>
                                        <td>Unity Butler</td>
                                        <td>Marketing Designer</td>
                                        <td>San Francisco</td>
                                        <td>47</td>
                                        <td>2009/12/09</td>
                                        <td>$85,675</td>
                                    </tr>
                                    <tr>
                                        <td>Howard Hatfield</td>
                                        <td>Office Manager</td>
                                        <td>San Francisco</td>
                                        <td>51</td>
                                        <td>2008/12/16</td>
                                        <td>$164,500</td>
                                    </tr>
                                    <tr>
                                        <td>Hope Fuentes</td>
                                        <td>Secretary</td>
                                        <td>San Francisco</td>
                                        <td>41</td>
                                        <td>2010/02/12</td>
                                        <td>$109,850</td>
                                    </tr>
                                    <tr>
                                        <td>Vivian Harrell</td>
                                        <td>Financial Controller</td>
                                        <td>San Francisco</td>
                                        <td>62</td>
                                        <td>2009/02/14</td>
                                        <td>$452,500</td>
                                    </tr>
                                    <tr>
                                        <td>Timothy Mooney</td>
                                        <td>Office Manager</td>
                                        <td>London</td>
                                        <td>37</td>
                                        <td>2008/12/11</td>
                                        <td>$136,200</td>
                                    </tr>
                                    <tr>
                                        <td>Jackson Bradshaw</td>
                                        <td>Director</td>
                                        <td>New York</td>
                                        <td>65</td>
                                        <td>2008/09/26</td>
                                        <td>$645,750</td>
                                    </tr>
                                    <tr>
                                        <td>Olivia Liang</td>
                                        <td>Support Engineer</td>
                                        <td>Singapore</td>
                                        <td>64</td>
                                        <td>2011/02/03</td>
                                        <td>$234,500</td>
                                    </tr>
                                    <tr>
                                        <td>Bruno Nash</td>
                                        <td>Software Engineer</td>
                                        <td>London</td>
                                        <td>38</td>
                                        <td>2011/05/03</td>
                                        <td>$163,500</td>
                                    </tr>
                                    <tr>
                                        <td>Sakura Yamamoto</td>
                                        <td>Support Engineer</td>
                                        <td>Tokyo</td>
                                        <td>37</td>
                                        <td>2009/08/19</td>
                                        <td>$139,575</td>
                                    </tr>
                                    <tr>
                                        <td>Thor Walton</td>
                                        <td>Developer</td>
                                        <td>New York</td>
                                        <td>61</td>
                                        <td>2013/08/11</td>
                                        <td>$98,540</td>
                                    </tr>
                                    <tr>
                                        <td>Finn Camacho</td>
                                        <td>Support Engineer</td>
                                        <td>San Francisco</td>
                                        <td>47</td>
                                        <td>2009/07/07</td>
                                        <td>$87,500</td>
                                    </tr>
                                    <tr>
                                        <td>Serge Baldwin</td>
                                        <td>Data Coordinator</td>
                                        <td>Singapore</td>
                                        <td>64</td>
                                        <td>2012/04/09</td>
                                        <td>$138,575</td>
                                    </tr>
                                    <tr>
                                        <td>Zenaida Frank</td>
                                        <td>Software Engineer</td>
                                        <td>New York</td>
                                        <td>63</td>
                                        <td>2010/01/04</td>
                                        <td>$125,250</td>
                                    </tr>
                                    <tr>
                                        <td>Zorita Serrano</td>
                                        <td>Software Engineer</td>
                                        <td>San Francisco</td>
                                        <td>56</td>
                                        <td>2012/06/01</td>
                                        <td>$115,000</td>
                                    </tr>
                                    <tr>
                                        <td>Jennifer Acosta</td>
                                        <td>Junior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>43</td>
                                        <td>2013/02/01</td>
                                        <td>$75,650</td>
                                    </tr>
                                    <tr>
                                        <td>Cara Stevens</td>
                                        <td>Sales Assistant</td>
                                        <td>New York</td>
                                        <td>46</td>
                                        <td>2011/12/06</td>
                                        <td>$145,600</td>
                                    </tr>
                                    <tr>
                                        <td>Hermione Butler</td>
                                        <td>Regional Director</td>
                                        <td>London</td>
                                        <td>47</td>
                                        <td>2011/03/21</td>
                                        <td>$356,250</td>
                                    </tr>
                                    <tr>
                                        <td>Lael Greer</td>
                                        <td>Systems Administrator</td>
                                        <td>London</td>
                                        <td>21</td>
                                        <td>2009/02/27</td>
                                        <td>$103,500</td>
                                    </tr>
                                    <tr>
                                        <td>Jonas Alexander</td>
                                        <td>Developer</td>
                                        <td>San Francisco</td>
                                        <td>30</td>
                                        <td>2010/07/14</td>
                                        <td>$86,500</td>
                                    </tr>
                                    <tr>
                                        <td>Shad Decker</td>
                                        <td>Regional Director</td>
                                        <td>Edinburgh</td>
                                        <td>51</td>
                                        <td>2008/11/13</td>
                                        <td>$183,000</td>
                                    </tr>
                                    <tr>
                                        <td>Michael Bruce</td>
                                        <td>Javascript Developer</td>
                                        <td>Singapore</td>
                                        <td>29</td>
                                        <td>2011/06/27</td>
                                        <td>$183,000</td>
                                    </tr>
                                    <tr>
                                        <td>Donna Snider</td>
                                        <td>Customer Support</td>
                                        <td>New York</td>
                                        <td>27</td>
                                        <td>2011/01/25</td>
                                        <td>$112,000</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                </tfoot>
                            </table>
                            <!-- datatable end -->
                        </div>
                    </div>
                </div>
            </div>

            

            
        </main>
        

        <script src="js/vendors.bundle.js"></script>
        <script src="js/app.bundle.js"></script>
        <script src="js/datagrid/datatables/datatables.bundle.js"></script>
        <script src="js/datagrid/datatables/datatables.export.js"></script>
        <script src="js/miscellaneous/lightgallery/lightgallery.bundle.js"></script>
        <script>
            // default list filter
            initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
            // custom response message
            initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
            //accordion filter
            initApp.listFilter($('#js_list_accordion'), $('#js_list_accordion_filter'));
            // nested list filter
            initApp.listFilter($('#js_nested_list'), $('#js_nested_list_filter'));
            //init navigation 
            initApp.buildNavigation($('#js_nested_list'));

            $(document).ready(function()
            {

                // initialize datatable
                $('#dt-basic-example').dataTable(
                {
                    responsive: true,
                    lengthChange: false,
                    dom:
                        /*  --- Layout Structure 
                            --- Options
                            l   -   length changing input control
                            f   -   filtering input
                            t   -   The table!
                            i   -   Table information summary
                            p   -   pagination control
                            r   -   processing display element
                            B   -   buttons
                            R   -   ColReorder
                            S   -   Select

                            --- Markup
                            < and >             - div element
                            <"class" and >      - div with a class
                            <"#id" and >        - div with an ID
                            <"#id.class" and >  - div with an ID and a class

                            --- Further reading
                            https://datatables.net/reference/option/dom
                            --------------------------------------
                         */
                        "<'row mb-3'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start'f><'col-sm-12 col-md-6 d-flex align-items-center justify-content-end'lB>>" +
                        "<'row'<'col-sm-12'tr>>" +
                        "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                    buttons: [
                        /*{
                            extend:    'colvis',
                            text:      'Column Visibility',
                            titleAttr: 'Col visibility',
                            className: 'mr-sm-3'
                        },*/
                        {
                            extend: 'pdfHtml5',
                            text: 'PDF',
                            titleAttr: 'Generate PDF',
                            className: 'btn-outline-danger btn-sm mr-1'
                        },
                        {
                            extend: 'excelHtml5',
                            text: 'Excel',
                            titleAttr: 'Generate Excel',
                            className: 'btn-outline-success btn-sm mr-1'
                        },
                        {
                            extend: 'csvHtml5',
                            text: 'CSV',
                            titleAttr: 'Generate CSV',
                            className: 'btn-outline-primary btn-sm mr-1'
                        },
                        {
                            extend: 'copyHtml5',
                            text: 'Copy',
                            titleAttr: 'Copy to clipboard',
                            className: 'btn-outline-primary btn-sm mr-1'
                        },
                        {
                            extend: 'print',
                            text: 'Print',
                            titleAttr: 'Print Table',
                            className: 'btn-outline-primary btn-sm'
                        }
                    ]
                });


                var $initScope = $('#js-lightgallery');
                if ($initScope.length)
                {
                    $initScope.justifiedGallery(
                    {
                        border: -1,
                        rowHeight: 150,
                        margins: 8,
                        waitThumbnailsLoad: true,
                        randomize: false,
                    }).on('jg.complete', function()
                    {
                        $initScope.lightGallery(
                        {
                            thumbnail: true,
                            animateThumb: true,
                            showThumbByDefault: true,
                        });
                    });
                };
                $initScope.on('onAfterOpen.lg', function(event)
                {
                    $('body').addClass("overflow-hidden");
                });
                $initScope.on('onCloseAfter.lg', function(event)
                {
                    $('body').removeClass("overflow-hidden");
                });
            });

        </script>
    </body>
    <!-- END Body -->

<!-- Mirrored from www.gotbootstrap.com/themes/smartadmin/4.5.1/statistics_chartist.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Jun 2020 09:43:52 GMT -->
</html>
