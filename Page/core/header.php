<!DOCTYPE html>
<html lang="pl" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Internship simple programs</title>
        <link rel="stylesheet" href="../stylesheets/style.css">
        <script src="../scripts/script.js"></script>
    </head>
    <body>
        <header>
        <h1>Przykładowe fukcjonalności w języku php</h1>
        <button onclick="backHome()">Powrót do storny głównej</button>
        <select id="pages" onchange="openPage()">
            <option value="index" selected>default</option>
            <option value="p1">Pętle</option>
            <option value="p2">Obiekty i pliki</option>
            <option value="p3">Tablica asocjacyjna</option>
            <option value="p4">Baza danych</option>
            <option value="p5">Ciasteczka</option>
        </select>
        </header>
        <section id="main">
