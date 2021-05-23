<?php

namespace Kanboard\Plugin\Cron_MyCronActions\Console;

use Kanboard\Console\BaseCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;


/**
 * Class MyCronAction
 *
 */
class CreateTask extends BaseCommand
{
    protected function configure()
    {
        $this
            ->setName('mycron:create-task')
            ->setDescription('Create a task')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $newTaskId = $this->createTask();
        if ($newTaskId > 0) {
            $output->writeln('Created a new task with ID: ' . $newTaskId);
        } else {
            $output->writeln('Failed creating the new task.');
        }
    }

    private function createTask()
    {
        $taskId = $this->taskCreationModel->create(array(
            'project_id'  => 1,
            'title'       => 'A new task via CRON-Plugin',
            'description' => 'A short description for the newly created task ...',
            'creator_id'  => 1,
        ));

        return $taskId;
    }
}
