<?php

namespace mpcmf\apps\mpcmfWeb\commands\server;


use mpcmf\system\application\consoleCommandBase;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Async MPCMF Server
 *
 * @author Gregory Ostrovsky <greevex@gmail.com>
 */
class run
    extends consoleCommandBase
{

    protected function defineArguments()
    {
        // TODO: Implement defineArguments() method.
    }

    protected function handle(InputInterface $input, OutputInterface $output)
    {
        exit('not implemented');
    }
}
