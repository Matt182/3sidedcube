<?php
namespace App\Tests\Command;

use Symfony\Component\Console\Tester\CommandTester;
use Symfony\Component\Console\Application;

class ConversionTest extends \PHPUnit\Framework\TestCase
{
    public function testCelciusToFarenheit(){
        self::bootKernel();

        $application = new Application(self::$kernel);

        $application->add(new Sync());

        $command = $application->find('convert-celcius-to-farenheit');

        $commandTester = new CommandTester($command);
        $commandTester->execute([
            'command' => $command->getName(),
            'celcius' => '30'
        ]);
    }

    public function testFarenheitToCelcius(){
        $str1 = 'hello';
        $str2 = 'hello2';

        $this->assertSame($str1, $str2);
    }
}