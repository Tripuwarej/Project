<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Attachments\ButtonTemplate;

class BotManController extends Controller
{
    public function handle()
    {
        $botman = app('botman');

        $botman->hears('{message}', function ($botman, $message)
        {
            if ($message == '1') {
                $botman->reply('ควบคุมอาหาร: รับประทานอาหารที่มีคุณค่าทางโภชนาการสูง เช่น ผักผลไม้สด และลดการบริโภคอาหารที่มีน้ำตาล');
            } elseif ($message == '2') {
                $botman->reply('การปรับปริมาณยาของโรคเบาหวานควรทำโดยการปรึกษาแพทย์หรือผู้ให้การรักษาก่อนที่จะทำการลดปริมาณยา');
            } elseif ($message == '3') {
                $botman->reply('กำลังดำเนินการส่งลิ้งค์ห้องให้ค่ะ...');
            } else {
                $botman->reply('ขอโทษครับ ฉันไม่เข้าใจคำถามของคุณ');

            }

        });
        $botman->listen();
    }

    public function questionList($botman)
    {
        $botman->ask($question, function(Answer $answer){
            dd($answer->getValue());
        });

        $question->Question::create('กรุณาเลือกคำถามที่ต้องการทราบ')
        ->addButtons([
            Button::create('น้ำตาลต่ำลดยาเลยได้ไหม')->value('1'),
            Button::create('น้ำตาลสูง ทานอะไรได้บ้าง')->value('2'),
            Button::create('ติดต่อพยาบาล')->value('3'),
        ]);



    }

}


        // $this->ask('คุณต้องการทราบอะไร?', function (Answer $answer) {
        //     $selectedOption = $answer->getText();

        //     if ($selectedOption === 'ข้อ1') {
        //         $this->say('การปรับปริมาณยาของโรคเบาหวานควรทำโดยการปรึกษาแพทย์หรือผู้ให้การรักษาก่อนที่จะทำการลดปริมาณยา...');
        //     } elseif ($selectedOption === 'ข้อ2') {
        //         $this->say('การควบคุมอาหาร: รับประทานอาหารที่มีคุณค่าทางโภชนาการสูง เช่น ผักผลไม้สด และลดการบริโภคอาหารที่มีน้ำตาล...');
        //     } elseif ($selectedOption === 'ข้อ3') {
        //         $this->bot->startConversation(new ContactNurseConversation());
        //     } else {
        //         $this->say('ขอโทษครับ ฉันไม่เข้าใจคำถามของคุณ');




//    public function handle()
//    {
//        $botman = app('botman');
//
//        $botman->hears('{message}', function($botman, $message) {
//
//            if ($message == 'hi') {
//                $this->askList($botman);
//            }elseif ($message == 'hi'){
//                $botman->reply("write 'hi' for testing...");
//            }
//
//        });
//
//        $botman->listen();
//    }

    /**
     * Place your BotMan logic here.
     */
//    public function askList($botman)
//    {
//        $botman->ask('Hello! What is your Name?', function(Answer $answer) {
//
//            $name = $answer->getText();
//
//            $this->say('Nice to meet you '.$name);
//        });
//    }













//    public function askList($botman)
//    {
//        $botman->ask('คุณอยากทราบอะไร 1.น้ำตาลในเลือดต่ำสามารถลดปริมาณยาได้เลยหรือไม่? 2.น้ำตาลในเลือดสูงต้องทำอย่างไร 3.ติดต่อพยาบาล', function($botman,Answer $answer) {
//            $number = $answer->getText();
//            if ($number == '1') {
//                $this->answerOne($botman);
//            }elseif ($number == '2'){
//                $this->answerTwo($botman);
//            }elseif ($number == '3') {
//                $this->answerThree($botman);
//            }else{
//                $botman->reply("write 'hi' for testing...");
//            }
//        });
//    }
//    public function answerOne($botman)
//    {
//        $botman->hears('{message}', function($botman, $message) {
//            if ($message == '1') {
//                $botman->reply("การปรับปริมาณยาของโรคเบาหวานควรทำโดยการปรึกษาแพทย์หรือผู้ให้การรักษาก่อนที่จะทำการลดปริมาณยา การตรวจวัดระดับน้ำตาลในเลือดที่ต่ำลงอาจเกิดจากหลายสาเหตุ เช่น การปรับเปลี่ยนระบบการรับประทานอาหาร การออกกำลังกายมากขึ้น หรือการเปลี่ยนแปลงสภาพร่างกาย อย่างไรก็ตามการปรับปริมาณยาควรทำในลักษณะที่ปลอดภัยโดยการปฏิบัติตามคำแนะนำของแพทย์ เพื่อป้องกันผลข้างเคียงที่ไม่พึงประสงค์และควบคุมโรคอย่างเหมาะสม แม้จะมีการลดปริมาณยาก็ควรมีการติดตามอย่างใกล้ชิดกับแพทย์เพื่อการดูแลที่เหมาะสมต่อสภาพร่างกายของแต่ละบุคคล");
//            }elseif ($message == 'hi'){
//                $botman->reply("write 'hi' for testing...");
//            }
//        });
//    }


