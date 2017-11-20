
<!DOCTYPE html>
<html>



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Panel administracyjny</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="/GeosCMS/web/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="/GeosCMS/web/css/AdminLTE.min.css">
    <link rel="stylesheet" href="/GeosCMS/web/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="/GeosCMS/web/plugins/iCheck/all.css">
    <link rel="stylesheet" href="/GeosCMS/web/plugins/morris/morris.css">
    <link rel="stylesheet" href="/GeosCMS/web/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <link rel="stylesheet" href="/GeosCMS/web/plugins/datepicker/datepicker3.css">
    <link rel="stylesheet" href="/GeosCMS/web/plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="/GeosCMS/web/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link rel="stylesheet" href="/GeosCMS/web/css/admin.css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/576BA750-B991-C44C-8C37-D0E7EEF30A4B/main.js" charset="UTF-8"></script></head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="modal fade bs-example-modal-lg commonModal" tabindex="-1" role="dialog" aria-labelledby="commonModal">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-header">

        </div>
        <div class="modal-errors">

        </div>
        <div class="modal-content">

        </div>
        <div class="modal-waiter">
            <i class="fa fa-spinner fa-spin" style="font-size:24px"></i> <br/>
            <span>Ładowanie danych...</span>
        </div>
        <div class="modal-footer">

        </div>
    </div>
</div>
<!-- ./wrapper -->

<script src="/GeosCMS/web/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="/GeosCMS/web/bootstrap/js/bootstrap.min.js"></script>

<script src="/GeosCMS/web/plugins/daterangepicker/moment.min.js"></script>
<script src="/GeosCMS/web/plugins/daterangepicker/daterangepicker.js"></script>
<script src="/GeosCMS/web/plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="/GeosCMS/web/plugins/bootstrap-validator/bootstrap-validator.js"></script>
<script src="/GeosCMS/web/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script src="/GeosCMS/web/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="/GeosCMS/web/plugins/fastclick/fastclick.js"></script>
<script src="/GeosCMS/web/plugins/iCheck/icheck.min.js"></script>
<script src="/GeosCMS/web/js/app.min.js"></script>
<script src="/GeosCMS/web/js/admin/scripts.js"></script>
<script src="/GeosCMS/web/js/admin/ajaxEditor.js"></script>
<script src="/GeosCMS/web/js/admin/mediaLibrary.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        if ($(".fileUploadInput").length > 0) {
            $(".fileUploadInput").mediaLibrary({
                uploadUrl: "/GeosCMS/web/_uploader/gallery/upload",
                actionUrl: "/GeosCMS/web/encanteur/media_library_ajax",
                csrfToken: "CAmGjabnoXtZ-1EMeT4loWpkCYlxqCta31-Xdbe-G20"
            });
        }
    });
</script>
</body>
</html>
