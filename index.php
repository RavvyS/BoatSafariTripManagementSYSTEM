<?php
    include_once 'header.php';
    ?>
   
    <div class="mySlides">
    <img id="image1" src="images/pic1.jpg">
    </div>
    <div class="container-btnn">
    <div class="btn-group">
    <button class="bttn1" type="button" id="btn1" onclick="loadData('btn1')"><b>1</b></button>
	<button class="bttn1" type="button" id="btn2" onclick="loadData('btn2')"><b>2</b></button>
	<button class="bttn1" type="button" id="btn3" onclick="loadData('btn3')"><b>3</b></button>
      </div>
        </div>
    <!-- wild waves section -->
    <div class="wwsafari-container">
        <div class="wwsafari-text">
          <h1>WildWaves Safari</h1>
          <center><hr width="60%" color="blue" /></center>
          <br />
          Embark on an enchanting journey through the heart of Sri Lanka's natural splendor with a Madu River boat safari. 
          Drift along the tranquil waters, bordered by lush mangrove forests teeming with diverse flora and fauna. 
          As the gentle breeze whispers through the palms, immerse yourself in the rhythmic pulse of nature. 
          Glide past vibrant birdlife, including kingfishers and herons, as they gracefully dance above the water's surface. 
          Encounter local fishermen skillfully navigating their traditional wooden boats, a testament to the timeless heritage of the region. With each bend of the river, 
          uncover hidden gems and unforgettable vistas, leaving you spellbound by the breathtaking beauty of Madu River.

        </div>
        <div class="wwsafari-img">
          <img class="wwsafari" src="images/boat2.jpg" alt="" width="100%" />
        </div>
      </div>
  
      <!-- help us section -->
      <div class="wwsafari-container">
        <div class="helpus-img1">
          <img class="wwsafari" src="images/bird.jpg" alt="" width="80%" />
        </div>
        <div class="wwsafari-text">
          <h1> Help Us</h1>
          <center><hr width="30%" color="blue" /></center>
          <br />
          Join hands in safeguarding the natural treasure of Sri Lanka's Madu River and its delicate ecosystem. 
          By supporting and donating to conservation efforts, 
          you become a crucial ally in preserving this pristine sanctuary for future generations. 
          Your contribution aids in initiatives aimed at maintaining the river's biodiversity, protecting its mangrove forests, 
          and ensuring sustainable tourism practices for activities like boat safaris. Together, we can foster awareness, 
          implement eco-friendly measures, and empower local communities to become stewards of their environment. 
          Every donation is a pledge to safeguard the Madu River's beauty and ecological balance, 
          ensuring its enduring legacy as a haven of natural wonder.
          <br>
          <br>
          <div class="donate-container">
                      <button class="donate"><a href="pay.php"> Donate </a></button>

            </div>
        </div>
      </div>

      <div class="comment-container">
        <center>
          <h1>Reviews <i class="fa-solid fa-people-group"></i></h1>
          <hr width="30%" color="blue" />
          <div class="comment-boxes">
            <div class="comment-box">
              <img src="images/prof.jpeg" alt="" />
              <h3>LEVI DEAN</h3>
              <p>"Exhilarating adventure, exceeded expectations! <br>Highly recommended experience!"</p>
              <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
              
            </div>
            <div class="comment-box">
              <img src="images/prof.jpeg" alt="" />
              <h3>JOHN CARTER</h3>
              <p>"Exceptional service, friendly staff, and breathtaking scenery.<br> Absolutely loved it!"</p>
              <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
              
            </div>
            <div class="comment-box">
              <img src="images/prof.jpeg" alt="" />
              <h3>ANNE ISSABELL</h3>
              <p>"Unforgettable journey, expertly guided, <br>felt safe and mesmerized"</p>
              <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
             
            </div>
          </div>
          <a href ="feedback.php"><button class="donate" style="color:white;">Add Feedback</button></a>
        </center>
        <br>

      </div>
      <?php
    include_once 'footer.php';
    ?>  

