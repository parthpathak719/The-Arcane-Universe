<?php

namespace Database\Seeders;

use App\Models\Wizard;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WizardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $wizards=[
            [
                "name"=>"Abeforth Dumbledore",
                "type"=>"Wizard",
                "house_id"=>1,
                "wand"=>"Unknown",
                "specialisation"=>"Nonverbal Magic, Defensive Magic, Dueling, Resistance Tactics",
                "patronus"=>"Goat",
                "title"=>"Owner and Barman of the Hog's Head Inn in Hogsmeade",
                "bio"=>"Aberforth Dumbledore is a wizard, the younger brother of Albus Dumbledore and older brother of Ariana Dumbledore, and the owner of the Hog's Head Inn in Hogsmeade. He's known for his gruff demeanor, strong opinions, and a long-standing grudge against his brother, Albus, stemming from the circumstances surrounding their sister Ariana's death. Despite their strained relationship, Aberforth ultimately supports the fight against Voldemort and joins the Order of the Phoenix.",
                "quote"=>"'My brother sacrificed many things, Mr. Potter, on his journey to find power, including Ariana, and she was devoted to him. He gave her everything... but time.'",
                "image"=>"https://static.wikia.nocookie.net/heroes-and-villain/images/c/c7/AberforthInfobox.jpg",
                "background_image"=>"https://i.pinimg.com/736x/63/43/50/6343505844809a3e0d14d87ef44c864d.jpg"
            ],
            
            [
                "name"=>"Alastor Mad-Eye Moody",
                "type"=>"Wizard",
                "house_id"=>4,
                "wand"=>"Dragon Heartstring",
                "specialisation"=>"Dark Magic Defense, Tracking, Stealth, Auror Tactics, Magical Surveillance",
                "patronus"=>"Non-Corporeal",
                "title"=>" Senior Auror, Mad-eye, Member of the Order Of The Phoenix, Defense Against The Dark Arts professor for Hogwarts in Goblet Of Fire",
                "bio"=>"Alastor 'Mad-Eye' Moody is a legendary, albeit paranoid, Auror from the Harry Potter series, known for his skills in battling the Dark Arts and his distinctive magical eye. He is a key member of the Order Of The Phoenix and fought in both Wizarding Wars against Lord Voldemort. His career as an Auror led to him becoming heavily scarred and suffering from paranoia, which ultimately led to his death in the Battle of the Seven Potters.",
                "image"=>"https://i.pinimg.com/736x/df/2b/c5/df2bc554758f546f2899d3987641b7ce.jpg",
                "background_image"=>"https://i.pinimg.com/736x/4b/27/ce/4b27ceec8d248e67665ea26f0478fab7.jpg"
            ],

            [
                "name"=>"Albus Percival Wulfric Brian Dumbledore",
                "type"=>"Wizard",
                "house_id"=>1,
                "wand"=>"Elder Wand, one of the three Deathly Hallows, has a core of Thestral tail hair",
                "specialisation"=>"Transfiguration, Wandlore, Legilimency, Alchemy, Duelling, Ancient Magic, Leadership",
                "patronus"=>"Phoenix",
                "title"=>"Headmaster of Hogwarts School of Witchcraft and Wizardry, Chief Warlock of the Wizengamot, Supreme Mugwump of the International Confederation of Wizards, Founder of the Order Of The Phoenix, WORLD'S GREATEST SORCERER",
                "bio"=>"Albus Percival Wulfric Brian Dumbledore was one of the most powerful and respected wizards of all time. A brilliant student and later Headmaster of Hogwarts School of Witchcraft and Wizardry, he was known for his wisdom, compassion, and mastery of magic. Dumbledore played a crucial role in defeating the Dark wizard Gellert Grindelwald and later became the founder of the Order of the Phoenix to resist Lord Voldemort. He secretly possessed the Elder Wand, one of the Deathly Hallows, which he used with great responsibility. Despite his immense power, Dumbledore believed deeply in love, redemption, and the power of choice. He served as a mentor to Harry Potter, guiding him in the fight against evil. His legacy endures as a symbol of moral strength, sacrifice, and the burden of leadership.",
                "quote"=>"'Do not pity the dead, Harry. Pity the living, and, above all, those who live without love.' 'It is our choices, Harry, that show what we truly are, far more than our abilities.' 'Happiness can be found even in the darkest of times, if one only remembers to turn on the light.' 'It Takes A Great Deal Of Bravery To Stand Up To Your Enemies, But A Great Deal More To Stand Up To Your Friends.'",
                "image"=>"https://contentful.harrypotter.com/usf1vwtuqyxm/1dmmUJzpRcWaUmMOCu8QwO/7e013145694566076d47fd004fd604c2/AlbusDumbledore_WB_F6_DumbledoreSittingInChair_Promo_080615_Port.jpg?q=75&fm=webp&w=914",
                "background_image"=>"https://cdn.wallpapersafari.com/80/69/jxtsEm.jpg",
                "theme_song"=>"https://www.youtube.com/shorts/gW67GiYROU8?feature=share"
            ],

            [
                "name"=>"Arthur Septimus Weasley",
                "type"=>"Wizard",
                "house_id"=>1,
                "wand"=>"Unknown",
                "specialisation"=>"Muggle Artifacts, Ministry Work (Misuse of Muggle Artefacts), Improvisational Spellwork",
                "patronus"=>"Weasel",
                "title"=>"Head of the Weasley Family, Head of the Misuse of Muggle Artifacts Office, Head of the Office for the Detection and Confiscation of Counterfeit Defensive Spells and Protective Objects, Member of the Order Of The Phoenix",
                "bio"=>"Arthur Weasley is a beloved character from the Harry Potter series, known for his kind heart, love of Muggles, and dedication to his family and the Ministry of Magic. He is a pure-blood wizard, married to Molly Weasley, and father to seven children: Bill, Charlie, Percy, Fred, George, Ron, and Ginny. Arthur works at the Ministry of Magic, initially in the Misuse of Muggle Artefacts Office and later in the Office for the Detection and Confiscation of Counterfeit Defensive Spells and Protective Objects. He is a passionate enthusiast of Muggle culture and technology, often finding himself in humorous situations due to his fascination.",
                "quote"=>"'Never trust anything that can think for itself... if you can't see where it keeps its brain.'",
                "image"=>"https://static.wikia.nocookie.net/heroes-and-villain/images/5/5a/Arthur-weasley.jpg",
                "background_image"=>"https://pm1.aminoapps.com/6464/a68bd85ba25eee9a6d9c365ac38d24a2044c77fe_hq.jpg"
            ],

            [
                "name"=>"Bartemius Crouch Jr",
                "type"=>"Wizard",
                "house_id"=>2,
                "wand"=>"Dragon Heartstring",
                "specialisation"=>"Dark Arts, Magical Disguise (Polyjuice Potion), Duelling, Unforgivable Curses",
                "patronus"=>"Non-Corporeal",
                "title"=>"Death Eater, Defense Against The Dark Arts Professor for Hogwarts(while disguised as Alastor Moody)",
                "bio"=>"Bartemius 'Barty' Crouch Jr. was a pure-blood wizard and a dedicated Death Eater, known for his ruthlessness and cunning. He was the son of Barty Crouch Sr., a high-ranking Ministry official, and became a follower of Lord Voldemort in his youth. He was notorious for his role in torturing Aurors Frank and Alice Longbottom and later orchestrated a scheme to help Voldemort regain power by impersonating Alastor 'Mad-Eye' Moody. ",
                "image"=>"https://static.wikia.nocookie.net/prince-of-slytherin/images/9/97/Barty_Crouch_Junior-David_Tennant.png",
                "background_image"=>"https://static1.cbrimages.com/wordpress/wp-content/uploads/2022/04/barty2.jpg?q=70&fit=crop&w=750&h=422&dpr=1"
            ],

            [
                "name"=>"Bartemius Crouch Sr",
                "type"=>"Wizard",
                "house_id"=>2,
                "wand"=>"Unknown",
                "specialisation"=>"Magical Law Enforcement, International Magical Cooperation, Strict Regulation",
                "patronus"=>"Pine Marten",
                "title"=>"Head of the Department of Magical Law Enforcement, Head of the Department of International Magical Cooperation",
                "bio"=>"Bartemius 'Barty' Crouch Sr. was a high-ranking official in the British Ministry of Magic, known for his strict and often ruthless approach to law enforcement, particularly during the First Wizarding War. He headed the Department of Magical Law Enforcement and later the Department of International Magical Cooperation. His career was marked by both ambition and tragedy, culminating in his death at the hands of his own son, Barty Crouch Jr. ",
                "quote"=>"'Dark and difficult times lie ahead. Soon we must all face the choice between what is right and what is easy.'",
                "image"=>"https://i.pinimg.com/736x/04/19/28/041928197ab6e323a93bad6595bf9bf2.jpg",
                "background_image"=>"https://contentful.harrypotter.com/usf1vwtuqyxm/5Ws80pDZzasGu8wUw20iAU/e1298b52aebfd6cc462fbc3c0fdd05d1/WB_F4_BartyCrouchSr._CrouchClose-Up_HP4D-5202.jpg?q=75&fm=webp&w=914"
            ],

            [
                "name"=>"Bellatrix Druella Lestrange",
                "type"=>"Witch",
                "house_id"=>2,
                "wand"=>"Dragon Heartstring",
                "specialisation"=>"Dark Arts, Torture Curses (especially Cruciatus), Fanatical Duelling, Occlumency",
                "patronus"=>"Non-Corporeal",
                "title"=>"Death Eater",
                "bio"=>"Bellatrix Lestrange, née Black, is a fictional character from the Harry Potter series, a fanatically loyal Death Eater and a primary antagonist. She was born into the wealthy and pure-blood Black family, and raised to value their ideals of blood purity. She attended Hogwarts and was sorted into Slytherin, where she likely formed connections that would later lead her to join Lord Voldemort. She married Rodolphus Lestrange, also a Death Eater, but her true devotion lay with Voldemort. Bellatrix was imprisoned in Azkaban for her crimes during the First Wizarding War, but escaped and rejoined Voldemort, becoming one of his most trusted lieutenants. She was known for her ruthlessness, sadism, and dedication to the Dark Lord, even participating in the torture of the Longbottoms and killing her cousin Sirius Black. She ultimately dies during the Battle of Hogwarts, killed by Molly Weasley(can't tell you how happy I was that day).",
                "image"=>"https://i.pinimg.com/736x/ee/87/17/ee8717344dc7d1ec015a24df33e865a8.jpg",
                "background_image"=>"https://i.pinimg.com/736x/a8/70/db/a870db729594245b81298afdc296ca65.jpg"
            ],

            [
                "name"=>"Bill Weasley",
                "type"=>"Wizard",
                "house_id"=>1,
                "wand"=>"Unknown",
                "specialisation"=>"Curse-Breaking, Ancient Runes, Defensive Magic, Gringotts Fieldwork",
                "patronus"=>"Swan",
                "title"=>"Head Boy of Hogwarts, Curse-Breaker for Gringotts Wizarding Bank, Member of the Order Of The Phoenix",
                "bio"=>"Bill Weasley is the eldest son of Arthur and Molly Weasley, and a key character in the Harry Potter series. He is known for his bravery, intelligence, and loyalty, as well as his career as a curse-breaker for Gringotts Wizarding Bank. He plays a significant role in the fight against Lord Voldemort as a member of the Order Of The Phoenix.",
                "image"=>"https://static.wikia.nocookie.net/heroes-and-villain/images/5/51/Billweasley.jpg",
                "background_image"=>"https://i.pinimg.com/736x/1a/db/de/1adbdeef75dedd1e492859c01e4c31f5.jpg"
            ],

            [
                "name"=>"Cedric Diggory",
                "type"=>"Wizard",
                "house_id"=>4,
                "wand"=>"Unicorn hair",
                "specialisation"=>"Advanced Spellcasting, Flying, Fair Play, Leadership, Triwizard Tactics",
                "patronus"=>"Stag",
                "title"=>"Hufflepuff Quidditch Captain and Seeker, Prefect, Triwizard Champion",
                "bio"=>"Cedric Diggory is known for his fairness, bravery, and kindness, as exemplified in his interactions with Harry Potter. Key quotes highlight his helpfulness, like suggesting Harry use the Prefects' bathroom to solve the clue and his insistence on an even playing field for the Triwizard Tournament. He also shows remarkable courage in the face of danger, notably when he stands his ground against Voldemort.",
                "image"=>"https://i.pinimg.com/736x/36/e2/fe/36e2fe588e25d5a392833511e4f2380a.jpg",
                "background_image"=>"https://media1.popsugar-assets.com/files/thumbor/v3WvhJat93TG9OajKWgVVo0t6Ls=/fit-in/1584x1056/top/filters:format_auto():upscale()/2020/10/01/768/n/1922283/tmp_BIQ7pe_e3916a967d1e52af_MCDHAPO_EC470.jpg"
            ],

            [
                "name"=>"Cho Chang",
                "type"=>"Witch",
                "house_id"=>3,
                "wand"=>"Unknown",
                "specialisation"=>"Flying, Quidditch (Seeker), Defensive Spells",
                "patronus"=>"Swan",
                "title"=>"Seeker for the Ravenclaw Quidditch Team",
                "bio"=>"Cho Chang is a fictional character in the Harry Potter series, known for being a student at Hogwarts, a Seeker for the Ravenclaw Quidditch team, and for briefly dating Harry Potter. She is portrayed as a popular, intelligent, and kind witch, but also one who experiences grief and emotional challenges.",
                "image"=>"https://i.pinimg.com/1200x/4e/44/3e/4e443edf6ea87ca0c30095eab91e2e05.jpg",
                "background_image"=>"https://i.pinimg.com/736x/4e/76/1a/4e761a76eb5f3efb42ede80a0145efd4.jpg"
            ],

            [
                "name"=>"Cornelius Oswald Fudge",
                "type"=>"Wizard",
                "house_id"=>2,
                "wand"=>"Unknown",
                "specialisation"=>"Magical Politics, Bureaucracy, Public Relations, Damage Control",
                "patronus"=>"Non-Corporeal",
                "title"=>"Minister for Magic",
                "bio"=>"Cornelius Fudge served as the Minister for Magic during a turbulent period in the wizarding world, including the return of Lord Voldemort. He was known for his cautious, often cowardly approach to governance, frequently denying or downplaying threats to maintain public order. His reluctance to accept Voldemort’s return led to political strife and contributed to delays in effective resistance against the Dark Lord. Fudge was eventually removed from office and replaced by Rufus Scrimgeour.",
                "quote"=>"'The Ministry doesn't send people to Azkaban for blowing up their aunts.'",
                "image"=>"https://static.wikia.nocookie.net/heroes-and-villain/images/6/6d/Corneliushogwarts.jpg",
                "background_image"=>"https://i.pinimg.com/1200x/f3/f6/76/f3f67635c1cec4b6e3dbdabfb8756ef3.jpg"
            ],

            [
                "name"=>"Dolores Jane Umbridge",
                "type"=>"BITCH",
                "house_id"=>2,
                "wand"=>"Dragon Heartstring",
                "specialisation"=>"Bureaucratic Magic, Magical Law, Defensive Magic Theory (Non-Practical)",
                "patronus"=>"Cat",
                "title"=>"Senior Undersecretary to the Minister for Magic, Head of the Muggle-Born Registration Commission, Defense Against the Dark Arts professor, High Inquisitor, briefly Headmistress at Hogwarts in the Order Of The Phoenix, and The Most Hated Character in the story.",
                "bio"=>"Dolores Jane Umbridge is a fictional character in the Harry Potter series, known for her manipulative, cruel, and power-hungry nature. She is a Ministry of Magic bureaucrat who becomes a Defense Against the Dark Arts professor at Hogwarts and later the High Inquisitor, wielding her authority to enforce strict, often sadistic, rules. She is characterized by her love for all things 'cute' and pink, her obsession with rules and order, and her deep-seated prejudice against those she deems 'inferior'(Pls perform cruciatus curse on her).",
                "quote"=>"'You must not tell lies.' 'I will have order!'",
                "image"=>"https://i.pinimg.com/736x/90/1e/3a/901e3a0e010357eeae9648515695e30a.jpg",
                "background_image"=>"https://miro.medium.com/v2/resize:fit:1400/format:webp/1*4eCDXXbJbkiXAXeJAvu8yw.jpeg"
            ],

            [
                "name"=>"Draco Lucius Malfoy",
                "type"=>"Wizard",
                "house_id"=>2,
                "wand"=>"Unicorn hair",
                "specialisation"=>"Occlumency, Potion Making, Magical Theory, Disarming and Shielding Charms",
                "patronus"=>"None",
                "title"=>"Seeker for Slytherin Quidditch team, Prefect",
                "bio"=>"Draco Malfoy is a fictional character in J.K. Rowling's Harry Potter series. He is a pure-blood wizard, a student at Hogwarts, and a member of the Slytherin house. He is known for his arrogance, his bullying behavior towards Harry Potter, and his family's allegiance to Lord Voldemort. Despite his initial antagonistic role, Draco's character evolves throughout the series, revealing a more complex and nuanced personality.",
                "quote"=>"'Wait till my father hears about this!'",
                "image"=>"https://i.pinimg.com/1200x/22/5b/1d/225b1dec864c0314cc01a9aa8cc8f3be.jpg",
                "background_image"=>"https://cdn.costumewall.com/wp-content/uploads/2018/08/draco-malfoy.webp"
            ],

            [
                "name" => "Filius Frederick Flitwick",
                "type" => "Half-Goblin Wizard",
                "house_id" => 3,
                "wand" => "Unknown",
                "specialisation" => "Charms, Dueling, Wandwork, Magical Theory",
                "patronus" => "Non-Corporeal",
                "title" => "Charms Professor, Head of Ravenclaw House",
                "bio" => "Filius Frederick Flitwick is a half-goblin wizard known for his mastery of charmwork and his cheerful personality. As both the Charms Professor and Head of Ravenclaw House at Hogwarts, he played a critical role in educating generations of young witches and wizards. A former dueling champion, he stood bravely in the Battle of Hogwarts to protect the school.",
                "quote" => "'If You Have To Ask, You'll Never Know. If You Know, You Need Only Ask'",
                "image" => "https://static.wikia.nocookie.net/harrypotter/images/4/4b/Flitwickarmourbattle.png",
                "background_image" => "https://static1.cbrimages.com/wordpress/wp-content/uploads/2022/04/Flitwick.jpg?q=70&fit=crop&w=750&h=422&dpr=1"
            ],

            [
                "name" => "Fred Gideon Weasley",
                "type" => "Wizard",
                "house_id" => 1,
                "wand" => "Unknown",
                "specialisation" => "Magical Pranks, Skiving Snackboxes, Spell Innovation, Explosive Charmcraft, Defensive Magic",
                "patronus" => "Magpie",
                "title" => "Co-founder of Weasleys' Wizard Wheezes",
                "bio" => "Fred Gideon Weasley was one of the mischievous and inventive twin brothers of the Weasley family. Known for his quick wit, bravery, and remarkable talent for magical pranks, Fred co-founded the joke shop Weasleys' Wizard Wheezes with his twin George. He fought in the Battle of Hogwarts and tragically lost his life during the battle, leaving a lasting legacy of laughter and courage.",
                "quote" => "'Ask us no questions and we'll tell you no lies.' 'You haven't got a letter on yours. I suppose she thinks you don't forget your name. But we're not stupid — we know we're called Gred and Forge.'",
                "image" => "https://i.pinimg.com/1200x/05/ca/3f/05ca3fe4e5d4595153d86b05eea40459.jpg",
                "background_image" => "https://i.pinimg.com/1200x/05/ca/3f/05ca3fe4e5d4595153d86b05eea40459.jpg"
            ],

            [
                "name" => "Gellert Grindelwald",
                "type" => "Wizard",
                "house_id" => 3,
                "wand" => "Elder Wand, one of the three Deathly Hallows, has a core of Thestral tail hair",
                "specialisation" => "Dark Arts, Duelling, Wandlore, Legilimency, Global Magical Strategy",
                "patronus" => "Unknown",
                "title" => "Dark Wizard, Former Master of the Elder Wand, Founder of Nurmengard",
                "bio" => "Gellert Grindelwald was one of the most dangerous Dark Wizards in history, second only to Voldemort. Brilliant and charismatic, he was a master of dark magic and sought to create a new magical order where wizards ruled over Muggles. He had a close but tragic friendship with Albus Dumbledore and was ultimately defeated and imprisoned in Nurmengard.",
                "image" => "https://static.wikia.nocookie.net/heroes-and-villain/images/b/bc/COGW_Grindelwald.png",
                "background_image" => "https://static1.srcdn.com/wordpress/wp-content/uploads/2022/09/Fantastic-beasts-harry-potter-deathly-hollows-Gellert-Grindelwald.jpg?q=50&fit=crop&w=1140&h=&dpr=1.5"
            ],

            [
                "name" => "George Fabian Weasley",
                "type" => "Wizard",
                "house_id" => 1,
                "wand" => "Unknown",
                "specialisation" => "Magical Pranks, Skiving Snackboxes, Spell Innovation, Joke Item Design, Defensive Magic",
                "patronus" => "Magpie",
                "title" => "Co-founder of Weasleys' Wizard Wheezes",
                "bio" => "George Fabian Weasley is one half of the iconic Weasley twins, known for his clever inventions and rebellious spirit. Along with his brother Fred, he co-founded the joke shop Weasleys' Wizard Wheezes. After Fred's death in the Battle of Hogwarts, George continued their legacy, showing resilience through grief and laughter.",
                "quote" => "'Saint-like. You see... I'm holey, Fred. Get it?' 'We'll send you a Hogwarts toilet seat.'",
                "image" => "https://i.pinimg.com/1200x/40/39/03/403903cde68297ca5da25021a57c54cc.jpg",
                "background_image" => "https://i.pinimg.com/1200x/40/39/03/403903cde68297ca5da25021a57c54cc.jpg"
            ],

            [
                "name" => "Ginevra Molly Weasley",
                "type" => "Witch",
                "house_id" => 1,
                "wand" => "Phoenix Feather",
                "specialisation" => "Bat-Bogey Hexes, Duelling, Quidditch, Hexing, Charmwork",
                "patronus" => "Horse",
                "title" => "Professional Quidditch Player, Editor for the Daily Prophet",
                "bio" => "Ginny Weasley, the youngest of the Weasley siblings and the only daughter, is known for her fierce independence and powerful hexes. A skilled Quidditch player, she went on to play professionally for the Holyhead Harpies and later became a journalist. Ginny played an active role in Dumbledore's Army and fought in the Battle of Hogwarts.",
                "quote" => "'The thing about growing up with Fred and George is that you sort of start thinking everything's possible if you've got enough nerve'",
                "image" => "https://i.pinimg.com/1200x/78/bf/b8/78bfb845b80b0c3d9274d03f68fcaf9d.jpg",
                "background_image" => "https://w0.peakpx.com/wallpaper/148/901/HD-wallpaper-ginny-blood-bonnie-half-harry-potter-prince-weasley-wright.jpg"
            ],

            [
               "name" => "Harry James Potter",
               "type" => "Wizard",
               "house_id" => 1,
               "wand" => "Phoenix Feather",
               "specialisation" => "Defense Against the Dark Arts, Expelliarmus Mastery, Bravery, Leadership, Parseltongue, Duelling, Patronus Charm, Quidditch (Seeker)",
               "patronus" => "Stag",
               "title" => "THE BOY WHO LIVED, THE CHOSEN ONE, Triwizard Champion, Head of the Auror Office",
               "bio" => "Harry James Potter is the only known survivor of the Killing Curse, earning him the title 'The Boy Who Lived'. Orphaned as a baby, he was raised by Muggle relatives before discovering he was a wizard at age eleven. At Hogwarts, he was sorted into Gryffindor and formed close bonds with Ron Weasley and Hermione Granger. He faced Lord Voldemort multiple times, ultimately destroying his Horcruxes and defeating him in the Battle of Hogwarts. Harry became a symbol of hope and resistance during the Second Wizarding War. He later joined the Ministry of Magic and became Head of the Auror Office. Harry's story embodies courage, friendship, and the enduring power of love.",
               "quote" => "'I don't go looking for trouble. Trouble usually finds me.' 'Working hard is important. But there is something that matters even more: believing in yourself.' 'EXPELLIARMUS!!'",
               "image" => "https://pm1.aminoapps.com/6496/0b5606f62adce76a897bf26f6d0dac93c6ec272d_hq.jpg",
               "background_image" => "https://i.pinimg.com/736x/30/91/3e/30913eeadd01ef85903244992a17dfa7.jpg",
               "theme_song"=>"https://www.youtube.com/shorts/alfTHiLtElY?feature=share"
            ],

            [
                "name" => "Hermione Jean Granger",
                "type" => "Witch",
                "house_id" => 1,
                "wand" => "Dragon heartstring",
                "specialisation" => "Spellcraft, Intelligence, Bravery, Magical Theory, Charms, Transfiguration, Leadership",
                "patronus" => "Otter",
                "title" => "Prefect, Minister for Magic, ",
                "bio" => "Hermione Jean Granger is one of the most brilliant witches of her generation, known for her intellect, compassion, and strong sense of justice. She played a key role in the downfall of Voldemort and went on to serve in the Ministry of Magic, ultimately becoming the Minister for Magic.",
                "quote" => "'It's LeviOsa, not LevioSA!' 'We could have been killed — or worse, expelled.'",
                "image" => "https://upload.wikimedia.org/wikipedia/en/d/d3/Hermione_Granger_poster.jpg",
                "background_image" => "https://i.pinimg.com/736x/7b/f3/d8/7bf3d8797e68a831b48854988e3f17b3.jpg"
            ],

            [
               "name" => "Horace Eugene Slughorn",
               "type" => "Wizard",
               "house_id" => 2,
               "wand" => "Dragon heartstring",
               "specialisation" => "Potions, Networking, Talent-Spotting, Memory Manipulation",
               "patronus" => "Fish",
               "title" => "Potions Master, Head of Slytherin House (Former)",
               "bio" => "Horace Eugene Slughorn is a talented potioneer and former Head of Slytherin House. Known for cultivating a 'Slug Club' of promising students, he values connections and influence. Though initially reluctant, he returned to Hogwarts to fight in the Battle of Hogwarts and stood against Voldemort. He also helped in discovering the most important clue to defeat Voldemort known as 'Horcrux'",
               "quote" => "'I taught the whole Black family, except Sirius, who was a serious disappointment.'",
               "image" => "https://i.pinimg.com/736x/34/fe/d7/34fed7c38ab56d60182bc3a3dde9e1c3.jpg",
               "background_image" => "https://w0.peakpx.com/wallpaper/252/483/HD-wallpaper-harry-potter-movie-harry-potter-and-the-half-blood-prince-horace-slughorn.jpg"
            ],

            [
                "name" => "James Fleamont Potter",
                "type" => "Wizard",
                "house_id" => 1,
                "wand" => "Unknown",
                "specialisation" => "Animagus Transformation, Duelling, Quidditch (Chaser), Transfiguration",
                "patronus" => "Stag",
                "title" => "Prongs, Chaser for the Tutshill Tornados (a Quidditch team), Auror for the Ministry of Magic, Head Boy at Hogwarts, Member of the Order Of The Phoenix",
                "bio" => "James Fleamont Potter was a gifted and confident wizard known for his skill in magic and loyalty to his friends. As one of the Marauders(James, Lupin, Peter, Sirius), he became an unregistered Animagus. He fought in the First Wizarding War and was killed by Voldemort while protecting his family.",
                "image" => "https://static.wikia.nocookie.net/heroes-and-villain/images/f/f6/James_potter.jpg",
                "background_image" => "https://static.wikia.nocookie.net/heroes-and-villain/images/f/f6/James_potter.jpg"
            ],

            [
               "name" => "Kingsley Shacklebolt",
               "type" => "Wizard",
               "house_id" => 1,
               "wand" => "Unknown",
               "specialisation" => "Auror Work, Protective Charms, Stealth, Leadership, Duelling",
               "patronus" => "Lynx",
               "title" => "Auror, Personal Guard/Secretary of Prime Minister, Minister for Magic, Member of the Order Of The Phoenix",
               "bio" => "Kingsley Shacklebolt is a highly respected Auror known for his calm demeanor and powerful magic. He played a major role in the Order of the Phoenix and the protection of key figures during the war. After Voldemort's fall, he was appointed Minister for Magic and helped reform the wizarding government.",
               "quote" => "'You may not like him, Minister, but you can't deny — Dumbledore's got style.'",
               "image" => "https://static.wikia.nocookie.net/heroes-and-villain/images/0/0c/30FFD69D-53C2-4B3D-8785-D011574622CE.webp",
               "background_image" => "https://static1.srcdn.com/wordpress/wp-content/uploads/2019/10/Kingsley-Shacklebolt.jpg?q=50&fit=crop&w=1140&h=&dpr=1.5"
            ],

            [
              "name" => "Lily James Potter",
              "type" => "Witch",
              "house_id" => 1,
              "wand" => "Unknown",
              "specialisation" => "Charms, Protective Magic, Potion Making, Nonverbal Magic",
              "patronus" => "Doe",
              "title" => "Head Girl, Member of the Order Of The Phoenix",
              "bio" => "Lily J. Potter was a brilliant Muggle-born witch, known for her strong moral values and exceptional skill in charms. A member of the original Order of the Phoenix, she sacrificed herself to protect her son, casting the powerful love magic that shielded Harry from Voldemort's curse.",
              "image" => "https://static.wikia.nocookie.net/heroes-and-villain/images/a/a9/Lily_DHP1.png",
              "background_image" => "https://static.wikia.nocookie.net/heroes-and-villain/images/a/a9/Lily_DHP1.png"
            ],

            [
               "name" => "Lord Voldemort",
               "type" => "Wizard",
               "house_id" => 2,
               "wand" => "Phoenix feather",
               "specialisation" => "Dark Arts, Parseltongue, Horcrux Creation, Legilimency, Duelling, Magical Intimidation",
               "patronus" => "None",
               "title" => "The Dark Lord, He-Who-Must-Not-Be-Named, You-Know-Who, The Heir of Slytherin",
               "bio" => "Lord Voldemort, born Tom Marvolo Riddle, was the most feared Dark wizard in history. A brilliant but emotionally detached student at Hogwarts and the last known descendant of Salazar Slytherin, he became obsessed with immortality, power, and blood purity. To escape death, he split his soul into seven Horcruxes — a twisted form of dark magic. He led the Death Eaters and launched a brutal crusade to purify the wizarding world of Muggle-borns. His first rise to power ended when he failed to kill infant Harry Potter, which left him powerless for over a decade. Voldemort returned to power during the Second Wizarding War, spreading terror and death across Britain. Despite his strength, he was ultimately defeated by Harry, as he could never grasp the power of love, loyalty, and self-sacrifice — the very things that made him vulnerable.",
               "quote" => "'I, who have gone further than anybody along the path that leads to immortality.' 'AVADA KEDAVRA!!'",
               "image" => "https://upload.wikimedia.org/wikipedia/en/a/a3/Lordvoldemort.jpg",
               "background_image" => "https://i.pinimg.com/736x/45/37/cb/4537cbb9b9517d1d0d116550125942c7.jpg",
               "theme_song"=>"https://www.youtube.com/shorts/BmpFwKcbYGc?feature=share"
            ],

            [
                "name" => "Lucius Abraxas Malfoy",
                "type" => "Wizard",
                "house_id" => 2,
                "wand" => "Dragon heartstring",
                "specialisation" => "Influence, Dark Arts, Political Manipulation",
                "patronus" => "None",
                "title" => "Governor of Hogwarts, Death Eater",
                "bio" => "Lucius Abraxas Malfoy is a wealthy pure-blood wizard and father of Draco Malfoy. A loyal Death Eater during the First and Second Wizarding Wars, he used his influence and wealth to support Voldemort. Though he later distanced himself from the Dark Lord, his legacy remains controversial.",
                "image" => "https://i.pinimg.com/1200x/84/4f/05/844f05dd8c56368311e9735c09545b34.jpg",
                "background_image" => "https://i.pinimg.com/1200x/d5/75/82/d575827a94baa63db3af7b2ee525ce67.jpg"
            ],

            [
                "name" => "Luna Scamander Lovegood",
                "type" => "Witch",
                "house_id" => 3,
                "wand" => "Unknown",
                "specialisation" => "Magical Creatures, Defensive Magic, Charms",
                "patronus" => "Hare",
                "title" => "Magizoologist, Editor at The Quibbler",
                "bio" => "Luna Scamander Lovegood is a Ravenclaw known for her quirky personality, deep insight, and fierce loyalty. She joined Dumbledore's Army and fought in the Battle of Hogwarts. After the war, she became a magizoologist and married Rolf Scamander, continuing her love for magical creatures.",
                "quote" => "'Things we lose have a way of coming back to us in the end, if not always in the way we expect.'",
                "image" => "https://images.shoutwiki.com/harrypotter/e/e9/Luna_Lovegood.png",
                "background_image" => "https://i.pinimg.com/736x/96/a3/1c/96a31c697643edf12fb1a108220760bc.jpg"
            ],

            [
                "name" => "Minerva McGonagall",
                "type" => "Witch",
                "house_id" => 1,
                "wand" => "Dragon Heartstring",
                "specialisation" => "Transfiguration, Animagus Transformation, Dueling, Leadership, Defensive Magic",
                "patronus" => "Cat",
                "title" => "Prefect, Head Girl, Transfiguration Professor, Deputy Headmistress, Headmistress of Hogwarts, Head of Gryffindor House",
                "bio" => "Minerva McGonagall is a strict but fair professor known for her incredible mastery of transfiguration and stern loyalty to Hogwarts. A registered Animagus, she served as Deputy Headmistress and later became Headmistress after the Second Wizarding War. She was instrumental in defending the school during the Battle of Hogwarts.",
                "quote" => "'Have a biscuit, Potter.' 'I've always wanted to use that spell.' ''",
                "image" => "https://i.pinimg.com/736x/aa/1d/96/aa1d96df3b83edf81cd527a16c95d072.jpg",
                "background_image" => "https://i.pinimg.com/736x/d1/c6/01/d1c60172104f3634737575c6e51dd2b9.jpg"
            ],

            [
                "name" => "Molly Prewett Weasley",
                "type" => "Witch",
                "house_id" => 1,
                "wand" => "Unknown",
                "specialisation" => "Household Magic, Duelling, Protective Charms, Maternal Instinct Magic",
                "patronus" => "Non-Corporeal",
                "title" => "Matriarch of the Weasley Family, Order Of The Phoenix Member",
                "bio" => "Molly Prewett Weasley is the fiercely loving and strong-willed mother of the Weasley children. Known for her formidable magical talent, she played a significant role in the Order of the Phoenix and famously defeated Bellatrix Lestrange during the Battle of Hogwarts.",
                "quote" => "'Not my daughter, you bitch!'",
                "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQY4_x1MqSu36hoyz0epYqBSXCMoOMasUNLnQ&s",
                "background_image" => "https://i.pinimg.com/736x/b6/b5/0a/b6b50ad2fc71e250ade1b4d9c93133db.jpg"
            ],

            [
                "name" => "Neville Francis Longbottom",
                "type" => "Wizard",
                "house_id" => 1,
                "wand" => "Unicorn Hair",
                "specialisation" => "Herbology, Sword Combat, Defensive Magic, Bravery, Leadership",
                "patronus" => "Non-Corporeal",
                "title" => "Auror, Herbology Professor at Hogwarts, Head of Gryffindor House at Hogwarts",
                "bio" => "Neville Francis Longbottom is a brave and kind-hearted wizard who evolved from a shy student into a true leader. He fought valiantly in the Battle of Hogwarts and destroyed one of Voldemort's Horcruxes. After the war, he became the Herbology Professor at Hogwarts.",
                "quote" => "'It doesn't matter that Harry's gone. People die every day. Friends, family... We lost Harry tonight. But he's still with us, in here.'",
                "image" => "https://i.pinimg.com/1200x/55/51/3d/55513d4fe1a8e6df974099fd4ad752da.jpg",
                "background_image" => "https://i.pinimg.com/736x/04/b7/e5/04b7e574beef10d2fe71a112e1a21bac.jpg"
            ],

            [
                "name" => "Peter Pettigrew",
                "type" => "Wizard",
                "house_id" => 1,
                "wand" => "Dragon Heartstring",
                "specialisation" => "Animagus Transformation, Dark Magic, Servitude, Betrayal Tactics",
                "patronus" => "None",
                "title" => "Wormtail, Death Eater, Servant of Voldemort",
                "bio" => "Peter Pettigrew, also known as Wormtail, was a former friend of James Potter, Sirius Black, and Remus Lupin. He betrayed the Potters to Voldemort and lived as a rat for years to avoid capture. He later helped Voldemort regain his physical form and served him until his death.",
                "image" => "https://static.wikia.nocookie.net/heroes-and-villain/images/e/e4/Pettigrew_DH1.jpg",
                "background_image" => "https://static1.cbrimages.com/wordpress/wp-content/uploads/2022/04/pettigrew2.jpg?q=50&fit=crop&w=825&dpr=1.5"
            ],

            [
                "name" => "Quirinus Quirrell",
                "type" => "Wizard",
                "house_id" => 3,
                "wand" => "Unicorn Hair",
                "specialisation" => "Dark Arts, Magical Theory, Hypnosis",
                "patronus" => "Non-Corporeal",
                "title" => "Defense Against the Dark Arts Professor",
                "bio" => "Quirinus Quirrell was a Ravenclaw professor who initially taught Muggle Studies before taking on Defense Against the Dark Arts. He traveled in search of dark knowledge and was eventually possessed by Voldemort. He died attempting to steal the Philosopher's Stone from Harry Potter for his master.",
                "quote" => "'T-t-troll — in the dungeons! Thought you ought to know...' 'There is no good and evil. There is only power, and those too weak to seek it.'",
                "image" => "https://i.pinimg.com/736x/02/d6/be/02d6bef74b941f9bfe2260c60ebe07f7.jpg",
                "background_image" => "https://i.pinimg.com/736x/76/d1/a0/76d1a052e9d46d924b04b619bda075f2.jpg"
            ],

            [
                "name" => "Remus John Lupin",
                "type" => "Wizard",
                "house_id" => 1,
                "wand" => "Unicorn Hair",
                "specialisation" => "Defense Against the Dark Arts, Werewolf Transformation, Duelling, Patronus Charm",
                "patronus" => "Wolf",
                "title" => "Moony, Prefect, Best Defense Against the Dark Arts Professor, Order Of The Phoenix Member",
                "bio" => "Remus John Lupin was a kind and talented wizard who lived with the stigma of being a werewolf. He was a founding member of the Marauders, a member of the Order of the Phoenix, and briefly served as Defense Against the Dark Arts Professor at Hogwarts. He fought and died during the Battle of Hogwarts.",
                "quote" => "'You are not weak, Harry. The dementors affect you most because there are true horrors in your past. Horrors your classmates can barely imagine.' 'It is the quality of one's convictions that determines success, not the number of followers.'",
                "image" => "https://static1.srcdn.com/wordpress/wp-content/uploads/2018/02/Remus-Lupin.jpg?q=50&fit=crop&w=1140&h=&dpr=1.5",
                "background_image" => "https://i.pinimg.com/736x/2b/f0/e6/2bf0e6e4fdcd7f5cc96776686de8e304.jpg"
            ],

            [
                "name" => "Ronald Bilius Weasley",
                "type" => "Wizard",
                "house_id" => 1,
                "wand" => "Unicorn hair",
                "specialisation" => "Wizard Chess, Defensive Magic, Tactical Thinking",
                "patronus" => "Jack Russell Terrier",
                "title" => "Prefect, Keeper (for the Gryffindor Quidditch team), Auror, Co-founder of Weasleys' Wizard Wheezes (briefly), Assistant at the Ministry of Magic, Treasurer of S.P.E.W. (Society for the Promotion of Elfish Welfare)",
                "bio" => "Ronald Bilius Weasley, the sixth Weasley child, is known for his loyalty, humor, and bravery. He was a close companion of Harry Potter and Hermione Granger during their hunt for Horcruxes. After the war, he briefly helped George run their joke shop before becoming an Auror.",
                "quote" => "'Why spiders? Why couldn't it be 'follow the butterflies'?' 'Bloody hell!'",
                "image" => "https://upload.wikimedia.org/wikipedia/en/5/5e/Ron_Weasley_poster.jpg",
                "background_image" => "https://i.pinimg.com/1200x/3c/66/2e/3c662ebf1d87d75f4bdcaced7e6dc8b5.jpg"
            ],

            [
                "name" => "Rubeus Hagrid",
                "type" => "Half-Giant Wizard",
                "house_id" => 1,
                "wand" => "Unknown",
                "specialisation" => "Care of Magical Creatures, Giant Relations, Cross-Species Communication, Magical Resistance",
                "patronus" => "None",
                "title" => "Keeper of Keys and Grounds at Hogwarts, Care of Magical Creatures Professor",
                "bio" => "Rubeus Hagrid is a half-giant known for his love of magical creatures and his enormous heart. Expelled from Hogwarts in his third year, he was given a second chance by Dumbledore and served loyally at Hogwarts for decades. Hagrid was a key figure in Harry Potter's life and the Order of the Phoenix.",
                "quote" => "'Never insult Albus Dumbledore in front of me!' 'What's coming will come, and we'll meet it when it does.'",
                "image" => "https://contentful.harrypotter.com/usf1vwtuqyxm/7JMTFJSRKaH6eJmfkz5cSW/d5580ee226f0ebe91120232eb8829913/rubeus-hagrid_4_1800x1248.png?q=75&fm=webp&w=1200&h=832&fit=pad",
                "background_image" => "https://i.pinimg.com/736x/41/c0/75/41c0758f233f90ab516f1f13de92ece5.jpg"
            ],

            [
                "name" => "Severus Tobias Snape",
                "type" => "Wizard",
                "house_id" => 2,
                "wand" => "Phoenix Feather",
                "specialisation" => "Potion Making, Occlumency, Legilimency, Duelling, Spycraft, Defensive Magic",
                "patronus" => "Doe",
                "title" => "Potions Master, Defense Against the Dark Arts Professor, Head of Slytherin House, Headmaster of Hogwarts, Greatest Actor",
                "bio" => "Severus Tobias Snape was a brilliant and complex wizard who walked a fine line between light and dark. Initially a Death Eater, he became a double agent for Dumbledore out of love for Lily Potter. His sacrifices were instrumental in Voldemort's defeat, though misunderstood until after his death.",
                "quote" => "'Always.' 'You dare use my own spells against me, Potter?' 'You have your mother's eyes.'",
                "image" => "https://i.pinimg.com/1200x/cb/24/bd/cb24bd8775255c97cf8ff29a6256707f.jpg",
                "background_image" => "https://cdn.mos.cms.futurecdn.net/4ijqM6GXJGfHELPZDoWorJ-600-80.jpg.webp"
            ],

            [
                "name" => "Sirius Orion Black",
                "type" => "Wizard",
                "house_id" => 1,
                "wand" => "Unknown",
                "specialisation" => "Animagus Transformation, Duelling, Magical Motorbike Enchantments",
                "patronus" => "Non-Corporeal",
                "title" => "Padfoot, Senior Auror, Member of the Order of the Phoenix",
                "bio" => "Sirius Orion Black was the charismatic and rebellious godfather of Harry Potter. The first in his pure-blood family to be sorted into Gryffindor, Sirius was a fierce fighter against Voldemort. Wrongly imprisoned in Azkaban, he escaped to support Harry and died in the Battle of the Department of Mysteries.",
                "quote" => "'We've all got both light and dark inside us. What matters is the part we choose to act on. That's who we really are.' 'The world isn't split into good people and Death Eaters.' 'You are not a bad person. You're a very good person, who bad things have happened to.'",
                "image" => "https://static.wikia.nocookie.net/harrypotter/images/b/bc/OOTP_promo_front_closeup_Sirius_Black.jpg",
                "background_image" => "https://i.pinimg.com/1200x/c0/ca/8d/c0ca8dc4fa77b1deb7fc24df14b9e9c6.jpg"
            ],

            [
                "name" => "Gilderoy Lockhart",
                "type" => "Wizard",
                "house_id" => 3,
                "wand" => "Dragon Heartstring",
                "specialisation" => "Memory Charms, Writing",
                "patronus" => "Non-Corporeal",
                "title" => "Former Defense Against the Dark Arts Professor, Writer",
                "bio" => "Gilderoy Lockhart is a wizard known for his flamboyant personality, celebrity status, and exaggerated tales of heroism, most of which were stolen from other wizards whose memories he erased. A former Defense Against the Dark Arts professor at Hogwarts, Lockhart's incompetence was revealed during his tenure, and a backfired memory charm left him permanently amnesiac.",
                "quote" => "'Fame is a fickle friend, Harry'",
                "image" => "https://static.wikia.nocookie.net/harrypotter/images/7/7b/Gilderoy_Lockhart_promotional_image_COSF.jpg",
                "background_image" => "https://desprookjeswinkel.be/cdn/shop/collections/9188d5621bb65e0295de0925d0a3fc33.jpg?v=1626269101&width=1600"
            ],

            [
                "name" => "Nymphadora Tonks",
                "type" => "Witch",
                "house_id" => 4,
                "wand" => "Unknown",
                "specialisation" => "Metamorphmagus abilities, Stealth and Tracking",
                "patronus" => "Wolf",
                "title" => "Auror and Member of the Order of the Phoenix",
                "bio" => "Nymphadora Tonks was a skilled and quirky young Auror known for her ability to change her appearance at will, a rare trait called Metamorphmagus. A fiercely loyal member of the Order of the Phoenix, she played a vital role in the fight against Voldemort. She married Remus Lupin and died in the Battle of Hogwarts, bravely defending the cause she believed in.",
                "quote" => "'Don't call me Nymphadora!!'",
                "image" => "https://i.pinimg.com/1200x/03/ce/29/03ce2988cb47e7d53c531d5679399386.jpg",
                "background_image" => "https://i.pinimg.com/1200x/32/29/de/3229de5558a641701a09c4c35e04607b.jpg"
            ],

            [
                "name" => "Pomona Sprout",
                "type" => "Witch",
                "house_id" => 4,
                "wand" => "Dragon Heartstring",
                "specialisation" => "Herbology, Magical Plants",
                "patronus" => "None",
                "title" => "Head of Hufflepuff House and Professor of Herbology at Hogwarts",
                "bio" => "Pomona Sprout is the Herbology professor at Hogwarts and the Head of Hufflepuff House. Known for her nurturing personality and deep knowledge of magical plants, Professor Sprout is a beloved teacher and a fierce defender of the school. She played a key role in defending Hogwarts during the final battle against Voldemort.",
                "image" => "https://static.wikia.nocookie.net/heroes-and-villain/images/8/8e/Pomona_Sprout.png",
                "background_image" => "https://variety.com/wp-content/uploads/2023/06/Screen-Shot-2023-06-13-at-3.49.25-PM.png?w=1000&h=667&crop=1&resize=1360%2C907"
            ],

            [
                "name" => "Narcissa Malfoy",
                "type" => "Witch",
                "house_id" => 2,
                "wand" => "Unknown",
                "specialisation" => "Occlumency, Protective Magic",
                "patronus" => "Unknown",
                "title" => "Matriarch of the Malfoy Family, Member of the Noble House of Black",
                "bio" => "Narcissa Malfoy (née Black) is a pure-blood witch from the prestigious Black family and the wife of Lucius Malfoy. Though never a Death Eater herself, she was deeply embedded in Voldemort's circle through her family ties. Known for her cool demeanor and fierce loyalty to her family, Narcissa defied Voldemort by lying to him about Harry Potter's death — a pivotal moment that helped save the wizarding world. Above all, she is a mother who would go to any length to protect her son, Draco.",
                "quote" => "'I see that being Dumbledore's favourite has given you a false sense of security, Harry Potter. But Dumbledore won't always be there to protect you.'",
                "image" => "https://i.pinimg.com/736x/5f/05/ea/5f05ea203fc8f8ae9473dc63f476670e.jpg",
                "background_image" => "https://i.pinimg.com/1200x/d2/ac/bd/d2acbd33d2cf2756456d47ca8569d902.jpg",
            ]

        ];
        
        foreach($wizards as $wizard){
            Wizard::create($wizard);
        }
    }
}