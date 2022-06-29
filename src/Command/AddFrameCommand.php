<?php

namespace App\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\FrameFactory;

#[AsCommand(
    name: 'app:add-frame',
    description: 'Add a short description for your command',
)]
class AddFrameCommand extends Command
{

    public function __construct(private EntityManagerInterface $manager)
    {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this
            ->addArgument('title', InputArgument::REQUIRED, 'Title of a frame')
            ->addArgument('content', InputArgument::REQUIRED, 'Content of a frame')
            ->addArgument('TEXT', InputArgument::REQUIRED, 'TEXT of a frame')
            ->addArgument('OPTIMISER', InputArgument::REQUIRED, 'OPTIMISER of a frame')
            ->addArgument('LR', InputArgument::REQUIRED, 'Learning Rate of a frame')
            ->addArgument('I_EPOCHS', InputArgument::REQUIRED, 'EPOCH ITERATION of a frame')
            ->addArgument('SE_EPOCH', InputArgument::REQUIRED, 'MAX EPOCH of a frame')
            ->addArgument('DESTINATION', InputArgument::REQUIRED, 'DESTINATION of a frame') 
            ->addArgument('SEED', InputArgument::REQUIRED, 'SEED of a frame')
          
            //->addOption('option1', null, InputOption::VALUE_NONE, 'Option description')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $title = $input->getArgument('title');

        if ($title) {
            $io->note(sprintf('Title: %s', $title));
        }

        $content = $input->getArgument('content');

        if ($content) {
            $io->note(sprintf('Content: %s', $content));
        }

        $TEXT = $input->getArgument('TEXT');
        if ($TEXT) {
            $io->note(sprintf('TEXT: %s', $TEXT));
        }

        $OPTIMISER = $input->getArgument('OPTIMISER');
        if ($OPTIMISER) {
            $io->note(sprintf('OPTIMISER: %s', $OPTIMISER));
        }

        $LR = $input->getArgument('LR');
        if ($LR) {
            $io->note(sprintf('LR: %s', $LR));
        }

        $DESTINATION = $input->getArgument('DESTINATION');
        if ($DESTINATION) {
            $io->note(sprintf('DESTINATION: %s', $DESTINATION));
        }

        $SEED = $input->getArgument('SEED');
        if ($SEED) {
            $io->note(sprintf('SEED: %s', $SEED));
        }

        $i_EPOCH = $input->getArgument('I_EPOCHS');
        if ($i_EPOCH) {
            $io->note(sprintf('I_EPOCHS: %s', $i_EPOCH));
        }

        $Se_EPOCH = $input->getArgument('SE_EPOCH');
        if ($Se_EPOCH) {
            $io->note(sprintf('SE_EPOCH: %s', $Se_EPOCH));
        }

        $entity = FrameFactory::create(
            $title,
            $content,
            $TEXT,
            $OPTIMISER,
            $LR,
            $DESTINATION,
            $SEED,
            $i_EPOCH,
            $Se_EPOCH,
        );

        $this ->manager->persist($entity);
        $this ->manager->flush();
//        if ($input->getOption('option1')) {
//            // ...
//        }

        $io->success('Post is saved: ');
        return Command::SUCCESS;
    }
}
