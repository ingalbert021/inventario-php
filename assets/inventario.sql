
create table inventario;

use inventario; 




CREATE TABLE usuarios(


id          int(255) auto_increment not null,

nombre      varchar(100) not null,
apellidos   varchar(100) not null,

email       varchar(255) not null,

password    varchar(255) not null,

fecha       date not null,

CONSTRAINT pk_usuarios PRIMARY KEY(id),

CONSTRAINT uq_email UNIQUE(email)

)ENGINE=InnoDb;


CREATE TABLE supervisor
(
id int(255) auto_increment not null,
nombre  varchar(100) not null,
apellidos  varchar(100) not null,
email  varchar(255) not null,
password  varchar(255) not null,
fecha  date not null,
CONTRAINT pk_supervisor PRIMARY KEY(id),
CONTRAINT uq_email UNIQUE(email)
)ENGINE=InnoDb;




CREATE TABLE categorias(

id      int(255) auto_increment not null,

nombre  varchar(100),


CONSTRAINT pk_categorias PRIMARY KEY(id)

)ENGINE=InnoDb;




CREATE TABLE articulos(
id          int(255) auto_increment not null,
titulo          varchar(255) not null,
categoria          varchar(100) not null,

descripcion     MEDIUMTEXT,

fecha           date not null,

cantidad          int(255) not null,
precio             int(255) not null,
PRIMARY KEY (`id`)
)
ENGINE=InnoDb;

