#!/usr/bin/env php
<?php
// application.php
declare(strict_types=1);

namespace CliSWUpdater;

require __DIR__ . '/vendor/autoload.php';


use Symfony\Component\Console\Application;
use CliSWUpdater\Command\CheckSWVersionCommand;
use CliSWUpdater\Command\AddSWPluginHelper;

$application = new Application();

// ... register commands
$application->add(new CheckSWVersionCommand());

$application->run();
