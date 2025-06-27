
$pasta = "imagens/";
$extensoes = ['jpg', 'jpeg', 'png', 'gif', 'webp']; // sem HEIC por enquanto

$imagens = [];
foreach ($extensoes as $ext) {
    foreach (glob($pasta . "*." . $ext) as $arquivo) {
        $imagens[] = $arquivo;
    }
}

header('Content-Type: application/json');
echo json_encode($imagens);

