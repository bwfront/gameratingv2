<?php

declare(strict_types=1);

namespace Bennet\Gameskey\Tests\Unit\Controller;

use PHPUnit\Framework\MockObject\MockObject;
use TYPO3\TestingFramework\Core\AccessibleObjectInterface;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;
use TYPO3Fluid\Fluid\View\ViewInterface;

/**
 * Test case
 */
class GamesControllerTest extends UnitTestCase
{
    /**
     * @var \Bennet\Gameskey\Controller\GamesController|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder($this->buildAccessibleProxy(\Bennet\Gameskey\Controller\GamesController::class))
            ->onlyMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllGamesFromRepositoryAndAssignsThemToView(): void
    {
        $allGames = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $gamesRepository = $this->getMockBuilder(\Bennet\Gameskey\Domain\Repository\GamesRepository::class)
            ->onlyMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $gamesRepository->expects(self::once())->method('findAll')->will(self::returnValue($allGames));
        $this->subject->_set('gamesRepository', $gamesRepository);

        $view = $this->getMockBuilder(ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('games', $allGames);
        $this->subject->_set('view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenGamesToView(): void
    {
        $games = new \Bennet\Gameskey\Domain\Model\Games();

        $view = $this->getMockBuilder(ViewInterface::class)->getMock();
        $this->subject->_set('view', $view);
        $view->expects(self::once())->method('assign')->with('games', $games);

        $this->subject->showAction($games);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenGamesToGamesRepository(): void
    {
        $games = new \Bennet\Gameskey\Domain\Model\Games();

        $gamesRepository = $this->getMockBuilder(\Bennet\Gameskey\Domain\Repository\GamesRepository::class)
            ->onlyMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $gamesRepository->expects(self::once())->method('add')->with($games);
        $this->subject->_set('gamesRepository', $gamesRepository);

        $this->subject->createAction($games);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenGamesToView(): void
    {
        $games = new \Bennet\Gameskey\Domain\Model\Games();

        $view = $this->getMockBuilder(ViewInterface::class)->getMock();
        $this->subject->_set('view', $view);
        $view->expects(self::once())->method('assign')->with('games', $games);

        $this->subject->editAction($games);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenGamesInGamesRepository(): void
    {
        $games = new \Bennet\Gameskey\Domain\Model\Games();

        $gamesRepository = $this->getMockBuilder(\Bennet\Gameskey\Domain\Repository\GamesRepository::class)
            ->onlyMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $gamesRepository->expects(self::once())->method('update')->with($games);
        $this->subject->_set('gamesRepository', $gamesRepository);

        $this->subject->updateAction($games);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenGamesFromGamesRepository(): void
    {
        $games = new \Bennet\Gameskey\Domain\Model\Games();

        $gamesRepository = $this->getMockBuilder(\Bennet\Gameskey\Domain\Repository\GamesRepository::class)
            ->onlyMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $gamesRepository->expects(self::once())->method('remove')->with($games);
        $this->subject->_set('gamesRepository', $gamesRepository);

        $this->subject->deleteAction($games);
    }
}
