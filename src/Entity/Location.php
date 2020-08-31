<?php

namespace App\Entity;
use App\Repository\LocationRepository;

use Doctrine\ORM\Mapping as ORM;

/**
 * Location
 *
 * @ORM\Table(name="location")
 * @ORM\Entity
 */
class Location
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="company_name", type="string", length=255, nullable=false)
     */
    private $companyName;

    /**
     * @var int
     *
     * @ORM\Column(name="latitude", type="integer", nullable=false)
     */
    private $latitude;

    /**
     * @var int
     *
     * @ORM\Column(name="longitude", type="integer", nullable=false)
     */
    private $longitude;

    public function getId()
    {
        return $this->id;
    }
    public function getCompanyName()
{
    return $this->companyName;
}

    public function getLatitude()
    {
        return $this->latitude;
    }

    public function getlongitude()
    {
        return $this->longitude;
    }

}
