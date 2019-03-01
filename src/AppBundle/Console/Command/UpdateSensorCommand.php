<?php
namespace AppBundle\Console\Command;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Goodby\CSV\Import\Standard\Lexer;
use Goodby\CSV\Import\Standard\Interpreter;
use Goodby\CSV\Import\Standard\LexerConfig;
use AppBundle\Entity\SensorInfo;

class UpdateSensorCommand extends ContainerAwareCommand
{

    protected function configure()
    {
        $this
            ->setName('sensor:updatedb')
            ->setDescription('Updating items under each category')
            ->addArgument(
                'name',
                InputArgument::OPTIONAL,
                'Who do you want to greet?'
            )
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
      $filename="var_contaminacion.csv";
      $uploadDir = $this->getContainer()->get('kernel')->getRootDir() . '/../uploads/';
      $processed = $this->getContainer()->get('kernel')->getRootDir() . '/../processed/';
      $files =array_diff(scandir($uploadDir), array('.', '..'));
      foreach($files as $filename){
        $path=$uploadDir.$filename;

        $output->writeln($uploadDir);

        $config = new LexerConfig();
        $lexer = new Lexer($config);
        $interpreter = new Interpreter();
        $lineNumber = 0;
        $interpreter->addObserver(function(array $columns) use (&$lineNumber) {
          $lineNumber += 1;
          if ($lineNumber === 1) {
             return;
          }
            $testObj=new SensorInfo();
            $testObj->setStation($columns[0]);
            $testObj->setCo($columns[2]);
            $testObj->setDir($columns[3]);
            $testObj->setHum($columns[4]);
            $testObj->setLlu($columns[5]);
            $testObj->setNo2($columns[6]);
            $testObj->setO3($columns[7]);
            $testObj->setPm25($columns[8]);
            $testObj->setPm10($columns[9]);
            $testObj->setPre($columns[10]);
            $testObj->setRs($columns[11]);
            $testObj->setSo2($columns[12]);
            $testObj->setTmp($columns[13]);
            $testObj->setVel($columns[14]);
            $em = $this->getContainer()->get('doctrine')->getEntityManager();
            $em->persist($testObj);
            $em->flush();
        });

        $lexer->parse($path, $interpreter);
        rename($uploadDir.$filename, $processed . pathinfo($filename, PATHINFO_BASENAME));
        $output->writeln("Updated!");
      }
    }
}
