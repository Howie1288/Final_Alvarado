
CREATE TABLE
    programadores (
        id_programador serial PRIMARY KEY,
        nombre VARCHAR(255) not null,
        apellido VARCHAR(255),
        telefono VARCHAR(255),
        direccion VARCHAR(255),
        correo_electronico VARCHAR(255)
    );

CREATE TABLE aplserial s (
        id_aplicacion serial PRIMARY KEY,
        nombre VARCHAR(255),
    );

CREATE TABLE
    AsignacionAplicaciones (
        id_asignacion serial PRIMARY KEY,
        id_aplicacion INTEGER REFERENCES Aplicaciones(id_aplicacion),
        id_programador INTEGER REFERENCES Programadores(id_programador)
    );

CREATE TABLE
    Tareas (
        id_tarea serial PRIMARY KEY,
        id_aplicacion INTEGER REFERENCES Aplicaciones(id_aplicacion),
        tarea VARCHAR(255),
        fecha_realizacion DATE,
        estado VARCHAR(255)
    );