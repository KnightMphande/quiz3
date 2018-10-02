<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="quizLayout.css" rel="stylesheet" type="text/css">
</head>
<body bgcolor="">

<div class="box"> 
    <img src="https://media.comicbook.com/2017/11/avengers-infinity-war-trailer-cast-reactions-mcu-1061802-1280x0.jpg"
            height="300" width="900"/>
</div>

<form action="quiz.php" method="post" id="quiz">

<h1> Do you know much about the Marvel Comics? 
        Let's play this quiz and check your score now!</h1>
        <img src="https://img.cinemablend.com/filter:scale/quill/c/f/8/a/3/6/cf8a36f18793b9c42474b50472595eb10e24d3ac.jpg?mw=600"
            height=50px width=600px/> 
<h3>1. Which superhero was played by two different actors in the first two phases of the MCU?</h3>

<div>
    <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
    <label for="question-1-answers-A">A) Black Widow </label>
</div>

<div>
    <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
    <label for="question-1-answers-B">B) Hulk</label>
</div>

<div>
    <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
    <label for="question-1-answers-C">C) Thor</label>
</div>

<div>
    <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
    <label for="question-1-answers-D">D) Captain America</label>
</div>

<h3>2. Hela is the Goddess of ...</h3>

<div>

<input type="radio" name="question-2-answers"  value="A" >

<label for="question-2-answers-A">A) Death </label>

</div>

<div>

<input type="radio" name="question-2-answers" value="B" >

<label for="question-2-answers-B">B) Asgard</label>

</div>

<div>

<input type="radio" name="question-2-answers" value="C" >

<label for="question-2-answers-C">C) Lightning</label>

</div>

<div>

<input type="radio" name="question-2-answers" value="D" >

<label for="question-2-answers-D">D) None of the above</label>

</div>



<h3>3. Where did Loki send his father while he impersonated him back in Asgard?</h3>

<div>

<input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />

<label for="question-3-answers-A">A) Iceland </label>

</div>

<div>

<input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />

<label for="question-3-answers-B">B) Canada</label>

</div>

<div>

<input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />

<label for="question-3-answers-C">C) Norway</label>

</div>

<div>

<input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />

<label for="question-3-answers-D">D) Alaska</label>

</div>


<h3>4. Which of the Avengers is left half-paralyzed after the airport fight in Captain America: Civil War?</h3>

<div>

<input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />

<label for="question-4-answers-A">A) Hawkeye</label>

</div>

<div>

<input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />

<label for="question-4-answers-B">B) Iron Man</label>

</div>

<div>

<input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />

<label for="question-4-answers-C">C) Scarlet Witch</label>

</div>

<div>

<input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />

<label for="question-4-answers-D">D) War Machine</label>

</div>


<h3>5. What is the name of the agreement the United Nations forced the 
        Avengers to sign?</h3>

<div>

<input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />

<label for="question-5-answers-A">A) Sokovia Agreement </label>

</div>

<div>

<input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />

<label for="question-5-answers-B">B) Sokovia Accords</label>

</div>

<div>

<input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />

<label for="question-5-answers-C">C) Sokovia Law</label>

</div>

<div>

<input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />

<label for="question-5-answers-D">D) Sokovia Document</label>

</div>

<img src="http://static.tumblr.com/06a944b0ad2aa3f91d4fa642d49424da/c1egxek/jSIne7lf7/tumblr_static_7eks9e9cjyo84cs8ggkk8c4k8.jpg"
height="300" width="900"/> 

<h3>6. What was the name of the government organization 
    headed by Nick Fury in "The Avengers" (2012) that was 
    responsible for keeping track of alien threats and helped 
    to recruit the Avengers?
    </h3>

<div>

<input type="radio" name="question-6-answers"  value="A" >

<label for="question-6-answers-A">A) STEM </label>

</div>

<div>

<input type="radio" name="question-6-answers" value="B" >

<label for="question-6-answers-B">B) HYDRA</label>

</div>

<div>

<input type="radio" name="question-6-answers" value="C" >

<label for="question-6-answers-C">C) SHIELD</label>

</div>

<div>

<input type="radio" name="question-6-answers" value="D" >

<label for="question-6-answers-D">D) AIM</label>

</div> 

<h3>7. In "Ant Man" (2015), How did Hank Pym really 
    lose his wife?
</h3>

<div>

<input type="radio" name="question-7-answers"  value="A" >

<label for="question-27-answers-A">A) She went subatomic to save everyone. </label>

</div>

<div>

<input type="radio" name="question-7-answers" value="B" >

<label for="question-7-answers-B">B) She died in a plane crash.</label>

</div>

<div>

<input type="radio" name="question-7-answers" value="C" >

<label for="question-7-answers-C">C) She was killed by Yellowjacket.</label>

</div>

<div>

<input type="radio" name="question-7-answers" value="D" >

<label for="question-7-answers-D">D) She was kidnapped by Hydra.</label>

</div>

<h3>8. Which of the following movies was the first
in the MCU to not contain a battle located on Earth?
</h3>

<div>

<input type="radio" name="question-8-answers"  value="A" >

<label for="question-8-answers-A">A) Iron Man 2 </label>

</div>

<div>

<input type="radio" name="question-8-answers" value="B" >

<label for="question-8-answers-B">B) Avengers: Age of Ultron</label>

</div>

<div>

<input type="radio" name="question-8-answers" value="C" >

<label for="question-8-answers-C">C) Thor:The Dark World</label>

</div>

<div>

<input type="radio" name="question-8-answers" value="D" >

<label for="question-8-answers-D">D) Guardians of the Galaxy</label>

</div>

<h3>9. The death of which SHIELD agent sparked the Avengers' 
emotions and rallied them to fight as a team in "The 
Avengers" (2012)?
</h3>

<div>

<input type="radio" name="question-9-answers"  value="A" >

<label for="question-9-answers-A">A) Phil Coulson </label>

</div>

<div>

<input type="radio" name="question-9-answers" value="B" >

<label for="question-9-answers-B">B) Maria Hill</label>

</div>

<div>

<input type="radio" name="question-9-answers" value="C" >

<label for="question-9-answers-C">C) Nick Fury</label>

</div>

<div>

<input type="radio" name="question-9-answers" value="D" >

<label for="question-9-answers-D">D) Peggy Carter</label>

</div>

<h3>10. What "romantic gesture" did Tony Stark make at the end 
of "Iron Man 3" (2013) to show his girlfriend
Pepper Potts that he was dedicated to her?
</h3>

<div>

<input type="radio" name="question-10-answers"  value="A" >

<label for="question-10-answers-A">A) Quit the Avengers </label>

</div>

<div>

<input type="radio" name="question-10-answers" value="B" >

<label for="question-10-answers-B">B) Blew up all of the Iron Man suits</label>

</div>

<div>

<input type="radio" name="question-10-answers" value="C" >

<label for="question-10-answers-C">C) Proposed to her</label>

</div>

<div>

<input type="radio" name="question-10-answers" value="D" >

<label for="question-10-answers-D">D) Flew her to the moon</label>

</div>

<img src="https://i.redd.it/8u16sraua0qz.png"
height="300" width="900"/> 

<h3>11. Which actor has been vocal about his wish to have filled the role of 
    Captain America before 
    Chris Evans was given the role?</h3>

<div>

<input type="radio" name="question-11-answers"  value="A" >

<label for="question-11-answers-A">A) Tom Hardy </label>

</div>

<div>

<input type="radio" name="question-11-answers" value="B" >

<label for="question-11-answers-B">B) Will Smith</label>

</div>

<div>

<input type="radio" name="question-11-answers" value="C" >

<label for="question-11-answers-C">C) John Krasinkni</label>

</div>

<div>

<input type="radio" name="question-11-answers" value="D" >

<label for="question-11-answers-D">D) Toby Kebbell</label>

</div>

<h3>12. Which of these actors has not played 
    either a villain or an antagonist 
    in the MCU?</h3>

<div>

<input type="radio" name="question-12-answers"  value="A" >

<label for="question-12-answers-A">A) Christopher Eccleston </label>

</div>

<div>

<input type="radio" name="question-12-answers" value="B" >

<label for="question-12-answers-B">B) Lee Pace</label>

</div>

<div>

<input type="radio" name="question-12-answers" value="C" >

<label for="question-12-answers-C">C) Chris Stoll</label>

</div>

<div>

<input type="radio" name="question-12-answers" value="D" >

<label for="question-12-answers-D">D) Christoph Waltz</label>

</div>

<h3>13. First appearing in 2013, which Infinity Stone 
    is red?</h3>

<div>

<input type="radio" name="question-13-answers"  value="A" >

<label for="question-13-answers-A">A) The Space Stone </label>

</div>

<div>

<input type="radio" name="question-13-answers" value="B" >

<label for="question-13-answers-B">B) The Reality Stone</label>

</div>

<div>

<input type="radio" name="question-13-answers" value="C" >

<label for="question-13-answers-C">C) The Mind Stone</label>

</div>

<div>

<input type="radio" name="question-13-answers" value="D" >

<label for="question-13-answers-D">D) The Power Stone</label>

</div>

<h3>14. Which of these villains has not 
    yet appeared in any MCU properties?
</h3>

<div>

<input type="radio" name="question-14-answers"  value="A" >

<label for="question-14-answers-A">A) Taskmaster </label>

</div>

<div>

<input type="radio" name="question-14-answers" value="B" >

<label for="question-14-answers-B">B) Abu Bakaar</label>

</div>

<div>

<input type="radio" name="question-14-answers" value="C" >

<label for="question-14-answers-C">C) Yellowjacket</label>

</div>

<div>

<input type="radio" name="question-14-answers" value="D" >

<label for="question-14-answers-D">D) Batroc the Leaper</label>

</div>

<h3>15. Djimon Hounsou plays which character 
    in 2014's Guardians of the Galaxy?
</h3>

<div>

<input type="radio" name="question-15-answers"  value="A" >

<label for="question-15-answers-A">A) Rhomann Dey </label>

</div>

<div>

<input type="radio" name="question-15-answers" value="B" >

<label for="question-15-answers-B">B) Ronan the Accuser</label>

</div>

<div>

<input type="radio" name="question-15-answers" value="C" >

<label for="question-15-answers-C">C) The Broker</label>

</div>

<div>

<input type="radio" name="question-15-answers" value="D" >

<label for="question-15-answers-D">D) Korath the Pursuer</label>

</div>

<h3>16. What is the name of the rainbow-coloured 
    bridge featured in Thor and Thor 2, 
    connecting Asgard and Midgard (Earth)?
</h3>

<div>

<input type="radio" name="question-16-answers"  value="A" >

<label for="question-16-answers-A">A) Vanir </label>

</div>

<div>

<input type="radio" name="question-16-answers" value="B" >

<label for="question-16-answers-B">B) Bifrost</label>

</div>

<div>

<input type="radio" name="question-16-answers" value="C" >

<label for="question-16-answers-C">C) Aether</label>

</div>

<div>

<input type="radio" name="question-16-answers" value="D" >

<label for="question-16-answers-D">D) Mjolnir</label>

</div>

<h3>17. Peyton Reed was brought in to finish 
    directing responsibilities for Ant-Man 
    after which director left the project?
</h3>

<div>

<input type="radio" name="question-17-answers"  value="A" >

<label for="question-17-answers-A">A) Tobias Lindholm </label>

</div>

<div>

<input type="radio" name="question-17-answers" value="B" >

<label for="question-17-answers-B">B) Shane Black</label>

</div>

<div>

<input type="radio" name="question-17-answers" value="C" >

<label for="question-17-answers-C">C) Edgar Wright</label>

</div>

<div>

<input type="radio" name="question-17-answers" value="D" >

<label for="question-17-answers-D">D) Kenneth Branagh</label>

</div>

<h3>18. What is the name of Yondu Udonta's 
    whistle-controlled arrow?
</h3>

<div>

<input type="radio" name="question-18-answers"  value="A" >

<label for="question-18-answers-A">A) The Yaka Arrow </label>

</div>

<div>

<input type="radio" name="question-18-answers" value="B" >

<label for="question-18-answers-B">B) The Stakar Arrow</label>

</div>

<div>

<input type="radio" name="question-18-answers" value="C" >

<label for="question-18-answers-C">C) The A'askavariian Arrow</label>

</div>

<div>

<input type="radio" name="question-18-answers" value="D" >

<label for="question-18-answers-D">D) The Sakaaran Arrow</label>

</div>

<h3>19. Which of these weapons does not 
    appear in 2016's Doctor Strange? 
</h3>

<div>

<input type="radio" name="question-19-answers"  value="A" >

<label for="question-19-answers-A">A) The Wand of Watoon </label>

</div>

<div>

<input type="radio" name="question-19-answers" value="B" >

<label for="question-19-answers-B">B) The Staff of One</label>

</div>

<div>

<input type="radio" name="question-19-answers" value="C" >

<label for="question-19-answers-C">C) The Vaulting Boots of Valtorr</label>

</div>

<div>

<input type="radio" name="question-19-answers" value="D" >

<label for="question-19-answers-D">D) The Wand of Watoomb</label>

</div>

<h3>20. Which cosmic character is Jeff Goldblum
     scheduled to be playing in 
     Thor: Ragnarok?</h3>

<div>

<input type="radio" name="question-20-answers"  value="A" >

<label for="question-20-answers-A">A) The Collector </label>

</div>

<div>

<input type="radio" name="question-20-answers" value="B" >

<label for="question-20-answers-B">B) The Gardener</label>

</div>

<div>

<input type="radio" name="question-20-answers" value="C" >

<label for="question-20-answers-C">C) The GrandMaster</label>

</div>

<div>

<input type="radio" name="question-20-answers" value="D" >

<label for="question-20-answers-D">D) The Architect</label>

</div>

<input type="submit" value="Submit Quiz" />
</form>
    



</body>
</html>