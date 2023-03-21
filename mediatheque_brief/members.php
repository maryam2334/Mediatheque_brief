<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    
</body>
</html>


<?php

// Define an array of books with their details
$books = array(
  array(
    "title" => "The Great Gatsby",
    "author" => "F. Scott Fitzgerald",
    "image" => "https://images-na.ssl-images-amazon.com/images/I/51sVIlOw%2BxL._SX331_BO1,204,203,200_.jpg",
    "description" => "The Great Gatsby is a 1925 novel written by American author F. Scott Fitzgerald that follows a cast of characters living in the fictional towns of West Egg and East Egg on prosperous Long Island in the summer of 1922. The story primarily concerns the young and mysterious millionaire Jay Gatsby and his quixotic passion for the beautiful Daisy Buchanan.",
    "modal_id" => "modal1"
  ),
  array(
    "title" => "To Kill a Mockingbird",
    "author" => "Harper Lee",
    "image" => "https://images-na.ssl-images-amazon.com/images/I/91c%2B+g1sZZL.jpg",
    "description" => "To Kill a Mockingbird is a novel by Harper Lee published in 1960. It was immediately successful, winning the Pulitzer Prize, and has become a classic of modern American literature. The plot and characters are loosely based on Lee's observations of her family, her neighbors and an event that occurred near her hometown of Monroeville, Alabama, in 1936, when she was 10 years old.",
    "modal_id" => "modal2"
  ),
  array(
    "title" => "1984",
    "author" => "George Orwell",
    "image" => "https://images-na.ssl-images-amazon.com/images/I/71IiFdpM7-L.jpg",
    "description" => "1984 is a dystopian novella by George Orwell published in 1949, which follows the life of Winston Smith, a low-ranking member of the ruling Party, who begins to question the Party's decisions and his own loyalty to it. The novel is set in a totalitarian society where individualism is discouraged, and the state has complete control over every aspect of citizens' lives.",
    "modal_id" => "modal3"
  )
);

// Loop through the books array and display each book as a card with a modal
foreach ($books as $book) {
  echo '<div class="card">';
  echo '<img src="' . $book["image"] . '" alt="' . $book["title"] . '">';
  echo '<h2>' . $book["title"] . '</h2>';
  echo '<p>' . $book["author"] . '</p>';
  echo '<button onclick="openModal(\'' . $book["modal_id"] . '\')">Read More</button>';
  echo '</div>';
  
  echo '<div id="' . $book["modal_id"] . '" class="modal">';
  echo '<div class="modal-content">';
  echo '<span class="close" onclick="closeModal(\'' . $book["modal_id"] . '\')">&times;</span>';
  echo '<h2>' . $book["title"] . '</h2>';
  echo '<p>' . $book["description"] . '</p>';
  echo '</div>';
  echo '</div>';
}

?>

<script>
// Define functions to open and close the modals
function openModal(modal_id) {
  document.getElementById(modal_id).style.display = "block";
}

function closeModal(modal_id) {
  document.getElementById(modal_id).style






