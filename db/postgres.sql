DROP SCHEMA IF EXISTS public CASCADE;

CREATE SCHEMA public AUTHORIZATION postgres;

DROP TABLE IF EXISTS public.animals;
-- This script only contains the table creation statements and does not fully represent the table in the database. It's still missing: indices, triggers. Do not use it as a backup.

-- Sequence and defined type
CREATE SEQUENCE IF NOT EXISTS comments_id_seq;
-- Table Definition
CREATE TABLE "public"."comments" (
    "id" int4 NOT NULL DEFAULT nextval('comments_id_seq'::regclass),
    "author" text,
    "content" text,
    "date" timestamp DEFAULT now(),
    "post_id" int4,
    PRIMARY KEY ("id")
);

-- Sequence and defined type
CREATE SEQUENCE IF NOT EXISTS posts_id_seq;
-- Table Definition
CREATE TABLE public.posts (
    "id" int4 NOT NULL DEFAULT nextval('posts_id_seq'::regclass),
    "title" text,
    "content" text,
    "date" timestamp DEFAULT now(),
    PRIMARY KEY ("id")
);

INSERT INTO "public"."comments" ("id", "author", "content", "date", "post_id") VALUES
(26, 'Regarde', 'Il est sur tout les articles', '2021-06-12', 1);
INSERT INTO "public"."comments" ("id", "author", "content", "date", "post_id") VALUES
(27, 'Issa', 'Bon week-end ensoleillé à tous !', '2021-06-12', 6);
INSERT INTO "public"."comments" ("id", "author", "content", "date", "post_id") VALUES
(28, 'xxNoobxx', 'awé ajouté mwa sur epic game : xxNoobxx#0000', '2021-06-12', 1);

INSERT INTO "public"."posts" ("id", "title", "content", "date") VALUES
(1, 'E3 2021 : Le programme complet du salon dévoilé !', 'Nous y sommes ! L''E3 2021 débutera officiellement ce samedi 12 juin, avant de nous tenir en haleine jusqu''au 16 juin avec le décalage horaire. De nombreuses conférences et présentations ont déjà été datées, mais on attendait encore le programme complet de la part de l''ESA, organisateur du salon.', '2021-06-11');
INSERT INTO "public"."posts" ("id", "title", "content", "date") VALUES
(6, 'Bonsoir, nous sommes le 11-06-2021', 'Et c''est le weekend', '2021-06-11');
INSERT INTO "public"."posts" ("id", "title", "content", "date") VALUES
(3, 'Issa D. nouveau CTO chez Google', 'Issa D. le fameux développeur qui a changé la face d''apple vient de se faire débaucher par Google pour une somme astronomique. Une première dans le monde du numérique!', '2021-06-11');
