-- FRUITIZ 

--  Insertion des données
START TRANSACTION;


INSERT INTO `compte` (`id_use`, `nom_use`, `mail_use`, `tel_use`, `adr_use`, `vil_use`, `mdp_use`) VALUES
(1, 'DJ_Polo', 'polo@crapier.dj', 320452587, '8_Boulevard_de_la_Liberte', 'Lille', 'DJ_Polo'),
(2, 'WLZ', 'cyril@wlz.bg', 874565987, 'NULL', 'NULL', 'WLZ'),
(3, 'oilet24', 'telio@mysql.php', 65147793, '8_rue_des_smoothies', 'Wasquehal', 'oilet24');

--
-- Déchargement des données de la table `fruit`
--

INSERT INTO `fruit` (`id_fru`, `nom_fru`) VALUES
(1, 'abricot'),
(2, 'ananas'),
(3, 'avocat'),
(4, 'banane'),
(5, 'cerise'),
(6, 'citron'),
(7, 'fraise'),
(8, 'framboise'),
(9, 'fruit_de_la_passion'),
(10, 'kiwi'),
(11, 'litchi'),
(12, 'mangue'),
(13, 'melon'),
(14, 'myrtille'),
(15, 'orange'),
(16, 'pamplemousse'),
(17, 'pasteque'),
(18, 'poire'),
(19, 'pomme'),
(20, 'raisin');

--
-- Déchargement des données de la table `jus`
--

INSERT INTO `jus` (`id_jus`, `nom_jus`) VALUES
(1, 'abricot'),
(2, 'ananas'),
(3, 'avocat'),
(4, 'banane'),
(5, 'cerise'),
(6, 'citron'),
(7, 'fraise'),
(8, 'framboise'),
(9, 'fruit_de_la_passion'),
(10, 'kiwi'),
(11, 'litchi'),
(12, 'mangue'),
(13, 'melon'),
(14, 'myrtille'),
(15, 'orange'),
(16, 'pamplemousse'),
(17, 'pasteque'),
(18, 'poire'),
(19, 'pomme'),
(20, 'raisin');

--
-- Déchargement des données de la table `recipient`
--

INSERT INTO `recipient` (`id_rec`, `nom_rec`) VALUES
(1, 'petit'),
(2, 'moyen'),
(3, 'grand');

--
-- Déchargement des données de la table `supplement`
--

INSERT INTO `supplement` (`id_sup`, `nom_sup`) VALUES
(1, 'avoine'),
(2, 'caramel'),
(3, 'chocolat'),
(4, 'lait'),
(5, 'miel');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
