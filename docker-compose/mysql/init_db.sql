DROP TABLE IF EXISTS `types`;

create table types
(
    id   bigint unsigned auto_increment
        primary key,
    name varchar(255) not null
)
    ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO cki.types (id, name) VALUES (1, 'Датчик температуры');
INSERT INTO cki.types (id, name) VALUES (2, 'Датчик давления');
INSERT INTO cki.types (id, name) VALUES (3, 'Датчик скорости вращения');

DROP TABLE IF EXISTS `parameters`;

create table parameters
(
    id         bigint unsigned auto_increment
        primary key,
    created_at timestamp default current_timestamp() not null on update current_timestamp(),
    type_id    bigint unsigned                       not null,
    value      double(8, 2)                          not null
)
    ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

create index parameters_created_at_index
    on parameters (created_at);

INSERT INTO cki.parameters (id, created_at, type_id, value) VALUES (1, '2024-04-07 19:21:13', 1, 36.6);
INSERT INTO cki.parameters (id, created_at, type_id, value) VALUES (2, '2024-04-07 19:21:13', 1, 34.44);
INSERT INTO cki.parameters (id, created_at, type_id, value) VALUES (3, '2024-04-07 19:21:13', 2, 122.26);
INSERT INTO cki.parameters (id, created_at, type_id, value) VALUES (4, '2024-04-07 19:21:13', 2, 316.13);
INSERT INTO cki.parameters (id, created_at, type_id, value) VALUES (5, '2024-04-07 19:21:13', 3, 3906);
INSERT INTO cki.parameters (id, created_at, type_id, value) VALUES (6, '2024-04-07 19:21:13', 3, 3655.3);
INSERT INTO cki.parameters (id, created_at, type_id, value) VALUES (7, '2024-04-07 19:25:53', 2, 316.13);
INSERT INTO cki.parameters (id, created_at, type_id, value) VALUES (8, '2024-04-07 22:19:40', 1, 23.5);
INSERT INTO cki.parameters (id, created_at, type_id, value) VALUES (9, '2024-04-07 22:20:02', 1, 23.5);
INSERT INTO cki.parameters (id, created_at, type_id, value) VALUES (10, '2024-04-07 22:20:15', 2, 67.9);
INSERT INTO cki.parameters (id, created_at, type_id, value) VALUES (11, '2024-04-07 22:20:26', 3, 6.8);
INSERT INTO cki.parameters (id, created_at, type_id, value) VALUES (12, '2024-04-07 22:22:05', 1, 777);
INSERT INTO cki.parameters (id, created_at, type_id, value) VALUES (13, '2024-04-07 23:05:01', 1, 777);
INSERT INTO cki.parameters (id, created_at, type_id, value) VALUES (14, '2024-04-07 23:07:28', 1, 777);
INSERT INTO cki.parameters (id, created_at, type_id, value) VALUES (15, '2024-04-07 23:14:15', 1, 777);
