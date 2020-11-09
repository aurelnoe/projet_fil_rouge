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
        date_ajout_article  Date NOT NULL ,
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
        image_mission       Numeric NULL ,
        date_debut          Date NOT NULL ,
        duree               Int NOT NULL ,
        date_ajout          Date NOT NULL ,
        id_pays             Int NOT NULL ,
        id_etablissement    Int NOT NULL ,
        id_type_activite    Int NOT NULL
    ,CONSTRAINT MISSION_PAYS_FK FOREIGN KEY (id_pays) REFERENCES PAYS(id_pays)
    ,CONSTRAINT MISSION_ETABLISSEMENT_FK FOREIGN KEY (id_etablissement) REFERENCES ETABLISSEMENT(id_etablissement)
    ,CONSTRAINT MISSION_TYPE_ACTIVITE_FK FOREIGN KEY (id_type_activite) REFERENCES TYPE_ACTIVITE(id_type_activite)
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
        date_ajout_etablissement  Date NOT NULL ,
        id_utilisateur            Int NOT NULL ,
        id_type_activite          Int NOT NULL ,
        id_pays                   Int NOT NULL ,
        id_mission                Int NOT NULL
	,CONSTRAINT ETABLISSEMENT_PK PRIMARY KEY (id_etablissement)
	,CONSTRAINT ETABLISSEMENT_UTILISATEUR_FK FOREIGN KEY (id_utilisateur) REFERENCES UTILISATEUR(id_utilisateur)
    ,CONSTRAINT ETABLISSEMENT_TYPE_ACTIVITE_FK FOREIGN KEY (id_type_activite) REFERENCES TYPE_ACTIVITE(id_type_activite)
    ,CONSTRAINT ETABLISSEMENT_PAYS_FK FOREIGN KEY (id_pays) REFERENCES PAYS(id_pays)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: AVIS
#------------------------------------------------------------

CREATE TABLE AVIS(
        id_avis          Int  Auto_increment  NOT NULL ,
        auteur           Varchar (50) NOT NULL ,
        temoignage       Text NOT NULL ,
        date_commentaire Date NOT NULL ,
        id_mission       Int NOT NULL ,
        id_auteur        Int NOT NULL ,
        id_utilisateur  Int NOT NULL ,
        id_blog          Int NOT NULL ,
        id_etablissement Int NOT NULL
	,CONSTRAINT AVIS_PK PRIMARY KEY (id_avis)
    	,CONSTRAINT AVIS_MISSION_FK FOREIGN KEY (id_mission) REFERENCES MISSION(id_mission)
    	,CONSTRAINT AVIS_UTILISATEUR_FK FOREIGN KEY (id_utilisateur) REFERENCES UTILISATEUR(id_utilisateur)
	,CONSTRAINT AVIS_BLOG_FK FOREIGN KEY (id_blog) REFERENCES BLOG(id_article)
    ,CONSTRAINT AVIS_ETABLISSEMENT_FK FOREIGN KEY (id_etablissement) REFERENCES ETABLISSEMENT(id_etablissement)
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
        date_inscription_util Date NOT NULL ,
        role_util             Varchar (20) NOT NULL ,
        id_role               Int NOT NULL
	,CONSTRAINT UTILISATEUR_PK PRIMARY KEY (id_utilisateur)
	,CONSTRAINT UTILISATEUR_ROLE_FK FOREIGN KEY (id_role) REFERENCES ROLE(id_role)
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


/* Table "proffesionnel" à la place d'établissement et création de table particulier 