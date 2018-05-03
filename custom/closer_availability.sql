DELIMITER $$

DROP FUNCTION IF EXISTS CLOSER_SCORE $$

CREATE FUNCTION CLOSER_SCORE (appointment_id CHAR(36), closer_id CHAR(36))
RETURNS FLOAT
DETERMINISTIC
BEGIN
    DECLARE ret FLOAT;
    DECLARE d DATETIME;
    DECLARE product VARCHAR(100);
    DECLARE leads_count INT(11);
    DECLARE leads_closed INT(11);
    SET ret=0;
    /* get date and product */
    SELECT date_field_c, product_c FROM rrapt_calendar_cstm WHERE id_c=appointment_id INTO d, product;
    
    /* IS AVAILABLE */
    SELECT COUNT(rrapt_calendar.id) FROM users_rrapt_calendar_3_c INNER JOIN rrapt_calendar_cstm ON (rrapt_calendar_cstm.id_c=users_rrapt_calendar_3_c.users_rrapt_calendar_3rrapt_calendar_idb) INNER JOIN rrapt_calendar ON (rrapt_calendar.id=rrapt_calendar_cstm.id_c AND rrapt_calendar.deleted=0) WHERE rrapt_calendar.id!=appointment_id AND users_rrapt_calendar_3_c.deleted=0 AND users_rrapt_calendar_3_c.users_rrapt_calendar_3users_ida=closer_id AND rrapt_calendar_cstm.date_field_c=d AND rrapt_calendar_cstm.disposition_c IN ('Set', 'Confirmed') INTO @is_available;
    if @is_available>0 THEN
        RETURN -1;
    ELSE
        /* how many leads */
        SELECT COUNT(leads.id) FROM leads_rrapt_calendar_1_c INNER JOIN leads ON (leads.id=leads_rrapt_calendar_1_c.leads_rrapt_calendar_1leads_ida AND leads.deleted=0) INNER JOIN rrapt_calendar ON (rrapt_calendar.id=leads_rrapt_calendar_1_c.leads_rrapt_calendar_1rrapt_calendar_idb AND rrapt_calendar.deleted=0) INNER JOIN rrapt_calendar_cstm ON (rrapt_calendar_cstm.id_c=rrapt_calendar.id AND rrapt_calendar_cstm.disposition_c IN ('Set', 'Confirmed') AND rrapt_calendar_cstm.product_c=product) INNER JOIN users_rrapt_calendar_3_c ON (users_rrapt_calendar_3_c.deleted=0 AND users_rrapt_calendar_3_c.users_rrapt_calendar_3rrapt_calendar_idb=rrapt_calendar.id AND users_rrapt_calendar_3_c.users_rrapt_calendar_3users_ida=closer_id) WHERE MONTH(rrapt_calendar_cstm.date_field_c)=MONTH(UTC_DATE()) INTO leads_count;
        IF leads_count=0 THEN
            RETURN 0;
        END IF;
        IF product='Transfer' THEN
            SELECT COUNT(leads.id) FROM leads_rrapt_calendar_1_c INNER JOIN leads ON (leads.id=leads_rrapt_calendar_1_c.leads_rrapt_calendar_1leads_ida AND leads.deleted=0) INNER JOIN rrapt_calendar ON (rrapt_calendar.id=leads_rrapt_calendar_1_c.leads_rrapt_calendar_1rrapt_calendar_idb AND rrapt_calendar.deleted=0) INNER JOIN rrapt_calendar_cstm ON (rrapt_calendar_cstm.id_c=rrapt_calendar.id AND rrapt_calendar_cstm.disposition_c IN ('Set', 'Confirmed') AND rrapt_calendar_cstm.product_c=product) INNER JOIN users_rrapt_calendar_3_c ON (users_rrapt_calendar_3_c.deleted=0 AND users_rrapt_calendar_3_c.users_rrapt_calendar_3rrapt_calendar_idb=rrapt_calendar.id AND users_rrapt_calendar_3_c.users_rrapt_calendar_3users_ida=closer_id) WHERE MONTH(rrapt_calendar_cstm.date_field_c)=MONTH(UTC_DATE()) AND leads.status='Closer TRANSFER' INTO leads_closed;
        ELSEIF product='Mortgage' THEN
            SELECT COUNT(leads.id) FROM leads_rrapt_calendar_1_c INNER JOIN leads ON (leads.id=leads_rrapt_calendar_1_c.leads_rrapt_calendar_1leads_ida AND leads.deleted=0) INNER JOIN rrapt_calendar ON (rrapt_calendar.id=leads_rrapt_calendar_1_c.leads_rrapt_calendar_1rrapt_calendar_idb AND rrapt_calendar.deleted=0) INNER JOIN rrapt_calendar_cstm ON (rrapt_calendar_cstm.id_c=rrapt_calendar.id AND rrapt_calendar_cstm.disposition_c IN ('Set', 'Confirmed') AND rrapt_calendar_cstm.product_c=product) INNER JOIN users_rrapt_calendar_3_c ON (users_rrapt_calendar_3_c.deleted=0 AND users_rrapt_calendar_3_c.users_rrapt_calendar_3rrapt_calendar_idb=rrapt_calendar.id AND users_rrapt_calendar_3_c.users_rrapt_calendar_3users_ida=closer_id) WHERE MONTH(rrapt_calendar_cstm.date_field_c)=MONTH(UTC_DATE()) AND leads.status='Closer MORTGAGE' INTO leads_closed;
        ELSE
            SET leads_closed = 0;
        END IF;
        SET ret = leads_closed/leads_count;
    END IF;
    RETURN ret;
END $$