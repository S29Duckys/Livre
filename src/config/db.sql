/* Création de la DB */
CREATE DATABASE IF NOT EXISTS eval_livre CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE eval_livre;

/* Création de la table Livre */
CREATE TABLE IF NOT EXISTS livres (
    id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    title VARCHAR(255) NOT NULL,
    author VARCHAR(255) NOT NULL,
    description TEXT,
    url VARCHAR(255),
    date DATE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/* Création de la table Pages */
CREATE TABLE IF NOT EXISTS pages (
    id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    content TEXT NOT NULL,  -- TEXT au lieu de VARCHAR(8192)
    author VARCHAR(30),
    num_page INT NOT NULL,
    book_id INT NOT NULL,
    FOREIGN KEY (book_id) REFERENCES livre(id) ON DELETE CASCADE
    -- Changé 'books' en 'livre' pour correspondre au nom de la table
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Insertion des donner de test*/

-- D'abord insérer le livre
INSERT INTO livre (title, author, description, url, date) VALUES
('L''Art de la guerre', 'Sun Tzu', 'L''Art de la guerre est un court traité de stratégie militaire chinois, datant de la période des Printemps et Automnes', 'https://sympa.inria.fr/sympa/arc/typographie/2011-08/msg00072/art-de-la-guerre.pdf', '2025-01-01'),
('Dix Petits Nègres', 'Agatha Christie', 'Dans ce roman, dix personnes apparemment sans lien entre elles sont invitées à se rendre sur une île. Bien qu''elles soient seules à se trouver sur ce lieu, elles sont assassinées l''une après l''autre', 'https://mpineau.e-monsite.com/medias/files/dix.petits.negres.agatha.christie.pdf', '2024-06-15');

-- Ensuite insérer la page (avec book_id = 1 pour "L'Art de la guerre")
INSERT INTO pages (content, author, num_page, book_id) VALUES (
    '孫子兵法
l''Art de la guerre
DE
Sun Tzu
La stratégie chinoise ou comment s''informer, estimer, diviser,
détourner, tromper, et vaincre
sans coup férir.
traduction de
Joseph-Marie Amiot
suivie du
texte original
en chinois',
    'Sun Tzu',
    1,
    1
);