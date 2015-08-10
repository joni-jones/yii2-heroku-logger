<?php
namespace jones\herokulogger;

use yii\log\Target;
use yii\base\InvalidConfigException;

class HerokuTarget extends Target
{
    /**
     * Write yii logs to stdout
     *
     * @access public
     * @return void
     */
    public function export()
    {
        $messages = implode("\n", array_map([$this, 'formatMessage'], $this->messages))."\n";
        $stdout = fopen('php://stdout', 'w');
        if ($stdout === false) {
            throw new InvalidConfigException('Unable to open stdout stream');
        }
        fwrite($stdout, $messages);
        fclose($stdout);
    }
}
