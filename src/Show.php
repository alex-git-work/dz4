<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Show extends Command
{
    /**
     * {@inheritDoc}
     */
    protected function configure()
    {
        $this
            ->setName('show')
            ->setDescription('It says hello');

        $this->addArgument('string', InputArgument::REQUIRED, 'string to show');
        $this->addArgument('times', InputArgument::OPTIONAL, 'how many times to show', 2);
    }

    /**
     * {@inheritDoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $string = $input->getArgument('string');
        $times = $input->getArgument('times');

        $result = str_repeat($string . PHP_EOL, $times);

        $output->writeln($result);

        return Command::SUCCESS;
    }
}
