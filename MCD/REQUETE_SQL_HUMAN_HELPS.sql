#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: ROLE
#------------------------------------------------------------

CREATE TABLE ROLE(
        id_role Int  Auto_increment  NOT NULL ,
        nomRole Varchar (20) NOT NULL
	,CONSTRAINT ROLE_PK PRIMARY KEY (id_role)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: BLOG
#------------------------------------------------------------

CREATE TABLE BLOG(
        id_article          Int  Auto_increment  NOT NULL ,
        titre_article       Varchar (100) NOT NULL ,
        description_article Text NOT NULL ,
        date_article        Date NOT NULL ,
        date_ajout_article  Time NOT NULL ,
        image_article       Numeric NOT NULL
	,CONSTRAINT BLOG_PK PRIMARY KEY (id_article)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: MISSION
#------------------------------------------------------------

CREATE TABLE MISSION(
        id_mission          Int  Auto_increment  NOT NULL ,
        titre_mission       Varchar (100) NOT NULL ,
        description_mission Text NOT NULL ,
        image_mission       Numeric NOT NULL ,
        pays_mission        Varchar (100) NOT NULL ,
        date_debut          Date NOT NULL ,
        duree               Int NOT NULL ,
        date_ajout          Datetime NOT NULL ,
        id_pays             Int NOT NULL ,
        id_professionnel    Int NOT NULL ,
        id_type_activite    Int NOT NULL
	,CONSTRAINT MISSION_Idx INDEX (id_pays,id_professionnel,id_type_activite)
	,CONSTRAINT MISSION_PK PRIMARY KEY (id_mission)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: ETABLISSEMENT
#------------------------------------------------------------

CREATE TABLE ETABLISSEMENT(
        id_etablissement          Int  Auto_increment  NOT NULL ,
        denomination              Varchar (100) NOT NULL ,
        adresse_etablissement     Varchar (100) NOT NULL ,
        ville_etablissement       Varchar (100) NOT NULL ,
        code_postal_etablissement Int NOT NULL ,
        pays_etablissement        Varchar (50) NOT NULL ,
        mail_etablissement        Varchar (255) NOT NULL ,
        tel_etablissement         Int NOT NULL ,
        date_ajout_etablissement  Time NOT NULL ,
        id_utilisateur            Int NOT NULL ,
        id_type_activite          Int NOT NULL ,
        id_pays                   Int NOT NULL ,
        id_mission                Int NOT NULL
	,CONSTRAINT ETABLISSEMENT_Idx INDEX (id_utilisateur,id_type_activite,id_pays)
	,CONSTRAINT ETABLISSEMENT_PK PRIMARY KEY (id_etablissement)

	,CONSTRAINT ETABLISSEMENT_MISSION_FK FOREIGN KEY (id_mission) REFERENCES MISSION(id_mission)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: AVIS
#------------------------------------------------------------

CREATE TABLE AVIS(
        id_avis          Int  Auto_increment  NOT NULL ,
        auteur           Varchar (50) NOT NULL ,
        temoignage       Text NOT NULL ,
        date_commentaire Time NOT NULL ,
        id_utilisateur   Int NOT NULL ,
        id_mission       Int NOT NULL ,
        id_auteur        Int NOT NULL ,
        id_avis_reponse  Int NOT NULL ,
        id_blog          Int NOT NULL ,
        id_etablissement Int NOT NULL ,
        id_article       Int NOT NULL
	,CONSTRAINT AVIS_Idx INDEX (id_utilisateur,id_mission,id_auteur,id_avis_reponse,id_blog)
	,CONSTRAINT AVIS_PK PRIMARY KEY (id_avis)

	,CONSTRAINT AVIS_ETABLISSEMENT_FK FOREIGN KEY (id_etablissement) REFERENCES ETABLISSEMENT(id_etablissement)
	,CONSTRAINT AVIS_BLOG0_FK FOREIGN KEY (id_article) REFERENCES BLOG(id_article)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: UTILISATEUR
#------------------------------------------------------------

CREATE TABLE UTILISATEUR(
        id_utilisateur        Int  Auto_increment  NOT NULL ,
        nom_util              Varchar (50) NOT NULL ,
        prenom_util           Varchar (50) NOT NULL ,
        adresse_util          Varchar (50) NOT NULL ,
        code_postal_util      Int NOT NULL ,
        ville_util            Varchar (10) NOT NULL ,
        mail_util             Varchar (50) NOT NULL ,
        tel_util              Int ,
        pays_util             Varchar (30) NOT NULL ,
        password_util         Varchar (255) NOT NULL ,
        date_inscription_util Datetime NOT NULL ,
        role_util             Varchar (20) NOT NULL ,
        id_role               Int NOT NULL ,
        id_role_Attribuer     Int NOT NULL ,
        id_avis               Int
	,CONSTRAINT UTILISATEUR_Idx INDEX (id_role)
	,CONSTRAINT UTILISATEUR_PK PRIMARY KEY (id_utilisateur)

	,CONSTRAINT UTILISATEUR_ROLE_FK FOREIGN KEY (id_role_Attribuer) REFERENCES ROLE(id_role)
	,CONSTRAINT UTILISATEUR_AVIS0_FK FOREIGN KEY (id_avis) REFERENCES AVIS(id_avis)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: PAYS
#------------------------------------------------------------

CREATE TABLE PAYS(
        id_pays          Int  Auto_increment  NOT NULL ,
        nom_pays         Varchar (100) NOT NULL ,
        continent        Varchar (100) NOT NULL ,
        id_etablissement Int NOT NULL ,
        id_mission       Int NOT NULL
	,CONSTRAINT PAYS_PK PRIMARY KEY (id_pays)

	,CONSTRAINT PAYS_ETABLISSEMENT_FK FOREIGN KEY (id_etablissement) REFERENCES ETABLISSEMENT(id_etablissement)
	,CONSTRAINT PAYS_MISSION0_FK FOREIGN KEY (id_mission) REFERENCES MISSION(id_mission)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: TYPE_ACTIVITE
#------------------------------------------------------------

CREATE TABLE TYPE_ACTIVITE(
        id_type_activite Int  Auto_increment  NOT NULL ,
        type_activite    Varchar (100) NOT NULL ,
        id_mission       Int NOT NULL
	,CONSTRAINT TYPE_ACTIVITE_PK PRIMARY KEY (id_type_activite)

	,CONSTRAINT TYPE_ACTIVITE_MISSION_FK FOREIGN KEY (id_mission) REFERENCES MISSION(id_mission)
)ENGINE=InnoDB;

