<?php

namespace Database\Seeders;

use App\Models\House;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $houses=[
            ['name'=>'Gryffindor',
             'founder'=>'Godric Gryffindor',
             'crest'=>'https://mcdn.wallpapersafari.com/medium/20/78/NkXWiu.png',
             'description'=>'Gryffindor is one of the four houses of Hogwarts School of Witchcraft and Wizardry, founded by Godric Gryffindor. It is known for emphasizing courage, bravery, and determination in its students. The house colors are scarlet and gold, and its emblem is a lion. Gryffindors are often described as chivalrous, loyal, and passionate, sometimes to the point of being reckless or self-righteous. Harry Potter, Albus Dumbledore, Ron Weasley, Hermione Granger, Neville Longbottom, and Minerva McGonagall are some of the most notable Gryffindors.'
            ],

            ['name'=>'Slytherin',
             'founder'=>'Salazar Slytherin',
             'crest'=>'https://c4.wallpaperflare.com/wallpaper/887/144/962/slytherin-sonserina-harry-potter-hogwarts-wallpaper-preview.jpg',
             'description'=>'Slytherin is one of the four houses of Hogwarts School of Witchcraft and Wizardry, founded by Salazar Slytherin. It is known for its ambition, cunning, and resourcefulness. The Slytherin house crest features a silver serpent on a background of emerald green. Students sorted into Slytherin are often characterized by their drive for success, self-preservation, and a strong sense of community. Some notable Slytherins include Lord Voldemort, Severus Snape, Horace Slughorn, and the Malfoy family.'
            ],

            ['name'=>'Ravenclaw',
             'founder'=>'Rowena Ravenclaw',
             'crest'=>'https://mcdn.wallpapersafari.com/medium/96/5/6gA7P8.png',
             'description'=>'Ravenclaw is one of the four houses of Hogwarts School of Witchcraft and Wizardry, founded by Rowena Ravenclaw. Ravenclaws are known for their intelligence, wisdom, and love of learning. The house colors are blue and bronze, and their emblem is an eagle. Ravenclaws are often described as witty, creative, and individualistic, with a strong emphasis on knowledge and a unique perspective. Notable Ravenclaws include Luna Lovegood, Cho Chang, Gilderoy Lockhart, and Filius Flitwick.'
            ],

            ['name'=>'Hufflepuff',
             'founder'=>'Helga Hufflepuff',
             'crest'=>'https://wallpapercave.com/wp/wp11435565.png',
             'description'=>'Hufflepuff is one of the four houses of Hogwarts School of Witchcraft and Wizardry, founded by Helga Hufflepuff. It is known for its values of hard work, dedication, patience, and loyalty. The house is symbolized by the badger and the colors black and yellow. Hufflepuffs are often described as kind, fair, and unafraid of toil. Famous Hufflepuffs include Alastor Mad-Eye Moody, Cedric Diggory, Nymphadora Tonks, and Pomona Sprout.'
            ],
        ];
        foreach($houses as $house){
            House::create($house);
        }

    }
}
