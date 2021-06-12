-- This script only contains the table creation statements and does not fully represent the table in database. It's still missing: indices, triggers. Do not use it as backup.

-- Squences
CREATE SEQUENCE IF NOT EXISTS users_id_seq

-- Table Definition
CREATE TABLE "public"."comments" (
    "id" int4 NOT NULL DEFAULT nextval('users_id_seq'::regclass),
    "author" text NOT NULL,
    "content" text NOT NULL,
    "date" date NOT NULL DEFAULT '2021-06-12'::date,
    "post_id" int4 NOT NULL
);

INSERT INTO "public"."comments" ("id", "author", "content", "date", "post_id") VALUES
(26, 'Regarde', 'Il est sur tout les articles', '2021-06-12', 1);
INSERT INTO "public"."comments" ("id", "author", "content", "date", "post_id") VALUES
(27, 'Issa', 'Bon week-end ensoleillé à tous !', '2021-06-12', 6);
INSERT INTO "public"."comments" ("id", "author", "content", "date", "post_id") VALUES
(28, 'xxNoobxx', 'awé ajouté mwa sur epic game : xxNoobxx#0000', '2021-06-12', 1);