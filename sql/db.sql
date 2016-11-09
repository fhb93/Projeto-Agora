CREATE TABLE Usuario (
	nomeReal 		    varchar(150)     NOT NULL,
    idade               integer          NOT NULL,
    email               varchar(200)     NOT NULL,
    nomeUsuario         varchar(10)      NOT NULL,
    senha               varchar(8)       NOT NULL,
    pontuacao           integer          NOT NULL, 
    id                  serial           NOT NULL,
	CONSTRAINT 	PK_usuario	PRIMARY KEY	 (id_user)	
);

CREATE TABLE Trilha (
	nome 	    	    varchar(100)    NOT NULL,
    id                  serial 			NOT NULL,
	CONSTRAINT 	PK_Trilha	PRIMARY KEY	 (id_trilha)	
);

CREATE TABLE Usuario_trilha (
	id_usuario           serial          NOT NULL,
    id_trilha            serial          NOT NULL,     
    CONSTRAINT 	FK_Usuario_trilha   FOREIGN KEY (id_trilha)
        REFERENCES  Trilha(id),
    CONSTRAINT  FK_Usuario_trilha2  FOREIGN KEY (id_usuario)
        REFERENCES  Usuario(id)   
);

