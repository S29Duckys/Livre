<?php
ob_start();


?>


<body>
    <header class="book-header">
        <h1 id="book-title">Titre du Livre</h1>
        <button class="back-btn" onclick="history.back()">◀ Retour</button>
    </header>

    <main class="book-container">
        <article class="book-cont
        
            <?php foreach ($page as $page): ?>ent">
            <div class="page">
                <h2>Chapitre 1</h2>
                <p>
                    <?= htmlspecialchars($page['content']) ?>
                </p>
                <span>
                    <?= htmlspecialchars($page['author']) ?>
                </span>
                <span>
                    <?= htmlspecialchars($page['numPage']) ?>
                </span>

            </div>


        <?php endforeach; ?>
        </article>
    </main>


    <?php
    $content = ob_get_clean();
    require VIEWS . 'layout.php';
