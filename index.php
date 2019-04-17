<!doctype html>
<html>
<head>
    <title>Cole Hemp: Software Developer</title>
    <meta charset="utf-8"\>
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"\>
    <!--jQuery Library-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!--Custom CSS for Entire Website-->
    <link rel="stylesheet" href="main.css"\>
    <!--Custom JS for Entire Website-->
    <script src="main.js"></script>
    <!--Page Specific JS is located on the bottom of each page-->
</head>
<body>
    <!--Home Section-->
    <div class="homeContainer">
        <!--Nav Section-->
        <nav>
	    <div class="navContainer">
	      <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="homeNavLinkContainer col-md-2">
                        ItsOnlyCole.dev
                    </div>
                    <div class="col-md-6">
                      <!--Scrolls Down to Contact Me Section-->
			<ul class="navul">
                            <li class="navli">
                                <a href="https://github.com/ItsOnlyCole" class="navLink" id="programmingNavLink">Projects</a>
                            </li>
			    <li class="navli">
				<a href="documents/ColeHemp-Resume.pdf" class="navLink" id="resumeNavLink">Resume</a>
                            </li>
                            <li class="navli">
				<a href="#contactMe" class="navLink" id="contactNavLink">Contact</a>
                            </li>
                        </ul>
                    </div>
		    <div class="col-md-2">
		    </div>
                </div>
            </div>
        </nav>
        <!--End of Nav Section-->

        <!--Home Section-->
        <div class="homeCenter">
	  <div class="row">
	    <div class="col-md-2">
	    </div>
	    <div class="col-md-8">
	    <h1 class="homeTitle">Cole Hemp</h1>
            <h3 class="homeSubTitle">Lighting the way to a better future through a passion for technology</h3>
	    </div>
	    <div class="col-md-2">
	    </div>
	    </div>
        </div>
        <div class="homeBottom">
          <!--Text Link and Button point to nothing. JavaScript is used to slide the page down.-->
	  <div class="row">
	    <div class="col-md-2"></div>
	    <div class="col-md-8">
            <h4>
                <a class="hiddenLink" href="#bio">Read More</a>
            </h4>
            <a class="hiddenLink downArrowButton" href="#bio"><img src="images/downArrow.png" width="30"\></a>
	    </div>
	    <div class="col-md-2"></div>
	  </div>
        </div>
    </div>

    <!--Bio Section-->
    <div class="bioContainer container-fluid" id="bio">
        <div class="bioContainer container">
            <div class="pad40 row">
                <div class="col-md-4">
                    <img src="images/profilePictureV3.jpg" width="200px" height="200px" class="profileImg"\>
                </div>
                <div class="col-md-8">
                    <p class="pad20">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!--Email Section-->
    <div class="emailContainer container-fluid">
      <h1 class="emailFormTitle">Contact Me</h1>
      <!--Form for submitting email-->
      <form class="emailForm" action="index.html#contactme" method="post">
	<div class="form-group">
	  <label for="email">Email Address: </label>
	  <input type="email" class="form-control" id="email" name="senderEmailAddress">
        </div>
	<div class="form-group">
	  <label for="emailSubject">Subject: </label>
	  <input type="text" class="form-control" id="emailSubject" name="emailSubject">
        </div>
        <div class="form-group">
	  <label for="emailBody">Message: </label>
	  <textarea class="form-control" rows="5" id="emailBody" name="emailBody"></textarea>
        </div>
	<input type="submit" class="btn btn-primary" value="Submit">
	<input type="reset" class="btn btn-primary" value="Reset">	
      </form>
    </div>

    <!--Footer Section-->
    <div class="footerContainer container-fluid">
        <div>
            <ul class="socialLinks">
                <li class="socialIcon">
                    <a href="https://twitter.com/itsonlycole">
                        <img src="images/socialIcons/twitter.png" width="40px" height="40px"\>
                    </a>
                </li>
                <li class="socialIcon">
                    <a href="https://instagram.com/itsonlycole">
                        <img src="images/socialIcons/instagram.png" width="40px" height="40px"\>
                    </a>
                </li>
                <li class="socialIcon">
                    <a href="https://github.com/itsonlycole">
                        <img src="images/socialIcons/github.png" width="40px" height="40px"\>
                    </a>
                </li>
            </ul>

            <p>
                Email me with any inquires or suggestions!
                <br>
                ColeHemp@gmail.com
            </p>
        </div>
    </div>

    <!--Page Specifc Java Script-->
    <script>
        // Script for page scrolling functionality | This is used for the "Read More" and "Contact" links
        $("a").on("click", function (event) {
            // Checks to see if href is link to somewhere on the same page then prevents regular link functionality
            if (this.hash !== "") {
                event.preventDefault();

4                var hash = this.hash;

                // Uses jQuery to animate the page to scroll down.
                $("html, body").animate({scrollTop: $(hash).offset().top}, 800);
            }
        });
        // End of Read More Script
    </script>
</body>
</html>
