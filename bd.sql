CREATE TABLE
    programadores (
        id_programador serial PRIMARY KEY,
        nombre VARCHAR(255) not null,
        apellido VARCHAR(255) not null,
        telefono VARCHAR(255) not null,
        direccion VARCHAR(255) null,
        correo_electronico VARCHAR(255) null
    );

CREATE TABLE aplicaciones (
        id_aplicacion serial PRIMARY KEY,
        nombre VARCHAR(255) not null
    );

CREATE TABLE asignacion_aplicaciones (
    id_asignacion SERIAL8 PRIMARY KEY,
    id_aplicacion INT NOT NULL,
    id_programador INT NOT NULL,
    FOREIGN KEY (id_aplicacion) REFERENCES aplicaciones(id_aplicacion),
    FOREIGN KEY (id_programador) REFERENCES programadores (id_programador)
);

CREATE TABLE
    tareas (
        id_tarea serial PRIMARY KEY,
        id_aplicacion int not null,
        tarea VARCHAR(255),
        fecha_realizacion DATE,
        estado VARCHAR(255),
        FOREIGN KEY (id_aplicacion) REFERENCES aplicaciones (id_aplicacion)
        );