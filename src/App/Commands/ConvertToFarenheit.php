<?php
namespace Console\App\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

class ConvertToFarenheit extends Command
{
    protected function configure(){
        $this->setName('convert-celcius-to-farenheit')
            ->setDescription('Converts Celcius to Farenheit')
            ->setHelp('Demonstration of custom commands created by Symfony Console component.')
            ->addArgument('celcius', InputArgument::REQUIRED, 'Pass the celius value.');
    }

    protected function execute(InputInterface $input, OutputInterface $output){
        $celcius = $input->getArgument('celcius');
        $farenheit = ($celcius * 1.8) + 32;
        $output->writeln($celcius . " Celcius to Farenheit: " . $farenheit);
        return 0;
    }
}