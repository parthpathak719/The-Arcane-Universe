<?php

namespace Database\Seeders;

use App\Models\Option;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $options=[
            ['question_id' => 1, 'option_text' => 'Dragon Heartstring', 'is_correct' => false],
            ['question_id' => 1, 'option_text' => 'Unicorn Hair', 'is_correct' => false],
            ['question_id' => 1, 'option_text' => 'Phoenix Feather', 'is_correct' => true],
            ['question_id' => 1, 'option_text' => 'Thestral Tail Hair', 'is_correct' => false],

            ['question_id' => 2, 'option_text' => 'Expecto Patronum', 'is_correct' => true],
            ['question_id' => 2, 'option_text' => 'Expelliarmus', 'is_correct' => false],
            ['question_id' => 2, 'option_text' => 'Protego', 'is_correct' => false],
            ['question_id' => 2, 'option_text' => 'Riddikulus', 'is_correct' => false],

            ['question_id' => 3, 'option_text' => 'Ottery St. Catchpole', 'is_correct' => false],
            ['question_id' => 3, 'option_text' => 'Tinworth', 'is_correct' => false],
            ['question_id' => 3, 'option_text' => 'Hogsmeade', 'is_correct' => true],
            ['question_id' => 3, 'option_text' => 'Godric Hollow', 'is_correct' => false],

            ['question_id' => 4, 'option_text' => 'Andromeda', 'is_correct' => false],
            ['question_id' => 4, 'option_text' => 'Ariana', 'is_correct' => true],
            ['question_id' => 4, 'option_text' => 'Astoria', 'is_correct' => false],
            ['question_id' => 4, 'option_text' => 'Amelia', 'is_correct' => false],

            ['question_id' => 5, 'option_text' => 'Basilisk', 'is_correct' => true],
            ['question_id' => 5, 'option_text' => 'Acromantula', 'is_correct' => false],
            ['question_id' => 5, 'option_text' => 'Hungarian Horntail', 'is_correct' => false],
            ['question_id' => 5, 'option_text' => 'Niffler', 'is_correct' => false],

            ['question_id' => 6, 'option_text' => 'Stuns the opponent', 'is_correct' => false],
            ['question_id' => 6, 'option_text' => 'Causes deep gashes', 'is_correct' => true],
            ['question_id' => 6, 'option_text' => 'Binds them with ropes', 'is_correct' => false],
            ['question_id' => 6, 'option_text' => 'Disarms them', 'is_correct' => false],

            ['question_id' => 7, 'option_text' => 'Sirius Black', 'is_correct' => false],
            ['question_id' => 7, 'option_text' => 'Remus Lupin', 'is_correct' => false],
            ['question_id' => 7, 'option_text' => 'Fred and George Weasley', 'is_correct' => true],
            ['question_id' => 7, 'option_text' => 'Alastor Moody', 'is_correct' => false],

            ['question_id' => 8, 'option_text' => 'Hidden doors', 'is_correct' => false],
            ['question_id' => 8, 'option_text' => 'Invisible ink ', 'is_correct' => true],
            ['question_id' => 8, 'option_text' => 'Magical creatures', 'is_correct' => false],
            ['question_id' => 8, 'option_text' => 'Enemy location', 'is_correct' => false],

            ['question_id' => 9, 'option_text' => 'Polyjuice Potion', 'is_correct' => false],
            ['question_id' => 9, 'option_text' => 'Veritaserum', 'is_correct' => false],
            ['question_id' => 9, 'option_text' => 'Amortentia', 'is_correct' => false],
            ['question_id' => 9, 'option_text' => 'Felix Felicis', 'is_correct' => true],

            ['question_id' => 10, 'option_text' => 'The Grey Lady', 'is_correct' => true],
            ['question_id' => 10, 'option_text' => 'The Bloody Baron', 'is_correct' => false],
            ['question_id' => 10, 'option_text' => 'The Fat Friar', 'is_correct' => false],
            ['question_id' => 10, 'option_text' => 'Moaning Myrtle', 'is_correct' => false],
       
            // 11. What does the spell Alohomora do?
            ['question_id' => 11, 'option_text' => 'Turns off lights', 'is_correct' => false],
            ['question_id' => 11, 'option_text' => 'Makes objects fly', 'is_correct' => false],
            ['question_id' => 11, 'option_text' => 'Opens locked doors', 'is_correct' => true],
            ['question_id' => 11, 'option_text' => 'Heals wounds', 'is_correct' => false],

            // 12. What’s the name of the magical sweet shop in Hogsmeade?
            ['question_id' => 12, 'option_text' => 'Sugarplum', 'is_correct' => false],
            ['question_id' => 12, 'option_text' => 'Honeydukes', 'is_correct' => true],
            ['question_id' => 12, 'option_text' => 'The Three Broomsticks', 'is_correct' => false],
            ['question_id' => 12, 'option_text' => 'Zonko', 'is_correct' => false],

            // 13. Who destroyed the final Horcrux?
            ['question_id' => 13, 'option_text' => 'Neville Longbottom', 'is_correct' => true],
            ['question_id' => 13, 'option_text' => 'Hermione Granger', 'is_correct' => false],
            ['question_id' => 13, 'option_text' => 'Harry Potter', 'is_correct' => false],
            ['question_id' => 13, 'option_text' => 'Ron Weasley', 'is_correct' => false],

            // 14. What shape is Harry’s Patronus?
            ['question_id' => 14, 'option_text' => 'Otter', 'is_correct' => false],
            ['question_id' => 14, 'option_text' => 'Stag', 'is_correct' => true],
            ['question_id' => 14, 'option_text' => 'Wolf', 'is_correct' => false],
            ['question_id' => 14, 'option_text' => 'Horse', 'is_correct' => false],

            // 15. Who teaches Flying lessons to first-years at Hogwarts?
            ['question_id' => 15, 'option_text' => 'Professor Sprout', 'is_correct' => false],
            ['question_id' => 15, 'option_text' => 'Madam Pomfrey', 'is_correct' => false],
            ['question_id' => 15, 'option_text' => 'Madam Hooch', 'is_correct' => true],
            ['question_id' => 15, 'option_text' => 'Professor McGonagall', 'is_correct' => false],

            // 16. What is the name of the tree that attacks anyone who comes near it?
            ['question_id' => 16, 'option_text' => 'Whomping Willow', 'is_correct' => true],
            ['question_id' => 16, 'option_text' => 'Slapping Oak', 'is_correct' => false],
            ['question_id' => 16, 'option_text' => 'Biting Birch', 'is_correct' => false],
            ['question_id' => 16, 'option_text' => 'Screaming Spruce', 'is_correct' => false],

            // 17. What position does Ron play on the Gryffindor Quidditch team?
            ['question_id' => 17, 'option_text' => 'Beater', 'is_correct' => false],
            ['question_id' => 17, 'option_text' => 'Seeker', 'is_correct' => false],
            ['question_id' => 17, 'option_text' => 'Chaser', 'is_correct' => false],
            ['question_id' => 17, 'option_text' => 'Keeper', 'is_correct' => true],

            // 18. What is the name of Hagrid’s three-headed dog?
            ['question_id' => 18, 'option_text' => 'Norbert', 'is_correct' => false],
            ['question_id' => 18, 'option_text' => 'Snuffles', 'is_correct' => false],
            ['question_id' => 18, 'option_text' => 'Fang', 'is_correct' => false],
            ['question_id' => 18, 'option_text' => 'Fluffy', 'is_correct' => true],

            // 19. What creature is bred by crossing a lion and an eagle?
            ['question_id' => 19, 'option_text' => 'Griffin', 'is_correct' => true],
            ['question_id' => 19, 'option_text' => 'Manticore', 'is_correct' => false],
            ['question_id' => 19, 'option_text' => 'Hippogriff', 'is_correct' => false],
            ['question_id' => 19, 'option_text' => 'Basilisk', 'is_correct' => false],

            // 20. Who impersonates Mad-Eye Moody in Goblet of Fire?
            ['question_id' => 20, 'option_text' => 'Peter Pettigrew', 'is_correct' => false],
            ['question_id' => 20, 'option_text' => 'Severus Snape', 'is_correct' => false],
            ['question_id' => 20, 'option_text' => 'Lucius Malfoy', 'is_correct' => false],
            ['question_id' => 20, 'option_text' => 'Barty Crouch Jr.', 'is_correct' => true],

            // 21. What item does Dumbledore will to Harry?
            ['question_id' => 21, 'option_text' => 'Deluminator', 'is_correct' => false],
            ['question_id' => 21, 'option_text' => 'Elder Wand', 'is_correct' => false],
            ['question_id' => 21, 'option_text' => 'The Snitch', 'is_correct' => true],
            ['question_id' => 21, 'option_text' => 'Invisibility Cloak', 'is_correct' => false],

            // 22. What color does a Sneakoscope glow when someone is untrustworthy?
            ['question_id' => 22, 'option_text' => 'Green', 'is_correct' => false],
            ['question_id' => 22, 'option_text' => 'Red', 'is_correct' => true],
            ['question_id' => 22, 'option_text' => 'Yellow', 'is_correct' => false],
            ['question_id' => 22, 'option_text' => 'Blue', 'is_correct' => false],

            // 23. What is the name of Fred and George's joke shop?
            ["question_id" => 23, "option_text" => "Fred & George's Funland", "is_correct" => false],
            ["question_id" => 23, "option_text" => "Weasleys' Wizard Wheezes", "is_correct" => true],
            ["question_id" => 23, "option_text" => "Diagon Delights", "is_correct" => false],
            ["question_id" => 23, "option_text" => "Zonko's Joke Shop", "is_correct" => false],

            // 24. Who did Ginny go to the Yule Ball with?
            ['question_id' => 24, 'option_text' => 'Neville Longbottom', 'is_correct' => true],
            ['question_id' => 24, 'option_text' => 'Dean Thomas', 'is_correct' => false],
            ['question_id' => 24, 'option_text' => 'Seamus Finnigan', 'is_correct' => false],
            ['question_id' => 24, 'option_text' => 'Harry Potter', 'is_correct' => false],

            // 25. What is the maximum score in a single O.W.L. exam?
            ['question_id' => 25, 'option_text' => 'Outstanding', 'is_correct' => true],
            ['question_id' => 25, 'option_text' => 'Excellent', 'is_correct' => false],
            ['question_id' => 25, 'option_text' => 'A+', 'is_correct' => false],
            ['question_id' => 25, 'option_text' => 'E', 'is_correct' => false],

            // 26. Which wizarding prison is guarded by Dementors?
            ['question_id' => 26, 'option_text' => 'Azkaban', 'is_correct' => true],
            ['question_id' => 26, 'option_text' => 'Gringotts', 'is_correct' => false],
            ['question_id' => 26, 'option_text' => 'Aurelius Keep', 'is_correct' => false],
            ['question_id' => 26, 'option_text' => 'Nurmengard', 'is_correct' => false],

            // 27. What type of wood is Harry’s wand made from?
            ['question_id' => 27, 'option_text' => 'Oak', 'is_correct' => false],
            ['question_id' => 27, 'option_text' => 'Holly', 'is_correct' => true],
            ['question_id' => 27, 'option_text' => 'Yew', 'is_correct' => false],
            ['question_id' => 27, 'option_text' => 'Maple', 'is_correct' => false],

            // 28. Who was the Half-Blood Prince?
            ['question_id' => 28, 'option_text' => 'Tom Riddle', 'is_correct' => false],
            ['question_id' => 28, 'option_text' => 'Severus Snape', 'is_correct' => true],
            ['question_id' => 28, 'option_text' => 'Harry Potter', 'is_correct' => false],
            ['question_id' => 28, 'option_text' => 'Sirius Black', 'is_correct' => false],

            // 29. What spell is used to disarm an opponent?
            ['question_id' => 29, 'option_text' => 'Stupefy', 'is_correct' => false],
            ['question_id' => 29, 'option_text' => 'Protego', 'is_correct' => false],
            ['question_id' => 29, 'option_text' => 'Lumos', 'is_correct' => false],
            ['question_id' => 29, 'option_text' => 'Expelliarmus', 'is_correct' => true],

            // 30. What are Dobby’s last words?
            ['question_id' => 30, 'option_text' => 'Such a beautiful place to be with friends.', 'is_correct' => true],
            ['question_id' => 30, 'option_text' => 'Dobby is free.', 'is_correct' => false],
            ['question_id' => 30, 'option_text' => 'Harry is safe.', 'is_correct' => false],
            ['question_id' => 30, 'option_text' => 'Protect Harry.', 'is_correct' => false],

            // 31. What is Luna Lovegood's father's name?
            ['question_id' => 31, 'option_text' => 'Xenophilius', 'is_correct' => true],
            ['question_id' => 31, 'option_text' => 'Phileas', 'is_correct' => false],
            ['question_id' => 31, 'option_text' => 'Amos', 'is_correct' => false],
            ['question_id' => 31, 'option_text' => 'Elphias', 'is_correct' => false],

            // 32. What magical creature pulls the Hogwarts carriages?
            ['question_id' => 32, 'option_text' => 'Thestrals', 'is_correct' => true],
            ['question_id' => 32, 'option_text' => 'Hippogriffs', 'is_correct' => false],
            ['question_id' => 32, 'option_text' => 'Centaurs', 'is_correct' => false],
            ['question_id' => 32, 'option_text' => 'Inferi', 'is_correct' => false],

            // 33. Who found the Room of Requirement first in the books?
            ['question_id' => 33, 'option_text' => 'Albus Dumbledore', 'is_correct' => true],
            ['question_id' => 33, 'option_text' => 'Harry Potter', 'is_correct' => false],
            ['question_id' => 33, 'option_text' => 'Neville Longbottom', 'is_correct' => false],
            ['question_id' => 33, 'option_text' => 'Sirius Black', 'is_correct' => false],

            // 34. What is Hermione’s middle name?
            ['question_id' => 34, 'option_text' => 'Jean', 'is_correct' => true],
            ['question_id' => 34, 'option_text' => 'June', 'is_correct' => false],
            ['question_id' => 34, 'option_text' => 'Joy', 'is_correct' => false],
            ['question_id' => 34, 'option_text' => 'Jade', 'is_correct' => false],

            // 35. What kind of dragon does Harry face in the first Triwizard task?
            ['question_id' => 35, 'option_text' => 'Hungarian Horntail', 'is_correct' => true],
            ['question_id' => 35, 'option_text' => 'Chinese Fireball', 'is_correct' => false],
            ['question_id' => 35, 'option_text' => 'Swedish Short-Snout', 'is_correct' => false],
            ['question_id' => 35, 'option_text' => 'Common Welsh Green', 'is_correct' => false],

            // 36. Who killed Dobby?
            ['question_id' => 36, 'option_text' => 'Bellatrix Lestrange', 'is_correct' => true],
            ['question_id' => 36, 'option_text' => 'Lucius Malfoy', 'is_correct' => false],
            ['question_id' => 36, 'option_text' => 'Fenrir Greyback', 'is_correct' => false],
            ['question_id' => 36, 'option_text' => 'Peter Pettigrew', 'is_correct' => false],

            // 37. What is the full name of Nearly Headless Nick?
            ['question_id' => 37, 'option_text' => 'Sir Nicholas de Mimsy-Porpington', 'is_correct' => true],
            ['question_id' => 37, 'option_text' => 'Sir Nicholas Flamel', 'is_correct' => false],
            ['question_id' => 37, 'option_text' => 'Sir Nicholas Dumbledore', 'is_correct' => false],
            ['question_id' => 37, 'option_text' => 'Sir Nicholas of Ravenclaw', 'is_correct' => false],

            // 38. What creature does Harry face in the second Triwizard task?
            ['question_id' => 38, 'option_text' => 'Merpeople', 'is_correct' => true],
            ['question_id' => 38, 'option_text' => 'Grindylows', 'is_correct' => false],
            ['question_id' => 38, 'option_text' => 'Boggarts', 'is_correct' => false],
            ['question_id' => 38, 'option_text' => 'Inferi', 'is_correct' => false],

            // 39. What position does Harry play in Quidditch?
            ['question_id' => 39, 'option_text' => 'Seeker', 'is_correct' => true],
            ['question_id' => 39, 'option_text' => 'Chaser', 'is_correct' => false],
            ['question_id' => 39, 'option_text' => 'Beater', 'is_correct' => false],
            ['question_id' => 39, 'option_text' => 'Keeper', 'is_correct' => false],

            // 40. What object must be caught to end a Quidditch match?
            ['question_id' => 40, 'option_text' => 'The Golden Snitch', 'is_correct' => true],
            ['question_id' => 40, 'option_text' => 'The Quaffle', 'is_correct' => false],
            ['question_id' => 40, 'option_text' => 'The Bludger', 'is_correct' => false],
            ['question_id' => 40, 'option_text' => 'The Broomstick', 'is_correct' => false],

        ];

        foreach($options as $option){
            Option::create($option);
        }
    }
}
