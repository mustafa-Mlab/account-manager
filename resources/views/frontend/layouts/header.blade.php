<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Expanses</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Bootstrap core CSS -->
        <link href = "{{ asset('bootstrap/css/bootstrap.css') }}" rel="stylesheet" />
        <!-- Custom CSS -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>
    <body class="page expanse template-expanse en-site">
        <div class="container-fluid ">
            <div class="content">
                <header>
                    <div class="logo-wrapper">
                        <div class="text-logo">ACCOUNT MANAGER</div>
                    </div>
                    <ul class="main-menu">
                        <li class="menu-item parent-item active">
                            <a href="/expanse" class="menu-link">Expanses</a>
                            <ul class="sub-menu">
                                <li class="sub-menu-item">
                                    <a href="#" class="menu-link sub-menu">Total expanses</a>
                                </li>
                                <li class="sub-menu-item">
                                    <a href="#" class="menu-link sub-menu">Common expanses</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item parent-item">
                            <a href="/income" class="menu-link">Income</a>
                            <ul class="sub-menu">
                                <li class="sub-menu-item">
                                    <a href="#" class="menu-link sub-menu">Total income</a>
                                </li>
                                <li class="sub-menu-item">
                                    <a href="#" class="menu-link sub-menu">Common income</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </header>
            </div>
        </div>