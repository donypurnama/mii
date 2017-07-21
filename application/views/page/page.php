<!DOCTYPE html>
<!-- designed and created by jean rijkaard | jeanrijkaard@gmail.com -->
<html class="no-js" lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="application-name" content="{application_name}">
    <meta name="author" content="{author}">
    <meta name="description" content="{description}">
    <meta name="generator" content="{generator}">
    <meta name="keywords" content="{keywords}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#E51937">
    {meta_facebook} {meta_twitter} {google_analytics}

    <title>{title}</title>

    <base href="{base_url}">
    <link href="assets/css/vendor.css" rel="stylesheet">
    <link href="assets/css/app-seagreen.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/datatables/media/css/dataTables.bootstrap4.min.css"/>
    <link href="custom/css/global.css" rel="stylesheet">
    <link href="custom/css/main.css" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="48x48" href="favicon.png">
    {link}
</head>
<body>
    <div class="main-wrapper">
      <div class="app" id="app">
      {header}
      {aside}
      <article class="content" style="background:url(bg-layer.png) no-repeat center;">
        {main}
      </article>
      {footer}
      {modal}
      </div>
    </div>
    {script}
    {error}
    <script src="assets/js/vendor.js"></script>
    <script src="assets/js/app.js"></script>
    <script type="text/javascript" src="assets/datatables/media/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="assets/datatables/media/js/dataTables.bootstrap4.min.js"></script>
    <script src="custom/js/main.js"></script>
</body>
</html>
