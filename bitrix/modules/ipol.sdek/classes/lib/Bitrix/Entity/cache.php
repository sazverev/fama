<?
namespace Ipolh\SDEK\Bitrix\Entity;

class cache extends \CPHPCache
{
    protected $life;

    protected $path = '/IPOLSDEK/';

    protected $inited = false;

    public function __construct()
    {
        parent::__construct();

        $this->life = (defined('IPOLSDEK_CACHE_TIME')) ? IPOLSDEK_CACHE_TIME : 86400;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param mixed $path
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    public function checkCache($hash)
    {
        if(self::isOn()){
            if ($this->InitCache($this->getLife(), $hash, $this->getPath()))
            {
                $this->inited = true;
				return true;
            }
		}

		return false;
    }

    public function getCache($hash)
    {
        $this->checkCache($hash);

        return ($this->inited) ? $this->GetVars() : false;
    }

    public function setCache($hash, $data)
    {
        if(self::isOn()){
			$this->checkCache($hash);
            $this->StartDataCache();
            $this->EndDataCache($data);
        }
    }
	
	protected static function isOn(){
		return !(defined('IPOLSDEK_NOCACHE') && IPOLSDEK_NOCACHE === true);
	}

    /**
     * @return int
     */
    public function getLife()
    {
        return $this->life;
    }

    /**
     * @param int $life
     */
    public function setLife($life)
    {
        $this->life = intval($life);

        return $this;
    }
}