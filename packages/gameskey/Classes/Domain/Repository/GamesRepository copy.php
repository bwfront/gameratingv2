<?php

declare(strict_types=1);

namespace Bennet\Gameskey\Domain\Repository;

/**
 * The repository for Games
 */
class GamesRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
    public function filter($arg)
    {
        $query = $this->createQuery();
        $query->matching(
            $query->equals($arg, true)
        );
        return $query->execute();
    }
}
