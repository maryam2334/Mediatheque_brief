<!DOCTYPE html>
<html>
<head>
	<title>Mediatheque Login</title>
	<link rel="stylesheet" type="text/css" href="mediatheque.css">
</head>
<body>
    <h2> La grande mediathéque de Tanger  </h2>
	<div class="container">
		
		<form>
			<label for="nom">Nom</label>
			<input type="text" id="nom" name="nom" required>
			<label for="prenom">Prrenom</label>
			<input type="text" id="prenom" name="prenom" required>
            <label for="adresse">Adresse</label>
			<input type="text" id="adresse" name="adresse" required>
			<label for="email">Email</label>
			<input type="email" id="email" name="email" required>
            <label for="telephone">Telephone</label>
			<input type="tel" id="telephone" name="telephone" required>
			<label for="cin">C.I.N</label>
			<input type="text" id="cin" name="cin" required>
            <label for="date">Date de naissance</label>
			<input type="date" id="date" name="date" required>
			<label for="type">Le type d'adherent</label>
			<select type="" id="type" name="type" required>
                <option value=" fetudiant">  Étudiants</option>
                <option value=" fonctionnaires"> Fonctionnaires</option>
                <option value=" femmes"> Femmes au foyer</option>
            </select>    
            <label for="username">Username</label>
			<input type="text" id="username" name="username" required>
            <label for="password">Mot de pass</label>
			<input type="password" id="password" name="password" required>
            <label for="password2"> Verifier votre mot de pass</label>
			<input type="password" id="password2" name="password2" required>

                <button type="submit" class="btn">S'inscrire</button>
                
			
		</form>
        
	</div>
</body>
</html>
<?php
// Connect to database
$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'mediathéque_db';
$conn = new mysqli($server, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Retrieve form data
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$adresse = $_POST["adresse"];
$email = $_POST["email"];
$telephone = $_POST["telephone"];
$cin = $_POST["cin"];
$password = $_POST["password"];
$type = $_POST["type"];
$date = $_POST["date"];
$surnom = $_POST["surnom"];
// Check if user already exists
$sql = "SELECT * FROM adherent WHERE email_adh='$email'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "User with this email already exists";
} else {
    // Insert new user into database
    $sql = "INSERT INTO adherent (nom_adh, prenom_adh, adresse_adh,email_adh,telephone_adh,cin_adh,date_de_naissance,type_adh,surnom_adh,password_adh,) VALUES ('$nom', '$prenom', '$adresse', '$email','$telephone','$cin','$date','$type', '$surnom','$password')";
    if ($conn->query($sql) === TRUE) {
        echo "New user created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close database connection
$conn->close();
?>