<?php include_once('functions.php'); ?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="utf-8">
  <title>Styleguide SATS ELIXIA alternative</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#000000">
  
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,700,700i" rel="stylesheet">
  <!-- Style Guide Boilerplate Styles -->
  <link rel="stylesheet" href="css/sg-style.css">
  <!--[if lt IE 9]><link rel="stylesheet" href="css/sg-style-old-ie.css"><![endif]-->

  <!-- https://github.com/sindresorhus/github-markdown-css -->
  <link rel="stylesheet" href="css/github-markdown.css">

  <!-- Replace below stylesheet with your own stylesheet -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/overrides.css">

  <!-- prism Syntax Highlighting Styles -->
  <link rel="stylesheet" href="vendor/prism/prism.css">
</head>
<body>
  <a href="#main" class="sg-visually-hidden sg-visually-hidden-focusable">Skip to main content</a>



  <div class="sg-wrapper sg-clearfix">
    <div id="nav" class="sg-sidebar" role="navigation">
      <h3 class="sg-h2 sg-subnav-title">General</h3>
      <ul class="sg-nav-group">
        <li>
          <a href="#sg-about">Intro</a>
        </li>
        <li>
          <a href="#sg-colors">Colors</a>
        </li>
        <li>
          <a href="#sg-fontStacks">Fonts</a>
        </li>
      </ul>

      <?php listFilesInFolder('markup'); ?>
    </div><!--/.sg-sidebar-->
<div id="top" class="sg-header" role="banner">
    <div class="sg-container">
      <p class="sg-logo"><img src="https://beta.satselixia.no/img/logo-no-black.svg" />
        <span class="sg-logo-full">STYLE GUIDE <strong>ALT</strong></span>
      </p>
      <button type="button" class="sg-nav-toggle">Menu</button>
    </div>
  </div><!--/.sg-header-->
    <div id="main" class="sg-main container" role="main">
        
      <div class="sg-container">
        <div class="sg-info">
          <div class="sg-about sg-section">
            <h1 id="sg-about" class="sg-h1">Alternative style guide</h1>
            <p>Bootstrapped style guide for Sats/Elixia. More patterns and detailed documentation will come.</p>
            <p>Variables (less) marked with prefix @.</p>
            <p>To view source code click the View source button below the elements.</p>
          </div><!--/.sg-about-->

          <!-- Manually add your UI colors here. -->
          <div class="sg-colors sg-section">
            <h2 id="sg-colors" class="sg-h2">Colors</h2>
            <div class="sg-color-grid">
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #333333;"></div>
                <div class="sg-color-name">@sats-black-color</div>
                <div class="sg-color-value">#333333</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #672493;"></div>
                <div class="sg-color-name">@sats-new-purple-color</div>
                <div class="sg-color-value">#672493</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #ee0974;"></div>
                <div class="sg-color-name">@sats-pink-color</div>
                <div class="sg-color-value">#ee0974</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #95d600;"></div>
                <div class="sg-color-name">@sats-green-color</div>
                <div class="sg-color-value">#95d600</div>
              </div>
            </div><!--/.sg-color-grid-->
            <div class="sg-color-grid">
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #d8d8d8;"></div>
                <div class="sg-color-name">@sats-grey-color</div>
                <div class="sg-color-value">#d8d8d8</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #e6e6e2;"></div>
                <div class="sg-color-name">@sats-warm-grey-color</div>
                <div class="sg-color-value">#e6e6e2</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #f3f3f3;"></div>
                <div class="sg-color-name">@sats-light-grey-color</div>
                <div class="sg-color-value">#f3f3f3</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #e6e6e6;"></div>
                <div class="sg-color-name">@sats-whitesmoke-color</div>
                <div class="sg-color-value">#e6e6e6</div>
              </div>
            
            </div><!--/.sg-color-grid-->
          </div><!--/.sg-colors-->

          <!-- Manually add your fonts here. -->
          <div class="sg-font-stacks sg-section">
            <h2 id="sg-fontStacks" class="sg-h2">Font Stacks</h2>
            <dl class="sg-font-list">
              <dt>Body Font (@font-family-sans-serif):</dt>
              <dd style='font-family: "Roboto", Helvetica, Arial, sans-serif;'>"Roboto", Helvetica, Arial, sans-serif;</dd>

              <dt>Body Font Italic:</dt>
              <dd style='font-family: "Roboto", Helvetica, Arial, sans-serif; font-style: italic;'>"Roboto", Helvetica, Arial, sans-serif;</dd>

              <dt>Body Font Bold:</dt>
              <dd style='font-family: "Roboto", Helvetica, Arial, sans-serif; font-weight: 800;'>"Roboto", Helvetica, Arial, sans-serif;</dd>

              <dt>Heading Font (@font-family-serif):</dt>
              <dd style='font-family: "GuardianEgyptianWeb", Times, "Times New Roman", serif; font-weight: 300'>GuardianEgyptianWeb, Times, "Times New Roman", serif;</dd>

              <dt>Heading Font Bold:</dt>
              <dd style='font-family: "GuardianEgyptianWeb", Times, "Times New Roman", serif; font-weight: 500;'>GuardianEgyptianWeb, Times, "Times New Roman", serif;</dd>
            </dl>
            <div class="sg-markup-controls"><a class="sg-btn--top" href="#top">Back to Top</a></div>
          </div><!--/.sg-font-stacks-->
        </div><!--/.sg-info-->

        <?php renderFilesInFolder('markup'); ?>
      </div><!--/.sg-container-->
    </div><!--/.sg-main-->
  </div><!--/.sg-wrapper-->

  <!--[if gt IE 8]><!--><script src="vendor/prism/prism.js"></script><!--<![endif]-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="js/sg-scripts.js"></script>

  <script src="https://www.satselixia.no/bundles/scriptsExternal?v=poSCbip9EVnBTt67ZLTDG_BtRVQzzVxJMhyjjQgQrw01"></script>
    <script src="https://www.satselixia.no/bundles/scriptsInternal?v=w9qQoIN2zLs0ih1GlNKMz7cNXyq3KpeqQlkZL4kIg1Y1"></script>

</body>
</html>

