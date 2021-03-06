<html>
    <head>
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous">
        <script
            src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <style>
            .navbar {
                background-color: #085bab;
            }
            .navbar .navbar-brand {
                color: #ecf0f1;
            }
            .navbar .navbar-brand:focus,
            .navbar .navbar-brand:hover {
                color: #ecdbff;
            }
            #awal {
                color:#FFFFFF;
            }
            .navbar .navbar-text {
                color: #ecf0f1;
            }
            .navbar .navbar-text a {
                color: #ecdbff;
            }
            .navbar .navbar-text a:focus,
            .navbar .navbar-text a:hover {
                color: #ecdbff;
            }
            .navbar .navbar-nav .nav-link {
                color: #ecf0f1;
                border-radius: 0.25rem;
                margin: 0 0.25em;
            }
            .navbar .navbar-nav .nav-link:not(.disabled):focus,
            .navbar .navbar-nav .nav-link:not(.disabled):hover {
                color: #ecdbff;
            }
           
            .navbar .navbar-nav .nav-item.active .nav-link,
            .navbar .navbar-nav .nav-item.active .nav-link:focus,
            .navbar .navbar-nav .nav-item.active .nav-link:hover,
            .navbar .navbar-nav .nav-item.show .nav-link,
            .navbar .navbar-nav .nav-item.show .nav-link:focus,
            .navbar .navbar-nav .nav-item.show .nav-link:hover {
                color: #ecdbff;
                background-color: #7c75e7;
            }
            
            .navbar .navbar-toggle {
                border-color: #7c75e7;
            }

            .navbar .navbar-toggle:focus,
            .navbar .navbar-toggle:hover {
                background-color: #7c75e7;
            }

            .navbar .navbar-collapse,
            .navbar .navbar-form {
                border-color: #ecf0f1;
            }

            .navbar .navbar-link {
                color: #ecf0f1;
            }

            .navbar .navbar-link:hover {
                color: #ecdbff;
            }

        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <a class="navbar-brand" id="awal" href="<?= base_url();?>After">MediStore</a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#"></a>
                    </li>
                    <li class=""></li>
                    <li class=""></li>
                </ul>
                <ul class="navbar-nav  mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url();?>Admin/">Product</a>
                    </li>
                </ul>
                <ul class="navbar-nav  mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url();?>Welcome/Admin_users/">Users</a>
                    </li>
                </ul>
                <ul class="navbar-nav  mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url();?>">Sign Out</a>
                    </li>
                </ul>
            </div>
        </nav>
    </body>
</html>