<?php ob_start(); ?>
<?php include "./include/connect.php";?>
<?php include "../function.php";?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,starter template,free template,admin templates, admin template, admin dashboard, free tailwind templates, tailwind example">
    <!-- Css -->
    <link rel="stylesheet" href="./dist/styles.css">
    <link rel="stylesheet" href="./dist/all.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700,700i" rel="stylesheet">
    <title>Dashboard | Tailwind Admin</title>
</head>

<body>
<!--Container -->
<div class="mx-auto bg-grey-400">
    <!--Screen-->
    <div class="min-h-screen flex flex-col">
        <!--Header Section Starts Here-->
        <header class="bg-nav">
            <div class="flex justify-between">
                <div class="p-1 mx-3 inline-flex items-center">
                    <i class="fas fa-bars pr-2 text-white" onclick="sidebarToggle()"></i>
                    <h1 class="text-white p-2">Logo</h1>
                </div>
                <div class="p-1 flex flex-row items-center">
                    <a href="https://github.com/tailwindadmin/admin" class="text-white p-2 mr-2 no-underline hidden md:block lg:block">Github</a>


                    <img onclick="profileToggle()" class="inline-block h-8 w-8 rounded-full" src="https://avatars0.githubusercontent.com/u/4323180?s=460&v=4" alt="">
                    <a href="#" onclick="profileToggle()" class="text-white p-2 no-underline hidden md:block lg:block"><?php echo $_SESSION['user'];?></a>
                    <div id="ProfileDropDown" class="rounded hidden shadow-md bg-white absolute pin-t mt-12 mr-1 pin-r">
                        <ul class="list-reset">
                          <li><a href="#" class="no-underline px-4 py-2 block text-black hover:bg-grey-light">My account</a></li>
                          <li><a href="#" class="no-underline px-4 py-2 block text-black hover:bg-grey-light">Notifications</a></li>
                          <li><hr class="border-t mx-2 border-grey-ligght"></li>
                          <li><a href="#" class="no-underline px-4 py-2 block text-black hover:bg-grey-light">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!--/Header--> <div class="flex flex-1">
            <!--Sidebar-->
            <aside id="sidebar" class="bg-side-nav w-1/2 md:w-1/6 lg:w-1/6 border-r border-side-nav hidden md:block lg:block">

<ul class="list-reset flex flex-col">
    <li class=" w-full h-full py-3 px-2 border-b border-light-border bg-white">
        <a href="index.php"
           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
            <i class="fas fa-tachometer-alt float-left mx-2"></i>
            Dashboard
            <span><i class="fas fa-angle-right float-right"></i></span>
        </a>
    </li>
    <li class="w-full h-full py-3 px-2 border-b border-light-border">
        <a href="forms.php"
           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
            <i class="fab fa-wpforms float-left mx-2"></i>
            Forms
            <span><i class="fa fa-angle-right float-right"></i></span>
        </a>
    </li>
    <li class="w-full h-full py-3 px-2 border-b border-light-border">
        <a href="buttons.php"
           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
            <i class="fas fa-grip-horizontal float-left mx-2"></i>
            Buttons
            <span><i class="fa fa-angle-right float-right"></i></span>
        </a>
    </li>
    <li class="w-full h-full py-3 px-2 border-b border-light-border">
        <a href="tables.php"
           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
            <i class="fas fa-table float-left mx-2"></i>
            Tables
            <span><i class="fa fa-angle-right float-right"></i></span>
        </a>
    </li>
    <li class="w-full h-full py-3 px-2 border-b border-light-border">
        <a href="ui.php"
           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
            <i class="fab fa-uikit float-left mx-2"></i>
            Ui components
            <span><i class="fa fa-angle-right float-right"></i></span>
        </a>
    </li>
    <li class="w-full h-full py-3 px-2 border-b border-300-border">
        <a href="modals.html" class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
            <i class="fas fa-square-full float-left mx-2"></i>
            Modals
            <span><i class="fa fa-angle-right float-right"></i></span>
        </a>
    </li>
    <li class="w-full h-full py-3 px-2 border-b border-300-border">
        <a href="./logout.php" class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
            <i class="fas fa-square-full float-left mx-2"></i>
            Logout
            <span><i class="fa fa-angle-right float-right"></i></span>
        </a>
    </li>
    <li class="w-full h-full py-3 px-2">
        <a href="#"
           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
            <i class="far fa-file float-left mx-2"></i>
            Pages
            <span><i class="fa fa-angle-down float-right"></i></span>
        </a>
        <ul class="list-reset -mx-2 bg-white-medium-dark">
            <li class="border-t border-light-border w-full h-full px-2 py-3">
                <a href="404.html"
                   class="mx-4 font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                    404 Page
                    <span><i class="fa fa-angle-right float-right"></i></span>
                </a>
            </li>
        </ul>
    </li>
</ul>
</aside>
<!--/Sidebar-->
