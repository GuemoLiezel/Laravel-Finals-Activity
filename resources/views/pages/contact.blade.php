@extends ('layouts.default')

@section('content')

    <html>

<head>

<title> Liezel Guemo </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

 <!-- Styles -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
<link href="https://fonts.googleapis.com/css2?family=Fascinate&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@1,300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Teko&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Mali:wght@300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet">

<!-- Script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<style media="screen">
*{
margin: 0;
padding: 0;
}

html {
scroll-behavior:smooth;
font-family:tahoma;
}

ul {
list-style:none;
height:100%;
width:110px;
position:fixed;
top: 0; left: 5px;
background:crimson;
box-shadow: 2px 0px 5px  black;
}

ul li {
margin: 5px;
padding: 15px;
margin-top: 75px;
}

ul li a{
color:white;
text-decoration: none;
font-size:20px;
padding: 5px;
}

ul li a:hover{
background:white;
color:black;
}

section{
height: 100vh;
width: 90vw;
display: flex;
align-items: center;
justify-content:center;
}


#section1{
background:linear-gradient(-45deg, white 30%, #a35149);
}

#section2{
background:linear-gradient(-45deg, white 30%, #b0804f);
}

#section3{
background:linear-gradient(-45deg, white 30%, #a19348);
}

#section4{
background:linear-gradient(-45deg, white 30%, #3b8a73);
}

#section5{
background:linear-gradient(-45deg, white 30%, #3c688f);
}


.header {
margin: 0 auto;
width: 100%;
text-align: center;
background: #1abc9c;
color: white;
align-self: center;
overflow: hidden;
padding-top: 280px;
padding-bottom: 280px;
}

.CS202{
font-family: 'Fascinate', cursive;
font-size: 45px;
text-align:center;
margin-left: 10%;

}

.CS{
font-family: 'Ubuntu', sans-serif;
font-size: 20px;
text-align:center;
}

.title{
font-family: 'Teko', sans-serif;
font-size: 70px;
}


.title1{
font-family: 'Satisfy', cursive;
font-size: 30px;
}

.laravel{
font-family: 'Chakra Petch', sans-serif;
font-size: 45px;
text-align: center;
}

.laravel1{
font-family: 'Courgette', cursive;
font-size: 25px;
text-align:center;
}

.about{
font-family: 'Montserrat Alternates', sans-serif;
font-size:45px;
}

.about1{
font-family: 'Mali', cursive;
font-size:20px;

}

.contact{
font-family: 'Special Elite', cursive;
font-size:30px;
text-align: center;
}



</style>
</head>

<body>

<div class="content" style="display:none">
    <section id="section1">
         <h1 class="title">My Laravel Personal Web Page<span>
         <p style="text-align:center" class="title1">By Liezel Guemo<br></span></h1></p>
    </section>
</div>
    
<div class="content" style="display:none">
    <section id="section2">
        <h2 class="CS202">Asynchronous and Synchronous Data Transmission <br><br><p class="CS"> Asynchronous Transmission is also known as start/stop transmission, sends data from
the sender to the receiver using the flow control method. <br> It does not use a clock to synchronize data between the source and destination. <br> In asynchronous transmission, data moves in a half-paired approach, 1 byte or 1
character at a time. It sends the data in a constant current of bytes. <br>The size of a character transmitted is 8 bits, with a parity bit added both at the beginning and at the 
end, making it a total of 10 bits. <br>It doesn’t need a clock for integration—rather, it utilizes the parity bits to tell the receiver how to translate the data. <br> It is straightforward, quick, cost-effective, and doesn’t need 2-way communication to
function. <br><br> Asynchronous Transmission Examples: Emails, Forums, Letters, Radios, Televisions<br><br> <br>Synchronous data transmission is a data transfer method in which is a continuous stream of data signals accompanied by timing signals.<br> It helps to ensure that the transmitter and
the receiver are synchronized with each other. Synchronous transmission is effective, dependable, <br>and often utilised for transmitting a large amount of data. It offers real-time communication between linked devices.<br><br>
The following are Examples of Synchronous Transmission: Chatrooms, Video conferencing, Telephonic conversations, Face-to-face interactions</h2>
    </section>
</div>
    
<div class="content" style="display:none">
    <section id="section3">
        <h2 class="laravel"> LARAVEL: CONTROLLERS & ROUTING <br> <br><p class="laravel1"> Laravel Breeze is a minimal, simple implementation of all of Laravel's authentication <br>
features, including login, registration, password reset, email verification, and password confirmation.<br>The most basic router in Laravel accepts a URL and then returns a value.<br> The value could be a string, a view or a controller. <br><br>
        All the routes are stored in routes/web.php<br><br>A controller is a place where you organize the behaviors of your app. It can
return a <br>VIEW or an ACTUAL STRING. <br><br>Single action controllers are useful when we only need one method in the
controller class.<br>It no longer need to specify the method.</h2></p>
    </section>
</div>
    
<div class="content" style="display:none">
    <section id="section4">
        <h2 class="about"><b>About Me <br><br> <p class="about1"> Hi! I am Liezel Guemo, you can call me zel or sel. 21 years old. 
            <br>I live at barangay Santolan Pasig City and currently a 3rd year college student taking a <br>Bachelor of Science in Computer Science at Pamantasan ng Lungsod ng Pasig. 
        <br><br> 6 years from now, I see myself doing the things that I loved and surely doing my best. <br>To be exact, doing the things that would help my family and give them everything they want and needs.</h2></p></b>
    </section>
</div>
    
<div class="content">
    <section id="section5">
        <h2 class="contact">You Can Contact Me <br><br> <i class="bi bi-facebook"> Facebook: https://www.facebook.com/liezel.guemo <br> <i class="bi bi-instagram"> Instagram: @_lilisel <br> <i class="bi bi-messenger"> Messenger: Liezel Guemo</i></i></i></h2>
    </section>
</div>

</body>
</html> 


@stop
