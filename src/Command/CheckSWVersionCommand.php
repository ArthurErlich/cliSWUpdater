<?php

declare(strict_types=1);

namespace CliSWUpdater\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(name: 'cliSW:version:check')]
class CheckSWVersionCommand extends Command
{
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        // $versionLong = shell_exec("php ../bin/console --version");
        // $keyString = "Shopware ";
        // $versionNumberLength = count(count_chars("6.6.0.0", 0));
        // $keyLength = count(count_chars($keyString, 0));
        // $versionPos = Strpos($versionLong, $keyString, $keyLength);
        // $version = substr($versionLong, $versionPos, $versionNumberLength);


        $output->writeln(count_chars("6.6.0.0", 0) + "");
        
        return Command::FAILURE;
    }
    protected function configure(): void {}
}
