/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  16/07/2021 12:20:22                      */
/*==============================================================*/


drop table if exists CATEGORIE;

drop table if exists COMMANDE;

drop table if exists COMMANDE_PRODUIT;

drop table if exists PRODUIT;

drop table if exists UTILISATEUR;

/*==============================================================*/
/* Table : CATEGORIE                                            */
/*==============================================================*/
create table CATEGORIE
(
   ID_CATEGORIE         numeric(8,0) not null,
   NOM_CATEGORIE        varchar(50),
   primary key (ID_CATEGORIE)
);

/*==============================================================*/
/* Table : COMMANDE                                             */
/*==============================================================*/
create table COMMANDE
(
   ID_                  int not null,
   ID_UTILISATEUR       int not null,
   DATE_                numeric(50,0),
   primary key (ID_)
);

/*==============================================================*/
/* Table : COMMANDE_PRODUIT                                     */
/*==============================================================*/
create table COMMANDE_PRODUIT
(
   ID_                  int not null,
   ID_PRODUIT           numeric(8,0) not null,
   QTE_COMMANDE         numeric(50,0),
   primary key (ID_, ID_PRODUIT)
);

/*==============================================================*/
/* Table : PRODUIT                                              */
/*==============================================================*/
create table PRODUIT
(
   ID_PRODUIT           numeric(8,0) not null,
   ID_CATEGORIE         numeric(8,0) not null,
   NOM_PRODUIT          varchar(50),
   DESCRIPTION          text,
   QTE_EN_STOCK         numeric(8,0),
   primary key (ID_PRODUIT)
);

/*==============================================================*/
/* Table : UTILISATEUR                                          */
/*==============================================================*/
create table UTILISATEUR
(
   ID_UTILISATEUR       int not null,
   PRENOM               varchar(50),
   NOM                  varchar(50),
   ADRESSE              varchar(50),
   TELEPHONE            numeric(50,0),
   EMAIL                varchar(50),
   primary key (ID_UTILISATEUR)
);

alter table COMMANDE add constraint FK_PASSER foreign key (ID_UTILISATEUR)
      references UTILISATEUR (ID_UTILISATEUR) on delete restrict on update restrict;

alter table COMMANDE_PRODUIT add constraint FK_CONCERNER foreign key (ID_PRODUIT)
      references PRODUIT (ID_PRODUIT) on delete restrict on update restrict;

alter table COMMANDE_PRODUIT add constraint FK_CONCERNER2 foreign key (ID_)
      references COMMANDE (ID_) on delete restrict on update restrict;

alter table PRODUIT add constraint FK_AVOIR foreign key (ID_CATEGORIE)
      references CATEGORIE (ID_CATEGORIE) on delete restrict on update restrict;

