<?php
/**
 * Auteur    : hajar sabar
 * Objectif  : Fragment d'entête HTML réutilisable
 * Date      : 24/10/2026
 */
require_once __DIR__ . '/../config.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo ETABLISSEMENT; ?> - Suivi des notes</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; line-height: 1.6; color: #333; }
        header { background-color: #2c3e50; color: white; padding: 15px; text-align: center; border-radius: 4px; }
        nav ul { list-style: none; padding: 0; background: #34495e; display: flex; flex-wrap: wrap; margin: 10px 0; border-radius: 4px; }
        nav li { margin: 0; }
        nav a { display: block; color: white; padding: 10px 15px; text-decoration: none; }
        nav a:hover { background: #1abc9c; }
        table { border-collapse: collapse; width: 100%; margin: 15px 0; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #f2f2f2; }
        .rouge { color: #e74c3c; font-weight: bold; }
        .erreur { color: #721c24; background-color: #f8d7da; padding: 10px; border: 1px solid #f5c6cb; border-radius: 4px; margin-bottom: 15px; }
        .succes { color: #155724; background-color: #d4edda; padding: 10px; border: 1px solid #c3e6cb; border-radius: 4px; margin-bottom: 15px; }
        form div { margin-bottom: 12px; }
        label { display: inline-block; width: 120px; }
    </style>
</head>
<body>
<header>
    <h1><?php echo ETABLISSEMENT; ?></h1>
    <p>Application web de gestion et suivi des apprenants</p>
</header>