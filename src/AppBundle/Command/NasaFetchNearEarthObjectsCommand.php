<?php

namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use AppBundle\Entity\NEO;

class NasaFetchNearEarthObjectsCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('nasa:fetch:near-earth-objects')
            ->setDescription('...')
            ->addArgument('argument', InputArgument::OPTIONAL, 'Argument description')
            ->addOption('option', null, InputOption::VALUE_NONE, 'Option description')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $argument = $input->getArgument('argument');
        $em = $this->getContainer()->get('doctrine')->getEntityManager();

        $curr = new \DateTime();
        $start = clone $curr;
        $start->sub(new \DateInterval('P3D'));

        $client   = $this->getContainer()->get('guzzle.client.api_crm');
        $res = $client->request('GET', $this->getContainer()->getParameter('nasa.NeoWs_url'), [
            'query' =>  [
                'start_date' => $start->format('Y-m-d'),
                'end_date' => $curr->format('Y-m-d'), 
                'detailed' => false,
                'api_key'  => $this->getContainer()->getParameter('nasa.api_key')
            ]
        ]);
        $data = json_decode($res->getBody()->getContents());
        $count = 0;

        foreach ($data->near_earth_objects as $key => $value) {
            $date = $key;
            foreach ($value as $key => $obj) {
                $neo = new NEO();
                $neo->setDate(new \DateTime($date));
                $neo->setName($obj->name);
                $neo->setReference($obj->neo_reference_id);
                $neo->setIsHazardous($obj->is_potentially_hazardous_asteroid);
                $neo->setSpeed($obj->close_approach_data[0]->relative_velocity->kilometers_per_hour);
                $em->persist($neo);
                $count++;
            }

        }
        $em->flush();
        $output->writeln('Near-Earth Objects count '. $count);

    }

}
