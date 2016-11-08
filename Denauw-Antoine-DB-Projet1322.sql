-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 08 Novembre 2016 à 22:41
-- Version du serveur :  10.1.13-MariaDB
-- Version de PHP :  5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `Projet_LINGE1322`
--
CREATE DATABASE IF NOT EXISTS `Projet_LINGE1322` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `Projet_LINGE1322`;

-- --------------------------------------------------------

--
-- Structure de la table `ASSUREUR`
--

CREATE TABLE `ASSUREUR` (
  `Nom` varchar(100) NOT NULL,
  `Adresse` varchar(255) NOT NULL,
  `NumTelephone` int(11) NOT NULL,
  `Fax` int(11) NOT NULL,
  `NumAssureur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Table représentant un assureur';

--
-- Contenu de la table `ASSUREUR`
--

INSERT INTO `ASSUREUR` (`Nom`, `Adresse`, `NumTelephone`, `Fax`, `NumAssureur`) VALUES
('Denauw', '12 rue du temple Ecaussinnes 7190', 471234567, 1, 1),
('Dupont', '18 rue de la gare Nivelles', 472234568, 12, 2),
('Wautie', '42 rue de la paix Morlanwez', 473234567, 123, 3),
('Dieu', '56 rue de la chapelle Bruxelles', 474234567, 1234, 4),
('Pierre', '85 rue de la porta Ronquiere', 475234568, 12345, 5);

-- --------------------------------------------------------

--
-- Structure de la table `CLIENT`
--

CREATE TABLE `CLIENT` (
  `NCLI` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `Adresse` varchar(255) NOT NULL,
  `NumPermis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Table représentant un client';

--
-- Contenu de la table `CLIENT`
--

INSERT INTO `CLIENT` (`NCLI`, `Nom`, `Prenom`, `Adresse`, `NumPermis`) VALUES
(1, 'Denauw', 'Frederic', '112 rue de la gare Arlon', 10000),
(2, 'Dubray', 'Damien', '45 rue de la chapelle', 10001),
(3, 'Pirson', 'Julie', '65 rue de la molette', 10002),
(4, 'Diaz', 'Pablo', '32 rue de la muerta', 10003),
(5, 'Calande', 'Sylvain', '76 rue des gaillards', 10004),
(6, 'Wautie', 'Sylvie', '112 place du centre Soignies', 10005),
(10, 'Brokeman', 'Ken', '56 rue de la pomme Binche', 10006),
(11, 'Faulkner', 'Stephane', '18 rue du SQL Paris', 10009);

-- --------------------------------------------------------

--
-- Structure de la table `CONTRAT`
--

CREATE TABLE `CONTRAT` (
  `Type` varchar(255) NOT NULL,
  `Assureur` int(11) NOT NULL,
  `NumContrat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `CONTRAT`
--

INSERT INTO `CONTRAT` (`Type`, `Assureur`, `NumContrat`) VALUES
('bris de glace', 1, 1),
('degradation des sieges', 4, 8),
('electronique a refaire', 3, 7),
('frein a main defaillant', 4, 6),
('portiere cabossee', 1, 4),
('responsabilité civile', 5, 3),
('retroviseurs casses', 3, 5),
('vol', 2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `ENREGISTREMENT`
--

CREATE TABLE `ENREGISTREMENT` (
  `NumEnregistrement` int(11) NOT NULL,
  `NumReservation` int(11) NOT NULL,
  `Kilometrage` int(11) NOT NULL,
  `NumPermis` int(11) NOT NULL,
  `Caution` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Table représentant un enregistrement';

--
-- Contenu de la table `ENREGISTREMENT`
--

INSERT INTO `ENREGISTREMENT` (`NumEnregistrement`, `NumReservation`, `Kilometrage`, `NumPermis`, `Caution`) VALUES
(7, 4, 10000, 10009, 20);

-- --------------------------------------------------------

--
-- Structure de la table `MODELE`
--

CREATE TABLE `MODELE` (
  `Libelle` varchar(255) NOT NULL,
  `CodeUnique` int(11) NOT NULL,
  `Marque` varchar(100) NOT NULL,
  `Type` varchar(100) NOT NULL,
  `Puissance` int(11) NOT NULL,
  `IDTarification` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `MODELE`
--

INSERT INTO `MODELE` (`Libelle`, `CodeUnique`, `Marque`, `Type`, `Puissance`, `IDTarification`) VALUES
('boite a vitesse automatique, toit ouvrant, 5 portes, autoradio, climatisation', 1, 'Mercedes', 'Classe A', 200, 1),
('3 portes, toit ouvrant, climatisation, bluetooth', 2, 'Ford', 'Fiesta', 50, 10),
('sieges ajustable, autoradio, cruise control, 5 portes', 3, 'Porsche', 'Panamera', 310, 3),
('3 portes, toit ouvrant, autoradio, sieges ajustable', 4, 'Fiat', 'Punto', 20, 4),
('bluetooth, 3 portes, climatisation,', 5, 'Renault', 'Captur', 80, 5),
('boite a vitesse automatique, autoradio, toit ouvrant, sieges ajustable, bluetooth', 6, 'Citroen', 'Cactus', 100, 4),
('climatisation, sieges ajustable, boite a vitesse automatique, bluetooth', 7, 'Ford', 'Cmax', 150, 7),
('5 portes, toit ouvrant, sieges en cuir, climatisation, boite a vitesse automatique', 8, 'BMW', 'x6', 190, 8),
('3 portes, bluetooth, climatisation, toit ouvrant, sieges en cuir', 9, 'VW', 'Golf', 90, 5),
('5 portes, sieges ajustable, climatisation, interieur cuir', 10, 'Toyota', 'Corrola', 150, 2),
('5 portes, climatisation, toit ouvrant, sieges en cuir, sieges ajustable', 11, 'Renault', 'Clio', 80, 6),
('5 portes, bluetooth, climatisation, toit ouvrant, sieges en cuir, boite a vitesse automatique', 12, 'Tesla', 'S', 150, 9);

-- --------------------------------------------------------

--
-- Structure de la table `MODELOCATION`
--

CREATE TABLE `MODELOCATION` (
  `Type` varchar(100) NOT NULL,
  `KmForfaitaire` int(11) NOT NULL,
  `MontantForfaitaire` int(11) NOT NULL,
  `ClasseTarification` int(11) NOT NULL,
  `IDModeLocation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Table représentant un mode de location pour une voiture';

--
-- Contenu de la table `MODELOCATION`
--

INSERT INTO `MODELOCATION` (`Type`, `KmForfaitaire`, `MontantForfaitaire`, `ClasseTarification`, `IDModeLocation`) VALUES
('journee', 200, 30, 2, 1),
('semaine', 1000, 100, 5, 2),
('week-end', 500, 80, 4, 3),
('semaine', 500, 150, 8, 4),
('journee', 300, 20, 2, 5),
('week-end', 400, 90, 7, 6);

-- --------------------------------------------------------

--
-- Structure de la table `RESERVATION`
--

CREATE TABLE `RESERVATION` (
  `NReservation` int(11) NOT NULL,
  `IDVoiture` int(11) NOT NULL,
  `IDModeLocation` int(11) NOT NULL,
  `NCLI` int(11) NOT NULL,
  `DateRetrait` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `DateRestitutionVoiture` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `PrixMontantForfaitaire` int(11) NOT NULL,
  `Etat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Table représentant une réservation de voiture';

--
-- Contenu de la table `RESERVATION`
--

INSERT INTO `RESERVATION` (`NReservation`, `IDVoiture`, `IDModeLocation`, `NCLI`, `DateRetrait`, `DateRestitutionVoiture`, `PrixMontantForfaitaire`, `Etat`) VALUES
(1, 1001, 4, 2, '2015-09-15 10:22:40', '2016-06-12 13:08:14', 150, 'termine'),
(4, 1002, 2, 11, '2016-06-15 00:00:00', '2016-06-22 00:00:00', 100, 'annuler');

-- --------------------------------------------------------

--
-- Structure de la table `RESTITUTION`
--

CREATE TABLE `RESTITUTION` (
  `NumRestitution` int(11) NOT NULL,
  `KmFin` int(11) NOT NULL,
  `DateCourante` date NOT NULL,
  `Message` varchar(255) NOT NULL,
  `NumVoiture` int(11) NOT NULL,
  `ModeLocation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Table représentant une restitution de voiture';

--
-- Contenu de la table `RESTITUTION`
--

INSERT INTO `RESTITUTION` (`NumRestitution`, `KmFin`, `DateCourante`, `Message`, `NumVoiture`, `ModeLocation`) VALUES
(1, 11005, '2016-06-22', 'Rien a signaler.', 1002, 2);

-- --------------------------------------------------------

--
-- Structure de la table `TARIFICATION`
--

CREATE TABLE `TARIFICATION` (
  `CodeID` int(11) NOT NULL,
  `NumContrat` int(11) NOT NULL,
  `PrixKm` double NOT NULL,
  `AmendeJour` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Table représentant une tarification';

--
-- Contenu de la table `TARIFICATION`
--

INSERT INTO `TARIFICATION` (`CodeID`, `NumContrat`, `PrixKm`, `AmendeJour`) VALUES
(1, 1, 2, 10),
(2, 2, 5, 2),
(3, 3, 5, 1),
(4, 4, 0.5, 10),
(5, 2, 0.8, 15),
(6, 8, 0.9, 5),
(7, 6, 0.8, 5),
(8, 7, 0.3, 20),
(9, 4, 0, 50),
(10, 5, 0.2, 35);

-- --------------------------------------------------------

--
-- Structure de la table `VOITURE`
--

CREATE TABLE `VOITURE` (
  `IDNumero` int(11) NOT NULL,
  `DateAchat` date NOT NULL,
  `PrixAchat` int(11) NOT NULL,
  `Etat` varchar(100) NOT NULL,
  `DateRestitution` datetime DEFAULT CURRENT_TIMESTAMP,
  `CodeModele` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Table représentant une voiture';

--
-- Contenu de la table `VOITURE`
--

INSERT INTO `VOITURE` (`IDNumero`, `DateAchat`, `PrixAchat`, `Etat`, `DateRestitution`, `CodeModele`) VALUES
(1000, '2016-06-01', 20000, 'libre', '2016-06-12 00:00:00', 2),
(1001, '2016-04-23', 30000, 'louer', '2016-06-14 00:00:00', 1),
(1002, '2014-09-09', 15000, 'libre', '2016-06-14 10:28:37', 8),
(1003, '2015-05-14', 19000, 'libre', '2016-06-12 00:00:00', 3),
(1004, '2015-02-09', 14500, 'entretien', '2016-06-23 00:00:00', 12),
(1005, '2015-01-21', 31000, 'libre', '2016-06-12 00:00:00', 7),
(1006, '2016-06-05', 25000, 'libre', '2016-06-12 00:00:00', 9),
(1007, '2015-08-04', 21000, 'libre', '2016-06-12 00:00:00', 7),
(1008, '2013-03-04', 45000, 'libre', '2016-06-12 00:00:00', 11),
(1009, '2010-06-05', 26000, 'libre', '2016-06-12 00:00:00', 4),
(1010, '2014-03-07', 5000, 'reparation', '2016-06-27 00:00:00', 9),
(1011, '2015-07-13', 65000, 'libre', '2016-06-12 00:00:00', 10),
(1012, '2014-02-04', 18000, 'libre', '2016-06-12 00:00:00', 5),
(1013, '2016-03-01', 52000, 'louer', '2016-08-01 00:00:00', 6);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `ASSUREUR`
--
ALTER TABLE `ASSUREUR`
  ADD PRIMARY KEY (`NumAssureur`),
  ADD UNIQUE KEY `Nom` (`Nom`,`Adresse`);

--
-- Index pour la table `CLIENT`
--
ALTER TABLE `CLIENT`
  ADD PRIMARY KEY (`NCLI`),
  ADD UNIQUE KEY `NumPermis` (`NumPermis`);

--
-- Index pour la table `CONTRAT`
--
ALTER TABLE `CONTRAT`
  ADD PRIMARY KEY (`NumContrat`),
  ADD UNIQUE KEY `NumContrat_2` (`NumContrat`),
  ADD UNIQUE KEY `Type_2` (`Type`),
  ADD KEY `NumContrat` (`NumContrat`),
  ADD KEY `Type` (`Type`,`Assureur`),
  ADD KEY `fk_Assureur_NumAssureurTypeAssureur` (`Assureur`);

--
-- Index pour la table `ENREGISTREMENT`
--
ALTER TABLE `ENREGISTREMENT`
  ADD PRIMARY KEY (`NumEnregistrement`),
  ADD KEY `NumPermis` (`NumPermis`),
  ADD KEY `NumReservation` (`NumReservation`);

--
-- Index pour la table `MODELE`
--
ALTER TABLE `MODELE`
  ADD PRIMARY KEY (`CodeUnique`),
  ADD UNIQUE KEY `CodeUnique` (`CodeUnique`),
  ADD KEY `IDTarification` (`IDTarification`);

--
-- Index pour la table `MODELOCATION`
--
ALTER TABLE `MODELOCATION`
  ADD PRIMARY KEY (`IDModeLocation`),
  ADD KEY `MontantForfaitaire` (`MontantForfaitaire`),
  ADD KEY `ClasseTarification` (`ClasseTarification`);

--
-- Index pour la table `RESERVATION`
--
ALTER TABLE `RESERVATION`
  ADD PRIMARY KEY (`NReservation`),
  ADD KEY `IDVoiture` (`IDVoiture`),
  ADD KEY `IDModeLocation` (`IDModeLocation`),
  ADD KEY `NCLI` (`NCLI`),
  ADD KEY `PrixMontantForfaitaire` (`PrixMontantForfaitaire`);

--
-- Index pour la table `RESTITUTION`
--
ALTER TABLE `RESTITUTION`
  ADD PRIMARY KEY (`NumRestitution`),
  ADD KEY `NumVoiture` (`NumVoiture`),
  ADD KEY `ModeLocation` (`ModeLocation`);

--
-- Index pour la table `TARIFICATION`
--
ALTER TABLE `TARIFICATION`
  ADD PRIMARY KEY (`CodeID`),
  ADD KEY `NumContrat` (`NumContrat`);

--
-- Index pour la table `VOITURE`
--
ALTER TABLE `VOITURE`
  ADD PRIMARY KEY (`IDNumero`),
  ADD KEY `CodeModele` (`CodeModele`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `ASSUREUR`
--
ALTER TABLE `ASSUREUR`
  MODIFY `NumAssureur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `CLIENT`
--
ALTER TABLE `CLIENT`
  MODIFY `NCLI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `CONTRAT`
--
ALTER TABLE `CONTRAT`
  MODIFY `NumContrat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `ENREGISTREMENT`
--
ALTER TABLE `ENREGISTREMENT`
  MODIFY `NumEnregistrement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `MODELE`
--
ALTER TABLE `MODELE`
  MODIFY `CodeUnique` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `MODELOCATION`
--
ALTER TABLE `MODELOCATION`
  MODIFY `IDModeLocation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `RESERVATION`
--
ALTER TABLE `RESERVATION`
  MODIFY `NReservation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `RESTITUTION`
--
ALTER TABLE `RESTITUTION`
  MODIFY `NumRestitution` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `TARIFICATION`
--
ALTER TABLE `TARIFICATION`
  MODIFY `CodeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `CONTRAT`
--
ALTER TABLE `CONTRAT`
  ADD CONSTRAINT `fk_Assureur_NumAssureurTypeAssureur` FOREIGN KEY (`Assureur`) REFERENCES `ASSUREUR` (`NumAssureur`) ON DELETE CASCADE;

--
-- Contraintes pour la table `ENREGISTREMENT`
--
ALTER TABLE `ENREGISTREMENT`
  ADD CONSTRAINT `fk_NumPermis_NumPermisClient` FOREIGN KEY (`NumPermis`) REFERENCES `CLIENT` (`NumPermis`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_NumReservation_NReservationReservation` FOREIGN KEY (`NumReservation`) REFERENCES `RESERVATION` (`NReservation`) ON DELETE CASCADE;

--
-- Contraintes pour la table `MODELE`
--
ALTER TABLE `MODELE`
  ADD CONSTRAINT `fk_IDTarification_CodeIDTarification` FOREIGN KEY (`IDTarification`) REFERENCES `TARIFICATION` (`CodeID`) ON DELETE CASCADE;

--
-- Contraintes pour la table `MODELOCATION`
--
ALTER TABLE `MODELOCATION`
  ADD CONSTRAINT `fk_ClasseTarification_CodeIDTarification` FOREIGN KEY (`ClasseTarification`) REFERENCES `TARIFICATION` (`CodeID`) ON DELETE CASCADE;

--
-- Contraintes pour la table `RESERVATION`
--
ALTER TABLE `RESERVATION`
  ADD CONSTRAINT `fk_IDModeLocation_IDModeLocation` FOREIGN KEY (`IDModeLocation`) REFERENCES `MODELOCATION` (`IDModeLocation`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_IDVoiture_IDNumeroVoiture` FOREIGN KEY (`IDVoiture`) REFERENCES `VOITURE` (`IDNumero`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_NCLI_NCLIClient` FOREIGN KEY (`NCLI`) REFERENCES `CLIENT` (`NCLI`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_PrixMontantForfaitaire_MontantForfaitaireModeLocation` FOREIGN KEY (`PrixMontantForfaitaire`) REFERENCES `MODELOCATION` (`MontantForfaitaire`);

--
-- Contraintes pour la table `RESTITUTION`
--
ALTER TABLE `RESTITUTION`
  ADD CONSTRAINT `fk_ModeLocation_IDModeLocationModeLocation` FOREIGN KEY (`ModeLocation`) REFERENCES `MODELOCATION` (`IDModeLocation`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_NumVoiture_IDNumeroVoiture` FOREIGN KEY (`NumVoiture`) REFERENCES `VOITURE` (`IDNumero`) ON DELETE CASCADE;

--
-- Contraintes pour la table `TARIFICATION`
--
ALTER TABLE `TARIFICATION`
  ADD CONSTRAINT `fk_NumContrat_NumContratContrat` FOREIGN KEY (`NumContrat`) REFERENCES `CONTRAT` (`NumContrat`) ON DELETE CASCADE;

--
-- Contraintes pour la table `VOITURE`
--
ALTER TABLE `VOITURE`
  ADD CONSTRAINT `fk_CodeModele_CodeUniqueModele` FOREIGN KEY (`CodeModele`) REFERENCES `MODELE` (`CodeUnique`) ON DELETE CASCADE;
--
-- Base de données :  `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Structure de la table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(11) NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Structure de la table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Structure de la table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Structure de la table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Structure de la table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

--
-- Contenu de la table `pma__export_templates`
--

INSERT INTO `pma__export_templates` (`id`, `username`, `export_type`, `template_name`, `template_data`) VALUES
(1, 'root', 'database', 'Denauw-Antoine-DB-Projet1322', '{"quick_or_custom":"quick","what":"sql","structure_or_data_forced":"0","table_select[]":["ASSUREUR","CLIENT","CONTRAT","ENREGISTREMENT","MODELE","MODELOCATION","RESERVATION","RESTITUTION","TARIFICATION","VOITURE"],"table_structure[]":["ASSUREUR","CLIENT","CONTRAT","ENREGISTREMENT","MODELE","MODELOCATION","RESERVATION","RESTITUTION","TARIFICATION","VOITURE"],"table_data[]":["ASSUREUR","CLIENT","CONTRAT","ENREGISTREMENT","MODELE","MODELOCATION","RESERVATION","RESTITUTION","TARIFICATION","VOITURE"],"output_format":"sendit","filename_template":"@DATABASE@","remember_template":"on","charset":"utf-8","compression":"none","maxsize":"","ods_null":"NULL","ods_structure_or_data":"data","codegen_structure_or_data":"data","codegen_format":"0","xml_structure_or_data":"data","xml_export_events":"something","xml_export_functions":"something","xml_export_procedures":"something","xml_export_tables":"something","xml_export_triggers":"something","xml_export_views":"something","xml_export_contents":"something","yaml_structure_or_data":"data","json_structure_or_data":"data","odt_structure_or_data":"structure_and_data","odt_relation":"something","odt_comments":"something","odt_mime":"something","odt_columns":"something","odt_null":"NULL","latex_caption":"something","latex_structure_or_data":"structure_and_data","latex_structure_caption":"Structure de la table @TABLE@","latex_structure_continued_caption":"Structure de la table @TABLE@ (suite)","latex_structure_label":"tab:@TABLE@-structure","latex_relation":"something","latex_comments":"something","latex_mime":"something","latex_columns":"something","latex_data_caption":"Contenu de la table @TABLE@","latex_data_continued_caption":"Contenu de la table @TABLE@ (suite)","latex_data_label":"tab:@TABLE@-data","latex_null":"\\\\textit{NULL}","csv_separator":",","csv_enclosed":"\\"","csv_escaped":"\\"","csv_terminated":"AUTO","csv_null":"NULL","csv_structure_or_data":"data","pdf_report_title":"","pdf_structure_or_data":"structure_and_data","mediawiki_structure_or_data":"structure_and_data","mediawiki_caption":"something","mediawiki_headers":"something","texytext_structure_or_data":"structure_and_data","texytext_null":"NULL","sql_include_comments":"something","sql_header_comment":"","sql_compatibility":"NONE","sql_structure_or_data":"structure_and_data","sql_create_table":"something","sql_auto_increment":"something","sql_create_view":"something","sql_procedure_function":"something","sql_create_trigger":"something","sql_backquotes":"something","sql_type":"INSERT","sql_insert_syntax":"both","sql_max_query_size":"50000","sql_hex_for_binary":"something","sql_utc_time":"something","excel_null":"NULL","excel_edition":"win","excel_structure_or_data":"data","htmlword_structure_or_data":"structure_and_data","htmlword_null":"NULL","phparray_structure_or_data":"data","":null,"lock_tables":null,"as_separate_files":null,"ods_columns":null,"json_pretty_print":null,"csv_removeCRLF":null,"csv_columns":null,"texytext_columns":null,"sql_dates":null,"sql_relation":null,"sql_mime":null,"sql_use_transaction":null,"sql_disable_fk":null,"sql_views_as_tables":null,"sql_metadata":null,"sql_create_database":null,"sql_drop_table":null,"sql_if_not_exists":null,"sql_truncate":null,"sql_delayed":null,"sql_ignore":null,"excel_removeCRLF":null,"excel_columns":null,"htmlword_columns":null}'),
(2, 'root', 'server', 'Denauw-Antoine-DB-Projet1322', '{"quick_or_custom":"quick","what":"sql","db_select[]":["Projet_LINGE1322","phpmyadmin","test"],"output_format":"sendit","filename_template":"@SERVER@","remember_template":"on","charset":"utf-8","compression":"none","maxsize":"","ods_null":"NULL","ods_structure_or_data":"data","codegen_structure_or_data":"data","codegen_format":"0","yaml_structure_or_data":"data","json_structure_or_data":"data","odt_structure_or_data":"structure_and_data","odt_relation":"something","odt_comments":"something","odt_mime":"something","odt_columns":"something","odt_null":"NULL","latex_caption":"something","latex_structure_or_data":"structure_and_data","latex_structure_caption":"Structure de la table @TABLE@","latex_structure_continued_caption":"Structure de la table @TABLE@ (suite)","latex_structure_label":"tab:@TABLE@-structure","latex_relation":"something","latex_comments":"something","latex_mime":"something","latex_columns":"something","latex_data_caption":"Contenu de la table @TABLE@","latex_data_continued_caption":"Contenu de la table @TABLE@ (suite)","latex_data_label":"tab:@TABLE@-data","latex_null":"\\\\textit{NULL}","csv_separator":",","csv_enclosed":"\\"","csv_escaped":"\\"","csv_terminated":"AUTO","csv_null":"NULL","csv_structure_or_data":"data","pdf_report_title":"","pdf_structure_or_data":"data","mediawiki_structure_or_data":"data","mediawiki_caption":"something","mediawiki_headers":"something","texytext_structure_or_data":"structure_and_data","texytext_null":"NULL","sql_include_comments":"something","sql_header_comment":"","sql_compatibility":"NONE","sql_structure_or_data":"structure_and_data","sql_create_table":"something","sql_auto_increment":"something","sql_create_view":"something","sql_procedure_function":"something","sql_create_trigger":"something","sql_backquotes":"something","sql_type":"INSERT","sql_insert_syntax":"both","sql_max_query_size":"50000","sql_hex_for_binary":"something","sql_utc_time":"something","excel_null":"NULL","excel_edition":"win","excel_structure_or_data":"data","htmlword_structure_or_data":"structure_and_data","htmlword_null":"NULL","phparray_structure_or_data":"data","":null,"as_separate_files":null,"ods_columns":null,"json_pretty_print":null,"csv_removeCRLF":null,"csv_columns":null,"texytext_columns":null,"sql_dates":null,"sql_relation":null,"sql_mime":null,"sql_use_transaction":null,"sql_disable_fk":null,"sql_views_as_tables":null,"sql_metadata":null,"sql_drop_database":null,"sql_drop_table":null,"sql_if_not_exists":null,"sql_truncate":null,"sql_delayed":null,"sql_ignore":null,"excel_removeCRLF":null,"excel_columns":null,"htmlword_columns":null}');

-- --------------------------------------------------------

--
-- Structure de la table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Structure de la table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Structure de la table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Structure de la table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Structure de la table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Contenu de la table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{"db":"Projet_LINGE1322","table":"CLIENT"},{"db":"Projet_LINGE1322","table":"VOITURE"},{"db":"Projet_LINGE1322","table":"TARIFICATION"},{"db":"Projet_LINGE1322","table":"RESTITUTION"},{"db":"Projet_LINGE1322","table":"RESERVATION"},{"db":"Projet_LINGE1322","table":"MODELOCATION"},{"db":"Projet_LINGE1322","table":"MODELE"},{"db":"Projet_LINGE1322","table":"ENREGISTREMENT"},{"db":"Projet_LINGE1322","table":"CONTRAT"},{"db":"Projet_LINGE1322","table":"ASSUREUR"}]');

-- --------------------------------------------------------

--
-- Structure de la table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Structure de la table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Structure de la table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float UNSIGNED NOT NULL DEFAULT '0',
  `y` float UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Structure de la table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Structure de la table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Contenu de la table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'Projet_LINGE1322', 'CONTRAT', '{"sorted_col":"`CONTRAT`.`NumContrat` ASC"}', '2016-06-10 18:53:32');

-- --------------------------------------------------------

--
-- Structure de la table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Structure de la table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Contenu de la table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2016-06-03 14:49:46', '{"lang":"fr","collation_connection":"utf8mb4_unicode_ci"}');

-- --------------------------------------------------------

--
-- Structure de la table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Structure de la table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Index pour les tables exportées
--

--
-- Index pour la table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Index pour la table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Index pour la table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Index pour la table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Index pour la table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Index pour la table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Index pour la table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Index pour la table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Index pour la table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Index pour la table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Index pour la table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Index pour la table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Index pour la table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Index pour la table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Index pour la table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Index pour la table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Index pour la table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Index pour la table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;--
-- Base de données :  `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;

DELIMITER $$
--
-- Procédures
--
CREATE DEFINER=`` PROCEDURE `AddGeometryColumn` (`catalog` VARCHAR(64), `t_schema` VARCHAR(64), `t_name` VARCHAR(64), `geometry_column` VARCHAR(64), `t_srid` INT)  begin
  set @qwe= concat('ALTER TABLE ', t_schema, '.', t_name, ' ADD ', geometry_column,' GEOMETRY REF_SYSTEM_ID=', t_srid); PREPARE ls from @qwe; execute ls; deallocate prepare ls; end$$

CREATE DEFINER=`` PROCEDURE `DropGeometryColumn` (`catalog` VARCHAR(64), `t_schema` VARCHAR(64), `t_name` VARCHAR(64), `geometry_column` VARCHAR(64))  begin
  set @qwe= concat('ALTER TABLE ', t_schema, '.', t_name, ' DROP ', geometry_column); PREPARE ls from @qwe; execute ls; deallocate prepare ls; end$$

DELIMITER ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
