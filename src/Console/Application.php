<?php

namespace Sourcebox\HaveIBeenPwnedCLI\Console;

use Symfony\Component\Console\Application as BaseApplication;
use Symfony\Component\Console\Input\InputInterface;

class Application extends BaseApplication
{
    /**
     * Application name
     */
    const NAME = 'HaveIBeenPwned CLI Checker';

    /**
     * Application version
     */
    const VERSION = '1.0';

    /**
     * Gets the name of the command based on input. Normally, this is taken
     * from the first argument, but since this is a single Command Application
     * we override it with our command.
     *
     * @param InputInterface $input The input interface
     *
     * @return string The command name
     */
    protected function getCommandName(InputInterface $input)
    {
        return 'check:csv';
    }

    /**
     * Overridden so that the application doesn't expect the command
     * name to be the first argument.
     */
    public function getDefinition()
    {
        $inputDefinition = parent::getDefinition();
        // Clear out the normal first argument, which is the command name.
        $inputDefinition->setArguments();

        return $inputDefinition;
    }
}
