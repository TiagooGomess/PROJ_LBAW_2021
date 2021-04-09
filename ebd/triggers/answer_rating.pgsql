DROP FUNCTION IF EXISTS answer_rating() CASCADE;
CREATE FUNCTION answer_rating() RETURNS TRIGGER AS
$BODY$
DECLARE
    comment_rating integer := (SELECT rating FROM tb_comment WHERE id = NEW.id_comment);
BEGIN
    IF comment_rating IS NOT NULL THEN
        RAISE EXCEPTION 'A comment cannot have a rating.';
    END IF;
    RETURN NEW;
END
$BODY$
LANGUAGE plpgsql;

DROP TRIGGER IF EXISTS answer_rating ON tb_answer;
CREATE TRIGGER answer_rating
    BEFORE INSERT OR UPDATE ON tb_answer
    FOR EACH ROW
    EXECUTE PROCEDURE answer_rating();
