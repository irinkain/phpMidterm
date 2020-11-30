<?php

use App\Models\Models\Options;
use App\Models\Models\Question;
use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $question1 = new Question();
        $question1->topic_id = 1;
        $question1->question_text = 'romel wels sheikmna php????:';
        $question1->save();

        $q1answer1 = new Options();
        $q1answer1->question_id = 1;
        $q1answer1->option = '1995';
        $q1answer1->correct = 1;
        $q1answer1->save();

        $q1answer2 = new Options();
        $q1answer2->question_id = 1;
        $q1answer2->option = '2020';
        $q1answer2->save();

        $q1answer3 = new Options();
        $q1answer3->question_id = 1;
        $q1answer3->option = 'ar vici';
        $q1answer3->save();

        $question2 = new Question();
        $question2->topic_id = 1;
        $question2->question_text = 'es aris text??';
        $question2->save();

        $q2answer1 = new Options();
        $q2answer1->question_id = 2;
        $q2answer1->option = 'kiii';
        $q2answer1->save();

        $q2answer2 = new Options();
        $q2answer2->question_id = 2;
        $q2answer2->option = 'araa';
        $q2answer2->correct = 1;
        $q2answer2->save();

        $q2answer3 = new Options();
        $q2answer3->question_id = 2;
        $q2answer3->option = 'arvicii';
        $q2answer3->save();

        $question3 = new Question();
        $question3->topic_id = 1;
        $question3->question_text = 'ramdeni clis xar?:';
        $question3->save();

        $q3answer1 = new Options();
        $q3answer1->question_id = 3;
        $q3answer1->option = 'me var 21 clis';
        $q3answer1->correct = 1;
        $q3answer1->save();

        $q3answer2 = new Options();
        $q3answer2->question_id = 3;
        $q3answer2->option = 'mevar 22 clis';
        $q3answer2->save();

        $q3answer3 = new Options();
        $q3answer3->question_id = 3;
        $q3answer3->option = 'mevar 23 clis';
        $q3answer3->save();
    }
}
