<?php
require_once 'vendor/autoload.php'; // Inclut le fichier autoload généré par Composer

use Symfony\Component\Cache\Adapter\FilesystemAdapter;

// Créer le pool de cache
$pool = new FilesystemAdapter('my_cache_namespace', 3600, '/path/to/cache'); // Spécifie le répertoire du cache

// Clé à supprimer
$keyToDelete = 'sk_live_zurt-uzag-mljp-sqdr-ulaw'; 

// Suppression de la clé
if ($pool->hasItem($keyToDelete)) {
    $pool->deleteItem($keyToDelete);
    echo "La clé a été supprimée : $keyToDelete";
} else {
    echo "Aucune clé trouvée pour : $keyToDelete";
}

$pool->clear();
echo "Toutes les clés ont été supprimées du cache.";
?>
