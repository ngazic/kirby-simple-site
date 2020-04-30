<?php snippet('header') ?>

<section>

  <div id="padding">
    <form action="./contact-us_files/mailer.php" method="post" enctype="multipart/form-data">
      <div>
        <div class="message-text"><span style="font-size:17px; font-weight:bold; "><?= $page->formTitle() ?>
          </span><br><span><span style="font-size:13px; font-weight:bold; "><u>Toll Free</u></span><span
              style="font-size:13px; ">: </span><span style="font-size:14px; "><?= $page->phone() ?></span><span
              style="font-size:13px; "><br></span><span
              style="font-size:13px; font-weight:bold; "><u>Email</u></span><span style="font-size:13px; ">:
            </span><span style="font-size:14px; "><?= $page->email() ?></span></span></div>
        <label>Name:</label> *<br>
        <input class="form-input-field" type="text" value="" name="form[element0]" size="40" required><br><br>

        <label>Email Address:</label> *<br>
        <input class="form-input-field" type="text" value="" name="form[element1]" size="40" required><br><br>

        <label>How can we help you?</label> *<br>
        <textarea class="form-input-field" name="form[element2]" rows="8" cols="38" required></textarea><br><br>

      
        <input type="hidden" name="form_token" value="14607357035eaa3a1c1424c">
        <input class="form-input-button" type="reset" name="resetButton" value="Reset">
        <input class="form-input-button" type="submit" name="submitButton" value="Submit">
      </div>
    </form>

    <br>
    <div class="form-footer"><span style="font-size:15px; font-weight:bold; "><u>Note</u></span><span
        style="font-size:15px; ">: If you are having difficulties with our contact us form above, send us an email to
        <?= $page->supportEmail() ?> (copy &amp; paste the email address)</span><span
        style="font-size:13px; "><br></span></div><br>

  </div>

</section>

<?php snippet('footer') ?>