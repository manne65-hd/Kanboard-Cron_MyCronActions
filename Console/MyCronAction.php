<?php

namespace Kanboard\Plugin\Cron_MyCronActions\Console;

use Kanboard\Console\BaseCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class MyCronAction
 *
 */
class MyCronAction extends BaseCommand
{
    protected function configure()
    {
        $this
            ->setName('mycronaction')
            ->setDescription('Display "My Cron Action" on the console')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('My Cron Action');
    }
}
