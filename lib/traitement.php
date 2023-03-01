<?php 

session_start();
// Vérifier si le formulaire a été soumis
if($_SERVER["REQUEST_METHOD"] == 'POST') {

    // Vérifier si le champ "name" n'est pas vide
    if(empty($_POST["name"])){
        echo "Le champ 'Prénom & NOM' est obligatoire.";
    } else {
        // Limiter la longueur du champ "name" à 50 caractères maximum
        $name = substr($_POST['name'], 0, 50);

        // Vérifier su le champ "email" n'est pas vide
        if(empty($_POST['email'])) {
            echo "Le champ 'Adresse email' est obligatoire";
        } else {

            // Vérifier si l'email est valide
            if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                echo "L'adresse email n'est pas valide";
            } else {

                // Vérifier si le champ "besoin" a été sélectionné
                if($_POST['besoin'] == "Clique pour ouvrir le menu déroulant") {
                    echo "Veuillez sélectionner votre besoin.";
                } else {

                    // Vérifier si le champ "message" n'est pas vide
                    if(empty($_POST['message'])) {
                        echo "Le champ 'Un message à nous parvenir avant la prise de contacte ?' est obligatoire.";
                    } else {

                        // Si toutes les conditions sont remplies, afficher un message de succès
                        echo "Le formulaire a été soumis avec succès.";
                    }
                }
            }
        }
    }
}


// <!-- name / email / tel / besoin / message-->

// Connexion à la base de donnée
try{
    $connexion= new PDO("mysql:host=localhost;dbname=bmr;charset=utf8mby", "root", "");
}catch(Exception $e){
    echo "impossible de se connecter à la base de données";
    var_dump($e);
    exit;
}

// Récupération des données du formulaire
$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$tel = mysqli_real_escape_string($conn, $_POST['tel']);
$besoin = mysqli_real_escape_string($conn, $_POST['besoin']);
$message = mysqli_real_escape_string($conn, $_POST['message']);

$sql = "INSERT INTO contact (name, email, tel, besoin, message)
        VALUES ('$name', '$email', '$tel', '$besoin', '$message')";

if (mysqli_query($conn, $sql)) {
    echo "Les données ont été envoyées avec succès dans la base de données.";
} else {
    echo "Une erreur est survenue lors de l'envoi des données dans la base de données : " . mysqli_error($conn);
}

// Fermeture de la connexion à la base de données
mysqli_close($conn);

?>