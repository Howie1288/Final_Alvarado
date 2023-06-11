
CREATE TABLE
    programadores (
        id_programador serial PRIMARY KEY,
        nombre VARCHAR(255) not null,
        apellido VARCHAR(255),
        telefono VARCHAR(255),
        direccion VARCHAR(255),
        correo_electronico VARCHAR(255)
    );

CREATE TABLE aplicaciones (
        id_aplicacion serial PRIMARY KEY,
        nombre VARCHAR(255),
    );

CREATE TABLE
    Asignacion (
        id_asignacion serial PRIMARY KEY,
        id_aplicacion serial ,
        id_programador serial,
        FOREIGN KEY (id_aplicacion) REFERENCES aplicaciones(id_aplicacion) ON UPDATE CASCADE ON DELETE CASCADE,
        FOREIGN KEY (id_programador) REFERENCES programadores (id_programador) ON UPDATE CASCADE ON DELETE CASCADE
    );

CREATE TABLE
    Tareas (
        id_tarea serial PRIMARY KEY,
        id_aplicacion serial ,
        tarea VARCHAR(255),
        fecha_realizacion DATE,
        estado VARCHAR(255)
        FOREIGN KEY (id_aplicacion) REFERENCES aplicaciones (id_aplicacion) ON UPDATE CASCADE ON DELETE CASCADE
    );