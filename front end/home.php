<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>viztoza co</title>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <!-- Main css -->
    <link rel="stylesheet" href="./css/style1.css" />
  </head>

  <body>
    <header class="header">
      <a href="#" class="logo"> <i class="fas fa-wallet"></i> viztoza </a>

      <nav class="navbar">
        <a href="#home">home</a>
        <a href="#plan">offers and promos</a>
        <a href="#shop">shop</a>
        <a href="#about">about</a>
        <a href="#services">services</a>
        <a href="#contact">contact</a>
        <a
          href="https://bot.dialogflow.com/c7a73d05-58f0-4d89-a291-3c8a99bdf809"
          target="_blank"
          >chatbot</a
        >
      </nav>
      <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <a href="cart.php" class="fas fa-shopping-cart"></a>
        <div class="fas" id="login-btn"></div>
      </div>
    </header>

    <section class="home" id="home">
      <div class="content">
        <h3><span>Welcome to Viztoza</span> Batiks</h3>
        <a href="#shop" class="btn">shop now</a>
      </div>

      <img src="../img/bottom_wave.png" class="wave" alt="" />
    </section>

    <section class="plan" id="plan">
      <h1 class="heading">Offers and <span>Promos</span></h1>

      <div class="box-container">
        <div class="box">
          <h3 class="title">Hot</h3>
          <h3 class="day">Limited Bundle</h3>
          <i class="fas fa-clock"></i>
          <div class="list">
            <p>one selected Batik wear <span class="fas fa-check"></span></p>
            <p>two tradition wools<span class="fas fa-check"></span></p>
            <p>three day delivery <span class="fas fa-check"></span></p>
            <p>Cash on Delivery <span class="fas fa-check"></span></p>
          </div>
          <div class="amount"><span>Rs.</span>6,000</div>
        </div>

        <div class="box">
          <h3 class="title">Sale</h3>
          <h3 class="day">40% off on all</h3>
          <i class="fas fa-dollar icon"></i>
          <div class="list">
            <p>any selected batik wear <span class="fas fa-check"></span></p>
            <p>no return <span class="fas fa-check"></span></p>
            <p>Card payments only <span class="fas fa-check"></span></p>
            <p>one-two day delivery <span class="fas fa-check"></span></p>
          </div>
          <div class="amount"><span>from Rs.</span>1,000</div>
        </div>

        <div class="box">
          <h3 class="title">new</h3>
          <h3 class="day">free delivery</h3>
          <i class="fas fa-car-side icon"></i>
          <div class="list">
            <p>order within today <span class="fas fa-check"></span></p>
            <p>orders on all ranges <span class="fas fa-check"></span></p>
            <p>Cash on delivery <span class="fas fa-check"></span></p>
            <p>One-Two day delivery <span class="fas fa-check"></span></p>
          </div>
        </div>
      </div>
    </section>
<!-- Product card -->

    <section class="shop" id="shop">
      <h1 class="heading">Our <span> Products </span></h1>
      <ul class="cards4">

      <?php 
try {
    $conn = new PDO("mysql:host=localhost;dbname=sapiru", "root", "");
    $stmt = $conn->query("SELECT * FROM advertisement");
    while ($row = $stmt->fetch()) {
?>
        <li> 
        <a  class="card4">
            <img src="../uploads/<?php echo $row['image']; ?>" class="card__image4" alt="" />
            <div class="card__overlay4">
              <div class="card__header4">    
                <div class="card__header-text4">
                  <h3 class="card__title4"><?php echo $row['header']; ?> : 1m</h3>   
                  <h3 class="card__title41">Rs <?php echo $row['price']; ?>.00</h3>
                  <form action="details.php" method="post">
                  <input type="hidden" name="item_id" value="<?php echo $row['iid']; ?>">
                  <input type="submit" value="Visit" class="btns" /></form>
                </div>
              </div>
              <p class="card__description4"></p>
            </div>
        </a>
        </li>

        <?php
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
        </ul>
        </section>

<!-- end -->
    <section class="about" id="about">
      <div class="image">
        <img src="../img/main3.jpg" style="border-radius: 10px" alt="" />
      </div>

      <div class="content">
        <h3>premium <span>batik</span> Distributor</h3>
        <p>
          Welcome to our website dedicated to Batik wear.Viztoza is a clothing
          platform Established in 2022 to provide tremendous batik wear with a
          taste of elegancy and class!Viztoza is confronted in Hand-knitted
          Batik Wear , Knitted by the finest artists in Asia.THe fabrication is
          not just Quality but it also a voice of style and fashion.Located in
          the heart of Matara and shared across the island.
        </p>
      </div>
    </section>

    <div class="dog-food">
      <div class="image">
        <img src="../img/main2.png" style="border-radius: 10px" alt="" />
      </div>

      <div class="content">
        <h3><span>What do</span> We Offer?</h3>
        <p>
          Still Struggling to find that right fit? We got you covered!! Viztoza
          offers range of batik wear freshly Knitted and stiched to neet all
          your needs, THe premium batik we provide are concentrated towards to
          all the women out of there with different styles and fashions to meet
          your expectations and standards.In Addition, we are providing Delivery
          services Islandwide with 24/7 operating agents ready for inquiries
          along with secure payment methods and quick delivery to all our
          beloved customers.The batik attires derives from our talented artists
          pouring all the colors of the world to there needles and to our shop
          striahgt to your doorsteps.
        </p>
        <div class="amount">Starting at Rs.2000 Onwards</div>
      </div>
    </div>

    <div class="dog-sup">
      <div class="image">
        <img src="../img/delivery.png" style="border-radius: 10px" alt="" />
      </div>

      <div class="content">
        <h3>delivery <span> process </span></h3>
        <p>
          We understand the importance of fast delivery therefore look out we
          are providing delivery within 24/hrs to selected areas.For regions
          outside the capital city the estimated delivery time would be of two
          to three working days.Delivery is handled by our master couriers who
          have provided service for over two years and is the best hands to
          entrust your package.
        </p>
      </div>
    </div>

    <div class="dog-aso">
      <div class="image">
        <img src="../img/return.png" style="border-radius: 10px" alt="" />
      </div>

      <div class="content">
        <h3><span> complains/return </span> Policy</h3>
        <p>
          An complain? we truely ask for your pardon on the bruise we have
          caused and we aim to make it right by proper compensation and provide
          a better service.To make a complaint please refer to the "contact"
          page and fill up the relevant details to submit an complain,The
          submitted complain will be reviewed by our agents and relevant agent
          will contact you with pardon. returns will be accepted however note
          that proper inspection of the good will be done by our agents to make
          sure reliability and after two to three working days the return will
          be accepted and immediately money back process will be applied.
        </p>
        <div class="amount">
          NOTE THAT RETURN IS ONLY FOR 7 DAYS AFTER PURCHASE
        </div>
      </div>
    </div>

    <section class="services" id="services">
      <h1 class="heading">our <span>services</span></h1>

      <div class="box-container">
        <div class="box">
          <i class="fas fa-star"></i>
          <h3>Premium Batik</h3>
          the Finest batik in Sri lanka at your fingertips
        </div>

        <div class="box">
          <i class="fas fa-car"></i>
          <h3>Day Delivery</h3>
          one day delivery service islandwide upon order dispatch.
        </div>

        <div class="box">
          <i class="fas fa-boxes"></i>
          <h3>coperate orders</h3>
          Handling coperate orders for batik wear with bulk discounts and
          installment access.
        </div>

        <div class="box">
          <i class="fas fa-credit-card"></i>
          <h3>Security Payment</h3>
          Secure payment structure with Cash-in-Hand accessability to our
          customers.
        </div>

        <div class="box">
          <i class="fas fa-dollar"></i>
          <h3>Money back Gurantee</h3>
          100% guranteed money return policy to customers within 2-3 Working
          days.
        </div>

        <div class="box">
          <i class="fas fa-phone"></i>
          <h3>24/7 assistant</h3>
          Help and support is open for customers 24/7 to recieve help and
          assistant from our agents via direct hotline or emails.
        </div>

        <div class="box">
          <i class="fas fa-gift"></i>
          <h3>Incentives</h3>
          Stay tune for Pop up offers and seasonal discounts with varity of
          promotions.
        </div>

        <div class="box">
          <i class="fas fa-headset"></i>
          <h3>24/7 chatbot</h3>
          Assistant ChatBot on standby to provide detailed and handfull
          information which could be useful about our service.
        </div>
      </div>
    </section>

    <section class="contact" id="contact">
      <div class="image">
        <img src="../img/calls.png" alt="" />
      </div>

      <form method="post" action="../back end/send_message_process.php">
        <h3>contact us</h3>
        <input type="text" name="name" placeholder="your name" class="box" />
        <input type="email" name="email" placeholder="your email" class="box" />
        <input
          type="tumber"
          name="number"
          placeholder="your phone number"
          class="box"
        />
        <textarea
          name="message"
          placeholder="your message"
          id=""
          cols="30"
          rows="10"
        ></textarea>
        <input type="submit" value="send message" class="btn" />
      </form>
    </section>

    <section class="footer">
      <img src="../img/top_wave.png" alt="" />

      <div class="share">
        <a href="https://www.facebook.com/" class="btn">
          <i class="fab fa-facebook-f"></i> facebook
        </a>
        <a href="https://www.instagram.com/" class="btn">
          <i class="fab fa-instagram"></i> instagram
        </a>
        <a href="https://mail.google.com/" class="btn">
          <i class="fas fa-comment"></i> email
        </a>
      </div>

      <div class="credit">
        <i class="fas fa-street-view"></i> viztoza batiks And Co Matara
      </div>
      <div class="credit"><i class="fas fa-phone"></i> +94 123 3455</div>
    </section>

    <script src="./js/behav.js"></script>
  </body>
</html>
