/*******************************************************************************/
CREATE TABLE aplicaciones (
    apli_id SERIAL PRIMARY KEY,
    apli_nombre VARCHAR(70) NOT NULL,
    apli_fecha_inicio DATETIME YEAR TO DAY,
    apli_situacion char (1) DEFAULT '1'
);

---------tabla tareas
CREATE TABLE tareas (
    tar_id SERIAL PRIMARY KEY,
    tar_apli_id INTEGER NOT NULL,
    tar_descripcion VARCHAR(70) NOT NULL,
    tar_estado VARCHAR(15) CHECK (tar_estado IN ('FINALIZADA', 'NO INICIADA')) NOT NULL,
    tar_fecha DATETIME YEAR TO DAY,
    tar_situacion char (1) DEFAULT '1',
    FOREIGN KEY (tar_apli_id) REFERENCES aplicaciones(apli_id)
);
------------tabla programadores
CREATE TABLE programadores (
    pro_id SERIAL PRIMARY KEY,
    pro_grado VARCHAR(30) NOT NULL,
    pro_nombre VARCHAR(70) NOT NULL,
    pro_apellido VARCHAR(70) NOT NULL,
    pro_situacion char (1) DEFAULT '1'

);

-----------tabla asignacion
CREATE TABLE asignacion_programadores (
    asi_id SERIAL PRIMARY KEY,
    asi_apli_id INTEGER NOT NULL,
    asi_pro_id INTEGER NOT NULL,
    FOREIGN KEY (asi_apli_id) REFERENCES aplicaciones(apli_id),
    FOREIGN KEY (asi_pro_id) REFERENCES programadores(pro_id)
);