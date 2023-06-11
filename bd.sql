CREATE TABLE
    programadores (
        id_programador serial PRIMARY KEY,
        nombre VARCHAR(255) not null,
        apellido VARCHAR(255) not null,
        telefono VARCHAR(255) not null,
        direccion VARCHAR(255) null,
        correo_electronico VARCHAR(255) null,
        programador_situacion CHAR(1)
    );

CREATE TABLE aplicaciones (
        id_aplicacion serial PRIMARY KEY,
        nombre VARCHAR(255) not null
        precio int not null,
        situacion char (1)
    );

CREATE TABLE asignacion_aplicaciones (
    id_asignacion SERIAL8 PRIMARY KEY,
    id_aplicacion INT NOT NULL,
    id_programador INT NOT NULL,
    FOREIGN KEY (id_aplicacion) REFERENCES aplicaciones(id_aplicacion),
    FOREIGN KEY (id_programador) REFERENCES programadores (id_programador)
);


        CREATE TABLE tareas (
    tarea_id serial PRIMARY KEY,
    nombre_tarea VARCHAR(30) NOT NULL,
    id_aplicacion int not null,
    descripcion_tarea VARCHAR(255) NOT NULL,
    fecha_inicio DATE NOT NULL,
    fecha_finalizacion DATE NOT NULL,
    estado VARCHAR(20) NOT NULL,
    FOREIGN KEY (id_aplicacion) REFERENCES aplicaciones (id_aplicacion)
);