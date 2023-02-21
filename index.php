<?php require_once 'configuration/configuration.php'; ?>
<!DOCTYPE html>
<html lang="en">
<?php include "template/heads.php";  ?>

<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed" style="background: white;" cz-shortcut-listen="true">
    <?php include "template/header-server.php"; ?>
    <div id="kt_header_mobile" class="kt-header-mobile kt-header-mobile--fixed" style="background-color:#ffffff;">
        <div class="kt-header-mobile__logo">
            <a href="https://ledgers.cloud">
                <img alt="Logo" src="https://ledgers.indiafilings.com/logo.png" style="height:70px;">
            </a>
        </div>
        <div class="kt-header-mobile__toolbar">
            <button class="kt-header-mobile__topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more" style="color:blue"></i></button>
        </div>
    </div>
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content" style="background-color:#f2f3f8">
        <div class="kt-container   kt-container-fluid  kt-grid__item kt-grid__item--fluid">
            <div class="rules-content row">
                <div class="col-lg-3 dssticy sticky_e" data-sticky-container="">
                    <?php include "template/left-menu-server.php" ?>
                </div>
                <div class="col-lg-9">
                    <?php //include "template/V8_Empty_page.php"; ?>
                    <?php //include "pages/dashboard.php"; ?>
                    <?php include "pages/router.php"; ?>
                </div>
            </div>
        </div>
    </div>
    <?php include "template/footer-server.php"; ?>
    <div id="kt_scrolltop" class="kt-scrolltop">
        <i class="fa fa-arrow-up"></i>
    </div>
    <ul class="kt-sticky-toolbar dsticky" style="margin-bottom: 100px;">
        <li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--success" id="kt_demo_panel_toggle" data-toggle="kt-tooltip" data-placement="right">
            <a href="#"><i class="flaticon2-fast-back"></i></a>
        </li>
    </ul>
    <div id="kt_demo_panel" class="kt-demo-panel kt-demo-panel--off" style="opacity: 1;">
        <div class="kt-demo-panel__head" kt-hidden-height="49">
            <a href="#" class="kt-demo-panel__close" id="kt_demo_panel_close"><i class="flaticon2-delete"></i></a>
        </div>
        <?php //echo $vav=menudata($session_names,$mail_address_sent,$client_phone_no,$credit_status);
        ?>
    </div>
    <?php include "template/global-script.php"; ?>
    <script>
        /* $(document).on('click', '.form_section', function() {
            var section_name = $(this).attr("data-section-name");
            $(".form_section").removeClass("kt-widget__item--active");
            $(this).addClass("kt-widget__item--active");

            let CurrentDate = Date();
            section = {
                'section_name': section_name,
                'user_id': 1
            }

            $.ajax({
                url: 'ajax/form.php',
                type: 'post',
                data: {
                    section_details: section
                },
                dataType: "json",
                success: function(response) {

                    $(".form_content").html(response.form_content);

                    KTCreateAccount.init();
                    KTLayoutToolbar.init();
                }
            });
        }); */
    </script>
</body>

</html>