<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {

            $table->string('avatar')->nullable();
            $table->integer('id')->unique();
            $table->string('name');
            $table->string('mail');
            $table->string('owner');
            $table->string('country')->nullable();
            $table->string('district')->nullable();
            $table->string('citizenship')->nullable();
            $table->string('sex');
            $table->date('birthdate');
            $table->integer('age')->nullable();
            $table->string('religion');
            $table->string('maritalstatus');
            $table->float('height')->nullable();
            $table->string('physicalstatus')->nullable();
            $table->string('familyvalue')->nullable();
            $table->string('familystatus')->nullable();
            $table->string('ethnicity')->nullable();
            $table->string('educationlevel')->nullable();
            $table->string('fieldofeducation')->nullable();
            $table->string('employedin')->nullable();
            $table->string('annualincome')->nullable();
            $table->string('ancestralfamilyorigin')->nullable();
            $table->string('motheroccupation')->nullable();
            $table->string('fatheroccupation')->nullable();
            $table->string('noofbrother')->nullable();
            $table->string('noofmarriedbrother')->nullable();
            $table->string('noofsister')->nullable();
            $table->string('noofmarriedsister')->nullable();
            $table->integer('weight')->nullable();
            $table->string('bodytype')->nullable();
            $table->string('complexion')->nullable();
            $table->string('spokenlanguage')->nullable();
            $table->string('eatinghabit')->nullable();
            $table->string('drinkinghabit')->nullable();
            $table->string('smokinghabit')->nullable();
            $table->string('interest')->nullable();
            $table->string('hobbies')->nullable();
            $table->string('favourite')->nullable();



            $table->string('psex');
            $table->string('pagefrom');
            $table->string('pageto');
            $table->float('pheightfrom')->nullable();
            $table->float('pheightto')->nullable();
            $table->string('pphysicalstatus')->nullable();
            $table->string('pmaritalstatus');
            $table->string('pmothertongue')->nullable();
            $table->string('preligion');
            $table->string('peatinghabit')->nullable();
            $table->string('pdrinkinghabit')->nullable();
            $table->string('psmokinghabit')->nullable();
            $table->string('peducationlevel')->nullable();
            $table->string('pemployedin')->nullable();
            $table->string('pcitizenship')->nullable();
            $table->string('pcountry')->nullable();
            $table->string('pannualincome')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_profiles');
    }
}
