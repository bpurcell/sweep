<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" 
   xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<jdoc:include type="head" />


<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/bootstrap/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/bootstrap/css/custom.css" type="text/css" />
</head>
<body>
    <div class="container">

      <div class="content">
        <div class="page-header">
          <h1>Page name <small>Supporting text or tagline</small></h1>
          <jdoc:include type="modules" name="top" /> 
        </div>
        <div class="row">
          <div class="span10">
            <jdoc:include type="component" />
          </div>
          <div class="span4">
            <h3>Secondary content</h3>
          </div>
        </div>
      </div>

      <footer>
          <jdoc:include type="modules" name="bottom" />
      </footer>

    </div> <!-- /container -->

  </body>
</html>
