BEGIN;
INSERT INTO friendship (user1_id, user2_id) VALUES (2, 7);
INSERT INTO friendship (user1_id, user2_id) VALUES (7, 2);
COMMIT;