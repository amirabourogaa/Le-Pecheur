<?php
header('Content-Type: application/json');

// Réponse par défaut
$response = array('success' => false, 'message' => 'Erreur inconnue.');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $email = $_POST['email'];
        
        // Simuler un succès pour le test
        $response['success'] = true;
        $response['message'] = 'Votre demande d\'abonnement a été envoyée. Merci !';
        
        // Vous pouvez ajouter ici la logique réelle de traitement
    } else {
        $response['message'] = 'Veuillez entrer un email valide.';
    }
} else {
    $response['message'] = 'Méthode non autorisée.';
}

echo json_encode($response);
?>
