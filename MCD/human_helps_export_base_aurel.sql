-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 08 jan. 2021 à 15:48
-- Version du serveur :  10.4.6-MariaDB
-- Version de PHP :  7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `human_helps`
--

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

CREATE TABLE `avis` (
  `idAvis` int(11) NOT NULL,
  `auteur` varchar(50) NOT NULL,
  `temoignage` text NOT NULL,
  `dateCommentaire` date NOT NULL,
  `idUtilisateur` int(11) NOT NULL,
  `idBlog` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `avis`
--

INSERT INTO `avis` (`idAvis`, `auteur`, `temoignage`, `dateCommentaire`, `idUtilisateur`, `idBlog`) VALUES
(1, 'TestAuteur2', 'salut', '2020-12-31', 1, 1),
(2, 'TestAuteur2', 'bonjour', '2021-01-04', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `blog`
--

CREATE TABLE `blog` (
  `idArticle` int(11) NOT NULL,
  `titreArticle` varchar(100) NOT NULL,
  `descriptionArticle` text NOT NULL,
  `dateArticle` date NOT NULL,
  `dateAjoutArticle` date NOT NULL,
  `imageArticle` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `blog`
--

INSERT INTO `blog` (`idArticle`, `titreArticle`, `descriptionArticle`, `dateArticle`, `dateAjoutArticle`, `imageArticle`) VALUES
(1, 'nouveau article', 'test article modifi&eacute;', '2020-12-24', '2021-01-04', '0');

-- --------------------------------------------------------

--
-- Structure de la table `etablissement`
--

CREATE TABLE `etablissement` (
  `idEtablissement` int(11) NOT NULL,
  `denomination` varchar(100) NOT NULL,
  `adresseEtablissement` varchar(100) NOT NULL,
  `villeEtablissement` varchar(100) NOT NULL,
  `codePostalEtablissement` int(11) NOT NULL,
  `mailEtablissement` varchar(255) NOT NULL,
  `telEtablissement` int(11) NOT NULL,
  `dateAjoutEtablissement` date NOT NULL,
  `idUtilisateur` int(11) NOT NULL,
  `idTypeActivite` int(11) DEFAULT NULL,
  `idPays` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `etablissement`
--

INSERT INTO `etablissement` (`idEtablissement`, `denomination`, `adresseEtablissement`, `villeEtablissement`, `codePostalEtablissement`, `mailEtablissement`, `telEtablissement`, `dateAjoutEtablissement`, `idUtilisateur`, `idTypeActivite`, `idPays`) VALUES
(1, 'PREMIER ETABLISSEMENT', '54 Rue du Sahara', 'PREMIER', 15115, 'PREMIER@mail.com', 65847520, '2021-01-01', 8, NULL, 1),
(3, 'tres loin ', 'Marrakech', 'Marrakech', 5412, 'premassociation@mail.com', 606605082, '2020-12-31', 36, NULL, 1),
(4, 'Dernier ', 'Etablissement loin', 'Marrakech', 12546, 'derniereassoc@mail.com', 30203020, '2020-12-31', 37, NULL, 1),
(5, 'Etablissement de la joie', '5 rue tomb&eacute;e', 'kalakala', 6292, 'etablissement@joie.com', 660606005, '2021-01-04', 38, NULL, 2);

-- --------------------------------------------------------

--
-- Structure de la table `mission`
--

CREATE TABLE `mission` (
  `idMission` int(11) NOT NULL,
  `titreMission` varchar(100) NOT NULL,
  `descriptionMission` text NOT NULL,
  `typeFormation` tinyint(1) NOT NULL,
  `imageMission` blob NOT NULL,
  `dateDebut` date NOT NULL,
  `duree` int(11) NOT NULL,
  `dateAjout` date NOT NULL,
  `idPays` int(11) NOT NULL,
  `idEtablissement` int(11) NOT NULL,
  `idTypeActivite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `mission`
--

INSERT INTO `mission` (`idMission`, `titreMission`, `descriptionMission`, `typeFormation`, `imageMission`, `dateDebut`, `duree`, `dateAjout`, `idPays`, `idEtablissement`, `idTypeActivite`) VALUES
(1, 'Premi&egrave;re mission modifi&eacute;e retour au d&eacute;tail pour la modif', 'NOUVELLE DESCRIPTION PLUS CONFORME', 1, '', '2020-11-03', 10, '2021-01-07', 1, 1, 1),
(3, 'Première mission', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam asperiores laborum excepturi debitis molestias, dolorum iusto iure saepe vitae amet, animi quidem natus, facilis voluptas ipsum obcaecati. Fuga, possimus quam?\r\n        Quis iure quam veritatis doloremque magnam facilis repellendus, alias tempora repudiandae dolorum aspernatur cum deleniti iusto! Necessitatibus, magnam! Consectetur ducimus rerum molestiae nesciunt magni quas omnis et beatae vitae atque?\r\n        Facere ullam eveniet sint tempore iste laboriosam ratione exercitationem sequi consectetur velit numquam ea quisquam ab consequatur vel porro quia, molestiae quam architecto quae perspiciatis laudantium harum. Cum, facilis possimus.', 1, 0x30, '2020-11-03', 10, '2020-11-16', 1, 1, 1),
(4, 'DEUXIEME MISSION', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam asperiores laborum excepturi debitis molestias, dolorum iusto iure saepe vitae amet, animi quidem natus, facilis voluptas ipsum obcaecati. Fuga, possimus quam?\r\n        Quis iure quam veritatis doloremque magnam facilis repellendus, alias tempora repudiandae dolorum aspernatur cum deleniti iusto! Necessitatibus, magnam! Consectetur ducimus rerum molestiae nesciunt magni quas omnis et beatae vitae atque?\r\n        Facere ullam eveniet sint tempore iste laboriosam ratione exercitationem sequi consectetur velit numquam ea quisquam ab consequatur vel porro quia, molestiae quam architecto quae perspiciatis laudantium harum. Cum, facilis possimus.', 1, 0x30, '2020-11-27', 30, '2020-11-18', 1, 1, 2),
(5, 'MISSION NOE', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam asperiores laborum excepturi debitis molestias, dolorum iusto iure saepe vitae amet, animi quidem natus, facilis voluptas ipsum obcaecati. Fuga, possimus quam?\r\n        Quis iure quam veritatis doloremque magnam facilis repellendus, alias tempora repudiandae dolorum aspernatur cum deleniti iusto! Necessitatibus, magnam! Consectetur ducimus rerum molestiae nesciunt magni quas omnis et beatae vitae atque?\r\n        Facere ullam eveniet sint tempore iste laboriosam ratione exercitationem sequi consectetur velit numquam ea quisquam ab consequatur vel porro quia, molestiae quam architecto quae perspiciatis laudantium harum. Cum, facilis possimus.', 1, 0x30, '2020-11-29', 30, '2020-12-28', 1, 1, 1),
(11, 'Troisieme', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam asperiores laborum excepturi debitis molestias, dolorum iusto iure saepe vitae amet, animi quidem natus, facilis voluptas ipsum obcaecati. Fuga, possimus quam?\r\n        Quis iure quam veritatis doloremque magnam facilis repellendus, alias tempora repudiandae dolorum aspernatur cum deleniti iusto! Necessitatibus, magnam! Consectetur ducimus rerum molestiae nesciunt magni quas omnis et beatae vitae atque?\r\n        Facere ullam eveniet sint tempore iste laboriosam ratione exercitationem sequi consectetur velit numquam ea quisquam ab consequatur vel porro quia, molestiae quam architecto quae perspiciatis laudantium harum. Cum, facilis possimus.', 1, 0x30, '2020-11-29', 60, '2020-11-18', 1, 1, 2),
(12, 'NOUVEAU TEST', 'dk,nkfsdkfsdksf,dk', 0, 0x30, '2020-11-27', 15, '2020-11-21', 1, 1, 1),
(14, 'nouveau test modifi&eacute;', 'C\'est une nouvelle mission test', 1, 0x30, '2020-12-09', 52, '2020-12-13', 1, 1, 1),
(18, 'Mission d\'information', 'Apprendre &agrave; ma&ccedil;onner', 1, '', '2021-01-14', 85, '2021-01-04', 3, 5, 4);

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

CREATE TABLE `pays` (
  `idPays` int(11) NOT NULL,
  `nomPays` varchar(100) NOT NULL,
  `continent` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `pays`
--

INSERT INTO `pays` (`idPays`, `nomPays`, `continent`) VALUES
(1, 'Maroc', 'Afrique'),
(2, 'Gabon', 'Afrique'),
(3, 'Somalie', 'Afrique');

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `idRole` int(11) NOT NULL,
  `nomRole` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`idRole`, `nomRole`) VALUES
(1, 'Particulier'),
(2, 'Professionnel'),
(3, 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `type_activite`
--

CREATE TABLE `type_activite` (
  `idTypeActivite` int(11) NOT NULL,
  `typeActivite` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `type_activite`
--

INSERT INTO `type_activite` (`idTypeActivite`, `typeActivite`) VALUES
(1, 'Médecine'),
(2, 'Donations'),
(3, 'Enseignement'),
(4, 'construction'),
(5, 'traduction');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `idUtilisateur` int(11) NOT NULL,
  `nomUtil` varchar(50) NOT NULL,
  `prenomUtil` varchar(50) NOT NULL,
  `adresseUtil` varchar(50) NOT NULL,
  `codePostalUtil` int(11) NOT NULL,
  `villeUtil` varchar(10) NOT NULL,
  `mailUtil` varchar(50) NOT NULL,
  `telUtil` int(11) DEFAULT NULL,
  `passwordUtil` varchar(255) NOT NULL,
  `dateInscriptionUtil` date NOT NULL,
  `idRole` int(11) NOT NULL,
  `idPays` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`idUtilisateur`, `nomUtil`, `prenomUtil`, `adresseUtil`, `codePostalUtil`, `villeUtil`, `mailUtil`, `telUtil`, `passwordUtil`, `dateInscriptionUtil`, `idRole`, `idPays`) VALUES
(1, 'DUBOIS', 'Pierre', '24bis rue loingtaine', 62840, 'Marrakech', 'PREMIER@mail.com', 60606609, '$2y$10$y4TZGF1yVQQ9pGc37qPoG.zjVpiTFHOhIDod9jcHISRmJVlI4POwm', '2020-11-03', 1, 1),
(2, 'premier', 'user', 'rue du premier', 75000, 'Paris', 'premier@user.com', 606060606, 'Password', '2020-12-14', 1, 1),
(3, 'deuxieme', 'user', 'rue du premier', 75000, 'Paris', 'deuxieme@user.com', 606060606, 'Password', '2020-12-14', 1, 1),
(4, 'troisieme', 'user', 'troiseme rue', 62840, 'Fleurbaix', 'troisieme@user.com', 607080910, 'Password', '2020-12-14', 1, 1),
(5, 'premier', 'professionnel', 'rue pro', 59000, 'Lille', 'premier@pro.com', 606060606, 'Password', '2020-12-14', 2, 1),
(6, 'autre', 'nouveau', 'la nouvelle rue', 13000, 'Marseille', 'nouveau@pro.com', 60050680, '$2y$10$y4TZGF1yVQQ9pGc37qPoG.zjVpiTFHOhIDod9jcHISRmJVlI4POwm', '2020-12-14', 1, 1),
(7, 'lala', 'lolo', 'rue loin', 75000, 'lille', 'lala@lala.com', 607080912, '$2y$10$rCpnOj73eCXNdd4Nx.rS2uZmQtHOBWWMpaxNlsAtGU.6jZ7dzsPOy', '2020-12-18', 1, 1),
(8, 'pro', 'pro', '6 rue pro', 75000, 'paris', 'pro@mail.com', 607965282, '$2y$10$LdmyWpI6EwIV3dUooIl1DOIS27a70.0K9xKMhotfLVsCCxpDv.NY6', '2020-12-31', 2, 1),
(30, 'professionnel', 'professionnel', '56 rue labas', 13000, 'Marseille', 'nouvoPro@mail.com', 675849567, '$2y$10$QcFuGh9ylczALVjsfhsl8.P2sF7QnQVjRO/03qxpiNjaaPBfOJute', '2020-12-31', 2, 1),
(31, 'professionnel', 'professionnel', '56 rue labas', 13000, 'Marseille', 'nouvoProPro@mail.com', 675849567, '$2y$10$tUIuuh3/Vc0o4sUS76xBA.XeQmfnHSD2CsBwhSx4Ov2C4on5eQ.rK', '2020-12-31', 2, 1),
(32, 'professionnel', 'professionnel', '56 rue labas', 13000, 'Marseille', 'ProPro@mail.com', 675849567, '$2y$10$yrePJz8CYno5Gw5WPe1DTuszmGWk1kvoAG99ZCiyAjPzdk5b6C1We', '2020-12-31', 2, 1),
(33, 'professionnel', 'professionnel', '56 rue labas', 13000, 'Marseille', 'ProProF@mail.com', 675849567, '$2y$10$S9fEpAhK58.X.ur6l.O3ZOYkQKjp9TdmTl..RzLbFOwYPy0mDTq32', '2020-12-31', 2, 1),
(34, 'testPro', 'testPro', 'rue long', 15630, 'labas', 'encorePro@mail.com', 2147483647, '$2y$10$/WlWHKcF3wOuULeuc/CLA.ZGY5qXBuaLotjTrmYGu1UYlNszUnK4O', '2020-12-31', 2, 1),
(35, 'montaye', 'aurelien', '58 rue loingtaaa', 75000, 'paris', 'lePro@mail.com', 2147483647, '$2y$10$7eV.SLD3SOp8EzSmpkPXJ.xeQMIo008QrDojfnKpgbp1OCWXE/SDq', '2020-12-31', 2, 1),
(36, 'test3', 'testPro', 'jneadjz', 62840, 'fleurbaix', '', 658858585, '$2y$10$1KFomnmpzAiouIUjbRdanO6AlHp8gsjCoEMw2v1/xxVC5iuibXrq.', '2020-12-31', 2, 1),
(37, 'derniertest', 'kevin', 'derniere rue', 59000, 'lille', 'Bon@annee.com', 505050550, '$2y$10$bPRDu4RXFpNVUD.kKx7DiuofxZwKeg4sLdmefTl6cqWznJumz8OIq', '2020-12-31', 2, 1),
(38, 'Dupond', 'Maurice', '8 route Nationale', 85000, 'Lyon', 'maurice@dupond.com', 2147483647, '$2y$10$qut5xeKU1befXRpVSRAGyubGz.lTc5keZFsYyRpEgCjqNzG7a14g.', '2021-01-04', 2, 1),
(39, 'Alain', 'Delon', '6 rue du Biez', 62840, 'Fleurbaix', 'particulier@mail.com', 607965280, '$2y$10$ZiK7c5jetl/gqRf4oz71kOMX2Mtgbt7wkHCcJ3Udr4Ve60Gxprp5S', '2021-01-06', 1, 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `avis`
--
ALTER TABLE `avis`
  ADD PRIMARY KEY (`idAvis`),
  ADD KEY `AVIS_UTILISATEUR_FK` (`idUtilisateur`),
  ADD KEY `AVIS_BLOG_FK` (`idBlog`);

--
-- Index pour la table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`idArticle`);

--
-- Index pour la table `etablissement`
--
ALTER TABLE `etablissement`
  ADD PRIMARY KEY (`idEtablissement`),
  ADD KEY `ETABLISSEMENT_UTILISATEUR_FK` (`idUtilisateur`),
  ADD KEY `ETABLISSEMENT_TYPE_ACTIVITE_FK` (`idTypeActivite`),
  ADD KEY `ETABLISSEMENT_PAYS_FK` (`idPays`);

--
-- Index pour la table `mission`
--
ALTER TABLE `mission`
  ADD PRIMARY KEY (`idMission`),
  ADD KEY `MISSION_PAYS_FK` (`idPays`),
  ADD KEY `MISSION_ETABLISSEMENT_FK` (`idEtablissement`),
  ADD KEY `MISSION_TYPE_ACTIVITE_FK` (`idTypeActivite`);

--
-- Index pour la table `pays`
--
ALTER TABLE `pays`
  ADD PRIMARY KEY (`idPays`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`idRole`);

--
-- Index pour la table `type_activite`
--
ALTER TABLE `type_activite`
  ADD PRIMARY KEY (`idTypeActivite`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`idUtilisateur`),
  ADD UNIQUE KEY `mailUtil` (`mailUtil`),
  ADD KEY `UTILISATEUR_ROLE_FK` (`idRole`),
  ADD KEY `UTILISATEUR_PAYS_FK` (`idPays`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `avis`
--
ALTER TABLE `avis`
  MODIFY `idAvis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `blog`
--
ALTER TABLE `blog`
  MODIFY `idArticle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `etablissement`
--
ALTER TABLE `etablissement`
  MODIFY `idEtablissement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `mission`
--
ALTER TABLE `mission`
  MODIFY `idMission` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `pays`
--
ALTER TABLE `pays`
  MODIFY `idPays` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `idRole` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `type_activite`
--
ALTER TABLE `type_activite`
  MODIFY `idTypeActivite` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `idUtilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `avis`
--
ALTER TABLE `avis`
  ADD CONSTRAINT `AVIS_BLOG_FK` FOREIGN KEY (`idBlog`) REFERENCES `blog` (`idArticle`),
  ADD CONSTRAINT `AVIS_UTILISATEUR_FK` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateur` (`idUtilisateur`);

--
-- Contraintes pour la table `etablissement`
--
ALTER TABLE `etablissement`
  ADD CONSTRAINT `ETABLISSEMENT_PAYS_FK` FOREIGN KEY (`idPays`) REFERENCES `pays` (`idPays`),
  ADD CONSTRAINT `ETABLISSEMENT_TYPE_ACTIVITE_FK` FOREIGN KEY (`idTypeActivite`) REFERENCES `type_activite` (`idTypeActivite`),
  ADD CONSTRAINT `ETABLISSEMENT_UTILISATEUR_FK` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateur` (`idUtilisateur`);

--
-- Contraintes pour la table `mission`
--
ALTER TABLE `mission`
  ADD CONSTRAINT `MISSION_ETABLISSEMENT_FK` FOREIGN KEY (`idEtablissement`) REFERENCES `etablissement` (`idEtablissement`),
  ADD CONSTRAINT `MISSION_PAYS_FK` FOREIGN KEY (`idPays`) REFERENCES `pays` (`idPays`),
  ADD CONSTRAINT `MISSION_TYPE_ACTIVITE_FK` FOREIGN KEY (`idTypeActivite`) REFERENCES `type_activite` (`idTypeActivite`);

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `UTILISATEUR_PAYS_FK` FOREIGN KEY (`idPays`) REFERENCES `pays` (`idPays`),
  ADD CONSTRAINT `UTILISATEUR_ROLE_FK` FOREIGN KEY (`idRole`) REFERENCES `role` (`idRole`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
