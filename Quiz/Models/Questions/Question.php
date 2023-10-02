<?php

namespace Quiz\Models\Questions;

use Quiz\Models\Answers\Answer;
use Quiz\Models\Difficulty\Difficulty;

abstract class Question
{
    protected Answer $answer;
    protected $category;
    protected Difficulty $difficulty;



    //Getter and Setter
    /**
     * @return Answer
     */
    public function getAnswer(): Answer
    {
        return $this->answer;
    }

    /**
     * @param Answer $answer
     */
    public function setAnswer(Answer $answer): void
    {
        $this->answer = $answer;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category): void
    {
        $this->category = $category;
    }

    /**
     * @return Difficulty
     */
    public function getDifficulty(): Difficulty
    {
        return $this->difficulty;
    }

    /**
     * @param Difficulty $difficulty
     */
    public function setDifficulty(Difficulty $difficulty): void
    {
        $this->difficulty = $difficulty;
    }




}