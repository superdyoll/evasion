<?php
    /**
        * Copyright (C) 2018 Forest Evasion
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
        <title>Forest Evasion 2018</title>
        <?php include 'includes/head.php';?>
        <script language="javascript">
            $('.carousel').carousel();
        </script>
        <style>
            div.carouselBackImg {
            background-position: 0% 50%;
            background-size: cover;
            background-repeat: no-repeat;
            width:100%;
            height:300px;
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
        <?php include 'includes/navbar.php'; ?>
        <div id="home" class="jumbotron jumboback inset-shadow-bar">
            <div class="container">
                <div class="row"> 
                    <div class="col-md-12">
                        <h1>Forest Evasion 2018</h1>
                        <h2>Forest of Dean</h2>
                        <h2>13th - 15th April</h2>
                        <br>
                        <a href="#signup" class="btn btn-large btn-info" style="text-shadow: white 0em 0em 0em; padding-left:15px; padding-right:15px;">Sign Up >></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div id="about" class="row padded-row-top">
                <div class="col-md-8">
                    <h3>What is Forest Evasion?</h3>
                    <p>Forest Evasion is our annual competition with the aim of meeting and interacting with other like-minded clubs. 2018 will be the 6th year the competition has run. This page is designed to give an overview of what to expect from Evasion, full rules will be sent to participants ahead of the competition.</p>
                    <h3>The Competition</h3>
                    <p>Evasion is a 24 hour competition designed to appeal to outdoor societies, Scout Networks and SSAGO clubs with teams of <b>'Evaders'</b> (4-7 people) or <b>'Catchers'</b> (working in pairs or as a team). The Evaders' task is to navigate between a number of given checkpoints while the Catchers attempt to find them. Each time a catching team catches an evading team they gain points and the Evaders lose a life. Ultimately the teams with the most lives or the most points after 24 hours are the winners.</p>
                </div>
                <div class="col-md-4">
                    <img src="images/Group.jpg" class="img-responsive shadow-image"/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 hidden-xs hidden-sm">
                    <img src="images/EvasionCompetitors.jpg" class="img-responsive shadow-image"/>
                </div>
                <div class="col-md-8">
                    <h3>When is it?</h3>
                    <p>In 2018 the competition will take place on the weekend of 13th - 15th April, with the actual competition taking place on the Saturday - Sunday</p>
                    <h3>Where?</h3>
                    <p>This year we're really excited to be returning to the Forest of Dean, a beautiful location which presents a great competition area. We've run the competition in the Forest Of Dean twice before and are excited to be returning</p>
                    <h3>How much does it cost?</h3>
                    <p>The cost for this years competition will be £11 per person which includes overnight camping (On Friday and Saturday) at Botany Bay Campsite, a badge and (<b>New for this year!</b>) some delicious dinner on the saturday night. It also covers hiring the forest. We have tried to reduce costs as much as we can and we do not aim to make any profit from the event.</p>
                    <h3>How do I sign up?</h3>
                    Sign up for 2018 is now open. Simply fill out the form online or download and email it back to <a href="mailto:info@forestevasion.co.uk">info@forestevasion.co.uk</a> and you'll be ready to go. Sign up closes on March 31st.
                    <br />
                    <br />
                    <center>
                        <a href="#signup" class="btn btn-success btn-lg text-center">Sign Up >></a>
                    </center> 
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
                                    <h3 class="quote">I've done the competition for four years now and every year has been quite challenging but great fun!</h3>
                                    <p>Charlotte Callaway (Evader 2013-15, Catcher 2016)</p>
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
                                <div class="carouselBackImg" style="background-image:url(images/Hiding.JPG); background-position-y:25%;"></div>
                                <div class="carousel-caption">
                                    <h4 class="quote">Being a catcher was fantastic; attempting to guess your opponents moves, putting a plan into action and lying in wait for the evaders to come into range made the weekend very enjoyable</h4>
                                    <p>Jake Rowland (Catcher 2015-16)</p>
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
            
            <div class="row" id="signup">
                <div class="col-md-12">
                    <br />
                    <h2 class="subtitle">Sign Up Form</h2>
                    <h3 style="text-align:center">Sign up is now live!!! Simply fill it in online or download and fill out the form below and send to <a href="mailto:info@forestevasion.co.uk">info@forestevasion.co.uk</a></h3>
                    <div class="col-md-4">
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSdEENmwScHBNgGcTr0n2_7F5m3YROZ5AsbVLZ2sEVncRC9AIw/viewform" target="_blank">
                            <div class="well" style="font-size:large; text-align:center;">
                                <i class="fa fa-external-link fa-4x"></i><br />
                                Fill in the form online
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="files/Forest Evasion 2018 Team Sign Up Form.pdf" target="_blank">
                            <div class="well" style="font-size:large; text-align:center;">
                                <i class="fa fa-file-pdf-o fa-4x"></i><br />
                                Download the form in PDF format
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="http://view.officeapps.live.com/op/view.aspx?src=http://forestevasion.co.uk/files/Forest Evasion 2018 Team Sign Up Form.docx" target="_blank">
                            <div class="well" style="font-size:large; text-align:center;">
                                <i class="fa fa-file-word-o fa-4x"></i><br />
                                Download the form in Word format
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row" id="details">
                <div class="col-md-12">
                    <br />
                    <h2 class="subtitle">Rules and Kit List</h2>
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default" style="background-color: #f5f5f5;">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseRules" aria-expanded="false" aria-controls="collapseRules">
                                <div class="panel-heading" role="tab" id="headingRules">
                                    <h4 class="panel-title">
                                        <i class="fa fa-map"></i>&nbsp;Evasion Rules
                                    </h4>
                                </div>
                            </a>
                            <div id="collapseRules" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingRules">
                                <div class="panel-body">
                                    <ul>
                                        <li>Teams of Evaders consist of 4-7 people</li>
                                        <li>Competitiors must be over 18 years old and part of a registered organisation such as University, Scouts or Guides</li>
                                        <li>Evaders will navigate between given checkpoints. Catchers aim to 'catch' (tag) evading teams. Evaders lose one life if caught. The evading team that completes the course with least lives lost will win the evaders trophy. After a team is caught they will have 15 minutes free time from any catching team and 30 mins from the same catching team.</li>
                                        <li>There may be optional checkpoints along the route that allow you to gain extra lives. If attempting to get one of these checkpoints, teams must remember to get to the next compulsory checkpoint before it closes. </li>
                                        <li>Teams cannot be caught within 500m of a manned checkpoint and 200m of an unmanned checkpoint whilst that checkpoint is open. If an evading team does not reach a manned checkpoint before it closes, they must phone the organiser with a 6 digit grid reference.</li>
                                        <li>Team members must be within line of sight of one another and must be no further than 200m away from each other. </li>
                                        <li>All entrants must read the H&S briefing.</li>
                                        <li>You are responsible for your own safety and that of your team.</li>
                                        <li>All clothing, including shoes, should be suited to cover a long distance.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default" style="background-color: #f5f5f5;">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseKit" aria-expanded="false" aria-controls="collapseKit">
                                <div class="panel-heading" role="tab" id="headingKit">
                                    <h4 class="panel-title">
                                        <i class="fa fa-check-square-o"></i>&nbsp;Recommended Kit List (not definitive)
                                    </h4>
                                </div>
                            </a>
                            <div id="collapseKit" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingKit">
                                <div class="panel-body">
                                    <ul>
                                        <li>*Map** (O/S OL14) - 1 per team</li>
                                        <li>*First aid kit - 1 per team</li>
                                        <li>*Waterproof coat and trousers</li>
                                        <li>*Hiking boots</li>
                                        <li>Gaiters</li>
                                        <li>Backpack</li>
                                        <li>Water bottle</li>
                                        <li>Base layers</li>
                                        <li>Insulation</li>
                                        <li>Socks</li>
                                        <li>Spare socks</li>
                                        <li>Hat, gloves, scarf, suncream etc.</li>
                                        <li>Food (you may buy additional food whilst competing, but we cannot guarantee where will be open, especially on Sunday)</li>
                                        <li>Plate and cutlery</li>
                                        <li>Torch</li>
                                        <li>Compass</li>
                                        <li>Tent (Will be left at the campsite)</li>
                                        <li>Sleeping equipment</li>
                                        <li>Wash bag</li>
                                        <li>Toilet paper</li>
                                        
                                        * We strongly advise you have at least these items to successfully take part.
                                        ** Thanks to Dash4It for providing us with ten OL14 Active maps; if your team requires one, please let us know!
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default" style="background-color: #f5f5f5;">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapsePlan" aria-expanded="false" aria-controls="collapseKit">
                                <div class="panel-heading" role="tab" id="headingKit">
                                    <h4 class="panel-title">
                                        <i class="fa fa-calendar"></i>&nbsp;Rough plan of events
                                    </h4>
                                </div>
                            </a>
                            <div id="collapsePlan" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingKit">
                                <div class="panel-body">
                                    <table class="table table-hover">
                                        <tr>
                                            <th>Time</th>
                                            <th>Activity</th>
                                        </tr>
                                        <tr>
                                            <td>Friday Evening (from 19:00)</td>
                                            <td>People Arrive / Set up tents</td>
                                        </tr>
                                        <tr>
                                            <td>Saturday Morning (12:00)</td>
                                            <td>Evasion starts from car park approx. 30mins from campsite.</td>
                                        </tr>
                                        <tr>
                                            <td>Saturday Evening (20:00)</td>
                                            <td>Dinner (provided) and campfire</td>
                                        </tr>
                                        <tr>
                                            <td>Early Sunday Morning</td>
                                            <td>Teams leave site early hoping to evade capture and arrive at the first checkpoint</td>
                                        </tr>
                                        <tr>
                                            <td>Sunday 12:00</td>
                                            <td>Competition ends, prizes awarded, people go home exausted but happy!</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" id="photos">
                <div class="col-md-4">
                    <img class="img-responsive shadow-image" src="images/UEA.jpg">
                </div>
                <div class="col-md-4">
                    <img class="img-responsive shadow-image" src="images/Group_Wide.jpg">
                </div>
                <div class="col-md-4">
                    <img class="img-responsive shadow-image" src="images/SSAGO.jpg">
                </div>
            </div>
            <div class="row" id="winners">
                <div class="col-md-12">
                    <br />
                    <h2 class="subtitle">Previous Winners</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <img src="images/plaque2013.jpg" class="img-responsive shadow-image"/>
                    <br />
                    <br />
                </div>
                <div class="col-md-8">
                    <p>The competition first ran in 2013, the winners to date are as follows:</p>
                    <h3>Evaders</h3>
                    <p>2017 - CUHWC Duffers </p>
                    <p>2016 - Southampton City Network (Tom Candy, Peter Ogilvie, Arshad Emmambux )</p>
                    <p>2015 - Cambridge University Hillwalking Club (Philip Withnall, Vicky Ward, Joe Hobbs, Chris Arran, Tom Leach)</p>
                    <p>2014 - Bath University Mountaineering Club (David Clare, Jon Ridley, Strachan McCormick, Martin MacDonald)</p>
                    <p>2013 - Southampton's Duke of Edinburgh Society (Rachel Manson, Charlotte Callaway, Alex Manning, Georgia Howes)</p>
                </div>
            </div>
            <div class="row" id="2017">
                 <div class="col-md-12">
                    <br />
                    <h2 class="subtitle">2017 Photos</h2>
                 </div>
            </div> 
            <div class="row">
                 <div class="col-md-4 col-md-offset-1" style="text-align:center">
             <br />
             <br />
             <h2>We took loads of photos at Evasion 2017 take a look at them here to get an idea of what's in store.</h2>
             <br />
             <a class="btn btn-success" href="https://goo.gl/photos/ShQZXL6dAtABc1fJ8">The photo album >></a>
                 </div>
                 <div class="col-md-6 col-md-offset-1">
                    <img src="https://lh3.googleusercontent.com/5vI59iDU1CVp-7bIC89jnL5NGETC0WDeGPeWrLXSODZTtdRT_QQV2OZgF8qQPDzIiOb4WN7uBqWGnZWCvnleXZA2zNSt4cJK5jkS5_UC3n8dtkxu3b0re-Dmy_gc7HkAiNIDb2YB0m8=w2400" class="img-responsive shadow-image"/>
                 </div>
            </div>
            <div class="row" id="2016">
                <div class="col-md-12">
                    <br />
                    <h2 class="subtitle">2016 Video</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/9NYaBlqgFtg" frameborder="0" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-md-offset-3" style="text-align:center;">
                    <i class="fa fa-copyright"></i> Forest Evasion <?=date('Y');?> <a href="forestevasion.co.uk">forestevasion.co.uk</a>
                </div>
            </div>
        </div>
    </body>
</html>
