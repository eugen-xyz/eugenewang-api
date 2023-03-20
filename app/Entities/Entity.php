<?php

namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;
use LaravelDoctrine\Extensions\Timestamps\Timestamps;

/**
 * Class Entity
 * @package App\Entities
 */
abstract class Entity
{
    use Timestamps;

    /**
     *
     * The unique ID of this global variable within the database.
     *
     * @ORM\Id
     * @ORM\Column(name="id", type="guid")
     * @ORM\GeneratedValue(strategy="UUID")
     * @var string
     */
    protected $id;

    /**
     * @param string|null $str
     * @return string|null
     */
    protected function castEmptyToNull(?string $str): ?string
    {
        if (empty($str)) {
            return null;
        }

        return $str;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return void
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @param \DateTime $dateTime
     * @return void
     */
    public function setCreatedAt(\DateTime $dateTime): void
    {
        $this->createdAt = $dateTime;
    }
}
