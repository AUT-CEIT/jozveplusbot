<?php
namespace Longman\TelegramBot\Commands\UserCommands;

use Longman\TelegramBot\Commands\UserCommand;
use Longman\TelegramBot\Request;

/**
 * User "/start" command
 */
class _StartCommand extends UserCommand
{

    protected $name = 'start';
    protected $description = 'شروع کار با ربات';
    protected $usage = '/start';

    public function execute()
    {
        $message = $this->getMessage();
        $data = [];
        $data['chat_id'] = $message->getChat()->getId();

        $data['text'] = 'تست تست';

        return Request::sendMessage($data);
    }
}
