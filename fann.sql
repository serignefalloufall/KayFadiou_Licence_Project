-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 22 Août 2019 à 04:10
-- Version du serveur :  5.6.26
-- Version de PHP :  5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `fann`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `addr` varchar(50) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `caissier`
--

CREATE TABLE IF NOT EXISTS `caissier` (
  `matricule` int(11) NOT NULL,
  `id_ser` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `chambre`
--

CREATE TABLE IF NOT EXISTS `chambre` (
  `id_cham` int(11) NOT NULL,
  `batiment` varchar(3) NOT NULL,
  `etage` int(11) NOT NULL,
  `nb_lit` int(11) NOT NULL,
  `type_cham` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `chambre`
--

INSERT INTO `chambre` (`id_cham`, `batiment`, `etage`, `nb_lit`, `type_cham`) VALUES
(1, 'B1', 0, 2, 'ttttttttt'),
(2, 'MyB', 1, 2, 'TypeChembre');

-- --------------------------------------------------------

--
-- Structure de la table `consultation`
--

CREATE TABLE IF NOT EXISTS `consultation` (
  `id_cons` int(11) NOT NULL,
  `libelle_cons` varchar(30) DEFAULT NULL,
  `date_cons` varchar(20) NOT NULL,
  `id_med` int(11) NOT NULL,
  `id_pat` int(11) NOT NULL,
  `id_rv` int(11) NOT NULL,
  `id_dos` int(11) NOT NULL,
  `id_charge` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `detail_traitement`
--

CREATE TABLE IF NOT EXISTS `detail_traitement` (
  `medecin` int(11) NOT NULL,
  `traitement` int(11) NOT NULL,
  `date_traitement` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `dossier`
--

CREATE TABLE IF NOT EXISTS `dossier` (
  `id_dos` int(11) NOT NULL,
  `date_dos` varchar(20) NOT NULL,
  `remarque_dos` varchar(200) NOT NULL,
  `id_pat` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `dossier`
--

INSERT INTO `dossier` (`id_dos`, `date_dos`, `remarque_dos`, `id_pat`) VALUES
(1, '30/10/2018', 'Dooofff', 15);

-- --------------------------------------------------------

--
-- Structure de la table `examen`
--

CREATE TABLE IF NOT EXISTS `examen` (
  `id_examen` int(11) NOT NULL,
  `nom_examen` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

CREATE TABLE IF NOT EXISTS `facture` (
  `id_facture` int(11) NOT NULL,
  `libelle_facture` varchar(20) DEFAULT NULL,
  `date_facture` varchar(20) NOT NULL,
  `id_cons` int(11) NOT NULL,
  `id_fac` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `facturier`
--

CREATE TABLE IF NOT EXISTS `facturier` (
  `matricule` int(11) NOT NULL,
  `id_ser` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `fiche`
--

CREATE TABLE IF NOT EXISTS `fiche` (
  `id_fiche` int(11) NOT NULL,
  `date_fiche` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `fiche_examen`
--

CREATE TABLE IF NOT EXISTS `fiche_examen` (
  `id_f_exam` int(11) NOT NULL,
  `remarque` varchar(60) NOT NULL,
  `id_exam` int(11) NOT NULL,
  `id_fiche` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `hospitalisation`
--

CREATE TABLE IF NOT EXISTS `hospitalisation` (
  `id_hos` int(11) NOT NULL,
  `poids` float NOT NULL,
  `taille` float NOT NULL,
  `poul` int(11) NOT NULL,
  `frequence` int(11) NOT NULL,
  `temperature` int(11) NOT NULL,
  `observation` varchar(100) DEFAULT NULL,
  `motif` varchar(60) DEFAULT NULL,
  `caution` int(11) DEFAULT NULL,
  `id_lit` int(11) NOT NULL,
  `id_fiche` int(11) NOT NULL,
  `infirmier` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `infirmier`
--

CREATE TABLE IF NOT EXISTS `infirmier` (
  `matricule` int(11) NOT NULL,
  `service` int(11) NOT NULL,
  `user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `lit`
--

CREATE TABLE IF NOT EXISTS `lit` (
  `id_lit` int(11) NOT NULL,
  `prix_lit` int(11) NOT NULL,
  `id_cham` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `medecin`
--

CREATE TABLE IF NOT EXISTS `medecin` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `addr` varchar(50) NOT NULL,
  `idser` int(11) NOT NULL,
  `iduser` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `medecin`
--

INSERT INTO `medecin` (`id`, `nom`, `prenom`, `tel`, `addr`, `idser`, `iduser`) VALUES
(14, 'Nguiran', 'Dame', '777', 'Touba', 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `observation`
--

CREATE TABLE IF NOT EXISTS `observation` (
  `id_obs` int(11) NOT NULL,
  `poids` int(11) NOT NULL,
  `taille` float NOT NULL,
  `pouls` int(11) NOT NULL,
  `frequence` int(11) NOT NULL,
  `temperature` int(11) NOT NULL,
  `id_fiche` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ordonance`
--

CREATE TABLE IF NOT EXISTS `ordonance` (
  `id_ord` int(11) NOT NULL,
  `titre` varchar(30) NOT NULL,
  `date_ord` varchar(20) NOT NULL,
  `observation` varchar(100) NOT NULL,
  `traitement` varchar(300) NOT NULL,
  `id_cons` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `paiement`
--

CREATE TABLE IF NOT EXISTS `paiement` (
  `id_pai` int(11) NOT NULL,
  `montant_pai` int(11) NOT NULL,
  `type_pai` varchar(20) NOT NULL,
  `id_facture` int(11) NOT NULL,
  `id_cai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `id` int(11) NOT NULL,
  `nom_Pat` varchar(20) NOT NULL,
  `prenom_pat` varchar(30) NOT NULL,
  `addr_pat` varchar(50) NOT NULL,
  `tel_pat` varchar(15) NOT NULL,
  `sexe_pat` varchar(15) NOT NULL,
  `age_pat` varchar(3) NOT NULL,
  `profession` varchar(20) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `patient`
--

INSERT INTO `patient` (`id`, `nom_Pat`, `prenom_pat`, `addr_pat`, `tel_pat`, `sexe_pat`, `age_pat`, `profession`, `photo`) VALUES
(15, 'Sall', 'Mane', 'touba', '778594621', 'F', '14', 'etudiante', 'samane.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `prise_en_charge`
--

CREATE TABLE IF NOT EXISTS `prise_en_charge` (
  `id_charge` int(11) NOT NULL,
  `nom_entreprise` varchar(30) NOT NULL,
  `pourcentage` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `recu`
--

CREATE TABLE IF NOT EXISTS `recu` (
  `id_r` int(11) NOT NULL,
  `libelle_r` varchar(20) DEFAULT NULL,
  `montant_r` int(11) NOT NULL,
  `id_pai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `rendez_vous`
--

CREATE TABLE IF NOT EXISTS `rendez_vous` (
  `id` int(11) NOT NULL,
  `dater` varchar(15) NOT NULL,
  `heure` varchar(15) NOT NULL,
  `motif` varchar(100) DEFAULT NULL,
  `idpatient` int(11) NOT NULL,
  `idmedecin` int(11) NOT NULL,
  `idsecretaire` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `rendez_vous`
--

INSERT INTO `rendez_vous` (`id`, `dater`, `heure`, `motif`, `idpatient`, `idmedecin`, `idsecretaire`) VALUES
(17, '22/08/2019', '13:24', 'consultation', 15, 14, 1);

-- --------------------------------------------------------

--
-- Structure de la table `secretaire`
--

CREATE TABLE IF NOT EXISTS `secretaire` (
  `id` int(11) NOT NULL,
  `idservice` int(11) NOT NULL,
  `iduser` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `secretaire`
--

INSERT INTO `secretaire` (`id`, `idservice`, `iduser`) VALUES
(1, 1, 1),
(2, 2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

CREATE TABLE IF NOT EXISTS `service` (
  `id_ser` int(11) NOT NULL,
  `nom_ser` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `service`
--

INSERT INTO `service` (`id_ser`, `nom_ser`) VALUES
(1, 'Consultation'),
(2, 'Laboratoire'),
(3, 'Cardiologie');

-- --------------------------------------------------------

--
-- Structure de la table `ticket`
--

CREATE TABLE IF NOT EXISTS `ticket` (
  `id_ticket` int(11) NOT NULL,
  `lib_ticket` varchar(20) DEFAULT NULL,
  `date_ticket` varchar(20) NOT NULL,
  `id_pai` int(11) NOT NULL,
  `id_cai` int(11) NOT NULL,
  `id_pat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `traitement`
--

CREATE TABLE IF NOT EXISTS `traitement` (
  `id_traitement` int(11) NOT NULL,
  `libelle_T` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `type_user`
--

CREATE TABLE IF NOT EXISTS `type_user` (
  `id_type` int(11) NOT NULL,
  `nom_type` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `type_user`
--

INSERT INTO `type_user` (`id_type`, `nom_type`) VALUES
(1, 'admin'),
(2, 'superadmin');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `type_user` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nom`, `prenom`, `telephone`, `adresse`, `type_user`) VALUES
(1, 'admin', 'passer', 'fall', 'modou', '774578945', 'diamageune', 1),
(2, 'superadmin', 'passer', 'Pouye', 'Fatou', '772895641', 'Sébikhotan', 2);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `caissier`
--
ALTER TABLE `caissier`
  ADD PRIMARY KEY (`matricule`),
  ADD KEY `id_ser` (`id_ser`,`id_user`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `chambre`
--
ALTER TABLE `chambre`
  ADD PRIMARY KEY (`id_cham`);

--
-- Index pour la table `consultation`
--
ALTER TABLE `consultation`
  ADD PRIMARY KEY (`id_cons`),
  ADD KEY `id_med` (`id_med`,`id_pat`,`id_rv`,`id_dos`),
  ADD KEY `id_pat` (`id_pat`),
  ADD KEY `id_rv` (`id_rv`),
  ADD KEY `id_dos` (`id_dos`),
  ADD KEY `id_charge` (`id_charge`);

--
-- Index pour la table `detail_traitement`
--
ALTER TABLE `detail_traitement`
  ADD KEY `medecin` (`medecin`,`traitement`),
  ADD KEY `traitement` (`traitement`);

--
-- Index pour la table `dossier`
--
ALTER TABLE `dossier`
  ADD PRIMARY KEY (`id_dos`),
  ADD KEY `id_pat` (`id_pat`);

--
-- Index pour la table `examen`
--
ALTER TABLE `examen`
  ADD PRIMARY KEY (`id_examen`);

--
-- Index pour la table `facture`
--
ALTER TABLE `facture`
  ADD PRIMARY KEY (`id_facture`),
  ADD KEY `id_cons` (`id_cons`,`id_fac`),
  ADD KEY `id_fac` (`id_fac`);

--
-- Index pour la table `facturier`
--
ALTER TABLE `facturier`
  ADD PRIMARY KEY (`matricule`),
  ADD KEY `id_ser` (`id_ser`,`id_user`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `fiche`
--
ALTER TABLE `fiche`
  ADD PRIMARY KEY (`id_fiche`);

--
-- Index pour la table `fiche_examen`
--
ALTER TABLE `fiche_examen`
  ADD PRIMARY KEY (`id_f_exam`),
  ADD KEY `id_exam` (`id_exam`),
  ADD KEY `id_fiche` (`id_fiche`);

--
-- Index pour la table `hospitalisation`
--
ALTER TABLE `hospitalisation`
  ADD PRIMARY KEY (`id_hos`),
  ADD KEY `id_lit` (`id_lit`,`id_fiche`),
  ADD KEY `id_fiche` (`id_fiche`),
  ADD KEY `infirmier` (`infirmier`);

--
-- Index pour la table `infirmier`
--
ALTER TABLE `infirmier`
  ADD PRIMARY KEY (`matricule`),
  ADD KEY `service` (`service`,`user`),
  ADD KEY `user` (`user`);

--
-- Index pour la table `lit`
--
ALTER TABLE `lit`
  ADD PRIMARY KEY (`id_lit`),
  ADD KEY `id_cham` (`id_cham`);

--
-- Index pour la table `medecin`
--
ALTER TABLE `medecin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_ser` (`idser`,`iduser`),
  ADD KEY `id_user` (`iduser`);

--
-- Index pour la table `observation`
--
ALTER TABLE `observation`
  ADD PRIMARY KEY (`id_obs`),
  ADD KEY `id_fiche` (`id_fiche`);

--
-- Index pour la table `ordonance`
--
ALTER TABLE `ordonance`
  ADD PRIMARY KEY (`id_ord`),
  ADD KEY `id_cons` (`id_cons`);

--
-- Index pour la table `paiement`
--
ALTER TABLE `paiement`
  ADD PRIMARY KEY (`id_pai`),
  ADD KEY `id_facture` (`id_facture`,`id_cai`),
  ADD KEY `id_cai` (`id_cai`);

--
-- Index pour la table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `prise_en_charge`
--
ALTER TABLE `prise_en_charge`
  ADD PRIMARY KEY (`id_charge`);

--
-- Index pour la table `recu`
--
ALTER TABLE `recu`
  ADD PRIMARY KEY (`id_r`),
  ADD KEY `id_pai` (`id_pai`);

--
-- Index pour la table `rendez_vous`
--
ALTER TABLE `rendez_vous`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pat` (`idmedecin`,`idsecretaire`),
  ADD KEY `id_med` (`idmedecin`),
  ADD KEY `id_sec` (`idsecretaire`),
  ADD KEY `idmedecin` (`idmedecin`),
  ADD KEY `idsecretaire` (`idsecretaire`),
  ADD KEY `idpatient` (`idpatient`);

--
-- Index pour la table `secretaire`
--
ALTER TABLE `secretaire`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_ser` (`idservice`,`iduser`),
  ADD KEY `id_user` (`iduser`);

--
-- Index pour la table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id_ser`);

--
-- Index pour la table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id_ticket`),
  ADD KEY `id_pai` (`id_pai`,`id_cai`,`id_pat`),
  ADD KEY `id_pat` (`id_pat`),
  ADD KEY `id_cai` (`id_cai`);

--
-- Index pour la table `traitement`
--
ALTER TABLE `traitement`
  ADD PRIMARY KEY (`id_traitement`);

--
-- Index pour la table `type_user`
--
ALTER TABLE `type_user`
  ADD PRIMARY KEY (`id_type`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type_user` (`type_user`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `caissier`
--
ALTER TABLE `caissier`
  MODIFY `matricule` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `chambre`
--
ALTER TABLE `chambre`
  MODIFY `id_cham` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `consultation`
--
ALTER TABLE `consultation`
  MODIFY `id_cons` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `dossier`
--
ALTER TABLE `dossier`
  MODIFY `id_dos` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `examen`
--
ALTER TABLE `examen`
  MODIFY `id_examen` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `facture`
--
ALTER TABLE `facture`
  MODIFY `id_facture` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `facturier`
--
ALTER TABLE `facturier`
  MODIFY `matricule` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `fiche`
--
ALTER TABLE `fiche`
  MODIFY `id_fiche` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `fiche_examen`
--
ALTER TABLE `fiche_examen`
  MODIFY `id_f_exam` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `hospitalisation`
--
ALTER TABLE `hospitalisation`
  MODIFY `id_hos` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `infirmier`
--
ALTER TABLE `infirmier`
  MODIFY `matricule` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `lit`
--
ALTER TABLE `lit`
  MODIFY `id_lit` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `medecin`
--
ALTER TABLE `medecin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT pour la table `observation`
--
ALTER TABLE `observation`
  MODIFY `id_obs` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `ordonance`
--
ALTER TABLE `ordonance`
  MODIFY `id_ord` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `paiement`
--
ALTER TABLE `paiement`
  MODIFY `id_pai` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT pour la table `prise_en_charge`
--
ALTER TABLE `prise_en_charge`
  MODIFY `id_charge` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `recu`
--
ALTER TABLE `recu`
  MODIFY `id_r` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `rendez_vous`
--
ALTER TABLE `rendez_vous`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT pour la table `secretaire`
--
ALTER TABLE `secretaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `service`
--
ALTER TABLE `service`
  MODIFY `id_ser` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id_ticket` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `traitement`
--
ALTER TABLE `traitement`
  MODIFY `id_traitement` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `type_user`
--
ALTER TABLE `type_user`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `caissier`
--
ALTER TABLE `caissier`
  ADD CONSTRAINT `caissier_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `caissier_ibfk_2` FOREIGN KEY (`id_ser`) REFERENCES `service` (`id_ser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `consultation`
--
ALTER TABLE `consultation`
  ADD CONSTRAINT `consultation_ibfk_2` FOREIGN KEY (`id_pat`) REFERENCES `patient` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `consultation_ibfk_3` FOREIGN KEY (`id_rv`) REFERENCES `rendez_vous` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `consultation_ibfk_4` FOREIGN KEY (`id_dos`) REFERENCES `dossier` (`id_dos`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `consultation_ibfk_5` FOREIGN KEY (`id_med`) REFERENCES `medecin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `consultation_ibfk_6` FOREIGN KEY (`id_charge`) REFERENCES `prise_en_charge` (`id_charge`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `detail_traitement`
--
ALTER TABLE `detail_traitement`
  ADD CONSTRAINT `detail_traitement_ibfk_1` FOREIGN KEY (`medecin`) REFERENCES `medecin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_traitement_ibfk_2` FOREIGN KEY (`traitement`) REFERENCES `traitement` (`id_traitement`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `dossier`
--
ALTER TABLE `dossier`
  ADD CONSTRAINT `dossier_ibfk_1` FOREIGN KEY (`id_pat`) REFERENCES `patient` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `facture`
--
ALTER TABLE `facture`
  ADD CONSTRAINT `facture_ibfk_1` FOREIGN KEY (`id_cons`) REFERENCES `consultation` (`id_cons`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `facture_ibfk_2` FOREIGN KEY (`id_fac`) REFERENCES `facturier` (`matricule`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `facturier`
--
ALTER TABLE `facturier`
  ADD CONSTRAINT `facturier_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `facturier_ibfk_2` FOREIGN KEY (`id_ser`) REFERENCES `service` (`id_ser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `fiche_examen`
--
ALTER TABLE `fiche_examen`
  ADD CONSTRAINT `fiche_examen_ibfk_1` FOREIGN KEY (`id_exam`) REFERENCES `examen` (`id_examen`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fiche_examen_ibfk_2` FOREIGN KEY (`id_fiche`) REFERENCES `fiche` (`id_fiche`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `hospitalisation`
--
ALTER TABLE `hospitalisation`
  ADD CONSTRAINT `hospitalisation_ibfk_1` FOREIGN KEY (`id_fiche`) REFERENCES `fiche` (`id_fiche`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hospitalisation_ibfk_2` FOREIGN KEY (`id_lit`) REFERENCES `lit` (`id_lit`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hospitalisation_ibfk_3` FOREIGN KEY (`infirmier`) REFERENCES `infirmier` (`matricule`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `infirmier`
--
ALTER TABLE `infirmier`
  ADD CONSTRAINT `infirmier_ibfk_1` FOREIGN KEY (`service`) REFERENCES `service` (`id_ser`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `infirmier_ibfk_2` FOREIGN KEY (`user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `lit`
--
ALTER TABLE `lit`
  ADD CONSTRAINT `lit_ibfk_1` FOREIGN KEY (`id_cham`) REFERENCES `chambre` (`id_cham`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `medecin`
--
ALTER TABLE `medecin`
  ADD CONSTRAINT `medecin_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `medecin_ibfk_2` FOREIGN KEY (`idser`) REFERENCES `service` (`id_ser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `observation`
--
ALTER TABLE `observation`
  ADD CONSTRAINT `observation_ibfk_1` FOREIGN KEY (`id_fiche`) REFERENCES `fiche` (`id_fiche`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `ordonance`
--
ALTER TABLE `ordonance`
  ADD CONSTRAINT `ordonance_ibfk_1` FOREIGN KEY (`id_cons`) REFERENCES `consultation` (`id_cons`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `paiement`
--
ALTER TABLE `paiement`
  ADD CONSTRAINT `paiement_ibfk_1` FOREIGN KEY (`id_facture`) REFERENCES `facture` (`id_facture`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `paiement_ibfk_2` FOREIGN KEY (`id_cai`) REFERENCES `caissier` (`matricule`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `recu`
--
ALTER TABLE `recu`
  ADD CONSTRAINT `recu_ibfk_1` FOREIGN KEY (`id_pai`) REFERENCES `paiement` (`id_pai`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `rendez_vous`
--
ALTER TABLE `rendez_vous`
  ADD CONSTRAINT `rendez_vous_ibfk_4` FOREIGN KEY (`idmedecin`) REFERENCES `medecin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rendez_vous_ibfk_5` FOREIGN KEY (`idsecretaire`) REFERENCES `secretaire` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rendez_vous_ibfk_6` FOREIGN KEY (`idpatient`) REFERENCES `patient` (`id`);

--
-- Contraintes pour la table `secretaire`
--
ALTER TABLE `secretaire`
  ADD CONSTRAINT `secretaire_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `secretaire_ibfk_2` FOREIGN KEY (`idservice`) REFERENCES `service` (`id_ser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`id_pat`) REFERENCES `patient` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ticket_ibfk_3` FOREIGN KEY (`id_pai`) REFERENCES `paiement` (`id_pai`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ticket_ibfk_4` FOREIGN KEY (`id_cai`) REFERENCES `caissier` (`matricule`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`type_user`) REFERENCES `type_user` (`id_type`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
