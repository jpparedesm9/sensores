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
use AppBundle\Entity\Test;

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
      $filename="hola.csv";
      $uploadDir = $this->getContainer()->get('kernel')->getRootDir() . '/../uploads/';

      $path=$uploadDir.$filename;

      $output->writeln($uploadDir);

      $config = new LexerConfig();
      $lexer = new Lexer($config);
      $interpreter = new Interpreter();
      $lineNumber = 0;
      $interpreter->addObserver(function(array $columns) use (&$lineNumber) {
          $testObj=new Test();
          $testObj->setHumedad($columns[0]);
          $testObj->setVelocidad($columns[1]);
          $testObj->setCalcio($columns[2]);
          $em = $this->getContainer()->get('doctrine')->getEntityManager();
          $em->persist($testObj);
          $em->flush();
          $lineNumber += 1;
          if ($lineNumber === 1) {
             return;
          }
      // treat $columns here
      });

      $lexer->parse($path, $interpreter);

      //$em = $this->getContainer()->get('doctrine.orm.entity_manager');
      //$categoryRepository = $this->getContainer()->get('sylius.repository.taxon')->getTopRandomCategories(20);
      //$taxonManager = $this->getContainer()->get('sylius.manager.taxon');
      //$name = $input->getArgument('name');
      //$output->writeln("Updating Categories....");
      //foreach ($categoryRepository as $category){
        //$numberProducts = $this->getContainer()->get('sylius.repository.product_taxon')->getNumProductsByCategory($category->getId());
        //$category->setTotalItems($numberProducts);
        //$taxonManager->persist($category);
      //}
      //$taxonManager->flush();
      $output->writeln("Updated!");
    }
}
