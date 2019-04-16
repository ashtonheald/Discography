<?php 
include_once 'includes/connection.php';
$pageTitle = 'The Killers Albums';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include './includes/header.php' ?>
</head>

<body class="albums">
  <a href="index.html"><img class="logo" src="images/killers_logo.png" alt="Kilers Logo" width="400"></a>

<header>
        <nav class="navbar bg-primary navbar-expand-lg navbar-inverse navbar-toggleable-sm">

            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarButton">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarButton">
            
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li><a class="nav-item nav-link" href="index.html">Home</a></li>
                <li><a class="nav-item nav-link ml-sm-auto active" href="albums.html">Albums</a></li>
                <li><a class="nav-item nav-link" href="about.html">The Band</a></li>
                </ul>
            </div>       
    </nav>
</header>

<div class="cards">
  <div class="card" style="padding-bottom:60px;">
    <img src="images/hotfuss.jpg" alt="Hot Fuss">
    <div class="card-title">
      <h2>
          Hot Fuss
          <small>2004</small>
          <ul class="card-text list-group list-group-flush">
            <li class="list-group-item">Jenny Was a Friend of Mine</li>
            <li class="list-group-item">Mr. Brightside</li>
            <li class="list-group-item">Smile Like You Mean It</li>
            <li class="list-group-item">Somebody Told Me</li>
            <li class="list-group-item">All These Things That I've Done</li>
            <li class="list-group-item">Andy, You're a Star</li>
            <li class="list-group-item">On Top</li>
            <li class="list-group-item">Change Your Mind</li>
            <li class="list-group-item">Believe Me Natalie</li>
            <li class="list-group-item">Midnight Show</li>
            <li class="list-group-item">Everything Will Be Alright</li>
            <li class="list-group-item">Glamorous Indie Rock &amp; Roll</li>
          </ul>
      </h2>
    </div>
  </div>

    <div class="card" style="padding-bottom:112px;">
    <img src="images/samstown.jpg" alt="Sam's Town">
    <div class="card-title">
      <h2>
          Sam's Town
          <small>2006</small>
          <ul class="card-text list-group list-group-flush">
            <li class="list-group-item">Sam's Town</li>
            <li class="list-group-item">Enterlude</li>
            <li class="list-group-item">When You Were Young</li>
            <li class="list-group-item">Bling (Confession of a King)</li>
            <li class="list-group-item">For Reasons Unknown</li>
            <li class="list-group-item">Read My Mind</li>
            <li class="list-group-item">Uncle Jonny</li>
            <li class="list-group-item">Bones</li>
            <li class="list-group-item">My List</li>
            <li class="list-group-item">This River Is Wild</li>
            <li class="list-group-item">Why Do I Keep Counting</li>
            <li class="list-group-item">Exitlude</li>
          </ul>
      </h2>
    </div>
    </div>

  <div class="card">
    <img src="images/sawdust.jpg" alt="Sawdust">
    <div class="card-title">
      <h2>
          Sawdust
          <small>2007</small>
          <ul class="card-text list-group list-group-flush">
            <li class="list-group-item">Tranquilize</li>
            <li class="list-group-item">Shadowplay</li>
            <li class="list-group-item">All The Pretty Faces</li>
            <li class="list-group-item">Leave the Bourbon on the Shelf</li>
            <li class="list-group-item">Sweet Talk</li>
            <li class="list-group-item">Under the Gun</li>
            <li class="list-group-item">Where the White Boys Dance</li>
            <li class="list-group-item">Show You How</li>
            <li class="list-group-item">Move Away</li>
            <li class="list-group-item">Who Let You Go?</li>
            <li class="list-group-item">The Ballad of Michael Valentine</li>
            <li class="list-group-item">Ruby, Don't Take Your Love to Town</li>
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseShow" aria-expanded="false" aria-controls="collapseShow">More</button>
            <div class="collapse" id="collapseShow">
            <li class="list-group-item">Daddy's Eyes</li>
            <li class="list-group-item">Sam's Town (Abbey Road version)</li>
            <li class="list-group-item">Romeo and Juliet</li>
            <li class="list-group-item">Mr. Brightside (Thin White Duke remix)</li>
            </div>
          </ul>
      </h2>
      </div>
      </div>

  <div class="card">
    <img src="images/dayandage.jpg" alt="Day and Age">
    <div class="card-title">
      <h2>
          Day &amp; Age
          <small>2008</small>
          <ul class="card-text list-group list-group-flush">
            <li class="list-group-item">Losing Touch</li>
            <li class="list-group-item">Human</li>
            <li class="list-group-item">Spaceman</li>
            <li class="list-group-item">Joy Ride</li>
            <li class="list-group-item">A Dustland Fairytale</li>
            <li class="list-group-item">This Is Your Life</li>
            <li class="list-group-item">I Can't Stay</li>
            <li class="list-group-item">Neon Tiger</li>
            <li class="list-group-item">The World We Live In</li>
            <li class="list-group-item">Goodnight, Travel Well</li>
            <li class="list-group-item">Tidal Wave</li>
            <li class="list-group-item">Forget About What I Said</li>
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseShow2" aria-expanded="false" aria-controls="collapseShow2">More</button>
            <div class="collapse" id="collapseShow2">
            <li class="list-group-item">Human (Thin White Duke Club Mix)</li>
            </div>
          </ul>
      </h2>
    </div>
    </div>

  <div class="card">
    <img src="images/royalalbert.jpg" alt="Royal Albert">
    <div class="card-title">
      <h2>
          Live from the Royal Albert
          <small>2009</small>
          <ul class="card-text list-group list-group-flush">
            <li class="list-group-item">Enterlude</li>
            <li class="list-group-item">Human</li>
            <li class="list-group-item">This Is Your Life</li>
            <li class="list-group-item">Somebody Told Me</li>
            <li class="list-group-item">For Reasons Unknown</li>
            <li class="list-group-item">The World We Live In</li>
            <li class="list-group-item">Joy Ride</li>
            <li class="list-group-item">I Can't Stay</li>
            <li class="list-group-item">Bling (Confession of a King)</li>
            <li class="list-group-item">Shadowplay</li>
            <li class="list-group-item">Smile Like You Mean It</li>
            <li class="list-group-item">Losing Touch</li>
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseShow3" aria-expanded="false" aria-controls="collapseShow3">More</button>
            <div class="collapse" id="collapseShow3">
            <li class="list-group-item">Spaceman</li>
            <li class="list-group-item">A Dustland Fairytale</li>
            <li class="list-group-item">Sam's Town</li>
            <li class="list-group-item">Read My Mind</li>
            <li class="list-group-item">Mr. Brightside</li>
            <li class="list-group-item">All These Things That I've Done</li>
            <li class="list-group-item">Sweet Talk</li>
            <li class="list-group-item">This River Is Wild</li>
            <li class="list-group-item">Bones</li>
            <li class="list-group-item">Jenny Was a Friend of Mine</li>
            <li class="list-group-item">When You Were Young</li>
            <li class="list-group-item">Exitlude</li>
            <li class="list-group-item">Trainquilize (Oxegen Festival 2009)</li>
            <li class="list-group-item">Human (Hyde Park, London)</li>
            <li class="list-group-item">Mr. Brightside (Hyde Park, London)</li>
            <li class="list-group-item">When You Were Young (V Festival 2009)</li>
            </div>
          </ul>
      </h2>
    </div>
  </div>

  <div class="card" style="padding-bottom:60px;">
    <img src="images/battleborn.jpg" alt="Battleborn">
    <div class="card-title">
      <h2>
          Battle Born
          <small>2012</small>
          <ul class="card-text list-group list-group-flush">
            <li class="list-group-item">Flesh and Bone</li>
            <li class="list-group-item">Runaways</li>
            <li class="list-group-item">The Way It Was</li>
            <li class="list-group-item">Here With Me</li>
            <li class="list-group-item">A Matter of Time</li>
            <li class="list-group-item">Deadlines and Commitments</li>
            <li class="list-group-item">Miss Atomic Bomb</li>
            <li class="list-group-item">The Rising Tide</li>
            <li class="list-group-item">Heart of a Girl</li>
            <li class="list-group-item">From Here on Out</li>
            <li class="list-group-item">Be Still</li>
            <li class="list-group-item">Battle Born</li>
          </ul>
      </h2>
    </div>
  </div>
  
  <div class="card">
    <img src="images/directhits.jpg" alt="Direct Hits">
    <div class="card-title">
      <h2>
          Direct Hits
          <small>2013</small>
          <ul class="card-text list-group list-group-flush">
            <li class="list-group-item">Mr. Brightside</li>
            <li class="list-group-item">Somebody Told Me</li>
            <li class="list-group-item">Smile Like You Mean It</li>
            <li class="list-group-item">All These Things That I've Done</li>
            <li class="list-group-item">When You Were Young</li>
            <li class="list-group-item">Read My Mind</li>
            <li class="list-group-item">For Reasons Unknown</li>
            <li class="list-group-item">Human</li>
            <li class="list-group-item">Spaceman</li>
            <li class="list-group-item">A Dustland Fairytale</li>
            <li class="list-group-item">Runaways</li>
            <li class="list-group-item">Miss Atomic Bomb</li>
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseShow4" aria-expanded="false" aria-controls="collapseShow4">More</button>
            <div class="collapse" id="collapseShow4">
            <li class="list-group-item">The Way It Was</li>
            <li class="list-group-item">Shot at the Night</li>
            <li class="list-group-item">Just Another Girl</li>
            <li class="list-group-item">Mr. Brightside - Original Demo</li>
            <li class="list-group-item">When You Were Young (Calvin Harris remix)</li>
            <li class="list-group-item">Be Still</li>
            </div>
          </ul>
      </h2>
    </div>
    </div>

  <div class="card" style="padding-bottom:29px;">
    <img src="images/wishes.jpg" alt="Wishes">
    <div class="card-title">
      <h2>
          Don't Waste Your Wishes
          <small>2016</small>
          <ul class="card-text list-group list-group-flush">
            <li class="list-group-item">A Great Big Sled</li>
            <li class="list-group-item">Don't Shoot Me Santa</li>
            <li class="list-group-item">Joseph, Better You Than Me</li>
            <li class="list-group-item">¡Happy Birthday Guadalupe!</li>
            <li class="list-group-item">Boots</li>
            <li class="list-group-item">The Cowboy's Christmas Ball</li>
            <li class="list-group-item">I Feel It in My Bones</li>
            <li class="list-group-item">Christmas in L.A.</li>
            <li class="list-group-item">Joel the Lump of Coal</li>
            <li class="list-group-item">Dirt Sledding</li>
            <li class="list-group-item">I'll Be Home for Christmas</li>
          </ul>
      </h2>
      </div>
      </div>
  <div class="card" style="padding-bottom:154px;">
    <img src="images/wonderful.jpg" alt="Wonderful">
    <div class="card-title">
      <h2>
        Wonderful Wonderful
        <small>2017</small>
        <ul class="card-text list-group list-group-flush">
          <li class="list-group-item">Wonderful Wonderful</li>
          <li class="list-group-item">The Man</li>
          <li class="list-group-item">Rut</li>
          <li class="list-group-item">Life to Come</li>
          <li class="list-group-item">Run for Cover</li>
          <li class="list-group-item">Tyson vs. Douglas</li>
          <li class="list-group-item">Some Kind of Love</li>
          <li class="list-group-item">Out of My Mind</li>
          <li class="list-group-item">The Calling</li>
          <li class="list-group-item">Have All the Songs Been Written?</li>
      </h2>
    </div>
  </div>
</div>

<footer>
  <h3><a href="https://en.wikipedia.org/wiki/The_Killers" target="_blank">Source</a></h3>
  <small>&copy; 2017 Tyler Gilbert</small>
</footer>
</body>
</html>
