<!DOCTYPE html>
<?php
  // Capture the start time so we can calculate how long the page took to prepare.
  $mtStart = microtime(true); $dtFile = date("c",filemtime("index.php"));
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>RatJuggler - Home | The vanity page of John Chase.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A page for me to try out all the little bits and pieces that web designers have so much fun with.">
    <meta name="keywords" content="RatJuggler, John Chase, development, web design, vanity">
    <meta name="author" content="John Chase">
    <link href="css/bootstrap.css" rel="stylesheet" title="Theme">
    <link href="css/override.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/jquery.countdown.css" rel="stylesheet">
    <link rel="icon" href="ico/favicon.ico" sizes="16x16 32x32 48x48 64x64 128x128" type="image/vnd.microsoft.icon">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon.png">
  </head>

  <body>

<?php include_once("analyticstracking.php") ?>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">RatJuggler</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#"><i class="icon-home icon-white"></i> Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#content">Content</a></li>
              <li><a href="#contact-form-modal" data-toggle="modal">Contact</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Theme <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#" class="theme-change" rel="css/bootstrap.css">Default</a></li>
                  <li class="divider"></li>
                  <li><a href="#" class="theme-change" rel="css/bootstrap_1990s.css">The 1990s</a></li>
                </ul>
              </li>
              <li><a href="https://twitter.com/share" class="twitter-button twitter-share-button" data-url="http://www.ratjuggler.co.uk/" data-text="Look at this great site: " data-count="horizontal">Tweet</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <span id="forkongithub"><a href="https://github.com/RatJuggler/home-sandbox">Fork me on GitHub</a></span>

    <section id="hero-unit" class="container hero-unit">
      <div class="row">
        <div class="span3">
          <div id="ratCarousel" class="carousel slide">
            <div class="carousel-inner">
              <div class="item active"><img alt="Bolt Cutter Rat" src="img/bolt-cutter-rat.jpg" /></div>
              <div class="item"><img alt="Bowlet Hat Rat" src="img/bowler-rat.jpg" /></div>
              <div class="item"><img alt="Camera Rat" src="img/camera-rat.jpg" /></div>
              <div class="item"><img alt="Drilling Rat" src="img/drilling-rat.jpg" /></div>
              <div class="item"><img alt="Rap Rat" src="img/rap-rat.jpg" /></div>
              <div class="item"><img alt="Red Carpet Rats" src="img/red-carpet-rats.jpg" /></div>
              <div class="item"><img alt="Resistance Rats" src="img/resistance-rats.jpg" /></div>
              <div class="item"><img alt="Sword Rat" src="img/sword-rat.jpg" /></div>
              <div class="item"><img alt="Toxic Rat" src="img/toxic-rat.jpg" /></div>
              <div class="item"><img alt="Umbrella Rat" src="img/umbrella-rat.jpg" /></div>
            </div>
            <a class="left carousel-control" href="#ratCarousel" data-slide="prev">&lsaquo;</a>
            <a class="right carousel-control" href="#ratCarousel" data-slide="next">&rsaquo;</a>
            <ol class="carousel-indicators">
              <li data-target="#ratCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#ratCarousel" data-slide-to="1"></li>
              <li data-target="#ratCarousel" data-slide-to="2"></li>
              <li data-target="#ratCarousel" data-slide-to="3"></li>
              <li data-target="#ratCarousel" data-slide-to="4"></li>
              <li data-target="#ratCarousel" data-slide-to="5"></li>
              <li data-target="#ratCarousel" data-slide-to="6"></li>
              <li data-target="#ratCarousel" data-slide-to="7"></li>
              <li data-target="#ratCarousel" data-slide-to="8"></li>
              <li data-target="#ratCarousel" data-slide-to="9"></li>
            </ol>
          </div>
        </div>
        <div class="span9">
          <h1>Hello internets!</h1>
          <div id="cookie-warning" class="alert alert-block">
            <a href="#" class="close">&times;</a>
            <p><strong>Warning!</strong>
               This web site uses cookies for your comfort and convenience. Continued use of this site means you are happy with this usage.</p>
          </div>
          <p>My name is John Chase. This site is a desperate attempt to stick my head above the HTTP parapet and prove that I know at least something about modern web technologies.
             Or at least the ability to Google, read and cut-n-paste other peoples code.
             <a href="https://twitter.com/ratjuggler" class="twitter-follow-button" data-show-count="true">Follow @ratjuggler</a></p>
          <p><a href="#about" class="btn btn-primary btn-large">Learn more &raquo;</a></p>
        </div>
      </div>
    </section>

    <section id="about" class="nav-point container">
      <div class="row">
        <div class="span4">
          <h2><i class="icon-cogs"></i> Bootstrap</h2>
          <p>I've used the Bootstrap framework, created by Twitter, as the basis for this site. Bootstrap makes use of HTML5 and JQuery and comes with a whole range of components and plugins including the image carousel.</p>
          <p><a class="btn" href="http://twitter.github.com/bootstrap" target="_blank">Details here <i class="icon-external-link"></i></a></p>
        </div>
        <div class="span4">
          <h2><i class="icon-picture"></i> Image Carousel</h2>
          <p>The image carousel used here comes as standard with Bootstrap. It cycles through some pictures of dubious legality to distract and annoy you as you look at the site.</p>
          <p><a class="btn" href="http://twitter.github.com/bootstrap/javascript.html#carousel" target="_blank">Details here <i class="icon-external-link"></i></a></p>
        </div>
        <div class="span4">
          <h2><i class="icon-thumbs-up"></i> Font Awesome</h2>
          <p>Font Awesome is awesome. Well I've used it for all of the various icons you can see. None of your old time image files here, it's scalable vectors all the way.</p>
          <p><a class="btn" href="http://fortawesome.github.com/Font-Awesome" target="_blank">Details here <i class="icon-external-link"></i></a></p>
        </div>
      </div>
      <hr/>
      <div class="row">
        <div class="span4">
          <h2><i class="icon-github"></i> GitHub</h2>
          <p>The code for this site is available on GitHub. Though why on earth you'd want to look at it is anyone's guess.</p>
          <p><a class="btn" href="https://github.com/RatJuggler/home-sandbox" target="_blank">Details here <i class="icon-external-link"></i></a></p>
        </div>
        <div class="span4">
          <h2><i class="icon-twitter"></i> Twitter</h2>
          <p>Social media "badges" are all the rage. I've added some Twitter buttons to tweet and follow because I don't like Facebook.</p>
          <p><a class="btn" href="https://dev.twitter.com/docs/twitter-for-websites" target="_blank">Details here <i class="icon-external-link"></i></a></p>
        </div>
         <div class="span4">
          <h2><i class="icon-check"></i> Web Cruft</h2>
          <p>Cookie warning, privacy policy, meta tags, robots.txt, sitemap.xml and various other bits and pieces you can have to supposedly improve a site.</p>
          <p><a class="btn" href="https://developers.google.com/webmasters/control-crawl-index/docs/getting_started" target="_blank">Details here <i class="icon-external-link"></i></a></p>
         </div>
      </div>
      <hr/>
      <div class="row">
        <div class="span4">
          <h2><i class="icon-tablet"></i> Favicon</h2>
          <p>As well as supplying several different favicon sizes I've also included a fancy icon, and tweaked the settings, for iOS users. This will allow them to add a desktop shortcut that behaves like an app.</p>
          <p><a class="btn" href="http://developer.apple.com/library/ios/#documentation/AppleApplications/Reference/SafariWebContent/ConfiguringWebApplications/ConfiguringWebApplications.html" target="_blank">Details here <i class="icon-external-link"></i></a></p>
        </div>
        <div class="span4">
          <h2><i class="icon-magic"></i> Theme Changer</h2>
          <p>I looked at several theme changers but ended up writing my own very simple one using JQuery. It's the alternative theme I really like.</p>
          <p><a class="btn" href="http://divshot.github.io/geo-bootstrap/" target="_blank">Details here <i class="icon-external-link"></i></a></p>
        </div>
        <div class="span4">
          <h2><i class="icon-tasks"></i> Google Analytics</h2>
          <p>It wouldn't be much of vanity page if I didn't have a way of tracking the multitudes of fans who visit this site.</p>
          <p><a class="btn" href="http://www.google.co.uk/analytics/" target="_blank">Details here <i class="icon-external-link"></i></a></p>
        </div>
      </div>
      <hr/>
    </section>

    <section id="content" class="nav-point container">
      <div class="row">
        <div class="span6">
          <h2><i class="icon-time"></i> Obsolescence Clock</h2>
          <p>Things move fast with web technologies. This clock shows how long the site has been up and running since it was last changed. Code for the clock found on GitHub.</p>
          <p><a class="btn" href="http://keith-wood.name/countdown.html" target="_blank">Details here <i class="icon-external-link"></i></a></p>
          <div id="counter"></div>
        </div>
        <div class="span6">
          <h2><i class="icon-qrcode"></i> QR Code</h2>
          <p>Use the QR code below to quickly find this site on a tablet or mobile device with a built-in camera. I used an internet site to generate a static code.</p>
          <p><a class="btn" href="http://goqr.me/" target="_blank">Details here <i class="icon-external-link"></i></a></p>
          <div style="text-align: center;">
            <img alt="QR Code" src="img/qrcode150.png" />
          </div>
        </div>
      </div>
      <hr/>
    </section>

    <footer class="container">
      <div class="row">
        <div class="span4">
          <p>&copy; 2013 John Chase <i class="icon-beer"></i></p>
        </div>
        <div class="span4">
          <p style="text-align: center;">
            <a href="#privacy-policy-modal" data-toggle="modal">Privacy Policy</a>
          </p>
        </div>
        <div class="span4">
          <p style="float: right;">
            Generated in <?php echo(number_format(microtime(true)-$mtStart,6)); ?> secs from
            <a href="https://www.gandi.net/" target="_blank"><img alt="Gandi hosting link" class="gandi-footer" src="img/Gandi_logo_black.jpg" /></a>
          </p>
        </div>
      </div>
    </footer>

    <div id="privacy-policy-modal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="ppLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3 id="ppLabel">Privacy Policy</h3>
      </div>
      <div class="modal-body">
        <p>Privacy!?! this is the internet...</p>
        <p>OK, I promise not to do anything evil with any data you willingly (e.g. contact details) or unwillingly (e.g. IP address) provide whilst visiting this site.</p>
        <p>This includes deliberate public exposure as well as selling to third parties so you won't be embarrassed that you've been seen here.</p>
      </div>
    </div>

    <div id="contact-form-modal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="cfLabel" aria-hidden="true">
      <form id="contact-form" class="modal-form form-horizontal">
        <div class="modal-header">
          <a id="contact-form-close" href="#" class="close" data-dismiss="modal" aria-hidden="true">&times;</a>
          <h3 id="cfLabel">Contact Form</h3>
        </div>
        <div class="modal-body">
          <div class="control-group">
            <label class="control-label" for="name">Your Name *</label>
            <div class="controls">
              <input type="text" class="input-xlarge" id="name" name="name" placeholder="Fred Bloggs">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="email">Email Address *</label>
            <div class="controls">
              <div class="input-prepend">
                <span class="add-on"><i class="icon-envelope"></i></span>
                <input type="email" class="input-xlarge" id="email" name="email" placeholder="spam@beans.egg">
              </div>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="subject">Subject *</label>
            <div class="controls">
              <select class="input-medium" id="subject" name="subject">
                <option></option>
                <option>Flame</option>
                <option>Praise</option>
                <option>Pedant</option>
                <option>Other</option>
              </select>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="message">Your Message *</label>
            <div class="controls">
              <textarea class="input-xlarge" id="message" name="message" rows="3"></textarea>
            </div>
          </div>
          <div class="control-group">
            <div class="controls">
              <label class="checkbox">
                <input type="checkbox" id="trollbox" name="trollbox"> Tick this if you are just trolling.
              </label>
            </div>
          </div>
          <div>* Are required.</div>
        </div>
        <div class="modal-footer">
          <button id="contact-form-submit" type="submit" class="btn btn-primary" data-loading-text="<i class='icon-spinner icon-spin icon-large'></i> Sending">Submit</button>
          <a id="contact-form-cancel" href="#" class="btn" data-dismiss="modal">Cancel</a>
        </div>
      </form>
    </div>

    <div id="error-modal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="cfLabel" aria-hidden="true">
      <div class="modal-header">
        <h2><i class="icon-warning-sign"></i> Oh dear...</h2>
      </div>
      <div class="modal-body">
        <p>Well this is embarrassing, there appears to be have been an error!</p>
        <p>Any chance you can work out what has happened from the following:</p>
        <pre id="error-text">Error message here...</pre>
        <p>Or better still why not just try it again.</p>
      </div>
    </div>

    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery.cookie.js"></script>
    <script type="text/javascript" src="js/jquery.countdown.js"></script>
    <script type="text/javascript" src="js/jquery.validate.js"></script>
    <script type="text/javascript" src="js/jquery.form.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/index.js"></script>

  </body>
</html>
