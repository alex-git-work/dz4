<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\ChoiceQuestion;
use Symfony\Component\Console\Question\Question;

class Ask extends Command
{
    /**
     * {@inheritDoc}
     */
    protected function configure()
    {
        $this
            ->setName('quest')
            ->setDescription('Asking questions');
    }

    /**
     * {@inheritDoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $helper = $this->getHelper('question');

        $nameQuestion = new Question('Введите ваше имя: ', 'как вас там..');
        $name = $helper->ask($input, $output, $nameQuestion);

        $ageQuestion = new Question('Введите ваш возраст: ', 'не указан');
        $age = $helper->ask($input, $output, $ageQuestion);

        $sexQuestion = new ChoiceQuestion('Ваш пол (м)', ['м', 'ж'], 0);
        $sexQuestion->setErrorMessage('Нужно выбрать из предложенных вариантов');
        $sex = $helper->ask($input, $output, $sexQuestion);

        $result = 'Здравствуйте, ' . $name . '. Ваш возраст: ' . $age . '. Ваш пол: ' . $sex;
        $output->writeln($result);

        return Command::SUCCESS;
    }
}
