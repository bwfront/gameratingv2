<?php

declare(strict_types=1);

namespace Bennet\Gameskey\Domain\Model;


/**
 * Games
 */
class Games extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * title
     *
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $title = null;

    /**
     * description
     *
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $description = null;

    /**
     * Rating /5
     *
     * @var float
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $rating = 0.0;

    /**
     * Count how much users ratet the game
     *
     * @var int
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $ratingCount = 0;

    /**
     * All ratings Sum
     *
     * @var int
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $ratingSum = 0;

    /**
     * Image of the game
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $image = null;

    /**
     * Realese date
     *
     * @var \DateTime
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $relDate = null;

    /**
     * fsk18
     *
     * @var bool
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $fsk18 = false;

    /**
     * action
     *
     * @var bool
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $action = false;

    /**
     * multiplayer
     *
     * @var bool
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $multiplayer = false;

    /**
     * singleplayer
     *
     * @var bool
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $singleplayer = false;

    /**
     * Returns the title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     *
     * @param string $title
     * @return void
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    /**
     * Returns the description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    /**
     * Returns the rating
     *
     * @return float
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Sets the rating
     *
     * @param float $rating
     * @return void
     */
    public function setRating(float $rating)
    {
        $this->rating = $rating;
    }

    /**
     * Returns the ratingCount
     *
     * @return int
     */
    public function getRatingCount()
    {
        return $this->ratingCount;
    }

    /**
     * Sets the ratingCount
     *
     * @param int $ratingCount
     * @return void
     */
    public function setRatingCount(int $ratingCount)
    {
        $this->ratingCount = $ratingCount;
    }

    /**
     * Returns the ratingSum
     *
     * @return int
     */
    public function getRatingSum()
    {
        return $this->ratingSum;
    }

    /**
     * Sets the ratingSum
     *
     * @param int $ratingSum
     * @return void
     */
    public function setRatingSum(int $ratingSum)
    {
        $this->ratingSum = $ratingSum;
    }

    /**
     * Returns the image
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Sets the image
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     * @return void
     */
    public function setImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image)
    {
        $this->image = $image;
    }

    /**
     * Returns the relDate
     *
     * @return \DateTime
     */
    public function getRelDate()
    {
        return $this->relDate;
    }

    /**
     * Sets the relDate
     *
     * @param \DateTime $relDate
     * @return void
     */
    public function setRelDate(\DateTime $relDate)
    {
        $this->relDate = $relDate;
    }

    /**
     * Returns the fsk18
     *
     * @return bool
     */
    public function getFsk18()
    {
        return $this->fsk18;
    }

    /**
     * Sets the fsk18
     *
     * @param bool $fsk18
     * @return void
     */
    public function setFsk18(bool $fsk18)
    {
        $this->fsk18 = $fsk18;
    }

    /**
     * Returns the boolean state of fsk18
     *
     * @return bool
     */
    public function isFsk18()
    {
        return $this->fsk18;
    }

    /**
     * Returns the action
     *
     * @return bool
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Sets the action
     *
     * @param bool $action
     * @return void
     */
    public function setAction(bool $action)
    {
        $this->action = $action;
    }

    /**
     * Returns the boolean state of action
     *
     * @return bool
     */
    public function isAction()
    {
        return $this->action;
    }

    /**
     * Returns the multiplayer
     *
     * @return bool
     */
    public function getMultiplayer()
    {
        return $this->multiplayer;
    }

    /**
     * Sets the multiplayer
     *
     * @param bool $multiplayer
     * @return void
     */
    public function setMultiplayer(bool $multiplayer)
    {
        $this->multiplayer = $multiplayer;
    }

    /**
     * Returns the boolean state of multiplayer
     *
     * @return bool
     */
    public function isMultiplayer()
    {
        return $this->multiplayer;
    }

    /**
     * Returns the singleplayer
     *
     * @return bool
     */
    public function getSingleplayer()
    {
        return $this->singleplayer;
    }

    /**
     * Sets the singleplayer
     *
     * @param bool $singleplayer
     * @return void
     */
    public function setSingleplayer(bool $singleplayer)
    {
        $this->singleplayer = $singleplayer;
    }

    /**
     * Returns the boolean state of singleplayer
     *
     * @return bool
     */
    public function isSingleplayer()
    {
        return $this->singleplayer;
    }

    public function getAll()
    {
        $imageUrl = '';
        if ($this->getImage() !== null) {
            $imageUrl = $this->getImage()->getOriginalResource()->getName();
        }
    
        return [
            'uid' => $this->uid,
            'title' => $this->getTitle(),
            'description' => $this->getDescription(),
            'rating' => $this->getRating(),
            'ratingCount' => $this->getRatingCount(),
            'ratingSum' => $this->getRatingSum(),
            'image' => $imageUrl,
            'relDate' => $this->getRelDate(),
            // 'fsk18' => $this->getFsk18(),
            // 'action' => $this->getAction(),
            // 'multiplayer' => $this->getMultiplayer(),
            // 'singleplayer' => $this->getSingleplayer(),
        ];
    }
    
    
}
