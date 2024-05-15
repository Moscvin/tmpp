<?php

namespace App\Console\Commands;

use App\Models\Question;
use Illuminate\Console\Command;

class CreateQuestionCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'question:create {--question=} {--answer=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates a new question';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $question = $this->option('question'); // Folosește $this->option() pentru opțiuni numite
        $answer = $this->option('answer'); // Folosește $this->option() pentru opțiuni numite
        Question::create([
            'question' => $question,
            'answer'=> $answer,
        ]);
        $this->info('Question is created successfully! Question: ' . $question . ', Answer: ' . $answer);
    }
}
