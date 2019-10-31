<?php
use Migrations\AbstractMigration;

class CreateBookmarkSeedMigration extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function up()
    {
        $faker = \Faker\Factory::create();
        $populator = new Faker\ORM\CakePHP\Populator($faker);

        $populator->addEntity('bookmark',200,[
            'title'=>function() use($faker){
                return $faker->sentence($NbWords = 3,$VariableNbWords = true);
            },
            'description'=>function() use($faker){
                return $faker->paragraph($NbSentences = 3,$VariableNbSentences = true);
            },
            'url'=>function() use($faker){
                return $faker->url;
            },
            'created'=>function() use($faker){
                return $faker->dateTimeBetween($startDate='now',$endDate='now');
            },
            'modified'=>function() use($faker){
                return $faker->dateTimeBetween($startDate='now',$endDate='now');
            },
            'user_id'=>function(){
                return rand(1,100);
            }

        ]);

        $populator->execute();
    }
}
