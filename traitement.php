<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Vérifier si le formulaire a été soumis
    // Traitement des données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $date_naissance = $_POST['date_naissance'];
    $cin = $_POST['cin'];
    $theme = $_POST['theme'];
    $keywords = $_POST['keywords'];
    $mail = $_POST['mail'];
    $phone = $_POST['phone'];
    $adresse = $_POST['adresse'];
    $abstract = $_POST['abstract'];
    $mails = $_POST['mails'];
    $supervisor_name = $_POST['supervisor_name'];
    $supervisor_mail = $_POST['mails'];
    $title = $_POST['title'];
    $disciplines = $_POST['disciplines'];
    $institution = $_POST['institution'];
    $structure = $_POST['structure'];

    
    // Générer le code pour le doctorant
    $code = generateCode($nom, $date_naissance);
    
    // Charger le fichier XML
    $xml = simplexml_load_file('soumissions.xml');

    // Créer un nouvel élément soumission
    $soumission = $xml->addChild('soumission');
    $soumission->addChild('nom', $nom);
    $soumission->addChild('prenom', $prenom);
    $soumission->addChild('date_naissance', $date_naissance);
    $soumission->addChild('cin', $cin);
    $soumission->addChild('theme', $theme);
    $structureElement = $soumission->addChild('structure');
    $structureElement->addAttribute('type', $structure);
    $soumission->addChild('disciplines', $disciplines);
    $soumission->addChild('institution', $institution);
    $soumission->addChild('keywords', $keywords);
    $soumission->addChild('mail', $mail);
    $soumission->addChild('phone', $phone);
    $soumission->addChild('adresse', $adresse);
    $soumission->addChild('abstract', $abstract);
    $soumission->addChild('title', $title);
    $supervisor = $soumission->addChild('supervisor');
    $supervisor->addChild('supervisor_name', $supervisor_name);
    $supervisor->addChild('supervisor_mail', $mails);
    $soumission->addChild('code', $code);

    // Enregistrer les modifications dans le fichier XML
    $xmlString = $xml->asXML();
    $formattedXmlString = formatXmlString($xmlString);
    file_put_contents('soumissions.xml', $formattedXmlString);

    // Afficher un message de succès
    echo "Soumission réussie! Votre code est : $code";
} else {
    // Si le formulaire n'a pas été soumis, afficher un message d'erreur
    echo "Ce script doit être soumis via un formulaire.";
}

// Fonction pour formater une chaîne XML
function formatXmlString($xmlString) {
    $dom = new DOMDocument();
    $dom->preserveWhiteSpace = false;
    $dom->formatOutput = true;
    $dom->loadXML($xmlString);
    return $dom->saveXML();
}

// Fonction pour générer le code du doctorant
function generateCode($nom, $date_naissance) {
    // Récupérer les trois premières lettres du nom
    $nomCode = substr($nom, 0, 3);
    // Extraire l'année de naissance de la date de naissance
    $anneeNaissance = date('Y', strtotime($date_naissance));
    // Concaténer les éléments pour former le code
    $code = $anneeNaissance . strtolower($nomCode) . date('d', strtotime($date_naissance));
    return $code;
}
?>
