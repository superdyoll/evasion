<?php
    /**
        * Copyright (C) 2013 peredur.net
        *
        * This program is free software: you can redistribute it and/or modify
        * it under the terms of the GNU General Public License as published by
        * the Free Software Foundation, either version 3 of the License, or
        * (at your option) any later version.
        * 
        * This program is distributed in the hope that it will be useful,
        * but WITHOUT ANY WARRANTY; without even the implied warranty of
        * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
        * GNU General Public License for more details.
        * 
        * You should have received a copy of the GNU General Public License
        * along with this program.  If not, see <http://www.gnu.org/licenses/>.
    */
    $page = 'home';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Forest Evasion 2017</title>
        <?php include 'includes/head.php';?>
        <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,500,700' rel='stylesheet' type='text/css'>
        <script language="javascript">
            $('.carousel').carousel()
        </script>
        <style>
            div.carouselBackImg {
            background-position: 0% 50%;
            background-size: cover;
            background-repeat: no-repeat;
            width:100%;
            height:250px;
            min-width:150px;
            min-height:200px;
            max-height:600px;
            overflow:hidden;
            display:block;
            }
        </style>
        <link rel="stylesheet" href="css/font-awesome.min.css">
    </head>
    <body data-spy="scroll" data-target="#navbar-top">
        <div class="title">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <img class="logo" src="images/FElogo2016_NoText.png" />
                    </div>
                    <div class="col-md-8">
                        <h1>FOREST EVASION 2017</h1>
                        <h2>THETFORD FOREST</h2>
                        <h3>21st - 23rd April 2017</h3>
                    </div>
                    <div class="col-md-2">
                        <div class="icons">
                            <a href="https://www.facebook.com/ForestEvasion/"><i class="fa fa-facebook fa-lg icon"></i></a>
                            <a href="https://twitter.com/ForestEvasion"><i class="fa fa-twitter fa-lg icon"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/9NYaBlqgFtg" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="row padded-row-top">
                <div class="col-md-4">
                    <img src="images/Group.jpg" class="img-responsive shadow-image"/>
                </div>
                <div class="col-md-8">
                    <h3>What is Forest Evasion?</h3>
                    <p>Forest Evasion is our annual competition with the aim of meeting and interacting with other like-minded clubs. 2017 will be the 5th year the competition has run. This page is designed to give an overview of what to expect from Evasion, full rules will be sent to participants ahead of the competition.</p>
                    <h3>The Competition</h3>
                    <p>Evasion is a 24 hour competition designed to appeal to outdoor societies with teams of <b>'Evaders'</b> (4-7 people) or <b>'Catchers'</b> (working individually or as a team). The Evaders' task is to navigate between a number of given checkpoints while the Catchers attempt to find them. Each time a catching team catches an evading team they gain points and the Evaders lose a life. Ultimately the teams with the most lives or the most points after 24 hours are the winners.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <a class="btn btn-success btn-register btn-shadow" href="https://docs.google.com/forms/d/e/1FAIpQLSdqg6fdWs-YK14-6iWt_tOHch43FaBfFpRh_S3W7Gq7LlIqZA/viewform?usp=send_form">Register your interest now >></a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h2 class="subtitle">What previous competitors thought</h2>
                    <div id="carousel" class="carousel slide" data-ride="carousel" height="200px">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel" data-slide-to="1"></li>
                            <li data-target="#carousel" data-slide-to="2"></li>
                            <li data-target="#carousel" data-slide-to="3"></li>
                        </ol>
                        
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <div class="carouselBackImg" style="background-image:url(images/sign.jpg)"></div>
                                <div class="carousel-caption">
                                    <h3 class="quote">I had great fun trying to evade the catchers! Trying to plan routes that wouldn't take too long but not take the obvious path</h3>
                                    <p>Lloyd Pearson (Evader 2015)</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="carouselBackImg" style="background-image:url(images/tents.jpg)"></div>
                                <div class="carousel-caption">
                                    <h3 class="quote">I've done the competition for three years now and every year has been quite challenging but great fun!</h3>
                                    <p>Charlotte Callaway (Evader 2013-15)</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="carouselBackImg" style="background-image:url(images/river.jpg)"></div>
                                <div class="carousel-caption">
                                    <h4 class="quote">Evasion is a great opportunity to get off the beaten track in beautiful areas of the UK and is a great way of combining adventure with a bit of competitive spirit!</h4>
                                    <p>Rachel Manson (Evader 2013-15)</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="carouselBackImg" style="background-image:url(images/fire.jpg); background-position-y:25%;"></div>
                                <div class="carousel-caption">
                                    <h4 class="quote">Being a catcher was fantastic; attempting to guess your opponents moves, putting a plan into action and lying in wait for the evaders to come into range made the weekend very enjoyable</h4>
                                    <p>Jake Rowland (Catcher 2015)</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="row" id="winners">
                <div class="col-md-12">
                    <br />
                    <h2 class="subtitle">Previous Winners</h2>
                </div>
            </div>
            <div class="row padded-row-bottom">
                <div class="col-md-12">
                    <p>The competition first ran in 2013, the winners to date are as follows:</p>
                    <h3>Evaders</h3>
                    <p>2016 - Southampton City Network (Tom Candy, Peter Ogilvie, Arshad Emmambux )</p>
                    <p>2015 - Cambridge University Hillwalking Club (Philip Withnall, Vicky Ward, Joe Hobbs, Chris Arran, Tom Leach)</p>
                    <p>2014 - Bath University Mountaineering Club (David Clare, Jon Ridley, Strachan McCormick, Martin MacDonald)</p>
                    <p>2013 - Southampton's Duke of Edinburgh Society (Rachel Manson, Charlotte Callaway, Alex Manning, Georgia Howes)</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <img class="img-responsive shadow-image" src="images/UEA.jpg" />
                </div>
                <div class="col-md-4">
                    <img class="img-responsive shadow-image" src="images/Group_Wide.jpg" />
                </div>
                <div class="col-md-4">
                    <img class="img-responsive shadow-image" src="images/SSAGO.jpg" />
                </div>
            </div>
            <div class="row padded-row-top">
                <div class="col-md-6 col-md-offset-3" style="text-align:center;">
                    <i class="fa fa-copyright"></i> Forest Evasion 2016 <a href="forestevasion.co.uk">forestevasion.co.uk</a>
                </div>
            </div>
        </div>        
    </body>
    </html>
                