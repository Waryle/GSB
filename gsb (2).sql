-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 12 Décembre 2016 à 01:33
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `gsb`
--

-- --------------------------------------------------------

--
-- Structure de la table `collaborateur`
--

CREATE TABLE IF NOT EXISTS `collaborateur` (
  `VIS_MATRICULE` varchar(10) NOT NULL,
  `VIS_NOM` varchar(25) DEFAULT NULL,
  `Vis_PRENOM` varchar(50) DEFAULT NULL,
  `VIS_ADRESSE` varchar(50) DEFAULT NULL,
  `VIS_CP` varchar(5) DEFAULT NULL,
  `VIS_VILLE` varchar(30) DEFAULT NULL,
  `VIS_DATEEMBAUCHE` datetime DEFAULT NULL,
  `SEC_CODE` varchar(1) DEFAULT NULL,
  `LAB_CODE` varchar(2) NOT NULL,
  `MDP` varchar(50) NOT NULL,
  `CODE_REG_DELEGUE` varchar(2) DEFAULT NULL,
  `VIS_DATEDEPART` date DEFAULT NULL,
  PRIMARY KEY (`VIS_MATRICULE`),
  KEY `LAB_CODE` (`LAB_CODE`),
  KEY `SEC_CODE` (`SEC_CODE`),
  KEY `REG_CODE` (`CODE_REG_DELEGUE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `collaborateur`
--

INSERT INTO `collaborateur` (`VIS_MATRICULE`, `VIS_NOM`, `Vis_PRENOM`, `VIS_ADRESSE`, `VIS_CP`, `VIS_VILLE`, `VIS_DATEEMBAUCHE`, `SEC_CODE`, `LAB_CODE`, `MDP`, `CODE_REG_DELEGUE`, `VIS_DATEDEPART`) VALUES
('a131', 'Villechalane', 'Louis', '8 cours Lafontaine', '29000', 'BREST', '1992-12-11 00:00:00', NULL, 'SW', 'a131', 'AL', NULL),
('a17', 'Andre', 'David', '1 r Aimon de Chissée', '38100', 'GRENOBLE', '1991-08-26 00:00:00', NULL, 'GY', '62a0e3d0e8d9db40e64419904a137c32', NULL, NULL),
('a55', 'Bedos', 'Christian', '1 r Bénédictins', '65000', 'TARBES', '1987-07-17 00:00:00', NULL, 'GY', '1b5adc327828380e2664b544e10da163', NULL, NULL),
('a93', 'Tusseau', 'Louis', '22 r Renou', '86000', 'POITIERS', '1999-01-02 00:00:00', NULL, 'SW', 'a805ae5228411fef54ab5ad0d57486b6', NULL, NULL),
('b13', 'Bentot', 'Pascal', '11 av 6 Juin', '67000', 'STRASBOURG', '1996-03-11 00:00:00', NULL, 'GY', '9882d05cb24f7fd0d1cd0dcd1b86a8a1', NULL, NULL),
('b16', 'Bioret', 'Luc', '1 r Linne', '35000', 'RENNES', '1997-03-21 00:00:00', NULL, 'SW', '20e9e854760d152615078596780b9a61', NULL, NULL),
('b19', 'Bunisset', 'Francis', '10 r Nicolas Chorier', '85000', 'LA ROCHE SUR YON', '1999-01-31 00:00:00', NULL, 'GY', '999fe455196bf8d34e2d743fc4b22b85', NULL, NULL),
('b25', 'Bunisset', 'Denise', '1 r Lionne', '49100', 'ANGERS', '1994-07-03 00:00:00', NULL, 'SW', '740e011407886c1c9b2d0cea67903fc8', NULL, NULL),
('b28', 'Cacheux', 'Bernard', '114 r Authie', '34000', 'MONTPELLIER', '2000-08-02 00:00:00', NULL, 'GY', '95d26ffafee743d9f66206a4a6c6895a', NULL, NULL),
('b34', 'Cadic', 'Eric', '123 r Caponière', '41000', 'BLOIS', '1993-12-06 00:00:00', 'P', 'SW', 'ebde10de659e856e522303776dd7bdf1', NULL, NULL),
('b4', 'Charoze', 'Catherine', '100 pl Géants', '33000', 'BORDEAUX', '1997-09-25 00:00:00', NULL, 'SW', '3dfe563103ab11bec75bb5081e7a1dbe', NULL, NULL),
('b50', 'Clepkens', 'Christophe', '12 r Fédérico Garcia Lorca', '13000', 'MARSEILLE', '1998-01-18 00:00:00', NULL, 'SW', 'f1a333688622b5bc6da3e9c4d2ef76e5', NULL, NULL),
('b59', 'Cottin', 'Vincenne', '36 sq Capucins', '5000', 'GAP', '1995-10-21 00:00:00', NULL, 'GY', '27377792dd0e58af31b18d08d1aac17e', NULL, NULL),
('c14', 'Daburon', 'François', '13 r Champs Elysées', '6000', 'NICE', '1989-02-01 00:00:00', 'S', 'SW', '0ae79a56a8ffad7be7d27b4ab266a912', NULL, NULL),
('c3', 'De', 'Philippe', '13 r Charles Peguy', '10000', 'TROYES', '1992-05-05 00:00:00', NULL, 'SW', '0a3d72134fb3d6c024db4c510bc1605b', NULL, NULL),
('c54', 'Debelle', 'Michel', '181 r Caponière', '88000', 'EPINAL', '1991-04-09 00:00:00', NULL, 'SW', '9b432723daa16652e28d1ff06288ff52', NULL, NULL),
('d13', 'Debelle', 'Jeanne', '134 r Stalingrad', '44000', 'NANTES', '1991-12-05 00:00:00', NULL, 'SW', '5099dbb9bce2aa857d5c3fd3d88db83d', NULL, NULL),
('d51', 'Debroise', 'Michel', '2 av 6 Juin', '70000', 'VESOUL', '1997-11-18 00:00:00', 'E', 'GY', '751145ad37c5e8dc026d255848d51a27', NULL, NULL),
('e22', 'Desmarquest', 'Nathalie', '14 r Fédérico Garcia Lorca', '54000', 'NANCY', '1989-03-24 00:00:00', NULL, 'GY', 'd0a90a64db3da7d80521401057d69bb3', NULL, NULL),
('e24', 'Desnost', 'Pierre', '16 r Barral de Montferrat', '55000', 'VERDUN', '1993-05-17 00:00:00', 'E', 'SW', 'ec4e01e598e5e988d2ff830c19b3e1ad', NULL, NULL),
('e39', 'Dudouit', 'Frédéric', '18 quai Xavier Jouvin', '75000', 'PARIS', '1988-04-26 00:00:00', NULL, 'GY', 'c3cf5a687284e0d0fe2c16a8d0241370', NULL, NULL),
('e49', 'Duncombe', 'Claude', '19 av Alsace Lorraine', '9000', 'FOIX', '1996-02-19 00:00:00', NULL, 'GY', '23b66dd4d9be6bba639bc882f30f5475', NULL, NULL),
('e5', 'Enault-Pascreau', 'Céline', '25B r Stalingrad', '40000', 'MONT DE MARSAN', '1990-11-27 00:00:00', 'S', 'GY', '72baa9d520b127dd4ab03ff904cc1959', NULL, NULL),
('e52', 'Eynde', 'Valérie', '3 r Henri Moissan', '76000', 'ROUEN', '1991-10-31 00:00:00', NULL, 'GY', 'edb10d6f004104105f4331fc67481c54', NULL, NULL),
('f21', 'Finck', 'Jacques', 'rte Montreuil Bellay', '74000', 'ANNECY', '1993-06-08 00:00:00', NULL, 'SW', 'fc698bd6eba4453d16fc4acb4abf4a5a', NULL, NULL),
('f39', 'Frémont', 'Fernande', '4 r Jean Giono', '69000', 'LYON', '1997-02-15 00:00:00', NULL, 'GY', '5db3daef1ac645ecefb7c7707f50cccb', NULL, NULL),
('f4', 'Gest', 'Alain', '30 r Authie', '46000', 'FIGEAC', '1994-05-03 00:00:00', NULL, 'GY', '6e1fcd704528ad8bf6d6bbedb9210096', NULL, NULL),
('g19', 'Gheysen', 'Galassus', '32 bd Mar Foch', '75000', 'PARIS', '1996-01-18 00:00:00', NULL, 'SW', 'e42c3c1f3c935fcaf213a9d6cc65aec4', NULL, NULL),
('g30', 'Girard', 'Yvon', '31 av 6 Juin', '80000', 'AMIENS', '1999-03-27 00:00:00', 'N', 'GY', 'e99d73140fde03fd5211221cdfa01def', NULL, NULL),
('g53', 'Gombert', 'Luc', '32 r Emile Gueymard', '56000', 'VANNES', '1985-10-02 00:00:00', NULL, 'GY', 'cc01e9ee4f708befce5314f638155d71', NULL, NULL),
('g7', 'Guindon', 'Caroline', '40 r Mar Montgomery', '87000', 'LIMOGES', '1996-01-13 00:00:00', NULL, 'GY', '727bb92f57c3951d11695a52c92c2b0c', NULL, NULL),
('h13', 'Guindon', 'François', '44 r Picotière', '19000', 'TULLE', '1993-05-08 00:00:00', NULL, 'SW', '71ed249828df08158894e7845d0f7ead', NULL, NULL),
('h30', 'Igigabel', 'Guy', '33 gal Arlequin', '94000', 'CRETEIL', '1998-04-26 00:00:00', NULL, 'SW', '632ff8b7301ca9781603a4ef77916baf', NULL, NULL),
('h35', 'Jourdren', 'Pierre', '34 av Jean Perrot', '15000', 'AURRILLAC', '1993-08-26 00:00:00', NULL, 'GY', 'a4196b543c84427c169b73cd76d18191', NULL, NULL),
('h40', 'Juttard', 'Pierre-Raoul', '34 cours Jean Jaurès', '8000', 'SEDAN', '1992-11-01 00:00:00', NULL, 'GY', '75b6d9edaa7e66d9419591c1ee5ddf1b', NULL, NULL),
('j45', 'Labouré-Morel', 'Saout', '38 cours Berriat', '52000', 'CHAUMONT', '1998-02-25 00:00:00', 'N', 'SW', 'adb1f899331b31639c7bc35fecdf49a4', NULL, NULL),
('j50', 'Landré', 'Philippe', '4 av Gén Laperrine', '59000', 'LILLE', '1992-12-16 00:00:00', NULL, 'GY', '11386d2a63b87816ab543c6536d67bcb', NULL, NULL),
('j8', 'Langeard', 'Hugues', '39 av Jean Perrot', '93000', 'BAGNOLET', '1998-06-18 00:00:00', 'P', 'GY', 'e5ca51105f933c420e48ebaa2abafb35', NULL, NULL),
('k4', 'Lanne', 'Bernard', '4 r Bayeux', '30000', 'NIMES', '1996-11-21 00:00:00', NULL, 'SW', 'c90b440e841a6b82e1f9b3299164296b', NULL, NULL),
('k53', 'Le', 'Noël', '4 av Beauvert', '68000', 'MULHOUSE', '1983-03-23 00:00:00', NULL, 'SW', 'd6f27230246d194e5ebee62480a04145', NULL, NULL),
('l14', 'Le', 'Jean', '39 r Raspail', '53000', 'LAVAL', '1995-02-02 00:00:00', NULL, 'SW', 'f9526bea6522f18a63d1901e73ab0538', NULL, NULL),
('l23', 'Leclercq', 'Servane', '11 r Quinconce', '18000', 'BOURGES', '1995-06-05 00:00:00', NULL, 'SW', '8baa717e6265d1c1d762cc896151f821', NULL, NULL),
('l46', 'Lecornu', 'Jean-Bernard', '4 bd Mar Foch', '72000', 'LA FERTE BERNARD', '1997-01-24 00:00:00', NULL, 'GY', '55836a61b9d0624758fa9f1dec23bd45', NULL, NULL),
('l56', 'Lecornu', 'Ludovic', '4 r Abel Servien', '25000', 'BESANCON', '1996-02-27 00:00:00', NULL, 'SW', '10b1d0f1601e7ed83195d0e79ff0c810', NULL, NULL),
('m35', 'Lejard', 'Agnès', '4 r Anthoard', '82000', 'MONTAUBAN', '1987-10-06 00:00:00', NULL, 'SW', 'e412976c0873ea4e0a4712fddb642a64', NULL, NULL),
('m45', 'Lesaulnier', 'Pascal', '47 r Thiers', '57000', 'METZ', '1990-10-13 00:00:00', NULL, 'SW', '4e21e39dcb55294196f377ec9bf18ee1', NULL, NULL),
('n42', 'Letessier', 'Stéphane', '5 chem Capuche', '27000', 'EVREUX', '1996-03-06 00:00:00', NULL, 'GY', '007933bd04a53412538ebcd78963f312', NULL, NULL),
('n58', 'Loirat', 'Didier', 'Les Pêchers cité Bourg la Croix', '45000', 'ORLEANS', '1992-08-30 00:00:00', NULL, 'GY', '5f07785a9748494d01981e1c4048df7c', NULL, NULL),
('n59', 'Maffezzoli', 'Thibaud', '5 r Chateaubriand', '2000', 'LAON', '1994-12-19 00:00:00', NULL, 'SW', '999d18f60dd708285375402b69ce6dce', NULL, NULL),
('o26', 'Mancini', 'Anne', '5 r D''Agier', '48000', 'MENDE', '1995-01-05 00:00:00', NULL, 'GY', '240a98d9207a346b1ef5f68a29f44cd5', NULL, NULL),
('p32', 'Marcouiller', 'Gérard', '7 pl St Gilles', '91000', 'ISSY LES MOULINEAUX', '1992-12-24 00:00:00', NULL, 'GY', '1206e79a481716e90f5e7762a8d19216', NULL, NULL),
('p40', 'Michel', 'Jean-Claude', '5 r Gabriel Péri', '61000', 'FLERS', '1992-12-14 00:00:00', 'O', 'SW', 'bbc9a4768b107eb8975d8cb739689fd2', NULL, NULL),
('p41', 'Montecot', 'Françoise', '6 r Paul Valéry', '17000', 'SAINTES', '1998-07-27 00:00:00', NULL, 'GY', 'f4a6e0f8b4969a5386b510fb384d390c', NULL, NULL),
('p42', 'Notini', 'Veronique', '5 r Lieut Chabal', '60000', 'BEAUVAIS', '1994-12-12 00:00:00', NULL, 'SW', '8a673bfd8ee94ac13cfa8cdccb8d6982', NULL, NULL),
('p49', 'Onfroy', 'Den', '5 r Sidonie Jacolin', '37000', 'TOURS', '1977-10-03 00:00:00', NULL, 'GY', '3f2f6844be18d03b07cf9d1bb161fd41', NULL, NULL),
('p6', 'Pascreau', 'Charles', '57 bd Mar Foch', '64000', 'PAU', '1997-03-30 00:00:00', NULL, 'SW', 'c6c27fc98633c82571d75dcb5739bbdf', NULL, NULL),
('p7', 'Pernot', 'Claude-Noël', '6 r Alexandre 1 de Yougoslavie', '11000', 'NARBONNE', '1990-03-01 00:00:00', NULL, 'SW', '46d46a759bf6cbed05d7bcdcb911a4f8', NULL, NULL),
('p8', 'Perrier', 'Maître', '6 r Aubert Dubayet', '71000', 'CHALON SUR SAONE', '1991-06-23 00:00:00', NULL, 'GY', '2e3f209d4f2bb34667dde08e3c9585f1', NULL, NULL),
('q17', 'Petit', 'Jean-Louis', '7 r Ernest Renan', '50000', 'SAINT LO', '1997-09-06 00:00:00', NULL, 'GY', '7cded1985c9085440836c47687222230', NULL, NULL),
('r24', 'Piquery', 'Patrick', '9 r Vaucelles', '14000', 'CAEN', '1984-07-29 00:00:00', 'O', 'GY', 'c437755e7679a1005429adcca865a2f9', NULL, NULL),
('r58', 'Quiquandon', 'Joël', '7 r Ernest Renan', '29000', 'QUIMPER', '1990-06-30 00:00:00', NULL, 'GY', 'a27e04424f7713ab7c20675eb0190b05', NULL, NULL),
('s10', 'Retailleau', 'Josselin', '88Bis r Saumuroise', '39000', 'DOLE', '1995-11-14 00:00:00', NULL, 'SW', '2b3357d90b70edb1773bba13390166c1', NULL, NULL),
('s21', 'Retailleau', 'Pascal', '32 bd Ayrault', '23000', 'MONTLUCON', '1992-09-25 00:00:00', NULL, 'SW', 'c655c94ce843d593183b01d188bb4d22', NULL, NULL),
('t43', 'Souron', 'Maryse', '7B r Gay Lussac', '21000', 'DIJON', '1995-03-09 00:00:00', NULL, 'SW', '64f70f4b18e58c162fe90dacd33eee31', NULL, NULL),
('t47', 'Tiphagne', 'Patrick', '7B r Gay Lussac', '62000', 'ARRAS', '1997-08-29 00:00:00', NULL, 'SW', '94500e58e0501327d159b77878de3ac5', NULL, NULL),
('t55', 'Tréhet', 'Alain', '7D chem Barral', '12000', 'RODEZ', '1994-11-29 00:00:00', NULL, 'SW', '7c9e037b89bc180825efa8382aea03dc', NULL, NULL),
('t60', 'Tusseau', 'Josselin', '63 r Bon Repos', '28000', 'CHARTRES', '1991-03-29 00:00:00', NULL, 'GY', '940969ec6a01d76fdc88749c57a0fb6a', NULL, NULL),
('zzz', 'swiss', 'bourdin', NULL, NULL, NULL, '2003-06-18 00:00:00', NULL, 'BC', 'f3abb86bd34cf4d52698f14c0da1dc60', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `composant`
--

CREATE TABLE IF NOT EXISTS `composant` (
  `CMP_CODE` varchar(4) NOT NULL,
  `CMP_LIBELLE` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`CMP_CODE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `constituer`
--

CREATE TABLE IF NOT EXISTS `constituer` (
  `MED_DEPOTLEGAL` varchar(10) NOT NULL,
  `CMP_CODE` varchar(4) NOT NULL,
  `CST_QTE` float DEFAULT NULL,
  PRIMARY KEY (`MED_DEPOTLEGAL`,`CMP_CODE`),
  KEY `CMP_CODE` (`CMP_CODE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `dosage`
--

CREATE TABLE IF NOT EXISTS `dosage` (
  `DOS_CODE` varchar(10) NOT NULL,
  `DOS_QUANTITE` varchar(10) DEFAULT NULL,
  `DOS_UNITE` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`DOS_CODE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `etat_rapport`
--

CREATE TABLE IF NOT EXISTS `etat_rapport` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `etat_rapport`
--

INSERT INTO `etat_rapport` (`id`, `libelle`) VALUES
(1, 'Saisie en cours'),
(2, 'Saisie définitive, non consulté'),
(3, 'consulté par le délégué');

-- --------------------------------------------------------

--
-- Structure de la table `famille`
--

CREATE TABLE IF NOT EXISTS `famille` (
  `FAM_CODE` varchar(3) NOT NULL,
  `FAM_LIBELLE` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`FAM_CODE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `famille`
--

INSERT INTO `famille` (`FAM_CODE`, `FAM_LIBELLE`) VALUES
('AA', 'Antalgiques en association'),
('AAA', 'Antalgiques antipyrétiques en association'),
('AAC', 'Antidépresseur d''action centrale'),
('AAH', 'Antivertigineux antihistaminique H1'),
('ABA', 'Antibiotique antituberculeux'),
('ABC', 'Antibiotique antiacnéique local'),
('ABP', 'Antibiotique de la famille des béta-lactamines (pénicilline A)'),
('AFC', 'Antibiotique de la famille des cyclines'),
('AFM', 'Antibiotique de la famille des macrolides'),
('AH', 'Antihistaminique H1 local'),
('AIM', 'Antidépresseur imipraminique (tricyclique)'),
('AIN', 'Antidépresseur inhibiteur sélectif de la recapture de la sérotonine'),
('ALO', 'Antibiotique local (ORL)'),
('ANS', 'Antidépresseur IMAO non sélectif'),
('AO', 'Antibiotique ophtalmique'),
('AP', 'Antipsychotique normothymique'),
('AUM', 'Antibiotique urinaire minute'),
('CRT', 'Corticoïde, antibiotique et antifongique à  usage local'),
('HYP', 'Hypnotique antihistaminique'),
('PSA', 'Psychostimulant, antiasthénique');

-- --------------------------------------------------------

--
-- Structure de la table `formuler`
--

CREATE TABLE IF NOT EXISTS `formuler` (
  `MED_DEPOTLEGAL` varchar(10) NOT NULL,
  `PRE_CODE` varchar(2) NOT NULL,
  PRIMARY KEY (`MED_DEPOTLEGAL`,`PRE_CODE`),
  KEY `PRE_CODE` (`PRE_CODE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `interagir`
--

CREATE TABLE IF NOT EXISTS `interagir` (
  `MED_PERTURBATEUR` varchar(10) NOT NULL,
  `MED_MED_PERTURBE` varchar(10) NOT NULL,
  PRIMARY KEY (`MED_PERTURBATEUR`,`MED_MED_PERTURBE`),
  KEY `MED_MED_PERTURBE` (`MED_MED_PERTURBE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `labo`
--

CREATE TABLE IF NOT EXISTS `labo` (
  `LAB_CODE` varchar(2) NOT NULL,
  `LAB_NOM` varchar(10) DEFAULT NULL,
  `LAB_CHEFVENTE` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`LAB_CODE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `labo`
--

INSERT INTO `labo` (`LAB_CODE`, `LAB_NOM`, `LAB_CHEFVENTE`) VALUES
('BC', 'Bichat', 'Suzanne Terminus'),
('GY', 'Gyverny', 'Marcel MacDouglas'),
('SW', 'Swiss Kane', 'Alain Poutre');

-- --------------------------------------------------------

--
-- Structure de la table `medicament`
--

CREATE TABLE IF NOT EXISTS `medicament` (
  `MED_DEPOTLEGAL` varchar(10) NOT NULL,
  `MED_NOMCOMMERCIAL` varchar(25) DEFAULT NULL,
  `FAM_CODE` varchar(3) NOT NULL,
  `MED_COMPOSITION` varchar(255) DEFAULT NULL,
  `MED_EFFETS` varchar(255) DEFAULT NULL,
  `MED_CONTREINDIC` varchar(255) DEFAULT NULL,
  `MED_PRIXECHANTILLON` float DEFAULT NULL,
  PRIMARY KEY (`MED_DEPOTLEGAL`),
  KEY `FAM_CODE` (`FAM_CODE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `medicament`
--

INSERT INTO `medicament` (`MED_DEPOTLEGAL`, `MED_NOMCOMMERCIAL`, `FAM_CODE`, `MED_COMPOSITION`, `MED_EFFETS`, `MED_CONTREINDIC`, `MED_PRIXECHANTILLON`) VALUES
('3MYC7', 'TRIMYCINE', 'CRT', 'Triamcinolone (acétonide) + Néomycine + Nystatine', 'Ce médicament est un corticoïde à  activité forte ou très forte associé à  un antibiotique et un antifongique, utilisé en application locale dans certaines atteintes cutanées surinfectées.', 'Ce médicament est contre-indiqué en cas d''allergie à  l''un des constituants, d''infections de la peau ou de parasitisme non traités, d''acné. Ne pas appliquer sur une plaie, ni sous un pansement occlusif.', NULL),
('ADIMOL9', 'ADIMOL', 'ABP', 'Amoxicilline + Acide clavulanique', 'Ce médicament, plus puissant que les pénicillines simples, est utilisé pour traiter des infections bactériennes spécifiques.', 'Ce médicament est contre-indiqué en cas d''allergie aux pénicillines ou aux céphalosporines.', NULL),
('AMOPIL7', 'AMOPIL', 'ABP', 'Amoxicilline', 'Ce médicament, plus puissant que les pénicillines simples, est utilisé pour traiter des infections bactériennes spécifiques.', 'Ce médicament est contre-indiqué en cas d''allergie aux pénicillines. Il doit être administré avec prudence en cas d''allergie aux céphalosporines.', NULL),
('AMOX45', 'AMOXAR', 'ABP', 'Amoxicilline', 'Ce médicament, plus puissant que les pénicillines simples, est utilisé pour traiter des infections bactériennes spécifiques.', 'La prise de ce médicament peut rendre positifs les tests de dépistage du dopage.', NULL),
('AMOXIG12', 'AMOXI Gé', 'ABP', 'Amoxicilline', 'Ce médicament, plus puissant que les pénicillines simples, est utilisé pour traiter des infections bactériennes spécifiques.', 'Ce médicament est contre-indiqué en cas d''allergie aux pénicillines. Il doit être administré avec prudence en cas d''allergie aux céphalosporines.', NULL),
('APATOUX22', 'APATOUX Vitamine C', 'ALO', 'Tyrothricine + Tétracaïne + Acide ascorbique (Vitamine C)', 'Ce médicament est utilisé pour traiter les affections de la bouche et de la gorge.', 'Ce médicament est contre-indiqué en cas d''allergie à  l''un des constituants, en cas de phénylcétonurie et chez l''enfant de moins de 6 ans.', NULL),
('BACTIG10', 'BACTIGEL', 'ABC', 'Erythromycine', 'Ce médicament est utilisé en application locale pour traiter l''acné et les infections cutanées bactériennes associées.', 'Ce médicament est contre-indiqué en cas d''allergie aux antibiotiques de la famille des macrolides ou des lincosanides.', NULL),
('BACTIV13', 'BACTIVIL', 'AFM', 'Erythromycine', 'Ce médicament est utilisé pour traiter des infections bactériennes spécifiques.', 'Ce médicament est contre-indiqué en cas d''allergie aux macrolides (dont le chef de file est l''érythromycine).', NULL),
('BITALV', 'BIVALIC', 'AAA', 'Dextropropoxyphène + Paracétamol', 'Ce médicament est utilisé pour traiter les douleurs d''intensité modérée ou intense.', 'Ce médicament est contre-indiqué en cas d''allergie aux médicaments de cette famille, d''insuffisance hépatique ou d''insuffisance rénale.', NULL),
('CARTION6', 'CARTION', 'AAA', 'Acide acétylsalicylique (aspirine) + Acide ascorbique (Vitamine C) + Paracétamol', 'Ce médicament est utilisé dans le traitement symptomatique de la douleur ou de la fièvre.', 'Ce médicament est contre-indiqué en cas de troubles de la coagulation (tendances aux hémorragies), d''ulcère gastroduodénal, maladies graves du foie.', NULL),
('CLAZER6', 'CLAZER', 'AFM', 'Clarithromycine', 'Ce médicament est utilisé pour traiter des infections bactériennes spécifiques. Il est également utilisé dans le traitement de l''ulcère gastro-duodénal, en association avec d''autres médicaments.', 'Ce médicament est contre-indiqué en cas d''allergie aux macrolides (dont le chef de file est l''érythromycine).', NULL),
('DEPRIL9', 'DEPRAMIL', 'AIM', 'Clomipramine', 'Ce médicament est utilisé pour traiter les épisodes dépressifs sévères, certaines douleurs rebelles, les troubles obsessionnels compulsifs et certaines énurésies chez l''enfant.', 'Ce médicament est contre-indiqué en cas de glaucome ou d''adénome de la prostate, d''infarctus récent, ou si vous avez reà§u un traitement par IMAO durant les 2 semaines précédentes ou en cas d''allergie aux antidépresseurs imipraminiques.', NULL),
('DIMIRTAM6', 'DIMIRTAM', 'AAC', 'Mirtazapine', 'Ce médicament est utilisé pour traiter les épisodes dépressifs sévères.', 'La prise de ce produit est contre-indiquée en cas de d''allergie à  l''un des constituants.', NULL),
('DOLRIL7', 'DOLORIL', 'AAA', 'Acide acétylsalicylique (aspirine) + Acide ascorbique (Vitamine C) + Paracétamol', 'Ce médicament est utilisé dans le traitement symptomatique de la douleur ou de la fièvre.', 'Ce médicament est contre-indiqué en cas d''allergie au paracétamol ou aux salicylates.', NULL),
('DORNOM8', 'NORMADOR', 'HYP', 'Doxylamine', 'Ce médicament est utilisé pour traiter l''insomnie chez l''adulte.', 'Ce médicament est contre-indiqué en cas de glaucome, de certains troubles urinaires (rétention urinaire) et chez l''enfant de moins de 15 ans.', NULL),
('EQUILARX6', 'EQUILAR', 'AAH', 'Méclozine', 'Ce médicament est utilisé pour traiter les vertiges et pour prévenir le mal des transports.', 'Ce médicament ne doit pas être utilisé en cas d''allergie au produit, en cas de glaucome ou de rétention urinaire.', NULL),
('EVILR7', 'EVEILLOR', 'PSA', 'Adrafinil', 'Ce médicament est utilisé pour traiter les troubles de la vigilance et certains symptomes neurologiques chez le sujet agé.', 'Ce médicament est contre-indiqué en cas d''allergie à  l''un des constituants.', NULL),
('INSXT5', 'INSECTIL', 'AH', 'Diphénydramine', 'Ce médicament est utilisé en application locale sur les piqûres d''insecte et l''urticaire.', 'Ce médicament est contre-indiqué en cas d''allergie aux antihistaminiques.', NULL),
('JOVAI8', 'JOVENIL', 'AFM', 'Josamycine', 'Ce médicament est utilisé pour traiter des infections bactériennes spécifiques.', 'Ce médicament est contre-indiqué en cas d''allergie aux macrolides (dont le chef de file est l''érythromycine).', NULL),
('LIDOXY23', 'LIDOXYTRACINE', 'AFC', 'Oxytétracycline +Lidocaïne', 'Ce médicament est utilisé en injection intramusculaire pour traiter certaines infections spécifiques.', 'Ce médicament est contre-indiqué en cas d''allergie à  l''un des constituants. Il ne doit pas être associé aux rétinoïdes.', NULL),
('LITHOR12', 'LITHORINE', 'AP', 'Lithium', 'Ce médicament est indiqué dans la prévention des psychoses maniaco-dépressives ou pour traiter les états maniaques.', 'Ce médicament ne doit pas être utilisé si vous êtes allergique au lithium. Avant de prendre ce traitement, signalez à  votre médecin traitant si vous souffrez d''insuffisance rénale, ou si vous avez un régime sans sel.', NULL),
('PARMOL16', 'PARMOCODEINE', 'AA', 'Codéine + Paracétamol', 'Ce médicament est utilisé pour le traitement des douleurs lorsque des antalgiques simples ne sont pas assez efficaces.', 'Ce médicament est contre-indiqué en cas d''allergie à  l''un des constituants, chez l''enfant de moins de 15 Kg, en cas d''insuffisance hépatique ou respiratoire, d''asthme, de phénylcétonurie et chez la femme qui allaite.', NULL),
('PHYSOI8', 'PHYSICOR', 'PSA', 'Sulbutiamine', 'Ce médicament est utilisé pour traiter les baisses d''activité physique ou psychique, souvent dans un contexte de dépression.', 'Ce médicament est contre-indiqué en cas d''allergie à  l''un des constituants.', NULL),
('PIRIZ8', 'PIRIZAN', 'ABA', 'Pyrazinamide', 'Ce médicament est utilisé, en association à  d''autres antibiotiques, pour traiter la tuberculose.', 'Ce médicament est contre-indiqué en cas d''allergie à  l''un des constituants, d''insuffisance rénale ou hépatique, d''hyperuricémie ou de porphyrie.', NULL),
('POMDI20', 'POMADINE', 'AO', 'Bacitracine', 'Ce médicament est utilisé pour traiter les infections oculaires de la surface de l''oeil.', 'Ce médicament est contre-indiqué en cas d''allergie aux antibiotiques appliqués localement.', NULL),
('TROXT21', 'TROXADET', 'AIN', 'Paroxétine', 'Ce médicament est utilisé pour traiter la dépression et les troubles obsessionnels compulsifs. Il peut également être utilisé en prévention des crises de panique avec ou sans agoraphobie.', 'Ce médicament est contre-indiqué en cas d''allergie au produit.', NULL),
('TXISOL22', 'TOUXISOL Vitamine C', 'ALO', 'Tyrothricine + Acide ascorbique (Vitamine C)', 'Ce médicament est utilisé pour traiter les affections de la bouche et de la gorge.', 'Ce médicament est contre-indiqué en cas d''allergie à  l''un des constituants et chez l''enfant de moins de 6 ans.', NULL),
('URIEG6', 'URIREGUL', 'AUM', 'Fosfomycine trométamol', 'Ce médicament est utilisé pour traiter les infections urinaires simples chez la femme de moins de 65 ans.', 'La prise de ce médicament est contre-indiquée en cas d''allergie à  l''un des constituants et d''insuffisance rénale.', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `motif_visit`
--

CREATE TABLE IF NOT EXISTS `motif_visit` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `Libelle` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `motif_visit`
--

INSERT INTO `motif_visit` (`id`, `Libelle`) VALUES
(1, 'Périodicité'),
(2, 'Actualisation'),
(3, 'Relance'),
(4, 'Sollicitation praticien'),
(5, 'Autre');

-- --------------------------------------------------------

--
-- Structure de la table `offrir`
--

CREATE TABLE IF NOT EXISTS `offrir` (
  `VIS_MATRICULE` varchar(10) NOT NULL,
  `RAP_NUM` int(11) NOT NULL,
  `MED_DEPOTLEGAL` varchar(10) NOT NULL,
  `OFF_QTE` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`VIS_MATRICULE`,`RAP_NUM`,`MED_DEPOTLEGAL`),
  KEY `MED_DEPOTLEGAL` (`MED_DEPOTLEGAL`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `offrir`
--

INSERT INTO `offrir` (`VIS_MATRICULE`, `RAP_NUM`, `MED_DEPOTLEGAL`, `OFF_QTE`) VALUES
('a17', 5, 'DOLRIL7', 2),
('a17', 5, 'INSXT5', 3),
('a17', 6, 'DIMIRTAM6', 11),
('a17', 10, 'EVILR7', 0),
('a17', 11, 'EVILR7', 2),
('a17', 12, 'EVILR7', 10),
('a17', 33, 'AMOX45', 2),
('a17', 33, 'DIMIRTAM6', 45),
('a17', 33, 'DORNOM8', 6),
('a17', 33, 'EQUILARX6', 1),
('a17', 33, 'EVILR7', 5),
('a17', 34, 'AMOXIG12', 4),
('a17', 34, 'APATOUX22', 1),
('a17', 34, 'EVILR7', 4),
('a17', 35, 'AMOXIG12', 4),
('a17', 35, 'APATOUX22', 1),
('a17', 35, 'EVILR7', 4),
('a17', 40, 'DEPRIL9', 4),
('a17', 40, 'DOLRIL7', 1),
('a17', 41, 'EQUILARX6', 2);

-- --------------------------------------------------------

--
-- Structure de la table `posseder`
--

CREATE TABLE IF NOT EXISTS `posseder` (
  `PRA_NUM` smallint(6) NOT NULL,
  `SPE_CODE` varchar(5) NOT NULL,
  `POS_DIPLOME` varchar(25) DEFAULT NULL,
  `POS_COEFPRESCRIPTION` float DEFAULT NULL,
  PRIMARY KEY (`PRA_NUM`,`SPE_CODE`),
  KEY `SPE_CODE` (`SPE_CODE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `posseder`
--

INSERT INTO `posseder` (`PRA_NUM`, `SPE_CODE`, `POS_DIPLOME`, `POS_COEFPRESCRIPTION`) VALUES
(1, 'ACP', 'Faculté mé', 2);

-- --------------------------------------------------------

--
-- Structure de la table `praticien`
--

CREATE TABLE IF NOT EXISTS `praticien` (
  `PRA_NUM` smallint(6) NOT NULL,
  `PRA_NOM` varchar(25) DEFAULT NULL,
  `PRA_PRENOM` varchar(30) DEFAULT NULL,
  `PRA_ADRESSE` varchar(50) DEFAULT NULL,
  `PRA_CP` varchar(5) DEFAULT NULL,
  `PRA_VILLE` varchar(25) DEFAULT NULL,
  `PRA_COEFNOTORIETE` float DEFAULT NULL,
  `TYP_CODE` varchar(3) NOT NULL,
  PRIMARY KEY (`PRA_NUM`),
  KEY `TYP_CODE` (`TYP_CODE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `praticien`
--

INSERT INTO `praticien` (`PRA_NUM`, `PRA_NOM`, `PRA_PRENOM`, `PRA_ADRESSE`, `PRA_CP`, `PRA_VILLE`, `PRA_COEFNOTORIETE`, `TYP_CODE`) VALUES
(1, 'Notini', 'Alain', '114 r Authie', '85000', 'LA ROCHE SUR YON', 290.03, 'MH'),
(2, 'Gosselin', 'Albert', '13 r Devon', '41000', 'BLOIS', 307.49, 'MV'),
(3, 'Delahaye', 'André', '36 av 6 Juin', '25000', 'BESANCON', 185.79, 'PS'),
(4, 'Leroux', 'André', '47 av Robert Schuman', '60000', 'BEAUVAIS', 172.04, 'PH'),
(5, 'Desmoulins', 'Anne', '31 r St Jean', '30000', 'NIMES', 94.75, 'PO'),
(6, 'Mouel', 'Anne', '27 r Auvergne', '80000', 'AMIENS', 45.2, 'MH'),
(7, 'Desgranges-Lentz', 'Antoine', '1 r Albert de Mun', '29000', 'MORLAIX', 20.07, 'MV'),
(8, 'Marcouiller', 'Arnaud', '31 r St Jean', '68000', 'MULHOUSE', 396.52, 'PS'),
(9, 'Dupuy', 'Benoit', '9 r Demolombe', '34000', 'MONTPELLIER', 395.66, 'PH'),
(10, 'Lerat', 'Bernard', '31 r St Jean', '59000', 'LILLE', 257.79, 'PO'),
(11, 'Marçais-Lefebvre', 'Bertrand', '86Bis r Basse', '67000', 'STRASBOURG', 450.96, 'MH'),
(12, 'Boscher', 'Bruno', '94 r Falaise', '10000', 'TROYES', 356.14, 'MV'),
(13, 'Morel', 'Catherine', '21 r Chateaubriand', '75000', 'PARIS', 379.57, 'PS'),
(14, 'Guivarch', 'Chantal', '4 av Gén Laperrine', '45000', 'ORLEANS', 114.56, 'PH'),
(15, 'Bessin-Grosdoit', 'Christophe', '92 r Falaise', '6000', 'NICE', 222.06, 'PO'),
(16, 'Rossa', 'Claire', '14 av Thiès', '6000', 'NICE', 529.78, 'MH'),
(17, 'Cauchy', 'Denis', '5 av Ste Thérèse', '11000', 'NARBONNE', 458.82, 'MV'),
(18, 'Gaffé', 'Dominique', '9 av 1ère Armée Française', '35000', 'RENNES', 213.4, 'PS'),
(19, 'Guenon', 'Dominique', '98 bd Mar Lyautey', '44000', 'NANTES', 175.89, 'PH'),
(20, 'Prévot', 'Dominique', '29 r Lucien Nelle', '87000', 'LIMOGES', 151.36, 'PO'),
(21, 'Houchard', 'Eliane', '9 r Demolombe', '49100', 'ANGERS', 436.96, 'MH'),
(22, 'Desmons', 'Elisabeth', '51 r Bernières', '29000', 'QUIMPER', 281.17, 'MV'),
(23, 'Flament', 'Elisabeth', '11 r Pasteur', '35000', 'RENNES', 315.6, 'PS'),
(24, 'Goussard', 'Emmanuel', '9 r Demolombe', '41000', 'BLOIS', 40.72, 'PH'),
(25, 'Desprez', 'Eric', '9 r Vaucelles', '33000', 'BORDEAUX', 406.85, 'PO'),
(26, 'Coste', 'Evelyne', '29 r Lucien Nelle', '19000', 'TULLE', 441.87, 'MH'),
(27, 'Lefebvre', 'Frédéric', '2 pl Wurzburg', '55000', 'VERDUN', 573.63, 'MV'),
(28, 'Lemée', 'Frédéric', '29 av 6 Juin', '56000', 'VANNES', 326.4, 'PS'),
(29, 'Martin', 'Frédéric', 'Bât A 90 r Bayeux', '70000', 'VESOUL', 506.06, 'PH'),
(30, 'Marie', 'Frédérique', '172 r Caponière', '70000', 'VESOUL', 313.31, 'PO'),
(31, 'Rosenstech', 'Geneviève', '27 r Auvergne', '75000', 'PARIS', 366.82, 'MH'),
(32, 'Pontavice', 'Ghislaine', '8 r Gaillon', '86000', 'POITIERS', 265.58, 'MV'),
(33, 'Leveneur-Mosquet', 'Guillaume', '47 av Robert Schuman', '64000', 'PAU', 184.97, 'PS'),
(34, 'Blanchais', 'Guy', '30 r Authie', '8000', 'SEDAN', 502.48, 'PH'),
(35, 'Leveneur', 'Hugues', '7 pl St Gilles', '62000', 'ARRAS', 7.39, 'PO'),
(36, 'Mosquet', 'Isabelle', '22 r Jules Verne', '76000', 'ROUEN', 77.1, 'MH'),
(37, 'Giraudon', 'Jean-Christophe', '1 r Albert de Mun', '38100', 'VIENNE', 92.62, 'MV'),
(38, 'Marie', 'Jean-Claude', '26 r Hérouville', '69000', 'LYON', 120.1, 'PS'),
(39, 'Maury', 'Jean-François', '5 r Pierre Girard', '71000', 'CHALON SUR SAONE', 13.73, 'PH'),
(40, 'Dennel', 'Jean-Louis', '7 pl St Gilles', '28000', 'CHARTRES', 550.69, 'PO'),
(41, 'Ain', 'Jean-Pierre', '4 résid Olympia', '2000', 'LAON', 5.59, 'MH'),
(42, 'Chemery', 'Jean-Pierre', '51 pl Ancienne Boucherie', '14000', 'CAEN', 396.58, 'MV'),
(43, 'Comoz', 'Jean-Pierre', '35 r Auguste Lechesne', '18000', 'BOURGES', 340.35, 'PS'),
(44, 'Desfaudais', 'Jean-Pierre', '7 pl St Gilles', '29000', 'BREST', 71.76, 'PH'),
(45, 'Phan', 'JérÃ´me', '9 r Clos Caillet', '79000', 'NIORT', 451.61, 'PO'),
(46, 'Riou', 'Line', '43 bd Gén Vanier', '77000', 'MARNE LA VALLEE', 193.25, 'MH'),
(47, 'Chubilleau', 'Louis', '46 r Eglise', '17000', 'SAINTES', 202.07, 'MV'),
(48, 'Lebrun', 'Lucette', '178 r Auge', '54000', 'NANCY', 410.41, 'PS'),
(49, 'Goessens', 'Marc', '6 av 6 Juin', '39000', 'DOLE', 548.57, 'PH'),
(50, 'Laforge', 'Marc', '5 résid Prairie', '50000', 'SAINT LO', 265.05, 'PO'),
(51, 'Millereau', 'Marc', '36 av 6 Juin', '72000', 'LA FERTE BERNARD', 430.42, 'MH'),
(52, 'Dauverne', 'Marie-Christine', '69 av Charlemagne', '21000', 'DIJON', 281.05, 'MV'),
(53, 'Vittorio', 'Myriam', '3 pl Champlain', '94000', 'BOISSY SAINT LEGER', 356.23, 'PS'),
(54, 'Lapasset', 'Nhieu', '31 av 6 Juin', '52000', 'CHAUMONT', 107, 'PH'),
(55, 'Plantet-Besnier', 'Nicole', '10 av 1ère Armée Française', '86000', 'CHATELLEREAULT', 369.94, 'PO'),
(56, 'Chubilleau', 'Pascal', '3 r Hastings', '15000', 'AURRILLAC', 290.75, 'MH'),
(57, 'Robert', 'Pascal', '31 r St Jean', '93000', 'BOBIGNY', 162.41, 'MV'),
(58, 'Jean', 'Pascale', '114 r Authie', '49100', 'SAUMUR', 375.52, 'PS'),
(59, 'Chanteloube', 'Patrice', '14 av Thiès', '13000', 'MARSEILLE', 478.01, 'PH'),
(60, 'Lecuirot', 'Patrice', 'résid St Pères 55 r Pigacière', '54000', 'NANCY', 239.66, 'PO'),
(61, 'Gandon', 'Patrick', '47 av Robert Schuman', '37000', 'TOURS', 599.06, 'MH'),
(62, 'Mirouf', 'Patrick', '22 r Puits Picard', '74000', 'ANNECY', 458.42, 'MV'),
(63, 'Boireaux', 'Philippe', '14 av Thiès', '10000', 'CHALON EN CHAMPAGNE', 454.48, 'PS'),
(64, 'Cendrier', 'Philippe', '7 pl St Gilles', '12000', 'RODEZ', 164.16, 'PH'),
(65, 'Duhamel', 'Philippe', '114 r Authie', '34000', 'MONTPELLIER', 98.62, 'PO'),
(66, 'Grigy', 'Philippe', '15 r Mélingue', '44000', 'CLISSON', 285.1, 'MH'),
(67, 'Linard', 'Philippe', '1 r Albert de Mun', '81000', 'ALBI', 486.3, 'MV'),
(68, 'Lozier', 'Philippe', '8 r Gaillon', '31000', 'TOULOUSE', 48.4, 'PS'),
(69, 'Dechâtre', 'Pierre', '63 av Thiès', '23000', 'MONTLUCON', 253.75, 'PH'),
(70, 'Goessens', 'Pierre', '22 r Jean Romain', '40000', 'MONT DE MARSAN', 426.19, 'PO'),
(71, 'Leménager', 'Pierre', '39 av 6 Juin', '57000', 'METZ', 118.7, 'MH'),
(72, 'Née', 'Pierre', '39 av 6 Juin', '82000', 'MONTAUBAN', 72.54, 'MV'),
(73, 'Guyot', 'Pierre-Laurent', '43 bd Gén Vanier', '48000', 'MENDE', 352.31, 'PS'),
(74, 'Chauchard', 'Roger', '9 r Vaucelles', '13000', 'MARSEILLE', 552.19, 'PH'),
(75, 'Mabire', 'Roland', '11 r Boutiques', '67000', 'STRASBOURG', 422.39, 'PO'),
(76, 'Leroy', 'Soazig', '45 r Boutiques', '61000', 'ALENCON', 570.67, 'MH'),
(77, 'Guyot', 'Stéphane', '26 r Hérouville', '46000', 'FIGEAC', 28.85, 'MV'),
(78, 'Delposen', 'Sylvain', '39 av 6 Juin', '27000', 'DREUX', 292.01, 'PS'),
(79, 'Rault', 'Sylvie', '15 bd Richemond', '2000', 'SOISSON', 526.6, 'PH'),
(80, 'Renouf', 'Sylvie', '98 bd Mar Lyautey', '88000', 'EPINAL', 425.24, 'PO'),
(81, 'Alliet-Grach', 'Thierry', '14 av Thiès', '7000', 'PRIVAS', 451.31, 'MH'),
(82, 'Bayard', 'Thierry', '92 r Falaise', '42000', 'SAINT ETIENNE', 271.71, 'MV'),
(83, 'Gauchet', 'Thierry', '7 r Desmoueux', '38100', 'GRENOBLE', 406.1, 'PS'),
(84, 'Bobichon', 'Tristan', '219 r Caponière', '9000', 'FOIX', 218.36, 'PH'),
(85, 'Duchemin-Laniel', 'Véronique', '130 r St Jean', '33000', 'LIBOURNE', 265.61, 'PO'),
(86, 'Laurent', 'Younès', '34 r Demolombe', '53000', 'MAYENNE', 496.1, 'MH');

-- --------------------------------------------------------

--
-- Structure de la table `prescrire`
--

CREATE TABLE IF NOT EXISTS `prescrire` (
  `MED_DEPOTLEGAL` varchar(10) NOT NULL,
  `TIN_CODE` varchar(5) NOT NULL,
  `DOS_CODE` varchar(10) NOT NULL,
  `PRE_POSOLOGIE` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`MED_DEPOTLEGAL`,`TIN_CODE`,`DOS_CODE`),
  KEY `TIN_CODE` (`TIN_CODE`),
  KEY `DOS_CODE` (`DOS_CODE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `presentation`
--

CREATE TABLE IF NOT EXISTS `presentation` (
  `PRE_CODE` varchar(2) NOT NULL,
  `PRE_LIBELLE` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`PRE_CODE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `presenter`
--

CREATE TABLE IF NOT EXISTS `presenter` (
  `RAP_NUM` int(11) NOT NULL,
  `MED_DEPOTLEGAL` varchar(10) NOT NULL,
  `VIS_MATRICULE` varchar(10) NOT NULL,
  PRIMARY KEY (`RAP_NUM`,`MED_DEPOTLEGAL`,`VIS_MATRICULE`),
  KEY `RAP_NUM` (`RAP_NUM`),
  KEY `MED_DEPOTLEGAL` (`MED_DEPOTLEGAL`),
  KEY `VIS_MATRICULE` (`VIS_MATRICULE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `presenter`
--

INSERT INTO `presenter` (`RAP_NUM`, `MED_DEPOTLEGAL`, `VIS_MATRICULE`) VALUES
(5, '3MYC7', 'a17'),
(5, 'AMOX45', 'a17'),
(6, 'ADIMOL9', 'a17'),
(6, 'AMOPIL7', 'a17'),
(11, 'ADIMOL9', 'a17'),
(11, 'DEPRIL9', 'a17'),
(12, 'DORNOM8', 'a17'),
(12, 'EQUILARX6', 'a17'),
(21, 'ADIMOL9', 'a17'),
(21, 'DEPRIL9', 'a17'),
(22, 'ADIMOL9', 'a17'),
(22, 'DEPRIL9', 'a17'),
(23, 'ADIMOL9', 'a17'),
(23, 'DEPRIL9', 'a17'),
(25, '3MYC7', 'a17'),
(25, 'AMOX45', 'a17'),
(27, 'ADIMOL9', 'a17'),
(27, 'DEPRIL9', 'a17'),
(30, 'ADIMOL9', 'a17'),
(30, 'DEPRIL9', 'a17'),
(31, 'ADIMOL9', 'a17'),
(31, 'DEPRIL9', 'a17'),
(32, 'ADIMOL9', 'a17'),
(32, 'DEPRIL9', 'a17'),
(33, 'DIMIRTAM6', 'a17'),
(33, 'DORNOM8', 'a17'),
(34, 'EQUILARX6', 'a17'),
(34, 'INSXT5', 'a17'),
(35, 'EQUILARX6', 'a17'),
(35, 'INSXT5', 'a17'),
(36, 'DIMIRTAM6', 'a17'),
(36, 'DORNOM8', 'a17'),
(39, 'DORNOM8', 'a17'),
(39, 'EQUILARX6', 'a17'),
(40, 'EQUILARX6', 'a17'),
(41, 'EVILR7', 'a17'),
(41, 'INSXT5', 'a17');

-- --------------------------------------------------------

--
-- Structure de la table `rapport_visite`
--

CREATE TABLE IF NOT EXISTS `rapport_visite` (
  `VIS_MATRICULE` varchar(10) NOT NULL,
  `RAP_NUM` int(11) NOT NULL,
  `PRA_NUM` smallint(6) DEFAULT NULL,
  `RAP_DATE` datetime DEFAULT NULL,
  `Etat` int(11) NOT NULL,
  `ChampMotifLibre` varchar(255) DEFAULT NULL,
  `DateVisite` date DEFAULT NULL,
  `DocumentationDistribue` tinyint(1) NOT NULL,
  `Observation` varchar(255) DEFAULT NULL,
  `Coeff_Conf` int(11) DEFAULT NULL,
  `motif` int(11) DEFAULT NULL,
  `Remplacant` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`VIS_MATRICULE`,`RAP_NUM`),
  KEY `PRA_NUM` (`PRA_NUM`),
  KEY `motif` (`motif`),
  KEY `Remplacant` (`Remplacant`),
  KEY `Etat` (`Etat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `rapport_visite`
--

INSERT INTO `rapport_visite` (`VIS_MATRICULE`, `RAP_NUM`, `PRA_NUM`, `RAP_DATE`, `Etat`, `ChampMotifLibre`, `DateVisite`, `DocumentationDistribue`, `Observation`, `Coeff_Conf`, `motif`, `Remplacant`) VALUES
('a131', 0, 1, '0000-00-00 00:00:00', 1, NULL, '0000-00-00', 0, 'vfvsdvsdv', 2, 2, NULL),
('a17', 1, 1, '2016-12-09 00:00:00', 1, '', '2016-12-09', 0, 'efefqfqsfq', 1, 1, NULL),
('a17', 2, 1, '2016-12-09 00:00:00', 1, NULL, '2016-12-09', 1, 'gzergzegzegze', 1, 1, NULL),
('a17', 3, 21, '2009-12-16 00:00:00', 3, '', '2016-12-09', 0, 'turtuytrytrytrytry', 45, 2, 11),
('a17', 4, 31, '2009-12-16 00:00:00', 3, '', '2016-12-09', 0, 'yffytfytfytyf', 45, 3, NULL),
('a17', 5, 11, '2009-12-16 00:00:00', 2, '', '2016-12-09', 0, 'ghfhdfhd', 452, 2, NULL),
('a17', 6, 21, '2009-12-16 00:00:00', 1, '', '2016-12-09', 0, 'herhreher', 45, 2, 6),
('a17', 7, 21, '2009-12-16 00:00:00', 1, '', '2016-12-08', 0, 'rhrehrehrherher', 45, 2, NULL),
('a17', 8, 21, '2009-12-16 00:00:00', 1, '', '2016-12-08', 0, 'rhrehrehrherher', 45, 2, NULL),
('a17', 9, 21, '2009-12-16 00:00:00', 1, '', '2016-12-08', 0, 'rhrehrehrherher', 45, 2, NULL),
('a17', 10, 6, '2009-12-16 00:00:00', 3, '', '2016-12-09', 0, 'rhfgsg', 6, 2, NULL),
('a17', 11, 1, NULL, 2, '', '2016-12-10', 0, 'test de la date de saisi du rapport et documentation offerte a true', 800, 2, 6),
('a17', 12, 16, NULL, 1, '', NULL, 1, '  test', 45, 3, 6),
('a17', 13, 11, NULL, 1, '', NULL, 0, '  efafzfa', 6, 3, 1),
('a17', 14, 26, NULL, 1, '', NULL, 0, '  ', 6, 3, 6),
('a17', 15, 11, '2011-12-16 00:00:00', 2, 'gezge', '2016-12-15', 0, '  egegzg', 45, 5, 11),
('a17', 16, 16, '2011-12-16 00:00:00', 2, '', '2016-12-01', 0, '  ', 6, 2, 11),
('a17', 17, 16, '2011-12-16 00:00:00', 2, '', '2016-12-01', 0, '  ', 6, 2, 11),
('a17', 18, 6, '2011-12-16 00:00:00', 1, '', '2016-12-13', 0, '  egezg', 6, 4, NULL),
('a17', 19, 6, '2011-12-16 00:00:00', 1, '', '2016-12-22', 0, '  sqsqfsqf', 6, 4, 6),
('a17', 20, 6, '2011-12-16 00:00:00', 1, '', '2016-12-22', 0, '  sqsqfsqf', 6, 4, 6),
('a17', 21, 1, NULL, 2, '', '2016-12-10', 1, ' test de la date de saisi du rapport et documentation offerte a true ', 800, 2, 6),
('a17', 22, 1, NULL, 2, '', '2016-12-10', 1, ' test de la date de saisi du rapport et documentation offerte a true ', 800, 2, 6),
('a17', 23, 1, NULL, 2, '', '2016-12-10', 1, ' test de la date de saisi du rapport et documentation offerte a true ', 800, 2, 6),
('a17', 24, 16, '2011-12-16 00:00:00', 1, '', '2016-12-01', 0, '  ', 69, 3, NULL),
('a17', 25, 11, '2011-12-16 00:00:00', 1, '', '2016-12-09', 0, ' ghfhdfhd ', 452, 2, NULL),
('a17', 26, 6, '2011-12-16 00:00:00', 1, '', '2016-12-09', 0, ' rhfgsg ', 6, 2, NULL),
('a17', 27, 1, '2011-12-16 00:00:00', 1, '', '2016-12-10', 1, '  test de la date de saisi du rapport et documentation offerte a true  ', 800, 2, 6),
('a17', 28, 6, '2011-12-16 00:00:00', 1, '', '2016-12-09', 0, ' rhfgsg ', 6, 2, NULL),
('a17', 29, 11, '2011-12-16 00:00:00', 1, '', '2016-12-07', 0, '  ', 5, 3, NULL),
('a17', 30, 1, NULL, 1, '', '2016-12-10', 1, ' test de la date de saisi du rapport et documentation offerte a true ', 800, 2, 6),
('a17', 31, 1, NULL, 1, '', '2016-12-10', 1, ' test de la date de saisi du rapport et documentation offerte a true ', 800, 2, 6),
('a17', 32, 1, NULL, 1, '', '2016-12-10', 1, '  test de la date de saisi du rapport et documentation offerte a true  ', 800, 2, 6),
('a17', 33, 11, '2011-12-16 00:00:00', 1, '', '2016-12-01', 1, 'ohiugyugygyugug', 6, 2, 16),
('a17', 34, 11, '2011-12-16 00:00:00', 1, 'gzegzegez', '2016-12-08', 0, 'ezgzzege', 69, 5, NULL),
('a17', 35, 11, '2011-12-16 00:00:00', 1, 'gzegzegez', '2016-12-08', 0, 'ezgzzege', 69, 5, NULL),
('a17', 36, 11, '2011-12-16 00:00:00', 1, '', '2016-12-01', 1, ' ohiugyugygyugug ', 6, 2, 16),
('a17', 37, 21, '2011-12-16 00:00:00', 1, '', '2016-12-08', 0, ' rhrehrehrherher ', 45, 2, NULL),
('a17', 38, 16, '2011-12-16 00:00:00', 2, '', '2016-12-14', 0, '  uigtyrt', 58, 4, 16),
('a17', 39, 11, '2011-12-16 00:00:00', 2, '', '2016-12-15', 1, '  utfuftutf', 1, 2, 1),
('a17', 40, 1, '2016-02-16 00:00:00', 1, 'test', '2016-08-16', 0, 'test4444', 1, 1, 2),
('a17', 41, 11, '2011-12-16 00:00:00', 1, '', '2016-12-08', 1, '  scqsc', 58, 4, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `region`
--

CREATE TABLE IF NOT EXISTS `region` (
  `REG_CODE` varchar(2) NOT NULL,
  `SEC_CODE` varchar(1) NOT NULL,
  `REG_NOM` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`REG_CODE`),
  KEY `SEC_CODE` (`SEC_CODE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `region`
--

INSERT INTO `region` (`REG_CODE`, `SEC_CODE`, `REG_NOM`) VALUES
('AL', 'E', 'Alsace Lorraine'),
('AQ', 'S', 'Aquitaine'),
('AU', 'P', 'Auvergne'),
('BG', 'O', 'Bretagne'),
('BN', 'O', 'Basse Normandie'),
('BO', 'E', 'Bourgogne'),
('CA', 'N', 'Champagne Ardennes'),
('CE', 'P', 'Centre'),
('FC', 'E', 'Franche Comté'),
('HN', 'N', 'Haute Normandie'),
('IF', 'P', 'Ile de France'),
('LG', 'S', 'Languedoc'),
('LI', 'P', 'Limousin'),
('MP', 'S', 'Midi Pyrénée'),
('NP', 'N', 'Nord Pas de Calais'),
('PA', 'S', 'Provence Alpes Cote d''Azur'),
('PC', 'O', 'Poitou Charente'),
('PI', 'N', 'Picardie'),
('PL', 'O', 'Pays de Loire'),
('RA', 'E', 'Rhone Alpes'),
('RO', 'S', 'Roussilon'),
('VD', 'O', 'Vendée');

-- --------------------------------------------------------

--
-- Structure de la table `secteur`
--

CREATE TABLE IF NOT EXISTS `secteur` (
  `SEC_CODE` varchar(1) NOT NULL,
  `SEC_LIBELLE` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`SEC_CODE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `secteur`
--

INSERT INTO `secteur` (`SEC_CODE`, `SEC_LIBELLE`) VALUES
('E', 'Est'),
('N', 'Nord'),
('O', 'Ouest'),
('P', 'Paris centre'),
('S', 'Sud');

-- --------------------------------------------------------

--
-- Structure de la table `specialite`
--

CREATE TABLE IF NOT EXISTS `specialite` (
  `SPE_CODE` varchar(5) NOT NULL,
  `SPE_LIBELLE` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`SPE_CODE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `specialite`
--

INSERT INTO `specialite` (`SPE_CODE`, `SPE_LIBELLE`) VALUES
('ACP', 'anatomie et cytologie pathologiques'),
('AMV', 'angéiologie, médecine vasculaire'),
('ARC', 'anesthésiologie et réanimation chirurgicale'),
('BM', 'biologie médicale'),
('CAC', 'cardiologie et affections cardio-vasculaires'),
('CCT', 'chirurgie cardio-vasculaire et thoracique'),
('CG', 'chirurgie générale'),
('CMF', 'chirurgie maxillo-faciale'),
('COM', 'cancérologie, oncologie médicale'),
('COT', 'chirurgie orthopédique et traumatologie'),
('CPR', 'chirurgie plastique reconstructrice et esthétique'),
('CU', 'chirurgie urologique'),
('CV', 'chirurgie vasculaire'),
('DN', 'diabétologie-nutrition, nutrition'),
('DV', 'dermatologie et vénéréologie'),
('EM', 'endocrinologie et métabolismes'),
('ETD', 'évaluation et traitement de la douleur'),
('GEH', 'gastro-entérologie et hépatologie (appareil digestif)'),
('GMO', 'gynécologie médicale, obstétrique'),
('GO', 'gynécologie-obstétrique'),
('HEM', 'maladies du sang (hématologie)'),
('MBS', 'médecine et biologie du sport'),
('MDT', 'médecine du travail'),
('MMO', 'médecine manuelle - ostéopathie'),
('MN', 'médecine nucléaire'),
('MPR', 'médecine physique et de réadaptation'),
('MTR', 'médecine tropicale, pathologie infectieuse et tropicale'),
('NEP', 'néphrologie'),
('NRC', 'neurochirurgie'),
('NRL', 'neurologie'),
('ODM', 'orthopédie dento maxillo-faciale'),
('OPH', 'ophtalmologie'),
('ORL', 'oto-rhino-laryngologie'),
('PEA', 'psychiatrie de l''enfant et de l''adolescent'),
('PME', 'pédiatrie maladies des enfants'),
('PNM', 'pneumologie'),
('PSC', 'psychiatrie'),
('RAD', 'radiologie (radiodiagnostic et imagerie médicale)'),
('RDT', 'radiothérapie (oncologie option radiothérapie)'),
('RGM', 'reproduction et gynécologie médicale'),
('RHU', 'rhumatologie'),
('STO', 'stomatologie'),
('SXL', 'sexologie'),
('TXA', 'toxicomanie et alcoologie');

-- --------------------------------------------------------

--
-- Structure de la table `switchboard items`
--

CREATE TABLE IF NOT EXISTS `switchboard items` (
  `SwitchboardID` int(11) NOT NULL,
  `ItemNumber` smallint(6) NOT NULL,
  `ItemText` varchar(255) DEFAULT NULL,
  `Command` smallint(6) DEFAULT NULL,
  `Argument` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`SwitchboardID`,`ItemNumber`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `switchboard items`
--

INSERT INTO `switchboard items` (`SwitchboardID`, `ItemNumber`, `ItemText`, `Command`, `Argument`) VALUES
(1, 0, 'Gestion des comptes rendus', NULL, 'Par défaut'),
(1, 1, 'Comptes-Rendus', 3, 'RAPPORT_VISITE'),
(1, 2, 'Visiteurs', 3, 'F_VISITEUR'),
(1, 3, 'Praticiens', 3, 'F_PRATICIEN'),
(1, 4, 'Medicaments', 3, 'F_MEDICAMENT'),
(1, 5, 'Quitter', 8, 'quitter');

-- --------------------------------------------------------

--
-- Structure de la table `travailler`
--

CREATE TABLE IF NOT EXISTS `travailler` (
  `VIS_MATRICULE` varchar(10) NOT NULL,
  `JJMMAA` datetime NOT NULL,
  `REG_CODE` varchar(2) NOT NULL,
  `TRA_ROLE` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`JJMMAA`,`VIS_MATRICULE`,`REG_CODE`),
  KEY `REG_CODE` (`REG_CODE`),
  KEY `VIS_MATRICULE` (`VIS_MATRICULE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `travailler`
--

INSERT INTO `travailler` (`VIS_MATRICULE`, `JJMMAA`, `REG_CODE`, `TRA_ROLE`) VALUES
('p49', '1977-10-03 00:00:00', 'CE', 'Visiteur'),
('k53', '1983-03-23 00:00:00', 'CA', 'Visiteur'),
('r24', '1984-07-29 00:00:00', 'BN', 'Responsable'),
('g53', '1985-10-02 00:00:00', 'BG', 'Visiteur'),
('a55', '1987-07-17 00:00:00', 'MP', 'Responsable'),
('m35', '1987-10-06 00:00:00', 'MP', 'Visiteur'),
('e39', '1988-04-26 00:00:00', 'IF', 'Visiteur'),
('c14', '1989-02-01 00:00:00', 'PA', 'Visiteur'),
('e22', '1989-03-24 00:00:00', 'AL', 'Visiteur'),
('p7', '1990-03-01 00:00:00', 'RO', 'Visiteur'),
('r58', '1990-06-30 00:00:00', 'BG', 'Visiteur'),
('m45', '1990-10-13 00:00:00', 'AL', 'Visiteur'),
('e5', '1990-11-27 00:00:00', 'MP', 'Visiteur'),
('t60', '1991-03-29 00:00:00', 'CE', 'Visiteur'),
('c54', '1991-04-09 00:00:00', 'AL', 'Visiteur'),
('p8', '1991-06-23 00:00:00', 'BO', 'Visiteur'),
('a17', '1991-08-26 00:00:00', 'RA', 'Visiteur'),
('e52', '1991-10-31 00:00:00', 'HN', 'Visiteur'),
('d13', '1991-12-05 00:00:00', 'PL', 'Visiteur'),
('k53', '1992-04-03 00:00:00', 'AL', 'Délégué'),
('c3', '1992-05-05 00:00:00', 'CA', 'Responsable'),
('n58', '1992-08-30 00:00:00', 'CE', 'Visiteur'),
('s21', '1992-09-25 00:00:00', 'LI', 'Visiteur'),
('h40', '1992-11-01 00:00:00', 'CA', 'Visiteur'),
('a131', '1992-12-11 00:00:00', 'BN', 'Visiteur'),
('p40', '1992-12-14 00:00:00', 'BN', 'Délégué'),
('j50', '1992-12-16 00:00:00', 'NP', 'Visiteur'),
('p32', '1992-12-24 00:00:00', 'IF', 'Visiteur'),
('h13', '1993-05-08 00:00:00', 'LI', 'Visiteur'),
('e24', '1993-05-17 00:00:00', 'AL', 'Délégué'),
('f21', '1993-06-08 00:00:00', 'RA', 'Visiteur'),
('h35', '1993-08-26 00:00:00', 'AU', 'Visiteur'),
('f4', '1994-05-03 00:00:00', 'MP', 'Visiteur'),
('b25', '1994-07-03 00:00:00', 'PL', 'Visiteur'),
('t55', '1994-11-29 00:00:00', 'MP', 'Visiteur'),
('p42', '1994-12-12 00:00:00', 'PI', 'Visiteur'),
('n59', '1994-12-19 00:00:00', 'PI', 'Visiteur'),
('o26', '1995-01-05 00:00:00', 'LG', 'Visiteur'),
('l14', '1995-02-02 00:00:00', 'PL', 'Visiteur'),
('t43', '1995-03-09 00:00:00', 'BO', 'Visiteur'),
('a55', '1995-05-19 00:00:00', 'RO', 'Visiteur'),
('l23', '1995-06-05 00:00:00', 'PC', 'Visiteur'),
('b59', '1995-10-21 00:00:00', 'RA', 'Visiteur'),
('s10', '1995-11-14 00:00:00', 'FC', 'Visiteur'),
('e5', '1995-11-27 00:00:00', 'MP', 'Délégué'),
('g7', '1996-01-13 00:00:00', 'LI', 'Visiteur'),
('g19', '1996-01-18 00:00:00', 'IF', 'Visiteur'),
('e49', '1996-02-19 00:00:00', 'MP', 'Visiteur'),
('l56', '1996-02-27 00:00:00', 'FC', 'Visiteur'),
('n42', '1996-03-06 00:00:00', 'HN', 'Visiteur'),
('b13', '1996-03-11 00:00:00', 'AL', 'Visiteur'),
('a131', '1996-05-27 00:00:00', 'BG', 'Visiteur'),
('k4', '1996-11-21 00:00:00', 'LG', 'Visiteur'),
('l46', '1997-01-24 00:00:00', 'PL', 'Visiteur'),
('c14', '1997-02-01 00:00:00', 'PA', 'Délégué'),
('f39', '1997-02-15 00:00:00', 'RA', 'Visiteur'),
('b16', '1997-03-21 00:00:00', 'BG', 'Visiteur'),
('p6', '1997-03-30 00:00:00', 'AQ', 'Visiteur'),
('t47', '1997-08-29 00:00:00', 'PI', 'Visiteur'),
('q17', '1997-09-06 00:00:00', 'BN', 'Visiteur'),
('a17', '1997-09-19 00:00:00', 'RA', 'Délégué'),
('b4', '1997-09-25 00:00:00', 'AQ', 'Visiteur'),
('d51', '1997-11-18 00:00:00', 'FC', 'Délégué'),
('b50', '1998-01-18 00:00:00', 'PA', 'Visiteur'),
('j45', '1998-02-25 00:00:00', 'CA', 'Délégué'),
('h30', '1998-04-26 00:00:00', 'IF', 'Visiteur'),
('r24', '1998-05-25 00:00:00', 'BN', 'Délégué'),
('j8', '1998-06-18 00:00:00', 'IF', 'Délégué'),
('p41', '1998-07-27 00:00:00', 'PC', 'Visiteur'),
('a93', '1999-01-02 00:00:00', 'PC', 'Visiteur'),
('b19', '1999-01-31 00:00:00', 'PL', 'Visiteur'),
('g30', '1999-03-27 00:00:00', 'PI', 'Délégué'),
('m45', '1999-04-08 00:00:00', 'AL', 'Délégué'),
('b34', '1999-06-18 00:00:00', 'CE', 'Délégué'),
('p40', '1999-07-17 00:00:00', 'BN', 'Délégué'),
('a55', '1999-08-21 00:00:00', 'RO', 'Délégué'),
('b25', '2000-01-01 00:00:00', 'PL', 'Délégué'),
('e24', '2000-02-29 00:00:00', 'AL', 'Délégué'),
('b28', '2000-08-02 00:00:00', 'LG', 'Visiteur'),
('g30', '2000-10-31 00:00:00', 'PI', 'Délégué'),
('e5', '2000-11-27 00:00:00', 'AQ', 'Délégué'),
('c14', '2001-03-03 00:00:00', 'PA', 'Délégué'),
('d51', '2002-03-20 00:00:00', 'FC', 'Délégué'),
('f4', '2016-12-01 00:00:00', 'AQ', 'Délégué'),
('b34', '2016-12-08 00:00:00', 'CE', 'Délégué');

-- --------------------------------------------------------

--
-- Structure de la table `type_individu`
--

CREATE TABLE IF NOT EXISTS `type_individu` (
  `TIN_CODE` varchar(5) NOT NULL,
  `TIN_LIBELLE` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`TIN_CODE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `type_praticien`
--

CREATE TABLE IF NOT EXISTS `type_praticien` (
  `TYP_CODE` varchar(3) NOT NULL,
  `TYP_LIBELLE` varchar(25) DEFAULT NULL,
  `TYP_LIEU` varchar(35) DEFAULT NULL,
  PRIMARY KEY (`TYP_CODE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `type_praticien`
--

INSERT INTO `type_praticien` (`TYP_CODE`, `TYP_LIBELLE`, `TYP_LIEU`) VALUES
('MH', 'Médecin Hospitalier', 'Hopital ou clinique'),
('MV', 'Médecine de Ville', 'Cabinet'),
('PH', 'Pharmacien Hospitalier', 'Hopital ou clinique'),
('PO', 'Pharmacien Officine', 'Pharmacie'),
('PS', 'Personnel de santé', 'Centre paramédical');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `collaborateur`
--
ALTER TABLE `collaborateur`
  ADD CONSTRAINT `collaborateur_ibfk_1` FOREIGN KEY (`LAB_CODE`) REFERENCES `labo` (`LAB_CODE`),
  ADD CONSTRAINT `collaborateur_ibfk_2` FOREIGN KEY (`SEC_CODE`) REFERENCES `secteur` (`SEC_CODE`),
  ADD CONSTRAINT `fk_estdeleguer` FOREIGN KEY (`CODE_REG_DELEGUE`) REFERENCES `region` (`REG_CODE`);

--
-- Contraintes pour la table `constituer`
--
ALTER TABLE `constituer`
  ADD CONSTRAINT `constituer_ibfk_1` FOREIGN KEY (`CMP_CODE`) REFERENCES `composant` (`CMP_CODE`),
  ADD CONSTRAINT `constituer_ibfk_2` FOREIGN KEY (`MED_DEPOTLEGAL`) REFERENCES `medicament` (`MED_DEPOTLEGAL`);

--
-- Contraintes pour la table `formuler`
--
ALTER TABLE `formuler`
  ADD CONSTRAINT `formuler_ibfk_1` FOREIGN KEY (`PRE_CODE`) REFERENCES `presentation` (`PRE_CODE`),
  ADD CONSTRAINT `formuler_ibfk_2` FOREIGN KEY (`MED_DEPOTLEGAL`) REFERENCES `medicament` (`MED_DEPOTLEGAL`);

--
-- Contraintes pour la table `interagir`
--
ALTER TABLE `interagir`
  ADD CONSTRAINT `interagir_ibfk_1` FOREIGN KEY (`MED_PERTURBATEUR`) REFERENCES `medicament` (`MED_DEPOTLEGAL`),
  ADD CONSTRAINT `interagir_ibfk_2` FOREIGN KEY (`MED_MED_PERTURBE`) REFERENCES `medicament` (`MED_DEPOTLEGAL`);

--
-- Contraintes pour la table `medicament`
--
ALTER TABLE `medicament`
  ADD CONSTRAINT `medicament_ibfk_1` FOREIGN KEY (`FAM_CODE`) REFERENCES `famille` (`FAM_CODE`);

--
-- Contraintes pour la table `offrir`
--
ALTER TABLE `offrir`
  ADD CONSTRAINT `offrir_ibfk_1` FOREIGN KEY (`MED_DEPOTLEGAL`) REFERENCES `medicament` (`MED_DEPOTLEGAL`),
  ADD CONSTRAINT `offrir_ibfk_2` FOREIGN KEY (`VIS_MATRICULE`, `RAP_NUM`) REFERENCES `rapport_visite` (`VIS_MATRICULE`, `RAP_NUM`);

--
-- Contraintes pour la table `posseder`
--
ALTER TABLE `posseder`
  ADD CONSTRAINT `posseder_ibfk_1` FOREIGN KEY (`SPE_CODE`) REFERENCES `specialite` (`SPE_CODE`),
  ADD CONSTRAINT `posseder_ibfk_2` FOREIGN KEY (`PRA_NUM`) REFERENCES `praticien` (`PRA_NUM`);

--
-- Contraintes pour la table `praticien`
--
ALTER TABLE `praticien`
  ADD CONSTRAINT `praticien_ibfk_1` FOREIGN KEY (`TYP_CODE`) REFERENCES `type_praticien` (`TYP_CODE`);

--
-- Contraintes pour la table `prescrire`
--
ALTER TABLE `prescrire`
  ADD CONSTRAINT `prescrire_ibfk_1` FOREIGN KEY (`MED_DEPOTLEGAL`) REFERENCES `medicament` (`MED_DEPOTLEGAL`),
  ADD CONSTRAINT `prescrire_ibfk_2` FOREIGN KEY (`TIN_CODE`) REFERENCES `type_individu` (`TIN_CODE`),
  ADD CONSTRAINT `prescrire_ibfk_3` FOREIGN KEY (`DOS_CODE`) REFERENCES `dosage` (`DOS_CODE`);

--
-- Contraintes pour la table `presenter`
--
ALTER TABLE `presenter`
  ADD CONSTRAINT `fk_VISITE` FOREIGN KEY (`VIS_MATRICULE`) REFERENCES `rapport_visite` (`VIS_MATRICULE`),
  ADD CONSTRAINT `Fk_medi` FOREIGN KEY (`MED_DEPOTLEGAL`) REFERENCES `medicament` (`MED_DEPOTLEGAL`);

--
-- Contraintes pour la table `rapport_visite`
--
ALTER TABLE `rapport_visite`
  ADD CONSTRAINT `fk_etatrapport` FOREIGN KEY (`Etat`) REFERENCES `etat_rapport` (`id`),
  ADD CONSTRAINT `FK_motif` FOREIGN KEY (`motif`) REFERENCES `motif_visit` (`id`),
  ADD CONSTRAINT `FK_remp` FOREIGN KEY (`Remplacant`) REFERENCES `praticien` (`PRA_NUM`),
  ADD CONSTRAINT `rapport_visite_ibfk_1` FOREIGN KEY (`PRA_NUM`) REFERENCES `praticien` (`PRA_NUM`),
  ADD CONSTRAINT `rapport_visite_ibfk_2` FOREIGN KEY (`VIS_MATRICULE`) REFERENCES `collaborateur` (`VIS_MATRICULE`);

--
-- Contraintes pour la table `region`
--
ALTER TABLE `region`
  ADD CONSTRAINT `region_ibfk_1` FOREIGN KEY (`SEC_CODE`) REFERENCES `secteur` (`SEC_CODE`);

--
-- Contraintes pour la table `travailler`
--
ALTER TABLE `travailler`
  ADD CONSTRAINT `travailler_ibfk_1` FOREIGN KEY (`REG_CODE`) REFERENCES `region` (`REG_CODE`),
  ADD CONSTRAINT `travailler_ibfk_2` FOREIGN KEY (`VIS_MATRICULE`) REFERENCES `collaborateur` (`VIS_MATRICULE`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
