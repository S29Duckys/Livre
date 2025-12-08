<?php
ob_start();
?>



<body>

    <header>
        <h1>Mes Livres</h1>
        <a href="#">Voir Livres</a>
    </header>

    <main>
        <div class="books-header">
            <h2>Tout Les Livres</h2>
            <button>Créer</button>
        </div>

        <div class="books-grid">

            <?php foreach ($books as $book): ?>
                <div class="book-card">
                    <h3>📖 <?= htmlspecialchars($book['title']) ?></h3>

                    <p><?= htmlspecialchars(substr($book['description'], 0, 120)) ?>...</p>

                    <div class="book-meta">
                        <span>🕒 Sortie le
                            <?= date("d M Y", strtotime($book['date'])) ?>
                        </span>

                        <button class="eye-btn">👁</button>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </main>

</body>


<?php
$content = ob_get_clean();
require VIEWS . 'layout.php';
