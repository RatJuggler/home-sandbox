<?php $mtStart = microtime(true); $dtFile = date("c",filemtime("index.php")); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>RatJuggler - Home | The vanity page of John Chase.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="RatJuggler, John Chase, vanity">
    <meta name="author" content="John Chase">
    <link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .fork {
        position: fixed;
        top: 0;
        right: 0;
        z-index: 9999;
      }
      .hero-unit {
        padding: 40px;
      }
      .rat-size {
        width: 250px;
        height: 250px;
      }
      .carousel {
        float: left;
        margin-right: 30px;
      }
      .carousel-control {
        margin-top: 0;
      }
      .carousel-indicators {
        top: auto;
        bottom: -15px;
      }
      .carousel-indicators li {
        background-color: #000000;
      }
      .carousel-indicators .active {
        background-color: #FFFFFF;
      }
      .hero-content {
        padding-bottom: 40px;
      }
      .cntSeparator {
        font-size: 54px;
        padding-top: 25px;
      }
      .counter-legend {
        float: left;
        width: 121px;
      }
      .left { float: left }
      .right { float: right }
      .gandi-footer {
        width: 84px;
        height: 25px;
      }
    </style>
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link rel="icon" href="ico/favicon.ico" sizes="16x16 32x32 48x48 64x64 128x128" type="image/vnd.microsoft.icon">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon.png">
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">RatJuggler</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#"><i class="icon-home icon-white"></i> Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#content">Content</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <a href="https://github.com/ratjuggler"><img class="fork" src="img/fork-right-grey.png" alt="Fork me on GitHub"></a>

    <section id="hero-unit" class="container">
      <div class="hero-unit">
        <div id="ratCarousel" class="carousel slide">
          <div class="carousel-inner">
            <div class="item active"><img class="rat-size" alt="Bolt Cutter Rat" src="img/bolt-cutter-rat.jpg" /></div>
            <div class="item"><img class="rat-size" alt="Bowlet Hat Rat" src="img/bowler-rat.jpg" /></div>
            <div class="item"><img class="rat-size" alt="Camera Rat" src="img/camera-rat.jpg" /></div>
            <div class="item"><img class="rat-size" alt="Drilling Rat" src="img/drilling-rat.jpg" /></div>
            <div class="item"><img class="rat-size" alt="Rap Rat" src="img/rap-rat.jpg" /></div>
            <div class="item"><img class="rat-size" alt="Red Carpet Rats" src="img/red-carpet-rats.jpg" /></div>
            <div class="item"><img class="rat-size" alt="Resistance Rats" src="img/resistance-rats.jpg" /></div>
            <div class="item"><img class="rat-size" alt="Sword Rat" src="img/sword-rat.jpg" /></div>
            <div class="item"><img class="rat-size" alt="Toxic Rat" src="img/toxic-rat.jpg" /></div>
            <div class="item"><img class="rat-size" alt="Umbrella Rat" src="img/umbrella-rat.jpg" /></div>
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
        <div class="hero-content">
          <h1>Hello internets!</h1>
          <p>My name is John Chase. This site is a desperate attempt to stick my head above the HTTP parapet and prove that I know at least something about modern web technologies. This doesn't necessarily mean I know anything about design though.</p>
          <p><a href="#about" class="btn btn-primary btn-large">Learn more &raquo;</a></p>
        </div>
      </div>
    </section>

    <section id="badges" class="container">
      <iframe class="github-btn" src="http://ghbtns.com/github-btn.html?user=RatJuggler&repo=home-sandbox&type=watch&count=true" allowtransparency="true" frameborder="0" scrolling="0" width="100" height="20"></iframe>
      <iframe class="github-btn" src="http://ghbtns.com/github-btn.html?user=RatJuggler&repo=home-sandbox&type=fork&count=true" allowtransparency="true" frameborder="0" scrolling="0" width="102" height="20"></iframe>
      <a href="https://twitter.com/ratjuggler" class="twitter-follow-button" data-show-count="true">Follow @ratjuggler</a>
      <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.ratjuggler.co.uk/" data-count="horizontal" data-via="ratjuggler" data-related="mdo:Creator of Twitter Bootstrap">Tweet</a>
      <hr/>
    </section>

    <section id="about" class="container">
      <div class="row">
        <div class="span4">
          <h2><i class="icon-cogs"></i> Bootstrap</h2>
          <p>I've used the Bootstrap framework, created by Twitter, as the basis for this site. Bootstrap makes use of HTML5 and JQuery and comes with a whole range of components and plugins including the image carousel.</p>
          <p><a class="btn" href="http://twitter.github.com/bootstrap">Details here <i class="icon-external-link"></i></a></p>
        </div>
        <div class="span4">
          <h2><i class="icon-picture"></i> Image Carousel</h2>
          <p>The image carousel used here comes as standard with Bootstrap. It cycles through some pictures of dubious legality to distract and annoy you as you look at the site.</p>
          <p><a class="btn" href="http://twitter.github.com/bootstrap/javascript.html#carousel">Details here <i class="icon-external-link"></i></a></p>
        </div>
        <div class="span4">
          <h2><i class="icon-thumbs-up"></i> Font Awesome</h2>
          <p>Font Awesome is awesome. Well I've used it for all of the various icons you can see. None of your old time image files here, it's scalable vectors all the way.</p>
          <p><a class="btn" href="http://fortawesome.github.com/Font-Awesome">Details here <i class="icon-external-link"></i></a></p>
        </div>
      </div>
      <hr/>
      <div class="row">
        <div class="span4">
          <h2><i class="icon-qrcode"></i> QR Code</h2>
          <p>Use the QR code, below right, to quickly find this site on a tablet or mobile device with a built-in camera. I used an internet site to generate a static code.</p>
          <p><a class="btn" href="http://goqr.me/">Details here <i class="icon-external-link"></i></a></p>
        </div>
        <div class="span4">
          <h2><i class="icon-tablet"></i> Favicon</h2>
          <p>As well as supplying several different favicon sizes I've also included a fancy icon, and tweaked the settings, for iOS users. This will allow them to add a desktop shortcut that behaves like an app.</p>
          <p><a class="btn" href="http://developer.apple.com/library/ios/#documentation/AppleApplications/Reference/SafariWebContent/ConfiguringWebApplications/ConfiguringWebApplications.html">Details here <i class="icon-external-link"></i></a></p>
        </div>
        <div class="span4">
          <h2><i class="icon-time"></i> Obsolescence Clock</h2>
          <p>Things move fast with web technologies. The clock at the bottom of the pages shows how long this site has been up and running since it was last changed. Code for the clock found on GitHub.</p>
          <p><a class="btn" href="https://github.com/stefancrain/Flipify.js">Details here <i class="icon-external-link"></i></a></p>
        </div>
      </div>
      <hr/>
    </section>

    <section id="content" class="container">
      <div class="row">
        <div class="left">
          <h2>How long ago did I last change this site?</h2>
          <div id="counter"></div>
          <div>
            <span class="counter-legend">days</span>
            <span class="counter-legend">hours</span>
            <span class="counter-legend">minutes</span>
            <span class="counter-legend">seconds</span>
          </div>
        </div>
        <div class="right">
          <img alt="QR Code" src="img/qrcode150.png" />
        </div>
      </div>
      <hr/>
    </section>

    <footer class="container">
      <div class="row">
        <div class="left">
          <p>&copy; 2013 John Chase <i class="icon-beer"></i></p>
        </div>
        <div class="right">
          Generation time: <?php echo(number_format(microtime(true)-$mtStart,6)); ?> seconds from
          <a href="https://www.gandi.net/"><img alt="Gandi hosting link" class="gandi-footer" src="img/Gandi_logo_black.jpg" /></a>
        </div>
      </div>
    </footer>

    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/flipify.js"></script>

    <script>
      function calcTimeDifference(oldTime, newTime) {
       var msDiff = newTime.getTime() - oldTime.getTime();
       var oResult = new Object();
       oResult.days = Math.floor(msDiff/1000/60/60/24);
       msDiff -= oResult.days*1000*60*60*24;
       oResult.hours = Math.floor(msDiff/1000/60/60);
       msDiff -= oResult.hours*1000*60*60;
       oResult.minutes = Math.floor(msDiff/1000/60);
       msDiff -= oResult.minutes*1000*60;
       oResult.seconds = Math.floor(msDiff/1000);
       return oResult;
      }

      function pad(n) {
        return n<10 ? '0'+n : n;
      }

      function getStartTime() {
        oTime = calcTimeDifference(new Date(Date.parse('<?php echo $dtFile; ?>')), new Date());
        return pad(oTime.days) + ':' + pad(oTime.hours) + ':' + pad(oTime.minutes) + ':' + pad(oTime.seconds);
      }

      !function ($) {
        $(function(){
          $('#ratCarousel').carousel('cycle');
          $('#counter').flipify({
 	        	startTime: getStartTime()
  	  		});
        });
      }(window.jQuery);
    </script>

  </body>
</html>
