CREATE DATABASE tienda_master;

USE tienda_master;

CREATE TABLE departamento(
    id           int(255) auto_increment not null,
    nombre       varchar(255) not null,
    CONSTRAINT pk_departamento PRIMARY KEY(id)
    
)ENGINE=InnoDb;

INSERT INTO departamento VALUES(null,'Risaralda');

CREATE TABLE ciudad(
    id           int(255) auto_increment not null,
    nombre       varchar(255) not null,
    departamento_id int(255) not null,
    CONSTRAINT pk_ciudad PRIMARY KEY(id),
    CONSTRAINT fk_departamento FOREIGN KEY(departamento_id) REFERENCES departamento(id)
)ENGINE=InnoDb;

INSERT INTO ciudad VALUES(null,'Pereira',1);

CREATE TABLE usuarios(
    id         int(255) auto_increment not null,
    nombre     varchar(255),
    apellidos  varchar(255),
    email      varchar(255) not null,
    contrasena varchar(255) not null,
    rol        varchar(20),
    imagen     varchar(255),
    direccion  varchar(255),
    ciudad_id int(255) not null,
    CONSTRAINT pk_usuarios PRIMARY KEY(id),
    CONSTRAINT uq_email UNIQUE(email),
    CONSTRAINT pk_ciudad FOREIGN KEY(ciudad_id) REFERENCES ciudad(id)
)ENGINE=InnoDb;



INSERT INTO usuarios VALUES(null,'admin','admin','admin@admin.com','contrasena','admin',null,'mz28 cs2 comunidad el departamento cuba',1);



CREATE TABLE categorias(
    id         int(255) auto_increment not null,
    nombre     varchar(100) not null,
    
    CONSTRAINT pk_categorias PRIMARY KEY(id)
    
)ENGINE=InnoDb;

INSERT INTO categorias VALUES(null, 'Hamburguesa');
INSERT INTO categorias VALUES(null, 'Salchipapa');
INSERT INTO categorias VALUES(null, 'Chuzo');
INSERT INTO categorias VALUES(null, 'Bebida');


CREATE TABLE productos(
    id         int(255) auto_increment not null,
    categoria_id int(255) not null,
    nombre     varchar(255) not null,
    descripcion  varchar(255) not null,
    precio      float(6) not null,
    imagen     varchar(255) ,
    CONSTRAINT pk_productos PRIMARY KEY(id),
    CONSTRAINT fk_producto_categoria FOREIGN KEY(categoria_id) REFERENCES categorias(id)
)ENGINE=InnoDb;

CREATE TABLE pedidos(
    id         int(255) auto_increment not null,
    usuario_id int(255) not null,
    direccion  varchar(255) not null,
    precio     float(7) not null,
    fecha      date not null,
    hora       time not null,
    CONSTRAINT pk_pedidos PRIMARY KEY(id),
    CONSTRAINT fk_pedidos_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios(id)
)ENGINE=InnoDb;


CREATE TABLE lineas_pedidos(
    id           int(255) auto_increment not null,
    pedido_id    int(255) not null,
    producto_id  int(255) not null,
    unidades     int(255) not null,
    CONSTRAINT pk_lineas_pedidos PRIMARY KEY(id),
    CONSTRAINT fk_linea_pedido FOREIGN KEY(pedido_id) REFERENCES pedidos(id),
    CONSTRAINT fk_linea_producto FOREIGN KEY(producto_id) REFERENCES productos(id)
)ENGINE=InnoDb;






