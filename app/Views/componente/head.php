    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css'); ?>">
    <script src="<?php echo base_url('js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('js/popper.min.js'); ?>"></script>
    <script src="<?php echo base_url('js/bootstrap.min.js'); ?>"></script>
    <link rel="stylesheet" href="<?php echo base_url('css/style.css'); ?>" media="screen" />

    <?php

    use function App\Filters\requestUri;

    if (requestUri() != '/') { ?>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/datatables.min.css'); ?>" />
        <script src="<?php echo base_url('js/datatables.min.js'); ?>"></script>
        <script src="<?php echo base_url('js/datatables_lenguages.js'); ?>"></script>

        <link rel="stylesheet" href="<?php echo base_url('css/alertify.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('css/alertify.default.min.css'); ?>">
        <script src="<?php echo base_url('js/alertify.min.js'); ?>"></script>
    <?php } ?>

    <script>
        function baseUrl(uri = '/') {
            var url = "<?php echo base_url(); ?>";
            if (uri.substring(0, 1) != '/') uri = '/' + uri;
            if (uri != '/' && uri.substring(uri.length - 1, uri.length) != '/') uri = uri + '/';
            return url + uri;
        }
    </script>
    