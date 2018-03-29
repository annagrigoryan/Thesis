<?php

namespace Tests\TripPlanneraBundle\Service;

use TripPlanneraBundle\Document\Attraction;
use TripPlanneraBundle\Document\Location;
use TripPlanneraBundle\Service\MatchNamesService;

class MatchNamesServiceTest extends \PHPUnit_Framework_TestCase
{
    private $matchNamesService;

    public function setUp()
    {
        $this->matchNamesService = new MatchNamesService();
    }

    public function testRemoveStopWords()
    {
        $data = ['/\bthe\b/', '/\bla\b/', '/\ba\b/', '/\bthe\b/', '/\bis\b/', '/\ban\b/', '/\bin\b/'];
        $mock = $this->getMockBuilder(MatchNamesService::class)
            ->setMethods(['getStopWords'])
            ->getMock();

        $mock->expects($this->any())
            ->method('getStopWords')
            ->willReturn($data);

        $this->assertEquals('louvre museum', $mock->removeStopWords('the louvre museum'));
        $this->assertEquals('louvre museum', $mock->removeStopWords('is the louvre museum'));
        $this->assertEquals('louvre museum', $mock->removeStopWords('louvre the museum'));
        $this->assertEquals('louvre museum', $mock->removeStopWords('louvre museum the'));
        $this->assertEquals('louvre museum', $mock->removeStopWords('louvre museum the is'));
        $this->assertEquals('louvre museum', $mock->removeStopWords('la louvre la museum the is'));
        $this->assertEquals('garden', $mock->removeStopWords('a garden'));
        $this->assertEquals('garden', $mock->removeStopWords('a garden a'));
        $this->assertEquals('garden green', $mock->removeStopWords('garden is a green'));
        $this->assertEquals('Colosseum oval', $mock->removeStopWords('the Colosseum is an oval'));
        $this->assertEquals('Colosseum oval', $mock->removeStopWords('the in Colosseum is an oval'));
        $this->assertEquals('Colosseum oval', $mock->removeStopWords('the in la Colosseum is an oval'));
    }

    public function testConvertToSingular()
    {
        $this->assertEquals('horse', $this->matchNamesService->convertToSingular('horses'));
        $this->assertEquals('garden', $this->matchNamesService->convertToSingular('gardens'));
        $this->assertEquals('grammy', $this->matchNamesService->convertToSingular('grammies'));
        $this->assertEquals('child', $this->matchNamesService->convertToSingular('children'));
        $this->assertEquals('move', $this->matchNamesService->convertToSingular('moves'));
        $this->assertEquals('foot', $this->matchNamesService->convertToSingular('feet'));
        $this->assertEquals('goose', $this->matchNamesService->convertToSingular('geese'));
        $this->assertEquals('man', $this->matchNamesService->convertToSingular('men'));
        $this->assertEquals('person', $this->matchNamesService->convertToSingular('people'));
        $this->assertEquals('valve', $this->matchNamesService->convertToSingular('valves'));
        $this->assertEquals('sheep', $this->matchNamesService->convertToSingular('sheep'));
        $this->assertEquals('deer', $this->matchNamesService->convertToSingular('deer'));
        $this->assertEquals('Abo', $this->matchNamesService->convertToSingular('Abo'));
        $this->assertEquals('move move', $this->matchNamesService->convertToSingular('moves moves'));
        $this->assertEquals('move move grammy', $this->matchNamesService->convertToSingular('moves moves grammies'));
        $this->assertEquals('move move grammy foot', $this->matchNamesService->convertToSingular('moves moves grammies feet'));
        $this->assertEquals('move grammy foot goose', $this->matchNamesService->convertToSingular('moves grammies feet geese'));
    }

    public function testNormalizeChars()
    {
        $this->assertEquals('Sagrada Familia', $this->matchNamesService->normalizeChars('Sagrada Família'));
        $this->assertEquals('Mexico', $this->matchNamesService->normalizeChars('México'));
        $this->assertEquals('OOps', $this->matchNamesService->normalizeChars('ÓÕpš'));
        $this->assertEquals('aaagguioeertyuod', $this->matchNamesService->normalizeChars('àáâğģùìóèéŕťýúőď'));
        $this->assertEquals('aaaaaa', $this->matchNamesService->normalizeChars('åāăąãä'));
        $this->assertEquals('zzz', $this->matchNamesService->normalizeChars('źżž'));
        $this->assertEquals('ccc', $this->matchNamesService->normalizeChars('çćč'));
        $this->assertEquals('nnnn', $this->matchNamesService->normalizeChars('ñńņň'));
        $this->assertEquals('lll', $this->matchNamesService->normalizeChars('ĺļľ'));
        $this->assertEquals('kgd', $this->matchNamesService->normalizeChars('ķğđ'));
        $this->assertEquals('sss', $this->matchNamesService->normalizeChars('śšş'));
        $this->assertEquals('eeeeeeee', $this->matchNamesService->normalizeChars('êëēėęěĕə'));
        $this->assertEquals('ttr', $this->matchNamesService->normalizeChars('țţř'));
        $this->assertEquals('uuuuu', $this->matchNamesService->normalizeChars('ůūűųü'));
        $this->assertEquals('iiii', $this->matchNamesService->normalizeChars('ïîıį'));
    }

    public function testLevenshteinUTF()
    {
        $this->assertEquals(1, $this->matchNamesService->levenshteinUTF('ÓÕpš', 'OÕpš'));
        $this->assertEquals(1, $this->matchNamesService->levenshteinUTF('Louvr', 'Louvre'));
        $this->assertEquals(1, $this->matchNamesService->levenshteinUTF('Louvrë', 'Louvre'));
        $this->assertEquals(1, $this->matchNamesService->levenshteinUTF('Too', 'too'));
        $this->assertEquals(0, $this->matchNamesService->levenshteinUTF('The Louvre museum', 'The Louvre museum'));
        $this->assertEquals(6, $this->matchNamesService->levenshteinUTF('', 'Louvre'));
        $this->assertEquals(6, $this->matchNamesService->levenshteinUTF('Louvre', ''));
        $this->assertEquals(1, $this->matchNamesService->levenshteinUTF('Louvre museum', 'Louvremuseum'));
    }

    /**
     * @dataProvider testAreTextsSimilarProvider
     */
    public function testAreTextsSimilar($string1, $string2, $data)
    {
        $mock = $this->getMockBuilder(MatchNamesService::class)
            ->setMethods(['removeStopWords'])
            ->getMock();

        $mock->expects($this->any())
            ->method('removeStopWords')
            ->willReturn($data);

        $this->assertEquals(true, $mock->areTextsSimilar($string1, $string2));
    }

    public function testAreTextsSimilarProvider()
    {
        return [
            [
                'The Louvre museum',
                'Louvre museum',
                'louvre museum'
            ],
            [
                'The Louvrë museum',
                'Louvre the muzeum',
                'louvrë museum'
            ],
            [
                'The Louvrë museums',
                'Louvre the muzeum a',
                'louvrë museum'
            ]
        ];
    }

    /**
     * @dataProvider testGetMatchedNameProvider
     */
    public function testGetMatchedName($string1, $parentsNames, $alternativeNames, $data)
    {
        $stopWords = ["/\b'n\b/", "/\b'is\b/", "/\b'the\b/", "/\b'a\b/"];
        $entity = new Attraction();
        $entity->setLocationId('56d90acfb023df635e7b260a');
        $entity->setAlternativeNames($alternativeNames);
        $location = new Location();
        $location->setName('Paris');

        $mock = $this->getMockBuilder(MatchNamesService::class)
            ->setMethods(['getEntityParentsNames', 'getStopWords'])
            ->getMock();

        $mock->expects($this->once())
            ->method('getEntityParentsNames')
            ->willReturn($parentsNames);

        $mock->expects($this->any())
            ->method('getStopWords')
            ->willReturn($stopWords);

        $this->assertEquals($data, $mock->getMatchedName($string1, $entity, $location));
    }

    public function testGetMatchedNameProvider()
    {
        return [
            [
                ['Louvre'],
                'Barcelona Catalonia Province of Barcelona Spain Europe',
                ['Louvre', 'Louvre The', 'Louvre museum', 'Louvre museum is the'],
                'Louvre'
            ],
            [
                ['The Louvre'],
                'Barcelona Catalonia Province of Barcelona Spain Europe',
                ['Louvre', 'Louvre The', 'Louvre museum', 'Louvre museum is the'],
                'The Louvre'
            ],
            [
                ['Is the Louvre museum'],
                'Barcelona Catalonia Province of Barcelona Spain Europe',
                ['Louvre', 'Louvre The', 'Louvre museum', 'Louvre museum is the'],
                'Is the Louvre museum'
            ],
            [
                ['Louvres museum'],
                'Barcelona Catalonia Province of Barcelona Spain Europe',
                ['Louvre', 'Louvre The', 'Louvre museum', 'Louvre museum is the'],
                'Louvres museum'
            ],
            [
                ['central park'],
                'Paris France',
                ['central park yoga'],
                false
            ],
            [
                ['Louvre Palace'],
                'Paris France',
                ['louvre museum'],
                false
            ],
            [
                ['Louvre Abu Dhabi'],
                'Paris France',
                ['Louvre'],
                false
            ]
        ];
    }

    public function testSortStringByAlphabetically()
    {
        $this->assertEquals('amsterdam basilica', $this->matchNamesService->sortStringByAlphabetically('basilica amsterdam'));
        $this->assertEquals('abc acb bac bca cab cba', $this->matchNamesService->sortStringByAlphabetically('bca abc bac cba acb cab'));
    }

    public function testRemoveSpecialChars()
    {
        $this->assertEquals('basilica', $this->matchNamesService->removeSpecialChars('(basilica)'));
        $this->assertEquals('basilica', $this->matchNamesService->removeSpecialChars('&amp;)(*&^%$#@!><.|,/?:(basilica)'));
        $this->assertEquals('basilica', $this->matchNamesService->removeSpecialChars('&amp;)&amp;(*&^%$#@!><.,/?:(basilica)'));
        $this->assertEquals('basilica', $this->matchNamesService->removeSpecialChars('(basilica)&amp;'));
        $this->assertEquals('basilica', $this->matchNamesService->removeSpecialChars('(basilica)&amp;)(*&^%$#@!><.,/?:'));
        $this->assertEquals('basilica åāăąãä', $this->matchNamesService->removeSpecialChars('(*&*%basilica) åāăąãä'));
        $this->assertEquals('ÓÕpš basilica', $this->matchNamesService->removeSpecialChars('ÓÕpš (*&*%basilica)'));
        $this->assertEquals('basilica', $this->matchNamesService->removeSpecialChars('(*&*%basilica)'));
        $this->assertEquals('amsterdam basilica', $this->matchNamesService->removeSpecialChars('amsterdam (*&*%basilica)'));
        $this->assertEquals('amsterdam basilica', $this->matchNamesService->removeSpecialChars('#$%^!amsterdam (*&*%basilica)+)(*&^%'));
        $this->assertEquals('amsterdam Աբո ջան basilica', $this->matchNamesService->removeSpecialChars('#$%^!amsterdam Աբո ջան (*&*%basilica)+)(*&^%'));
        $this->assertEquals('amsterdam basilica amsterdam', $this->matchNamesService->removeSpecialChars('#$%^!amsterdam (*&*%basilica)+)(*&^% amsterdam)(*&^%'));
        $this->assertEquals('amsterdam basilica amsterdam', $this->matchNamesService->removeSpecialChars('-?|&_;amsterdam, (*&*%basilica)+)(*&^% amsterdam)(*&^%'));
        $this->assertEquals('amsterdam Або basilica amsterdam', $this->matchNamesService->removeSpecialChars('-?|&_;amsterdam, Або (*&*%basilica)+)(*&^% amsterdam)(*&^%'));
    }

    public function testRemoveRepetitiveWords()
    {
        $this->assertEquals('basilica sagrada', $this->matchNamesService->removeRepetitiveWords('basilica sagrada sagrada'));
        $this->assertEquals('sagrada basilica', $this->matchNamesService->removeRepetitiveWords('sagrada basilica sagrada sagrada'));
        $this->assertEquals('sagrada basilica', $this->matchNamesService->removeRepetitiveWords('sagrada sagrada basilica sagrada sagrada'));
        $this->assertEquals('sagrada basilica', $this->matchNamesService->removeRepetitiveWords('sagrada sagrada basilica sagrada'));
        $this->assertEquals('sagrada basilica', $this->matchNamesService->removeRepetitiveWords('sagrada basilica sagrada'));
    }

    /**
     * @dataProvider testAreTextsSimilarWithParentNamesProvider
     */
    public function testAreTextsSimilarWithParentNames($string1, $string2, $parentsNames)
    {
        $mock = $this->getMockBuilder(MatchNamesService::class)
            ->setMethods(['areTextsSimilar'])
            ->getMock();

        $mock->expects($this->any())
            ->method('areTextsSimilar')
            ->willReturn(true);

        $this->assertEquals(true, $mock->areTextsSimilarWithParentNames($string1, $string2, $parentsNames));
    }

    public function testAreTextsSimilarWithParentNamesProvider()
    {
        return [
            [
                'basilica sagrada',
                'sagrada basilica',
                'Barcelona Catalonia Province of Barcelona Spain Europe'
            ],
            [
                'basilica of the sagrada',
                'sagrada basilica',
                'Barcelona Catalonia Province of Barcelona Spain Europe'
            ],
            [
                'is the basilica a sagrada for a',
                'sagrada this is a basilica',
                'Barcelona Catalonia Province of Barcelona Spain Europe'
            ],
            [
                'basilica sagrada spain',
                'sagrada of the basilica',
                'Barcelona Catalonia Province of Barcelona Spain Europe'
            ],
            [
                'basilica in the բայց sagrada',
                'sagrada basilica որովհետև',
                'Barcelona Catalonia Province of Barcelona Spain Europe'
            ],
            [
                '&amp;)(*&^%$#@!><.basilica sagrada',
                'sagråda basilica',
                'Barcelona Catalonia Province of Barcelona Spain Europe'
            ],
        ];
    }

    public function testGetLocationParentsNames()
    {
        $location = new Location();
        $parentLocation1 = new Location();
        $parentLocation2 = new Location();
        $parentLocation3 = new Location();
        $ancestorsIds = [
            '58e6834a8facd99d287caa66',
            '58e660268facd99d287bf32e',
            '58e6797a8facd99d287c80d8'
        ];
        $parentsNames = [
            'United Kingdom',
            'England',
            'Europe'
        ];

        $result = 'United Kingdom UK Great Britain England Europe';

        $location->setAncestorsIds($ancestorsIds);
        $parentLocation1->setAlternativeNames(['United Kingdom', 'UK']);
        $parentLocation2->setName('England');
        $parentLocation2->setAlternativeNames(['Great Britain']);
        $parentLocation3->setName('Europe');
        $location->setName('London');

        $mock = $this->getMockBuilder(MatchNamesService::class)
            ->setMethods(['getEntityFromDb'])
            ->getMock();

        $mock->expects($this->once())
            ->method('getEntityFromDb')
            ->willReturn([$parentLocation1, $parentLocation2, $parentLocation3]);

        $this->assertEquals($result, $mock->getLocationParentsNames($location));
    }

    public function testGetEntityParentsNames()
    {
        $location = new Location();
        $attraction = new Attraction();
        $attraction->setLocationId('56d8beb8b023dfcf5d7b4015');
        $possibleNames = [
            'London, United Kingdom',
            'London',
            'London, UK'
        ];
        $result = 'London, United Kingdom London UK UK, abcd';

        $location->setAlternativeNames($possibleNames);
        $mock = $this->getMockBuilder(MatchNamesService::class)
            ->setMethods(['getLocationParentsNames', 'getEntityFromDb'])
            ->getMock();

        $mock->expects($this->once())
            ->method('getEntityFromDb')
            ->willReturn($location);

        $mock->expects($this->once())
            ->method('getLocationParentsNames')
            ->willReturn('London, United Kingdom London London, UK, abcd');

        $this->assertEquals($result, $mock->getEntityParentsNames($attraction));
    }
}