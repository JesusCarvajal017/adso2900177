	CREATE DATABASE adso2900177;
	
	create table rol(
		rol_id INT PRIMARY KEY,
		nombre VARCHAR(50) NOT NULL
	);
	create table proyectos(
		proyecto_id INT  PRIMARY KEY NOT NULL,
		nombre VARCHAR(100) NOT NULL
	);
	create table usuario(
		persona_id INT PRIMARY KEY,
		rol_id INT NOT NULL ,
		proyecto_id INT NULL , 
		nombre_persona VARCHAR(100) NOT NULL,
		email_persona VARCHAR(100) NOT NULL,
		password VARCHAR(100) NOT NULL,
		FOREIGN KEY (rol_id) REFERENCES rol(rol_id),
		FOREIGN KEY (proyecto_id) REFERENCES proyectos(proyecto_id)
	);


	INSERT INTO rol
		VALUES  (1, 'INSTRUCTOR'),
				(2, 'APRENDIZ');

	INSERT INTO proyectos
			VALUES  (1, 'ARCADE MEMORY'),
					(2, 'AQUA MEMERY'),
					(3, 'FOOD MEMORIZE'),
					(4, 'MEMORY STAR'),
					(5, 'NEURODASH'),
					(6, 'PAT GAME');

-- consulta para traer todos los usuario registrados

	-- select rol.nombre, proyectos.nombre, usuario.nombre_persona, usuario.email_persona
	-- FROM usuario
	-- JOIN rol
	-- ON rol.rol_id = usuario.rol_id
	-- LEFT JOIN proyectos
	-- ON usuario.proyecto_id = proyectos.proyecto_id

-- consulta para traer toodos los usuario con un  proyecto
	-- select rol.nombre, proyectos.nombre, usuario.nombre_persona, usuario.email_persona
	-- FROM usuario
	-- JOIN rol
	-- ON rol.rol_id = usuario.rol_id
	-- JOIN proyectos
	-- ON usuario.proyecto_id = proyectos.proyecto_id