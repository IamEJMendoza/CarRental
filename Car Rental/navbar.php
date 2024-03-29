<nav class="navbar-container">
        <div class="logo-container">
            <a href="index.html">Car Rentals</a>
        </div>

        <div class="bars">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>

        <ul class="nav-items">
            <li class="nav-link"><a href="index.php/#myPage">Home</a></li>
            <div class="login-register">
                <a href="../" class="button">Log Out</a>
            </div>
        </ul>
    </nav>
    <style>
  @import url('https://fonts.googleapis.com/css2?family=Kanit:wght@600;700&family=Poppins:wght@500&display=swap');
  a {
    text-decoration: none;
}

.navbar-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 2rem;
    width: 100%;
    height: 70px;
    background: #000000;
    color: #DAFFFB;
    position: fixed;
    top: 0;
    z-index: 2;
}

.navbar-container .logo-container a {
    font-size: 1.5rem;
    font-weight: 500;
    font-family: 'Kanit', sans-serif;
    text-transform: uppercase;
    cursor: pointer;
    color: #ffffff;
}

.navbar-container .logo-container a:hover {
    opacity: 0.8;
}

.navbar-container .nav-items {
    display: flex;
    align-items: center;
    gap: 3rem;
    list-style: none;
}

.navbar-container .nav-items .nav-link a {
    color: #ffffff;
    padding: 10px;
    text-transform: uppercase;
    transition: 0.2s;
    -webkit-transition: 0.2s;
    -moz-transition: 0.2s;
    -ms-transition: 0.2s;
    -o-transition: 0.2s;
}

.navbar-container .nav-items .nav-link:after {
    content: '';
    display: block;
    border-top: 2px solid #ffffff;
    transform: scaleX(0);
    -webkit-transform: scaleX(0);
    -moz-transform: scaleX(0);
    -ms-transform: scaleX(0);
    -o-transform: scaleX(0);
    transition: transform 250ms ease-in-out;
    -webkit-transition: transform 250ms ease-in-out;
    -moz-transition: transform 250ms ease-in-out;
    -ms-transition: transform 250ms ease-in-out;
    -o-transition: transform 250ms ease-in-out;
}

.navbar-container .nav-items .nav-link:hover:after {
    transform: scaleX(0.8);
    -webkit-transform: scaleX(0.8);
    -moz-transform: scaleX(0.8);
    -ms-transform: scaleX(0.8);
    -o-transform: scaleX(0.8);
}

.navbar-container .nav-items .login-register {
    display: flex;
    flex-direction: row;
    gap: 1rem;
}

.navbar-container .nav-items .login-register .button {
    color: #ffffff;
    border: 2px solid #ffffff;
    padding: 5px 20px;
    text-transform: uppercase;
    border-radius: 3px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    -ms-border-radius: 3px;
    -o-border-radius: 3px;
    transition: all ease-in 0.3s;
    -webkit-transition: all ease-in 0.3s;
    -moz-transition: all ease-in 0.3s;
    -ms-transition: all ease-in 0.3s;
    -o-transition: all ease-in 0.3s;
}

.navbar-container .nav-items .login-register .button:hover {
    background: #ffffff;
    color: #000000;
}

@media(max-width: 1000px) {
    .navbar-container {
        padding: 0 1rem;
    }

    .navbar-container .nav-items {
        gap: 0.1rem;
    }

    .navbar-container .nav-items .nav-link a,
    .navbar-container .nav-items .login-register .button {
        font-size: 0.9rem;
    }
}

@media(max-width: 700px) {
    .navbar-container .nav-items {
        flex-direction: column;
        position: fixed;
        top: 70px;
        right: -100%;
        width: 100vw;
        height: 100vh;
        padding: 1rem 0;
        z-index: 99;
        background: #2590B5;
        transition: 0.2s ease-in;
        -webkit-transition: 0.2s ease-in;
        -moz-transition: 0.2s ease-in;
        -ms-transition: 0.2s ease-in;
        -o-transition: 0.2s ease-in;
    }

    .bars {
        width: 22px;
        height: auto;
        cursor: pointer;
    }

    .bars .bar {
        width: 100%;
        height: 2px;
        background: #DAFFFB;
        margin: 5px;
    }

    .navbar-container .nav-items {
        gap: 3rem;
    }

    .navbar-container .nav-items .login-register {
        width: 50%;
        text-align: center;
        flex-direction: column;
        gap: 2rem;
    }

    .navbar-container .nav-items .login-register .button {
        padding: 1rem 0;
    }

    .main {
        font-size: 2rem;
    }
}

.navbar-container .nav-items.active {
    right: 0;
}
</style>
