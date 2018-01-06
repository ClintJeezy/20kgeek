<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Application Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css" />
    <link rel="stylesheet" href="css/formstyle.css">
  </head>
  <body>

    <div class="container">
        <h1 class="brand"><span>Application</span> Form</h1>
    </div>
    <div class="wrapper animated bounceInLeft">
    <div class="company-info">
        <h3>Perequisite</h3>
        <ul>
            <li>Must have a pc(laptop)</li>
            <li>(555) 555-5555</li>
            <li>test@acme.test</li>
        </ul>
    </div>
    <div class="contact">
        <h3>Email Us</h3>
        <form class="" action="index.html" method="post">
          <p>
            <label>First Name</label>
            <input type="text" name="firstname" required>
          </p>

          <p>
            <label>Last Name</label>
            <input type="text" name="lastname" required>
          </p>

          <p>
            <label>Email</label>
            <input type="email" name="email" required>
          </p>

          <p>
            <label>Phone Number</label>
            <input type="text" name="phonenumber" required>
          </p>

          <p>
            <label for="">Occupation</label>
            <input type="text" name="occupation" required>
          </p>


          <p>
            <label for="">Experience</label>
            <select name="Select" required>
              <option value="beginners">Beginners</option>
              <option value="intermediate">Intermediate</option>
              <option value="advance">Advance</option>
            </select>
          </p>

          <p>
            <label for="">Choose a Package</label>
            <select  name="Select" required>
              <option value="democlass">Demo Class</option>
              <option value="founderclass">Founder Class</option>
              <option value="masterclass">Master Class</option>
            </select>
          </p>

          <p>
            <label for="">Lectures Scheldule</label>
            <select name="Select" required>
              <option value="beginners">Morning 9am - 12pm</option>
              <option value="intermediate">Afternoon 1pm - 3pm</option>
              <option value="advance">Evening 4pm - 6pm</option>
              <option value="weekend">Weekend 12pm - 2pm</option>
            </select>
          </p>

          <p class="full">
            <label for="">Select a Program</label>
            <select name="Select" required>
              <option value="mobile_app">Mobile App Development</option>
              <option value="web_design">Web Design</option>

            </select>
          </p>


          <p class="full">
            <label for="">Message</label>
            <textarea name="message" rows="5" ></textarea>
          </p>
          <p class="full">
            <button onclick="processForm()">Submit</button>
          </p>
        </form>
    </div>
    </div>
    <footer>
      <p> Powered by Ctrek Tech Hub. CopyRight &copy; 2018.</p>
    </footer>

    <script type="text/javascript">

      var freepackage
      function processForm(){
        alert('Make Your Payment')
      }
    </script>

  </body>
</html>
