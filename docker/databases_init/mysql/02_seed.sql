SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci;

INSERT INTO genres (name) VALUES
('Action'),
('Aventure'),
('Science-Fiction'),
('Drame'),
('Crime'),
('Thriller'),
('Fantastique'),
('Animation'),
('Comédie'),
('Horreur');


INSERT INTO movies (title, director, year, duration, synopsis, poster_url) VALUES
('Inception','Christopher Nolan',2010,148,
'Dom Cobb est un voleur d''un genre très particulier : il s''infiltre dans les rêves des autres pour en extraire les secrets les plus précieux enfouis dans l''inconscient. Cette capacité rare l''a rendu extrêmement recherché dans le monde de l''espionnage industriel, mais elle a aussi fait de lui un fugitif qui a perdu tout ce qu''il aimait. Une dernière mission lui est proposée : non pas voler une idée, mais en implanter une dans l''esprit d''un héritier d''empire industriel. Pour réussir, Cobb et son équipe doivent plonger dans plusieurs niveaux de rêve imbriqués, où la frontière entre réalité et illusion devient de plus en plus fragile.',
'https://m.media-amazon.com/images/M/MV5BMjAxMzY3NjcxNF5BMl5BanBnXkFtZTcwNTI5OTM0Mw@@._V1_SX300.jpg'),

('Interstellar','Christopher Nolan',2014,169,
'Dans un futur proche, la Terre est ravagée par des tempêtes de poussière et la disparition progressive des cultures agricoles. Cooper, ancien pilote de la NASA devenu fermier, découvre une mission secrète visant à sauver l''humanité. Avec une équipe de scientifiques, il traverse un trou de ver près de Saturne afin d''explorer des planètes susceptibles d''accueillir une nouvelle civilisation humaine. Au fil du voyage, ils affrontent des mondes hostiles, des paradoxes temporels et les conséquences émotionnelles d''une mission qui pourrait les séparer à jamais de ceux qu''ils aiment.',
'https://m.media-amazon.com/images/M/MV5BYzdjMDAxZGItMjI2My00ODA1LTlkNzItOWFjMDU5ZDJlYWY3XkEyXkFqcGc@._V1_SX300.jpg'),

('Matrix','Lana Wachowski',1999,136,
'Thomas Anderson mène une double vie : programmeur discret le jour, hacker recherché la nuit sous le pseudonyme de Neo. Lorsqu''il rencontre Morpheus, un mystérieux rebelle, il découvre que la réalité telle qu''il la connaît n''est qu''une illusion créée par des machines pour asservir l''humanité. Propulsé dans un monde où les lois physiques peuvent être contournées, Neo doit apprendre à maîtriser ses nouvelles capacités et comprendre son rôle dans une guerre secrète entre les humains libres et les intelligences artificielles qui contrôlent la planète.',
'https://m.media-amazon.com/images/I/51EG732BV3L.jpg'),

('Le Parrain','Francis Ford Coppola',1972,175,
'Dans l''Amérique de l''après-guerre, la famille Corleone est l''une des organisations criminelles les plus puissantes de New York. Vito Corleone, patriarche respecté et redouté, dirige ses affaires avec un mélange de loyauté, de tradition et de brutalité. Lorsque son plus jeune fils Michael, ancien héros de guerre qui souhaitait rester en dehors des activités familiales, est entraîné malgré lui dans cet univers violent, il entame une transformation progressive qui le mènera à devenir l''un des chefs mafieux les plus redoutés de son époque.',
'https://m.media-amazon.com/images/M/MV5BMDI2OTU2MzctMzYwZC00MjM5LThmNmQtZjRhOWFlMjQ4NjkyXkEyXkFqcGc@._V1_SX300.jpg'),

('Fight Club','David Fincher',1999,139,
'Un employé de bureau souffrant d''insomnie chronique mène une vie vide de sens, rythmée par la consommation et la solitude. Sa rencontre avec Tyler Durden, un vendeur de savon charismatique et anarchiste, bouleverse sa vision du monde. Ensemble, ils créent un club de combat clandestin où des hommes désillusionnés viennent se libérer de leurs frustrations en se battant à mains nues. Mais ce mouvement évolue rapidement vers quelque chose de bien plus radical, menaçant de plonger la société dans le chaos.',
'https://m.media-amazon.com/images/I/51v5ZpFyaFL._AC_.jpg'),

('Forrest Gump','Robert Zemeckis',1994,142,
'Forrest Gump, homme simple doté d''une grande gentillesse mais d''un quotient intellectuel limité, traverse plusieurs décennies de l''histoire américaine sans jamais vraiment comprendre l''importance de ce qu''il vit. De la guerre du Vietnam aux débuts d''Apple en passant par la culture populaire des années 60 et 70, Forrest se retrouve témoin d''événements historiques majeurs. Au fil de son parcours, son amour indéfectible pour son amie d''enfance Jenny devient le fil conducteur d''une vie marquée par la naïveté, la chance et l''humanité.',
'https://m.media-amazon.com/images/M/MV5BNDYwNzVjMTItZmU5YS00YjQ5LTljYjgtMjY2NDVmYWMyNWFmXkEyXkFqcGc@._V1_SX300.jpg'),

('Gladiator','Ridley Scott',2000,155,
'Maximus, général romain loyal et respecté, est trahi lorsque le nouvel empereur Commode assassine son père et s''empare du trône. Réduit en esclavage et contraint de devenir gladiateur, Maximus gravit les échelons des arènes sanglantes de Rome. Animé par un désir brûlant de justice et de vengeance, il devient un symbole d''espoir pour le peuple et une menace directe pour l''empereur corrompu.',
'https://m.media-amazon.com/images/M/MV5BYWQ4YmNjYjEtOWE1Zi00Y2U4LWI4NTAtMTU0MjkxNWQ1ZmJiXkEyXkFqcGc@._V1_SX300.jpg'),

('Le Seigneur des Anneaux : La Communauté de l''Anneau','Peter Jackson',2001,178,
'Dans la paisible Comté, le jeune hobbit Frodon hérite d''un anneau mystérieux qui se révèle être une arme redoutable créée par le seigneur des ténèbres Sauron. Pour empêcher la domination du monde par les forces du mal, une communauté composée de différentes races de la Terre du Milieu se forme afin d''accompagner Frodon dans une quête périlleuse visant à détruire l''anneau au cœur du territoire ennemi.',
'https://m.media-amazon.com/images/I/81EBp0vOZZL._AC_SL1500_.jpg'),

('Blade Runner 2049','Denis Villeneuve',2017,164,
'Trente ans après les événements du premier film, l''agent K, un blade runner chargé de traquer les réplicants illégaux, découvre un secret enfoui depuis longtemps qui pourrait bouleverser l''équilibre déjà fragile entre humains et androïdes. Cette découverte le mène sur la trace de Rick Deckard, un ancien blade runner disparu depuis des décennies.',
'https://m.media-amazon.com/images/M/MV5BOWQ4YTBmNTQtMDYxMC00NGFjLTkwOGQtNzdhNmY1Nzc1MzUxXkEyXkFqcGc@._V1_SX300.jpg'),

('Dune','Denis Villeneuve',2021,155,
'Paul Atréides, héritier d''une grande maison noble, se retrouve au cœur d''une lutte politique et militaire pour le contrôle de la planète désertique Arrakis. Cette planète est la seule source d''une substance extrêmement précieuse appelée "l''épice", indispensable aux voyages spatiaux et au pouvoir impérial. Tandis que des complots se multiplient autour de lui, Paul découvre peu à peu son destin et les pouvoirs mystérieux qui pourraient faire de lui le guide d''un peuple opprimé.',
'https://m.media-amazon.com/images/M/MV5BMGJlMGM3NDAtOWNhMy00MWExLWI2MzEtMDQ0ZDIzZDY5ZmQ2XkEyXkFqcGc@._V1_SX300.jpg'),

('Jurassic Park','Steven Spielberg',1993,127,
'Un milliardaire passionné de génétique crée un parc d''attractions révolutionnaire où des dinosaures ont été recréés grâce à l''ADN fossilisé. Avant l''ouverture officielle, plusieurs scientifiques sont invités à visiter le parc afin d''évaluer sa sécurité. Mais lorsque les systèmes de contrôle échouent et que les créatures préhistoriques s''échappent, les visiteurs doivent survivre dans un environnement où l''homme n''est plus au sommet de la chaîne alimentaire.',
'https://m.media-amazon.com/images/M/MV5BMjM2MDgxMDg0Nl5BMl5BanBnXkFtZTgwNTM2OTM5NDE@._V1_SX300.jpg'),

('Mad Max: Fury Road','George Miller',2015,120,
'Dans un monde post-apocalyptique ravagé par la guerre et la pénurie d''eau, Max Rockatansky erre seul à travers les terres désertiques. Il croise la route de Furiosa, une guerrière rebelle qui tente de libérer plusieurs femmes retenues prisonnières par un tyran brutal. Ensemble, ils se lancent dans une fuite désespérée à travers le désert, poursuivis par une armée fanatique.',
'https://m.media-amazon.com/images/I/81Zt42ioCgL._AC_SL1500_.jpg'),

('Avatar','James Cameron',2009,162,
'Sur la planète Pandora, un ancien marine paraplégique est recruté pour participer à un programme scientifique permettant de contrôler un corps hybride appelé avatar. Au contact des Na''vi, peuple autochtone vivant en harmonie avec la nature, il commence à remettre en question la mission militaire visant à exploiter les ressources de la planète.',
'https://m.media-amazon.com/images/M/MV5BMDEzMmQwZjctZWU2My00MWNlLWE0NjItMDJlYTRlNGJiZjcyXkEyXkFqcGc@._V1_SX300.jpg'),

('Toy Story','John Lasseter',1995,81,
'Dans la chambre d''un jeune garçon nommé Andy, les jouets prennent vie dès que les humains quittent la pièce. Woody, le cow-boy préféré de l''enfant, voit son statut menacé par l''arrivée de Buzz l''Éclair, un jouet spatial sophistiqué persuadé d''être un véritable ranger de l''espace. Leur rivalité se transforme progressivement en amitié lorsqu''ils doivent unir leurs forces pour retrouver leur chemin jusqu''à Andy.',
'https://m.media-amazon.com/images/M/MV5BZTA3OWVjOWItNjE1NS00NzZiLWE1MjgtZDZhMWI1ZTlkNzYwXkEyXkFqcGc@._V1_SX300.jpg'),

('Se7en','David Fincher',1995,127,
'Deux inspecteurs de police, l''un expérimenté et proche de la retraite, l''autre jeune et idéaliste, enquêtent sur une série de meurtres particulièrement macabres. Le tueur semble s''inspirer des sept péchés capitaux pour choisir et mettre en scène ses victimes. Au fur et à mesure que l''enquête progresse, les crimes deviennent de plus en plus troublants, menant à une conclusion aussi choquante qu''inoubliable.',
'https://m.media-amazon.com/images/M/MV5BY2IzNzMxZjctZjUxZi00YzAxLTk3ZjMtODFjODdhMDU5NDM1XkEyXkFqcGc@._V1_SX300.jpg'),

('Le Roi Lion','Roger Allers',1994,88,
'Simba, jeune lion destiné à devenir roi de la savane, voit sa vie basculer lorsque son oncle manipulateur provoque la mort de son père et le pousse à fuir son royaume. Élevé loin de ses responsabilités, Simba doit un jour affronter son passé et reprendre la place qui lui revient dans le cycle de la vie.',
'https://m.media-amazon.com/images/M/MV5BZGRiZDZhZjItM2M3ZC00Y2IyLTk3Y2MtMWY5YjliNDFkZTJlXkEyXkFqcGc@._V1_SX300.jpg'),

('Titanic','James Cameron',1997,195,
'À bord du paquebot le plus luxueux jamais construit, deux passagers issus de milieux sociaux opposés tombent amoureux lors du voyage inaugural du Titanic. Mais leur histoire romantique se déroule sur fond de catastrophe imminente lorsque le navire percute un iceberg dans l''Atlantique Nord.',
'https://m.media-amazon.com/images/M/MV5BYzYyN2FiZmUtYWYzMy00MzViLWJkZTMtOGY1ZjgzNWMwN2YxXkEyXkFqcGc@._V1_SX300.jpg'),

('Parasite','Bong Joon-ho',2019,132,
'Une famille pauvre de Séoul élabore un plan ingénieux pour s''infiltrer progressivement dans la vie d''une riche famille en se faisant engager comme employés domestiques. Ce jeu de manipulation sociale finit cependant par révéler des tensions inattendues et une critique acerbe des inégalités économiques.',
'https://m.media-amazon.com/images/M/MV5BYjk1Y2U4MjQtY2ZiNS00OWQyLWI3MmYtZWUwNmRjYWRiNWNhXkEyXkFqcGc@._V1_SX300.jpg'),

('Whiplash','Damien Chazelle',2014,106,
'Andrew, jeune batteur de jazz ambitieux, intègre un prestigieux conservatoire où il attire l''attention d''un professeur réputé pour ses méthodes d''enseignement extrêmement dures. Obsédé par la perfection, Andrew repousse ses limites physiques et mentales pour atteindre l''excellence musicale.',
'https://m.media-amazon.com/images/M/MV5BMDFjOWFkYzktYzhhMC00NmYyLTkwY2EtYjViMDhmNzg0OGFkXkEyXkFqcGc@._V1_SX300.jpg'),

('The Dark Knight','Christopher Nolan',2008,152,
'Batman poursuit sa lutte contre le crime organisé à Gotham avec l''aide du procureur Harvey Dent et du commissaire Gordon. Leur alliance semble pouvoir débarrasser la ville de la corruption, jusqu''à l''apparition du Joker, un criminel anarchiste qui cherche à plonger Gotham dans le chaos et à tester les limites morales de ses protecteurs.',
'https://m.media-amazon.com/images/M/MV5BMTMxNTMwODM0NF5BMl5BanBnXkFtZTcwODAyMTk2Mw@@._V1_SX300.jpg');



INSERT INTO `users` (`email`, `password`, `username`) VALUES
('test@mail.com', '$argon2id$v=19$m=65536,t=4,p=1$YmhzWXVrSUhLRjF2LzFYWA$lOaVte9enguiu4KoKR/JmiIJ9ahrsn/mwYeO7daispo', 'test-user');



INSERT INTO movie_genres (movie_id, genre_id) VALUES

-- Inception
(1,3),
(1,6),

-- Interstellar
(2,3),
(2,4),
(2,2),

-- Matrix
(3,3),
(3,1),

-- Le Parrain
(4,5),
(4,4),

-- Fight Club
(5,4),
(5,6),

-- Forrest Gump
(6,4),
(6,9),

-- Gladiator
(7,1),
(7,2),
(7,4),

-- LOTR - Communauté de l'anneau
(8,2),
(8,7),

-- Blade Runner 2049
(9,3),
(9,6),

-- Dune
(10,3),
(10,2),

-- Jurassic Park
(11,3),
(11,2),

-- Mad Max Fury Road
(12,1),
(12,2),

-- Avatar
(13,3),
(13,2),

-- Toy Story
(14,8),
(14,9),

-- Seven
(15,5),
(15,6),

-- Le Roi Lion
(16,8),
(16,2),

-- Titanic
(17,4),

-- Parasite
(18,4),
(18,6),

-- Whiplash
(19,4),

-- The Dark Knight
(20,1),
(20,5),
(20,6);