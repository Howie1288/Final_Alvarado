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





/*******************************************************************************/
------tabla aplicaciones
CREATE TABLE aplicaciones (
    aplicacion_id SERIAL PRIMARY KEY,
    aplicacion_nombre VARCHAR(70) NOT NULL,
    aplicacion_fecha_inicio DATETIME YEAR TO DAY,
    aplicacion_situacion char (1) DEFAULT '1'
);

---------tabla tareas
CREATE TABLE tareas (
    tarea_id SERIAL PRIMARY KEY,
    tarea_id_aplicacion INTEGER NOT NULL,
    tarea_descripcion VARCHAR(70) NOT NULL,
    tarea_estado VARCHAR(15) CHECK (tarea_estado IN ('FINALIZADA', 'NO INICIADA')) NOT NULL,
    tarea_fecha DATETIME YEAR TO DAY,
    tarea_situacion char (1) DEFAULT '1',
    FOREIGN KEY (tarea_id_aplicacion) REFERENCES aplicaciones(aplicacion_id)
);
------------tabla programadores
CREATE TABLE programadores (
    programador_id SERIAL PRIMARY KEY,
    programador_grado VARCHAR(30) NOT NULL,
    programador_nombre VARCHAR(70) NOT NULL,
    programador_apellido VARCHAR(70) NOT NULL,
    programador_situacion char (1) DEFAULT '1'

);

-----------tabla asignacion
CREATE TABLE asignacion_programadores (
    asignacion_id SERIAL PRIMARY KEY,
    asignacion_id_aplicacion INTEGER NOT NULL,
    asignacion_id_programador INTEGER NOT NULL,
    FOREIGN KEY (asignacion_id_aplicacion) REFERENCES aplicaciones(aplicacion_id),
    FOREIGN KEY (asignacion_id_programador) REFERENCES programadores(programador_id)
);