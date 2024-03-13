<?php

declare(strict_types=1);

namespace Bennet\Gameskey\Tests\Unit\Domain\Model;

use PHPUnit\Framework\MockObject\MockObject;
use TYPO3\TestingFramework\Core\AccessibleObjectInterface;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 */
class GamesTest extends UnitTestCase
{
    /**
     * @var \Bennet\Gameskey\Domain\Model\Games|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();

        $this->subject = $this->getAccessibleMock(
            \Bennet\Gameskey\Domain\Model\Games::class,
            ['dummy']
        );
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getTitleReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getTitle()
        );
    }

    /**
     * @test
     */
    public function setTitleForStringSetsTitle(): void
    {
        $this->subject->setTitle('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('title'));
    }

    /**
     * @test
     */
    public function getDescriptionReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getDescription()
        );
    }

    /**
     * @test
     */
    public function setDescriptionForStringSetsDescription(): void
    {
        $this->subject->setDescription('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('description'));
    }

    /**
     * @test
     */
    public function getRatingReturnsInitialValueForFloat(): void
    {
        self::assertSame(
            0.0,
            $this->subject->getRating()
        );
    }

    /**
     * @test
     */
    public function setRatingForFloatSetsRating(): void
    {
        $this->subject->setRating(3.14159265);

        self::assertEquals(3.14159265, $this->subject->_get('rating'));
    }

    /**
     * @test
     */
    public function getRatingCountReturnsInitialValueForInt(): void
    {
        self::assertSame(
            0,
            $this->subject->getRatingCount()
        );
    }

    /**
     * @test
     */
    public function setRatingCountForIntSetsRatingCount(): void
    {
        $this->subject->setRatingCount(12);

        self::assertEquals(12, $this->subject->_get('ratingCount'));
    }

    /**
     * @test
     */
    public function getRatingSumReturnsInitialValueForInt(): void
    {
        self::assertSame(
            0,
            $this->subject->getRatingSum()
        );
    }

    /**
     * @test
     */
    public function setRatingSumForIntSetsRatingSum(): void
    {
        $this->subject->setRatingSum(12);

        self::assertEquals(12, $this->subject->_get('ratingSum'));
    }

    /**
     * @test
     */
    public function getImageReturnsInitialValueForFileReference(): void
    {
        self::assertEquals(
            null,
            $this->subject->getImage()
        );
    }

    /**
     * @test
     */
    public function setImageForFileReferenceSetsImage(): void
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setImage($fileReferenceFixture);

        self::assertEquals($fileReferenceFixture, $this->subject->_get('image'));
    }

    /**
     * @test
     */
    public function getRelDateReturnsInitialValueForDateTime(): void
    {
        self::assertEquals(
            null,
            $this->subject->getRelDate()
        );
    }

    /**
     * @test
     */
    public function setRelDateForDateTimeSetsRelDate(): void
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setRelDate($dateTimeFixture);

        self::assertEquals($dateTimeFixture, $this->subject->_get('relDate'));
    }

    /**
     * @test
     */
    public function getFsk18ReturnsInitialValueForBool(): void
    {
        self::assertFalse($this->subject->getFsk18());
    }

    /**
     * @test
     */
    public function setFsk18ForBoolSetsFsk18(): void
    {
        $this->subject->setFsk18(true);

        self::assertEquals(true, $this->subject->_get('fsk18'));
    }

    /**
     * @test
     */
    public function getActionReturnsInitialValueForBool(): void
    {
        self::assertFalse($this->subject->getAction());
    }

    /**
     * @test
     */
    public function setActionForBoolSetsAction(): void
    {
        $this->subject->setAction(true);

        self::assertEquals(true, $this->subject->_get('action'));
    }

    /**
     * @test
     */
    public function getMultiplayerReturnsInitialValueForBool(): void
    {
        self::assertFalse($this->subject->getMultiplayer());
    }

    /**
     * @test
     */
    public function setMultiplayerForBoolSetsMultiplayer(): void
    {
        $this->subject->setMultiplayer(true);

        self::assertEquals(true, $this->subject->_get('multiplayer'));
    }

    /**
     * @test
     */
    public function getSingleplayerReturnsInitialValueForBool(): void
    {
        self::assertFalse($this->subject->getSingleplayer());
    }

    /**
     * @test
     */
    public function setSingleplayerForBoolSetsSingleplayer(): void
    {
        $this->subject->setSingleplayer(true);

        self::assertEquals(true, $this->subject->_get('singleplayer'));
    }
}
