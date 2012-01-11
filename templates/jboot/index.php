<!DOCTYPE html>
<html lang="en">
  <head>
  <jdoc:include type="head" />
    <meta charset="utf-8">
    <title>**********</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le styles -->
    <link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/style.css" rel="stylesheet">

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
  </head>

  <body>

    <div class="topbar">
      <div class="fill">
        <div class="container">
          <h3><a href="./admin">******</a></h3>
		<jdoc:include type="modules" name="adminmenu" />
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
      <section>
       <jdoc:include type="component" />
       </section>
      </div>

      <footer>
        <p>&copy; *********</p>
      </footer>

    </div> <!-- /container -->

  </body>
</html>
