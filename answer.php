<!DOCTYPE html>
<!-- ICS2O-Unit2-02-PHP-MDL -->
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="The Math program" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Mr. Coxall" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link
    rel="stylesheet"
    href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <link
    rel="apple-touch-icon"
    sizes="180x180"
    href="./apple-touch-icon.png" />
  <link
    rel="icon"
    type="image/png"
    sizes="32x32"
    href="./favicon-32x32.png" />
  <link
    rel="icon"
    type="image/png"
    sizes="16x16"
    href="./favicon-16x16.png" />
  <link rel="manifest" crossorigin="use-credentials" href="./site.webmanifest" />
  <title>The math program, JS</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">The Math Program, JS</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/notebook-animation.svg" alt="laptop image" />
      </div>
      <div class="page-content">Click the button to see the answers.</div>
      <br />
      <div class="page-content-answer">
        <!-- basic text -->
        <div id="add-math">
          <p>6 + 5 = ?</p>
        </div>
        <div id="subtract-math">
          <p>7 - 3 = ?</p>
        </div>
        <div id="multiply-math">
          <p>3 + 4 × 2 = ?</p>
        </div>
        <div id="divide-math">
          <p>(4 ÷ 2) + 3 = ?</p>
        </div>
        <div id="exponent-math">
          <p>5 + 2³ = ?</p>
        </div>
      </div>
      <br />
    </main>
  </div>
</body>

</html>