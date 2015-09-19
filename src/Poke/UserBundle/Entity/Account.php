<?php

namespace Poke\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
*	用户账号表
*
* @ORM\Table(name="account_appstore_1")
* @ORM\Entity(repositoryClass="Poke\UserBundle\Entity\AccountRepository")
*/
class Account
{

	/**
	 * @var [integer]
	 *
	 * @ORM\Column(name="id",type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;

	/**
	 * [$userlevel 用户等级]
	 * @var [integer]
	 *
	 * @ORM\Column(name="userlevel",type="integer")
	 */
	private $userLevel;

	/**
	 * [$levelexperience 用户当前等级经验]
	 * @var [type]
	 *
	 * @ORM\Column(name="levelexperience",type="integer")
	 */
	private $levelExperience;

	/**
	 * [$usercoin 用户金币数]
	 * @var [type]
	 *
	 * @ORM\Column(name="usercoin",type="integer")
	 */
	private $userCoin;

	/**
	 * [$userstone 用户宝石数]
	 * @var [type]
	 *
	 * @ORM\Column(name="userstone",type="integer")
	 */
	private $userStone;

	/**
	 * [$chicken 用户鸡腿数]
	 * @var [type]
	 *
	 * @ORM\Column(name="chicken",type="integer")
	 */
	private $chicken;

	/**
	 * [$userphysic 用户体力数]
	 * @var [type]
	 *
	 * @ORM\Column(name="userphysic",type="integer")
	 */
	private $userPhysic;

	/**
	 * [$viplevel 用户vip等级]
	 * @var [type]
	 *
	 * @ORM\Column(name="viplevel",type="integer")
	 */
	private $vipLevel;

	function __construct()
	{
		
	}

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set userLevel
     *
     * @param integer $userLevel
     * @return Account
     */
    public function setUserLevel($userLevel)
    {
        $this->userLevel = $userLevel;
    
        return $this;
    }

    /**
     * Get userLevel
     *
     * @return integer 
     */
    public function getUserLevel()
    {
        return $this->userLevel;
    }

    /**
     * Set levelExperience
     *
     * @param integer $levelExperience
     * @return Account
     */
    public function setLevelExperience($levelExperience)
    {
        $this->levelExperience = $levelExperience;
    
        return $this;
    }

    /**
     * Get levelExperience
     *
     * @return integer 
     */
    public function getLevelExperience()
    {
        return $this->levelExperience;
    }

    /**
     * Set userCoin
     *
     * @param integer $userCoin
     * @return Account
     */
    public function setUserCoin($userCoin)
    {
        $this->userCoin = $userCoin;
    
        return $this;
    }

    /**
     * Get userCoin
     *
     * @return integer 
     */
    public function getUserCoin()
    {
        return $this->userCoin;
    }

    /**
     * Set userStone
     *
     * @param integer $userStone
     * @return Account
     */
    public function setUserStone($userStone)
    {
        $this->userStone = $userStone;
    
        return $this;
    }

    /**
     * Get userStone
     *
     * @return integer 
     */
    public function getUserStone()
    {
        return $this->userStone;
    }

    /**
     * Set chicken
     *
     * @param integer $chicken
     * @return Account
     */
    public function setChicken($chicken)
    {
        $this->chicken = $chicken;
    
        return $this;
    }

    /**
     * Get chicken
     *
     * @return integer 
     */
    public function getChicken()
    {
        return $this->chicken;
    }

    /**
     * Set userPhysic
     *
     * @param integer $userPhysic
     * @return Account
     */
    public function setUserPhysic($userPhysic)
    {
        $this->userPhysic = $userPhysic;
    
        return $this;
    }

    /**
     * Get userPhysic
     *
     * @return integer 
     */
    public function getUserPhysic()
    {
        return $this->userPhysic;
    }

    /**
     * Set vipLevel
     *
     * @param integer $vipLevel
     * @return Account
     */
    public function setVipLevel($vipLevel)
    {
        $this->vipLevel = $vipLevel;
    
        return $this;
    }

    /**
     * Get vipLevel
     *
     * @return integer 
     */
    public function getVipLevel()
    {
        return $this->vipLevel;
    }
}