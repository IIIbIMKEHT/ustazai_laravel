<?php

namespace Database\Seeders;

use App\Models\MaterialType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MaterialType::create([
            'title_kk' => 'Тест',
            'title_ru' => 'Тест',
            'description_kk' => 'Оқушылардың оқу материалын білуі мен түсінуін тексеруге арналған тесттер жиынтығы.',
            'description_ru' => 'Набор тестов предназначенных для проверки знаний и понимания учебного материала учениками.',
            'image' => '/images/test.svg',
        ]);
        MaterialType::create([
            'title_kk' => 'Викторина',
            'title_ru' => 'Викторина',
            'description_kk' => 'Білімді тез тексеруге көмектесетін қысқа сұрақтардан тұратын интерактивті бағалау түрі.',
            'description_ru' => 'Интерактивная форма оценки, состоящая из коротких вопросов, которая помогает быстро проверить знания и вовлечь учащихся.',
            'image' => '/images/icon-tool-math-problem.svg',
        ]);
        MaterialType::create([
            'title_kk' => 'Интеллектуалды ойын',
            'title_ru' => 'Интеллектуальная игра',
            'description_kk' => 'Ақыл-ой қабілеттерін дамытуға бағытталған ойын элементтері мен логика мен білім тапсырмаларын біріктіретін оқу белсенділігі.',
            'description_ru' => 'Учебная активность, сочетающая в себе элементы игры и задания на логику и знания, направленная на развитие умственных способностей.',
            'image' => '/images/icon-tool-academic-content-generator.svg',
        ]);
        MaterialType::create([
            'title_kk' => 'Жаттығулар',
            'title_ru' => 'Упражнение',
            'description_kk' => 'Оқытылған материалды бекітуге және оқушылардың дағдыларын дамытуға арналған практикалық тапсырмалар.',
            'description_ru' => 'Практические задания, разработанные для закрепления изученного материала и развития навыков у учащихся.',
            'image' => '/images/icon-tool-rewriter.svg',
        ]);
        MaterialType::create([
            'title_kk' => 'Конспект',
            'title_ru' => 'Конспект',
            'description_kk' => 'Тез танысуға және қайталауға арналған оқу материалының негізгі тармақтарының қысқаша мазмұны.',
            'description_ru' => 'Сжатое изложение ключевых моментов учебного материала, предназначенное для быстрого ознакомления и повторения.',
            'image' => '/images/icon-tool-vocab-based-text-generator.svg',
        ]);
        MaterialType::create([
            'title_kk' => 'Зертханалық жұмыс',
            'title_ru' => 'Лабораторная работа',
            'description_kk' => 'Нақты ғылыми құбылыстарды немесе процестерді зерттеу мақсатында эксперименттер немесе зерттеулер жүргізуді көздейтін практикалық тапсырма.',
            'description_ru' => 'Практическое задание, предполагающее выполнение экспериментов или исследований, с целью изучения конкретных научных явлений или процессов.',
            'image' => '/images/icon-tool-science-lab.svg',
        ]);
        MaterialType::create([
            'title_kk' => 'Сабақ жоспары',
            'title_ru' => 'План урока',
            'description_kk' => 'Белгілі бір іс-шаралар мен материалдармен сабақтың мақсаттарын, міндеттері мен барысын сипаттайтын мұғалімге арналған құрылымдық нұсқаулық.',
            'description_ru' => 'Структурированное руководство для учителя, описывающее цели, задачи и ход урока с определенными видами деятельности и материалами.',
            'image' => '/images/icon-tool-lesson-plan-generator.svg',
        ]);
    }
}
