CREATE TABLE Inventario
(
InventarioID int  primary key auto_increment, 
ProductoNom varchar(255),
Stock int,
Precio double(4,2),
Imagen varchar(255)
);


CREATE TABLE Ventas(
VentaID int primary key auto_increment ,
IDUsuario int ,
FechaVenta DATE,
Total double(5,2)
);


CREATE TABLE Pedidos(
VentaID int  ,
InventarioID int ,
Cantidad int ,
Total double(5,2),
primary key(VentaID,InventarioID)
);

CREATE TABLE Carrito(
CarroID int primary key auto_increment,
UsuarioID int  ,
InventarioID int ,
Cantidad int ,
Total double(5,2)
);

create table Usuario(
UsuarioID int  auto_increment,
Correo varchar (255),
Contra varchar (255),
Nombre varchar(255),
ApellidoP varchar(255),
primary key(UsuarioID,Correo)
);

create table Direcciones(
UsuarioID int not null,
Calle varchar(255),
Numero varchar(255),
Colonia varchar(255),
CP int (6),
Ciudad varchar(255),
Estado varchar(255),
Pais varchar(255)

);


ALTER TABLE Direcciones
ADD FOREIGN KEY (UsuarioID) REFERENCES Usuario(UsuarioID) ON DELETE CASCADE;

ALTER TABLE Carrito
ADD FOREIGN KEY (UsuarioID) REFERENCES Usuario(UsuarioID);

ALTER TABLE Carrito
ADD FOREIGN KEY (InventarioID) REFERENCES Inventario (InventarioID);

ALTER TABLE Pedidos
ADD FOREIGN KEY (VentaID) REFERENCES Ventas(VentaID);

ALTER TABLE Pedidos
ADD FOREIGN KEY (InventarioID) REFERENCES Inventario(InventarioID);

ALTER TABLE Ventas
ADD FOREIGN KEY (IDUsuario) REFERENCES Usuario (UsuarioID);





INSERT INTO `Usuario` (`UsuarioID`, `Correo`, `Contra`, `Nombre`, `ApellidoP`) VALUES (NULL, 'Danielcornejo1994@gmail.com', 'Cafeteria2', 'Daniel', 'Cornejo');

INSERT INTO `Direcciones` (`UsuarioID`, `Calle`,'Numero', `Colonia`, `CP`, `Ciudad`, `Estado`, `Pais`) VALUES ('2', 'Agua Zarca','473', 'Manantiales', '58186', 'Morelia', 'Michoacan', 'Mexico');
