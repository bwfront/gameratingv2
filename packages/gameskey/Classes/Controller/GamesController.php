<?php

declare(strict_types=1);

namespace Bennet\Gameskey\Controller;

use TYPO3\CMS\Extbase\Persistence\Generic\PersistenceManager;

/**
 * GamesController
 */
class GamesController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * @var PersistenceManager
     */
    protected $persistenceManager = null;

    /**
     * gamesRepository
     *
     * @var \Bennet\Gameskey\Domain\Repository\GamesRepository
     */
    protected $gamesRepository = null;

    /**
     * @param PersistenceManager $persistenceManager
     */
    public function __construct(PersistenceManager $persistenceManager)
    {
        $this->persistenceManager = $persistenceManager;
    }

    /**
     * @param \Bennet\Gameskey\Domain\Repository\GamesRepository $gamesRepository
     */
    public function injectGamesRepository(\Bennet\Gameskey\Domain\Repository\GamesRepository $gamesRepository)
    {
        $this->gamesRepository = $gamesRepository;
    }

    /**
     * action list
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function listAction(): \Psr\Http\Message\ResponseInterface
    {
        $games = $this->gamesRepository->findAll();
        $this->view->assign('games', $games);
        return $this->htmlResponse();
    }
    
    /**
     * action show
     *
     * @param \Bennet\Gameskey\Domain\Model\Games $games
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function showAction(\Bennet\Gameskey\Domain\Model\Games $games): \Psr\Http\Message\ResponseInterface
    {
        $this->view->assign('games', $games);
        return $this->htmlResponse();
    }

    /**
     * action edit
     *
     * @param \Bennet\Gameskey\Domain\Model\Games $games
     * @TYPO3\CMS\Extbase\Annotation\IgnoreValidation("games")
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function editAction(\Bennet\Gameskey\Domain\Model\Games $games): \Psr\Http\Message\ResponseInterface
    {
        $this->view->assign('games', $games);
        return $this->htmlResponse();
    }

    /**
     * action update
     *
     * @param \Bennet\Gameskey\Domain\Model\Games $games
     */
    public function updateAction(\Bennet\Gameskey\Domain\Model\Games $games)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/p/friendsoftypo3/extension-builder/master/en-us/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->gamesRepository->update($games);
        $this->redirect('list');
    }

    /**
     * action rate
     *
     * @param \Bennet\Gameskey\Domain\Model\Games $games
     */
    public function resetAction(\Bennet\Gameskey\Domain\Model\Games $games)
    {
        $games->setRatingCount(0);
        $games->setRating(0);
        $games->setRatingSum(0);
        $this->gamesRepository->update($games);
        $this->persistenceManager->persistAll();
        $returnvalue = ['rating' => 0, 'sum' => 0, 'count' => 0];
        header('Content-Type: application/json');
        echo json_encode($returnvalue);
        exit;
    }

    /**
     * @param \Bennet\Gameskey\Domain\Model\Games $games
     */
    public function rateAction(\Bennet\Gameskey\Domain\Model\Games $games)
    {
        $queryParams = $this->request->getArguments();
        $rating = $queryParams['rating'] ?? 'No input provided';
        $newUserCount = $games->getRatingCount() + 1;
        $newRatingSumTotal = $games->getRatingSum() + $rating;
        $newRatingTotal = round($newRatingSumTotal / $newUserCount, 2);
        $games->setRatingCount($newUserCount);
        $games->setRating($newRatingTotal);
        $games->setRatingSum($newRatingSumTotal);
        $this->gamesRepository->update($games);
        $this->persistenceManager->persistAll();
        $returnvalue = ['rating' => $newRatingTotal, 'sum' => $newRatingSumTotal, 'count' => $newUserCount];
        header('Content-Type: application/json');
        echo json_encode($returnvalue);
        exit;
    }

    /**
     * action new
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function newAction(): \Psr\Http\Message\ResponseInterface
    {
        return $this->htmlResponse();
    }

    /**
     * action create
     *
     * @param \Bennet\Gameskey\Domain\Model\Games $newGames
     */
    public function createAction(\Bennet\Gameskey\Domain\Model\Games $newGames)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/p/friendsoftypo3/extension-builder/master/en-us/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->gamesRepository->add($newGames);
        $this->redirect('list');
    }

    /**
     * action delete
     *
     * @param \Bennet\Gameskey\Domain\Model\Games $games
     */
    public function deleteAction(\Bennet\Gameskey\Domain\Model\Games $games)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/p/friendsoftypo3/extension-builder/master/en-us/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->gamesRepository->remove($games);
        $this->redirect('list');
    }


    public function searchAction()
    {
        $queryParams = $this->request->getArguments();
        $arg = $queryParams['arg'];
        if ($arg == null){
            $func = "findAll";
        }else{
            $func = "filter";
        }
        
        $games = $this->gamesRepository->$func($arg);
        $gamesArray = [];
        foreach ($games as $game) {
            $gamesArray[] = $game->getAll();
        }
        header('Content-Type: application/json');
        echo json_encode($gamesArray);
        exit;
    }

    /**
     * action reset
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function testAction(\Bennet\Gameskey\Domain\Model\Games $games)
    {
        $data = $games->getAll();
        header('Content-Type: application/json');
        echo json_encode($data);
        exit;
    }
}
