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


                <!-- Header file ends here -->

                <div class="main-wrap">
                    <section class="expanse-heading mb-65">
                        <h1 class="headline text-center">Your Expenses</h1>
                        <h5 class="description text-center">Here you can see your daily expenses</h5>
                    </section>
                    <section class="form text-center mb-65">
                        <form action="/expanse" method="GET">
                            <input type="datetime-local" name="from-date" id="from-date">
                            <input type="datetime-local" name="to-date" id="to-date">
                            <input type="submit" value="Search">
                        </form>
                    </section>
                    <section class="data-table">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Reason</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mobile bil</td>
                                    <td>56</td>
                                    <td>11:24pm</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Internet Bil</td>
                                    <td>1599</td>
                                    <td>11:34pm</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Icecream</td>
                                    <td>700</td>
                                    <td>11:50pm</td>
                                </tr>
                            </tbody>
                        </table>
                    </section>
                </div>
                
                <footer>
                    <section class="footer-top">
                        <div class="row">
                            <div class="col-4">
                                <h1>Account Manager</h1>
                                <p class="description">A complete app for your personal account managment.</p>
                            </div>
                            <div class="col-4"><span class="text-center">Menu 1</span></div>
                            <div class="col-4"><span class="text-center">Menu 2</span></div>
                        </div>
                    </section>
                    <section class="footer-bottom">
                        <div class="row">
                            <div class="col-6">
                                <div class="copyright">Copyright reserved by mkhossain.com</div>
                            </div>
                            <div class="col-6">
                                <div class="spetial-thanks text-right">Build with laravel and bootstrap</div>
                            </div>
                        </div>
                    </section>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
        <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('js/main.js')}}"></script>
    </body>
</html>
