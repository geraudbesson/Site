<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Concours Créatif</title>
    <link rel="icon" type="image/png" href="img/Logo-Noir.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" type="text/css" href="styles-admin.css">
    <link rel="stylesheet" type="text/css" href="styles-participer.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
</head>
<body>   
    <header>
        <div id="logo">
            <img src="img/Logo-Blanc.png" alt="Logo de votre site">
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="participer.php">Participer</a></li>
                <li><a href="voter.php">Voter</a></li>
            </ul>
        </nav>
        <div id="connexion">
            <button><a href="se_connecter.php">Connexion</a></button>
            <button><a href="https://discord.com/api/oauth2/authorize?client_id=1169333837633957888&redirect_uri=http%3A%2F%2Flocalhost%2FSite%2Fprocess-oauth.php&response_type=code&scope=identify%20guilds">Connexion discord</a></button>
            <img class="h-12 w-12 rounded-full mr-6" src="https://cdn.discordapp.com/avatars/'.$userData['discord_id'].'/'.$userData['discord_avatar'].'.jpg"/>
        </div>
    </header>
</body>
</html>