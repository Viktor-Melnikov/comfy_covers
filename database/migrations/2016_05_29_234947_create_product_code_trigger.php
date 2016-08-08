<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductCodeTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
            CREATE TRIGGER generate_code BEFORE INSERT ON product
            FOR EACH ROW
                BEGIN
                    DECLARE max_id INTEGER;
                    SET @max_id := (SELECT id FROM product ORDER BY id DESC LIMIT 1);

                    IF @max_id is null THEN
                        SET @max_id = 0;
                    END IF;

                    SET NEW.code := @max_id + 1 + 1000000;
                END
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER generate_code');
    }
}
