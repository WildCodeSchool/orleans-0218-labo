<?php
/**
 * Created by PhpStorm.
 * User: wilder22
 * Date: 04/07/18
 * Time: 16:32
 */

namespace AppBundle\Command;


use AppBundle\Service\MailService;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class MailCommand extends Command
{
    private $mailService;

    public function __construct(MailService $mailService)
    {
        $this->mailService = $mailService;
        parent::__construct();
    }

    protected function configure()
    {
        $this->setName('app.mailAuto')
            ->setDescription('Envoyer les mails de retard')
            ->setHelp('Envoyer les mails de retard app/console app:mailAuto');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->mailService->sendAll();
        $output->writeln('Les mails de retard ont été envoyés');
    }
}