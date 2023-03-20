<?php

namespace App\Entities\Site;

use Doctrine\ORM\Mapping as ORM;
use App\Entities\Entity;

/**
 * class Site
 * @package App\Entities\Site
 * @ORM\Entity
 */
class Site extends Entity
{
    /**
     * @param string $name
     * @param string $domain
     * @throws \Exception
     */
    public function __construct(

        /**
         * @ORM\Column(type="string", nullable=false)
         * @var string $name
         */
        private string $name,

        /**
         * @ORM\Column(type="string", nullable=false)
         * @var string $domain
         */
        private string $domain,
    )
    {
        $this->setName($name);
        $this->setDomain($domain);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return void
     * @throws \Exception
     */
    public function setName(string $name): void
    {
        if (empty($name)) {
            throw new \Exception('Name is required');
        }
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDomain(): string
    {
        return $this->domain;
    }

    /**
     * @param string $domain
     * @return void
     * @throws \Exception
     */
    public function setDomain(string $domain): void
    {
        if (empty($domain)) {
            throw new \Exception('Domain is required');
        }
        $this->domain = $domain;
    }
}
