<?php

namespace Kanboard\Plugin\Cron_MyCronActions\Console;

use Kanboard\Console\BaseCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class MyCronAction
 *
 */
class MyOtherCronAction extends BaseCommand
{
    protected function configure()
    {
        $this
            ->setName('mycron:other-action')
            ->setDescription('Display "My OTHER Cron Action" on the console')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('My OTHER Cron Action');
    }
}
