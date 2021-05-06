<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="content-language" content="en" />
    <meta name="description" content="ICT Cortex Library - project for high school students..." />
    <meta name="keywords" content="ict cortex, cortex, bild, bildstudio, highschool, students, coding" />
    <meta name="author" content="bildstudio" />
    <!-- End Meta -->

    <!-- Title -->
    <title>Library - ICT Cortex student project</title>
    <link rel="shortcut icon" href="img/library-favicon.ico" type="image/vnd.microsoft.icon" />
    <link rel="stylesheet" href="{{asset('css/app1.css')}}">
</head>
    <body class="overflow-hidden small:bg-gradient-to-r small:from-green-400 small:to-blue-500">

    <!-- Header -->
    <?php require(APPROOT.'/resources/views/includes/header.php'); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <!-- Header -->


    <main class="flex flex-row small:hidden">
        <!-- Sidebar -->
        <?php include(APPROOT.'/resources/views/includes/sidebar.php'); ?>
        <!-- End Sidebar -->

    @yield('content')

    </main>
    <!-- End Main content -->

    <!-- Notification for small devices -->
    <?php require(APPROOT.'/resources/views/includes/inProgress.php'); ?>


    <!-- Scripts -->
    <?php require(APPROOT.'/resources/views/includes/scripts.php'); ?>
    <!-- End Scripts -->

</body>
</html>