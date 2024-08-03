CREATE TABLE IF NOT EXISTS "migrations"(
  "id" integer primary key autoincrement not null,
  "migration" varchar not null,
  "batch" integer not null
);

INSERT INTO migrations VALUES(1,'0001_01_01_000000_create_users_table',1);
INSERT INTO migrations VALUES(2,'0001_01_01_000001_create_cache_table',1);
INSERT INTO migrations VALUES(3,'0001_01_01_000002_create_jobs_table',1);
INSERT INTO migrations VALUES(4,'2024_07_31_154104_create_visitor_table',2);
INSERT INTO migrations VALUES(5,'2024_07_31_154110_create_posts_table',2);
INSERT INTO migrations VALUES(6,'2024_07_31_154012_visitors_table',3);
INSERT INTO migrations VALUES(7,'2024_08_01_054329_create_settings_table',4);
INSERT INTO migrations VALUES(8,'2024_08_01_061440_change_posts_table',5);
