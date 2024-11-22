<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>4th International Quality Education Conference (IQEC)</title>
  <style>
   * {
      box-sizing: border-box;
    }

    /* Ensure the body and html take up full height and width of the screen */
    html, body {
      margin: 0;
      padding: 0;
      width: 100%;
      height: 100%;
      overflow-x: hidden; /* Prevent horizontal scrolling */
      font-family: Arial, sans-serif;
    }

    body {
      font-family: 'Helvetica Neue', Arial, sans-serif;
      background-color: #fff;
      margin: 0;
      padding: 0;
      color: #333;
    }

    header {
      background-color: #fff;
      padding: 20px;
      color: white;
      text-align: center;
      position: relative;
    }

    header img {
      width: 80px;
      position: absolute;
      top: 10px;
      left: 10px;
    }

    header h1 {
      margin: 0;
      font-size: 1.8rem;
    }

    header .org-logo {
      position: absolute;
      top: 10px;
      right: 10px;
      width: 80px;
    }

    nav {
      display: flex;
      justify-content: center;
      background-color: #fff;
      padding: 15px 0;
    }

    nav a {
      color: green;
      text-decoration: none;
      padding: 10px 20px;
      font-weight: bold;
    }

    nav a:hover {
      background-color: #004f99;
      border-radius: 5px;
    }

    h1 {
      color: #fff;
      font-size: 2.5rem;
    }

    h2 {
      color: green;
      font-size: 2.5rem;
    }

    .carousel {
      position: relative;
      text-align: center;
      color: white;
      margin: 40px 0;
    }

    .carousel img {
      width: 100%;
      height: 500px;
      object-fit: cover;
      border-radius: 8px;
      box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    }

    .countdown {
      display: flex;
      justify-content: center;
      align-items: center;
      color: #fff;
      background: rgba(0, 0, 0, 0.5);
      padding: 20px;
      border-radius: 8px;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 80%;
    }

    .timer-container {
      display: inline-flex;
      gap: 10px;
      justify-content: center;
      margin-bottom: 20px;
    }

    .timer-container .col {
      text-align: center;
    }

    .countdown .col {
      text-align: center;
      padding: 0 15px;
    }

    .countdown h1 {
      margin: 0;
      font-size: 3rem;
    }

    .countdown small {
      font-size: 1rem;
      text-transform: uppercase;
    }

    .event-info {
      background: rgba(0, 0, 0, 0.6);
      color: white;
      padding: 20px;
      border-radius: 8px;
      width: 80%;
      margin: 0 auto;
      font-size: 1.2rem;
      position: absolute;
      bottom: 10px;
      left: 50%;
      transform: translateX(-50%);
    }

    section {
      width: 90%;
      margin: 0 auto;
      padding: 20px;
    }

    footer {
      background-color: #003366;
      color: white;
      text-align: center;
      padding: 20px;
      position: relative;
      bottom: 0;
      width: 100%;
    }

    .footer-info {
      margin: 15px 0;
    }

    .social-media-icons {
      margin-top: 10px;
    }

    .social-media-icons a {
      margin: 0 10px;
      color: white;
      text-decoration: none;
    }

    .social-media-icons a:hover {
      color: #ffcc00;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      nav {
        flex-direction: column;
      }

      .carousel img {
        width: 100%;
      }

      .countdown h1 {
        font-size: 2rem;
      }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }
        h1, h2, h3 {
            color: #2c3e50;
        }
        .session {
            margin-bottom: 20px;
        }
        .time {
            font-weight: bold;
        }
        .session-title {
            font-style: italic;
            font-weight: bold;
        }
        .panelists, .speakers {
            margin-left: 20px;
        }
        .lunch-break, .break {
            font-weight: bold;
            color: #e74c3c;
        }
     
    }
  </style>
   <!-- Favicon Link -->
   <!-- Alternatively, if you're using a .png favicon -->
  <link rel="icon" href="favicon-16x16.png" type="image/png">
</head>
<body>

  <!-- Header -->
  <header>
    <img src="nobg.png" alt="Event Logo">
    <img src="nobg.png" alt="TEN/MET Logo" class="org-logo">
  </header>

  <!-- Navigation -->
  <nav>
     <a href="https://www.tenmet.or.tz">Home</a>
    <a href="#venue">Venue</a>
    <a href="#program">Program</a>
    <a href="#speakers">Speakers</a>
    <a href="#registration">Registration</a>
    <a href="#sponsors">Sponsors</a>
    <a href="#conferences">Past Conferences</a>
  </nav>

  <!-- Event Title -->
  <h2 align="center">4th International Quality Education Conference (IQEC)</h2>
  <p align="center"><img src="calendar.png"width="15"  height="15" alt="Calendar">12th – 14th November 2024 | <img src="location.png" width="15" height="15"> Julius Nyerere International Convention Centre, Dar es Salaam, Tanzania</p>

  <!-- Photo Carousel with Countdown Timer -->
  <section class="carousel">
    <img src="headerimage.png" alt="Conference Image">

    <!-- Countdown Timer -->
    <div id="countdown-section" class="countdown">
      <div class="timer-container">
        <div class="col">
          <h1 id="days">0</h1>
          <small class="text-uppercase">days</small>
        </div>
        <div class="col">
          <h1 id="hours">0</h1>
          <small class="text-uppercase">hours</small>
        </div>
        <div class="col">
          <h1 id="minutes">0</h1>
          <small class="text-uppercase">minutes</small>
        </div>
        <div class="col">
          <h1 id="seconds">0</h1>
          <small class="text-uppercase">seconds</small>
        </div>
      </div>
    </div>
  </section>

  <!-- Countdown Script -->
  <script>
        const formatTime = (time) => (time < 10 ? `0${time}` : time); // Add leading zero if time < 10

        const countdownTimer = setInterval(() => {
            const eventDate = new Date("November 12, 2024 09:00:00").getTime(); // Event date
            const now = new Date().getTime(); // Current time
            const timeRemaining = eventDate - now; // Difference between event and current time

            if (timeRemaining > 0) {
                // Calculate time components
                const days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
                const hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);

                // Display time with leading zeros for hours, minutes, and seconds
                document.getElementById('days').innerHTML = days; // No need to add leading zero for days
                document.getElementById('hours').innerHTML = formatTime(hours);
                document.getElementById('minutes').innerHTML = formatTime(minutes);
                document.getElementById('seconds').innerHTML = formatTime(seconds);
            } else {
                clearInterval(countdownTimer); // Stop the timer once the event time is reached
                document.getElementById('countdown-section').innerHTML = "The event has started!";
            }
        }, 1000);
    </script>

  <!-- Event Details Section -->
  <section>
    <div>
      <h2>About the Event</h2>
      <p>In an era marked by unprecedented global challenges, including climate change, economic instability, and social inequalities, the resilience of education systems has never been more critical. Education serves as the foundation upon which societies build their future, yet many systems around the world are struggling to cope with rapid changes and uncertainties. The International Quality Education Conference (IQEC) aims to address these challenges head-on, focusing on the theme <strong>"Fostering Resilient Education Systems for Sustainable Development in Africa."</strong> This theme emphasizes creating education systems that are robust and adaptable, designed to support sustainable development goals. It focuses on ensuring that education systems can effectively respond to challenges, integrate sustainable practices, and provide learners with the skills and knowledge needed for a sustainable future.
The Conference will be conducted with other education stakeholders, including UNICEF.</p>
<h2>Rationale of the Conference</h2>
<p>Education systems are often at the frontline of societal change, and their ability to adapt and evolve is essential for fostering sustainable development. Resilient education systems are not just about maintaining functionality during crises; they are about ensuring that education remains a powerful tool for societal advancement and equity. As global challenges continue to evolve, the need for education systems that can adapt to shifting circumstances, integrate sustainable practices, and ensure inclusivity has become increasingly urgent.
</p>
<p>This year has been designated as the Year of Education by African Union (AU), underscoring the global and regional commitment to advancing educational quality and accessibility. This designation provides a unique opportunity to focus on strengthening education systems worldwide and to highlight the critical role of education in achieving sustainable development goals. The IQEC conference is timely, offering a platform to leverage this regional momentum and address how Tanzania, and other African countries, can build more resilient education systems.
</p>
<p>In Tanzania, this need is particularly pressing. The country faces unique challenges including rapid population growth, regional disparities in educational access and quality, and vulnerability to climate change impacts. The IQEC conference seeks to contextualize these issues by addressing how Tanzania and other African countries can build a more resilient education system. By focusing on the specific needs and , in Dar es Salaam, Julius Nyerere International Convention Centre.
opportunities, the conference aims to generate actionable insights and strategies that are tailored to the local environment, while aligning with global and regional best practices.
The conference will explore how Africa education systems and Tanzania in particular can better withstand and adapt to environmental, economic, and social pressures. It will provide a platform for education stakeholders to share their experiences and collaborate on solutions that are both innovative and practical. The IQEC conference seeks to drive meaningful progress in enhancing the resilience and sustainability of education systems in Tanzania and beyond.</p>
    </div>
  </section>

   <!-- Event Program -->
  <section id="program" class="program">
      
   
    <h2>Event Program</h2>

    <!-- Day One -->
    <h2>Day One: Tuesday, 12th November 2024</h2>

    <div class="session">
        <span class="time">7:00am – 8:30am:</span>
        <span class="session-title">Check-in & Registration</span>
        <ul class="speakers">
            <li>Networking and Exhibition</li>
            <li>Relevant Videos on Display</li>
            <li>Breakfast for all Invited Guests</li>
        </ul>
    </div>

    <div class="session">
        <span class="time">8:30am – 9:00am:</span>
        <span class="session-title">Guest of Honor Arrival</span>
        <ul class="speakers">
            <li>Visit Exhibitors led by Ms. Martha Makala, TEN/MET Coordinator</li>
        </ul>
    </div>

    <div class="session">
        <span class="time">9:00am – 10:30am:</span>
        <span class="session-title">Opening Ceremony</span>
        <ul class="speakers">
            <li>National Anthem by Special Choir</li>
            <li>Opening Remarks: Ms. Martha Makala, National Coordinator, TEN/MET</li>
            <li>Remarks from TEN/MET Board Chair: Ms. Faraja Nyalandu</li>
            <li>Remarks from Student Representatives (Chemba District)</li>
            <li>Remarks from Partners: UNICEF</li>
            <li>Remarks from Hon. Prof. Adolf Mkenda, Minister for Education</li>
            <li>Opening Speech by Guest of Honor: Hon. Dr. Dotto Biteko, Deputy Prime Minister</li>
        </ul>
    </div>

    <div class="session">
        <span class="time">10:30am – 11:00am:</span>
        <span class="session-title">Group Photo</span>
    </div>

    <div class="session">
        <span class="time">11:00am – 12:00pm:</span>
        <span class="session-title">Panel Discussion: Reflections on the Main Conference Theme</span>
        <ul class="panelists">
            <li>Dr. Sara Ruto – Program Lead, Echidna Giving</li>
            <li>David Kobia – EOL Regional Education Advisor</li>
            <li>Aaron Chansa – Executive Director, NAQEZ, Zambia</li>
        </ul>
    </div>

    <div class="session">
        <span class="time">12:00pm – 1:30pm:</span>
        <span class="session-title">Keynote Address: Investing in Human Capital</span>
        <ul class="panelists">
            <li>Hon. Prof. Adolf Mkenda, Minister for Education</li>
            <li>Discussants: Richard Olong, Dr. Ador Riak, Raphael Maganga</li>
        </ul>
    </div>

    <div class="lunch-break">1:30pm – 2:30pm: Lunch Break</div>

    <div class="session">
        <span class="time">2:30pm – 4:00pm:</span>
        <span class="session-title">Paper Presentation: Assessing the Implementation of Curriculum Reforms in Tanzania</span>
        <ul class="speakers">
            <li>Ministry of Education Science and Technology (MoEST)</li>
            <li>Chair: Dr. Peter S. Kopweh, St. John's University</li>
        </ul>
    </div>

    <div class="session">
        <span class="time">4:00pm – 4:15pm:</span>
        <span class="session-title">Wrap-up and Reflections</span>
    </div>

    <!-- Day Two -->
    <h2>Day Two: Wednesday, 13th November 2024</h2>

    <div class="session">
        <span class="time">7:00am – 8:30am:</span>
        <span class="session-title">Check-in & Registration</span>
    </div>

    <div class="session">
        <span class="time">8:30am – 10:00am:</span>
        <span class="session-title">Paper Presentation: The Role of Legal Reforms in Shaping Tanzania’s Education Future</span>
        <ul class="panelists">
            <li>Adv. Innocent Mgeta, Ministry of Education</li>
            <li>Discussants: Adv. Anna Henga, Joseph Wasikhongo</li>
        </ul>
    </div>

    <div class="session">
        <span class="time">10:00am – 11:30am:</span>
        <span class="session-title">Paper Presentation: Innovative Approaches to Climate Change Education</span>
        <ul class="speakers">
            <li>Aga Khan Foundation</li>
            <li>Piero Meda, Executive Director, We World</li>
        </ul>
    </div>

    <div class="break">11:30am – 11:40am: Health Break</div>

    <div class="session">
        <span class="time">11:40am – 12:50pm:</span>
        <span class="session-title">Panel Discussion: Harnessing AI to Overcome Barriers to Digital Education</span>
        <ul class="panelists">
            <li>Mwasi Wilmore, CEO, Ubongo Kids</li>
            <li>Jumanne Mtambalike, CEO, Sahara Ventures</li>
            <li>Dr. Ayoub Kafyulilo, Education Specialist, UNICEF</li>
        </ul>
    </div>

    <div class="lunch-break">12:50pm – 1:50pm: Lunch Break</div>

    <div class="session">
        <span class="time">1:50pm – 3:00pm:</span>
        <span class="session-title">Paper Presentation: Equitable Access to Quality Pre-Primary Education</span>
        <ul class="speakers">
            <li>UNICEF</li>
            <li>TECDEN</li>
        </ul>
    </div>

    <div class="session">
        <span class="time">3:00pm – 4:15pm:</span>
        <span class="session-title">Panel Discussion: International Aid and Resource Mobilization for Education Financing</span>
        <ul class="panelists">
            <li>Semkae Kilonzo, Policy Forum</li>
            <li>Director of Policy Planning, MoEST</li>
            <li>Bavon Christopher, ActionAid Tanzania</li>
        </ul>
    </div>

    <div class="session">
        <span class="time">4:15pm – 4:30pm:</span>
        <span class="session-title">Wrap-up of Day Two</span>
    </div>

    <!-- Day Three -->
    <h2>Day Three: Thursday, 14th November 2024</h2>

    <div class="session">
        <span class="time">7:00am – 8:30am:</span>
        <span class="session-title">Check-in & Registration</span>
    </div>

    <div class="session">
        <span class="time">8:30am – 10:00am:</span>
        <span class="session-title">Panel Discussion: Empowering Africa’s Youth in Decision-Making</span>
        <ul class="panelists">
            <li>Policy Forum</li>
            <li>UNFPA</li>
            <li>Arafat Lesheve, Tanzania Youth Awards</li>
        </ul>
    </div>

    <div class="session">
        <span class="time">10:30am – 11:00am:</span>
        <span class="session-title">Entertainment by Local Theatre Group</span>
    </div>

    <div class="session">
        <span class="time">11:00am – 11:30am:</span>
        <span class="session-title">Presentation of Outcome Statement</span>
        <ul class="speakers">
            <li>Ms. Martha Makala, TEN/MET</li>
            <li>Rapporteurs</li>
        </ul>
    </div>

    <div class="session">
        <span class="time">11:30am – 12:00pm:</span>
        <span class="session-title">Closing Speech by Guest of Honor</span>
    </div>

    <div class="session">
        <span class="time">12:00pm – 12:30pm:</span>
        <span class="session-title">Conference Closing</span>
        <ul class="speakers">
            <li>Ms. Martha Makala, TEN/MET</li>
        </ul>
    </div>

    <div class="lunch-break">12:30pm: Farewell Lunch</div>

        </div>
    <!-- More sessions here -->
  </section>

  <!-- Registration Section -->
  <section id="registration">
    <h2>Register for the Conference</h2>
    <p>Fill out the registration form to secure your spot at the 4th International Quality Education Conference (IQEC):</p>
    <a href="https://bit.ly/IQEC-REGISTRATION" target="_blank" style="background-color:green;color:white;padding:10px 20px;text-decoration:none;border-radius:5px;">Register Now</a>
  </section>

  <!-- Speakers Section -->
  <section id="speakers">
    <h2>Speakers</h2>
    <div class="speakers-list">
      <div><img src="profadolfmkenda.jpeg" width ="150" height ="150" alt="Speaker 1"><p>Prof. Adolf Mkenda</p><p>Minister of Education Science and Technology</p></div>
      <div><img src="speaker2.jpg" alt="Speaker 2"><p>Speaker Name</p></div>
      <!-- More speakers here -->
    </div>
  </section>

  <!-- Sponsors Section -->
  <section id="sponsors">
    <h2>Sponsors</h2>
    <div class="sponsors">
      <img src="sponsor1.png" alt="Sponsor 1">
      <img src="sponsor2.png" alt="Sponsor 2">
      <!-- More sponsors here -->
    </div>
  </section>
   <!-- Conferences Section -->
  <section id="conferences">
    <h2>Past Conferences</h2>
    <div class="sponsors">
      <a href="https://bit.ly/3W89kny" target="_blank" style="background-color:green;color:white;padding:10px 20px;text-decoration:none;border-radius:5px;">2023 IQEC Report</a>
  </section>
      <!-- More sponsors here -->
    </div>
  </section>
<section id="venue">
<iframe align = "center"
src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15791.39989171889!2d39.273611099999996!3d-6.8110656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185c4b13ab3b27db%3A0x5e80e2765959908e!2sJulius%20Nyerere%20International%20Convention%20Centre!5e0!3m2!1sen!2stz!4v1696093308133!5m2!1sen!2stz"
    width="600"
    height="450"
    style="border:0;"
    allowfullscreen=""
    loading="lazy"></iframe>
</section>

  <!-- Footer -->
  <footer>
    <p>&copy; 2024 Tanzania Education Network/Mtandao wa Elimu Tanzania</p>
    <div>
    <p><strong>Phone:</strong> +255 (0) 22 2775324 |<strong>Email:</strong> <a href="mailto:info@tenmet.or.tz" style="color: #fff;">iqec2024@tenmet.or.tz</a></p>
    <p>Plot 301, House # 1,
      Lwehabura Road, Mikocheni A
      P.O.BOX 13547, Dar Es Salaam.</p>
  </div>
    <div class="social-media-icons">
      <a href="https://facebook.com/TanzaniaEducationNetworkTENMET">Facebook</a>
      <a href="https://x.com/ten_met">Twitter</a>
      <a href="https://www.instagram.com/tenmet">Instagram</a>
    </div>
  </footer>

</body>
</html>
