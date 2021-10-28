<?php 
   class Movie {
       public $genre;
       public $title;
       public $producer;
       public $cast;
       public $description;
       public $length;
       public $releaseDate;

       function __construct($_genre, $_title, $_producer, $_cast, $_description, $_length, $_releaseDate) {
            $this->genre = $_genre;
            $this->title = $_title;
            $this->producer = $_producer;
            $this->cast = $_cast;
            $this->description = $_description;
            $this->length = $_length;
            $this->releaseDate = $_releaseDate;
       }

       public function getTitle() {
           return $this->title;
       }
   }; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Time</title>
</head>
<body>
    <pre>
        <?php 

            $movie_1 = new Movie('horror', 'The Cured', 'David Freyne', ['Elliot Page','Sam Keeley', 'Tom Vaughan-Lawlor'], 'A plague called the Maze Virus has previously swept through Europe, transforming its victims into a homicidal, zombie like state. Ireland was particularly badly affected. A cure was later discovered, and 75% of those infected who could be captured have been treated and cured of the virus. The remaining 25% have proven resistant to the cure. The two groups are known as the Cured and the Infected. The Infected are held in captivity, despite public fears that keeping them alive could lead to another outbreak.', '95 min', '9/9/2017');

            $movie_2 = new Movie('horror', '28 Weeks Later', 'Juan Carlos Fresnadillo', ['Robert Carlyle','Rose Byrne', 'Jeremy Renner'], '28 Weeks Later is a 2007 post-apocalyptic science fiction horror film directed by Juan Carlos Fresnadillo, who co-wrote it with Rowan Joffé, Enrique López-Lavigne, and Jesus Olmo. The sequel to the 2002 film 28 Days Later, it stars Robert Carlyle, Rose Byrne, Jeremy Renner, Harold Perrineau, Catherine McCormack, Imogen Poots, and Idris Elba. It is set after the events of the first film, depicting the efforts of NATO military forces to salvage a safe zone in London, the consequence of two young siblings breaking protocol to find their infected mother, and the resulting reintroduction of the Rage Virus to the safe zone. 28 Weeks Later was theatrically released in the United Kingdom on 11 May 2007, by 20th Century Fox and by Fox Atomic in the United States. The film received positive reviews from critics, who praised the direction and atmosphere. It grossed $64 million worldwide against a $15 million budget.', '99 min', '4/26/2007');

            foreach ($movie_1 as $publicProperty => $value) {
                var_dump($publicProperty, $value);
            }   

            foreach ($movie_2 as $publicProperty => $value) {
                var_dump($publicProperty, $value);
            }   
        ?>
    </pre>
    
</body>
</html>
