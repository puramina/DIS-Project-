<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0,maximum-scale=1.0, minimum-scale=1.0";>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/main.css">
  </head>
  <body>
    <header id="header" class="header">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 ml-auto">
            <img src="img/logo.png">
          </div>
          <div class="col-lg-5 ml-auto">
            <nav>
              <ul class="menu d-flex justify-content-center">
                <li class="menu__item">
                  <a href="#">
                    • Home •
                  </a>
                </li>
                <li class="menu__item">
                  <a href="#">
                    • Grades •
                  </a>
                </li>
                <li class="menu__item">
                  <a href="#">
                    • Discussion •
                  </a>
                </li>
              </ul>
            </nav>
            <div class="col-lg-2">
              <div class="title">
                Assignments
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <section id="fuatures" class="fuatures">
      <div class="container">
<div class="row">
  <div class="col-lg-12">
    <div class="title"
    <p class="title__text">
     Student Management System
    </p>
  </div>
</div>
</div>
      </div>
      <div class="row">
        <div class="feature">
          <h3 class="feature__title">
            Create Thread
            <p class="feature__text"> Message</p>
            <div class="field">
              <input type="text" name="title" id="title" value size="45" maxlength="300" aria-required="true">
              <span class="fieldErrortext"></span>
            </div>
          </h3>
      </div>
    </section>
    <section id="touch" class="touch">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="touch__title">
              TEXT
              <div class="touch__text">
               <textarea name="description" rows="15" cols="95"></textarea>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer id="footer" class="footer">
      <div class="container">
        <div class="footer__title">
          <div class="col-lg-12">
            ATTACHMENTS
            <div class="footer__text">
              <label for="msgAttachment_localBrowse">Attach File:
              </label>
              <input class="hiddenInput" type="file" tabindex="-1"  aria-hidden="true" name="msgAttachment_LocalFile0" id="msgAttachment_chooseLocalFile" >
              <p class="taskbuttondiv" id="bottom_submitButtonRow">

			<input id="bottom_cancelBtn" class="button-2" type="button" name="bottom_cancelBtn" role="button" value="Cancel" onclick="file:///C:/Users/%D0%90/Desktop/Bootstrap/index.html';">
			<input id="bottom_saveDraftBtn" class="button-2" type="button" name="bottom_saveDraftBtn" role="button" value="Save Draft" onclick="saveDraft();">
		<input id="bottom_submitBtn" class="submit button-1" name="bottom_submitBtn" type="submit" role="button" value="Submit" onClick="">
          </div>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
