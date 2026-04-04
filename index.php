<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <?php require 'utils/styles.php';?>
    
            </head>
    <body><a href="user_login.php" style="text-decoration: none; font-size: 18px; padding: 10px; display: inline-block; background:rgb(245, 248, 251); color: black; border-radius: 5px; margin: 10px;">
  Home
</a>
        <div class = "content"><!--body content holder-->
            <div class = "container">
                <div class = "col-md-12"><!--body content title holder with 12 grid columns-->
                    <h1 style="color:#000080 ; font-size:42px ; font-style:bold "><strong>  Register your Favourite events:</strong></h1><!--body content title-->
            </div>
            
            
            <style>
    .event-card {
        position: relative;
        overflow: hidden;
        border-radius: 10px;
        margin-bottom: 30px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    }

    .event-card img {
        width: 100%;
        height: 250px;
        object-fit: cover;
        border-radius: 10px;
        transition: transform 0.4s;
    }

    .event-card:hover img {
        transform: scale(1.05);
    }

    .event-info {
        position: absolute;
        bottom: 0;
        background: rgba(0, 0, 0, 0.7);
        color: white;
        width: 100%;
        padding: 15px;
        opacity: 0;
        transition: opacity 0.4s;
    }

    .event-card:hover .event-info {
        opacity: 1;
    }

    .event-title {
        font-weight: bold;
        font-size: 20px;
        color: #003300;
        margin-top: 10px;
    }

    .view-button {
        margin-top: 5px;
    }
</style>

<div class="container">
    <div class="row">
        <!-- Technical Events -->
        <div class="col-md-6">
            <div class="event-card">
                <img src="images/technical.jpg" alt="Technical Event">
                <div class="event-info">
                    EMBRACE YOUR TECHNICAL SKILLS BY PARTICIPATING IN OUR DIFFERENT TECHNICAL EVENTS!
                </div>
                <div class="text-center">
                    <div class="event-title">Technical Events</div>
                    <a class="btn btn-primary view-button" href="viewEvent.php?id=1">View Technical Events</a>
                </div>
            </div>
        </div>

        <!-- Gaming Events -->
        <div class="col-md-6">
            <div class="event-card">
                <img src="images/gaming.jpg" alt="Gaming Event">
                <div class="event-info">
                    EMBRACE YOUR GAMING SKILLS BY PARTICIPATING IN OUR DIFFERENT GAMING EVENTS!
                </div>
                <div class="text-center">
                    <div class="event-title">Gaming Events</div>
                    <a class="btn btn-primary view-button" href="viewEvent.php?id=2">View Gaming Events</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- On-Stage Events -->
        <div class="col-md-6">
            <div class="event-card">
                <img src="images/onstage.jpg" alt="On-Stage Event">
                <div class="event-info">
                    EMBRACE YOUR CONFIDENCE BY PARTICIPATING IN OUR DIFFERENT ON-STAGE EVENTS!
                </div>
                <div class="text-center">
                    <div class="event-title">On-Stage Events</div>
                    <a class="btn btn-primary view-button" href="viewEvent.php?id=3">View On-Stage Events</a>
                </div>
            </div>
        </div>

        <!-- Off-Stage Events -->
        <div class="col-md-6">
            <div class="event-card">
                <img src="images/offstage.jpg" alt="Off-Stage Event">
                <div class="event-info">
                    EMBRACE YOUR TALENT BY PARTICIPATING IN OUR DIFFERENT OFF-STAGE EVENTS!
                </div>
                <div class="text-center">
                    <div class="event-title">Off-Stage Events</div>
                    <a class="btn btn-primary view-button" href="viewEvent.php?id=4">View Off-Stage Events</a>
                </div>
            </div>
        </div>
    </div>
</div>

    </body>
</html>


