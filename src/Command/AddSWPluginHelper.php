<?php

declare(strict_types=1);

namespace CliSWUpdater\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(name: 'cliSW:plugin:add')]
class AddSWPluginHelper extends Command
{

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        //move SW Plugin from git repository to shopwar src folder. Should help execuding complicated commands.
        return Command::FAILURE;
    }
    protected function configure(): void {}
}
