<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Team Profile</title>
  <style>       
    body {
      background-color: #f9fafb;
      padding: 1rem;
      font-family: Arial, sans-serif;
    }

    h1 {
      font-size: 1.875rem;
      font-weight: 700;
      text-align: center;
      color: #000000;
      margin-bottom: 0.5rem;
    }

    p.subtitle {
      text-align: center;
      color: #4b5563;
      margin-bottom: 2rem;
    }

    .grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 1.5rem;
    }

    .card {
      background: white;
      padding: 1.5rem;
      border-radius: 0.5rem;
      box-shadow: 0 1px 2px 0 rgb(0 0 0 / 0.1);
      text-align: center;
    }

    .member-img {
      width: 150px;
      height: 150px;
      object-fit: cover;
      border-radius: 50%;
      margin-bottom: 1rem;
    }

    .role {
      color: #3b82f6;
      margin-bottom: 0.75rem;
      font-weight: bold;
    }

    .quote {
      color: #000;
      font-size: 0.95rem;
      margin-bottom: 1rem;
    }

    .card a {
      color: #2563eb;
      text-decoration: none;
    }

    .card a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div style="max-width: 80rem; margin: 0 auto;">
    <h1>GROUP 4EVER</h1>
    <p class="subtitle"><strong>Working together to achieve great things</strong></p>

    <div class="grid">
    
      <div class="card">
        <img src="images/den.jpeg" alt="John Denmark Ambrocio" class="member-img">
        <h3><em>John Denmark Ambrocio</em></h3>
        <p class="role">Team Leader</p>
        <p class="quote">"Tara rides"</p>
        <p>📞 9942238064</p>
        <p>🌐 <a href="https://github.com/superuser-00" target="_blank">GitHub</a></p>
        <p>✉️ <a href="mailto:ambrociojohndenmark_bsit@plmun.edu.ph">Gmail</a></p>
        <p>📘 <a href="https://www.facebook.com/share/19pGzPpyDu/" target="_blank">Facebook</a></p>
      </div>

  
      <div class="card">
        <img src="images/di.png" alt="Charles Diaz" class="member-img">
        <h3><em>Charles Diaz</em></h3>
        <p class="role">Member</p>
        <p class="quote">"生き甲斐"</p>
        <p>📞 9943374793</p>
        <p>🌐 <a href="https://github.com/kenZaid" target="_blank">GitHub</a></p>
        <p>✉️ <a href="mailto:diazcharleskenneth_bsit@plmun.edu.ph">Gmail</a></p>
        <p>📘 <a href="https://www.facebook.com/share/1C1ochZZNi/" target="_blank">Facebook</a></p>
      </div>

     
      <div class="card">
        <img src="images/ran.jpeg" alt="Rainier Gatdula" class="member-img">
        <h3><em>Rainier Gatdula</em></h3>
        <p class="role">Member</p>
        <p class="quote">"Eat. Sleep. Code. Cry. Repeat."</p>
        <p>📞 9351937943</p>
        <p>🌐 <a href="https://github.com/RainierGatdula" target="_blank">GitHub</a></p>
        <p>✉️ <a href="mailto:gatdularainierpaul_bsit@plmun.edu.ph">Gmail</a></p>
        <p>📘 <a href="https://www.facebook.com/share/1DH2SeJq14/" target="_blank">Facebook</a></p>
      </div>

     
      <div class="card">
        <img src="images/jp.jpg" alt="John Patrick J. Garcia" class="member-img">
        <h3><em>John Patrick J. Garcia</em></h3>
        <p class="role">Member</p>
        <p class="quote">"Philippians 4:13 Omnia possum in eo qui me confortat."</p>
        <p>📞 9610626066</p>
        <p>🌐 <a href="https://github.com/JohnPatrickJGarcia" target="_blank">GitHub</a></p>
        <p>✉️ <a href="mailto:garciajohnpatrick_bsit@plmun.edu.ph">Gmail</a></p>
        <p>📘 <a href="https://www.facebook.com/share/1FZjYrb4WK/" target="_blank">Facebook</a></p>
      </div>

     
      <div class="card">
        <h2>PHP Conditional Demo</h2>
        <?php
         
          $memberCount = 4;
          $leader = "John Denmark Ambrocio";
          $today = date("l");
          $score = 85;

         
          if ($memberCount > 3) {
              echo "<p>✅ Our group has more than three members.</p>";
          }

         
          if ($leader === "John Denmark Ambrocio") {
              echo "<p>👑 Leader is Denmark!</p>";
          } else {
              echo "<p>❌ Leader not identified.</p>";
          }

          
          if ($score >= 90) {
              echo "<p>🏆 Excellent score!</p>";
          } elseif ($score >= 75) {
              echo "<p>👍 Good score, keep going!</p>";
          } else {
              echo "<p>📉 Needs improvement.</p>";
          }

         
          switch ($today) {
              case "Monday":
                  echo "<p>📅 It's Monday — fresh start of the week!</p>";
                  break;
              case "Friday":
                  echo "<p>🎉 It's Friday — weekend is near!</p>";
                  break;
              default:
                  echo "<p>✨ Today is $today — keep pushing forward!</p>";
          }
        ?>
      </div>
    </div>
  </div>
</body>
</html>
