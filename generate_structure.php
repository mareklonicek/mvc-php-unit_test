<?php

// Definování názvu projektu
define('PROJECT_NAME', 'vas projekt');

// Základní cesta pro projekt
$baseDir = __DIR__ ;

// Definování struktury složek
$directories = [
    'app' => [
        'models',
        'controllers',
        'views'
    ],
    'core' => [],
    'public' => []
];

// Funkce pro vytváření adresářů
function createDirectoryStructure($baseDir, $directories) {
    foreach ($directories as $dir => $subDirs) {
        $path = $baseDir . DIRECTORY_SEPARATOR . $dir;
        
        // Vytvoření hlavního adresáře
        if (!is_dir($path)) {
            mkdir($path, 0755, true);
            echo "Vytvořeno: $path\n";
        }

        // Pokud existují podadresáře, vytvoř je
        foreach ($subDirs as $subDir) {
            $subDirPath = $path . DIRECTORY_SEPARATOR . $subDir;
            if (!is_dir($subDirPath)) {
                mkdir($subDirPath, 0755, true);
                echo "Vytvořeno: $subDirPath\n";
            }
        }
    }
}

// Vytvoření struktury složek
createDirectoryStructure($baseDir, $directories);

echo "Struktura byla úspěšně vytvořena pro " . PROJECT_NAME . ".\n";
