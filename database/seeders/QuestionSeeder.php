<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questions=[
            ["question_text" => "What is the core of Harry Potter's wand?"],

            ["question_text" => "What is the incantation for the spell that repels Dementors?"],

            ["question_text" => "What is the name of the village near Hogwarts?"],

            ["question_text" => "What is the name of Dumbledore's sister?"],

            ["question_text" => "What magical creature is known for its deadly stare?"],

            ["question_text" => "What does the spell Sectumsempra do?"],

            ["question_text" => "Who gave Harry the Marauder's Map?"],

            ["question_text" => "What does the spell Aparecium reveal?"],

            ["question_text" => "What potion grants good luck to the drinker?"],

            ["question_text" => "What is the name of the Ravenclaw ghost?"],

            ["question_text" => "What does the spell Alohomora do?"],
    
            ["question_text" => "What's the name of the magical sweet shop in Hogsmeade?"],
    
            ["question_text" => "Who destroyed the final Horcrux?"],
    
            ["question_text" => "What shape is Harry's Patronus?"],
    
            ["question_text" => "Who teaches Flying lessons to first-years at Hogwarts?"],
    
            ["question_text" => "What is the name of the tree that attacks anyone who comes near it?"],
    
            ["question_text" => "What position does Ron play on the Gryffindor Quidditch team?"],
    
            ["question_text" => "What is the name of Hagrid's three-headed dog?"],
    
            ["question_text" => "What creature is bred by crossing a lion and an eagle?"],
    
            ["question_text" => "Who impersonates Mad-Eye Moody in Goblet of Fire?"],
    
            ["question_text" => "What item does Dumbledore will to Harry?"],
    
            ["question_text" => "What color does a Sneakoscope glow when someone is untrustworthy?"],
    
            ["question_text" => "What is the name of Fred and George's joke shop?"],
    
            ["question_text" => "Who did Ginny go to the Yule Ball with?"],
    
            ["question_text" => "What is the maximum score in a single O.W.L. exam?"],
    
            ["question_text" => "Which wizarding prison is guarded by Dementors?"],
    
            ["question_text" => "What type of wood is Harry's wand made from?"],
    
            ["question_text" => "Who was the Half-Blood Prince?"],
    
            ["question_text" => "What spell is used to disarm an opponent?"],
    
            ["question_text" => "What are Dobby's last words?"],
    
            ["question_text" => "What is Luna Lovegood's father's name?"],
    
            ["question_text" => "What magical creature pulls the Hogwarts carriages?"],
    
            ["question_text" => "Who found the Room of Requirement first in the books?"],
    
            ["question_text" => "What is Hermione's middle name?"],
    
            ["question_text" => "What kind of dragon does Harry face in the first Triwizard task?"],
    
            ["question_text" => "Who killed Dobby?"],
    
            ["question_text" => "What is the full name of Nearly Headless Nick?"],
    
            ["question_text" => "What creature does Harry face in the second Triwizard task?"],
    
            ["question_text" => "What position does Harry play in Quidditch?"],
    
            ["question_text" => "What object must be caught to end a Quidditch match?"]

        ];

        foreach($questions as $question){
            Question::create($question);
        }
    }
}
