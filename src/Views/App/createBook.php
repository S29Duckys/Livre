<?php
ob_start();
?>

<body>
    <header class="header">
        <h1>Mes Livres</h1>
        <a href="/">Voir Livres</a>
    </header>

    <div class="container">
        <div class="form-header">
            <svg viewBox="0 0 24 24">
                <path d="M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM6 4h5v8l-2.5-1.5L6 12V4z" />
            </svg>
            <h2>Créer un Livre</h2>
        </div>

        <form method="post" action="/createbook/" class="form-container">
            <div class="form-group">
                <label>
                    <svg viewBox="0 0 24 24">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                    </svg>
                    Titre *
                </label>
                <input type="text" placeholder="Titre du livre" name="titre" required>
            </div>

            <div class="form-group">
                <label>
                    <svg viewBox="0 0 24 24">
                        <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                    </svg>
                    Auteur *
                </label>
                <input type="text" placeholder="Auteur du livre" name="author" required>
            </div>

            <div class="form-group">
                <label>
                    <svg viewBox="0 0 24 24">
                        <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" />
                    </svg>
                    Description
                </label>
                <textarea placeholder="Description du livre" name="description" rows="4"></textarea>
            </div>

            <div class="form-group">
                <label>
                    <svg viewBox="0 0 24 24">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.94-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.84 3.97-2.1 5.39z" />
                    </svg>
                    URL (PDF du livre)
                </label>
                <input type="url" placeholder="https://exemple.com/livre.pdf" name="url">
            </div>

            <div class="form-group date-group">
                <label>
                    <svg viewBox="0 0 24 24">
                        <path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z" />
                    </svg>
                    Date de sortie
                </label>
                <input type="date" name="date" value="<?= date('Y-m-d') ?>">
            </div>

            <div class="button-group">
                <button type="submit" class="btn btn-create">✨ Créer le livre</button>
                <a href="/" class="btn btn-cancel">❌ Annuler</a>
            </div>
        </form>
    </div>
</body>

<?php
$content = ob_get_clean();
require VIEWS . 'layout.php';
?>