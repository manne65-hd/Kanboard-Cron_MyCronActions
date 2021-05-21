<?php

namespace Kanboard\Plugin\Cron_MyCronActions;

use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{
    public function initialize()
    {
        // create new CLI-command
        $this->cli->add(new MyCronAction());
    }

    public function getPluginName()
    {
        return 'Cron_MyCronActions';
    }

    public function getPluginDescription()
    {
        return t('Add new cron-actions via plugin');
    }

    public function getPluginAuthor()
    {
        return 'Manfred Hoffmann';
    }

    public function getPluginVersion()
    {
        return '0.0.1';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/manne65-hd/Kanboard-Cron_MyCronActions';
    }
}
?>
