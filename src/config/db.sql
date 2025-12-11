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
    FOREIGN KEY (book_id) REFERENCES livres(id) ON DELETE CASCADE
    -- Changé 'books' en 'livre' pour correspondre au nom de la table
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Insertion des donner de test*/

-- D'abord insérer le livre
INSERT INTO livres (title, author, description, url, date) VALUES
('L''Art de la guerre', 'Sun Tzu', 'L''Art de la guerre est un court traité de stratégie militaire chinois, datant de la période des Printemps et Automnes', 'https://sympa.inria.fr/sympa/arc/typographie/2011-08/msg00072/art-de-la-guerre.pdf', '2025-01-01'),
('Dix Petits Nègres', 'Agatha Christie', 'Dans ce roman, dix personnes apparemment sans lien entre elles sont invitées à se rendre sur une île. Bien qu''elles soient seules à se trouver sur ce lieu, elles sont assassinées l''une après l''autre', 'https://mpineau.e-monsite.com/medias/files/dix.petits.negres.agatha.christie.pdf', '2024-06-15');

-- Ensuite insérer la page (avec book_id = 1 pour "L'Art de la guerre")

INSERT INTO pages (content, author, num_page, book_id) VALUES (
    'A R T I C L E
I
DE L''ÉVALUATION
Sun Tzu dit : La guerre est d''une importance vitale pour
l''État. C''est le domaine de la vie et de la mort : la conservation ou la perte de l''empire en dépendent ; il est impérieux de le bien régler. Ne pas faire de sérieuses réflexions sur ce qui
le concerne, c''est faire preuve d''une coupable indifférence pour la
conservation ou pour la perte de ce qu''on a de plus er, et c''est ce
qu''on ne doit pas trouver parmi nous.
Cinq oses principales doivent faire l''objet de nos continuelles méditations et de tous nos soins. Comme le font ces grands artistes qui,
lorsqu''ils entreprennent quelque ef-d''œuvre, ont toujours présent à
l''esprit le but qu''ils se proposent, meent à profit tout ce qu''ils voient,
tout ce qu''ils entendent, ne négligent rien pour acquérir de nouvelles
connaissances et tous les secours qui peuvent les conduire heureusement à leur fin.
Si nous voulons que la gloire et les succès accompagnent nos armes,
nous ne devons jamais perdre de vue : La doctrine, le temps, l''espace,
le commandement, la discipline.
La doctrine fait naître l''unité de penser ; elle nous inspire une même
manière de vivre et de mourir, et nous rend intrépides et inébranlables',
    'Sun Tzu',
    1,
    1
);

INSERT INTO pages (content, author, num_page, book_id) VALUES (
    'dans les malheurs et dans la mort.
Si nous connaissons bien le temps, nous n''ignorerons point ces deux
grands principes Yin et Yang par lesquels toutes les oses naturelles
sont formées et par lesquels les éléments reçoivent leurs différentes
modifications ; nous saurons le temps de leur union et de leur mutuel
concours pour la produion du froid, du aud, de la sérénité ou de
l''intempérie de l''air.
L''espace n''est pas moins digne de notre aention que le temps ;
étudions le bien, et nous aurons la connaissance du haut et du bas, du
loin comme du près, du large et de l''étroit, de ce qui demeure et de ce
qui ne fait que passer.
J''entends par commandement, l''équité, l''amour pour ceux en particulier qui nous sont soumis et pour tous les hommes en général ; la
science des ressources, le courage et la valeur, la rigueur. Telles sont
les qualités qui doivent caraériser celui qui est revêtu de la dignité de
général ; vertus nécessaires pour l''acquisition desquelles nous ne devons rien négliger : seules elles peuvent nous mere en état de marer
dignement à la tête des autres.
Aux connaissances dont je viens de parler, il faut ajouter celle de la
discipline. Posséder l''art de ranger les troupes ; n''ignorer aucune des
lois de la subordination et les faire observer à la rigueur ; être instruit
des devoirs particuliers de acun de nos subalternes ; savoir connaître
les différents emins par où on peut arriver à un même terme ; ne
pas dédaigner d''entrer dans un détail exa de toutes les oses qui
peuvent servir, et se mere au fait de acune d''elles en particulier.
Tout cela ensemble forme un corps de discipline dont la connaissance
pratique ne doit point éapper à la sagacité ni aux aentions d''un
général.
Vous donc que le oix du prince a placé à la tête des armées, jetez
les fondements de votre science militaire sur les cinq principes que je
viens d''établir. La vioire suivra partout vos pas : vous n''éprouverez
au contraire que les plus honteuses défaites si, par ignorance ou par
présomption, vous venez à les omere ou à les rejeter.
Les connaissances que je viens d''indiquer vous permeront de discerner, parmi les princes qui gouvernent le monde, celui qui a le plus',
    'Sun Tzu',
    2,
    1
);


INSERT INTO pages (content, author, num_page, book_id) VALUES (
    'de dofrine et de vertus ; vous connaîtrez les grands généraux qui
peuvent se trouver dans les différents royaumes, de sorte que vous
pourrez conjeurer assez sûrement quel est celui des deux antagonistes qui doit l''emporter ; et si vous devez entrer vous-même en lice,
vous pourrez raisonnablement vous flater de devenir viorieux.
Ces mêmes connaissances vous feront prévoir les moments les plus
favorables, le temps et l''espace étant conjugués, pour ordonner le mouvement des troupes et les itinéraires qu''elles devront suivre, et dont
vous réglerez à propos toutes les mares. Vous ne commencerez ni
ne terminerez jamais la campagne hors de saison. Vous connaîtrez le
fort et le faible, tant de ceux qu''on aura confiés à vos soins que des ennemis que vous aurez à combare. Vous saurez en quelle quantité et
dans quel état se trouveront les munitions de guerre et de boue des
deux armées, vous distribuerez les récompenses avec libéralité, mais
avec oix, et vous n''épargnerez pas les âtiments quand il en sera
besoin.
Admirateurs de vos vertus et de vos capacités, les officiers généraux
placés sous votre autorité vous serviront autant par plaisir que par devoir. Ils entreront dans toutes vos vues, et leur exemple entraînera
infailliblement celui des subalternes, et les simples soldats concourront eux-mêmes de toutes leurs forces à vous assurer les plus glorieux
succès. Estimé, respeé, éri des vôtres, les peuples voisins viendront
avec joie se ranger sous les étendards du prince que vous servez, ou
pour vivre sous ses lois, ou pour obtenir simplement sa proteion.
Également instruit de ce que vous pourrez et de ce que vous ne
pourrez pas, vous ne formerez aucune entreprise qui ne puisse être
menée à bonne fin. Vous verrez, avec la même pénétration, ce qui sera
loin de vous comme ce qui se passera sous vos yeux, et ce qui se passera
sous vos yeux comme ce qui en est le plus éloigné. Vous profiterez de
la dissension qui surgit ez vos ennemis pour airer les mécontents
dans votre parti en ne leur ménageant ni les promesses, ni les dons, ni
les récompenses.
Si vos ennemis sont plus puissants et plus forts que vous, vous ne les
aaquerez point, vous éviterez avec un grand soin ce qui peut conduire
à un engagement général ; vous caerez toujours avec une extrême at-',
    'Sun Tzu',
    3,
    1
);


INSERT INTO pages (content, author, num_page, book_id) VALUES (
    'tention l''état où vous vous trouverez. Il y aura des occasions où vous
vous abaisserez, et d''autres où vous affeerez d''avoir peur. Vous feindrez quelquefois d''être faible afin que vos ennemis, ouvrant la porte à
la présomption et à l''orgueil, viennent ou vous aaquer mal à propos,
ou se laissent surprendre eux-mêmes et tailler en pièces honteusement.
Vous ferez en sorte que ceux qui vous sont inférieurs ne puissent jamais pénétrer vos desseins. Vous tiendrez vos troupes toujours alertes,
toujours en mouvement et dans l''occupation, pour empêer qu''elles
ne se laissent amollir par un honteux repos.
Si vous prêtez quelque intérêt aux avantages de mes plans, faites en
sorte de créer des situations qui contribuent à leur accomplissement.
J''entends par situation que le général agisse à bon escient, en harmonie
avec ce qui est avantageux, et, par là-même, dispose de la maîtrise de
l''équilibre.
Toute campagne guerrière doit être réglée sur le semblant. Feignez
le désordre, ne manquez jamais d''offrir un appât à l''ennemi pour le
leurrer, simulez l''infériorité pour encourager son arrogance, saez attiser son courroux pour mieux le plonger dans la confusion : sa convoitise le lancera sur vous pour s''y briser.
Hâtez vos préparatifs lorsque vos adversaires se concentrent ; là où
ils sont puissants, évitez-les. Plongez l''adversaire dans d''inextricables
épreuves et prolongez son épuisement en vous tenant à distance ; veillez
à fortifier vos alliances au-dehors, et à affermir vos positions au-dedans
par une politique de soldats-paysans. el regret que de tout risquer
en un seul combat, en négligeant la stratégie viorieuse, et faire dépendre le sort de vos armes d''une unique bataille ! Lorsque l''ennemi
est uni, divisez-le ; et aaquez là où il n''est point préparé, en surgissant lorsqu''il ne vous aend point. Telles sont les clefs stratégiques de
la vioire, mais prenez garde de ne point les engager par avance.
e acun se représente les évaluations faites dans le temple, avant
les hostilités, comme des mesures : elles disent la vioire lorsqu''elles
démontrent que votre force est supérieure à celle de l''ennemi ; elles indiquent la défaite lorsqu''elles démontrent qu''il est inférieur en force.
Considérez qu''avec de nombreux calculs on peut remporter la victoire, redoutez leur insuffisance. Combien celui qui n''en fait point a',
    'Sun Tzu',
    4,
    1
);


INSERT INTO pages (content, author, num_page, book_id) VALUES (
    'peu de ances de gagner ! C''est grâce à cee méthode que j''examine
la situation, et l''issue apparaîtra clairement.
',
    'Sun Tzu',
    5,
    1
);


