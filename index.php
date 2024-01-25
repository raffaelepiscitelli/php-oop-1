<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Php OOP 1</title>
</head>

<body>

    <?php
    //Definizione della classe "Movie"
    class Movie
    {
        //Dichiarazione delle variabili d'istanza
        public $title;
        public $director;
        public $genre;
        public $year;
        public $duration;
        public $original_language;
        //Definizione di un costruttore
        public function __construct($title, $director, $genre, $year, $duration, $original_language)
        {
            $this->title = $title;
            $this->director = $director;
            $this->genre = $genre;
            $this->year = $year;
            $this->duration = $duration;
            $this->original_language = $original_language;
        }
        //Definizione dei metodi
        public function getDirector()
        {
            return $this->director;
        }

        public function getGenre()
        {
            return $this->genre;
        }
    }
    //Instaziazione degli oggetti
    $hostel = new Movie('Hostel', 'Eli Roth', 'Horror', '2005', '90 minutes', 'English');
    $fourRooms = new Movie('Four Rooms', 'Quentin Tarantino', 'Comedy', '1995', '94 minutes', 'English');
    ?>
    <!--Stampa a schermo-->
    <div class="d-flex justify-content-evenly mt-5">
        <div class="card p-2">
            <?php
            echo 'Title: ' . $hostel->title . '<br>';
            echo 'Director: ' . $hostel->getDirector() . '<br>';
            echo 'Genre: ' . $hostel->getGenre() . '<br>';
            echo 'Year: ' . $hostel->year . '<br>';
            echo 'Duration: ' . $hostel->duration . '<br>';
            echo 'Original language: ' . $hostel->original_language . '<br>';
            ?>
        </div>
        <div class="card p-2">
            <?php
            echo 'Title: ' . $fourRooms->title . '<br>';
            echo 'Director: ' . $fourRooms->getDirector() . '<br>';
            echo 'Genre: ' . $fourRooms->getGenre() . '<br>';
            echo 'Year: ' . $fourRooms->year . '<br>';
            echo 'Duration: ' . $fourRooms->duration . '<br>';
            echo 'Original language: ' . $fourRooms->original_language . '<br>';
            ?>
        </div>
    </div>
</body>

</html>