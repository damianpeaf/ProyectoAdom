drop database if exists adomicilio;
create database adomicilio;
use adomicilio;

create table tipoUsuario(
	
    idTipoUsuario int primary key auto_increment,
    nombre varchar(100),
    descripcion varchar(150)

);

insert into tipoUsuario values (null, "administrador", "puede crear usuarios"),	
					           (null, "empleado", "agregar producto"),
                               (null, "usuario", "comprar servicio");


create table usuario(

	idUsuario int primary key auto_increment,
    correo varchar(100),
    contraseña varchar(100),
    idTipoUsuario int, 
    foreign key (idTipoUsuario) REFERENCES tipoUsuario(idTipoUsuario)

);

insert into usuario values (null, "correo1@gmail.com", "123", 1),
						   (null, "correo2@gmail.com", "123", 2),
                           (null, "correo3@gmail.com", "123", 3);

create table producto(

	idProducto int primary key auto_increment,
    nombre varchar(100), 
    descripcion varchar(250),
    precio decimal(10,2),
    stock int,
    imagen varchar(100)

);

insert into producto values (null, "Producto 1", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin euismod erat elementum fermentum blandit. Etiam feugiat finibus mollis. Interdum et.", 150.00, 5, "./img/productos/producto-1.png"),
							(null, "Producto 2", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin euismod erat elementum fermentum blandit. Etiam feugiat finibus mollis. Interdum et.", 150.00, 5, "./img/productos/producto-1.png"),
                            (null, "Producto 3", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin euismod erat elementum fermentum blandit. Etiam feugiat finibus mollis. Interdum et.", 150.00, 5, "./img/productos/producto-1.png"),
                            (null, "Producto 4", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin euismod erat elementum fermentum blandit. Etiam feugiat finibus mollis. Interdum et.", 150.00, 5, "./img/productos/producto-1.png"),
                            (null, "Producto 5", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin euismod erat elementum fermentum blandit. Etiam feugiat finibus mollis. Interdum et.", 150.00, 5, "./img/productos/producto-1.png"),
                            (null, "Producto 6", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin euismod erat elementum fermentum blandit. Etiam feugiat finibus mollis. Interdum et.", 150.00, 5, "./img/productos/producto-1.png"),
                            (null, "Producto 7", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin euismod erat elementum fermentum blandit. Etiam feugiat finibus mollis. Interdum et.", 150.00, 5, "./img/productos/producto-1.png"),
                            (null, "Producto 8", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin euismod erat elementum fermentum blandit. Etiam feugiat finibus mollis. Interdum et.", 150.00, 5, "./img/productos/producto-1.png"),
                            (null, "Producto 9", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin euismod erat elementum fermentum blandit. Etiam feugiat finibus mollis. Interdum et.", 150.00, 5, "./img/productos/producto-1.png");

select * from producto;
