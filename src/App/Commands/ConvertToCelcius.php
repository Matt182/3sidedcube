<?php
namespace Console\App\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

class ConvertToCelcius extends Command
{
    protected function configure(){
        $this->setName('convert-farenheit-to-celcius')
            ->setDescription('Converts Farenheit to Celcius')
            ->setHelp('Demonstration of custom commands created by Symfony Console component.')
            ->addArgument('farenheit', InputArgument::REQUIRED, 'Pass the farenheit value.');
    }

    protected function execute(InputInterface $input, OutputInterface $output){
        $farenheit = $input->getArgument('farenheit');
        $celcius = (($farenheit - 32)/1.8);
        $output->writeln($farenheit . " Farenheit to Celcius: " . $celcius);
        return 0;
    }
}