<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">

<style>
    html{
        scroll-behavior: smooth;
    }
    body{
        overflow-x: hidden;
    }
    *{
        margin: 0;
        padding: 0;
    }
    /*--------Navigation bar -----*/
    .navigation{
        position: fixed;
        top: 0;
        z-index: 10;
        transition: top .6s;
        width: 100%;
        background-color: rgba(64,115,225,0.8);
    }
    .navbar{
        background: transparent;
        display: flex;
        justify-content: space-between;
        align-content: center;
        margin: auto;
        width: 80%;
    }
    .navbar-brand img{
        height: 50px;
        width: auto;
        margin: 5px;
        padding-left: 30px;
    }
    .nav-Links{
        flex: 1;
        text-align: right;
    }
    .nav-Links ul li{
        list-style: none;
        display: inline-block;
        padding: 12px 12px 0px;
        position: relative;
    }
    .nav-links ul li::after{
        content: '';
        width: 0%;
        height: 2px;
        background: #fff;
        display: block;
        margin: auto;
        transition: 0.5s;
    }
    .nav-links ul li:hover::after{
        width: 100%;
    }
    .nav-link{
        color: #fff!important;
        font-weight: 600;
        font-size: 16px;
    }
    .navigation.animate{
        top: -86px;
    }
    .navigation.sticky{
        top: 0;
        z-index: 99;
    }
    /*-------Main text-box (quote) ------*/
    .header {
        min-height: 100vh;
        width: 100%;
        background-color: #fff;
        background-position: center;
        background-size: cover;
        position: relative;
    }
    .header-layer2{
        width: auto;
        padding-top: 70px;
        height: 842px;
        background-color: #4073FF;
        border-bottom-left-radius: 232px;
    }
    .text-col{
        height: 80vh;
        display: flex;
        justify-content: space-between;
    }
    .text-box{
        width: 50%;
        margin: auto;
        color: #fff;
        text-align: center;
    }
    .text-image{
        width: 50%;
        padding-top: 40px;
        opacity: 0;
        animation: fadeLeft .5s forwards;
    }
    .text-box h1{
        font-size: 62px;
        opacity: 0;
        animation: fadeUp .5s forwards;
    }
    .text-box p{
        position: relative;
        margin: 10px 0px 40px;
        font-size: 25px;
        color: #fff;
        opacity: 0;
        animation: scales .5s forwards;
        animation-delay: .2s;
    }
    .btn{
        display: inline-block;
        min-width: 253px;
        text-decoration: none;
        color: #fff;
        border: 1px solid #000;
        padding: 12px 34px;
        font-size: 13px;
        background: #000;
        position: relative;
        cursor: pointer;
        opacity: 0;
        animation: fadeDown .5s forwards;
        animation-delay: .6s;
    }
    .btn:hover{
        color: #007bff;
        transition: 0.5s;
    }
    .btn-caption, .btn-label{
        display: block;
        text-align: center;
        line-height: 1;
    }
    .btn-caption{
        font-size: 24px;
    }
    @media(max-width: 700px){
        .text-box h1{
            font-size: 25px;
        }
        .text-box p{
        margin: 10px 0px 40px;
        font-size: 15px;
        color: #fff;
        }
        .btn{
            margin-top: 5px;
        }
    }
    
    /*-------About Us------*/
    .about-us{
        min-height: 20vh;
        width: 100%;
        margin: auto;
        text-align: center;
        box-sizing: border-box;
    }
    .about-us h1{
        color: #000;
        font-size: 60px;
    }
    .about-us p{
        margin-top: 15px;
        color: #000;
        font-size: 30px;
    }
    .white-box{
        width: 100%;
        min-height: 20vh;
    }
    
    /*-------Services------*/
    .services{
        min-height: 50vh;
        width: 100%;
        margin: auto;
        text-align: center;
        padding: 50px 200px 0 200px;
        background-color: #fff;
    }
    .services h1{
        font-size: 60px;
        font-weight: 600;
    }
    .services p{
        text-align: center;
        font-size: 19px;
    }
    .services h3{
        font-size: 30px;
        font-weight: bold;
    }
/*
    .services h1::after{
        content: '';
        display: block;
        background: #007bff;
        height: 3px;
        width: 170px;
        margin:20px auto 5px;
    }
*/
    .service-container{
        display: flex;
        height: auto;
        justify-content: space-between;
    }
    .service-col{
        flex: 1;
        display: flex;
        flex-direction: column;
        height: auto;
    }
    .service-row{
        flex-basis: 25%;
    }
    .card{
        width:27.3rem;
        margin-top: 25%;
        float: center;
        min-height: 15.5rem;
        text-align: center;
        background: #fff3f3;
        border-radius: 44px;
        box-sizing: border-box;
        box-shadow: 10px 10px 10px rgba(0,0,0,0.2);
        transition: 0.5s;
    }
    .card:hover{
        box-shadow: 0 0 20px 0px rgba(0,0,0,0.5);
    }
    
    .icon{
        font-size: 40px;
        margin: 20px auto;
        padding: 20px;
        height: 80px;
        width: 80px;
        border: 1px solid #000;
        border-radius: 50%;
    }
/*
    
    .row{
        margin-top: 3%;
        display: flex;
        height: 500px;
        justify-content: space-between;
    }
    .course-col{
        flex-basis: 23%;
        background: #fff3f3;
        border-radius: 10px;
        margin-bottom: 5%;
        padding: 50px;
        box-sizing: border-box;
        box-shadow: 0 0 20px 0px rgba(0,0,0,0.2);
        transition: 0.5s;
    }
    .course-col:hover{
        box-shadow: 0 0 20px 0px rgba(0,0,0,0.5);
    }
*/

    /*-------Steps------*/
    .steps h1{
        font-size: 60px;
    }
    .steps p{
        font-size: 17px;
    }
    .steps h2{
        font-size: 30px;
        font-weight: bold;
    }
    .steps{
        min-height: 100vh;
        width: 100%;
        text-align: center;
        padding: 0 50px;
    }
    .steps-grids{
        margin-top: 3%;
        display: flex;
        padding: 0px 100px 0px 100px;
        height: auto;
        justify-content: space-between;
    }
    .steps-col{
        flex: 1;
        margin-bottom: 5%;
    }
    .steps-container{
        padding: 0 60px;
    }
    .steps-row{
        margin-top: 7%;
        border-radius: 20px;
        display: flex;
        justify-content: space-between;
        background-color: #fff;
        align-items: center;
    }
    .steps-text{
        flex-basis: 70%;
        padding: 3%;
        text-align: left;
    }
    
    /*-------Vision & Mission------*/
    .goals h1{
        font-size: 50;
        text-shadow: 5px 5px 3px rgba(0,0,0,0.2);
        display: inline;
    }
    .goals h2{
        font-size: 50;
        color: #4073FF;
        text-shadow: 5px 5px 3px rgba(0,0,0,0.2);
        display: inline;
    }
    .goals p{
        font-size: 30;
    }
    .goals{
        min-height: 70vh;
        width: 100%;
        padding: 0px 400px;
        text-align: center;
        display: flex;
    }
    .goals-col{
        flex: 1;
        margin-bottom: 5%;
        font-size: 30px;
    }
    .goals-container{
        min-height: 60vh;
        margin-top: 30%;
        display: flex;
        background-color: white;
        flex-direction: column;
        padding: 20px;
        border: 1px solid;
        border-radius: 20px;
        box-sizing: border-box;
        box-shadow: 20px 20px 10px rgba(0,0,0,0.4);
    }
    .goals-row{
        margin-top: 5%;
        flex-basis: 30%;
        text-align: left;
        height: 200px;
    }
    .goals img{ 
        opacity: 0.9;
        width: 95%;
        border-radius: 0.2em;
    }
    /*-------contact and footer------*/
    .contact h1{
        font-size: 30px;
        color: #fff;
        margin-bottom: 5%;
    }
    .contact h3{
        font-size: 20px;
        text-decoration: underline;
        color: black;
    }
    .contact h4{
        margin-top: 3%;
        font-size: 30px;
        font-weight: bold;
        color: #fff;
    }
    .contact{
        margin-bottom: 10px;
        margin-top: 50px;
        align-items: left;
        padding-bottom: 200px;
        background-color: #4073FF;
    }
    .back-to-top{
        width: 7rem;
        height: 7rem;
        position: absolute;
        background-color: #4073FF;
        top: -3rem;
        left: 50%;
        transform: translateX(-50%);
        border-radius: 50%;
    }
    .back-to-top i{
        color: #fff;
        font-size: 2.1rem;
        padding: 1rem 2.5rem;
    }
    .footer-logo{
        margin-top: 3%;
        padding-left: 350px;
    }
    .contact-container{
        margin-top: 2%;
        display: flex;
        flex-direction: row;
        text-align: center;
        justify-content: center;
    }
    .contact-col{
        flex-basis: 25%;
    }
    .icon-row{
        margin-top: 3%;
        display: flex;
        justify-content: center;
    }
    .icon-col{
        text-align: center;
    }
    .icon1 i{
        font-size: 40px;
        color: #fff;
    }
    .icon1 i:hover{
        color: #dddd;
    }
    .icon1 li{
        font-size: 20px;
        margin: 20px auto;
        padding: 20px;
        height: 80px;
        width: 80px;
        border: 1px solid #fff;
        border-radius: 50%;
    }
    
    .lang-menu {
        width: 100px;
        margin-top: 25px;
        position: relative;
        text-align: right;
        font-weight: bold;
    }
    .lang-menu .selected-lang {
        display: flex;   
        line-height: 2;
        cursor: pointer;
    }
    .name-lang{
        margin-left: 10px;
    }
    .menu-image{
        content: '';
        display: inline-block;
        width: 32px;
        height: 32px;
    }

    .lang-menu ul {
        margin: 0;
        padding: 0;
        display: none;
        background-color: #fff;
        border: 1px solid #f8f8f8;
        position: absolute;
        right: 0px;
        width: 140px;
        border-radius: 5px;
        box-shadow: 0px 1px 10px rgba(0,0,0,0.2);
    }
    
    .lang-menu ul li {
        list-style: none;
        text-align: left;
        display: flex;
        justify-content: space-between;
    }

    .lang-menu ul li a {
        text-decoration: none;
        width: 140px;
        padding: 5px 10px;
        display: block;
    }

    .lang-menu ul li:hover {
        background-color: #f2f2f2;
    }

    .lang-menu ul li a:before {
        content: '';
        display: inline-block;
        width: 25px;
        height: 25px;
        vertical-align: right;
        margin-right: 10px;
        background-size: contain;
        background-repeat: no-repeat;
    }

    .id:before {
        background-image: url(https://www.countryflags.io/id/flat/32.png);
    }

    .en:before {
        background-image: url(https://www.countryflags.io/us/flat/32.png);
    }


    .lang-menu:hover ul {
        display: block;
    }
    /*-------Animations------*/
    @keyframes fadeUp{
        0%{
            transform: translateY(10rem);
        }
        100%{
            opacity: 1;
            transform: translateY(0);
        }
    }
    @keyframes scales{
        0%{
            transform: scale(2);
        }
        100%{
            opacity: 1;
            transform: scale(1);
        }
    }
    @keyframes grow{
        0%{
            width: 0;
        }
        100%{
            opacity: 1;
            width: 100%;
        }
    }
    @keyframes fadeDown{
        0%{
            transform: translateY(-1rem);
        }
        100%{
            opacity: 1;
            transform: translateY(0);
        }
    }
    @keyframes fadeLeft{
        0%{
            transform: translateX(20rem);
        }
        100%{
            opacity: 1;
            transform: translateX(0);
        }
    }
</style>