<?php

namespace Tests\AppBundle\Controller;

use PHPUnit\Framework\TestCase;
use AppBundle\Entity\NEO;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\Persistence\ObjectRepository;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class NEORepositoryTest extends KernelTestCase
{
    /**
     * @var \Doctrine\ORM\EntityManager
     */
    private $em;

    /**
     * {@inheritDoc}
     */
    protected function setUp()
    {
        self::bootKernel();

        $this->em = static::$kernel->getContainer()
            ->get('doctrine')
            ->getManager();

        $this->em->getConnection()->beginTransaction(); // will rollback

    	$neo1 = new NEO();
    	$neo1->setName('test1');
    	$neo1->setReference('123');
    	$neo1->setSpeed(5000);
    	$neo1->setDate(new \DateTime('2017-09-15'));
    	$neo1->setIsHazardous(true);
    	$this->em->persist($neo1);

    	$neo2 = new NEO();
    	$neo2->setName('test2');
    	$neo2->setReference('124');
    	$neo2->setSpeed(4000);
    	$neo2->setDate(new \DateTime('2017-09-15'));
    	$neo2->setIsHazardous(false);
    	$this->em->persist($neo2);

    	$neo3 = new NEO();
    	$neo3->setName('test3');
    	$neo3->setReference('125');
    	$neo3->setSpeed(7000);
    	$neo3->setDate(new \DateTime('2017-08-15'));
    	$neo3->setIsHazardous(true);
    	$this->em->persist($neo3);

    	$neo4 = new NEO();
    	$neo4->setName('test4');
    	$neo4->setReference('125');
    	$neo4->setSpeed(2000);
    	$neo4->setDate(new \DateTime('2017-08-15'));
    	$neo4->setIsHazardous(true);
    	$this->em->persist($neo4);
    	$this->em->flush();
    }



    public function testHazardousNEO()
    {
		$hazardeous = $this->em
            ->getRepository(NEO::class)
            ->getHazardousNEO();
		$this->assertEquals(3, count($hazardeous));
    }

    public function testfastestNEO()
    {
		$fastest = $this->em
            ->getRepository(NEO::class)
            ->getFastestNEO();

		$this->assertEquals(1, count($fastest)); // non hazardeous
		$this->assertEquals(4000, $fastest[0]['speed']);

		$fastest = $this->em
            ->getRepository(NEO::class)
            ->getFastestNEO(1);
		$this->assertEquals(7000, $fastest[0]['speed']);

		$this->assertEquals(3, count($fastest));  // hazardeous

    }


    public function testbestYearNEO()
    {
		$bestYear = $this->em
            ->getRepository(NEO::class)
            ->getBestYearNEO();

		$this->assertEquals(2017, $bestYear[0]['year']); // non hazardeous

		$bestYear = $this->em
            ->getRepository(NEO::class)
            ->getBestYearNEO(1);

		$this->assertEquals(2017, $bestYear[0]['year']); // non hazardeous

    }

    public function testbestMonthNEO()
    {
		$bestMonth = $this->em
            ->getRepository(NEO::class)
            ->getBestMonthNEO();

		$this->assertEquals(9, $bestMonth[0]['month']); // non hazardeous

		$bestMonth = $this->em
            ->getRepository(NEO::class)
            ->getBestMonthNEO(1);

		$this->assertEquals(8, $bestMonth[0]['month']); // hazardeous

    }

    /**
     * {@inheritDoc}
     */
    protected function tearDown()
    {
        parent::tearDown();

        $this->em->close();
        $this->em = null; // avoid memory leaks
    }
	

}
