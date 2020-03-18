-- FRUITIZ 
--
--  Définition des valeurs

-- table compte

INSERT INTO compte (id_use, nm_use, mail_use, tel_use, adr_use, vil_use, mdp_use) VALUES
(1, DJ_Polo, polo@crapier.dj, 320452587, 8 Boulevard de la liberté, Lille, DJ_Polo),
(2, WLZ, cyril@wlz.bg, 874565987, NULL, NULL, WLZ),
(3, oilet24, telio@mysql.php, 65147793, 8 rue des  smoothies, Wasquehal, oilet24);

-- table fruit

INSERT INTO fruit (id_fru, nm_fru) VALUES
(1, abricot),
(2, ananas),
(3, avocat),
(4, banane),
(5, cerise),
(6, citron),
(7, fraise),
(8, framboise),
(9, fruit de la passion),
(10, kiwi),
(11, litchi),
(12, mangue),
(13, melon),
(14, myrtille),
(15, orange),
(16, pamplemousse),
(17, pasteque),
(18, poire),
(19, pomme),
(20, raisin);

-- table jus

INSERT INTO jus (id_jus, nm_jus) VALUES
(1, abricot),
(2, ananas),
(3, avocat),
(4, banane),
(5, cerise),
(6, citron),
(7, fraise),
(8, framboise),
(9, fruit de la passion),
(10, kiwi),
(11, litchi),
(12, mangue),
(13, melon),
(14, myrtille),
(15, orange),
(16, pamplemousse),
(17, pasteque),
(18, poire),
(19, pomme),
(20, raisin);

-- table recipient

INSERT INTO recipient (id_rec, nm_rec) VALUES
(1, petit),
(2, moyen),
(3, grand);

-- table supplement

INSERT INTO supplement (id_sup, nm_sup) VALUES
(1, avoine),
(2, caramel),
(3, chocolat),
(4, lait),
(5, miel);