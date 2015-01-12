<?php namespace Anomaly\UsersModule\Role\Form\Handler;

/**
 * Class ButtonsHandler
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\UsersModule\Role\Form\Handler
 */
class ButtonsHandler
{

    /**
     * Return the table buttons.
     *
     * @return array
     */
    public function handle()
    {
        return [
            'cancel',
            'delete',
        ];
    }
}
