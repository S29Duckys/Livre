<?php
ob_start();

?>



<body>

    <header>
        <h1>Mes Livres</h1>
        <a href="/">Voir Livres</a>
    </header>

    <main>
        <div class="books-header">
            <h2>Tout Les Livres</h2>
            <a href="<?= "/createBook/" ?>"><button>Créé</button></a>
        </div>

        <div class="books-grid">

            <?php foreach ($books as $book): ?>
                <div class="book-card">
                    <h3>📖 <?= htmlspecialchars($book['title']) ?></h3>

                    <h3><?= htmlspecialchars($book['id']) ?></h3>
                    <p><?= htmlspecialchars(substr($book['description'], 0, 120)) ?>...</p>

                    <div class="book-meta">
                        <span>🕒 Sortie le
                            <?= date("d M Y", strtotime($book['date'])) ?>
                        </span>
                        <form action="<?= "/book/" . htmlspecialchars($book['id']) ?>" method="post">
                            <input type="hidden" name="book_id" value="<?= $book['id'] ?>">
                            <button type="submit" class="eye-btn">👁</button>
                        </form>
                        <a href="<?= "/delbook/" . htmlspecialchars($book['id']) ?>"><button>del</button></a>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </main>

</body>


<?php
$content = ob_get_clean();
require VIEWS . 'layout.php';
