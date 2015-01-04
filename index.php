<!DOCTYPE html>

<head>
<meta http-equiv="CACHE-CONTROL" content="NO-CACHE" />
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<title>PHP Form Submission</title>
<link rel="stylesheet" type="text/css" href="main.css" />
<link rel="stylesheet" type="text/css" href="form.css" />
</head>
<body>
<div class="page-container">
  <div class="row">
    <h1>PHP Form Submission</h1>
  </div>
  <div class="row">
    <div class="form-group">
      <?php include("contact-submit.php"); ?>
    </div>
    <div class="grid-12 form-group">
      <form action="index.php" class="form-horizontal"  name="ContactForm" id="ContactForm" method="post" onsubmit="javascript:SubmitContact();return false;">
        <fieldset>
          <div class="form-group">
            <div class="grid-12 item-required">
              <label for="inputName"  id="inputNameLabel"  class="field-required" >Name Field is required</label>
              <input type="text" class="form-control" name="inputName" id="inputName" placeholder="Name">
            </div>
          </div>
          <div class="form-group">
            <div class="grid-12 item-required">
              <label for="inputPhone"  id="inputPhoneLabel" class="field-required" >Phone Field is required</label>
              <input type="tel" class="form-control" name="inputPhone" id="inputPhone" placeholder="Phone">
            </div>
          </div>
          <div class="form-group">
            <div class="grid-12 item-required">
              <label for="inputEmail" id="inputEmailLabel" class="field-required" >Email Field is required</label>
              <input type="email" class="form-control" name="inputEmail" id="inputEmail" placeholder="Email">
            </div>
          </div>
          <div class="form-group">
            <div class="grid-12 item-required">
              <label for="inputMessage" id="inputMessageLabel" class="field-required" >Message Field is required</label>
              <textarea rows="6" cols="50" class="form-control" name="inputMessage" id="inputMessage" placeholder="Message"></textarea>
            </div>
          </div>
          <div class="form-group">
            <div class="grid-4 text-left">
              <button type="submit" class="btn">Submit</button>
            </div>
          </div>
          <div class="form-group">
            <div class="grid-10">
              <div id="ContactForm-form-result" class="form-result"></div>
            </div>
          </div>
        </fieldset>
      </form>
    </div>
  </div>
</div>
<script language="JavaScript" type="text/javascript" src="jquery.js"></script> 
<script language="JavaScript" type="text/javascript" src="scripts.js"></script>
</body>
</html>
