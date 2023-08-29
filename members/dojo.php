

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
  .container {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
  }
  
  .box {
    flex: 1;
    min-width: 250px;
    border: 1px solid #ccc;
    padding: 20px;
  }
  
  .video-container {
    position: relative;
    padding-bottom: 56.25%; /* 16:9 aspect ratio */
    height: 0;
  }
  
  .video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
  }
</style>
</head>
<body>

<div class="container">
<?php
$courseVideos = array(
    'Introduction to BASH and Basic CSS' => 'https://player.vimeo.com/video/822332950?',
    'HTML Basics & HTML forms' => 'https://player.vimeo.com/video/736565941?h=3c6bbe4df2',
    'Advanced HTML & CSS' => 'https://player.vimeo.com/video/736566268?h=18e7c1e149',
    'Basic CSS & Mockups' => 'https://player.vimeo.com/video/736566659?h=5784561563',

    //week 2 
    'CSS Exercises & CSS Box Model & Trello' => 'https://player.vimeo.com/video/736566931',
    'CSS Exercises & CSS Display-Block Model' => 'https://player.vimeo.com/video/736567282',
    'Github Repo, Clone, Branches, Conflicts' => 'https://player.vimeo.com/video/736567639',
    'Rem fonts, video tag, responsive design' => 'https://player.vimeo.com/video/750203659', 

    //week 3
    'Project Presentations, CSS Advanced Selectors, CSS Menus' => 'https://player.vimeo.com/video/750204898',
    'Javascript & CSS menus' => 'https://player.vimeo.com/video/750581909',
    'CSS Positions & Javascript Basics' => 'https://player.vimeo.com/video/750583049',
    'CSS Flexbox & JS Loops & Logic' => 'https://player.vimeo.com/video/750585652',

    //week 4
    'Javascript Logic' => 'https://player.vimeo.com/video/750585906',
    '0728 - Javascript & SEO' => 'https://player.vimeo.com/video/750587608',
    'Javascript collections  while loop  mouse events' => 'https://player.vimeo.com/video/750206090',
    'Bootstrap  Intro to PHP' => 'https://player.vimeo.com/video/750206852',

    //week 5
    '0809 - Bootstrap  Gradients  Tic Tac Toe exercise' => 'https://player.vimeo.com/video/750207586', 
    '0811 - PHP Arrays & Form Processing' => 'https://player.vimeo.com/video/750208410',
    '0816 - Project 2 Presentation & Website Launch' => 'https://player.vimeo.com/video/750208979', 
    '0818 - php $_GET & sessions  interview practice' => 'https://player.vimeo.com/video/750209859',

    //week 6
    '0823 - php includerequire  multi-dimensional arrays' => 'https://player.vimeo.com/video/750697983',
    '0825 - Intro to jQuery & jQueryUI' => 'https://player.vimeo.com/video/750698166',
    '0830 - jQuery & Ajax' => 'https://player.vimeo.com/video/750698319',
    '0901 - Intro to MySQL  Interview Prep' => 'https://player.vimeo.com/video/750698435',

    //week 7 
    '0906 - Connect MySQL to PHP  User login system' => 'https://player.vimeo.com/video/750698578',
    '0908 - User login  PHP Encrypt Passwords' => 'https://player.vimeo.com/video/750698733',
    '0913 - PHP MySQL Exporting CSV Files' => 'https://player.vimeo.com/video/750698896',
    '0915 - PHP classes & Objects - OOP' => 'https://player.vimeo.com/video/753602753',

    //week 8
    '0920 - PHP & .htaccess routing  Intro to Wordpress' => 'https://player.vimeo.com/video/751944649',
    '0922 - PHP Review  mysqli, routing, post, json' => 'https://player.vimeo.com/video/753603840',
    '0927 - Wordpress Plugins' => 'https://player.vimeo.com/video/754539871',
    '0929 - Final Project Presentation & Next Steps' => 'https://player.vimeo.com/video/755381285',

);

foreach ($courseVideos as $name => $embed) {
    echo '<div class="box">
    <h2>'.$name.'</h2>
    <div class="video-container">
      <iframe class="video" src="'.$embed.'" frameborder="0" allowfullscreen></iframe>
    </div>
  </div>'; 
}
?>

   
  </div><!-- container -->
</body>
</html>