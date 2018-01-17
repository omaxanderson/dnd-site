<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('campaigns') -> insert([
          'id'=>'1',
          'dm_id'=>'1',
          'name'=>'Lost Mines of Phandelevar',
        ]);

        DB::table('campaigns') -> insert([
          'id'=>'2',
          'dm_id'=>'1',
          'name'=>'Goblins!',
        ]);

        DB::table('campaigns') -> insert([
          'id'=>'3',
          'dm_id'=>'2',
          'name'=>"Madeline's Super Cool Campaign",
        ]);

        DB::table('characters') -> insert([
          'id'=>'1',
          'name'=>'Paavu Wolfwalker',
          'race'=>'Goliath',
          'class'=>'Barbarian',
          'str'=>'17',
          'dex'=>'13',
          'con'=>'15',
          'int'=>'8',
          'wis'=>'9',
          'cha'=>'9',
          'hit_points'=>'53',
          'armor_class'=>'14',
          'speed'=>'35',
          'background'=>'Outcast',
          'alignment'=>'Lawful Good',
          'level'=>'5',
          'user_id'=>'1',
        ]);

        DB::table('characters') -> insert([
          'id'=>'2',
          'name'=>'Frederick',
          'race'=>'Elf',
          'class'=>'Rogue',
          'str'=>'12',
          'dex'=>'19',
          'con'=>'13',
          'int'=>'13',
          'wis'=>'13',
          'cha'=>'15',
          'hit_points'=>'24',
          'armor_class'=>'15',
          'speed'=>'35',
          'background'=>'Criminal',
          'alignment'=>'Chaotic Neutral',
          'level'=>'5',
          'user_id'=>'1',
        ]);

        DB::table('characters') -> insert([
          'id'=>'3',
          'name'=>'Lucille',
          'race'=>'Dwarf',
          'class'=>'Bard',
          'str'=>'10',
          'dex'=>'11',
          'con'=>'15',
          'int'=>'15',
          'wis'=>'15',
          'cha'=>'17',
          'hit_points'=>'44',
          'armor_class'=>'14',
          'speed'=>'30',
          'background'=>'Noble',
          'alignment'=>'Lawful Good',
          'level'=>'5',
          'user_id'=>'2',
        ]);

        DB::table('posts') -> insert([
          'id'=>'1',
          'campaign_id'=>'1',
          'user_id'=>'1',
          'content'=>'Beginning of Lost Mines',
          'title'=>'The Beginning',
        ]);

        DB::table('posts') -> insert([
          'id'=>'2',
          'campaign_id'=>'1',
          'user_id'=>'2',
          'content'=>'Super Fun',
          'title'=>'Thoughts',
        ]);

        DB::table('posts') -> insert([
          'id'=>'3',
          'campaign_id'=>'2',
          'user_id'=>'2',
          'content'=>'This is my really fun campaign',
          'title'=>'Start',
        ]);

        DB::table('campaign_character') -> insert([
          'id'=>'1',
          'campaign_id'=>'1',
          'character_id'=>'1'
        ]);

        DB::table('campaign_character') -> insert([
          'id'=>'2',
          'campaign_id'=>'2',
          'character_id'=>'2'
        ]);

        DB::table('campaign_character') -> insert([
          'id'=>'3',
          'campaign_id'=>'1',
          'character_id'=>'3'
        ]);

    }
}
