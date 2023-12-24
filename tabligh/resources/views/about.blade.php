<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Éducation et Sensibilisation à la Corruption</title>

    <style>
 /* Styles pour le thème et la mise en page */
body {
    font-family: 'Arial', sans-serif;
    line-height: 1.6;
    background-color: #d9eaf7; /* Couleur de fond */
    color: #333; /* Couleur principale du texte */
}

header, main, footer {
    width: 80%;
    margin: 0 auto;
    padding: 20px 0;
}

header {
    text-align: center;
    background-color: #2b5797; /* Couleur de l'en-tête */
    color: #fff; /* Couleur du texte de l'en-tête */
    border-bottom: 5px solid #1d3c74; /* Bordure inférieure de l'en-tête */
}

h1 {
    font-size: 3em;
    margin-bottom: 10px;
}

h2 {
    font-size: 2.5em;
    margin-bottom: 15px;
    color: #1d3c74; /* Couleur différente pour les titres */
}

h3 {
    font-size: 1.8em;
    margin-bottom: 10px;
    color: #1d3c74; /* Couleur différente pour les titres */
}

img {
    max-width: 100%;
    height: auto;
    display: block;
    margin-bottom: 15px;
}

footer {
    text-align: center;
    background-color: #2b5797; /* Couleur du pied de page */
    color: #fff; /* Couleur du texte du pied de page */
    border-top: 5px solid #1d3c74; /* Bordure supérieure du pied de page */
    padding-top: 10px;
}

/* Styles pour les sections */
section {
    margin-bottom: 30px;
}

article {
    background-color: #fff; /* Couleur de fond des articles */
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    color: #333; /* Couleur principale du texte dans les articles */
}

    </style>
<body>


    <header>
        <h1>Sensibilisation à la Corruption</h1>
        <p>Ensemble pour un monde plus intègre et éthique</p>
    </header>

    <main>
        <section id="motivation">
            <h2>Pourquoi Sensibiliser ?</h2>
            <p>La sensibilisation à la corruption est cruciale pour promouvoir la transparence, l'éthique et la justice sociale. Elle aide à prévenir les abus de pouvoir et à renforcer la confiance dans les institutions.</p>
            <p>Nous croyons en un monde où chaque individu contribue à éradiquer la corruption.</p>
        </section>

        <section id="types-corruption">
            <h2>Les Différents Types de Corruption</h2>
            <a href="{{route('politique')}}"><h3>Corruption Politique</h3></a>
            <a href="{{route('education') }}"><h3>Corruption dans l'Éducation</h3></a>
            <a href="{{ route('sante') }}"><h3>Corruption dans le Secteur de la Santé</h3></a>
        </section>
    </main>
</body>
</html>
