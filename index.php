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
    	<title>Forest Evasion 2016</title>
		<?php include 'includes/head.php';?>
        <script language="javascript">
			$('.carousel').carousel()
		</script>
        <style>
			.peopleCarouselImg img {
  				width: 100%;
				overflow:hidden;
			}
		</style>
    </head>
<body>
	<?php include 'includes/navbar.php'; ?>
	<div class="jumbotron jumboback inset-shadow-bar">
        <div class="container">
      			<div class="row"> 
            		<div class="col-md-12">
               			<h1>Forest Evasion 2016</h1>
            			<br>
            			<br>
            			<a class="btn btn-large btn-info" style="text-shadow: white 0em 0em 0em; padding-left:15px; padding-right:15px;">Sign up now!</a>
                	</div>
            	</div>
        	</div>
     </div>
     <div class="container">
     	<a name="about"></a>
      	<div class="row padded-row">
        	<div class="col-md-8">
          		<h2>The Challenge</h2>
          		<p>We are passionate about QR codes and using them to create an 
interactive
            	experience to allow you to follow routes created by others and 
experience
            	new content. You can also create your own routes</p>
        	</div>
        	<div class="col-md-4">
          		<img src="images/EvasionGroup.jpg" class="img-responsive shadow-image"/>
        	</div>
      	</div>
      	<div class="row">
        	<div class="col-md-12">
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
    					<div class="item peopleCarouselImg active">
      						<img src="images/sign.jpg" alt="..." class="peopleCarouselImg">
      						<div class="carousel-caption">
        						<h1>The challenge</h1>
      						</div>
    					</div>
    					<div class="item peopleCarouselImg">
      						<img src="images/tents.jpg" alt="..." class="peopleCarouselImg">
      						<div class="carousel-caption">
        						<h1>The challenge</h1>
                            </div>
    					</div>
                        <div class="item peopleCarouselImg">
      						<img src="images/river.jpg" alt="..." class="peopleCarouselImg">
      						<div class="carousel-caption">
        						<h1>The challenge</h1>
      						</div>
    					</div>
                        <div class="item peopleCarouselImg">
      						<img src="images/fire.jpg" alt="..." class="peopleCarouselImg">
      						<div class="carousel-caption">
        						<h1>The challenge</h1>
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
      	<div class="row">
      		<div class="col-md-12">
        		<a name="signup"></a>
        		<h2>Sign Up</h2>
   				<iframe src="https://docs.google.com/forms/d/1kF62TpA_i9nAdXqcDnpNedU_rHJxUdDEJUoa7wMi94I/viewform?embedded=true" width="100%" height="1200" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
       		</div>
     	</div>
    </div>        
</body>
</html>