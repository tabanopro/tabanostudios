<?php 
  session_start()
?>
<head>
  <title>Tabano Studios PROJECTS</title>
  <style>

    /* Add this to your existing styles or create a new style block */

    .projects {
        display: flex;
        justify-content: space-around;
        padding: 20px;
        border-color: #333; /* Initial divider line */
    }

    .project {
        width: 45%;
        text-align: center;
        margin-bottom: 20px;
        position: relative;
        border: 2px solid #0F52BA; /* Add an outline to the top of each project */    
        border-radius: 10px; /* Add rounded corners to the top of each project */
        padding-top: 20px; /* Add padding to separate the outline from content */
        padding-bottom: 10px;
    }

    .project img {
        max-width: 100%;
        height: auto;
        border: 1px solid #ddd; /* Add a border to the image */
    }

    .project-info {
        margin-top: 10px;
    }

    .project-info h2 {
        margin-bottom: 5px;
    }

    .project-info p {
        font-size: 14px;
    }

    .project-info ul {
        list-style: none;
        padding: 0;
    }

    .project-info li {
        margin-bottom: 5px;
    }

    .learn-more-btn {
        display: inline-block;
        padding: 8px 16px;
        background-color: #333;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s;
    }

    .learn-more-btn:hover {
        background-color: #555;
    }

    .learn-more-btn.disabled {
        background-color: #777;
        cursor: not-allowed;
        border-color: #999;
    }


  </style>
</head>

<body>
  
  <?php 
        include 'header.php';
  ?>
  <section class="projects">
      <div class="project">
          <img src="https://cdn.discordapp.com/attachments/1134867667891794092/1175150800838864957/E74EY.png?ex=656a2f78&is=6557ba78&hm=cc5a9cabdea2b7a206353ca726671c09ff86fe4e53865135fc1a02cb4e9b40e0&" alt="Block Physics Logo" style="max-height: 300; max-width: 350;">
          <div class="project-info">
              <h2>Block Physics</h2>
              <p>It is a game where you basically echo "Block Physics is a 2D sandbox game where you can spawn and interact with various objects. You have the ability to throw these objects and watch their physics in action. It's a fun and creative environment for experimentation and exploration.</p>
              <ul>
                  <li>Intractive Game</li>
                  <li>Fun To Play And Lag</li>
                  <li>Toss stuff with advanced physics</li>
              </ul>
              <a href="https://tabanopro.itch.io/block-physics" class="learn-more-btn">Learn More</a>
          </div>
      </div>

       <div class="project">
          <img src="https://cdn.discordapp.com/attachments/1134867667891794092/1175151537220243477/Screenshot_2023-11-15_211440.png?size=32" alt="Terrarin Generator" style="max-height: 300; max-width: 350;">
          <div class="project-info">
              <h2>Terrarin Generator Engine</h2>
              <p>This is a description of Project 1. It can contain details about the project, its goals, and outcomes.</p>
              <ul>
                  <li>Feature 1</li>
                  <li>Feature 2</li>
                  <li>Feature 3</li>
              </ul>
              <a href="#" class="learn-more-btn">Learn More</a>
          </div>
      </div>
     <!-- <div class="project">
          <img src="project2.jpg" alt="Project 2 Image" style="max-height: 300; max-width: 350;">
          <div class="project-info">
              <h2>Project 2</h2>
              <p>This is a description of Project 2. It can contain details about the project, its goals, and outcomes.</p>
              <ul>
                  <li>Feature 1</li>
                  <li>Feature 2</li>
                  <li>Feature 3</li>
              </ul>
              <a href="#" class="learn-more-btn disabled">Learn More (Disabled)</a>
          </div> -->
      </div>
  </section>

</body>
